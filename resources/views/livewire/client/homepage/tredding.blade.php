<div>
    <div class="container" >
        <div class="trending-product-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Sản phẩm đang được ưa chuộng</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="trending-product-container">
            <div class="row">
                <div class="col-12">
                    <div class="product-trending">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach ($cate as $c )
                                    <li class="nav-item"><button wire:click="selectedCate('{{ $c->category_id }}')" class="btn  {{ ($selectCate == $c->category_id) ? 'active' : ''}}" >{{ $c->category_name }}</button></li>  
                                @endforeach
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="tab-content" id="myTabContent">
        <!-- Start Single Tab -->
        <div class="tab-pane fade show active" >
            <section class="py-5">
                {{-- px-4 px-lg-5 mt-5 --}}
                <div class="container">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach($productList as $p)
                            <div class="col mb-4">
                                <div class="card h-100">
                                    @if($p->baseprice != $p->price )
                                    <!-- Sale badge-->
                                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                    @endif
                                    <!-- Product image-->
                                    <img class="card-img-top" src="{{ $p->image }}" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder"><a style="text-decoration: none; color: #333" href="/productdetail/{{ $p->id }}">{{ $p->productName }}</a></h5>
                                            <!-- Product reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- Product price-->
                                            @if($p->baseprice != $p->price )
                                                <span class="text-muted text-decoration-line-through">{{ number_format($p->baseprice) }} đ</span>
                                                {{number_format( $p->price) }} đ
                                            @else
                                                {{number_format( $p->price) }}đ
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent" >
                                        
                                        <div class="d-flex justify-content-center">
                                            <button wire:click="addtocart('{{ $p->id }}','{{ $p->productName }}')" class="btn btn-secondary col-6" style="color: #fff;background-color: #f7941d !important;border-color: #df861a !important; margin-right: 5px" > <i class="bi bi-cart"></i>&nbsp;Thêm giỏ hàng</button>
                                            <button wire:click="$emit('cart_updated')" class="btn btn-secondary col-6" style="color: #fff;background-color: #f7941d !important;border-color: #df861a !important; margin-left: 5px"><i class="bi bi-suit-heart"></i>&nbsp;Yêu thích</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>   
    <div class="container" >
        <div class="trending-product-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Phụ kiện mới</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    @livewire('client.homepage.hot'))
</div>
