<div>
    <div class="container" style="padding-bottom: 100px">
        <div  class=" responsive">
            @foreach($productList as $p)
                <div class="single-product">
                    <div class="product-img">
                        <a href="product-details.html" style="height: 215px;width: 215px; object-fit: contain;">
                            <img class="default-img" style="height: 215px;width: 215px; object-fit: contain;" src="{{ $p->image }}" alt="#">
                            {{-- <span class="out-of-stock">Hot</span> --}}
                        </a>
                        <div class="button-head">
                            <div class="product-action">
                                <a title="Compare" wire:click="addtocart('{{ $p->id }}','{{ $p->productName }}')"><i class="bi bi-cart"></i></i><span>Thêm vào giỏ hàng</span></a>
                                <a title="Wishlist" wire:click="addtowishlist('{{ $p->id }}','{{ $p->productName }}')"><i class="bi bi-suit-heart"></i></i><span>Yêu thích</span></a>
                            
                            </div>
                            <div class="product-action-2">
                                <a>Giá: </a>
                                <a style="text-decoration-line: line-through"> {{number_format($p->baseprice)  }}đ</a>
                                <a>{{number_format( $p->price) }} đ</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="product-details.html">{{ $p->productName }}</a></h3>
                        <div class="product-price">
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->
            @endforeach
        </div>
    </div>
</div>
