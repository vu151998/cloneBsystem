<div>
    @if(!empty($detailWorker))
     <div style="border: 1px solid black">
     <div style="padding: 5px">
    <p style="margin-top: 10px">Khách hàng: {{$detailWorker->customer->name}}</p>
    <p>SDT: {{$detailWorker->customer->phone}}</p><br>
    <p>Địa chỉ: {{$detailWorker->customer->address}}</p><br>
    <h6>Danh sách thợ sủa chữa:
       @foreach($workers as $worker)
            @foreach($bill_workers as $bill_worker)
                @if($detailWorker->id == $bill_worker->bill_code && $bill_worker->worker_id == $worker->id)
                     {{$worker->name}};
                @endif
            @endforeach
        @endforeach
    </h6>
    <div class="row">
        <div class="col-md-7">
            <table>
                      <thead>
                       <tr style="color: blue;">
                          
                            <th class="hidden-xs">tên sản phẩm</th>
                    <th>số lượng</th>
                    <th>giá tiền</th>
                    <th>thành tiền</th>








                           


                           
                </tr>
                      </thead>
                      <tbody>
                @foreach($bill_details as $bill_detail)
                    @if($detailWorker->id == $bill_detail->bill_code)
                        <tr>
                       
                           <td class="hidden-xs">
                                @if($bill_detail->productCode != null)
                                    <p>{{$bill_detail->product->productName}}</p>
                                @else
                                    <p>{{$bill_detail->service->name}}</p>
                                @endif
                            </td>
                      <td>
                                @if($bill_detail->productCode != null)
                                    <p>{{$bill_detail->quantily_product}}</p>
                                @else
                                    <p>{{$bill_detail->quantily_service}}</p>
                                @endif
                            </td>
                       <td>
                                @if($bill_detail->productCode != null)
                                    <p>{{$bill_detail->price_product}}</p>
                                @else
                                    <p>{{$bill_detail->price_service}}</p>
                                @endif
                            </td>
                    <td>
                        @if($bill_detail->productCode != null)
                            <p>{{$bill_detail->price_product * $bill_detail->quantily_product}}</p>
                        @else
                            <p>{{$bill_detail->price_service * $bill_detail->quantily_service}}</p>
                        @endif
                    </td>





                     


                          
                </tr>
                    @endif
                @endforeach
                     
                </tbody>
            </table>
            <div style="margin-top: 10px">
{{--                {{$bill_details->links()}}--}}
            </div>
        </div>
        <div class="col-md-5">
            <div style="width: 100%;margin-top: 20px">
                <label>Biển số xe:</label><br>
                @foreach($cus_license_automakers as $cus)
                    @if($cus->customer_id == $detailWorker->customer_id)
                         <input type="text" wire:model="license_plates" name="license_plates">
                    @endif
                @endforeach
            </div>
            <div style="width: 100%">
                <label>tình trạng xe trước khi sửa:</label><br>
                <input type="text" wire:model="statusBefore" name="statusBefore">
            </div>
            <div style="width: 100%">
                <label>tình trạng xe sau khi sửa:</label><br>
                <input type="text" wire:model="statusAfter" name="statusAfter">
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 20px;padding-bottom: 10px">
        <div class="col-6">
            <table>
                <tr>
                    <th>đánh giá khách hàng lần 1</th>
                </tr>
                <tr>
                    <td>{{$detailWorker->noteReport1}}</td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <table>
                <tr>
                    <th>đánh giá khách hàng lần 2</th>
                </tr>
                <tr>
                    <td>{{$detailWorker->noteReport2}}</td>
                </tr>
            </table>
        </div>
    </div>
    <p>
        tổng tiền: {{$total}} VND


    </p>
    <p>
        người thu tiền:
        @foreach($workers as $worker)
            @foreach($bill_workers as $bill_worker)
                @if($detailWorker->id == $bill_worker->bill_code && $bill_worker->worker_id == $worker->id)
                    {{$worker->name}};
                @endif
            @endforeach
        @endforeach
    </p>
    <button type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 20%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;
             margin-left: 200px;
             margin-bottom: 20px;
           " wire:click.prevent="updateStatus({{$detailWorker->id}})">cập nhật lại</button>
</div>
     </div>
</div>
@endif
</div>
