<div>
<div wire:ignore.self id="id082" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id082').style.display='none'" class="close"
          title="Close Modal">&times;</span>
  
  
  
  
      </div>
  
          <label style="font-size: 30px;color: blue;text-align: center">Chi tiết đơn</label>
      <div class="container">
  
        <div class="row" >
                <div class="col col-xs-6">
                    <form class="d-flex">
  
  
                 </form>
                </div>
             
               </div>
  
  
            
          
                    <div class="panel-body" >
                                 <table class="table table-striped table-bordered table-list nowrap" >
                                    <thead>
                                       <tr style="color: blue;">
                                        
                                  <th>Mã thợ</th>
                                  <th>Thợ</th>
                                  <th>Chọn</th>
                            
                                
                                </tr>
                                      </thead>
                                    <tbody>
                           
                                    
                                   @foreach($workers as  $worker)
                             
                                  <tr>
                                      <td>{{$worker->id}}</td>
                                      <td>{{$worker->name}}</td>
                                      
                                      <td> <input type="checkbox" value="{{$worker->id}}"></td>
                                  </tr>
                             
                                @endforeach
          
                                
                           
                           
                                       
                                      
                              
                                     
                              </tbody>
                            </table>
                                </div>
  
                         
                         
                          
  
              <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
                     <button onclick="document.getElementById('id082').style.display='none'"  type="button" style=" background-color: #04AA6D;
                          color: white;
                          width: 9%;
                          height: 40px;
                          border: none;
                          cursor: pointer;
                          border: 1px solid black;
                          margin-left: 70%;
  
                        ">lưu</button> 
  
                      <button  style="margin-left: 20px" type="button" onclick="document.getElementById('id082').style.display='none'" class="cancelbtn">Trở về</button>
  
                       </div>
  
                      </form> 
  
  {{-- @endforeach --}}
  
  </div>
</div>