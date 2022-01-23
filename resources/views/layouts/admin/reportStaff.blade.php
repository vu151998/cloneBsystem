<!DOCTYPE html>
<html lang="en">
  <livewire:header-admin />

<body style="background-color: white;">

  <livewire:navbar-admin />
  <!-- Bootstrap row -->
  <div class="row" id="body-row">

    <livewire:counter-admin />
    <!-- MAIN -->
    <div class="col p-4">
      <!--<h1 class="display-4">Thợ</h1>-->
      <!--<div class="card">-->
      <h5 class="card-header font-weight-light" style="text-align: center;">BÁO CÁO CHI TIẾT THỢ</h5>
      <!-- list -->
      <!--<div id="test">-->
      <div class="card-body">
        <div class="container">
           
           

              
               <div class="row">
                  <div class="col col-xs-6">
                 <form class="d-flex">


                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm tên thợ" aria-label="Search"
                    style="width :210px;border-color: rgba(0,0,0,0.6);height: 43px;" required>
                </div>

                <div style="float: left;">

                  <button class="btn btn-outline-success" type="submit"><i class="	fas fa-search"></i></button>
                </div>





              </form>
                    </div>
                  <div class="col col-xs-6 text-right">
                     
                    </div>
            <div>
              <form action="/action_page.php">
                <label for="status" style="margin-top: 29px;">Trạng thái:</label>
                <select name="status" id="status"
                  style="width: 150px; border-radius:5px;height: 43px;margin-right: 300px;text-align: center;">
                  <option value="">Chờ đơn</option>
                  <option value="">Đang bận </option>


                </select>

              </form>
            </div>

            <div>
              <form action="/action_page.php">
                <label for="status" style="margin-left: 40px;">Tổng đơn hoàn thành:</label>
                <select name="status" id="status"
                  style="width: 150px; border-radius:5px;height: 43px;text-align: center;">
                  <option value="">Trong ngày</option>
                  <option value="">Trong tuần</option>
                  <option value="">Trong tháng</option>


                </select>

              </form>
            </div>

                 
          </div>
              
              <div class="panel-body">
                 <table class="table table-striped table-bordered table-list">
                    <thead>
                       <tr style="color: blue;">
                        
                          <th class="hidden-xs">ID</th>
                   
                  <th>Tên</th>
                  <th>Trạng thái</th>
                  <th>Số đơn hoàn thành</th>
                  <th>Số đơn chưa hoàn thành</th>
                  <th>Số đơn bị hủy</th>
                  <th>Số đơn bị phản hồi</th>
                  <th>Số đơn tích cực</th>
                  <th>Số đơn tiêu cực</th>


                </tr>
                      </thead>
                    <tbody>
                <tr>
                     
                         <td class="hidden-xs">1</td>
                     <td><button class="btn7" onclick="document.getElementById('id012').style.display='block'"
                      style="width:auto;">Phan Phi Hung</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id025').style.display='block'"
                      style="width:auto;">Đang bận</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id031').style.display='block'"
                      style="width:auto;">5</button></td>
                  <td>2</td>
                  <td>3</td>
                  <td>5</td>
                  <td>2</td>
                  <td>3</td>


                </tr>
                      <tr>
                         
                         <td class="hidden-xs">2</td>
                     <td><button class="btn7" onclick="document.getElementById('id012').style.display='block'"
                      style="width:auto;">Phan Phi Hung</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id025').style.display='block'"
                      style="width:auto;">Đang bận</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id031').style.display='block'"
                      style="width:auto;">5</button></td>
                  <td>2</td>
                  <td>3</td>
                  <td>5</td>
                  <td>2</td>
                  <td>3</td>


                  </td>

                        
                </tr>
                      <tr>
                        
                         <td class="hidden-xs">3</td>
                     <td><button class="btn7" onclick="document.getElementById('id012').style.display='block'"
                      style="width:auto;">Phan Phi Hung</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id025').style.display='block'"
                      style="width:auto;">Đang bận</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id031').style.display='block'"
                      style="width:auto;">5</button></td>
                  <td>2</td>
                  <td>3</td>
                  <td>5</td>
                  <td>2</td>
                  <td>3</td>

                  </td>

                        
                </tr>
                      <tr>
                        
                        <td class="hidden-xs">4</td>
                     <td><button class="btn7" onclick="document.getElementById('id012').style.display='block'"
                      style="width:auto;">Phan Phi Hung</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id025').style.display='block'"
                      style="width:auto;">Đang bận</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id031').style.display='block'"
                      style="width:auto;">5</button></td>
                  <td>2</td>
                  <td>3</td>
                  <td>5</td>
                  <td>2</td>
                  <td>3</td>

                  </td>
                        
                </tr>
                     
              </tbody>
            </table>
                </div>
              
               <div class="row">
                  <div class="col col-xs-4">Trang 1 của 5 </div>
                  <div class="col col-xs-8">
                     <ul class="pagination hidden-xs pull-right">
                        <li><a href="#">1</a>
                          </li>
                        <li><a href="#">2</a>
                          </li>
                        <li><a href="#">3</a>
                          </li>
                        <li><a href="#">4</a>
                          </li>
                        <li><a href="#">5</a>
                          </li>
                       </ul>
                     <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a>
                          </li>
                        <li><a href="#">»</a>
                          </li>
                       </ul>
                    </div>
                 </div>
             
            
           

        </div>
      </div>
      <!--</div>-->
      <!---->
      <!--</div>-->
    </div><!-- Main Col END -->
  </div><!-- body-row END -->





  <script>
    // code Javascript edit
  const ipnElement = document.querySelector('#ipnPassword')
 const btnElement = document.querySelector('#btnPassword')

// step 2
btnElement.addEventListener('click', function() {
  // step 3
  const currentType = ipnElement.getAttribute('type')
  // step 4
  ipnElement.setAttribute(
    'type',
    currentType === 'password' ? 'text' : 'password'
  )
})
  </script>

  <!--detail -->

  <div id="id012" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id012').style.display='none'" class="close"
          title="Close Modal">&times;</span>

      </div>

      <div class="container">


        <div style="float: left;width: 44%;margin-left: 0px">
          <label for="uname"><b>Tên thợ</b></label>
          <input type="text" placeholder="" name="id" required>
        </div>

        <div style="float: left;">
          <form action="/action_page.php">
            <label for="status" style="margin-left: 30px;margin-top: 45px;">Đơn hàng:</label>
            <select name="status" id="status" style="width: 150px; border-radius:5px;height: 43px;">
              <option value="">Tất cả</option>
              <option value="">Trong ngày</option>



            </select>

          </form>
        </div>

        <div style="float: left;">
          <form action="/action_page.php">
            <label for="status" style="margin-left: 30px;margin-top: 45px;">Trạng thái:</label>
            <select name="status" id="status" style="width: 150px; border-radius:5px;height: 43px;">
              <option value="">Đã hoàn thành</option>
              <option value="">Chưa hoàn thành</option>
              <option value="">Tạm hoãn</option>


            </select>

          </form>
        </div>

        <!--Detail sản phẩm-->

        <div style="float: left;width: 44%;margin-top: 20px;margin-right:100% ;">
          <label for="uname" style="font-size: 30px;color: blue;"><b>Đơn hàng sản phẩm</b></label>
        </div>



         <div class="panel-body">
               <table class="table table-striped table-bordered table-list">
                  <thead>
                     <tr style="color: blue;">
                      
                        <th class="hidden-xs">STT</th>
                    



                <th>Mã đơn hàng</th>




                <th>Tên khách hàng </th>






                <th>Thời gian </th>

                <th>Thợ</th>

                <th>Trạng thái</th>
                <th>Tổng thanh toán</th>







                       


                       
              </tr>
                    </thead>
                  <tbody>
              <tr>
                   
                       <td class="hidden-xs">1</td>
                      





                <td><button class="btn7" onclick="document.getElementById('id08').style.display='block'"
                    style="width:auto;">MHD001</button></td>


                <td><button class="btn7" onclick="document.getElementById('id02').style.display='block'"
                    style="width:auto;">Phan Phi Hùng</button></td>



                <td>20/02/2022</td>

                <td><button class="btn7" onclick="document.getElementById('id010').style.display='block'"
                    style="width:auto;">Tô Xuân Anh Quân</button></td>




                <td><button class="btn7" onclick="document.getElementById('id029').style.display='block'"
                    style="width:auto;">Đã hoàn thành</button></td>
                <td>10.000</td>


                 


                      
              </tr>
                    <tr>
                       
                       <td class="hidden-xs">2</td>
                      






                <td><button class="btn7" onclick="document.getElementById('id08').style.display='block'"
                    style="width:auto;">MHD001</button></td>


                <td><button class="btn7" onclick="document.getElementById('id02').style.display='block'"
                    style="width:auto;">Phan Phi Hùng</button></td>



                <td>20/02/2022</td>

                <td><button class="btn7" onclick="document.getElementById('id010').style.display='block'"
                    style="width:auto;">Tô Xuân Anh Quân</button></td>



                <td><button class="btn7" onclick="document.getElementById('id029').style.display='block'"
                    style="width:auto;">Đã hoàn thành</button></td>
                <td>10.000</td>


                      
              </tr>
                    <tr>
                      
                      <td class="hidden-xs">3</td>
                      






                <td><button class="btn7" onclick="document.getElementById('id08').style.display='block'"
                    style="width:auto;">MHD001</button></td>


                <td><button class="btn7" onclick="document.getElementById('id02').style.display='block'"
                    style="width:auto;">Phan Phi Hùng</button></td>



                <td>20/02/2022</td>

                <td><button class="btn7" onclick="document.getElementById('id010').style.display='block'"
                    style="width:auto;">Tô Xuân Anh Quân</button></td>



                <td><button class="btn7" onclick="document.getElementById('id029').style.display='block'"
                    style="width:auto;">Đã hoàn thành</button></td>
                <td>10.000</td>


                      
              </tr>
                    <tr>
                      
                       <td class="hidden-xs">4</td>
                      






                <td><button class="btn7" onclick="document.getElementById('id08').style.display='block'"
                    style="width:auto;">MHD001</button></td>


                <td><button class="btn7" onclick="document.getElementById('id02').style.display='block'"
                    style="width:auto;">Phan Phi Hùng</button></td>



                <td>20/02/2022</td>

                <td><button class="btn7" onclick="document.getElementById('id010').style.display='block'"
                    style="width:auto;">Tô Xuân Anh Quân</button></td>



                <td><button class="btn7" onclick="document.getElementById('id029').style.display='block'"
                    style="width:auto;">Đã hoàn thành</button></td>
                <td>10.000</td>

                      
              </tr>
                   
            </tbody>
          </table>
              </div>
            
             <div class="row">
                <div class="col col-xs-4">Trang 1 của 5 </div>
                <div class="col col-xs-8">
                   <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a>
                        </li>
                      <li><a href="#">2</a>
                        </li>
                      <li><a href="#">3</a>
                        </li>
                      <li><a href="#">4</a>
                        </li>
                      <li><a href="#">5</a>
                        </li>
                     </ul>
                   <ul class="pagination visible-xs pull-right">
                      <li><a href="#">«</a>
                        </li>
                      <li><a href="#">»</a>
                        </li>
                     </ul>
                  </div>
               </div>
           
          
        <!--Dịch vu-->
        <label for="uname" style="font-size: 30px;color: blue;"><b>Đơn hàng dịch vụ</b></label>






         <div class="panel-body">
               <table class="table table-striped table-bordered table-list">
                  <thead>
                     <tr style="color: blue;">
                      
                        <th class="hidden-xs">STT</th>
                    



                <th>Mã đơn hàng</th>




                <th>Tên khách hàng </th>






                <th>Thời gian </th>

                <th>Thợ</th>

                <th>Trạng thái</th>
                <th>Tổng thanh toán</th>







                       


                       
              </tr>
                    </thead>
                  <tbody>
              <tr>
                   
                       <td class="hidden-xs">1</td>
                      





                <td><button class="btn7" onclick="document.getElementById('id020').style.display='block'"
                    style="width:auto;">MHD001</button></td>


                <td><button class="btn7" onclick="document.getElementById('id021').style.display='block'"
                    style="width:auto;">Phan Phi Hùng</button></td>



                <td>20/02/2022</td>

                <td><button class="btn7" onclick="document.getElementById('id022').style.display='block'"
                    style="width:auto;">Tô Xuân Anh Quân</button></td>




                <td><button class="btn7" onclick="document.getElementById('id030').style.display='block'"
                    style="width:auto;">Đã hoàn thành</button></td>
                <td>10.000</td>


                 


                      
              </tr>
                    <tr>
                       
                       <td class="hidden-xs">2</td>
                      






                <td><button class="btn7" onclick="document.getElementById('id020').style.display='block'"
                    style="width:auto;">MHD001</button></td>


                <td><button class="btn7" onclick="document.getElementById('id021').style.display='block'"
                    style="width:auto;">Phan Phi Hùng</button></td>



                <td>20/02/2022</td>

                <td><button class="btn7" onclick="document.getElementById('id022').style.display='block'"
                    style="width:auto;">Tô Xuân Anh Quân</button></td>



                <td><button class="btn7" onclick="document.getElementById('id030').style.display='block'"
                    style="width:auto;">Đã hoàn thành</button></td>
                <td>10.000</td>


                      
              </tr>
                    <tr>
                      
                      <td class="hidden-xs">3</td>
                      






                <td><button class="btn7" onclick="document.getElementById('id020').style.display='block'"
                    style="width:auto;">MHD001</button></td>


                <td><button class="btn7" onclick="document.getElementById('id021').style.display='block'"
                    style="width:auto;">Phan Phi Hùng</button></td>



                <td>20/02/2022</td>

                <td><button class="btn7" onclick="document.getElementById('id022').style.display='block'"
                    style="width:auto;">Tô Xuân Anh Quân</button></td>



                <td><button class="btn7" onclick="document.getElementById('id030').style.display='block'"
                    style="width:auto;">Đã hoàn thành</button></td>
                <td>10.000</td>


                      
              </tr>
                    <tr>
                      
                       <td class="hidden-xs">4</td>
                      






                <td><button class="btn7" onclick="document.getElementById('id020').style.display='block'"
                    style="width:auto;">MHD001</button></td>


                <td><button class="btn7" onclick="document.getElementById('id021').style.display='block'"
                    style="width:auto;">Phan Phi Hùng</button></td>



                <td>20/02/2022</td>

                <td><button class="btn7" onclick="document.getElementById('id022').style.display='block'"
                    style="width:auto;">Tô Xuân Anh Quân</button></td>



                <td><button class="btn7" onclick="document.getElementById('id030').style.display='block'"
                    style="width:auto;">Đã hoàn thành</button></td>
                <td>10.000</td>

                      
              </tr>
                   
            </tbody>
          </table>
              </div>
            
             <div class="row">
                <div class="col col-xs-4">Trang 1 của 5 </div>
                <div class="col col-xs-8">
                   <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a>
                        </li>
                      <li><a href="#">2</a>
                        </li>
                      <li><a href="#">3</a>
                        </li>
                      <li><a href="#">4</a>
                        </li>
                      <li><a href="#">5</a>
                        </li>
                     </ul>
                   <ul class="pagination visible-xs pull-right">
                      <li><a href="#">«</a>
                        </li>
                      <li><a href="#">»</a>
                        </li>
                     </ul>
                  </div>
               </div>










        <div class="container" style="background-color:white; ">
          <button type="button" style="margin: 20px 0 !important;
       margin-right: 100% !important;" onclick="document.getElementById('id012').style.display='none'"
            class="cancelbtn">Thoát</button>

        </div>

      </div>


    </form>
  </div>

  <script>
    // Get the modal
  var modal = document.getElementById('id012');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>










  <!-- detai khách hàng sản phẩm -->
  <div id="id02" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>

      <div class="container">



        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Tên khách hàng</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>SĐT</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Địa chỉ</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>















      </div>

      <div class="container" style="background-color:#f1f1f1">


        <button type="button" onclick="document.getElementById('id02').style.display='none'"
          class="cancelbtn">Thoát</button>

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

  <!--Chi tiết sản phẩm-->
  <div id="id08" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id08').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <label for="uname" style="font-size: 30px;text-align: center;color: blue;;"><b>Sản phẩm</b></label>
      </div>

      <div class="container">


         
          <div class="panel-body">
               <table class="table table-striped table-bordered table-list">
                  <thead>
                     <tr style="color: blue;">
                      
                        <th class="hidden-xs">STT</th>
                    



                <th>Mã sản phẩm </th>





                <th>Tên sản phẩm</th>

                <th>Ảnh sản phẩm</th>

                <th>Nhóm sản phẩm</th>
                <th>Thương hiệu</th>





                <th>Giá bán </th>

                <th>Số lượng</th>



                 






                       


                       
              </tr>
                    </thead>
                  <tbody>
              <tr>
                   
                       <td class="hidden-xs">1</td>
                      





                <td>MS00001</td>


                <td>Lốp</td>

                <td>lốp.jpg</td>



                <td>Phụ tùng ô tô</td>
                <td>honda</td>



                <td>12.000</td>

                <td>2</td>



                 

                 


                      
              </tr>
                    <tr>
                       
                       <td class="hidden-xs">2</td>
                      



                <td>MS00001</td>


                <td>Lốp</td>

                <td>lốp.jpg</td>



                <td>Phụ tùng ô tô</td>
                <td>honda</td>



                <td>12.000</td>

                <td>2</td>
                    


                      
              </tr>
                    <tr>
                      
                      <td class="hidden-xs">3</td>
                      




                <td>MS00001</td>


                <td>Lốp</td>

                <td>lốp.jpg</td>



                <td>Phụ tùng ô tô</td>
                <td>honda</td>



                <td>12.000</td>

                <td>2</td>




                      
              </tr>
                    <tr>
                      
                       <td class="hidden-xs">4</td>
                      





                <td>MS00001</td>


                <td>Lốp</td>

                <td>lốp.jpg</td>



                <td>Phụ tùng ô tô</td>
                <td>honda</td>



                <td>12.000</td>

                <td>2</td>

                      
                 
                      
              </tr>
                   
            </tbody>
          </table>
              </div>
            
             <div class="row">
                <div class="col col-xs-4">Trang 1 của 5 </div>
                <div class="col col-xs-8">
                   <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a>
                        </li>
                      <li><a href="#">2</a>
                        </li>
                      <li><a href="#">3</a>
                        </li>
                      <li><a href="#">4</a>
                        </li>
                      <li><a href="#">5</a>
                        </li>
                     </ul>
                   <ul class="pagination visible-xs pull-right">
                      <li><a href="#">«</a>
                        </li>
                      <li><a href="#">»</a>
                        </li>
                     </ul>
                  </div>
               </div>






        <div class="container" style="background-color:white; ">
          <button type="button" style="margin: 20px 0 !important;
     margin-right: 100% !important;" onclick="document.getElementById('id08').style.display='none'"
            class="cancelbtn">Thoát</button>

        </div>

      </div>


    </form>
  </div>

  <script>
    // Get the modal
var modal = document.getElementById('id08');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  </script>







  <!--Chi tiết thợ sản phẩm-->

  <div id="id010" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id010').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <label for="uname" style="font-size: 30px;text-align: center;color: blue;;"><b>Thợ</b></label>
      </div>

      <div class="container">




            
            <div class="panel-body">
               <table class="table table-striped table-bordered table-list">
                  <thead>
                     <tr style="color: blue;">
                      
                        <th class="hidden-xs">ID</th>
                 
                <th>Tên</th>
                <th>SĐT</th>
                <th>Email</th>







                       


                       
              </tr>
                    </thead>
                  <tbody>
              <tr>
                   
                       <td class="hidden-xs">1</td>
                   <td>Phan Phi Hung</td>
                <td>0334344324</td>
                <td>hung@gmail.com</td>



                 


                      
              </tr>
                    <tr>
                       <td class="hidden-xs">2</td>
                       <td>Phan Phi Hung</td>
                <td>0334344324</td>
                <td>hung@gmail.com</td>

                      
              </tr>
                    <tr>
                      <td class="hidden-xs">3</td>
                       <td>Phan Phi Hung</td>
                <td>0334344324</td>
                <td>hung@gmail.com</td>


                </td>

                      
              </tr>
                    <tr>
                      <td class="hidden-xs">4</td>
                       <td>Phan Phi Hung</td>
                <td>0334344324</td>
                <td>hung@gmail.com</td>


                </td>
                      
              </tr>
                   
            </tbody>
          </table>
              </div>
            
             <div class="row">
                <div class="col col-xs-4">Trang 1 của 5 </div>
                <div class="col col-xs-8">
                   <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a>
                        </li>
                      <li><a href="#">2</a>
                        </li>
                      <li><a href="#">3</a>
                        </li>
                      <li><a href="#">4</a>
                        </li>
                      <li><a href="#">5</a>
                        </li>
                     </ul>
                   <ul class="pagination visible-xs pull-right">
                      <li><a href="#">«</a>
                        </li>
                      <li><a href="#">»</a>
                        </li>
                     </ul>
                  </div>
               </div>






        <div class="container" style="background-color:white; ">
          <button type="button" style="margin: 20px 0 !important;
     margin-right: 100% !important;" onclick="document.getElementById('id010').style.display='none'"
            class="cancelbtn">Thoát</button>

        </div>

      </div>


    </form>
  </div>

  <script>
    // Get the modal
var modal = document.getElementById('id010');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  </script>

  <!-- detai khách hàng dịch vụ -->
  <div id="id021" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id021').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>

      <div class="container">



        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Tên khách hàng</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>SĐT</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Địa chỉ</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>















      </div>

      <div class="container" style="background-color:#f1f1f1">


        <button type="button" onclick="document.getElementById('id021').style.display='none'"
          class="cancelbtn">Thoát</button>

      </div>
    </form>
  </div>

  <script>
    // Get the modal
var modal = document.getElementById('id021');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  </script>

  <!--Chi tiết thợ dịch vụ-->

  <div id="id022" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id022').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <label for="uname" style="font-size: 30px;text-align: center;color: blue;;"><b>Thợ</b></label>
      </div>

      <div class="container">




            
            <div class="panel-body">
               <table class="table table-striped table-bordered table-list">
                  <thead>
                     <tr style="color: blue;">
                      
                        <th class="hidden-xs">ID</th>
                 
                <th>Tên</th>
                <th>SĐT</th>
                <th>Email</th>







                       


                       
              </tr>
                    </thead>
                  <tbody>
              <tr>
                   
                       <td class="hidden-xs">1</td>
                   <td>Phan Phi Hung</td>
                <td>0334344324</td>
                <td>hung@gmail.com</td>



                 


                      
              </tr>
                    <tr>
                       <td class="hidden-xs">2</td>
                       <td>Phan Phi Hung</td>
                <td>0334344324</td>
                <td>hung@gmail.com</td>

                      
              </tr>
                    <tr>
                      <td class="hidden-xs">3</td>
                       <td>Phan Phi Hung</td>
                <td>0334344324</td>
                <td>hung@gmail.com</td>


                </td>

                      
              </tr>
                    <tr>
                      <td class="hidden-xs">4</td>
                       <td>Phan Phi Hung</td>
                <td>0334344324</td>
                <td>hung@gmail.com</td>


                </td>
                      
              </tr>
                   
            </tbody>
          </table>
              </div>
            
             <div class="row">
                <div class="col col-xs-4">Trang 1 của 5 </div>
                <div class="col col-xs-8">
                   <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a>
                        </li>
                      <li><a href="#">2</a>
                        </li>
                      <li><a href="#">3</a>
                        </li>
                      <li><a href="#">4</a>
                        </li>
                      <li><a href="#">5</a>
                        </li>
                     </ul>
                   <ul class="pagination visible-xs pull-right">
                      <li><a href="#">«</a>
                        </li>
                      <li><a href="#">»</a>
                        </li>
                     </ul>
                  </div>
               </div>






        <div class="container" style="background-color:white; ">
          <button type="button" style="margin: 20px 0 !important;
     margin-right: 100% !important;" onclick="document.getElementById('id022').style.display='none'"
            class="cancelbtn">Thoát</button>

        </div>

      </div>


    </form>
  </div>

  <script>
    // Get the modal
var modal = document.getElementById('id022');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  </script>

  <!--Chi tiết dịch vụ-->
  <div id="id020" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id020').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <label for="uname" style="font-size: 30px;text-align: center;color: blue;;"><b>Dịch vụ</b></label>
      </div>

      <div class="container">


         
          <div class="panel-body">
               <table class="table table-striped table-bordered table-list">
                  <thead>
                     <tr style="color: blue;">
                      <th class="hidden-xs">ID</th>
                <th>Mã dịch vụ</th>

                <th>Tên dịch vụ </th>
                <th>Hình ảnh</th>


                <th>Mô tả</th>








                <th>Chi phí</th>



                        






                 






                       


                       
              </tr>
                    </thead>
                  <tbody>
              <tr>
                   
                       <td class="hidden-xs">1</td>

                <td>MDV001</td>
                <td>Thay lốp</td>

                <td>lop.jpg</td>

                <td>nhanh chóng</td>


                <td>12.000</td>



                 


                      
              </tr>
                    <tr>
                       
                      
                       <td class="hidden-xs">2</td>

                <td>MDV001</td>
                <td>Thay lốp</td>

                <td>lop.jpg</td>

                <td>nhanh chóng</td>


                <td>12.000</td>


                    


                      
              </tr>
                    <tr>
                      
                     
                       <td class="hidden-xs">3</td>

                <td>MDV001</td>
                <td>Thay lốp</td>

                <td>lop.jpg</td>

                <td>nhanh chóng</td>


                <td>12.000</td>




                      
              </tr>
                    <tr>
                      
                      
                       <td class="hidden-xs">4</td>

                <td>MDV001</td>
                <td>Thay lốp</td>

                <td>lop.jpg</td>

                <td>nhanh chóng</td>


                <td>12.000</td>


                      
              </tr>
                   
            </tbody>
          </table>
              </div>
            
             <div class="row">
                <div class="col col-xs-4">Trang 1 của 5 </div>
                <div class="col col-xs-8">
                   <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a>
                        </li>
                      <li><a href="#">2</a>
                        </li>
                      <li><a href="#">3</a>
                        </li>
                      <li><a href="#">4</a>
                        </li>
                      <li><a href="#">5</a>
                        </li>
                     </ul>
                   <ul class="pagination visible-xs pull-right">
                      <li><a href="#">«</a>
                        </li>
                      <li><a href="#">»</a>
                        </li>
                     </ul>
                  </div>
               </div>






        <div class="container" style="background-color:white; ">
          <button type="button" style="margin: 20px 0 !important;
     margin-right: 100% !important;" onclick="document.getElementById('id020').style.display='none'"
            class="cancelbtn">Thoát</button>

        </div>

      </div>


    </form>
  </div>

  <script>
    // Get the modal
var modal = document.getElementById('id020');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  </script>

  <!-- Edit trang thái thợ -->
  <div id="id025" class="modal">

    <form class="modal-content animate" action="/action_page.php" style="width:30%;" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id025').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>

      <div class="container">


        <label for=""><b>Trạng thái của thợ :</b></label>
        <form action="/action_page.php">

          <select name="status" id="status">
            <option value="">Chờ đơn</option>
            <option value="">Đang bận</option>


          </select>
          <div>

            <button type="submit" style=" background-color: #04AA6D;
        color: white;
      
        border: none;
        cursor: pointer;
        border: 1px solid black;
        
       ">Lưu</button>
          </div>

        </form>
      </div>


    </form>
  </div>

  <script>
    // Get the modal
var modal = document.getElementById('id025');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  </script>

  <!-- Edit trang thái đơn hàng sản phẩm -->
  <div id="id029" class="modal">

    <form class="modal-content animate" action="/action_page.php" style="width:30%;" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id029').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>

      <div class="container">


        <label for=""><b>Trạng thái đơn hàng:</b></label>
        <form action="/action_page.php">

          <select name="status" id="status">
            <option value="">Đã hoàn thành</option>
            <option value="">Chưa hoàn thành</option>
            <option value="">Đã hủy</option>
            <option value="">Tạm hoãn</option>

          </select>
          <div>

            <button type="submit" style=" background-color: #04AA6D;
        color: white;
      
        border: none;
        cursor: pointer;
        border: 1px solid black;
        
       ">Lưu</button>
          </div>

        </form>
      </div>


    </form>
  </div>

  <script>
    // Get the modal
var modal = document.getElementById('id029');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  </script>


  <!-- Edit trang thái đơn hàng dịch vụ -->
  <div id="id030" class="modal">

    <form class="modal-content animate" action="/action_page.php" style="width:30%;" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id030').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>

      <div class="container">


        <label for=""><b>Trạng thái đơn hàng:</b></label>
        <form action="/action_page.php">

          <select name="status" id="status">
            <option value="">Đã hoàn thành</option>
            <option value="">Chưa hoàn thành</option>
            <option value="">Đã hủy</option>
            <option value="">Tạm hoãn</option>

          </select>
          <div>

            <button type="submit" style=" background-color: #04AA6D;
        color: white;
      
        border: none;
        cursor: pointer;
        border: 1px solid black;
        
       ">Lưu</button>
          </div>

        </form>
      </div>


    </form>
  </div>

  <script>
    // Get the modal
var modal = document.getElementById('id030');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  </script>

  <!---+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->


  <!--detial đơn hàng hoàn thành-->
  <div id="id031" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id031').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <label for="uname" style="font-size: 30px;text-align: center;color: blue;;"><b>Đơn hàng</b></label>
      </div>


      <div class="container">
        <!--Sản phẩm-->
        <div id="div2">
          <div style="width: 40%;">
            <label for="uname"><b>Tên thợ</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div>


            <div style="float: left;">
              <form action="/action_page.php">
                <label for="status">Phản hồi của khách hàng:</label>
                <select name="status" id="status"
                  style="width: 150px; border-radius:5px;height: 43px;text-align: center;">
                  <option value="">Đã phản hồi lần 1</option>
                  <option value="">Chưa phản hồi lần 1</option>
                  <option value="">Đã phản hồi lần 2</option>
                  <option value="">Chưa phản hồi lần 2</option>


                </select>

              </form>
            </div>

            <button class="btn9" style="width:auto;background: rgb(81, 255, 0);margin-top: 15px;margin-left: 20px;"
              value="hien"></button>
            <label for="">Sản phẩm</label>
            <button class="btn9" style="width:auto;margin-left: 10px; " value="hi"></button>
            <label for="">Dịch vụ</label>
          </div>


           
          <div class="panel-body">
                 <table class="table table-striped table-bordered table-list">
                    <thead>
                       <tr style="color: blue;">
                        
                        <th class="hidden-xs">STT</th>
                          <th>Mã đơn hàng sản phẩm </th>
                  <th>Tên khách hàng </th>
                  <th>SĐT</th>



                  <th>Phản hồi lần 1</th>
                  <th>Phản hồi lần 2</th>
                    <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                            </th>






                         


                         
                </tr>
                      </thead>
                    <tbody>
                <tr>
                     
                         <td class="hidden-xs">1</td>
                         <td>MDH0001</td>
                  <td>Phan Phi Hùng</td>
                  <td>065436656</td>

                  <td><button class="btn7" onclick="document.getElementById('id016').style.display='block'"
                      style="width:auto;">Đã phản hồi</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id017').style.display='block'"
                      style="width:auto;">Chưa phản hồi</button></td>
                     
                   <td>

                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                  </td>
                   


                        
                </tr>
                      <tr>
                         
                      
                      

                         <td class="hidden-xs">2</td>
                           <td>MDH0001</td>
                  <td>Phan Phi Hùng</td>
                  <td>065436656</td>

                  <td><button class="btn7" onclick="document.getElementById('id016').style.display='block'"
                      style="width:auto;">Đã phản hồi</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id017').style.display='block'"
                      style="width:auto;">Chưa phản hồi</button></td>
                   <td>

                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                  </td>

                        
                </tr>
                      <tr>
                        
                        
                         <td class="hidden-xs">3</td>
                           <td>MDH0001</td>
                  <td>Phan Phi Hùng</td>
                  <td>065436656</td>

                  <td><button class="btn7" onclick="document.getElementById('id016').style.display='block'"
                      style="width:auto;">Đã phản hồi</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id017').style.display='block'"
                      style="width:auto;">Chưa phản hồi</button></td>
                   <td>

                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                  </td>

                        
                </tr>
                      <tr>
                        
                         
                        <td class="hidden-xs">4</td>
                           <td>MDH0001</td>
                  <td>Phan Phi Hùng</td>
                  <td>065436656</td>

                  <td><button class="btn7" onclick="document.getElementById('id016').style.display='block'"
                      style="width:auto;">Đã phản hồi</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id017').style.display='block'"
                      style="width:auto;">Chưa phản hồi</button></td>
                   <td>

                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                  </td>
                        
                </tr>
                     
              </tbody>
            </table>
                </div>
              
               <div class="row">
                  <div class="col col-xs-4">Trang 1 của 5 </div>
                  <div class="col col-xs-8">
                     <ul class="pagination hidden-xs pull-right">
                        <li><a href="#">1</a>
                          </li>
                        <li><a href="#">2</a>
                          </li>
                        <li><a href="#">3</a>
                          </li>
                        <li><a href="#">4</a>
                          </li>
                        <li><a href="#">5</a>
                          </li>
                       </ul>
                     <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a>
                          </li>
                        <li><a href="#">»</a>
                          </li>
                       </ul>
                    </div>
                 </div>

        </div>
           
        <!--dịch vụ-->
        <div id="div3" style="display: none;">
          <div style="width: 40%;">
            <label for="uname"><b>Tên thợ</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div>


            <div style="float: left;">
              <form action="/action_page.php">
                <label for="status">Phản hồi của khách hàng:</label>
                <select name="status" id="status"
                  style="width: 150px; border-radius:5px;height: 43px;text-align: center;">
                  <option value="">Đã phản hồi lần 1</option>
                  <option value="">Chưa phản hồi lần 1</option>
                  <option value="">Đã phản hồi lần 2</option>
                  <option value="">Chưa phản hồi lần 2</option>


                </select>

              </form>
            </div>

            <button class="btn9" style="width:auto;margin-top: 15px;margin-left: 20px;" value="hien"></button>
            <label for="">Sản phẩm</label>
            <button class="btn9" style="width:auto;margin-left: 10px;background: rgb(81, 255, 0); " value="hi"></button>
            <label for="">Dịch vụ</label>
          </div>


           
          <div class="panel-body">
                 <table class="table table-striped table-bordered table-list">
                    <thead>
                       <tr style="color: blue;">
                        
                        <th class="hidden-xs">STT</th>
                          <th>Mã đơn hàng dịch vụ </th>
                  <th>Tên khách hàng </th>
                  <th>SĐT</th>



                  <th>Phản hồi lần 1</th>
                  <th>Phản hồi lần 2</th>
                    <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                            </th>






                         


                         
                </tr>
                      </thead>
                    <tbody>
                <tr>
                     
                         <td class="hidden-xs">1</td>
                         <td>MDH0001</td>
                  <td>Phan Phi Hùng</td>
                  <td>065436656</td>

                  <td><button class="btn7" onclick="document.getElementById('id034').style.display='block'"
                      style="width:auto;">Đã phản hồi</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id035').style.display='block'"
                      style="width:auto;">Chưa phản hồi</button></td>
                     
                   <td>

                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                  </td>
                   


                        
                </tr>
                      <tr>
                         
                      
                      

                         <td class="hidden-xs">2</td>
                           <td>MDH0001</td>
                  <td>Phan Phi Hùng</td>
                  <td>065436656</td>

                  <td><button class="btn7" onclick="document.getElementById('id034').style.display='block'"
                      style="width:auto;">Đã phản hồi</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id035').style.display='block'"
                      style="width:auto;">Chưa phản hồi</button></td>
                   <td>

                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                  </td>

                        
                </tr>
                      <tr>
                        
                        
                         <td class="hidden-xs">3</td>
                           <td>MDH0001</td>
                  <td>Phan Phi Hùng</td>
                  <td>065436656</td>

                  <td><button class="btn7" onclick="document.getElementById('id034').style.display='block'"
                      style="width:auto;">Đã phản hồi</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id035').style.display='block'"
                      style="width:auto;">Chưa phản hồi</button></td>
                   <td>

                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                  </td>

                        
                </tr>
                      <tr>
                        
                         
                        <td class="hidden-xs">4</td>
                           <td>MDH0001</td>
                  <td>Phan Phi Hùng</td>
                  <td>065436656</td>

                  <td><button class="btn7" onclick="document.getElementById('id034').style.display='block'"
                      style="width:auto;">Đã phản hồi</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id035').style.display='block'"
                      style="width:auto;">Chưa phản hồi</button></td>
                   <td>

                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                  </td>
                        
                </tr>
                     
              </tbody>
            </table>
                </div>
              
               <div class="row">
                  <div class="col col-xs-4">Trang 1 của 5 </div>
                  <div class="col col-xs-8">
                     <ul class="pagination hidden-xs pull-right">
                        <li><a href="#">1</a>
                          </li>
                        <li><a href="#">2</a>
                          </li>
                        <li><a href="#">3</a>
                          </li>
                        <li><a href="#">4</a>
                          </li>
                        <li><a href="#">5</a>
                          </li>
                       </ul>
                     <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a>
                          </li>
                        <li><a href="#">»</a>
                          </li>
                       </ul>
                    </div>
                 </div>

        </div>




        <div class="container" style="background-color:white; ">
          <button type="button" style="margin: 20px 0 !important;
     margin-right: 100% !important;" onclick="document.getElementById('id031').style.display='none'"
            class="cancelbtn">Thoát</button>

        </div>

      </div>








    </form>
  </div>

  <script>
    // Get the modal
var modal = document.getElementById('id031');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  </script>

  <!-- Phản hồi của khách hàng khách hàng 2 hoàn thành-->
 
<livewire:feed-back-product-r-s>

  <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->


<livewire:feed-back-service-r-s>




  <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->



  <!--Doi mau button-->
  <script>
    $(document).ready(function(){
      $("button[value='hien']").click(function(){
          $("#div2").show();
      })
      $("button[value='hi']").click(function(){
          $("#div3").show();
      })
      $("button[value='hi']").click(function(){
          $("#div2").hide();
      })
      $("button[value='hien']").click(function(){
          $("#div3").hide();
      })

 
  })
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