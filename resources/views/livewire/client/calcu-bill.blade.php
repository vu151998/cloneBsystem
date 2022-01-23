<div>
    <div>
        @if(!is_null($notifycation))
            <h6 class="text-error">{{ $notifycation  }}</h6>
        @else
        <h6> </h6>
        @endif
    </div>
    
    <div class="input-group mb-3">
       
        <input type="text" wire:model="couponCode" class="form-control" placeholder="Nhập mã giảm giá" value="{{ $couponCode }}"
        aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" wire:click="applyCode">Áp dụng</button>
        </div>
    </div>
   
    <div class="list-group-item">
        <div class="row">
              <div class="col" style="padding-left:12; font-weight:700">
                  <p style="font-size:80%;">Tạm tính(<?php echo Cart::count(); ?> sản phẩm) </p></div>
              <div class="col text-right">{{ Cart::priceTotal()  }}</div>
        </div>
        <div class="row">
              <div class="col" style="padding-left:12; font-weight:700">
                  <p style="font-size:80%;"> Phí giao hàng</p>  </div>
              <div class="col text-right"> 0</div>
              {{-- <?php echo Cart::subtotal(); ?> --}}
        </div>
        <div class="row">
              <div class="col"style="padding-left:12; font-weight:700">
                  <p style="font-size:80%;"> Đã giảm giá</p> </div>
              <div class="col text-right">{{ number_format(Cart::discount(2,'.','')) }}</div>
              {{-- *(1-Cart::content()->saleValue) --}}
        </div>
        <div class="row" style="border-top: 1px solid rgba(34, 25, 25, 0.1); padding: 2vh 0;">
              <div class="col" style="padding-left:12; font-weight:700">
                  <p style="font-size:80%;"> Tổng cộng</p> </div>
              <div class="col text-right"> {{ number_format(Cart::priceTotal(2,'.','')-Cart::discount(2,'.','')) }} đ</div>
              {{-- *Cart::content()->saleValue --}}
        </div> 
    </div>
</div>
