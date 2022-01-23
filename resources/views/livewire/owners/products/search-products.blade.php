<div>
    <div class="col-4 col-lg-4 no-gutters search-bar">
        <div class="input-group rounded" >
            <input  wire:model="search" type="search" class="form-control rounded" placeholder="Tìm kiếm sản phẩm" />
        </div>
    </div>
    <div class="row container-fluid g-0">
        <div class="col-2 col-lg-2  no-gutters"  style="padding-right: 1%">
            <div class="search-category">
                @livewire('owners.products.fillter-category')
            </div>
            <div class="search-trandemark">
                <h6 style="text-align: center;font-size: 1.1rem;line-height: 40px !important">Thương hiệu sản phẩm</h6>
                <input  wire:model="queryTrademark" type="search" class="form-control rounded" placeholder="Thương hiệu " style="border: none;outline: none !important;
                box-shadow: none;border-bottom: 1px solid #F7941D"/>
                @if(!Empty($trademarks))
                    <ul class="list-group list-trademarks">
                        <li class="list-group-item">
                            <button  wire:click="getTrademarkID('> 0')">Tất cả </button>
                        </li>
                        @foreach($trademarks as $trademark)
                            <li class="list-group-item p-0">
                                <div class="btnCate"  id="btnCate">
                                    <button style="padding: 0.5rem 0;padding-left: 1.25rem;" wire:click="getTrademarkID('= {{ $trademark['id'] }}')"> {{ $trademark['trandemark_name'] }} </button>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    Chưa có thương hiệu!!!!
                @endif
            </div>
            <div class="inventory">
                <h6 style="text-align: center;font-size: 1.1rem;line-height: 40px !important">Tồn kho</h6>
                <div class="form-check" style="margin: 0.5rem 0 0.5rem 1rem;">
                    <input class="form-check-input"  value="> -1"  wire:model="inventory" type="radio" name="flexRadioDefault" id="flexRadioDefault1" >
                    <label class="form-check-label" for="flexRadioDefault1">
                      Tất cả
                    </label>
                  </div> 
                  <div class="form-check" style="margin: 0.5rem 0 0.5rem 1rem;">
                    <input class="form-check-input"  value="< minqty" wire:model="inventory" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                      Dước mức định tồn
                    </label>
                  </div>
                  <div class="form-check" style="margin: 0.5rem 0 0.5rem 1rem;">
                    <input class="form-check-input"  value="> maxqty" wire:model="inventory" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault3">
                      Vượt mức định tồn
                    </label>
                  </div>
                  <div class="form-check" style="margin: 0.5rem 0 0.5rem 1rem;">
                    <input class="form-check-input"  value="> 0" wire:model="inventory" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault4">
                      Còn hàng trong kho
                    </label>
                  </div>
                  <div class="form-check" style="margin: 0.5rem 0 0.5rem 1rem;">
                    <input class="form-check-input" value="= 0" wire:model="inventory" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault5">
                      Hết hàng trong kho
                    </label>
                  </div>
            </div>
           
        </div>
        <div  class="col-6 col-lg-6 no-gutters">
            @if(!$products->isEmpty())
            <div class=" table-responsive" >
                <table class="table  table-responsive" id ="table" style="border: 1px solid">
                    <thead class="thead-inverse thead-dark"  style="background: #cac4bb">
                        <tr>
                            <th style="width:17%">Mã sản phẩm</th>
                            <th style="width:49%">Tên sản phẩm</th>
                            <th style="width:10%" >Giá gốc</th>
                            <th style="width:12%" >Giá bán</th>
                            <th style="width:12%" >Tồn kho</th>
                        </tr>
                    </thead>
                    {{-- , --}}
                    <tbody>
                        @foreach ($products as $product)
                            <tr class ="row-table" wire:click="$emit('getDetailProduct', '{{ $product->productCode }}')">
                                <td scope="row">{{ $product->productCode }}</td>
                                <td class="text-left"> {{ $product->productName }}</td>
                                <td>{{ $product->price_base }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->qty }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
            @else
            <div class="products-empty">
                <img src={{url('assets\img\empty_box.png') }} class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="aaa">
                <h4>Không tìm thấy sản phẩm</h4>
            </div>
            @endif
        </div>
        <div class="col-4 col-lg-4 detail-product no-gutters" >
            @livewire('owners.products.inner-product-detail')
        </div>
        
    </div>
</div>

