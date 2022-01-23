
<div>
  
<div class="panel-body" >
         <table class="table table-striped table-bordered table-list nowrap"  >
            <thead style="height: 40px">
               <tr>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Mã DV-SP</th> 
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Tên dịch vụ/Sản phẩm </th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Số lượng</th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Đơn giá</th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Thành tiền</th>
        </tr>
        </thead>
      <tbody>
           @foreach($cartServices as $cart)
          <tr style="height: 40px !important; vertical-align: middle">
            <td  style="height: 40px !important; vertical-align: middle">{{$cart->id}}</td>
            <td  style="height: 40px !important; vertical-align: middle">{{$cart->name}}</td>
            <td  style="height: 40px !important; vertical-align: middle">{{$cart->qty}}</td>
            <td  style="height: 40px !important; vertical-align: middle">{{number_format($cart->price)}}</td>
            <td  style="height: 40px !important; vertical-align: middle">{{number_format($cart->price * $cart->qty)}}</td>

          



           


                
        </tr>
        @endforeach 

          @foreach($cartProducts as $cart)
          <tr  style="height: 40px !important; vertical-align: middle">
             
            <td style="vertical-align: middle">{{$cart->id}}</td>
            <td style="vertical-align: middle">{{$cart->name}}</td>
            <td style="vertical-align: middle">{{$cart->qty}}</td>
            <td style="vertical-align: middle">{{number_format($cart->price)}}</td>
            <td style="vertical-align: middle">{{number_format($cart->price * $cart->qty)}}</td>

     

                
        </tr>
          @endforeach 
             
      </tbody>
    </table>
        </div>

      <div>
      
     

   
        <div style="float: left;width: 20%;margin-left: 80%">
          @livewire('tell-man.total',['status'=>'3'])
         </div>


      </div>
    </div>
