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
      <h5 class="card-header font-weight-light" style="text-align: center;">DASHBOARD</h5>
      <!-- list -->
      <!--<div id="test">-->
      <div class="card-body">
        <div class="container">
           
           

              
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
                   
                    </div>

                 </div>
              
              <div class="panel-body">
                 <table class="table table-striped table-bordered table-list">
                    <thead>
                       <tr style="color: blue;">
                        
                        <th class="hidden-xs">STT</th>
                          <th>Tổng hóa đơn </th>
                  <th>Tổng hóa đơn hoàn thành </th>
                  <th>Tổng hóa đơn bị hủy</th>
                    <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                            </th>






                         


                         
                </tr>
                      </thead>
                    <tbody>
                <tr>
                     
                         <td class="hidden-xs">1</td>
                         <td>10</td>
                  <td>5</td>
                  <td>5</td>
                     
                   <td>
                    <button class="btn3" onclick="document.getElementById('id03').style.display='block'"
                      style="width:auto;"><i class="fas fa-eye"></i></button>


                  </td>
                   


                        
                </tr>
                      <tr>
                         
                      
                      

                         <td class="hidden-xs">2</td>
                         <td>10</td>
                  <td>5</td>
                  <td>5</td>
                     
                      
                   <td>
                    <button class="btn3" onclick="document.getElementById('id03').style.display='block'"
                      style="width:auto;"><i class="fas fa-eye"></i></button>

                  </td>

                        
                </tr>
                      <tr>
                        
                        
                         <td class="hidden-xs">3</td>
                         <td>10</td>
                  <td>5</td>
                  <td>5</td>
                     
                   <td>
                    <button class="btn3" onclick="document.getElementById('id03').style.display='block'"
                      style="width:auto;"><i class="fas fa-eye"></i></button>


                  </td>

                        
                </tr>
                      <tr>
                        
                         
                        <td class="hidden-xs">4</td>
                         <td>10</td>
                  <td>5</td>
                  <td>5</td>
                     
                        
                   <td>
                    <button class="btn3" onclick="document.getElementById('id03').style.display='block'"
                      style="width:auto;"><i class="fas fa-eye"></i></button>


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

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <img src="image/hinh-anh-avatar-nam-1.jpg" alt="Avatar" class="avatar">



      </div>

      <div class="container">



        <label for="uname"><b>id</b></label>
        <input type="text" placeholder="Enter Id" name="id" required>

        <label for="uname"><b>Tổng hóa đơn</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="uname"><b>Tổng hóa đơn bị hủy</b></label>
        <input type="text" placeholder="Enter Garaname" name="garaname" required>

        <label for="uname"><b>Mặt hàng bán chạy nhất</b></label>
        <input type="text" placeholder="Enter Garaname" name="garaname" required>












        <button type="submit" style=" background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;">Add</button>


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


        <label for="uname"><b>id</b></label>
        <input type="text" placeholder="Enter Id" name="id" required>

        <label for="uname"><b>Tổng hóa đơn</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="uname"><b>Tổng hóa đơn bị hủy</b></label>
        <input type="text" placeholder="Enter Garaname" name="garaname" required>

        <label for="uname"><b>Mặt hàng bán chạy nhất</b></label>
        <input type="text" placeholder="Enter Garaname" name="garaname" required>








        <button type="submit" style=" background-color: #04AA6D;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 50%;">Save</button>

      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'"
          class="cancelbtn">Thoát</button>

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

        <label for="uname"><b>id</b></label>
        <input type="text" placeholder="Enter Id" name="id" required>

        <label for="uname"><b>Tổng hóa đơn</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="uname"><b>Tổng hóa đơn bị hủy</b></label>
        <input type="text" placeholder="Enter Garaname" name="garaname" required>

        <label for="uname"><b>Mặt hàng bán chạy nhất</b></label>
        <input type="text" placeholder="Enter Garaname" name="garaname" required>










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

</body>

</html>