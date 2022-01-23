<div class="card">
    <div class="row">
        @if(Cart::instance('wishlist')->count() >0)
            <div class="col-md-12 cart" >
        @else
            <div class="col-md-12 cart" style="background-image:  url('assets/img/cart-empty.png');background-position: center;background-repeat: no-repeat; ">
        @endif    
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Danh sách yêu thích</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted"><?php echo Cart::instance('wishlist')->count();; ?> mặt hàng</div>
                </div>
            </div>
          <div style="height:400px;overflow-y: scroll;padding:5px;overflow-x: hidden; ">
            @foreach(  Cart::instance('wishlist')->content()  as $row) 
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
                                
                                <span class="close"><i  wire:click.prevent="DeleteProductFromCart('{{ $row ->rowId }}','{{ $row->id }}','{{ $row->name }}')" 
                                class="bi bi-cart"></i></span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            </div>
            <div class="d-flex justify-content-between  ">
                <div class="back-to-shop"><a href="{{ route('shophome.index') }}">&leftarrow;</a><span class="text-muted">Trở về trang chủ</span></div>
                <div></div>
                <div><a class="btn btn-outline-warning btn-checkout" style="color: white" href="{{ route('shoppingcart.index') }}">Tiến tới giỏ hàng</a></div>
            </div>
        </div>
       
    </div>
</div>

<style>
    .btn-checkout{
        background: rgb(240, 182, 105);
    }
</style>