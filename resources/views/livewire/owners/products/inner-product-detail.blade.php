<div>
    @if(!empty($product))
    <div class="inner-detail">
        <h5 class="p-1" >{{ $product[0]->productName }}</h5>
        <div class="detail-inner row">
            <div class="img-product col-6"> 
                @if(!is_null($product[0]->image)) {{--  --}}
                    <img src={{ $product[0]->image}} class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="aaa">
                @else
                    <img src={{ url('assets\img\empty_box.png')}} class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="aaa">
                @endif
                </div>
            <div class="infor-product col-6">
                <p style="padding: 0">Mã sản phẩm : {{ $product[0]->productCode }}</p>
                {{-- Nhóm sản phẩm --}}
                <span style="padding: 0">Nhóm sản phẩm: </span>
                {{-- <input  wire:model="categories" type="search" class="form-control rounded" placeholder="{{ $product[0]->categoryName  }}"  style="border: none;outline: none !important;
                box-shadow: none; border-bottom: 1px solid #F7941D"
                        wire:keydown.escape="reset"
                        wire:keydown.tab="reset"
                        wire:keydown.arrow-up="decrementHighlight"
                        wire:keydown.arrow-down="incrementHighlight"
                        wire:keydown.enter="selectContact" /> --}}
                        <p>{{ $product[0]->categoryName }}</p>
                <div wire:loading wire:target="categories" class="absolute z-10 w-full bg-white rounded-t-none list-group">
                    <div class="list-item">Đang tìm kiếm...</div>
                </div>
                {{-- Thương hiệu --}}
                    <span>Thương hiệu</span>
                    {{-- <input  wire:model="trademarks" type="search" class="form-control rounded" placeholder="SPARCO " style="border: none;outline: none !important;
                    box-shadow: none;border-bottom: 1px solid #F7941D"
                            wire:keydown.escape="reset"
                            wire:keydown.tab="reset"
                            wire:keydown.arrow-up="decrementHighlight"
                            wire:keydown.arrow-down="incrementHighlight"
                            wire:keydown.enter="selectContact" />
                    <div wire:loading wire:target="trademarks" class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
                        <div class="list-item">Đang tìm kiếm...</div>
                    </div> --}}
                    <p>{{ $product[0]->trademark }}</p>
                    @if(!empty($query_categories))
                    <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="reset"></div>
                    <div class="absolute z-10 w-full bg-white rounded-t-none list-group">
                        @if(!empty($categories))
                            @foreach($categories as $i => $category)
                                <a  href="{{ route('show-contact', $category['id']) }}"
                                    class="list-item {{ $highlightIndex === $i ? 'highlight' : '' }}"
                                >{{ $category['name'] }}</a>
                            @endforeach
                        @else
                            <div class="list-item">No results!</div>
                        @endif
                    </div>          
                    @endif
                {{-- Giá vốn --}}
                <div class="row price"  >
                    <p class ="col-4" style="padding: 0">Giá vốn</p>
                    <span>{{ $product[0]->price_base }}VNĐ </span>
                </div>
               {{-- Giá bán --}}
                <div class="row price" >
                    <p class ="col-4" style="padding: 0">Giá bán</p>
                    <input type="text" wire:model.defer="newprice" class="form-control input col-6" id="usr"  value="{{  $product[0]->price }}">
                    <span>VNĐ</span>
                </div>
                {{-- Tồn kho --}}
                <p>Tồn kho : {{ $product[0]->qty }}</p>
                {{-- trọng lượng --}}
                <p>Trọng lượng : {{ $product[0]->weight}} kg</p>
                {{-- action --}}
                <div class="row actionbtn" style="display: flex; justify-content:space-between">
                    <div class="col-3">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Xóa</button>
                    </div>
                    <div class="col-8">
                        <button type="button" wire:click="updateProduct1('{{  $product[0] }}')" class="btn btn-success">Cập nhật</button>
                        {{-- ('{{  $product[0] }}') --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm {{ $product[0]->productCode }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               Xóa sản phẩm  {{ $product[0]->productName }} không ảnh hưởng  dữ liệu đơn hàng và dữ liệu trên KiotViet
            </div>
            <div wire:ignore class="modal-footer">
              <button type="button" class="btn btn-secondary"  data-dismiss="modal">Bỏ qua</button>
             
              <button type="button" class="btn btn-danger"  wire:click="deleteProduct('{{  $product[0]->id  }}')"  data-dismiss="modal">Xoá</button>
            </div>
          </div>
        </div>
    </div>
    @endif
</div>
