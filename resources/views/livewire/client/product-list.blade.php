<div class="container-fluid ">
        <div class="link">
            <a href="/shophome">Trang chủ</a> 
            {{-- @foreach ($parent as $u)
                <span> ></span> <span><a href="/productlist/{{ $u['id'] }}">{{ $u['name'] }}</a></span>
            @endforeach --}}
        </div>
        <div class="body">
            <div class ="row no-gutters">
                <div class ="col-6 col-lg-2" style="background: #F6F7FB;padding-right: 0px;margin:0">
                   <div class ="left">
                        @if (!$subcategories->isEmpty())
                            <div class="out-side-title" style="background: #333">
                                <div class ="title" >
                                    <h3> Danh mục sản phẩm </h3>
                                </div>
                            </div>
                            
                            <div class="suv" >
                                <div class="sub-category">
                                    <ul style="list-style-type:none; padding: 0; margin: 0">
                                        @foreach ($subcategories as $sub )
                                            <li><a  href="/productlist/{{$sub->category_id}}"> {{ $sub->category_name }} </a></li>   
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="out-side-title" style="background: #333">
                            <div class ="title">
                                <h3> Thương hiệu </h3>
                            </div>
                        </div>
                        
                        <div class="manufacturer">
                           
                            <div class="name-manufacturer">
                                @foreach ($Trademarks as $trandemark)
                               
                                    <div class="form-check">
                                        
                                        <input class="form-check-input" value="{{ $trandemark->trademark_id }}" wire:model="Filter" type="checkbox" 
                                         id="defaultCheck1" >
                                        
                                        <label class="form-check-label" for="defaultCheck1">
                                        <p style="font-weight: 500;font-size: 14px;">{{ $trandemark->trademark }}</p>  
                                        </label>
                                    </div> 
                                    {{-- <div>@json($Filter)</div> --}}
                                @endforeach
                            </div>
                        </div>
                        <div class="out-side-title" style="background: #333">
                            <div class ="title">
                                <h3>  Khoảng giá </h3>
                            </div>
                        </div>
                        
                        <div class="filter-price">
                           
                            <div class="button-price">
                                <ul style="list-style-type:none; padding: 0;">
                                        <li style="margin-bottom: 20px">
                                            <button wire:click="inRange('-1','-2')" style="background: rgb(162, 158, 158); border-radius: 20px" >
                                                Tất cả
                                            </button>
                                        </li>
                                    @foreach($range as $r)
                                        <li style="margin-bottom: 20px">
                                            <button wire:click="inRange('{{ $r['min'] }}','{{ $r['max'] }}')" style="background: rgb(162, 158, 158); border-radius: 20px" >
                                                Từ {{ $r['min']  }}VNĐ đến {{ $r['max'] }}VNĐ
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="input-range">
                                    <div class="title-a"><a style=" opacity: 0.5;">Chọn khoảng giá </a></div>
                                   
                                    <div class="text-price">
                                        <input wire:model.defer="min_price"
                                        type="number" min="0.00" max="10000.00" step="0.01" />
                                        -
                                        <input wire:model.defer="max_price" type="number" min="0.00" max="10000.00" step="0.01" />
                                    </div>
                                    <div class="subm">
                                        <a name="" id="" wire:click="inputInRange" class="btn btn-primary" href="#" role="button" 
                                        style="margin: 5px 0; background: #f6931d; border:none;color: #000">Áp dụng</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class ="col-6 col-lg-10" style="padding: 0; background: #F6F7FB;" >
                
                    <div class="body-right" style="background: white">
                        <div class="right">
                            <div class ="title">
                                <h3>{{ $cateName[0] }}</h3>
                            </div>
                            <div class="option-fillter" style="padding-bottom: 2%">
                                <ul>
                                    {{-- <li ><button  wire:click="sort('DESC','modifiedDate')" class="sort 
                                        {{ ($ob == 'modifiedDateDESC') ? 'active' : ''}}" >Hàng mới</button></li> --}}
                                    <li> <button  wire:click="sort('ASC')"  class="sort
                                        {{ ($ob == 'ASC') ? 'active' : ''}}">Giá thấp</button></li>
                                    <li>  <button  wire:click="sort('DESC')"   class="sort
                                        {{ ($ob == 'DESC') ? 'active' : ''}}">Giá cao</button></li>
                                </ul>
                            </div>
                            
                            <div class="container-fluid products">
                                <div class="container-loading"><div wire:loading class="loadingio-spinner-gear-j65clgt9ril"><div class="ldio-3b6ke7xjw08">
                                    <div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                                    </div></div></div>
                                
                                <div wire:loading.remove class="row">
                                    @foreach ($products as $product )
                                        @if(is_null($product->masterproduct))
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="/productdetail/{{ $product->id }}">
                                                                @if (isset($product->img) && !is_null($product->img)) 
                                                                    <img class="default-img" height="300px" style="object-fit: contain;
                                                                    background: white;" src="{{ $product->img['0'] }}" alt="#">
                                                                    @if(in_array('1',$product->img))
                                                                        <img class="hover-img" src="{{ $product->img['1'] }}" alt="#">
                                                                    @endif
                                                                @endif
                                                                
                                                            </a>
                                                            <div class="button-head">
                                                                <div class="product-action">
                                                                    <a  title="Compare"  wire:click="addToCart('{{ $product->id}}', '{{ $product->productName }}' )" ><i class="bi bi-cart"></i>
                                                                        </i><span>Giỏ hàng</span></a>
                                                                    <a title="Wishlist" wire:click="addtowishlist('{{ $product->id}}', '{{ $product->productName }}' )"><i class="bi bi-suit-heart"></i></i><span>Yêu thích</span></a>
                                                                </div>
                                                                <div class="product-action-2">
                                                                    <a>Giá: </a>
                                                                    <a style="text-decoration-line: line-through">{{ $product->price_base }}</a>
                                                                    <a>{{ $product->price }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3><a href="/productdetail/{{$product->id}}">{{ $product->productName }}</a></h3>
                                                            <div class="product-price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endif
                                    @endforeach
                                    
                                </div>
                                <div class="d-flex justify-content-center">
                                    {{ $products->links() }}
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('element.updated', (el, component) => {
            let buttons = document.querySelectorAll('div.option-fillter > ul>li button');

            buttons.forEach(button =>{
            button.addEventListener('click',function(){
                buttons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            })
            })
        }); 
    });
    </script>
   
