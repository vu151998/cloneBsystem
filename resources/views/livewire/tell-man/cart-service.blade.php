
<div>
    <table class="table table-striped table-bordered table-list">
        <thead style="height: 40px">
        <tr>
          <th class="hidden-xs" style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">ID</th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Tên dịch vụ </th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Số lượng</th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Chi phí</th>
          <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;"><em class="fa fa-cog"></em>
          </th>
        </tr>
      </thead>
      <tbody>
            @if (!is_null($cartServices))
          @foreach($cartServices as $cartService)
          <tr style="height: 40px">
            <td style="vertical-align:middle" class="hidden-xs">{{$cartService->id}}</td>
            <td style="vertical-align:middle">{{$cartService->name}}</td>
            <td style="vertical-align:middle">{{$cartService->qty}}</td>
            <td style="vertical-align:middle">{{number_format($cartService->qty*$cartService->price)}}</td>
            <td style="vertical-align:middle">
              <button type="button" class="btn2" wire:click= "deleteCartService('{{$cartService->rowId}}')"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
          @endforeach
          @endif
        </tbody></table>
        {{-- <div class="cart-total">
          <strong class="cart-total-title">Tổng Cộng:</strong>
          <span class="cart-total-price">{{$totalPriceService}}VNĐ</span>
      </div> --}}
      @livewire('tell-man.total',['status'=>'2'])
</div>
