<!DOCTYPE html>
<html lang="en">
  <style>
    .close1:hover {
      color: red !important
    }
  </style>
<livewire:header-admin>
  {{-- <livewire:headerdemo> --}}
<body style="background-color: white;">

<livewire:navbar-admin>
  <!-- Bootstrap row -->
  <div class="row" id="body-row">

    <livewire:tele-sales>
        <!-- MAIN -->
          <div class="col p-4" >
            <form action="{{ url('/viewTeleService') }}" method="post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <!--<h1 class="display-4">Thợ</h1>-->
              <!--<div class="card">-->
                  <h5 class="card-header font-weight-light" style="text-align: left;font-size: 28px; background: #fff !important">
                   Tạo đơn
                  
                </h5>
                  <!-- list -->
                  <!--<div id="test">-->
                  <div class="card-body">
                    <div class="imgcontainer">

                     </div>
                    <div class="">
                         
                         <div class="row" >
                              <div class="col col-xs-6">
                                  <form class="d-flex">


                               </form>
                              </div>
                           
                             </div>
                            
                             <div class="row">
                          <div class="col-3">
                          <label for="uname"><b style="font-size: 16px;color: #6c757d!important;">Tên khách hàng</b><span class="text-danger">(*)</span></label>
                          <input type="text" class="form-control" placeholder="Nhập tên" value="{{ old('fullName') }}" placeholder="" name="fullName" required>
                           </div>

                          <div class="col-3">
                          <label for="uname"><b style="font-size: 16px;color: #6c757d!important;">SĐT</b><span class="text-danger">(*)</span></label>
                          <input type="text" class="form-control"  pattern="^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$" placeholder="Nhập số điện thoại" value="{{ old('phoneNumber') }}" placeholder="" name="phoneNumber" required>
                           </div>

                           <div class="col-3" >
                            <label for="uname"><b style="font-size: 16px;color: #6c757d!important;">Email</b><span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Nhập email" value="{{ old('email') }}" placeholder="" name="email" required>
                             </div>

                             <div class="col-3">
                              <label for="uname"><b style="font-size: 16px;color: #6c757d!important;">Dòng xe</b><span class="text-danger">(*)</span></label>
                              <input type="text" class="form-control" placeholder="Nhập dòng xe" value="{{ old('autoMaker') }}" placeholder="" name="autoMaker" >
                               </div>

                          </div>

                          <div class="row">
                         

                            <div class="col-9">
                            <label for="uname"><b style="font-size: 16px;color: #6c757d!important;">Địa chỉ</b><span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" value="{{ old('address') }}" placeholder="" name="address" required>
                             </div>

                             <div class="col-3">
                              <label for="uname"><b style="font-size: 16px;color: #6c757d!important;">Biển số</b><span class="text-danger">(*)</span></label>
                              <input type="text" class="form-control" placeholder="Nhập biển số" value="{{ old('licence') }}" placeholder="" name="licence" >
                               </div>
                            </div>
                          

                                

                                <div>



                                    <div style="float: left;width: 43%;margin-top: 46px;margin-right:0px ;margin-bottom: 20px">
                                      <button type="button" class="btn8" style="padding-top: 6px; padding-bottom: 6px;background-color: #28a745;border-color: #28a745;color: #fff;font-size: 16px;font-family: sans-serif;" id="cart" style="width:auto;" aria-hidden="true" >Đặt dịch vụ</button>
                                      <button type="button" class="btn8" style="padding-top: 6px; padding-bottom: 6px;background-color: #28a745;border-color: #28a745;color: #fff;font-size: 16px;font-family: sans-serif;" id="cart1" style="width:auto;" aria-hidden="true" >Đặt sản phẩm</button>
                                      </div>


                                  </div>
                                  






                                 <div style="width: 100%;float: left;">
                                  <label style="font-size: 30px;color: blue;text-align: center;">Hoá đơn</label>
                                </div>
                                    <!--hoa don-->
                                  


                                    <livewire:tell-man.customers>

                          


                        </div>
                        
                      <div class="mb-3" >
                        <label for="exampleFormControlTextarea1"><h5>Lời nhắn</h5> </label>
                        <textarea wire:model="note" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      {{-- <input type="text" value="{{}}" style="margin-left: 20px;" rows="9" cols="120" name="note" form="usrform"> --}}

                  
                     <!-- onclick="document.getElementById('id060').style.display='block'"-->

                        <div    style="background-color:white;margin-top: 40px;">

                            <button id ="order2" onclick="testAlertDialog()" type="submit" class="btn8" style="float: right;padding-top: 6px; padding-bottom: 6px;background-color: #28a745;border-color: #28a745;color: #fff;font-size: 16px;font-family: sans-serif;">Xác nhận</button>
                            {{-- <button type="button"  class="cancelbtn" style="margin-left: 2% !important;">Đặt lại</button> --}}


                          </div>
                  </div>

                <!--</div>-->
                  <!---->
              <!--</div>-->
          </form>
          </div><!-- Main Col END -->
      </div><!-- body-row END -->
      <!-- add -->














<!--add dịch vụ-->

<div id="myModal" class="modal">
              
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Giỏ Hàng</h5>
          <span class="close">&times;</span>
      </div>
      <div class="modal-body">
               
                  
                  <livewire:tell-man.pagina-service>
             
                      </div>
             
            
                <div class="cart-items" style="margin: 0 16px;">
                  
                    <livewire:tell-man.cart-service>
              
                </div>
               
            
              
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary close-footer">Đóng</button> --}}
                <button type="button" class="btn8 close-footer" style="float: right;padding-top: 6px; padding-bottom: 6px;background-color: #28a745;border-color: #28a745;color: #fff;font-size: 16px;font-family: sans-serif;">Xác nhận</button>
              
            </div>
    </div>
  </div>




<!--Add sản phẩm-->


 <div id="myModal1" class="modal" >
              
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Giỏ Hàng</h5>
          <span class="close1" style="position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold; cursor: pointer">&times;</span>
      </div>
      <div class="modal-body">
               
                  
                  <livewire:tell-man.pagina-product>
             
                      </div>
             
            
                <div class="cart-items" style="margin: 0 16px">
                  
                    <livewire:tell-man.cart-product>
              
                </div>
                
            
              
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary close-footer1">Đóng</button> --}}
                <button type="button"  class="close-footer1 btn8" style="float: right;padding-top: 6px; padding-bottom: 6px;background-color: #28a745 !important;border-color: #28a745 !important;color: #fff;font-size: 16px;font-family: sans-serif;">Xác nhận</button>
              
            </div>
    </div>
  </div> 



<!-- add sản phẩm nếu sản phẩm ko tồn tại -->










<script>
  // Modal
var modal = document.getElementById("myModal");
var btn = document.getElementById("cart");
var close = document.getElementsByClassName("close")[0];


var close_footer = document.getElementsByClassName("close-footer")[0];
var order = document.getElementsByClassName("order")[0];
btn.onclick = function () {
  modal.style.display = "block";
}
close.onclick = function () {
  modal.style.display = "none";
}
close_footer.onclick = function () {
  modal.style.display = "none";
}
order.onclick = function () {
  alert("Thêm giỏ hàng thành công")
  modal.style.display = "none";

}
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
    
   
   
  }
}
    </script>
<!--san pham ddddd-->
<script>
  // Modal
var modal1 = document.getElementById("myModal1");
var btn1 = document.getElementById("cart1");
var close1 = document.getElementsByClassName("close1")[0];


var close_footer1 = document.getElementsByClassName("close-footer1")[0];
var order1 = document.getElementsByClassName("order1")[0];
btn1.onclick = function () {
  modal1.style.display = "block";
}
close1.onclick = function () {
  modal1.style.display = "none";
}
close_footer1.onclick = function () {
  modal1.style.display = "none";
}
order1.onclick = function () {
  alert("Thêm giỏ hàng thành công")
  modal.style.display = "none";

 
}
window.onclick = function (event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
    </script>

{{-- <script>
  // Modal

var order2 = document.getElementsByClassName("order2");

order2.onclick = function () {
  alert("Đặt hàng thành công")
  window.location.href= '/viewTeleService'
}


    </script> --}}
    <script type="text/javascript">

      function testAlertDialog()  {

           alert("Tạo đơn thành công!");
      }

   </script>


  
    
  @livewireScripts
</body>
</html>
