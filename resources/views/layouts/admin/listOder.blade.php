<!DOCTYPE html>
<html lang="en">
<livewire:header-admin>
<body style="background-color: white;">
  
<livewire:navbar-admin>
  <!-- Bootstrap row -->
  <div class="row" id="body-row">
   
    <livewire:counter-admin>
        <!-- MAIN -->
          <div class="col p-4">
              <!--<h1 class="display-4">Thợ</h1>-->
              <!--<div class="card">-->
                  <h5 class="card-header font-weight-light" style="text-align: center;">THÊM ĐƠN</h5>
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
                              <label for="uname"><b>Email</b></label>
                              <input type="text" placeholder="" name="id" required>
                               </div>
                  
                              <div style="float: left;margin-left: 110px;width: 43%;">
                              <label for="uname"><b>Địa chỉ</b></label>
                              <input type="text" placeholder="" name="uname" required>
                               </div>
                              </div>
              
                             
                            
                                <div>
                                   
                                  <div style="float: left;width:  20%;margin-top: 35px">
                                    <!--<button class="btn5" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">dịch vụ</button>
                                    <button class="btn5" onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Sản phẩm</button>
                                    <button class="btn5" onclick="document.getElementById('id09').style.display='block'" style="width:auto;">Thợ</button>-->
                                    <form action="/action_page.php">
                                      <label for="staffs"><b>Thợ:</b></label>
                                      <select name="staffs" id="staffs" multiple>
                                        <option value="1">Phan Phi Hùng</option>
                                        <option value="2">Tô Xuân Anh Quân</option>
                                        <option value="3">Trần Việt Hoàng</option>
                                        <option value="4">Phan Ngọc Đức</option>
                                        <option value="5">Anh Vũ</option>
                                    
                                      </select>
                                     
                                    </form>
                                    </div>
                
                                    <div style="float: left;width: 43%;margin-top: 46px;margin-right:0px ;">
                                      <button class="btn8" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Đặt dịch vụ</button>
                                      <button class="btn8" onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Đặt sản phẩm</button>
                                      </div>
              
                                 
                                  </div>

                                  <div style="float: left;width: 43%;margin-right: 400px;margin-top: 20px;">
                                     <label for="">(CTRL + chuột trái để chọn nhiều thợ)</label>
                                  </div>

                                 
                                  

                                 
                                  
                                  
                                  <div>
                                    <hr class="new5"/>
                                    <label for="uname" style="font-size: 30px;margin-left: 44%;color: blue;margin-top: 30px;"><b>GIỎ HÀNG</b></label>
                                </div>

                                  <!--giỏ dịch vụ-->
                                  <label for="uname" style="font-size: 20px;text-align: center;color: blue;margin-top: 30px;"><b>Dịch vụ</b></label>
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
                                      
                            
                                      
                                      
                                  
                                    
                                      
                                      
                                      
                            
                                              <th ><em class="fa fa-cog" style="margin-left: 30%;" ></em>
                                                    </th> 
                                     
                                           
                                          
                            
                                            
                                            
                                           
                                        
                                            
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
                                      
                                            <td>
                                            
                                 
                                            <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>
                                         
                                          </td>
                            
                                            
                                         
                                          
                                          </tr> 
                                          <tr> 
                                             
                                            
                                               <td class="hidden-xs">2</td> 
                            
                                        <td>MDV001</td>
                                        <td>Thay lốp</td>
                                        
                                        <td>lop.jpg</td>
                                    
                                        <td>nhanh chóng</td>
                                        
                                        
                                        <td>12.000</td>
                                      
                            
                                        
                                            <td>
                                            
                                            <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>
                                         
                                          </td>
                                           
                                          </tr> 
                                          <tr> 
                                            
                                           
                                               <td class="hidden-xs">3</td> 
                            
                                        <td>MDV001</td>
                                        <td>Thay lốp</td>
                                        
                                        <td>lop.jpg</td>
                                    
                                        <td>nhanh chóng</td>
                                        
                                        
                                        <td>12.000</td>
                                      
                            
                                            <td>
                                            
                                            
                                            <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>
                                          </td>
                                          
                                          </tr> 
                                          <tr> 
                                            
                                            
                                               <td class="hidden-xs">4</td> 
                            
                                        <td>MDV001</td>
                                        <td>Thay lốp</td>
                                        
                                        <td>lop.jpg</td>
                                    
                                        <td>nhanh chóng</td>
                                        
                                        
                                        <td>12.000</td>
                                      
                                            <td>
                                            
                                            <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>
                                         
                                          </td>
                                          </tr>
  
                                    
                                         </tbody></table> 
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
                                     
                                    <div>
                                    <label for="uname" style="font-size: 15px;margin-left:600px;color: blue;margin-bottom: 0px;"><b>Tổng thanh toán dịch vụ:</b></label>
                                    <label for="uname" style="font-size: 15px;;color:black;margin-top: 20px;"><b>50000 Đ</b></label>
                                    </div>

                                    <!--giỏ Sản Phẩm-->
           <div>
          <label for="uname" style="font-size: 20px;color: blue;margin-top: 40px;"><b>Sản phẩm</b></label>
        </div>
                                     
            <div class="panel-body"> 
               <table class="table table-striped table-bordered table-list"> 
                <thead> 
                 <tr style="color: blue;"> 
                
                    <th class="hidden-xs">ID</th> 
              

                
                   
                 <th>Mã sản phẩm </th>

                



                  <th>Tên sản phẩm</th>

                  <th>Ảnh sản phẩm</th>

                  <th>Nhóm sản phẩm</th>
                  <th>Thương hiệu</th>
                  
                 

                 

                  <th>Giá bán </th>



                  <th>Số lượng</th>

                    <th ><em class="fa fa-cog" style="margin-left: 30px;" ></em>
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
                  <button class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></button>
               
                </td>
                </tr> 
               </tbody></table> 
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

        <div>
          <label for="uname" style="font-size: 15px;margin-left:600px;color: blue;margin-bottom: 0px;"><b>Tổng thanh toán sản phẩm:</b></label>
                            <label for="uname" style="font-size: 15px;;color:black;margin-top: 20px;"><b>50000 Đ</b></label>
          </div>
              
                                 
              
                          
         <label for="uname" style="font-size: 25px;margin-left:550px;color: blue;margin-top: 20px;"><b>Tổng thanh toán:</b></label>
         <label for="uname" style="font-size: 20px;color:black;margin-top: 20px;"><b>100000 Đ</b></label>
                       
                        </div>
                        <div style="background-color:white;margin-top: 40px;">
              
                            <button type="submit" style=" background-color: #04AA6D;
                            color: white;
                            width: 9%;
                            height: 40px;
                            border: none;
                            cursor: pointer;
                            border: 1px solid black;
                            
                           ">Thêm</button>
                            <button type="button"  class="cancelbtn" style="margin-left: 2% !important;">Xóa</button>
                
                            
                          </div>
                  </div>
              
                <!--</div>-->
                  <!---->
              <!--</div>-->
          </div><!-- Main Col END -->
      </div><!-- body-row END -->
      <!-- add -->

   

      

     
      
      
      
     



<script> // code Javascript edit
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

<!--add dịch vụ-->
<div id="id05" class="modal">
        
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label for="uname" style="font-size: 30px;text-align: center;color: blue;;"><b>Dịch vụ</b></label>
    </div>

    <div class="container">
     
      
           <div class="row" > 
              <div class="col col-xs-6"> 
                  <form class="d-flex">
              
                 
                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm dịch vụ" aria-label="Search" style="width :210px;border-color: rgba(0,0,0,0.6);height: 43px;">
                </div>

                 <div  style="float: left;">
             
                <button class="btn btn-outline-success" type="submit"><i class="	fas fa-search"></i></button>
                </div>

            
              </form>
              </div> 
           
             </div> 
            
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
         
      
        
          
          
          

                  <th ><em class="fa fa-cog" style="margin-left: 30%;" ></em>
                        </th> 
         
               
              

                
                
               
            
                
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
             
               
               
                <td>
                
     
               <button class="btn5">Thêm</button>
             
              </td>

                
             
              
              </tr> 
              <tr> 
                 
                
             <td class="hidden-xs">2</td> 

            <td>MDV001</td>
            <td>Thay lốp</td>
            
            <td>lop.jpg</td>
        
            <td>nhanh chóng</td>
            
            
            <td>12.000</td>
          

            
                <td>
                
                <button class="btn5">Thêm</button>
             
              </td>
               
              </tr> 
              <tr> 
                
               
             <td class="hidden-xs">3</td> 

            <td>MDV001</td>
            <td>Thay lốp</td>
            
            <td>lop.jpg</td>
        
            <td>nhanh chóng</td>
            
            
            <td>12.000</td>
          
                <td>
                
            <button class="btn5">Thêm</button>
             
              </td>
              
              </tr> 
              <tr> 
                
                
            <td class="hidden-xs">4</td> 

            <td>MDV001</td>
            <td>Thay lốp</td>
            
            <td>lop.jpg</td>
        
            <td>nhanh chóng</td>
            
            
            <td>12.000</td>
          
                <td>
                
                <button class="btn5">Thêm</button>
             
              </td>
              </tr> 
             </tbody></table> 
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
   

      
        
   

        <div class="container" style="background-color:#f1f1f1">
              
            <button type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 9%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;
            
           ">Xác nhận</button>
            <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn" style="margin-left: 10px !important;">Thoát</button>
            
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



<!--Add sản phẩm-->

<div id="id07" class="modal">
        
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label for="uname" style="font-size: 30px;text-align: center;color: blue;;"><b>Sản phẩm</b></label>
    </div>

    <div class="container">
     
      
           <div class="row" > 
              <div class="col col-xs-6"> 
                  <form class="d-flex">
              
                 
                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" style="width :210px;border-color: rgba(0,0,0,0.6);height: 43px;">
                </div>

                 <div  style="float: left;">
             
                <button class="btn btn-outline-success" type="submit"><i class="	fas fa-search"></i></button>
                </div>
               
                <div style="float: left; margin-left: 20px;margin-top: 10px;">
                <label for="status" style="margin-top: 0;" >Danh mục sản phẩm:</label>
                </div>

                <div style="float: left;">
                    <form action="/action_page.php">
                    
                      <select name="status" id="status" style="width: 150px; border-radius:5px;height: 43px;margin-right: 0px;margin-left: 5px;text-align: center;">
                        <option value="">Nội thất</option>
                        <option value="">Ngoại thất</option>
                        <option value="">Phụ kiện,đồ chơi công nghệ</option>
                        <option value="">Sản phẩm theo dòng xe</option>
                       
                      </select>
                     
                    </form>
                  </div>

                  <div style="float: left; margin-left: 20px;margin-top: 10px;">
                    <label for="status" style="margin-top: 0;" >Danh mục con:</label>
                    </div>

                <div style="float: left;">
                    <form action="/action_page.php">
                      
                      <select name="status" id="status" style="width: 150px; border-radius:5px;height: 43px;margin-left: 5px;text-align: center;">
                        <option value="">Toyota</option>
                        <option value="">Honda</option>
                        <option value="">hyundai</option>
                        <option value="">Ford</option>
                       
                      </select>
                     
                    </form>
                  </div>

                  <div style="float: left;">

                   <button type="button" class="btn btn-outline-success" style="margin-top: 23px;margin-left: 0px;" onclick="document.getElementById('id023').style.display='block'" style="width:auto;">Thêm mới</button> 

                </div>
              </form>
           
              </div> 
             
                 <!-- <div class="col col-xs-6 text-right" > 
                        <form action="/action_page.php">
                    <label for="status" style="margin-left: 0px;margin-top: 0px;margin-right: 200px;" >Danh mục sản phẩm:</label>
                    <select name="status" id="status" style="width: 150px; border-radius:5px;height: 43px;margin-left: 0px ;">
                      <option value="">Nội thất</option>
                      <option value="">Ngoại thất</option>
                      <option value="">Phụ kiện,đồ chơi công nghệ</option>
                      <option value="">Sản phẩm theo dòng xe</option>
                     
                    </select>
                   
                  </form> 
                      </div> -->
             
       
             </div> 
            
            <div class="panel-body"> 
               <table class="table table-striped table-bordered table-list"> 
                <thead> 
                 <tr style="color: blue;"> 
                
                    <th class="hidden-xs">ID</th> 
              

                
                   
                 <th>Mã sản phẩm </th>

                



                  <th>Tên sản phẩm</th>

                  <th>Ảnh sản phẩm</th>

                  <th>Nhóm sản phẩm</th>
                  <th>Thương hiệu</th>
                  
                

                 

                  <th>Giá bán </th>



                  <th>Số lượng</th>
                  <th>Tồn kho</th>

                    <th ><em class="fa fa-cog" style="margin-left: 30%;" ></em>
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
                                      <td>7</td>

              

                  <td>
                  <button class="btn3"  style="width:auto;"><i class="fas fa-caret-up"></i></button>
                  <button class="btn1"  style="width:auto;"><i class="	fas fa-caret-down"></i></button>
                 <button class="btn5" style="width:auto;">Thêm</button>
               
                </td>

                  
               
                
                </tr> 
                <tr> 
                   
                   <td class="hidden-xs">1</td> 
                

                 

                  
                 
            <td>MS00001</td>

                                    
            <td>Lốp-50cm-đen</td>

            <td>acquy.jpg</td>


           
            <td>bánh xe</td>
            <td>honda</td>

            

            <td>12.000</td>

            <td>2</td>
            <td>7</td>
                  <td>
                  <button class="btn3"  style="width:auto;"><i class="fas fa-caret-up"></i></button>
                  <button class="btn1"  style="width:auto;"><i class="	fas fa-caret-down"></i></button>
                 <button class="btn5" style="width:auto;">Thêm</button>
               
                </td>
                 
                </tr> 
                <tr> 
                  
                  <td class="hidden-xs">1</td> 
                

                 

                  
                 
            <td>MS00001</td>

                                    
            <td>Lốp-50cm-đen</td>

            <td>acquy.jpg</td>


           
            <td>bánh xe</td>
            <td>honda</td>

            

            <td>12.000</td>

            <td>2</td>
            <td>7</td>
              

           

                  <td>
                  <button class="btn3"  style="width:auto;"><i class="fas fa-caret-up"></i></button>
                  <button class="btn1"  style="width:auto;"><i class="	fas fa-caret-down"></i></button>
                 <button class="btn5" style="width:auto;">Thêm</button>
               
                </td>
                
                </tr> 
                <tr> 
                  
                   <td class="hidden-xs">1</td> 
                

                 

                  
                 
            <td>MS00001</td>

                                    
            <td>Lốp-50cm-đen</td>

            <td>acquy.jpg</td>


           
            <td>bánh xe</td>
            <td>honda</td>

            

            <td>12.000</td>

            <td>2</td>
                                      <td>7</td>

                
                  <td>
                  <button class="btn3"  style="width:auto;"><i class="fas fa-caret-up"></i></button>
                  <button class="btn1"  style="width:auto;"><i class="	fas fa-caret-down"></i></button>
                 <button class="btn5" style="width:auto;">Thêm</button>
               
                </td>
                </tr> 
               </tbody></table> 
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
   

      
        
   

        <div class="container" style="background-color:#f1f1f1">
              
            <button type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 9%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;
            
           ">Xác nhận</button>
            <button type="button" onclick="document.getElementById('id07').style.display='none'" class="cancelbtn" style="margin-left: 10px !important;">Thoát</button>
            
          </div>
       

     </div>
     
    </div>

    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id07');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




<!-- add sản phẩm nếu sản phẩm ko tồn tại -->

   

      

<div id="id023" class="modal">
        
  <form class="modal-content animate" action="/action_page.php" style="width: 750px;" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id023').style.display='none'" class="close" title="Close Modal">&times;</span>
     


      
    </div>

    <div class="container">

      
      
      <div  style="text-align: center;font-size: 30px;color: blue;"><span >Thêm hàng hóa</span></div>
      <div>
        <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Mã sản phẩm :</b></label></div>
        <div style="float: left;width: 70%;">
        <input  style= "border-bottom: 1px solid #ccc !important;"type="text" placeholder="" name="id" required>
      </div> 
      </div>

      <div>
        <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Tên sản phẩm :</b></label></div>
        <div style="float: left;width: 70%;">
        <input  style= "border-bottom: 1px solid #ccc !important;"type="text" placeholder="" name="id" required>
      </div> 
      </div>

      <div>
        <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Nhóm hàng :</b></label></div>
        <div style="float: left;width: 70%;">
        <input  style= "border-bottom: 1px solid #ccc !important;"type="text" placeholder="" name="id" required>
      </div> 
      </div>

      <div>
        <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Thương hiệu:</b></label></div>
        <div style="float: left;width: 70%;">
        <input  style= "border-bottom: 1px solid #ccc !important;"type="text" placeholder="" name="id" required>
      </div> 
      </div>

      <div>
        <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Giá vốn:</b></label></div>
        <div style="float: left;width: 70%;">
        <input  style= "border-bottom: 1px solid #ccc !important;"type="text" placeholder="" name="id" required>
      </div> 
      </div>

        <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Giá bán :</b></label></div>
          <div style="float: left;width: 70%;">
          <input  style= "border-bottom: 1px solid #ccc !important;"type="text" placeholder="" name="id" required>
        </div> 
        </div>

         <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Tồn kho :</b></label></div>
          <div style="float: left;width: 70%;">
          <input  style= "border-bottom: 1px solid #ccc !important;"type="text" placeholder="" name="id" required>
        </div> 
        </div>

        <div>
          <div style="width: 20%;float: left;margin-top: 30px;"><label for="uname"><b>Ảnh sản phẩm :</b></label></div>
          <div style="float: left;width: 70%;">
          <input  style= "border-bottom: 1px solid #ccc !important;"type="text" placeholder="" name="id" required>
        </div> 
        </div>


        <div class="input_fields_wrap">
              <button class="btn8 add_field_button" type="button" style="margin-top: 20px;"><i class="fas fa-plus"></i>Thêm thuộc tính</button>
             
          
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
    <div class="container" style="background-color:#f1f1f1">
        
      <button type="submit" style=" background-color: #04AA6D;
      color: white;
      width: 9%;
      height: 40px;
      border: none;
      cursor: pointer;
      border: 1px solid black;
      
     ">Thêm</button>
      <button type="button" onclick="document.getElementById('id023').style.display='none'" class="cancelbtn" style="margin-left: 10px !important;">Thoát</button>
      
    </div>


    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id023');

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