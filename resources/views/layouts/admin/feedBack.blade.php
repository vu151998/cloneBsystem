<!DOCTYPE html>
<html lang="en">
<livewire:header-admin />

<body style="background-color: white;">

  <livewire:navbar-admin/>
  <!-- Bootstrap row -->
  <div class="row" id="body-row">

    <livewire:counter-admin />
    <!-- MAIN -->
    <div class="col p-4">
      <!--<h1 class="display-4">Thợ</h1>-->
      <!--<div class="card">-->
      <h5 class="card-header font-weight-light" style="text-align: center;">Phản hồi của khách hàng</h5>
      <!-- list -->
      <!--<div id="test">-->
      <div class="card-body">

        <!-- Main 111111111111111111111111111-->

        <div id="div2" class="container">
           
           

              
               <div class="row">
                  <div class="col col-xs-6">
                 <form class="d-flex">
                <div style="float: left;">
                  <input id="datepickerfrom" name="datepickerfrom" placeholder="Thời gian bắt đầu" width="200"
                    style="border-color: rgba(0,0,0,0.6); height: 43px;" />
                </div>
                <div style="float: left;">
                  <input id="datepickerfrom1" name="datepickerfrom1" placeholder="Thời gian kết thúc" width="200"
                    style="border-color: rgba(0,0,0,0.6);height: 43px;" />

                </div>





                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm mã đơn hàng" aria-label="Search"
                    style="width :210px;border-color: rgba(0,0,0,0.6);height: 43px;">
                </div>

                <div style="float: left;">

                  <button class="btn btn-outline-success" type="submit"><i class="	fas fa-search"></i></button>
                </div>

                <script>
                  $('#datepickerfrom').datepicker({
                                      uiLibrary: 'bootstrap4'
                                  });
                </script>
                <script>
                  $('#datepickerfrom1').datepicker({
                                    uiLibrary: 'bootstrap4'
                                }); 
                </script>

              </form>
                    </div>
                 <div class="col col-xs-6 text-right">
                     <button type="button" onclick="window.location.href='/listOder'"
                class="btn btn-outline-success" style="width:auto;margin-top: 20px;">Thêm đơn</button>
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



                  
                  <div class="panel-body">
                     <table class="table table-striped table-bordered table-list">
                        <thead>
                           <tr style="color: blue;">
                            
                            <th class="hidden-xs">STT</th>
                              <th>Mã đơn hàng sản phẩm </th>
                      <th>Tên khách hàng </th>
                      <th>SĐT</th>
                      <th>Thợ</th>


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
                      <td><button class="btn7" onclick="document.getElementById('id010').style.display='block'"
                          style="width:auto;">Tô Xuân Anh Quân</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id016').style.display='block'"
                          style="width:auto;">Đã phản hồi</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id017').style.display='block'"
                          style="width:auto;">Chưa phản hồi</button></td>
                         
                       <td>
                        <button class="btn1" style="width:auto;">Remake</i></button>
                        <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                      </td>
                       


                            
                    </tr>
                          <tr>
                             
                          
                          

                             <td class="hidden-xs">2</td>
                               <td>MDH0001</td>
                      <td>Phan Phi Hùng</td>
                      <td>065436656</td>
                      <td><button class="btn7" onclick="document.getElementById('id010').style.display='block'"
                          style="width:auto;">Tô Xuân Anh Quân</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id016').style.display='block'"
                          style="width:auto;">Đã phản hồi</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id017').style.display='block'"
                          style="width:auto;">Chưa phản hồi</button></td>
                       <td>
                        <button class="btn1" style="width:auto;">Remake</i></button>
                        <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                      </td>

                            
                    </tr>
                          <tr>
                            
                            
                             <td class="hidden-xs">3</td>
                               <td>MDH0001</td>
                      <td>Phan Phi Hùng</td>
                      <td>065436656</td>
                      <td><button class="btn7" onclick="document.getElementById('id010').style.display='block'"
                          style="width:auto;">Tô Xuân Anh Quân</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id016').style.display='block'"
                          style="width:auto;">Đã phản hồi</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id017').style.display='block'"
                          style="width:auto;">Chưa phản hồi</button></td>
                       <td>
                        <button class="btn1" style="width:auto;">Remake</i></button>
                        <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>


                      </td>

                            
                    </tr>
                          <tr>
                            
                             
                            <td class="hidden-xs">4</td>
                               <td>MDH0001</td>
                      <td>Phan Phi Hùng</td>
                      <td>065436656</td>
                      <td><button class="btn7" onclick="document.getElementById('id010').style.display='block'"
                          style="width:auto;">Tô Xuân Anh Quân</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id016').style.display='block'"
                          style="width:auto;">Đã phản hồi</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id017').style.display='block'"
                          style="width:auto;">Chưa phản hồi</button></td>
                       <td>
                        <button class="btn1" style="width:auto;">Remake</i></button>
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
          </div>
          <!--</div>-->
          <!---->
          <!--</div>-->
        </div><!-- Main Col END -->

        <!-- Main 222222222222222222222222222222 -->

        <div id="div3" class="container" style="display: none;">
           
           

              
               <div class="row">
                  <div class="col col-xs-6">
                 <form class="d-flex">
                <div style="float: left;">
                  <input id="datepickerfrom2" name="datepickerfrom2" placeholder="Thời gian bắt đầu" width="200"
                    style="border-color: rgba(0,0,0,0.6); height: 43px;" />
                </div>
                <div style="float: left;">
                  <input id="datepickerfrom3" name="datepickerfrom3" placeholder="Thời gian kết thúc" width="200"
                    style="border-color: rgba(0,0,0,0.6);height: 43px;" />

                </div>





                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm mã đơn hàng" aria-label="Search"
                    style="width :210px;border-color: rgba(0,0,0,0.6);height: 43px;">
                </div>

                <div style="float: left;">

                  <button class="btn btn-outline-success" type="submit"><i class="	fas fa-search"></i></button>
                </div>

                <script>
                  $('#datepickerfrom2').datepicker({
                          uiLibrary: 'bootstrap4'
                      });
                </script>
                <script>
                  $('#datepickerfrom3').datepicker({
                        uiLibrary: 'bootstrap4'
                    }); 
                </script>

              </form>
                    </div>
                 <div class="col col-xs-6 text-right">
                     <button type="button" onclick="window.location.href='//127.0.0.1:5500/listOder.html'"
                class="btn btn-outline-success" style="width:auto;margin-top: 20px;">Thêm đơn</button>
                    </div>
            <div>
              <!-- <div style="float: left;">
                <form action="/action_page.php">
                  <label for="status" style="margin-left: 40px;" >Đơn hàng:</label>
                  <select name="status" id="status" style="width: 150px; border-radius:5px;height: 43px;text-align: center;margin-right: 30px;">
                    <option value="">Sản phẩm</option>
                    <option value="">Dịch vụ</option>
                 
                   
                  </select>
                 
                </form>
              </div>-->





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
              <button class="btn9" style="width:auto;background: rgb(81, 255, 0);margin-left: 10px; "
                value="hi"></button>
              <label for="">Dịch vụ</label>



                  
                  <div class="panel-body">
                     <table class="table table-striped table-bordered table-list">
                        <thead>
                           <tr style="color: blue;">
                            
                            <th class="hidden-xs">STT</th>
                              <th>Mã đơn hàng dịch vụ </th>
                      <th>Tên khách hàng </th>
                      <th>SĐT</th>
                      <th>Thợ</th>


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
                      <td><button class="btn7" onclick="document.getElementById('id011').style.display='block'"
                          style="width:auto;">Tô Xuân Anh Quân</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id018').style.display='block'"
                          style="width:auto;">Đã phản hồi</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id019').style.display='block'"
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
                      <td><button class="btn7" onclick="document.getElementById('id011').style.display='block'"
                          style="width:auto;">Tô Xuân Anh Quân</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id018').style.display='block'"
                          style="width:auto;">Đã phản hồi</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id019').style.display='block'"
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
                      <td><button class="btn7" onclick="document.getElementById('id011').style.display='block'"
                          style="width:auto;">Tô Xuân Anh Quân</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id018').style.display='block'"
                          style="width:auto;">Đã phản hồi</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id019').style.display='block'"
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
                      <td><button class="btn7" onclick="document.getElementById('id011').style.display='block'"
                          style="width:auto;">Tô Xuân Anh Quân</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id018').style.display='block'"
                          style="width:auto;">Đã phản hồi</button></td>
                      <td><button class="btn7" onclick="document.getElementById('id019').style.display='block'"
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
          </div>
          <!--</div>-->
          <!---->
          <!--</div>-->
        </div><!-- Main Col END2222222 -->

      </div><!-- body-row END -->
      <!-- add -->





      <!-- Phản hồi của khách hàng khách hàng 2-->
      <div id="id017" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id017').style.display='none'" class="close"
              title="Close Modal">&times;</span>




          </div>

          <div class="container">



            <div style="margin-bottom: 40px;">
              <label for="uname" style="font-size: 20px;color: blue;margin-left: 35%;"><b>Phản hồi của khách
                  hàng</b></label>
            </div>

            <textarea style="margin-left: 60px;" rows="9" cols="120" name="comment" form="usrform">

            </textarea>


















          </div>

          <div class="container" style="background-color:#f1f1f1">


            <button type="submit" style=" background-color: #04AA6D;
              color: white;
              width: 9%;
              height: 40px;
              border: none;
              cursor: pointer;
              border: 1px solid black;
              
             ">Lưu</button>

          </div>
        </form>
      </div>

      <script>
        // Get the modal
  var modal = document.getElementById('id017');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
      </script>

      <!-- Phản hồi của khách hàng khách hàng 1-->
      <div id="id016" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id016').style.display='none'" class="close"
              title="Close Modal">&times;</span>




          </div>

          <div class="container">



            <div style="margin-bottom: 40px;">
              <label for="uname" style="font-size: 20px;color: blue;margin-left: 35%;"><b>Phản hồi của khách
                  hàng</b></label>
            </div>

            <textarea style="margin-left: 60px;" rows="9" cols="120" name="comment" form="usrform">

          </textarea>


















          </div>

          <div class="container" style="background-color:#f1f1f1">


            <button type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 9%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;
            
           ">Lưu</button>

          </div>
        </form>
      </div>

      <script>
        // Get the modal
var modal = document.getElementById('id016');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
      </script>


      <!--Chi tiết thợ-->

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
                           <td class="hidden-xs">1</td>
                           <td>Phan Phi Hung</td>
                    <td>0334344324</td>
                    <td>hung@gmail.com</td>

                          
                  </tr>
                        <tr>
                          <td class="hidden-xs">1</td>
                           <td>Phan Phi Hung</td>
                    <td>0334344324</td>
                    <td>hung@gmail.com</td>


                    </td>

                          
                  </tr>
                        <tr>
                          <td class="hidden-xs">1</td>
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
      <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

      <!-- Phản hồi của khách hàng khách hàng 2 dich vu-->
      <div id="id019" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id019').style.display='none'" class="close"
              title="Close Modal">&times;</span>




          </div>

          <div class="container">



            <div style="margin-bottom: 40px;">
              <label for="uname" style="font-size: 20px;color: blue;margin-left: 35%;"><b>Phản hồi của khách
                  hàng</b></label>
            </div>

            <textarea style="margin-left: 60px;" rows="9" cols="120" name="comment" form="usrform">

          </textarea>


















          </div>

          <div class="container" style="background-color:#f1f1f1">


            <button type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 9%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;
            
           ">Lưu</button>

          </div>
        </form>
      </div>

      <script>
        // Get the modal
var modal = document.getElementById('id019');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
      </script>

      <!-- Phản hồi của khách hàng khách hàng 1-->
      <div id="id018" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id018').style.display='none'" class="close"
              title="Close Modal">&times;</span>




          </div>

          <div class="container">



            <div style="margin-bottom: 40px;">
              <label for="uname" style="font-size: 20px;color: blue;margin-left: 35%;"><b>Phản hồi của khách
                  hàng</b></label>
            </div>

            <textarea style="margin-left: 60px;" rows="9" cols="120" name="comment" form="usrform">

        </textarea>


















          </div>

          <div class="container" style="background-color:#f1f1f1">


            <button type="submit" style=" background-color: #04AA6D;
          color: white;
          width: 9%;
          height: 40px;
          border: none;
          cursor: pointer;
          border: 1px solid black;
          
         ">Lưu</button>

          </div>
        </form>
      </div>

      <script>
        // Get the modal
var modal = document.getElementById('id011');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}
      </script>


      <!--Chi tiết thợ-->

      <div id="id011" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id011').style.display='none'" class="close"
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
                           <td class="hidden-xs">1</td>
                           <td>Phan Phi Hung</td>
                    <td>0334344324</td>
                    <td>hung@gmail.com</td>

                          
                  </tr>
                        <tr>
                          <td class="hidden-xs">1</td>
                           <td>Phan Phi Hung</td>
                    <td>0334344324</td>
                    <td>hung@gmail.com</td>


                    </td>

                          
                  </tr>
                        <tr>
                          <td class="hidden-xs">1</td>
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
     margin-right: 100% !important;" onclick="document.getElementById('id011').style.display='none'"
                class="cancelbtn">Thoát</button>

            </div>

          </div>


        </form>
      </div>

      <script>
        // Get the modal
var modal = document.getElementById('id011');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
      </script>



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


</body>

</html>