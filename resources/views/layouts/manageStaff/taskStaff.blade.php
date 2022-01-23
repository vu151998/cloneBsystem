<!DOCTYPE html>
<html lang="en">
<livewire:header-admin>
<body style="background-color: white;">
  
<livewire:navbar-admin>
  <!-- Bootstrap row -->
  <div class="row" id="body-row">
   
    <livewire:staff-sidebar>
        <!-- MAIN -->
          <div class="col p-4">
              <!--<h1 class="display-4">Thợ</h1>-->
              <!--<div class="card">-->
                  <h5 class="card-header font-weight-light" style="text-align: center;">     
                    <div>
                    <div style="float: left;width: 50%;">
                    <button onclick="window.location.href='/listBillStaff'" class="btn11">Quản lý đơn hàng</button>
                    </div>
       
                   <div onclick="window.location.href='/taskStaff'" style="float: left;width: 50%;">
                       <button class="btn10">Phân chia công việc</button>
                    </div>
                   </div>
                </h5>
                  <!-- list -->
                  <!--<div id="test">-->
                  <div class="card-body">
                    <div class="imgcontainer">
    
                     </div>
                    <div class="container">   
                         
                         <div class="row" > 
                              <div class="col col-xs-6"> 
                                  <form class="d-flex">
                              
                            
                               </form>
                              </div> 
                           
                             </div> 
                            
                        
                        <div>
                            <form action="/action_page.php">
                              <label for="status" style="margin-left: 40px;">Trạng thái đơn:</label>
                              <select name="status" id="status"
                                style="width: 150px; border-radius:5px;height: 43px;text-align: center;">
                                <option value="">Tất cả  </option>
                                <option value="">Đang thực hiện</option>
                                <option value="">Chưa thực hiện</option>
              
              
                              </select>
              
                            </form>
                          </div>
                             
                            
                              

                                 
                                
                                
                        
                                  
                                  <div class="panel-body" >
                                         <table class="table table-striped table-bordered table-list nowrap" >
                                            <thead>
                                               <tr style="color: blue;">
                                                
                                                  <th class="hidden-xs">STT</th>
                                          <th>Mã đơn hàng</th>
                                       
                                       
                                          <th>Thời gian hẹn</th>
                                          <th>Tên khách</th>
                                          <th>Tổng tiền</th>
                                          <th>Khách nợ</th>
                                          <th>Trạng thái đơn</th>
                                          <th>Danh sách thợ thực hiện</th>
                                      
                                           <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                                                  </th>
                                                    
                                            
    
                                            
                                               
                                                 
                                        

                                        
                        
                        
                        
                        
                        
                        
                                                 
                        
                        
                                                 
                                        </tr>
                                              </thead>
                                            <tbody>
                                        <tr>
                                             
                                                   <td class="hidden-xs">1</td>
                                               <td><button class="btn7" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">FAF303030</button></td>
                                          
                                            <td>8:00 14/12/2021</td>
                                            <td>Anh Vũ</td>
                                     
                                           
                                            <td>700.000</td>
                                            <td>400.000</td>
                                            <td>Đang thực hiện</td>
                                            <td>Vula</td>
                                            <td>
                                                <button onclick="document.getElementById('id061').style.display='block'" style="width:auto;" class="btn5">Chọn thợ</button>
                                                <button onclick="document.getElementById('id060').style.display='block'" style="width:auto;" class="btn5">Xuất đơn</button>
                                            </td>
                                           
                                   
                        
                                           
                        
                        
                                                
                                        </tr>
                                              <tr>
                                                 
                                                 <td class="hidden-xs">2</td>
                                           <td><button class="btn7" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">FAF303030</button></td>
                                          
                                            <td>8:00 14/12/2021</td>
                                            <td>Anh Vũ</td>
                                     
                                           
                                            <td>700.000</td>
                                            <td>400.000</td>
                                            <td>Đang thực hiện</td>
                                            <td></td>
                                            <td>
                                                <button onclick="document.getElementById('id061').style.display='block'" style="width:auto;" class="btn5">Chọn thợ</button>
                                                <button  onclick="document.getElementById('id060').style.display='block'" style="width:auto;" class="btn5">Xuất đơn</button>
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

   

      

     
      
      
      
     




<!--add dịch vụ-->
<div id="id05" class="modal">
        
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label for="uname" style="font-size: 30px;text-align: center;color: blue;;"><b>Dịch vụ và sản phẩm</b></label>
    </div>

    <div class="container">
     
      
           <div class="row" > 
            
    
           
             </div> 
            
            <div class="panel-body"> 
             <table class="table table-striped table-bordered table-list"> 
              <thead> 
               <tr style="color: blue;"> 
                <th class="hidden-xs">STT</th> 
          <th>Dịch vụ sản phẩm</th>
          
          <th>Số lượng</th>
         
          
          <th>Đơn giá</th>
          <th>Thành tiền</th>
          <th>Trạng thái</th>
          <th>Ghi chú</th>
         
      
     </tr> 
              </thead> 
              <tbody>
          <tr> 
           
               <td class="hidden-xs">1</td> 

               <td>Camera Vietmap</td>
               <td>1</td>
               
              
           
               <td>5,000,000</td>
               
               
               <td>5,000,000</td>
             
               
               
                 <td>Không hoàn thành </td>
               <td>Khách muốn đổi sản phẩm</td>

                
             
              
              </tr> 
              <tr> 
                 
                
             <td class="hidden-xs">2</td> 

            <td>Kích bình ác quy</td>
            <td>1</td>
            
           
        
            <td>200,000</td>
            
            
            <td>200,000</td>
          
            
            
              <td>Hoàn thành </td>
            <td></td>
              </td>
               
              </tr> 
              <tr> 
                
               
             <td class="hidden-xs">3</td> 

            <td>Thay lốp</td>
            <td>1</td>
            
           
        
            <td>500,000</td>
            
            
            <td>500,000</td>
          
            
            
              <td>Hoàn thành </td>
            <td></td>
              
              </tr> 
              
             </tbody></table> 
            </div> 
            
            

   
       

                    
   

      
        
   

        <div class="container" style="background-color:white">
              
            <button onclick="document.getElementById('id05').style.display='none'" type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 9%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;
            margin-left: 90%;
            margin-top: 20px;
           ">Trở về </button>
            
            
          </div>
       

     </div>
     
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










<!--Chọn thợ-->

<div id="id061" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id061').style.display='none'" class="close"
          title="Close Modal">&times;</span>

         
        

      </div>
    


          
          <label style="font-size: 20px;color: blue;text-align: center">Chi tiết thợ</label>
      <div class="container">

          <div class="row">
                  <div class="col col-xs-6">
                 <form class="d-flex">


                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm thợ"
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
                  <th>Thợ</th>
                  <th>Mã hóa đơn</th>
                  <th>Ngày hẹn khách</th>
                  <th>Khách hàng </th>
                  <th>Trạng thái</th>
                
                    <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                            </th>






                         


                         
                </tr>
                      </thead>
                    <tbody>
                <tr>
                     
                           <td class="hidden-xs">1</td>
                       <td>Phan Phi Hung</td>
                    <td>HD000534</td>
                    <td >02/08/2021</td>
                    <td >Tran Hoang</td>
                    <td >Đang tiến hành</td>
                    
                     <td>
          
                      <button class="btn5" onclick="window.location.href='/taffStaff'" style="width:auto;">Chọn</button>
                     
          
                    </td>
          

                   


                        
                </tr>
                      <tr>
                         
                         <td class="hidden-xs">2</td>
                    <td>Phan Phi Hung</td>
                    <td>HD000534</td>
                    <td >02/08/2021</td>
                    <td >Tran Hoang</td>
                    <td >Đang tiến hành</td>
                    
                     <td>
          
                      <button class="btn5" onclick="window.location.href='/taffStaff'" style="width:auto;">Chọn</button>
                     
          
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
  



    </form>
  </div>

  <script>
    // Get the modal
      var modal = document.getElementById('id061');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
  </script>


<!--Hóa đơn-->

<div id="id060" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id060').style.display='none'" class="close"
          title="Close Modal">&times;</span>

         
        

      </div>
    

      <div>
        <div style="float: left;width: 40%;margin-left: 50px">
        <label for="uname"><b>Cty :BigGara </b></label>
       
         </div>

        <div style="float: left;margin-left: 140px;width: 40%;">
        <label for="uname"><b>Số điện thoại :0906679611</b></label>
        
         </div>
        </div>

        <div>
            <div style="float: left;width: 40%;margin-left: 50px">
            <label for="uname"><b>Địa chỉ:E37,KDC Park Riverside,đường Bưng Ông Thoàn,phường Phú Hữu,TP Thủ Đức,TP HCM </b></label>
           
             </div>
    
            <div style="float: left;margin-left: 140px;width: 40%;">
            <label for="uname"><b>Gara: 0909230574</b></label>
            
             </div>
            </div>

          <label style="font-size: 20px;color: blue;text-align: center">Danh sách dịch vụ phụ tùng trực tiếp cho người tiêu dùng</label>
          <label style="font-size: 20px;color: blue;text-align: center">Ngày 12 tháng 12 năm 2021</label>
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
         

                <label style="margin-left: 50%" for=""><b>Nhân viên sửa chữa : </b></label>
                <label for=""><b>Anh vũ</b></label>

                
               






      </div>
      <div class="container" style="background-color:white">

        <button onclick="window.location.href='/listOderManSale'" type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 9%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;
            margin-left: 80%;
            
           ">In</button>


        
      </div>



    </form>
  </div>

  <script>
    // Get the modal
      var modal = document.getElementById('id060');
      
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