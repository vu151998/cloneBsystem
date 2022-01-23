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
      <h5 class="card-header font-weight-light" style="text-align: center;">THÊM SẢN PHẨM</h5>
      <!-- list -->
      <!--<div id="test">-->
      <div class="card-body">
        <div class="container">
           
           

              
               <div class="row">
                  <div class="col col-xs-6">
                 <form class="d-flex">


                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search"
                    style="width :210px;border-color: rgba(0,0,0,0.6);height: 43px;">
                </div>

                <div style="float: left;">

                  <button class="btn btn-outline-success" type="submit"><i class="	fas fa-search"></i></button>
                </div>



              </form>
                    </div>
                  <div class="col col-xs-6 text-right">
                    
              <!-- <button type="button" class="btn btn-outline-success" style="margin-top: 23px;margin-left: 200px;" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Thêm mới</button>-->
                    
            </div>



                 </div>
              
              <div class="panel-body">
                 <table class="table table-striped table-bordered table-list">
                    <thead>
                       <tr style="color: blue;">
                        
                          <th class="hidden-xs">STT</th>
                           <th>Mã sản phẩm </th>





                  <th>Tên sản phẩm</th>

                  <th>Ảnh sản phẩm</th>

                  <th>Nhóm sản phẩm </th>
                  <th>Thương hiệu</th>





                  <th>Giá bán </th>



                  <th>Số lượng</th>





                    <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                            </th>






                         


                         
                </tr>
                      </thead>
                    <tbody>
                <tr>
                     
                         <td class="hidden-xs">1</td>
                       
                  <td>MS00001</td>


                  <td>Lốp-50cm-đen</td>

                  <td>acquy.jpg</td>



                  <td>bánh xe</td>
                  <td>honda</td>



                  <td>12.000</td>

                  <td>2</td>





                   <td>

                    <button class="btn1" onclick="document.getElementById('id01').style.display='block'"
                      style="width:auto;"><i class="fas fa-edit"></i></button>
                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>

                  </td>

                   


                        
                </tr>
                      <tr>
                         
                         <td class="hidden-xs">2</td>
                       
                  <td>MS00001</td>


                  <td>Lốp-50cm-đen</td>

                  <td>acquy.jpg</td>



                  <td>bánh xe</td>
                  <td>honda</td>



                  <td>12.000</td>

                  <td>2</td>




                      
                   <td>

                    <button class="btn1" onclick="document.getElementById('id01').style.display='block'"
                      style="width:auto;"><i class="fas fa-edit"></i></button>
                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>

                  </td>

                        
                </tr>
                      <tr>
                        
                         <td class="hidden-xs">3</td>
                       
                  <td>MS00001</td>


                  <td>Lốp-50cm-đen</td>

                  <td>acquy.jpg</td>



                  <td>bánh xe</td>
                  <td>honda</td>



                  <td>12.000</td>

                  <td>2</td>





                   <td>

                    <button class="btn1" onclick="document.getElementById('id01').style.display='block'"
                      style="width:auto;"><i class="fas fa-edit"></i></button>
                    <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>

                  </td>

                        
                </tr>
                      <tr>
                        
                         <td class="hidden-xs">4</td>
                       
                  <td>MS00001</td>


                  <td>Lốp-50cm-đen</td>

                  <td>acquy.jpg</td>



                  <td>bánh xe</td>
                  <td>honda</td>



                  <td>12.000</td>

                  <td>2</td>




                        
                   <td>

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




  <!-- add -->

  <div id="id02" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post" style="width: 750px;">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>

      <div class="container">



        <div style="text-align: center;font-size: 30px;color: blue;"><span>Thêm hàng hóa</span></div>
        <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Mã sản phẩm :</b></label></div>
          <div style="float: left;width: 70%;">
            <input style="border-bottom: 1px solid #ccc !important;" type="text" placeholder="" name="id" required>
          </div>
        </div>

        <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Tên sản phẩm :</b></label></div>
          <div style="float: left;width: 70%;">
            <input style="border-bottom: 1px solid #ccc !important;" type="text" placeholder="" name="id" required>
          </div>
        </div>

        <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Nhóm hàng :</b></label></div>
          <div style="float: left;width: 70%;">
            <input style="border-bottom: 1px solid #ccc !important;" type="text" placeholder="" name="id" required>
          </div>
        </div>

        <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Thương hiệu:</b></label></div>
          <div style="float: left;width: 70%;">
            <input style="border-bottom: 1px solid #ccc !important;" type="text" placeholder="" name="id" required>
          </div>
        </div>

        <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Giá vốn:</b></label></div>
          <div style="float: left;width: 70%;">
            <input style="border-bottom: 1px solid #ccc !important;" type="text" placeholder="" name="id" required>
          </div>
        </div>

        <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Giá bán :</b></label></div>
          <div style="float: left;width: 70%;">
            <input style="border-bottom: 1px solid #ccc !important;" type="text" placeholder="" name="id" required>
          </div>
        </div>

        <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Tồn kho :</b></label></div>
          <div style="float: left;width: 70%;">
            <input style="border-bottom: 1px solid #ccc !important;" type="text" placeholder="" name="id" required>
          </div>
        </div>

        <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Ảnh sản phẩm :</b></label></div>
          <div style="float: left;width: 70%;">
            <input style="border-bottom: 1px solid #ccc !important;" type="text" placeholder="" name="id" required>
          </div>
        </div>


        <div class="input_fields_wrap">
          <button class="btn8 add_field_button" type="button" style="margin-top: 20px;"><i class="fas fa-plus"></i>Thêm
            thuộc tính</button>


        </div>


        <script>
          $(document).ready(function() {
                    var max_fields      = 10; //maximum input boxes allowed
                    var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
                    var add_button      = $(".add_field_button"); //Add button ID
                    
                    var x = 1; //initlal text box count
                    $(add_button).click(function(e){ //on add input button click
                      e.preventDefault();
                      if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append(' <div ><input style="width:30%;" placeholder="Nhập thuộc tính" type="text" name="mytext[]"/><input style="width:30%;margin-left: 20px;" placeholder="Nhập giá trị" type="text" name="mytext[]"/><a href="#" class="remove_field a1" >Remove</a></div>'); //add input box
                        
                      }
                    });
                    
                    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                      e.preventDefault(); $(this).parent('div').remove(); x--;
                    })
                  });
        </script>







      </div>
      <div class="container" style="background-color:white;margin-top: 20px;">
        <button type="submit" style=" background-color: #04AA6D;
                    color: white;
                    width: 9%;
                    height: 40px;
                    border: none;
                    cursor: pointer;
                    border: 1px solid black;
                    
                   ">Lưu</button>
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


        <div>
          <div style="float: left;width: 44%;">
            <label for="uname"><b>Tên sản phẩm</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Ảnh sản phẩm</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Loại</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Hãng</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Kích cỡ</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>
          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Màu sắc</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>


        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Giá bán </b></label>
            <input type="text" placeholder="" name="id" required>
          </div>
          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Số lượng</b></label>
            <input type="text" placeholder="" name="uname" required>
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

  <!--Chi tiêt tho-->

  <div id="id05" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id05').style.display='none'" class="close"
          title="Close Modal">&times;</span>

      </div>

      <div class="container">


        <div>
          <div style="float: left;width: 44%;">
            <label for="uname"><b>Tên sản phẩm</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Ảnh sản phẩm</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Loại</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>

          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Hãng</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>
        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Kích cỡ</b></label>
            <input type="text" placeholder="" name="id" required>
          </div>
          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Màu sắc</b></label>
            <input type="text" placeholder="" name="uname" required>
          </div>


        </div>

        <div>
          <div style="float: left;width: 44%;margin-left: 0px">
            <label for="uname"><b>Giá bán </b></label>
            <input type="text" placeholder="" name="id" required>
          </div>
          <div style="float: left;margin-left: 110px;width: 44%;">
            <label for="uname"><b>Số lượng</b></label>
            <input type="text" placeholder="" name="uname" required>
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