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
      <h5 class="card-header font-weight-light" style="text-align: center;">Bảng công việc</h5>
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
                  <th>Tên khách hàng</th>
                  <th>Số điện thoại</th>
                  <th>Địa chỉ</th>
                  <th>Dòng xe</th>
                  <th>Mã đơn hàng</th>
                  <th>Ghi chú</th>
                  <th>Thời gian đã hẹn</th>
                    <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                            </th>






                         


                         
                </tr>
                      </thead>
                    <tbody>
                    @foreach($orderProducts as $orderProduct)
                <tr>
                     
                           <td class="hidden-xs">1</td>
                       <td>{{$orderProduct->customer->name}}</td>
                    <td>{{$orderProduct->customer->phone}}</td>
                    <td >{{$orderProduct->customer->address}}</td>
                    <td >Toyota Vios 2021</td>
                    <td >{{$orderProduct->code}}</td>
                    <td >{{$orderProduct->note}}</td>
                    <td>{{$orderProduct->orderDate}}</td>
                     <td>

                      <button class="btn7" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Xác nhận công việc</button>


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
          <label style="font-size: 30px;color: blue;text-align: center">Chi tiết đơn hàng</label>
      <div class="container">

          <div>
          <div style="float: left;width: 20%;margin-left: 0px">
          <label for="uname"><b>Tên khách hàng</b></label>
          <input type="text" placeholder="" name="id" required>
           </div>

          <div style="float: left;margin-left: 50px;width: 20%;">
          <label for="uname"><b>SĐT</b></label>
          <input type="text" placeholder="" name="uname" required>
           </div>

           <div style="float: left;width: 20%;margin-left: 50px">
            <label for="uname"><b>Biển số xe</b></label>
            <input type="text" placeholder="" name="id" required>
             </div>

             <div style="float: left;width: 20%;margin-left: 50px">
              <label for="uname"><b>Dòng xe</b></label>
              <input type="text" placeholder="" name="id" required>
               </div>

          </div>

          <div>


            <div style="float: left;margin-left: 0px;width: 100%;">
            <label for="uname"><b>Địa chỉ</b></label>
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
                <label for=""><b>Ghi chú :</b></label>

                <textarea style="margin-left: 20px;" rows="9" cols="120" name="comment" form="usrform">

                </textarea>






      </div>
      <div class="container" style="background-color:white">

        <button type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 14%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;
            margin-left: 70%;

           ">Hoàn thành đơn</button>
        <button  style="margin-left: 20px" type="button" onclick="document.getElementById('id01').style.display='block'" class="cancelbtn">Hủy đơn</button>

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


  <!-- Hủy đơn -->
  <div id="id01" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>
          <label style="font-size: 30px;color: blue;text-align: center">Hủy đơn hàng</label>
      <div class="container">

          <div>
          <div style="float: left;width: 43%;margin-left: 0px">
          <label for="uname"><b>Tên khách hàng</b></label>
          <input type="text" placeholder="" name="id" required>
           </div>

          <div style="float: left;margin-left: 110px;width: 43%;">
          <label for="uname"><b>SĐT</b></label>
          <input type="text" placeholder="" name="uname" required>
           </div>
          </div>

          <div>
            <div style="float: left;width: 43%;margin-left: 0px">
            <label for="uname"><b>Biển số xe</b></label>
            <input type="text" placeholder="" name="id" required>
             </div>

            <div style="float: left;margin-left: 110px;width: 43%;">
            <label for="uname"><b>Địa chỉ</b></label>
            <input type="text" placeholder="" name="uname" required>
             </div>
            </div>

            <div style="float: left;margin-top: 20px;margin-bottom: 20px">
              <form action="/action_page.php">
                <label for="status" >Lý do hủy đơn:</label>
                <select name="status" id="status" style="width: 160px; border-radius:5px;height: 43px;">
                  <option value="">Không gặp được khách</option>
                  <option value="">Gặp vấn đề di chuyển</option>
                  <option value="">Khác</option>



                </select>

              </form>
            </div>

            <textarea style="margin-left: 20px;" rows="9" cols="120" name="comment" form="usrform">

            </textarea>



            <button   style="margin-left: 85%;margin-top: 20px" type="button"  onclick="window.location.href='/listTaskSaleMan'" class="cancelbtn">Hủy đơn</button>




      </div>



    </form>
  </div>

  <script>
    // Get the modal
      var modal = document.getElementById('id01');

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
