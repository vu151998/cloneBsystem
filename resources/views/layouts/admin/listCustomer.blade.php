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
      <h5 class="card-header font-weight-light" style="text-align: center;">KHÁCH HÀNG</h5>
      <!-- list -->
      <!--<div id="test">-->
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col col-xs-6">
                 <form class="d-flex">


                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    style="width :200px;border-color: rgba(0,0,0,0.6);height: 43px;">
                </div>

                <div style="float: left;">

                  <button class="btn btn-outline-success" type="submit"><i class="	fas fa-search"></i></button>
                </div>



              </form>
                    </div>
              

          </div>
               </div>
            
            <div class="panel-body">
               <table class="table table-striped table-bordered table-list">
                  <thead>
                     <tr style="color: blue;">
                      
                        <th class="hidden-xs">STT</th>
                        <th>Mã khách hàng</th>
                        <th>Tên khách hàng</th>
                <th>SĐT</th>
                <th>Số đơn đã đặt</th>
                <th>Nợ hiện tại</th>
                <th>Tổng bán</th>
                <th>Tổng bán trừ trả</th>
                  <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                          </th>






                       


                       
              </tr>
                    </thead>
                  <tbody>
              <tr>
                   
                      <td class="hidden-xs">1</td>
                     
                <td>MKH098</td>
                       <td>Phan Phi Hùng</td>
                <td>038466262</td>
                <td>5</td>

                <td>1000</td>
                <td>2000</td>
                <td>1000</td>
                 <td>
                  <button class="btn3" onclick="document.getElementById('id02').style.display='block'"
                    style="width:auto;"><i class="fas fa-eye"></i></button>
                  <button class="btn1" onclick="document.getElementById('id01').style.display='block'"
                    style="width:auto;"><i class="fas fa-edit"></i></button>
                  <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>

                </td>

                 


                      
              </tr>
                    <tr>
                       
                       <td class="hidden-xs">2</td>
                     
                <td>MKH098</td>
                       <td>Phan Phi Hùng</td>
                <td>038466262</td>

                <td>5</td>
                <td>1000</td>
                <td>2000</td>
                <td>1000</td>
                    
                 <td>
                  <button class="btn3" onclick="document.getElementById('id02').style.display='block'"
                    style="width:auto;"><i class="fas fa-eye"></i></button>
                  <button class="btn1" onclick="document.getElementById('id01').style.display='block'"
                    style="width:auto;"><i class="fas fa-edit"></i></button>
                  <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>

                </td>

                      
              </tr>
                    <tr>
                      
                       <td class="hidden-xs">3</td>
                     
                <td>MKH098</td>
                       <td>Phan Phi Hùng</td>
                <td>038466262</td>
                <td>5</td>

                <td>1000</td>
                <td>2000</td>
                <td>1000</td>
                 <td>
                  <button class="btn3" onclick="document.getElementById('id02').style.display='block'"
                    style="width:auto;"><i class="fas fa-eye"></i></button>
                  <button class="btn1" onclick="document.getElementById('id01').style.display='block'"
                    style="width:auto;"><i class="fas fa-edit"></i></button>
                  <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>

                </td>

                      
              </tr>
                    <tr>
                      
                       <td class="hidden-xs">4</td>
                     
                <td>MKH098</td>
                       <td>Phan Phi Hùng</td>
                <td>038466262</td>

                <td>5</td>
                <td>1000</td>
                <td>2000</td>
                <td>1000</td>
                      
                 <td>
                  <button class="btn3" onclick="document.getElementById('id02').style.display='block'"
                    style="width:auto;"><i class="fas fa-eye"></i></button>
                  <button class="btn1" onclick="document.getElementById('id01').style.display='block'"
                    style="width:auto;"><i class="fas fa-edit"></i></button>
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
  </div><!-- body-row END -->

  <!-- detail -->





  <div id="id02" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>

      <div class="container">




        <div>
          <div style="float: left;width: 44%;">
            <label for="uname"><b>Mã khách hàng</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Tên khách hàng</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>


        <div>
          <div style="float: left;width: 44%;">
            <label for="uname"><b>SĐT</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Địa chỉ</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Số đơn đã đặt</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Nợ hiện tại</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Tổng bán</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Tổng bán trừ trả</b></label>
            <input type="text" placeholder="" name="id" required>
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


  <!-- edit -->
  <div id="id01" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <img src="image/hinh-anh-avatar-nam-1.jpg" alt="Avatar" class="avatar">
      </div>

      <div class="container">



        <div>
          <div style="float: left;width: 44%;">
            <label for="uname"><b>Mã khách hàng</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Tên khách hàng</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>


        <div>
          <div style="float: left;width: 44%;">
            <label for="uname"><b>SĐT</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Địa chỉ</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Số đơn đã đặt</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Nợ hiện tại</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Tổng bán</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Tổng bán trừ trả</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>


        </div>







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
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"
          style="margin-left: 10px !important;">Thoát</button>

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

</body>

</html>