<div>
    @if(!Empty($servies))
                <div class=" table-responsive " >
                    <table class="table  table-responsive" id ="table" style="border: 1px solid">
                        <thead class="thead-inverse thead-dark"  style="background: #cac4bb">
                            <tr>
                                <th style="width:20%">Tên dịch vụ</th>
                                <th style="width:17%">Giá dịch vụ</th>
                                <th style="width:20%" >Ngày tạo dịch vụ</th>
                                <th style="width:20%" >Số lần khách đặt / tháng</th>
                                <th style="width:12%" >Trạng thái</th>
                            </tr>
                        </thead>
                        {{-- , --}}
                        <tbody>
                            @foreach ($servies as $servie)
                                <tr  wire:click="$emit('openService', '{{ $servie->id }}')" class ="row-table {{ ($servicesSelect ==  $servie->id) ? 'active-row' : ''}}" style="cursor: pointer">
                                    <td scope="row">{{ $servie->name }}</td>
                                    <td class="text-left"> {{ $servie->price}}</td>
                                    <td> {{ $servie->created_at}}</td>
                                    <td>12</td>
                                    <td >
                                       @livewire('owners.services.toggle-switch',['serviceID'=>$servie])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    
                    </table>
                </div>
                <div class=" table-responsive col-6" >
                    
                </div>
                <div class="d-flex justify-content-center">
                    
                    {{-- {{ $servies->links() }} --}}
                </div>
                @else
                <div class="services-empty">
                    <img src={{url('assets\img\empty_box.png') }} class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="aaa">
                    <h4>Không tìm thấy dịch vụ</h4>
                </div>
            @endif
            <style>
            .active-row, .row-table:hover {
                background: #F7941D;
                color: white;
                cursor: pointer;
            }
            </style>
</div>
