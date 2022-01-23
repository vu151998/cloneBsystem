<div class="warrap" >
  <div class = "component container" style="border-top: 5px solid #ec9e44" >
    <div class="row" style="padding: 5px">
      <div class="col-md-12 order-md-1 ">
        <h4 class="title" >Thông tin khách hàng</h4>
        <form class="needs-validation list-group-item" wire:submit.prevent="saveOrder">
          <label for="city"></label>
          <div class="row">
              <div class="col-md-3 mb-3">
                <label for="firstName">Họ tên khách hàng <span class="text-danger">(*)</span></label>
                <input type="text" wire:model.lazy="name" class="form-control"  placeholder="Họ và tên" value="" required>
                @if($errors->has('name'))
                  <span class="text-error">{{ $errors->first('name') }}</span>
                @endif
              </div>
              <div class="col-md-3 mb-3">
                <label for="city">Thành phố <span class="text-danger"></span></label>
                
                  <select wire:model="selectedCity" name="city" class="form-control input-lg " data-dependent="state" required>
                    <option value="">Hãy chọn tỉnh thành <span class="text-danger"></span></option>
                  
                    @foreach ($cities as  $city)
                    <option value="{{ $city->matp }}">{{ $city->name }}</option>
                  @endforeach
                  </select>
                  @error('selectedCity') <span class="text-error">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-3 mb-3">
                <label for="district">Quận huyện <span class="text-danger">(*)</span></label>
                <select wire:model="selecteddistrict" name ="district" class="form-control input-lg " data-dependent="state" required>
                  <option value="">Hãy lựa chọn quận huyện <span class="text-danger"></span></option>
                  @if (is_array($districts) || is_object($districts))
                    @foreach ($districts as $district)
                    <option value="{{ $district->maqh }}">{{ $district->name }}</option>
                    @endforeach
                  @endif
                </select>
                @error('selecteddistrict') <span class="text-error">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-3 mb-3">
                <label for="district">Xã Phường <span class="text-danger">(*)</span></label>
                <select wire:model="selectedward" name ="district" class="form-control input-lg " data-dependent="state" required>
                  <option value="">Hãy lựa chọn xã phường <span class="text-danger"></span></option>
                  @if (is_array($wards) || is_object($wards))
                    @foreach ($wards as $ward)
                      <option value="{{ $ward->xaid }}">{{ $ward->name}}</option>
                    @endforeach
                  @endif
                </select>
                @error('selectedward') <span class="text-error">{{ $message }}</span> @enderror
              </div>
          </div>
          <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="email">Email <span class="text-danger">(*)</span><span class="text-muted"></span></label>
                  <input type="email" wire:model.lazy="email" class="form-control" id="email" placeholder="Địa chỉ Email " required>
                  @error('email') <span class="text-error">{{ $message }}</span> @enderror
                  
              </div>
              <div class="col-md-6 mb-3">
                <label for="firstName">Số điện thoại <span class="text-danger">(*)</span></label>
                <input  wire:model="phoneNumber" class="form-control" id="phone" type="number" placeholder="Số điện thoại" value="" 
                pattern="^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$" required >
                @error('phoneNumber') <span class="text-error">{{ $message }}</span> @enderror
                <div class="invalid-feedback">
                  
                  Số điện thoại phải có 10 số nếu số "0" ở đầu dãy thì có 9 số  !!!
                </div>
              </div>
          </div>
          {{-- "/^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/" --}}

          @csrf
          <div class="mb-3">
            <label for="firstName">Địa chỉ giao hàng <span class="text-danger">(*)</span></label>
              <input type="text" wire:model="shippingAddress" class="form-control" id="firstName" placeholder="Số nhà/ ngõ / đường" value="" required>
              <div class="invalid-feedback">
                Địa chỉ giao hàng không được để trống !!!
              </div>
              @error('shippingAddress') <span class="text-error">{{ $message }}</span> @enderror
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container component" >
    <h4 class="title" style="padding-top: 12px; padding-left: 3px"; >Danh sách sản phẩm</h4>
    <div class=" table-responsive" style="padding: 10px">
      <table class="table borderless" style=" width: 100%;">
        <thead class="thead-inverse"  style="background: #cac4bb">
          <tr >
            <th style="width:70%" class="text-left">Sản phẩm</th>
            <th style="width:10%" class= "text-center">Đơn giá</th>
            <th style="width:10%">Số lượng</th>
            <th style="width:10%">Thành tiền</th>
          </tr>
          </thead>
          <tbody>
            @foreach (Cart::content() as $row)
            <div class="row " id="productlist">
              <tr>
                <td scope="row">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="{{ $row ->image }}"></div>
                        <div class="row" style="padding-left: 5%"><?php echo $row->name; ?></div>
                    </div>
                </td>
                <td> <div class="text-center center ">{{ number_format($row->price) }}đ</div></td>
                <td> <div class="text-center center ">{{ $row->qty }}</div></td>
                <td> <div class="text-center center ">{{ number_format($row->price*$row->qty) }}đ</div></td>
              </tr>
            </div>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>

  <div class="component container" >
    <h4 class="title" style="padding-top: 12px; padding-left: 3px;" >Phương thức thanh toán </h4>
    @livewire('client.payment-method')
   <div class="row" style="border-bottom: 1px dotted; padding-left: 3px">
      <div class="col-md-8  mb-8" style="padding-top: 5px">
          <div class="mb-3" >
            <label for="exampleFormControlTextarea1"><h5>Lời nhắn</h5> </label>
            <textarea wire:model="note" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" wire:model="install" value="1" class="custom-control-input" id="same-address">
            <label class="custom-control-label"   for="same-address">Hỗ trợ lắp đặt</label>
          </div> 
      </div>
      <div class="col-md-4  mb-4" >
        @livewire('client.calcu-bill')
      </div>
    </div>
    <div class="row accept-div ">
      <div class="col-md-8  mb-8 rules" >
        Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo <span><a href="" class="terms" data-toggle="modal" data-target="#exampleModal">Điều khoản BigGara</a></span> </div>
      <div class="col-md-4  mb-4" >
        <a name="" type="submit" id="" class="btn  order-btn done" href="#" role="submit" wire:click="saveOrder">Đặt Hàng</a> </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Điều khoản BigGara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Chính sách bảo hành <br>
1. Các sản phẩm do BigGarage phân phối được bảo hành tại biggara.com hoặc tại Chính hãng tuỳ theo sản phẩm. Thời gian bảo hành được ghi trên Phiếu bảo hành hoặc trên Tem dán trên sản phẩm và được Tư vấn bán hàng thông báo với quí khách khi mua hàng
<br>

2. Các trường hợp sau đây sẽ bị từ chối bảo hành hoặc sẽ được sửa chữa có tính phí:
<br>
a. Không có phiếu bảo hành hoặc phiếu bảo hành không hợp lệ (Rách nát, thiếu thông tin hoặc sai lệch với thông tin trong kho dữ liệu lưu trữ). Thông tin bảo hành trên thiết bị không khớp với thông tin trên phiếu.
<br>
b. Không sử dụng theo đúng chỉ dẫn trong sách hướng dẫn kèm theo thiết bị.
<br>
c. Hư hỏng do điều kiện khách quan (Tai nạn, thiên tai, sét đánh, bị rơi, va chạm, để thiết bị nơi ẩm ướt, bụi bặm, nhiệt độ cao...)
<br>
d. Tem niêm phong trên thiết bị, phụ kiện bị bong, rách hoặc mất. Khách hàng tự ý can thiệp vào bên trong thiết bị, tự ý nạp phần mềm. Thiết bị, phụ kiện bị sửa chữa, mất ốc vít hoặc sử dụng các phụ kiện, linh kiện thay thế không đúng chủng loại của công ty.
<br>
e. Thiết bị, phụ kiện bị mòn, xước, nứt, vỡ, biến dạng, có mùi lạ, có vết mốc, rỉ, cháy nổ, có mùi khét...
<br>
f. Thiết bị đem tới trung tâm bảo hành sau ngày hết hạn bảo hành ghi trên phiếu bảo hành.


3. Khuyến nghị khách hàng nên mang theo phiếu bảo hành kèm theo thiết bị đến trung tâm bảo hành. Khách hàng sẽ chịu toàn bộ chi phí về chuyên chở và bưu điện (nếu có).
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
  
</div>