<!DOCTYPE html>
<html lang="en">

@livewire('owners.header-admin')

<body style="background-color: white;">

  <livewire:navbar-admin/>
  <!-- Bootstrap row -->

  <div class="row" id="body-row">

    @livewire('owners.counter-admin')
    <!-- MAIN -->
    <div class="col p-4">
      <!--<h1 class="display-4">Thợ</h1>-->
      <!--<div class="card">-->
      <h5 class="card-header font-weight-light" style="text-align: center;">NGƯỜI DÙNG</h5>
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
                  <div class="col col-xs-6 text-right">
                     <button type="button" class="btn btn-outline-success" style="margin-top: 23px;margin-left: 200px;"
                onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Thêm mới</button>
                    </div>

                 </div>
              
              <div class="panel-body">
                 <table class="table table-striped table-bordered table-list">
                    <thead>
                       <tr style="color: blue;">
                        
                          <th class="hidden-xs">ID</th>
                    <th>Tên</th>
                  <th>Tài khoản</th>
                  <th>Mật khẩu</th>
                  <th>Vai trò</th>
                    <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                            </th>






                         


                         
                </tr>
                      </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                     
                         <td class="hidden-xs">{{$user->id}}</td>
                     <td><button class="btn7" onclick="document.getElementById('id03').style.display='block'"
                      style="width:auto;">Phan Phi Hung</button></td>
                  <td>{{$user->username}}</td>
                  <td>{{$user->password}}</td>
                  <td>
                      @if($user->role == 1)
                          superAdmin
                      @elseif($user->role == 2)
                          admin
                      @elseif($user->role ==3)
                          repairManager
                      @elseif($user->role ==4)
                          salesManager
                      @elseif($user->role ==5)
                          teleSale
                      @else
                          salesMan
                      @endif
                  </td>
                   <td>

                    <button class="btn1" onclick="document.getElementById('id01').style.display='block'"
                      style="width:auto;"><i class="fas fa-edit"></i></button>
                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>

                  </td>

                   


                        
                </tr>
                    @endforeach
                     
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
  <!-- add -->





  <div id="id02" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>

      <div class="container">

        <label for="uname"><b>Tên</b></label>
        <input type="text" placeholder="" name="garaname" required>

        <label for="uname"><b>Tài Khoản</b></label>
        <input type="text" placeholder="" name="garaname" required>



        <div class="form-group">

          <label for="uname"><b>Mật khẩu</b></label>
          <div class="input-group mb-3">
            <input type="password" id="ipnPassword" placeholder="" name="psw" style="width: 90%;" required>

            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="btnPassword" style=" border: none;

                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    transition-duration: 0.4s;
                    cursor: pointer;">
                <span class="fas fa-eye"></span>
              </button>
            </div>
          </div>
        </div>

        <label for="uname"><b>Vai trò</b></label>
        <input type="text" placeholder="" name="id" required>











      </div>
      <div class="container" style="background-color:#f1f1f1">

        <button type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 9%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;

           ">Thêm</button>
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn"
          style="margin-left: 10px !important;">Thoát</button>

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

      </div>

      <div class="container">

        <label for="uname"><b>Tên</b></label>
        <input type="text" placeholder="" name="garaname" required>

        <label for="uname"><b>Tài Khoản</b></label>
        <input type="text" placeholder="" name="garaname" required>




        <label for="uname"><b>Mật khẩu</b></label>
        <input type="password" placeholder="" name="psw" required>

        <label for="uname"><b>Vai trò</b></label>
        <input type="text" placeholder="" name="id" required>








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

  <!--detail-->

  <div id="id03" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id03').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <img src="image/hinh-anh-avatar-nam-1.jpg" alt="Avatar" class="avatar">
      </div>

      <div class="container">

        <div>
          <div style="float: left;width: 44%;">
            <label for="uname"><b>Tên</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>

          <div style="float: left; margin-left: 110px;width: 44%;">
            <label for="uname"><b>SĐT</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>


        </div>

        <div>
          <div style="float: left;width: 44%;">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>

          <div style="float: left; margin-left: 110px;width: 44%;">
            <label for="uname"><b>Địa chỉ</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>

        </div>

        <div>
          <div style="float: left;width: 44%;">
            <label for="uname"><b>Tài khoản</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>

          <div style="float: left; margin-left: 110px;width: 44%;">
            <label for="uname"><b>Mật khẩu</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>

        </div>

        <div style="float: left; width: 44%;">
            <label for="uname"><b>Vai trò</b></label>
          <input type="text" placeholder="" name="uname" required>
        </div>










        <div class="container" style="background-color:white; ">
          <button type="button" style="margin: 20px 0 !important;
           margin-right: 100% !important;" onclick="document.getElementById('id03').style.display='none'"
            class="cancelbtn">Thoát</button>

        </div>

      </div>


    </form>
  </div>

  <script>
    // Get the modal
      var modal = document.getElementById('id03');

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
