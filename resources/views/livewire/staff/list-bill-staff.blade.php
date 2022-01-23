<div>
    <div class="mt-3">
        <input type="text" class="form-control" placeholder="Tìm kiếm theo mã đơn hàng,tên,số điện thoại" style="border: 1px solid #cdcdcd; height: 45px" wire:model="searchTerm3" />
        <div>
            <div style="float: left">
                <label>Trạng thái đơn hàng: </label>
                <select wire:model="location" name="status" class="form-control input-inline" style="width: 200px; height: 45px">
                    <option value="0">Tất cả</option>
                    <option value="3">Đơn chưa thực hiện</option>
                    <option value="2">Đơn đã được xác nhận</option>
                    {{-- <option value="1">Đơn chưa được xác nhận</option> --}}
                    <option value="4">Đơn đang thực hiện</option>
                    <option value="5">Đơn chưa thêm thợ</option>
                    {{-- <option value="6">Đơn hoàn thành</option> --}}
                    {{-- <option value="7">Đơn bị hủy</option> --}}
                       <option value="8">Đơn đổi trả</option> 


                </select>
            </div>
           
        </div>

        <div style="width: 100%;float: left;">
            <label class="mt-2" style="font-size: 20px;">Danh sách đơn hàng</label>
          </div>

        <table class="table table-striped table-bordered table-list nowrap" style="margin-top: 10%;">
            <thead style="height: 40px">
                <tr style="color: blue;">
                    {{-- <th class="hidden-xs">STT</th> --}}
                    <th style="vertical-align: middle !important;
                    color: #fff;
                    background-color: #343a40 !important;
                    border-color: #454d55 !important;">Mã đơn hàng</th>
                    <th style="vertical-align: middle !important;
                    color: #fff;
                    background-color: #343a40 !important;
                    border-color: #454d55 !important;">Khách hàng</th>
                    <th style="vertical-align: middle !important;
                    color: #fff;
                    background-color: #343a40 !important;
                    border-color: #454d55 !important;">SĐT</th>
                    {{-- <th>Ngày tạo</th> --}}
                    <th style="vertical-align: middle !important;
                    color: #fff;
                    background-color: #343a40 !important;
                    border-color: #454d55 !important;">Ngày hẹn</th>
                    {{-- <th>Địa chỉ</th> --}}

                    <th style="vertical-align: middle !important;
                    color: #fff;
                    background-color: #343a40 !important;
                    border-color: #454d55 !important;">Trạng thái</th>
                    <th style="vertical-align: middle !important;
                    color: #fff;
                    background-color: #343a40 !important;
                    border-color: #454d55 !important;width: 5%"><em class="fa fa-cog"></em></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bills as $bill)
                    <tr style="height:40px">
                        <td style="vertical-align: middle !important">
                            {{ $bill->id }}
                        </td>
                        <td style="vertical-align: middle !important">{{ $bill->name }}</td>
                        <td style="vertical-align: middle !important">{{ $bill->phone }}</td>
                        {{-- <td>{{$bill->orderDate}}</td> --}}
                        <td style="vertical-align: middle !important">{{ $bill->appointmenTime }}</td>
                        {{-- <td >{{$bill->address}}</td> --}}
                        <td style="vertical-align: middle !important"><button type="button" style="color: blue" class="btn7"
                                wire:click.prevent="edit({{ $bill->id }})"
                                onclick="document.getElementById('id080').style.display='block'" style="width:auto;">
                                @if ($bill->status == 2)
                                    Đơn đã được xác nhận

                                @elseif ($bill->status == 3)
                                    Đơn chưa thực hiện
                                @elseif($bill->status == 1)
                                    Đơn chưa được xác nhận
                                @elseif($bill->status == 4)
                                    Đơn đang thực hiện
                                @elseif($bill->status == 5)
                                    Đơn chưa thêm thợ
                                @elseif($bill->status == 6)
                                    Đơn hoàn thành
                                @elseif($bill->status == 7)
                                    Đơn bị hủy
                                    @elseif($bill->status == 8)
                                    Đơn đổi trả


                                @endif


                            </button>
                        </td>

                        <td style="vertical-align: middle !important"><button type="button" style="color: blue" class="btn7"
                                wire:click.prevent="edit({{ $bill->id }})"
                                onclick="document.getElementById('id082').style.display='block'" style="width:auto;">
                                Tiến hành đơn
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $bills->links() }}
    </div>



     
<!--fix detail-->
    <div wire:ignore.self id="id080" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id080').style.display='none'" class="close3"
                    title="Close Modal">&times;</span>
            </div>
            <label style="font-size: 30px;color: blue;text-align: center">Chi tiết đơn</label>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-6">
                        <form class="d-flex">

                        </form>
                    </div>
                </div>
                @if (isset($array))
                    {{-- {{dd($array)}} --}}
                    <div>
                        <div style="float: left;width: 20%;margin-left: 0px">
                            <label for="uname"><b>Tên khách hàng</b></label>
                            <input type="text" wire:model.defer="name" placeholder="" name="name" required>
                        </div>

                        <div style="float: left;margin-left: 50px;width: 20%;">
                            <label for="uname"><b>SĐT</b></label>
                            <input type="text"  wire:model.defer="phone" placeholder="" name="phone" required>
                        </div>

                        <div style="float: left;width: 20%;margin-left: 50px">
                            <label for="uname"><b>Biển số xe</b></label>
                            <input type="text" wire:model.defer="license_plates" placeholder="" name="license_plates"
                                required>
                        </div>

                        <div style="float: left;width: 20%;margin-left: 50px">
                            <label for="uname"><b>Dòng xe</b></label>
                            <input type="text" wire:model.defer="auto_markers_name" placeholder=""
                                name="auto_markers_name" required>
                        </div>

                    </div>


                    <div>

                        <div style="float: left;margin-left: 0px;width: 73%;">
                            <label for="uname"><b>Địa chỉ</b></label>
                            <input type="text" wire:model.defer="address" placeholder="" name="address" required>
                        </div>

                        <div style="float: left;width: 20%;margin-left: 50px">
                            <label for="uname"><b>Ngày hẹn</b></label>
                            <input type="text" wire:model.defer="appointmenTime" placeholder="" name="appointmenTime">
                            @error('appointmenTime') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>
                @endif
              
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list nowrap">
                        <thead style="height: 40px">
                            <tr style="color: blue;">

                                {{-- <th class="hidden-xs">STT</th> --}}
                                <th style="vertical-align: middle !important;
                                color: #fff;
                                background-color: #343a40 !important;
                                border-color: #454d55 !important;">Mã DV-SP</th>
                                <th style="vertical-align: middle !important;
                                color: #fff;
                                background-color: #343a40 !important;
                                border-color: #454d55 !important;">Tên dịch vụ/Sản phẩm </th>
                                <th style="vertical-align: middle !important;
                                color: #fff;
                                background-color: #343a40 !important;
                                border-color: #454d55 !important;">Số lượng</th>
                                <th style="vertical-align: middle !important;
                                color: #fff;
                                background-color: #343a40 !important;
                                border-color: #454d55 !important;">Thành tiền</th>
                                {{-- <th style="vertical-align: middle !important;
                                color: #fff;
                                background-color: #343a40 !important;
                                border-color: #454d55 !important;width:5%"><em class="fa fa-cog"></em> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($array1))

                                @foreach ($array1 as $bill)
                                    @if (!is_null($bill['productCode']))
                                        <tr style="height: 40px">
                                            <td style="vertical-align: middle !important">{{ $bill['productCode'] }}</td>
                                            <td style="vertical-align: middle !important">{{ $bill['product_name'] }}</td>
                                            <td style="vertical-align: middle !important">{{ $bill['quantily_product'] }}</td>
                                            <td style="vertical-align: middle !important">{{ number_format($bill['price_product']) }} VNĐ</td>
                                            {{-- <td style="vertical-align: middle !important"><button class="btn2"
                                                    wire:click.prevent="delete1({{ $bill['bill_detailsID'] }})"><i
                                                        class="fas fa-trash"></i></button></td> --}}
                                        </tr>
                                    @endif
                                @endforeach


                                @foreach ($array1 as $bill)
                                    @if (!is_null($bill['service_id']))
                                        <tr style="height: 40px">
                                            <td style="vertical-align: middle !important">{{ $bill['service_id'] }}</td>

                                            <td style="vertical-align: middle !important">{{ $bill['services_name'] }}</td>
                                            <td style="vertical-align: middle !important">{{ $bill['quantily_service'] }}</td>
                                            <td style="vertical-align: middle !important">{{ number_format($bill['price_service']) }} VNĐ</td>
                                            {{-- <td style="vertical-align: middle !important"><button class="btn2"
                                                    wire:click.prevent="delete1({{ $bill['bill_detailsID'] }})"><i
                                                        class="fas fa-trash"></i>
                                                </button>
                                            </td> --}}
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                 <div>
                <label>Thợ:</label>
              </div>
                <div>
                    @if (isset($array3))

                        @foreach ($array3 as $worker)
                            @if (!is_null($worker['workers_id']))

                                <button class="btn5" style="padding: 2px 10px;border: 1px solid #29a529 !important;">{{ $worker['workers_name'] }}</button>


                                <button type="button" class="btn2" onclick="document.getElementById('id080').style.display='none'"
                                    wire:click="delete1('{{ $worker['bill_workers_id'] }}')"><i
                                        class="fas fa-trash"></i></button>



                            @endif
                        @endforeach
                    @endif
                </div>

                <div>
                    <div>
                        <livewire:staff.list-staff>


                    </div>



                    <div>
                        <livewire:staff.select-staff>

                    </div>

                </div>


                <div>



                    <label>Trạng thái đơn hàng: </label>
                    <select name="status" wire:model.defer="status" class="form-control input-inline" style="width: 200px">
                        
                        @if (isset($array))

                        <option {{ $array['bill_status'] == 1 ? 'selected' : '' }} value="3">   Đơn chưa thực hiện
                        </option>
                        <option {{ $array['bill_status'] == 2 ? 'selected' : '' }} value="2">Đơn đã được xác nhận</option>
                        <option {{ $array['bill_status'] == 3 ? 'selected' : '' }} value="1">Đơn chưa được xác nhận</option>
                        <option {{ $array['bill_status'] == 4 ? 'selected' : '' }} value="4">Đơn đang thực hiện</option>
                        <option {{ $array['bill_status'] == 5 ? 'selected' : '' }} value="5">Đơn chưa thêm thợ</option>
                        <option {{ $array['bill_status'] == 6 ? 'selected' : '' }} value="6">Đơn hoàn thành</option>
                        <option {{ $array['bill_status'] == 5 ? 'selected' : '' }} value="7">Đơn bị hủy</option>
                        <option {{ $array['bill_status'] == 7 ? 'selected' : '' }} value="8">Đơn đổi trả</option>

                        @endif
                    </select>
                </div>
                <div class="cart-total">
                    <strong class="cart-total-title" style="margin-left: 80%">Tổng tiền:</strong>
                    @if (isset($array))
                        <span class="cart-total-price">{{ number_format($array['bill_total']) }}VNĐ</span>
                    @endif
                </div>

                <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
                <div class="mt-2" style="float: right">
                <button onclick="document.getElementById('id080').style.display='none'"
                                wire:click.prevent="update1('{{ $idform }}')" type="button" class="btn8" style="padding-top: 6px;
                                padding-bottom: 6px;
                                background-color: #28a745;
                                border-color: #28a745;
                                color: #fff;
                                font-size: 16px;
                                font-family: sans-serif;">Hoàn thành đơn</button>

                <button onclick="document.getElementById('id080').style.display='none'"
                                wire:click.prevent="update('{{ $idform }}')" type="button" class="btn8" style="padding-top: 6px;
                                padding-bottom: 6px;
                                background-color: #28a745;
                                border-color: #28a745;
                                color: #fff;
                                font-size: 16px;
                                font-family: sans-serif;margin-left: 20px;
                            ">lưu</button>

                <button type="button"
                    onclick="document.getElementById('id080').style.display='none'" class="btn8" 
                    style="margin-left: 20px;padding-top: 6px;padding-bottom: 6px;background-color: #f44336;border-color: #f44336;color: #fff;font-size: 16px;font-family: sans-serif;">Trở về</button>
                </div>
            </div>
        </form>

        {{-- @endforeach --}}
    </div>



    <div wire:ignore.self id="id082" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id082').style.display='none'" class="close"
                    title="Close Modal">&times;</span>




            </div>

            <label style="font-size: 30px;color: blue;text-align: center">Thợ đang bận</label>
            <div class="container">

                <div class="row">
                    <div class="col col-xs-6">
                        <form class="d-flex">


                        </form>
                    </div>

                </div>




                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list nowrap">
                        <thead>
                            <tr style="color: blue;">

                                <th>Mã thợ</th>
                                <th>Thợ</th>
                                <th><em class="fa fa-cog"></em>
                                </th>
                            </tr>
                        </thead>
                        <tbody>


                            @if (isset($array2))
                                {{-- {{dd($array2)}} --}}
                                @foreach ($array2 as $worker)
                                    @if (!is_null($worker['workers_id']))
                                        <tr>
                                            <td>{{ $worker['workers_id'] }}</td>
                                            <td>{{ $worker['workers_name'] }}</td>

                                            <td>
                                                <button type="button" class="btn2"
                                                    wire:click="delete1('{{ $worker['bill_workers_id'] }}')"><i
                                                        class="fas fa-trash"></i></button>
                                            </td>

                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>





                <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
                <button wire:click.prevent="update2({{ $idform }})"
                    onclick="document.getElementById('id082').style.display='none'" type="button" style=" background-color: #04AA6D;
                        color: white;
                        width: 9%;
                        height: 40px;
                        border: none;
                        cursor: pointer;
                        border: 1px solid black;
                        margin-left: 70%;

                      ">Tiến hành</button>

                <button style="margin-left: 20px" type="button"
                    onclick="document.getElementById('id082').style.display='none'" class="cancelbtn">Trở
                    về</button>

            </div>

        </form>



    </div>



  
</div>

<style>
    .icon-cart {
        color: #5182e7;
        font-size: 16px
    }

    .icon-cart:hover {
        color: #42a942
    }

    .table-th {
        height: 40px
    }

    .table-cell-th {
        vertical-align: middle !important;
        color: #fff;
        background-color: #343a40 !important;
        border-color: #454d55 !important;
    }

    .table-cell-td {
        vertical-align: middle !important
    }

</style>