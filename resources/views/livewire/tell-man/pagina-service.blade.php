<div>
    <input type="text" class="form-control" placeholder="Tìm kiếm..." style="border:1px solid #c9c9c9" wire:model="searchTerm" />
    <table class="table table-striped table-bordered table-list">
        <thead style="height: 40px">
            <tr>
                <th class="hidden-xs" style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">ID</th>
                <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Tên dịch vụ </th>
                <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Mô tả</th>
                <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important;">Chi phí</th>
                <th style="vertical-align: middle;color: #fff;background-color: #343a40 !important; border-color: #454d55 !important; width: 5%"><em class="fa fa-cog"></em>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td class="hidden-xs" style="height: 40px !important; vertical-align: middle">{{ $service->id }}</td>
                    <td class="content-product-h3" style="height: 40px !important; vertical-align: middle">{{ $service->name }}</td>
                    <td style="height: 40px !important; vertical-align: middle">{{ $service->description }}</td>
                    <td style="height: 40px !important; vertical-align: middle" class="price">{{ $service->price }}</td>
                    <td style="height: 40px !important; vertical-align: middle">

                        <i class="fas fa-cart-plus icon-cart" wire:click="AddCartService('{{ $service->id }}')">
                        </i>
                        {{-- <button type="button" class="btn8"
                            style="padding-top: 6px; padding-bottom: 6px;background-color: #28a745;border-color: #28a745;color: #fff;font-size: 12px;font-family: sans-serif;"
                            wire:click="AddCartService('{{ $service->id }}')" >Thêm Vào Giỏ</button> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $services->links() }}


</div>
