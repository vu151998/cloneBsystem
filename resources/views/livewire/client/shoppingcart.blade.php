<div class="card">
    <div class="row">
        @if(Cart::count() >0)
            <div class="col-md-8 cart" >
        @else
            <div class="col-md-8 cart" style="background-image:  url('assets/img/cart-empty.png');background-position: center;background-repeat: no-repeat; ">
        @endif    
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Giỏ hàng</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted"><?php echo Cart::content()->count();; ?> mặt hàng</div>
                </div>
            </div>
          <div style="height:400px;overflow-y: scroll;padding:5px;overflow-x: hidden; ">
            @foreach(  Cart::content()  as $row) 
                @if($row->qty >0)
                    <div class="row border-top border-bottom" id="productlist">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="{{ $row ->image }}"></div>
                            <div class="col">
                                {{-- <div class="row text-muted"><?php echo $row->name ?></div> --}}
                                <div class="row" ><a style="text-decoration: none; color:black" href="/productdetail/{{ $row->id }}">
                                    {{ $row->name }}</a></div>
                            </div>
                            
                            
                            <form class ="quantity col-3 ">
                                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value" wire:click.prevent="DecreaseQuantity('{{ $row ->rowId }}')">
                                    -</div>
                                <input type="number" id="number" value="<?php echo $row->qty; ?>" />
                                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"
                                wire:click.prevent="IncreaseQuantity('{{ $row ->rowId }}')">+</div>
                            </form>
                            
                            <div class="col"> <?php echo $row->price; ?> 
                            <span class="close remove_item"><i  wire:click.prevent="DeleteProductFromCart('{{ $row ->rowId }}')" 
                                class="bi bi-trash"></i></span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            </div>
            <div class="back-to-shop"><a href="{{ route('shophome.index') }}">&leftarrow;</a><span class="text-muted">Trở về trang chủ</span></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Chi phí</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col">Tạm tính(<?php echo Cart::count(); ?> Vật phẩm)</div>
                <div class="col text-right"><?php echo Cart::subtotal(); ?></div>
            </div>
            {{-- <form>
                <p>Vận chuyển</p> <select>
                    <option class="text-muted">Giao hàng miễn phí </option>
                </select>
            </form> --}}
            {{-- <div style="padding: 1vh 0;">
                <p>Mã giảm giá</p> 
                <div >
                    <input type="text" class="form-control" placeholder="Nhập mã giảm giá" aria-label="Recipient's username" 
                     aria-describedby="basic-addon2">
                     <button class="btn btn-primary" style="margin: 0;margin-top: 1%" >Áp dụng</button>
                    
                </div>
            </div> --}}
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">Tổng tiền </div>
                <div class="col text-right"> <?php echo Cart::subtotal(); ?></div>
                
            </div>
            <div class =" text-right">Đã bảo gồm thuế VAT</div>
             <a class="btn btn-outline-warning btn-checkout"   wire:click="checkout">Tiến hành thanh toán</a>
        </div>
    </div>
</div>

<style>
    .btn-checkout{
        background: rgb(240, 182, 105);
    }
</style>