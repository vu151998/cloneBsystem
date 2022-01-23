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
      <h5 class="card-header font-weight-light" style="text-align: center;">DOANH THU</h5>
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
            <div>
              <label for="status" style="margin-left: 40px;margin-top: 10px;">Tổng doanh thu:</label>
              <input type="text" placeholder="" name="uname"
                style="margin-right: 300px;width: 150px; border-radius:5px;border-color: rgba(0,0,0,0.6);height: 43px;"
                disabled>
            </div>
                 
          </div>
              
              <div class="panel-body">
                 <table class="table table-striped table-bordered table-list">
                    <thead>
                       <tr style="color: blue;">
                        
                          <th class="hidden-xs">ID</th>
                          <th>Thời gian</th>
                  <th>Mã đơn hàng sản phẩm</th>
                  <th>Mã đơn hàng dịch vụ</th>

                  <th> Tổng doanh thu</th>







                         


                         
                </tr>
                      </thead>
                    <tbody>
                <tr>
                     
                         <td class="hidden-xs">1</td>
                        <td>11/11/2021</td>
                  <td> <button class="btn7" onclick="document.getElementById('id03').style.display='block'"
                      style="width:auto;">MDSP0001</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id05').style.display='block'"
                      style="width:auto;">MDDV0002</button></td>
                  <td>40.000</td>

                   


                        
                </tr>
                      <tr>
                         
                      
                      

                        
                         <td class="hidden-xs">1</td>
                        <td>11/12/2021</td>
                  <td> <button class="btn7" onclick="document.getElementById('id03').style.display='block'"
                      style="width:auto;">MDSP0001</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id05').style.display='block'"
                      style="width:auto;">MDDV0002</button></td>
                  <td>40.000</td>

                        
                </tr>
                      <tr>
                        
                        
                         <td class="hidden-xs">1</td>
                        <td>11/13/2021</td>
                  <td> <button class="btn7" onclick="document.getElementById('id03').style.display='block'"
                      style="width:auto;">MDSP0001</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id05').style.display='block'"
                      style="width:auto;">MDDV0002</button></td>
                  <td>40.000</td>

                        
                </tr>
                      <tr>
                        
                          <td class="hidden-xs">1</td>
                        <td>11/14/2021</td>
                  <td> <button class="btn7" onclick="document.getElementById('id03').style.display='block'"
                      style="width:auto;">MDSP0001</button></td>
                  <td><button class="btn7" onclick="document.getElementById('id05').style.display='block'"
                      style="width:auto;">MDDV0002</button></td>
                  <td>40.000</td>
                        
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









  <!--detail mã đơn sản phẩm-->

  <div id="id03" class="modal">

    <form class="modal-content animate" action="/action_page.php" style="width:50%;" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id03').style.display='none'" class="close"
          title="Close Modal">&times;</span>

      </div>

      <div class="container">



        <div class="panel-body">
               <table class="table table-striped table-bordered table-list">
                  <thead>
                     <tr style="color: blue;">
                      
                        <th class="hidden-xs">ID</th>
                       
                <th>Mã đơn hàng sản phẩm</th>


                <th> Doanh thu</th>







                       


                       
              </tr>
                    </thead>
                  <tbody>
              <tr>
                   
                       <td class="hidden-xs">1</td>
                      
                <td>MDSP0001</td>

                <td>2.000</td>

                 


                      
              </tr>
                    <tr>
                       
                    
                    

                       <td class="hidden-xs">2</td>
                     <td>MDSP0001</td>

                <td>2.000</td>
                    


                      
              </tr>
                    <tr>
                      
                      
                       <td class="hidden-xs">3</td>
                      <td>MDSP0001</td>

                <td>2.000</td>


                      
              </tr>
                    <tr>
                      
                       
                       <td class="hidden-xs">4</td>
                       <td>MDSP0001</td>

                <td>2.000</td>
                      

                      
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
        <button type="button" onclick="document.getElementById('id03').style.display='none'"
          class="cancelbtn">Thoát</button>

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

  <!--detail mã đơn dịch vụ-->

  <div id="id05" class="modal">

    <form class="modal-content animate" action="/action_page.php" style="width:50%;" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id05').style.display='none'" class="close"
          title="Close Modal">&times;</span>

      </div>

      <div class="container">



        <div class="panel-body">
               <table class="table table-striped table-bordered table-list">
                  <thead>
                     <tr style="color: blue;">
                      
                        <th class="hidden-xs">ID</th>
                       
                <th>Mã đơn hàng dịch vụ</th>


                <th> Doanh thu</th>







                       


                       
              </tr>
                    </thead>
                  <tbody>
              <tr>
                   
                       <td class="hidden-xs">1</td>
                      
                <td>MDDV0001</td>

                <td>2.000</td>

                 


                      
              </tr>
                    <tr>
                       
                    
                    

                       <td class="hidden-xs">2</td>
                   <td>MDDV0001</td>

                <td>2.000</td>
                    
                 

                      
              </tr>
                    <tr>
                      
                      
                       <td class="hidden-xs">3</td>
                      <td>MDDV0001</td>

                <td>2.000</td>

                      
              </tr>
                    <tr>
                      
                       
                       <td class="hidden-xs">4</td>
                       <td>MDDV0001</td>

                <td>2000</td>
                      
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
        <button type="button" onclick="document.getElementById('id05').style.display='none'"
          class="cancelbtn">Thoát</button>

      </div>

    </form>
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