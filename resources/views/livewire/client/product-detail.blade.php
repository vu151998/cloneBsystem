<div class="container-fluid " style="background: #F6F7FB;padding: 20px;width: 80%; box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;">
      
      <div class="detail-all">
        <div class="link">
          <a href="/shophome">Trang chủ</a> 
          {{-- @foreach ($url as $u)
              <span> ></span> <span><a href="/productlist/{{ $u['id'] }}">{{ $u['name'] }}&nbsp;</a></span>
          @endforeach --}}
          <span> ><a >{{ $detailProduct->productName }}</a> </span>
        </div>
        <div class="name-product mb-2"><h4>{{ $detailProduct->productName}}</h4></div>
        <div class="row">
          <div class ="col-12 col-lg-5" >
              <div class="img-detail  col-lg-10 mx-auto slider-for" style="box-shadow: rgb(0 0 0 / 5%) 0px 0px 0px 1px, rgb(209 213 219) 0px 0px 0px 1px inset;border-radius: 10px;">
                @foreach ($detailProduct->img as $img)
                  <div class=""> <img src="{{  $img }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"  style="max-width: 70%;margin: auto;" alt=""></div>
                @endforeach
              </div>
              <div class="sub">
                  <div class="slider-nav mt-1" > 
                    @foreach ($detailProduct->img as $img)
                    <div style="border: 1px solid #cdcdcd;border-radius: 10px;">
                        <img  src="{{  $img }}"  class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"  style="background: red !important; max-width: 60% !important;margin: auto;"alt="">
                    </div>
                    @endforeach
                  </div>
              </div>
            </div>
          <div class ="col-12 col-lg-7">
              <div class ="title">
                <div class="name-brand"><h6>Thương hiệu: <a href="">
                      @if($detailProduct->trandemark != 'none' && $detailProduct->trandemark !='' )
                            {{ $detailProduct->trandemark }}
                      @else
                            Orem
                      @endif
                </a></h6></div>
                <!-- <div class="name-product"><h4>{{ $detailProduct->productName}}</h4>
              </div> -->
            </div>
            <div class="row no-gutters">
              <div class="col-12 col-lg-8 ">
                <div class="row ">
                  <div class="price-product col-12">
                    <div class="price pl-0" style="font-size: 27px;">
                      <span style="font-size:18px; color: black">Giá: <span class="current" style="color: #bf081f;font-size: 27px;">{{  $detailProduct->price  }}₫</span></span><br/>
                      <span class="mt-2" style="font-size:16px; color: black" > Tiết kiệm: <span class="old" style="color: #bf081f;"> {{ $detailProduct->price_base }}₫</span></span>
                    </div>
                  </div>
                  <div class="col-12 mt-2">
                    <div class="quatity-product">
                      <span> Số Lượng: <span>
                      <div class="quantity">
                        <button  wire:click="changeQty('-')"  class="plus">-</button>
                        <input type="number" wire:model="qty" step="1" min="1" max="99" name="quantity" value="{{ $qty }}"  class="input-text qty text plus" size="4" >
                        <button  wire:click="changeQty('+')"  class="plus">+</button>
                      </div>
                    </div>
                    <div class="contact">
                      <button type="button" wire:click="addtocart" class="btn btn-danger">Thêm vào giỏ hàng </button>
                      <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fas fa-comments text-light"></i></a>
                    </div>
                  </div>
                  @if($count>0)
                    <div class="col-12">
                      @livewire('client.product-detail.attribute-product', ['idpro' => $idpro])
                    </div>
                  @endif
                  
                </div>
                
              </div>
              <div class="col-12 col-lg-4 p-1">
                <div class="infor-insurance" style="box-shadow: rgb(0 0 0 / 5%) 0px 0px 0px 1px, rgb(209 213 219) 0px 0px 0px 1px inset;border-radius: 10px;">
                  <div class="row m-0">
                    <div class="col-3 col-lg-6 p-0">
                      <div class="insurance">
                        <div class="logo" >
                          <i class="fas fa-shield-alt" style="color: #F7941D"></i>
                        </div>
                        <p>Hoàn tiền 111% nếu hàng giả</p>
                      </div>
                    </div>
                    <div class="col-3 col-lg-6 p-0">
                      <div class="insurance">
                        <div class="logo">
                          <i class="fas fa-box-open" style=" color: #F7941D"></i>
                        </div>
                        <p>Mở hộp kiểm tra khi nhận hàng</p>
                      </div>
                    </div>
                    <div class="col-3 col-lg-6 p-0">
                      <div class="insurance">
                        <div class="logo">
                          <i class="fas fa-undo" style="color: #F7941D"></i>
                        </div>
                        <p>Đổi trả trong 7 ngày</p>
                      </div>
                    </div>
                    <div class="col-3 col-lg-6 p-0">
                      <div class="insurance">
                        <div class="logo">
                          <i class="fas fa-shipping-fast" style="color: #F7941D"></i>
                        </div>
                        <p>Miễn phí vận chuyển</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @if (isset($categoryProduct) && !is_null($categoryProduct)) 
        <div class="related-products">
          <h4 style=" margin-left: 20px;">Có thể bạn quan tâm</h4>
          <div  class=" responsive">
                    @foreach ($categoryProduct as $product)
                        <div class="single-product">
                          <div class="product-img">
                              <a href="/productdetail/{{$product['id']}}">
                                  {{-- $product['images'] --}}
                                  <img class="default-img" src="{{ $product['images'][0] }}" alt="#">
                                  {{-- @if( array_key_exists('1',$product['images']))
                                  <img class="hover-img" src="{{ $product['images'][1]}}" alt="#">
                                  @endif --}}
                                  <span class="out-of-stock">Hot</span>
                              </a>
                              <div class="button-head">
                                  <div class="product-action">
                                      <a title="Compare" href="{{ route('productdetail.index') }}"><i class="bi bi-cart"></i></i><span>Add to Cart</span></a>
                                      <a title="Wishlist" href="{{ route('productdetail.index') }}"><i class="bi bi-suit-heart"></i></i><span>Add to Wishlist</span></a>
                                  
                                  </div>
                                  <div class="product-action-2">
                                      <a>Giá: </a>
                                      <a style="text-decoration-line: line-through"> 100.000</a>
                                      <a>{{ $product['basePrice'] }} VND</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content">
                              <h3><a href="/productdetail/{{$product['id']}}">{{ $product['fullName'] }}</a></h3>
                              <div class="product-price">
                              </div>
                          </div>
                        </div>
                    @endforeach
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    
            </div>
        </div>
      @endif  
      <hr/>
      <div class="specifications">
        <div class="detail-specifications">
          <h4 >Thông tin chi tiết</h4>
          <div >
            <table class="table table-striped">
              <tbody>
                <tr>
                  <td scope="row"></td>
                  <td>Thương hiệu</td>
                  <td>
                      @if($detailProduct->trandemark != 'none' && $detailProduct->trandemark !='' )
                        {{ $detailProduct->trandemark }}
                      @else
                        Orem
                      @endif
                  </td>
                </tr>
                <tr>
                  <td scope="row"></td>
                  <td>Model</td>
                  <td>{{ $detailProduct['masterCode'] }}
                    {{-- @if(array_key_exists('tradeMarkName', $detailProduct)) --}}
                      {{ $detailProduct['tradeMarkName'] }}
                    {{-- @endif --}}
                  </td>
                </tr>
                <tr>
                  <td scope="row"></td>
                  <td>
                    Xuất xứ
                  </td>
                  <td>
                    Việt Nam
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="description">
        <h4>Lưu ý khi mua hàng</h4>
        <div class="text-description">
          <p>Giá sản phẩm trên BigGara đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p>
        </div>
        
        <div class="video-descripton">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RWupxN50FMo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="show-more">
         <div class="collapse" id="contentId">
            <div class ="more-img ">
              <div class="image-M" >
                <img  src="assets\img\portfolio\1.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
              </div>
             <br>
              <div class="image-M" >
                <img  src="assets\img\portfolio\1.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
              </div>
              <br>
              <div class="image-M" >
                <img  src="assets\img\portfolio\1.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
              </div>
              <br>
              <div class="image-M" >
                <img  src="assets\img\portfolio\1.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
              </div>
              <br>
              <div class="image-M" >
                <img  src="assets\img\portfolio\1.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
              </div>
            </div>
            <p style="margin-top: 10px"></p>
          </div>
         
          {{-- <div style="display: flex;  justify-content: center; padding-top: 10px">
            <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false"
                    aria-controls="contentId">Xem thêm nội dung</button>
          </div> --}}
        </div>
      </div>
     
     
      <div class="fb-comments" data-href="http://127.0.0.1:8000/productdetail" data-width="1000" data-numposts="5"></div>
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="ZwqbkzVw"></script>
</div>
 
<style>
  .container-fluid {
    font-family: sans-serif;

  }

  .fb_iframe_widget{
    display: block;
  }

  .img-fluid {
    width: 60% !important;
    display: block !important;
  }
  .slider-nav > img {
    margin: auto !important;
    display: flex !important
  }
  .plus {
    display: inline-block;
    width: 32px;
    height: 32px;
    line-height: 27px;
    text-align: center;
    font-size: 19px;
    border: 1px solid #dfdfdf;
    font-weight: 500;
  }

  .specifications{
    width: 70%;
    margin: auto !important
  }
  .description  {
    width: 70%;
    margin: auto !important
  }
  .fb-comments {
    display: flex;
    justify-content: center;
    margin: auto !important
  }

  .slider-nav .slick-slide {
    border: none !important
  }
</style>