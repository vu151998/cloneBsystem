<div style="margin-top: 1%;border-right: 1px groove; ">
    <div class="header-list ">
        
        <div class="d-flex justify-content-between align-items-center  mb-2" style="border: none">
            <div>
                <h4>Mã giảm giá</h4>
            </div>
            {{-- <div class="p-2 bg-warning">Flex item 2</div> --}}
            <div class="p-2 ">
                <a name="" data-toggle="modal"  data-target="#exampleModal" class="btn btn-success"  style="color: white" role="button">
                    Thêm mã giảm giá
                </a>
            </div>
          </div>
        
    </div>
    @if(!Empty($listdiscount))
        <div class="list-discount " style="margin-top: 1%">
            <table class="table ">
                <thead class="thead-dark" style="width: calc( 100%)">
                    <tr>
                        <th>Mã giảm giá</th>
                        <th>Khoản giảm giá</th>
                        <th>Thời hạn khuyến mãi</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach($listdiscount as $discount)
                            <tr wire:click="selectRow('{{ $discount->id }}')" class="row-table {{ ($idSelect ==  $discount->id) ? 'active-row' : ''}}" style="cursor: pointer" >
                                <td scope="row">{{ $discount->coupon_code }}</td>
                                <td style="text-align: center">{{ $discount->discount_amount }} %</td>
                                <td>{{ $discount->expiration_date }}</td>
                                <td>{{ $discount->created_at }}</td>
                                <td>{{ $discount->updated_at }}</td>
                            </tr>
                        @endforeach
                    
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $listdiscount->links() }}
        </div>
    @endif
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Thêm mới mã giảm giá</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                @livewire('owners.discount-manager.create-discount')
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Bỏ qua</button>
              <button type="button" wire:click="createDiscount" data-dismiss="modal" class="btn btn-success">Thêm mới</button>
            </div>
          </div>
        </div>
    </div>
    <style>
        .active-row, .row-table:hover {
                background: #F7941D;
                color: white;
                cursor: pointer;
            }

    </style>
</div>
