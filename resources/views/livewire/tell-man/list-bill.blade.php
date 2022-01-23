
<div>
                            @if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
    <input type="text" class="form-control" style="border: 1px solid #ccc; height: 40px" placeholder="Tìm kiếm theo tên,mã đơn hàng,số điện thoại"
        wire:model="searchTerm3" />
    <div>
        <div style="float: left">
            <label>Trạng thái đơn hàng: </label>
            <select wire:model="location" name="status" class="form-control input-inline"
                style="width: 200px; height:40px; font-size: 14px !important">
                <option value="0">Tất cả</option>
                {{-- <option value="3">Đơn chưa thực hiện</option> --}}
                <option value="2">Đơn đã được xác nhận</option>
               <option value="1">Đơn chưa được xác nhận</option> 
                {{-- <option value="4">Đơn đang thực hiện</option>
                <option value="5">Đơn chưa thêm thợ</option>  --}}
                <option value="6">Đơn hoàn thành</option>
                {{-- <option value="7">Đơn bị hủy</option> --}}
            </select>
        </div>
        <div style="float: left;margin-left: 10%">
            <label>Nhóm hàng: </label>
            <select wire:model="location1" name="channels" class="form-control input-inline"
                style="width: 200px; height:40px; font-size: 14px !important">
                <option value="0">Tất cả</option>
                <option value="1">Đơn hàng off</option>
                <option value="2">Đơn hàng on</option>
            </select>
        </div>
    </div>
    <table class="table table-striped table-bordered table-list nowrap" style="margin-top: 10%">
        <thead class="table-th">
            <tr style="color: blue;">
                {{-- <th class="hidden-xs">STT</th> --}}
                <th class="table-cell-th">Mã đơn hàng</th>
                <th class="table-cell-th">Khách hàng</th>
                <th class="table-cell-th">SĐT</th>
                <th class="table-cell-th">Ngày tạo</th>
                {{-- <th class="table-cell-th">Địa chỉ</th> --}}
                <th class="table-cell-th">Trạng thái</th>
                <th class="table-cell-th"><em class="fa fa-cog"></em>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bills as $bill)
                <tr>
                    <td class="table-cell-td">
                        {{ $bill->id }}
                    </td>
                    <td class="table-cell-td">{{ $bill->name }}</td>
                    <td class="table-cell-td">{{ $bill->phone }}</td>
                    <td class="table-cell-td">{{ $bill->created_at}}</td>
                    {{-- <td class="table-cell-td">{{ $bill->address }}</td> --}}
                    <td class="table-cell-td">
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
                    <td class="table-cell-td">
                        <button type="button" class="btn5"
                            style="background-color: #28a745; border-color: #28a745;color: #fff;font-family: sans-serif;"
                            wire:click.prevent="edit({{ $bill->id }})"
                            onclick="document.getElementById('id080').style.display='block'" style="width:auto;">
                            Liên hệ với khách hàng</button>
                        <button class="btn2"  wire:click.prevent="delete({{ $bill->id }})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $bills->links() }}
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
                            <input type="text" wire:model.defer="license_plates" placeholder="" name="license_plates">
                        </div>

                        <div style="float: left;width: 20%;margin-left: 50px">
                            <label for="uname"><b>Dòng xe</b></label>
                            <input type="text" wire:model.defer="auto_markers_name" placeholder=""
                                name="auto_markers_name" >
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
                <div>
                    <div style="float: left;width: 43%;margin-top: 46px;margin-right:0px ;margin-bottom: 20px">
                        <button type="button" class="btn8" id="cart" style="width:auto;"
                            aria-hidden="true">Thêm dịch vụ</button>
                        <button type="button" class="btn8" id="cart1" style="width:auto;"
                            aria-hidden="true">Thêm sản phẩm</button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list nowrap">
                        <thead>
                            <tr style="color: blue;">

                                {{-- <th class="hidden-xs">STT</th> --}}
                                <th>Mã DV-SP</th>
                                <th>Tên dịch vụ/Sản phẩm </th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th><em class="fa fa-cog" style="margin-left: 30%;"></em>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($array1))

                                @foreach ($array1 as $bill)
                                    @if (!is_null($bill['productCode']))
                                        <tr>
                                            <td>{{ $bill['productCode'] }}</td>
                                            <td>{{ $bill['product_name'] }}</td>
                                            <td>{{ $bill['quantily_product'] }}</td>
                                            <td>{{ number_format($bill['price_product']) }} VNĐ</td>
                                            <td><button class="btn2"  onclick="document.getElementById('id080').style.display='none'"
                                                    wire:click.prevent="delete1({{ $bill['bill_detailsID'] }})"><i
                                                        class="fas fa-trash"></i></button></td>
                                        </tr>
                                    @endif
                                @endforeach


                                @foreach ($array1 as $bill)
                                    @if (!is_null($bill['service_id']))
                                        <tr>
                                            <td>{{ $bill['service_id'] }}</td>

                                            <td>{{ $bill['services_name'] }}</td>
                                            <td>{{ $bill['quantily_service'] }}</td>
                                            <td>{{ number_format($bill['price_service']) }} VNĐ</td>
                                            <td><button class="btn2"   onclick="document.getElementById('id080').style.display='none'"
                                                    wire:click.prevent="delete1({{ $bill['bill_detailsID'] }})"><i
                                                        class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div>
                    @if (isset($array))
                        <div style="float: left;margin-left: 0px;width: 28%;">
                            <label for="uname"><b>Phản hồi 1</b></label>
                            <input type="text" wire:model.defer="noteReport1" placeholder="" name="noteReport1"
                                required>
                        </div>

                        <div style="float: left;width: 28%;margin-left: 50px">
                            <label for="uname"><b>Phản hồi 2</b></label>
                            <input type="text" wire:model.defer="noteReport2" placeholder="" name="noteReport2"
                                required>
                        </div>
                                {{-- Cần fix --}}
                        <div style="float: left;width: 28%;margin-left: 50px">
                            <label for="uname"><b>Ghi chú</b></label>
                            <input type="text" wire:model.defer="note" placeholder="" name="note" required>
                        </div>
                        {{-- Kết thúc cần fix --}}
                    @endif
                </div>
                <div>


                    {{-- {{ dd($status) }} --}}
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
                        <option {{ $array['bill_status'] == 7 ? 'selected' : '' }} value="7">Đơn bị hủy</option>
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
                <button onclick="document.getElementById('id080').style.display='none'"
                    wire:click.prevent="update('{{ $idform }}')" type="button" style=" background-color: #04AA6D;
                                  color: white;
                                  width: 9%;
                                  height: 40px;
                                  border: none;
                                  cursor: pointer;
                                  border: 1px solid black;
                                  margin-left: 70%;
          
                                ">lưu</button>

                <button style="margin-left: 20px" type="button"
                    onclick="document.getElementById('id080').style.display='none'" class="cancelbtn">Trở
                    về</button>
            </div>
        </form>

        {{-- @endforeach --}}
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
            height: 40px;
            vertical-align: middle !important
        }

    </style>
