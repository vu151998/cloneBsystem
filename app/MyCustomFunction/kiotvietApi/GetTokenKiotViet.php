<?php

use App\Models\Image;
use App\Models\Prices;
use App\Models\trademark;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

function getAccessToken($client)
{
    $clientID = "4619cddc-e1c4-4b4b-a447-84513b9fba75";
    $clientSec ='140EFB7D100CFC6EA89A7E1E3C8486297F2D27DD';

    $res = $client->request('POST', 'https://id.kiotviet.vn/connect/token', [
        'form_params' => [
            'scopes' => 'PublicApi.Access',
            'grant_type' => 'client_credentials',
            'client_id' => $clientID,
            'client_secret' => $clientSec,
        ]
    ]);
    $data= json_decode($res->getBody());
    return  $data-> access_token;
}
//Menu category
function getCategories($client){
     $retailer = 'biggarage';
    $query =  ['pageSize' => '99',

        'hierachicalData'=> 'true', // nếu HierachicalData=true thì mình sẽ lấy nhóm hang theo cấp mà không quan tâm lastModifiedFrom. Ngược lại, HierachicalData=false thì sẽ lấy 1 list nhóm hang theo lastModifiedFrom nhưng không có phân cấp

    ];

    $access_token =  getAccessToken($client);
    $res = $client->request(
        'GET',
        'https://public.kiotapi.com/categories',
       [
            'headers' =>
            [
                'Authorization' => "Bearer {$access_token}",
                'Retailer'=> $retailer,
            ],
            'query' => $query,
        ],
    );
    $menuCategories= json_decode($res->getBody(),true);
    return $menuCategories['data'];
}


function getCategoryDetail($client, $id){
    $retailer = 'biggarage';
    $url ='https://public.kiotapi.com/categories/';
    $url .=$id;
    $access_token =  getAccessToken($client );
    $res = $client->request('GET', $url,
    [
        'headers' =>
        [
            'Authorization' => "Bearer {$access_token}",
            'Retailer'=> $retailer,
        ],
    ],
   );
    $DetailCategory= json_decode($res->getBody(),true);
    return $DetailCategory;
}

function getProducts($client , $categoryID, $sortby ,$orderDirection,$pagesize,$cItem){
    $retailer = 'biggarage';
    $query =  [
        'pageSize' => $pagesize,
        'categoryId'=> $categoryID,
        'includePricebook' => 'true',
        'orderBy' =>$sortby,
        'orderDirection' => $orderDirection,
        'currentItem'=> $cItem,
    ];

    $access_token =  getAccessToken($client);
    $res = $client->request(
        'GET',
        'https://public.kiotapi.com/products',
       [
            'headers' =>
            [
                'Authorization' => "Bearer {$access_token}",
                'Retailer'=> $retailer,
            ],
            'query' => $query,
        ],
    );

      $menuProducts= json_decode($res->getBody(),true);

     return $menuProducts['data'];
}
function getTrademarkFromProducts($key,$data){ // get trandemark

    $_data = array();

    foreach ($data as $v) {
        if(array_key_exists($key,$v)){
            if (!in_array($v[$key],$_data)) {
                // find trandemark
                array_push($_data,$v[$key]);
            }
        }
    }
   return $_data;
    }

function getDetailProduct($client , $productID){
    $retailer = 'biggarage';
    $url ='https://public.kiotapi.com/products/'.$productID;
    $access_token =  getAccessToken($client );
    $res = $client->request('GET', $url,
    [
        'headers' =>
        [
            'Authorization' => "Bearer {$access_token}",
            'Retailer'=> $retailer,
        ],
    ],
   );
   $DetailProduct= json_decode($res->getBody(),true);
   return $DetailProduct;
}
// lưu giá trị id, name thành 1 array rồi lưu lại sau đó reverse để có thứ tự đúng
function getUrl($client , &$parent, $currentID){
    $currentCategory = getCategoryDetail($client,$currentID); //get current category
    $p = array('id'=>"$currentID",
                'name'=>$currentCategory['categoryName']); // save current id ,name
    array_push($parent,$p);
    if(array_key_exists('parentId',$currentCategory))
    {
        getUrl($client ,$parent, $currentCategory['parentId']);   //save id , name
    }else{
    $parent = array_reverse($parent);
        }
}
function listProduct($client){
    $query =  [
        'pageSize' => '99',
        'includePricebook' => 'true'
    ];

    $access_token =  getAccessToken($client);
    $res = $client->request(
        'GET',
        'https://public.kiotapi.com/products',
        [
            'headers' =>
                [
                    'Authorization' => "Bearer {$access_token}",
                    'Retailer'=>'biggarage',
                ],
            'query' => $query,
        ],
    );

    $menuProducts= json_decode($res->getBody(),true);
    return $menuProducts['data'];
}

function test(){
    $t = 1;
    for( $i=1 ; $i< 5;$i++){
        $t = $i;
    }
    dd($t);
}
 function saveCategories(){
    $client = new Client();
    // $token  = getGuzzleRequest($client);
  //  dd(getCategories($client));
    $categories = getCategories($client);
    
    foreach($categories as $categorie){
        DB::table('categories')-> insert([
            'category_id'=> $categorie['categoryId'],
            'category_name'=> $categorie['categoryName'],
        ]);
        foreach($categorie['children'] as $son){
            DB::table('categories')-> insert([
                'category_id'=> $son['categoryId'],
                'category_name'=> $son['categoryName'],
                'parent_id' =>$son['parentId']
            ]); 
           if($son['hasChild'] == true){
               foreach($son['children'] as $c){
                DB::table('categories')-> insert([
                    'category_id'=> $c['categoryId'],
                    'category_name'=> $c['categoryName'],
                    'parent_id' =>$c['parentId']
                ]); 
               }
           }
        }
    }
}
function saveProduct($cItem){
    set_time_limit(1000000000000000);
    $client = new Client();
   $products = getProducts($client , '','' ,'','100',$cItem);
    foreach($products as $p){
    $product = getDetailProduct($client,$p['id']);
    if(!isset($product['tradeMarkId'])){
        $product['tradeMarkId'] = '0';
        $product['tradeMarkName']='none';
        }
  
            DB::table('trademarks')->insertOrIgnore([ // insert to table trademark
                'id' => $product['tradeMarkId'],
                'trandemark_name'=> $product['tradeMarkName'],
            ]);
        
       
        
            // $Image =new Image();
        
            // $Image->link = $product['images'][0];
            // $Image->cate_pro_id =  $product['id'];
            // $Image->SAVE();

            if(array_key_exists('attributes', $product)){
            foreach($product['attributes'] as $atr){
            DB::table('attribute_products')->insert([
                'attribute_name'=> $atr['attributeName'],
                'attribute_value'=>$atr['attributeValue'],
                'product_id'=>$atr['productId'],
            ]);
            }}
            
            $Prices = new Prices();//SAVE PRICE
            $Prices->price_base = $product['basePrice'];
            $Prices->product_id =$product['id'];
            $Prices->save();
        
                DB::table('products')->insertOrIgnore([
                    'id' => $product['id'],
                    'productCode'=>$product['code'],
                    'category_id'=>$product['categoryId'],
                    'productName'=>$product['fullName'],
                    'price_id'=> $Prices->id,
                    'trademark_id'=>$product['tradeMarkId'],
                    // 'imgID'=>$Image['id'],
        
                ]);
            
        
            if(array_key_exists('masterProductId', $product)){
                DB::table('products')
                ->where('id',$product['id'])
                ->update([
                    'masterproduct'=>$product['masterProductId'],
                ]);
            }
            foreach($product['inventories'] as $i){ //SAVE INVENTORY
                DB::table('products')
                    ->where('id',$product['id'])
                    ->update([
                    'minqty' => $i['minQuantity'],
                    'maxqty'=>$i['maxQuantity'],
                    'qty'=>$i['minQuantity'],
                ]);
            }
            foreach($product['images'] as $img){ //save img
                DB::table('image')->insertOrIgnore([
                    'link'=>$img,
                    'cate_pro_id'=>$product['id'],
                ]);
            }
    
        }
    }



function matchingCategoryAndProduct(){
    $client = new Client();
    $categories = getCategories($client);
    foreach($categories as $cat){
       $products = getProducts($client , $cat['categoryId'], '' ,'','','');
       foreach($products as $p){
           DB::table('products')->where('productcode', $p['code'])
                                ->update(['categoryID'=>$p['categoryId']]);
       }
       if($cat['hasChild'] == true){
           foreach($cat['children'] as $son){
            $products1 = getProducts($client , $son['categoryId'], '' ,'','','');
            foreach($products1 as $p){
                DB::table('products')->where('productcode', $p['code'])
                                        ->update(['categoryID'=>$p['categoryId']]);
            }
            if($son['hasChild']== true){
                foreach($son['children'] as $sonofson){
                    $products2 = getProducts($client , $sonofson['categoryId'],  '' ,'','','');
                    foreach($products2 as $p){
                        DB::table('products')->where('productcode', $p['code'])
                                                ->update(['categoryID'=>$p['categoryId']]);
                    }
                }
            }
        }
    }
    }
}
function updatePrice(){
    $listProduct = DB::table('prices')->get();
    foreach($listProduct as $p){
        DB::table('prices')
            ->where('id', $p->id)
            ->update(['price' => $p->price_base - 10000]);
    }
}
// //Detail category
// function getDetailCategory($client, $access_token, $id){
//     global $retailer;
//     $res = $client->request('GET', 'https://public.kiotapi.com/categories/{id}',

//     ['headers' =>
//         [
//             'Authorization' => "Bearer {$access_token}",
//             'Retailer'=> $retailer,
//         ],
//     ],
//     [
//         'form_params' => [
//              // thời gian cập nhật
//             'id' => $id,
//             ]
//     ]);
// }
