
<div>
    <div class="input-group">
        <input type="text" autocomplete="off"  wire:model="keyword"  class="form-control" style="height: 50px;"
        id="validationCustomUsername" placeholder="Tìm kiếm sản phẩm...." aria-describedby="inputGroupPrepend" >
    </div>
   
    @if($show)
        <div class="result-search">
            @foreach ( $searchResults as $ele )
                <div class="option-search" >
                    <a href="/productdetail/{{$ele->id}}">{{ $ele->productName }}</a>
                </div>
            @endforeach
        </div>
       
    @endif
</div>
<style>
    .result-search{
        max-height: 400px;
        overflow: auto;
    }
    .option-search{
       
        margin: 1% 0;
        padding: 1% 3%;

    }
    .option-search:hover{
        background: #F7941D;
    }
   
    /* .parent-option:hover .option-search{
        background: #F7941D;
        cursor: pointer;
    }
    .parent-option .option-search:hover{
        background: #aea9a4;
        cursor: pointer;
    } */
    .option-search a{
        text-decoration: none;
        color: black;
    }
</style>