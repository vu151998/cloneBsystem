<!DOCTYPE html>
<html lang="en">
@livewire('header-admin')

<body style="background-color: white;">
    
    <livewire:navbar-admin>
        <!-- Bootstrap row -->
        <div class="row" id="body-row">
 
            <livewire:tele-sales>
                <!-- MAIN -->
                <div class="col p-4">
                    <!--<h1 class="display-4">Thợ</h1>-->
                    <!--<div class="card">-->
                        {{-- @if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif --}}
                    <h5 class="card-header font-weight-light"
                        style="text-align: left;font-size: 28px; background: #fff !important">
                        Chăm sóc khách hàng
                    </h5>
                    <!-- list -->
                    <!--<div id="test">-->
                    <div class="">
                        <div class="imgcontainer">

                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <form class="d-flex">

                                    </form>
                                </div>
                            </div>
                            <div style="width: 100%;float: left;">
                                <label style="font-size: 28px;color: blue;">Danh sách đơn hàng</label>
                            </div>

                            <div class="panel-body">
                                @livewire('tell-man.list-bill')
                            </div>
                        </div>
                    </div>

                    <!--</div>-->
                    <!---->
                    <!--</div>-->
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
                    <livewire:tell-man.pagina-service1>
                </div>
                <div class="cart-items">
                    <livewire:tell-man.cart-service1>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary close-footer">Đóng</button> --}}
                    <button type="button" class="btn btn-primary close-footer ">Xác nhận</button>
                </div>
            </div>
        </div>

        <!--Add sản phẩm-->
        <div id="myModal1" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Giỏ Hàng</h5>
                    <span class="close1">&times;</span>
                </div>
                <div class="modal-body">
                    <livewire:tell-man.pagina-product1>

                </div>
                <div class="cart-items">

                    <livewire:tell-man.cart-product1>

                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary close-footer1">Đóng</button> --}}
                    <button type="button" class="btn btn-primary close-footer1 ">Xác nhận</button>
                </div>
            </div>
        </div>



      








        <script>
            // Modal
            var modal = document.getElementById("myModal");
            var btn = document.getElementById("cart");
            var close = document.getElementsByClassName("close")[0];


            var close_footer = document.getElementsByClassName("close-footer")[0];
            var order = document.getElementsByClassName("order")[0];
            btn.onclick = function() {
                modal.style.display = "block";
            }
            close.onclick = function() {
                modal.style.display = "none";
            }
            close_footer.onclick = function() {
                modal.style.display = "none";
            }
            order.onclick = function() {
                alert("Thêm giỏ hàng thành công")
                modal.style.display = "none";
            }
            window.onclick = function(event) {
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
            btn1.onclick = function() {
                modal1.style.display = "block";
            }
            close1.onclick = function() {
                modal1.style.display = "none";
            }
            close_footer1.onclick = function() {
                modal1.style.display = "none";
            }
            order1.onclick = function() {
                alert("Thêm giỏ hàng thành công")
                modal.style.display = "none";

            }
            window.onclick = function(event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";
                }
            }
        </script>

{{-- <script>
    function ConfirmDelete()
    {
      var x = confirm("Bạn muốn xóa đơn này?");
      if (x)
          return true;
      else
        return false;
    }
</script>  --}}

<script>
    function validate(){
        var birthday = document.getElementById('bday').value;
        if(!isValidDate(birthday)){
            alert("you did not enter a valid birthday");
            return false;
        } 
    }
    </script>

        @livewireScripts

</body>

</html>
