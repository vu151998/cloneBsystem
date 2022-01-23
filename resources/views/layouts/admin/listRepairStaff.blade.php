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
      <h5 class="card-header font-weight-light" style="text-align: center;">QUẢN LÝ THÔNG TIN THỢ</h5>
      <!-- list -->
      <!--<div id="test">-->
      <div class="card-body">
        <div class="container">
           
           

              
               <div class="row">
                  <div class="col col-xs-6">
                 <form class="d-flex">


                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm tên thợ" aria-label="Search"
                    style="width :210px;border-color: rgba(0,0,0,0.6);height: 43px;">
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
                  <th>Chức vụ </th>
                  <th>Số điện thoại</th>
                  <th>Email</th>
                  <th>Địa chỉ</th>






                    <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                            </th>






                         


                         
                </tr>
                      </thead>
                    <tbody>
                    @foreach($staffs as $staff)
                        <tr>
                               
                                   <td class="hidden-xs">{{$staff->id}}</td>
                                 
                            <td>{{$staff->name}}</td>
                            <td>
                                @if($staff->role == 1)
                                    thợ
                                @else
                                    kế toán
                                @endif
                            </td>
                            <td>{{$staff->phoneNumber}}</td>
                            <td>{{$staff->email}}</td>
                            <td>{{$staff->address}}</td>






                             <td>

                                <button class="btn1" onclick="document.getElementById('{{$staff->id}}').style.display='block'" style="width:auto;"><i class="fas fa-edit"></i></button>
                                <a href="staffDelete/{{$staff->id}}" class="btn2" id="btn-show-dialog"><em class="fa fa-trash"></em></a>

                            </td>

                             


                                  </tr>
                    @endforeach
                     
              </tbody>
            </table>
                </div>
              
            {{$staffs->links()}}
             
            
           

        </div>
      </div>
      <!--</div>-->
      <!---->
      <!--</div>-->
    </div><!-- Main Col END -->
  </div><!-- body-row END -->
  <!-- add -->





  <div id="id02" class="modal">

      <form class="modal-content animate" action="{{route('staff.store')}}" method="post">
          @csrf
          <div class="imgcontainer">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="admin/image/hinh-anh-avatar-nam-1.jpg" alt="Avatar" class="avatar">



          </div>

          <div class="container">



              <div>
                  <div style="float: left;width: 44%;">
                      <label for="uname"><b>Tên</b></label>
                      <input type="text" placeholder="" name="name" required>
                  </div>

                  <div style="float: left;margin-left: 110px;width: 44%;">
                      <label for="uname"><b>Chức vụ</b></label>
                      <input type="text" placeholder="" name="role" required>
                  </div>
              </div>

              <div>
                  <div style="float: left;width: 44%;margin-left: 0px">
                      <label for="uname"><b>Số điện thoại</b></label>
                      <input type="text" placeholder="" name="phoneNumber" required>
                  </div>

                  <div style="float: left;margin-left: 110px;width: 44%;">
                      <label for="uname"><b>Email</b></label>
                      <input type="text" placeholder="" name="email" required>
                  </div>
              </div>

              <div>
                  <div style="float: left;width: 44%;margin-left: 0px">
                      <label for="uname"><b>Địa chỉ</b></label>
                      <input type="text" placeholder="" name="address" required>
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

           ">Thêm</button>
              <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="margin-left: 10px !important;">Thoát</button>

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
  @foreach($staffs as $staff)
      <div id="{{$staff->id}}" class="modal">

          <form class="modal-content animate" action="{{route('staff.update',$staff->id)}}" method="post">
              @csrf
              @method('put')
              <div class="imgcontainer">
                  <span onclick="document.getElementById('{{$staff->id}}').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="admin/image/hinh-anh-avatar-nam-1.jpg" alt="Avatar" class="avatar">
              </div>

              <div class="container">


                  <div>
                      <div style="float: left;width: 44%;">
                          <label for="uname"><b>Tên</b></label>
                          <input type="text" placeholder="" name="name" value="{{$staff->name}}" required>
                      </div>

                      <div style="float: left;margin-left: 110px;width: 44%;">
                          <label for="uname"><b>Chức vụ</b></label>
                          <input type="text" placeholder="" name="role" value="{{$staff->role}}" required>
                      </div>
                  </div>

                  <div>
                      <div style="float: left;width: 44%;margin-left: 0px">
                          <label for="uname"><b>Số điện thoại</b></label>
                          <input type="text" placeholder="" name="phoneNumber" value="{{$staff->phoneNumber}}" required>
                      </div>

                      <div style="float: left;margin-left: 110px;width: 44%;">
                          <label for="uname"><b>Email</b></label>
                          <input type="text" placeholder="" name="email" value="{{$staff->email}}" required>
                      </div>
                  </div>

                  <div>
                      <div style="float: left;width: 44%;margin-left: 0px">
                          <label for="uname"><b>Địa chỉ</b></label>
                          <input type="text" placeholder="" name="address" value="{{$staff->address}}" required>
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
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="margin-left: 10px !important;">Thoát</button>

              </div>


          </form>
      </div>
  @endforeach

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

  <!--Chi tiêt tho-->

  <div id="id05" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id05').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <img src="image/hinh-anh-avatar-nam-1.jpg" alt="Avatar" class="avatar">
      </div>

      <div class="container">


        <div>
          <div style="float: left;width: 44%;">
            <label for="uname"><b>Tên</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Chức vụ</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Số điện thoại</b></label>
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


        </div>








      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id05').style.display='none'"
          class="cancelbtn">Thoát</button>

      </div>


    </form>
  </div>

  <script>
    // Get the modal
      var modal = document.getElementById('id05');

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
