<div>
<div>
  <div class="my-2">
      <div class="row">
          <div class="col col-xs-6">
            <form class="d-flex">


                  <div style="float: left;">
                      <input class="form-control me-2" type="search" placeholder="Tìm kiếm tên thợ hoặc điện thoại" aria-label="Search"
                             style="width :270px;border-color: rgba(0,0,0,0.6);height: 43px;" wire:model="searchTerm" >
                  </div>




              </form>
            </div>
         
      </div>
      <div class="panel-body mt-2">
          <table class="table table-striped table-bordered table-list nowrap">
              <thead style="height:40px">
              <tr style="color: blue;">
                  <th style="vertical-align: middle !important;
                  color: #fff;
                  background-color: #343a40 !important;
                  border-color: #454d55 !important">Mã thợ</th>
                  <th style="vertical-align: middle !important;
                  color: #fff;
                  background-color: #343a40 !important;
                  border-color: #454d55 !important">Tên thợ</th>
                  <th style="vertical-align: middle !important;
                  color: #fff;
                  background-color: #343a40 !important;
                  border-color: #454d55 !important">Số điện thoại</th>
                 
                  <th style="vertical-align: middle !important;
                  color: #fff;
                  background-color: #343a40 !important;
                  border-color: #454d55 !important">chức năng thợ</th>
                  <th style="vertical-align: middle !important;
                  color: #fff;
                  background-color: #343a40 !important;
                  border-color: #454d55 !important">Trạng thái</th>
                  <th style="vertical-align: middle !important;
                  color: #fff;
                  background-color: #343a40 !important;
                  border-color: #454d55 !important;width:5%"><em class="fa fa-cog"></em></th>
              </tr>
              </thead>
              <tbody>
              @foreach($workers as $worker)
              <tr>
                  <td style="vertical-align: middle !important">{{$worker->id}}</td>
                  <td style="vertical-align: middle !important"><button class="btn7" style="color: blue" wire:click.prevent="detail({{$worker->id}})" onclick="document.getElementById('id081').style.display='block'">{{$worker->name}}</button></td>
                  <td style="vertical-align: middle !important">{{$worker->phone}}</td>
                  {{-- <td>{{$worker->age}}</td>
                  <td>{{$worker->address}}</td> --}}
                  <td style="vertical-align: middle !important">{{$worker->group_worker->name_group}}</td>
                  <td style="vertical-align: middle !important">
                      @if($worker->status == 1  )
                          <p>đang làm</p>
                      @elseif($worker->status == 2)
                           <p>đang chờ đơn</p>
                      @else
                           <p>xin nghỉ</p>
                      @endif
                  </td>
                  <td>
  
  
  
                    <button type="button" class="btn5" wire:click= "AddCartStaff('{{$worker->id}}')">Chọn</button>
        
                  </td>
              </tr>
              @endforeach
              </tbody>
          </table>
          {{$workers->links()}}
      </div>

  </div>

  <div wire:ignore.self id="id081" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id081').style.display='none'" class="close3"
          title="Close Modal">&times;</span>




      </div>

          <label style="font-size: 30px;color: blue;text-align: center">Chi tiết công việc của thợ</label>
      <div class="mx-5 mb-4">

        <div class="row" >
          <div class="col col-xs-6">
              <form class="d-flex">


                 </form>
          </div>
          
          </div>

                <div class="panel-body" >
                    <table class="table table-striped table-bordered table-list nowrap" >
                      <thead style="height: 40px">
                        <tr style="color: blue;">
                           {{--         <th class="hidden-xs">STT</th> --}}
                                  <th style="vertical-align: middle !important;
                                  color: #fff;
                                  background-color: #343a40 !important;
                                  border-color: #454d55 !important">Mã đơn</th>
                                  <th style="vertical-align: middle !important;
                                  color: #fff;
                                  background-color: #343a40 !important;
                                  border-color: #454d55 !important">Thời gian thực hiện đơn</th>
                                  <th style="vertical-align: middle !important;
                                  color: #fff;
                                  background-color: #343a40 !important;
                                  border-color: #454d55 !important">Tên khách hàng</th>
                                  <th style="vertical-align: middle !important;
                                  color: #fff;
                                  background-color: #343a40 !important;
                                  border-color: #454d55 !important">Địa chỉ thực hiện</th>
                                  <th style="vertical-align: middle !important;
                                  color: #fff;
                                  background-color: #343a40 !important;
                                  border-color: #454d55 !important">Mã thợ</th>
                                  <th style="vertical-align: middle !important;
                                  color: #fff;
                                  background-color: #343a40 !important;
                                  border-color: #454d55 !important">Tên thợ</th>
                                  <th style="vertical-align: middle !important;
                                  color: #fff;
                                  background-color: #343a40 !important;
                                  border-color: #454d55 !important">Chức năng thợ</th>
                                  <th style="vertical-align: middle !important;
                                  color: #fff;
                                  background-color: #343a40 !important;
                                  border-color: #454d55 !important">Trạng thái</th>
                                </tr>
                              </thead>
                              <tbody>
                                @if(isset($array))
                                    
                                   @foreach($array as  $staff)
                                   @if(!is_null($staff['bill_id']))
                                  <tr style="height: 40px">
                                      <td style="vertical-align: middle !important" >{{$staff['bill_id']}}</td>
                                      <td style="vertical-align: middle !important">{{$staff['appointmenTime']}}</td>
                                     
                                      <td style="vertical-align: middle !important">{{$staff['name']}}</td>
                                      <td style="vertical-align: middle !important">{{$staff['address']}}</td>
                                      <td style="vertical-align: middle !important">{{$staff['workers_id']}}</td>
                                      <td style="vertical-align: middle !important">{{$staff['workers_name']}}</td>
                                      <td style="vertical-align: middle !important">{{$staff['name_group']}}</td>
                                      <td style="vertical-align: middle !important">
                                          {{-- {{$staff['bill_status']}} --}}

                                      


                                               @if ($staff['bill_status'] == 2)
                                               Đơn đã được xác nhận
           
                                           @elseif ($staff['bill_status'] == 3)
                                               Đơn chưa thực hiện
                                           @elseif($staff['bill_status'] == 1)
                                               Đơn chưa được xác nhận
                                           @elseif($staff['bill_status'] == 4)
                                               Đơn đang thực hiện
                                           @elseif($staff['bill_status'] == 5)
                                               Đơn chưa thêm thợ
                                           @elseif($staff['bill_status'] == 6)
                                               Đơn hoàn thành
                                           @elseif($staff['bill_status'] == 7)
                                               Đơn bị hủy
                                               @elseif($staff['bill_status'] == 8)
                                               Đơn đổi trả
           
           
                                           @endif
                                    
                                    </td>
                                      
                                  </tr>
                                  @endif
                                @endforeach
          
                                @endif
                              </tbody>
                            </table>
                          </div>
                           
                             <div>
                            
                

              
  
                      <button type="button" onclick="document.getElementById('id081').style.display='none'" class="btn8" 
                      style="float:right;padding-top: 6px;padding-bottom: 6px;background-color: #f44336;border-color: #f44336;color: #fff;font-size: 16px;font-family: sans-serif;">Trở về</button>
  
  
  
  
        </div>
  
  
  
  
      </form> 
</div>
</div>