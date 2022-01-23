<div>
    <h6>Thương hiệu sản phẩm</h6>
    <input  wire:model="query" type="search" class="form-control rounded" placeholder="Thương hiệu " style="border: none;outline: none !important;
    box-shadow: none;border-bottom: 1px solid #F7941D"/>
    @if(!$trademarks->isEmpty())
        <ul class="list-group list-trademarks">
            <li class="list-group-item">
                <button  wire:click="$emitTo('SearchProducts','getCate',a,-1')">Tất cả </button>
            </li>
            @foreach($trademarks as $trademark)
                <li class="list-group-item">
                    <div class=" btnCate"  id="btnCate">
                        <button  wire:click="$emitTo('SearchProducts','getCate',a,'{{ $trademark->id}}')"> {{ $trademark->trademark }} </button>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        Chưa có thương hiệu!!!!
    @endif
</div>
<style>
    .list-trademarks{
    max-height: 200px;
    margin-bottom: 10px;
    overflow:scroll;
    overflow-x: hidden;
    -webkit-overflow-scrolling: touch;
    padding: 0;
    margin: 0;
}
.list-trademarks button {
    padding: 0;
    margin: 0;
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}
</style>