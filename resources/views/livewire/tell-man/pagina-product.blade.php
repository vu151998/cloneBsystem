<div>
    <input type="text" class="form-control" style="border: 1px solid #ccc;" placeholder="Tìm kiếm..."
        wire:model="searchTerm1" />
    {{-- <div style="margin-bottom:20px !important">
      <div style="float: left">
    <label>Nhóm sản phẩm: </label>
                                    <select wire:model="location" name="status" class="form-control input-inline" style="width: 200px">
                                      <option value="0">Tất cả</option>
                                        @foreach ($products as $product)
                                            
                                        <option value="{{$product->categoriesID}}">{{$product->category_name}}</option>
                                       
                                        @endforeach
                                   
                                    </select>
                                  </div>
                                  <div style="float: left;margin-left: 10%">
                                    <label>Thương hiệu: </label>
                                    <select wire:model="location1" name="channels" class="form-control input-inline" style="width: 200px">
                                      <option value="0">Tất cả</option>
                                
                                      @foreach ($products as $product)
                                            
                                      <option value="{{$product->trademarksID}}">{{$product->trandemark_name}}</option>
                                     
                                      @endforeach
                                  

                                   
                                    </select>
                                  </div>
                                  </div> --}}
    <table class="table table-striped table-bordered table-list">
        <thead style="height: 40px">
            <tr>
                <th class="hidden-xs"
                    style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">
                    ID</th>

                <th
                    style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">
                    Mã sản phẩm</th>
                <th
                    style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">
                    Tên sản phẩm </th>
                <th
                    style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">
                    Thương hiệu </th>
                <th
                    style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">
                    Nhóm sản phẩm </th>

                <th
                    style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">
                    Chi phí</th>
                <th
                    style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">
                    <em class="fa fa-cog"></em>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr class="table-th">
                    <td class="table-cell-td">{{ $product->id }}</td>
                    <td class="table-cell-td">{{ $product->productcode }}</td>
                    <td class="table-cell-td">{{ $product->productname }}</td>
                    <td class="table-cell-td">{{ $product->trandemark_name }}</td>
                    <td class="table-cell-td">{{ $product->category_name }}</td>
                    <td class="table-cell-td">{{ $product->price }}</td>
                    <td class="table-cell-td" style="width: 5%;">
                        <i class="fas fa-cart-plus icon-cart"
                            wire:click="AddCartProduct('{{ $product->productcode }}')"></i>
                        {{-- <button type="button" class="btn5" wire:click= "AddCartProduct('{{$product->productcode}}')">Thêm Vào Giỏ</button> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}


</div>
<style>
    .icon-cart {
        color: #5182e7;
        font-size: 16px
    }

    .icon-cart:hover {
        color: #42a942
    }

    .table-th {
        height: 40px
    }

    .table-cell-th {
        vertical-align: middle !important;
        color: #fff;
        background-color: #343a40 !important;
        border-color: #454d55 !important;
    }

    .table-cell-td {
        vertical-align: middle !important
    }

</style>
