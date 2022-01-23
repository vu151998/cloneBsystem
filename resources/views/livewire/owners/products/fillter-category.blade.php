<div>
    <h6 style="text-align: center;font-size: 1.1rem;line-height: 40px !important;">Danh mục sản phẩm </h6>
                <input  type="search" class="form-control rounded" placeholder="Tìm kiếm..." style="outline: none !important;
                box-shadow: none; border-bottom: 1px solid #F7941D"/>
                @if(!empty($categories)  )
                    <div class="absolute z-10 w-full bg-white rounded-t-none list-group">
                        <ul class="list-group">
                            <li class="list-group-item" style="padding:0; text-align:center" style="overflow: auto !important"><button wire:click="$emit('getCate','')"  class="withoutadd">Tất cả</button></li>
                             {{-- sub item 1 --}}
                            @foreach($categories as $category)
                                <li class="list-group-item"  style="padding: 0; margin: 0; text-align: left" style="max-height: auto !important">
                                    <div class="row m-0 hidden-croll-bar" id="btnCate" style="overflow: auto !important; background: #eee;">
                                        @if(array_key_exists('children',$category))
                                            <div class="col-1" style="display:flex">
                                                <button  class="accordion"></button>
                                            </div>
                                            <div class="col-10 pr-0 py-0" style="flex: 1;display: flex;">
                                                <button wire:click="$emit('getCate','{{ $category['category_id']}}')"  class="withoutadd">{{ $category['category_name'] }}</button> 
                                            </div>
                                        @else
                                            <div class="col-12">
                                                <button wire:click="$emit('getCate','{{ $category['category_id']}}')"  class="withoutadd">{{ $category['category_name'] }}</button> 
                                            </div>
                                        @endif
                                    </div>
                                @if(array_key_exists('children',$category))
                                    <div class="panel hidden-croll-bar" style="overflow: auto !important;background: #eee;">
                                        {{-- sub item 2 --}}
                                        @foreach($category['children'] as  $son)
                                        <div class="row">
                                            @if(array_key_exists('children',$son))
                                                    <div class="col-1">
                                                        <button  class="accordion"></button>
                                                    </div>
                                                    <div class="col-10 pr-0 py-0" style="flex: 1;display: flex;">
                                                        <button wire:click="$emit('getCate','{{ $son['category_id']}}')"  class="withoutadd">{{ $son['category_name'] }}</button> 
                                                    </div>
                                                @else
                                                    <div class="col-12">
                                                        <button wire:click="$emit('getCate','{{ $son['category_id']}}')"  class="withoutadd">{{ $son['category_name'] }}</button> 
                                                    </div>
                                                @endif
                                            </div>
                                            @if(array_key_exists('children',$son))
                                                <div class="panel hidden-croll-bar" style="background: #eee; max-height: auto !important">
                                                     {{-- sub item 3 --}}
                                                    @foreach($son['children'] as  $s)
                                                            <button wire:click="$emit('getCate','{{ $s['category_id']}}')"  class="withoutadd">{{ $s['category_name'] }}</button> 
                                                    @endforeach
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <div class="list-item">No results!</div>
                @endif
</div>

    <style>
        .hidden-croll-bar::-webkit-scrollbar {
        display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .hidden-croll-bar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        }

        .withoutadd {
            padding: 10px !important;
        }
    </style>