<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BigGara</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> --}}
        <!-- Core theme CSS (includes Bootstrap)-->
        <script src="{{ asset('js/form-validation.js') }}" defer></script>
        <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" ></head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      @livewire('client.header');
      @livewireStyles
    </head>
    <body>
      {{--  --}}
      <div class="warrap" style="background: #ddd; ">
        <div class="container" style="background: #fff; border: groove" >
          <div>
            <h5><b>Thông tin thanh toán</b></h5>
          </div>
          <div>
            <h4>Chúc mừng bạn đặt hàng thành công</h4>
            <div class="infor-customer">
              <p>Họ tên khách hàng : {{ $bill['inforBill']['customerName']}} </p>
              <p>Phương thức thanh toán {{ $bill['inforBill']['payment'] }}</p>
              <p>Địa chỉ giao hàng : {{ $bill['inforBill']['customerShipping'] }} </p> 
              <span> Chúng tôi sẽ liên hệ với khách hàng qua số  <p class="impotionInfo">{{ $bill['inforBill']['customerPhone'] }}</p> và gửi thông tin đơn hàng vào hòm thư điện tử  <span><p class="impotionInfo"> {{ $bill['inforBill']['customerEmail'] }}</p></span> </span>
            </div>
            <div style="margin-top: 3%">
              <h4>Danh sách mặt hàng đã đặt</h4>
              <div class="row">
                <div class="col-9">
                  <div class=" table-responsive" style="padding: 10px">
                    <table class="table borderless" style=" width: 100%;">
                      <thead class="thead-inverse thead-dark"  style="background: #cac4bb">
                        <tr >
                          <th style="width:70%" class="text-left">Sản phẩm</th>
                          <th style="width:10%" class= "text-center">Đơn giá</th>
                          <th style="width:10%">Số lượng</th>
                          <th style="width:10%">Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($bill['itemsinBill'] as $item )
                          <div class="row " id="productlist">
                            <tr>
                              <td scope="row">
                                  <div class="row main align-items-center">
                                      <div class="col-2"><img class="img-fluid" src="{{ $item['image'] }}"></div>
                                      <div class="row" style="padding-left: 5%"><?php echo  $item['productname']; ?></div>
                                  </div>
                              </td>
                              <td> <div class="text-center center ">{{ number_format($item['price']) }}đ</div></td>
                              <td> <div class="text-center center ">{{ $item['quantity'] }}</div></td>
                              <td> <div class="text-center center ">{{ number_format($item['price']*$item['quantity']) }}đ</div></td>
                            </tr>
                          </div>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
                <div class ="col-3">
                  <div class="list-group-item">
                    <div class="row">
                          <div class="col" style="padding-left:12; font-weight:700">
                              <p style="font-size:80%;">Số({{ count($bill['itemsinBill']) }} sản phẩm) </p></div>
                          <div class="col text-right">{{ number_format( $bill['inforBill']['totalbill']) }} đ</div>
                    </div>
                    <div class="row">
                          <div class="col" style="padding-left:12; font-weight:700">
                              <p style="font-size:80%;"> Phí giao hàng</p></div>
                          <div class="col text-right"> 0</div>
                          {{-- <?php echo Cart::subtotal(); ?> --}}
                    </div>
                    <div class="row">
                          <div class="col"style="padding-left:12; font-weight:700">
                              <p style="font-size:80%;"> Đã giảm giá</p> </div>
                          <div class="col text-right">- {{ number_format($bill['inforBill']['reduced']) }}đ</div>
                          {{-- *(1-Cart::content()->saleValue) --}}
                    </div>
                    <div class="row" style="border-top: 1px solid rgba(34, 25, 25, 0.1); padding: 2vh 0;">
                          <div class="col" style="padding-left:12; font-weight:700">
                              <p style="font-size:80%;"> Tổng cộng</p> </div>
                          <div class="col text-right"> {{number_format($bill['inforBill']['totalbill']- $bill['inforBill']['reduced'])  }} đ</div>
                          {{-- *Cart::content()->saleValue --}}
                    </div> 
                </div>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
      @livewireScripts
          </body>
          <footer class="my-5 pt-5 text-muted text-center text-small" >
            <p class="mb-1">&copy; 2017-2021 Company Name</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Privacy</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
          </footer>
        <style>
          .impotionInfo{
            font-size: 20px;
            font-weight: 500;display: inline;
          }
          .table-responsive{
          max-height:450px;
          }
          thead{
            border-top-left-radius: 15%;
          }
          /* custom scolling */
          ::-webkit-scrollbar {
            width: 5px;
          }

          /* Track */
          ::-webkit-scrollbar-track {
            background: #f1f1f1; 
          }
          
          /* Handle */
          ::-webkit-scrollbar-thumb {
            background: #ec9e44; 
          }

          /* Handle on hover */
          ::-webkit-scrollbar-thumb:hover {
            background: #555; 
          }
          
        </style>
</html>