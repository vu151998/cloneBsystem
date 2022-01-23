<!DOCTYPE html>
<html lang="en">

<livewire:header-admin />

<body style="background-color: white;">

  <livewire:navbar-admin/>
  <!-- Bootstrap row -->

  <div class="row" id="body-row">

    <livewire:staff-sidebar />
    <!-- MAIN -->
    <div class="col p-4">
      <!--<h1 class="display-4">Thợ</h1>-->
      <!--<div class="card">-->
      <h5 class="card-header font-weight-light" style="text-align: center;">Thống kê công việc của thợ</h5>
      <!-- list -->
      <!--<div id="test">-->
      <div class="card-body">
        <div class="container">
           
           

              
               <div class="row">
                  <div class="col col-xs-6">
                 <form class="d-flex">


                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm tên thợ"
                    aria-label="Search" style="width :220px;border-color: rgba(0,0,0,0.6);height: 43px;">
                </div>

                <div style="float: left;">

                  <button class="btn btn-outline-success" type="submit"><i class="	fas fa-search"></i></button>
                </div>



              </form>
                    </div>
                <div class="col col-xs-3">
                    <label style="padding-top: 40px;">thống kê ngày: </label>
                    <input style="width: 50%;padding-bottom: 0px" type="date">
                </div>
                <div class="col col-xs-3">
                    <label style="padding-top: 40px;">đến ngày: </label>
                    <input style="width: 50%;padding-bottom: 0px" type="date">
                </div>
                 </div>
              
              <div class="panel-body">
                 <table class="table table-striped table-bordered table-list nowrap" >
                    <thead>
                       <tr style="color: blue;">
                        
                          <th class="hidden-xs">STT</th>
                  <th>Thợ</th>
                  <th>Số hóa đơn hoàn thành</th>
                  <th>Số hóa đơn chưa hoàn thành</th>
                  <th>Số hóa đươn bị hủy</th>

                  <th>tổng thời gian hoàn thành</th>








                         


                         
                </tr>
                      </thead>
                    <tbody>
                @foreach($listWorkers as $index => $worker)
                <tr>
                     
                           <td class="hidden-xs">
                        {{($listWorkers->currentPage()-1) * $listWorkers->perPage() + $index + 1 }}
                    </td>
                     
                       <td> <button class="btn7" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">{{$worker->name}}</button></td>
                    <td>{{$arrComplete[($listWorkers->currentPage()-1) * $listWorkers->perPage() + $index]}}</td>
                    <td >{{$arrInComplete[($listWorkers->currentPage()-1) * $listWorkers->perPage() + $index]}}</td>
                    <td >{{$arrCancel[($listWorkers->currentPage()-1) * $listWorkers->perPage() + $index]}}</td>

                    <td>{{$arrTime[($listWorkers->currentPage()-1) * $listWorkers->perPage() + $index]}} công</td>





                   


                        
                </tr>
                @endforeach
                     
              </tbody>
            </table>
                </div>
              
               {{$listWorkers->links()}}
             
            
           

        </div>
      </div>
      <!--</div>-->
      <!---->
      <!--</div>-->
    </div><!-- Main Col END -->
  </div><!-- body-row END -->




  <!-- Chi tiết đơn hàng -->

  <div id="id02" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>




      </div>
          <label style="font-size: 30px;color: blue;text-align: center">Chi tiết thợ</label>

      <div class="container">

         <div class="row">
                  <div class="col col-xs-6">
                 <form class="d-flex">


                <div style="float: left;">
                  <input class="form-control me-2" type="search" placeholder="Tìm kiếm tên thợ"
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
                  <th>Khách hàng</th>
                  <th>Phản hồi lần 1</th>

                  <th>Phản hồi lần 2</th>
                  <th>Địa chỉ đơn hàng</th>
                  <th>Thời gian bắt đầu</th>
                  <th>Thời gian hoàn thành</th>







                         


                         
                </tr>
                      </thead>
                    <tbody>
                <tr>
                     
                           <td class="hidden-xs">1</td>
                     
                       <td>Phan Phi Hung</td>
                    <td>HD000534</td>
                    <td >Tran Hoang</td>
                    <td >làm rất tốt</td>

                    <td>Tốt hơn nhiều</td>
                    <td >8/224/Nguyễn Trường Tộ</td>
                    <td >15:00 22/12/2021</td>
                    <td >15:30 22/12/2021</td>




                   


                        
                </tr>
                      <tr>
                         
                         <td class="hidden-xs">2</td>
                     <td>Phan Phi Hung</td>
                    <td>HD000534</td>
                    <td >Tran Hoang</td>
                    <td >làm rất tốt</td>

                    <td>Tốt hơn nhiều</td>
                    <td >8/224/Nguyễn Trường Tộ</td>
                    <td >15:00 22/12/2021</td>
                    <td >15:30 22/12/2021</td>


                        
                </tr>
                      <tr>
                        
                         <td class="hidden-xs">3</td>
                      <td>Phan Phi Hung</td>
                    <td>HD000534</td>
                    <td >Tran Hoang</td>
                    <td >làm rất tốt</td>

                    <td>Tốt hơn nhiều</td>
                    <td >8/224/Nguyễn Trường Tộ</td>
                    <td >15:00 22/12/2021</td>
                    <td >15:30 22/12/2021</td>



                        
                </tr>
                      <tr>
                        
                         <td class="hidden-xs">4</td>
                      <td>Phan Phi Hung</td>
                    <td>HD000534</td>
                    <td >Tran Hoang</td>
                    <td >làm rất tốt</td>

                    <td>Tốt hơn nhiều</td>
                    <td >8/224/Nguyễn Trường Tộ</td>
                    <td >15:00 22/12/2021</td>
                    <td >15:30 22/12/2021</td>

                        
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

            <div class="container" style="background-color:white">

                <button  onclick="document.getElementById('id02').style.display='none'" type="submit" style=" background-color: #04AA6D;
                    color: white;
                    width: 12%;
                    height: 40px;
                    border: none;
                    cursor: pointer;
                    border: 1px solid black;
                    margin-left: 80%;

                   ">Trở về</button>

              </div>




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
