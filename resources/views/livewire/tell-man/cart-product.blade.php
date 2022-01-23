<div>
     <table class="table table-striped table-bordered table-list">
      <thead style="height: 40px">
          <tr style="color: blue;">
          <th class="hidden-xs" style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Mã sản phẩm</th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Tên sản phẩm</th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Số lượng</th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Chi phí</th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; width:5%; border-color: #454d55 !important;">
            <em class="fa fa-cog" ></em>
          </th>
          </tr>
        </thead>
        <tbody>
            @if (!is_null($cartProducts))
          @foreach($cartProducts as $cartproduct)
          <tr style="height: 40px">
            <td class="hidden-xs" style="vertical-align:middle">{{ $cartproduct->id}}</td>
            <td style="vertical-align:middle">{{ $cartproduct->name}}</td>
            <td style="vertical-align:middle">{{ $cartproduct->qty}}</td>
            <td style="vertical-align:middle">{{number_format( $cartproduct->qty*$cartproduct->price)}}</td>
            <td style="vertical-align:middle">
            
              <button type="button" wire:click= "deleteCartProduct('{{ $cartproduct->rowId}}')" class="btn2">  <i  class="fas fa-trash"></i> </button>    
            </td>
          </tr>
          @endforeach
          @endif</tbody></table>
        {{-- <div class="cart-total">
          <strong class="cart-total-title">Tổng Cộng:</strong>
          <span class="cart-total-price">{{$totalPriceProduct}}VNĐ</span>
      </div> --}}
      @livewire('tell-man.total',['status'=>'1'])
  </div>
  