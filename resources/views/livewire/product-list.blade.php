<section >
            
    <div class="container-fluid list-products-section">
        <div class="link">
            <a href="/shophome">Trang chủ</a> 
            @foreach ($parent as $u)
                <span> ></span> <span><a href="/productlist/{{ $u['id'] }}">{{ $u['name'] }}</a></span>
            @endforeach
        </div>
        <div class="body">
            
            <div class ="row no-gutters">
                <div class ="col-6 col-lg-3" style="background: #F6F7FB;padding-right: 0px;margin:0">
                   <div class ="left">
                        @if (!empty($subcategories))
                        <div class="out-side-title" style="background: #333">
                            <div class ="title" >
                                <h3> Danh mục sản phẩm </h3>
                            </div>
                        </div>
                        
                        <div class="suv" >
                            
                            <div class="sub-category">
                                <ul style="list-style-type:none; padding: 0; margin: 0">
                                    @foreach ($subcategories as $sub )
                                        <li><a  href="/productlist/{{$sub['categoryId']}}"> {{ $sub['categoryName'] }} </a></li>   
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
                                @foreach ($trandemarks as $trandemark)
                                <div class="form-check">
                                    
                                    <input class="form-check-input" value="{{ $trandemark }}" wire:model="Filter" type="checkbox"  id="defaultCheck1">
                                    
                                    <label class="form-check-label" for="defaultCheck1">
                                      <p style="font-weight: 500;font-size: 14px;">{{ $trandemark }}</p>  
                                    </label>
                                  </div>
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
                                        
                                        <button wire:click='inRange(0,100)' style="background: rgb(162, 158, 158); border-radius: 20px" >Dưới 100.000</button>
                                    </li>
                                    
                                    <li style="margin-bottom: 20px">
                                      <button wire:click='inRange(100,500)' style="background: rgb(162, 158, 158); border-radius: 20px" >Từ 100.000 đến 500.000</button>
                                    </li>
                                    
                                    <li style="margin-bottom: 20px">
                                        <button wire:click='inRange(500,2000)' style="background: rgb(162, 158, 158); border-radius: 20px" >Từ 500.000 đến 2.000.000</button>
                                    </li>
                                    
                                    <li style="margin-bottom: 20px">
                                        <button wire:click='inRange(2000,99999999999)' style="background: rgb(162, 158, 158); border-radius: 20px" >Trên 2.000.000</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="input-range">
                                    <div class="title-a"><a style=" opacity: 0.5;">Chọn khoảng giá </a></div>
                                    
                                    <div class="text-price">
                                        <input wire:model.defer="minPrice"
                                        type="number" min="0.00" max="10000.00" step="0.01" />
                                        -
                                        <input wire:model.defer="maxPrice" type="number" min="0.00" max="10000.00" step="0.01" />
                                    </div>
                                    <div class="subm">
                                        <a name="" id="" wire:click="filterByInput" class="btn btn-primary" href="#" role="button" 
                                        style="margin: 5px 0; background: #f6931d; border:none;color: #000">Áp dụng</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class ="col-6 col-lg-9" style="padding: 0; background: #F6F7FB;" >
                    <div class="body-right" style="background: white">
                        <div class="right">
                            <div class ="title">
                                <h3>{{ $name }}</h3>
                            </div>
                            <div class="option-fillter" >
                                <ul>
                                    <li ><button  wire:click="sort('DESC','modifiedDate')" class="sort 
                                        {{ ($ob == 'modifiedDateDESC') ? 'active' : ''}}" >Hàng mới</button></li>
                                    <li> <button  wire:click="sort('ASC','basePrice')"  class="sort
                                        {{ ($ob == 'basePriceASC') ? 'active' : ''}}">Giá thấp</button></li>
                                    <li>  <button  wire:click="sort('DESC','basePrice')"   class="sort
                                        {{ ($ob == 'basePriceDESC') ? 'active' : ''}}">Giá cao</button></li>
                                </ul>
                            </div>
                            
                            <div class="container products">
                                <div class="container-loading"><div wire:loading class="loadingio-spinner-gear-j65clgt9ril"><div class="ldio-3b6ke7xjw08">
                                    <div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                                    </div></div></div>
                                
                                <div wire:loading.remove class="row">
                                    @foreach ($products as $product )
                                        <div class="col-lg-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="/productdetail/{{$product['id']}}">
                                                        {{-- $product['images'] --}}
                                                        @if( array_key_exists('images',$product))
                                                        <img class="default-img" src="{{ $product['images'][0] }}" alt="#">
                                                        @if( array_key_exists('1',$product['images']))
                                                        <img class="hover-img" src="{{ $product['images'][1]}}" alt="#">
                                                        @endif
                                                        <span class="out-of-stock">Hot</span>
                                                        @endif
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a  title="Compare"  wire:click="addToCart({{ $product['id'] }})" ><i class="bi bi-cart"></i>
                                                                </i><span>Giỏ hàng</span></a>
                                                            <a title="Wishlist" href="{{ route('productdetail.index') }}"><i class="bi bi-suit-heart"></i></i><span>Yêu thích</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a>Giá: </a>
                                                            <a style="text-decoration-line: line-through"> 100.000</a>
                                                            <a>{{ $product['basePrice'] }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="/productdetail/{{$product['id']}}">{{ $product['fullName'] }}</a></h3>
                                                    <div class="product-price">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
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
   
</section>