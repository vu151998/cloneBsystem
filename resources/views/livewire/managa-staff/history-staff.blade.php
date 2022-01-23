<div>
    <div class="container">
         
         

            
             <div class="row">
                  


            <div class="panel-body" style="padding-top: 30px">
                <div class="row">
                    <div class="col col-md-2">
                           <form class="d-flex">


                            <div style="float: left;">
                                <label><b>Biển số xe</b></label>
                                <input class="form-control me-2"  placeholder="Biển số xe"
                                       aria-label="Search" wire:model="searchTerm" style="width :120px;border-color: rgba(0,0,0,0.6);height: 43px;">
                            </div>




                        </form>
                    </div>
                    <div class="col col-md-2" style="margin-top: 4px;margin-left: 40px">
                        <div>
                            <label><b>trạng thái đơn</b></label>
                            <select wire:model="location1" name="channels" class="form-control input-inline" style="width: 120px">
                                <option value="0">Tất cả</option>
                                <option value="8">đã cập nhật</option>
                                <option value="9">chưa cập nhật</option>
                            </select>



                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px">
                    <div class="col-md-6" wire:poll.keep-alive>

                         <table style="margin-bottom: 20px">
                      <thead>
                       <tr style="color: blue;">
                          
                            <th class="hidden-xs">biển số xe</th>
                    <th>Hãng xe</th>
                    <th>mã hóa đơn</th>
                    <th>thời gian bắt đầu</th>
                    <th>Thời gian hoàn thành </th>

                    <th>trạng thái</th>







                           


                           
                </tr>
                      </thead>
                      <tbody>
                @foreach($cus_license_automakers as $cus)

                             <tr wire:click="$emit('show', '{{ $cus->bill_id }}')" style="cursor: pointer" class ="row-table">
                       
                           <td class="hidden-xs">{{$cus->license_plates}}</td>
                      <td>{{$cus->autoMarker_name}}</td>
                       <td>{{$cus->bill_id}}</td>
                    <td>{{$cus->bill_appointmenTime}}</td>
                    <td>{{$cus->bill_orderDate}}</td>
                    <td>
                        @if($cus->bill_status == 8)
                            <p>đã cập nhật</p>
                        @elseif($cus->bill_status == 1)
                         <p> Đơn chưa thực hiện</p>
                        @elseif($cus->bill_status == 2)
                         <p> Đơn đã được xác nhận</p>
                        @elseif($cus->bill_status == 3)
                         <p> Đơn chưa được xác nhận</p>
                        @elseif($cus->bill_status == 4)
                          <p> Đơn đang thực hiện</p>
                        @elseif($cus->bill_status == 5)
                          <p> Đơn chưa thêm thợ</p>
                        @elseif($cus->bill_status == 6)
                            <p>Đơn hoàn thành </p>
                        @elseif($cus->bill_status == 7)
                            <p>Đơn bị hủy</p>
                        @else
                            <p>chưa cập nhật</p>
                        @endif
                    </td>




                     


                          
                </tr>

                @endforeach
                </tbody>
            </table>
                        <div class="d-flex justify-content-center">
                            {{ $cus_license_automakers->links() }}
                        </div>
                    </div>
                    <div class="col-md-6">
                       <livewire:managa-staff.detail-history></livewire:managa-staff.detail-history>

                </div>

            </div>


    </div>
</div>
</div>
</div>
