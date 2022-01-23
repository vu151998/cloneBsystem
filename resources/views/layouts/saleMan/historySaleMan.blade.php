<!DOCTYPE html>
<html lang="en">

<livewire:header-admin />

<body style="background-color: white;">

  <livewire:navbar-admin/>
  <!-- Bootstrap row -->

  <div class="row" id="body-row">

    <livewire:sale-man-sidebar />
    <!-- MAIN -->
    <div class="col p-4">
      <!--<h1 class="display-4">Thợ</h1>-->
      <!--<div class="card">-->
      <h5 class="card-header font-weight-light" style="text-align: center;">Lịch sử nhiệm vụ</h5>
      <!-- list -->
      <!--<div id="test">-->
      <div class="card-body">
        <div class="container">
           
           

              
               <div class="row">
                  <div class="col col-xs-6">
                 <form class="d-flex">


                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm tên người dùng"
                    aria-label="Search" style="width :220px;border-color: rgba(0,0,0,0.6);height: 43px;">
                </div>

                <div style="float: left;">

                  <button class="btn btn-outline-success" type="submit"><i class="	fas fa-search"></i></button>
                </div>



              </form>
                    </div>
              

                 </div>
              
              <div class="panel-body">
                 <table class="table table-striped table-bordered table-list nowrap" >
                    <thead>
                       <tr style="color: blue;">
                        
                          <th class="hidden-xs">STT</th>
                  <th>Mã đơn hàng</th>
                  <th>Tên khách hàng</th>
                  <th>Số điện thoại</th>
                  <th>Địa chỉ</th>

                  <th>Biển số xe</th>
                  <th>Thời gian hoàn thành</th>
                  <th>Tổng tiền</th>
                  <th>Khách đã trả</th>
                  <th>Khách nợ</th>
                    <th>Trạng thái</th>






                         


                         
                </tr>
                      </thead>
                    <tbody>
                    @foreach($orderProducts as $index => $orderProduct)
                    <tr>
                     
                           <td class="hidden-xs">
                            {{($orderProducts->currentPage()-1) * $orderProducts->perPage() + $index + 1}}
                        </td>
                      <td>{{$orderProduct->code}}</td>
                       <td>{{$orderProduct->customer->name}}</td>
                    <td>{{$orderProduct->customer->phone}}</td>
                    <td >{{$orderProduct->customer->address}}</td>
                    <td >{{$orderProduct->customer->licensePlate}}</td>

                    <td>{{$orderProduct->orderDate}}</td>
                    <td >100.000</td>
                    <td >100.000</td>
                    <td >0</td>
                     <td>

                      <button class="btn7" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
                          @if($orderProduct->status == 1)
                              thành công
                          @else
                              chưa thành công
                          @endif

                      </button>


                    </td>



                   


                        
                </tr>
                    @endforeach
                     
              </tbody>
            </table>
                </div>
              
          {{$orderProducts->links()}}
             
            
           

        </div>
      </div>
      <!--</div>-->
      <!---->
      <!--</div>-->
    </div><!-- Main Col END -->
  </div><!-- body-row END -->




  <!-- Chi tiết đơn hàng -->

  <div id="id02" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>
          <label style="font-size: 30px;color: blue;text-align: center">Danh sách dịch vụ phụ tùng trực tiếp cho người tiêu dùng</label>
          <label style="font-size: 30px;color: blue;text-align: center">Ngày 12 tháng 12 năm 2021</label>
      <div class="container">

          <div>
          <div style="float: left;width: 43%;margin-left: 0px">
          <label for="uname"><b>Thông tin khách hàng</b></label>
          <input type="text" placeholder="" name="id" required>
           </div>

          <div style="float: left;margin-left: 110px;width: 43%;">
          <label for="uname"><b>Mã đơn hàng</b></label>
          <input type="text" placeholder="" name="uname" required>
           </div>
          </div>

          <div>
            <div style="float: left;width: 43%;margin-left: 0px">
            <label for="uname"><b>Biển số xe</b></label>
            <input type="text" placeholder="" name="id" required>
             </div>

            <div style="float: left;margin-left: 110px;width: 43%;">
            <label for="uname"><b>Giờ tạo</b></label>
            <input type="text" placeholder="" name="uname" required>
             </div>
            </div>



            <div class="panel-body">
                   <table class="table table-striped table-bordered table-list nowrap" >
                      <thead>
                         <tr style="color: blue;">
                          
                            <th class="hidden-xs">STT</th>
                    <th>Mã DV-SP</th>
                    <th>Tên dịch vụ/Sản phẩm </th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>

                    <th>Ghi chú</th>







                           


                           
                  </tr>
                        </thead>
                      <tbody>
                  <tr>
                       
                             <td class="hidden-xs">1</td>
                         <td>MDV24234</td>
                      <td>Siêu âm kim phun xăng</td>
                      <td >1</td>
                      <td>100.000</td>
                      <td >100.000</td>

                      <td>Không có gì</td>



                     


                          
                  </tr>
                        <tr>
                           
                           <td class="hidden-xs">2</td>
                      <td>MSP24544</td>
                      <td>Lốp xe-50cm-den</td>
                      <td >1</td>
                      <td>100.000</td>
                      <td >100.000</td>

                      <td>Không có gì</td>


                          
                  </tr>
                        <tr>
                          
                           <td class="hidden-xs">3</td>
                      <td>MDV24234</td>
                      <td>Siêu âm kim phun xăng</td>
                      <td >1</td>
                      <td>100.000</td>
                      <td >100.000</td>

                      <td>Không có gì</td>


                          
                  </tr>
                        <tr>
                          
                           <td class="hidden-xs">4</td>
                       <td>MDV24234</td>
                      <td>Siêu âm kim phun xăng</td>
                      <td >1</td>
                      <td>100.000</td>
                      <td >100.000</td>

                      <td>Không có gì</td>

                          
                  </tr>
                       
                </tbody>
              </table>
                  </div>

                <div>
                <div style="float: left;width: 10%;margin-left: 0px">
                <label for="uname"><b>Đã thanh toán:</b></label>
                </div>
                <div style="float: left;width: 20%;margin-left: 0px">
                <input type="text" placeholder="" name="id" required>
                 </div>

                 <div style="float: left;width: 10%;margin-left: 20px">
                  <label for="uname"><b>Tổng tiền</b></label>
                  </div>
                  <div style="float: left;width: 20%;margin-left: 0px">
                  <input type="text" placeholder="" name="id" required>
                   </div>

                   <div style="float: left;width: 10%;margin-left: 20px">
                    <label for="uname"><b>Khách nợ</b></label>
                    </div>
                    <div style="float: left;width: 20%;margin-left: 0px">
                    <input type="text" placeholder="" name="id" required>
                     </div>
                </div>

                <label for=""><b>Người lập phiếu : </b></label>
                <label for=""><b>Lương Anh Gia Khánh</b></label>
                <div>
                <label for=""><b>Ghi chú :</b></label>
              </div>
            <textarea style="margin-left: 20px;" rows="9" cols="120" name="comment" form="usrform">

            </textarea>






      </div>
      <div class="container" style="background-color:white">

        <button  onclick="document.getElementById('id02').style.display='none'" type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 12%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;
            margin-left: 80%;

           ">Trở về</button>

      </div>



    </form>
  </div>

  <script>
    // Get the modal
      var modal = document.getElementById('id02');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
  </script>





  <!--Thông báo bạn muốn xóa hay ko-->

  <div class="overlay" id="dialog-container">
    <div class="popup">
      <p>Bạn có muốn xóa không ?</p>
      <div class="text-right">
        <button class="dialog-btn btn-cancel" id="cancel">Không</button>
        <button class="dialog-btn btn-primary" id="confirm">Có</button>
      </div>
    </div>
  </div>



  <!--Thông báo bạn muốn xóa hay ko-->
  <script>
    document.getElementById("btn-show-dialog").onclick = function(){show_dialog()};
  var overlayme = document.getElementById("dialog-container");

  function show_dialog() {
   /* A function to show the dialog window */
      overlayme.style.display = "block";
  }

  // If confirm btn is clicked , the function confim() is executed
  document.getElementById("confirm").onclick = function(){confirm()};
  function confirm() {
   /* code executed if confirm is clicked */
      overlayme.style.display = "none";
  }

  // If cancel btn is clicked , the function cancel() is executed
  document.getElementById("cancel").onclick = function(){cancel()};
  function cancel() {
   /* code executed if cancel is clicked */
      overlayme.style.display = "none";
  }

  </script>

</body>

</html>
