    <div class="method-payment" id ="myDIV">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
                <button wire:click="VNPay" type="button" class="btn btn-payment 
                {{ ($pay == 'VNPay') ? 'active' : ''}}">Thanh toán bằng VNPay</button>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <button wire:click="MomoPay" type="button"  class=" btn btn-payment 
                {{ ($pay == 'MomoPay') ? 'active' : ''}}">Thanh toán bằng Momo</button>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <button wire:click="CODPay" type="button" class=" btn btn-payment
                {{ ($pay == 'COD') ? 'active' : ''}}">Thanh toán khi nhận hàng</button>
            </div>
        </div>
    </div>
   