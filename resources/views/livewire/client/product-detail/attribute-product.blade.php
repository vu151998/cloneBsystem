
<div class="option">
   
    <p>Mẫu sản phẩm :</p>
    <div class="row">
        @foreach($attribute as $key => $value)
            <div class="col-5">
                <a wire:click="switchAttribute('{{ $key }}')" class ="btn btn-outline-warning  {{ ($idpro == $key) ? 'active' : '' }} ">{{ $value }}</a>
            </div>
        @endforeach
    </div>   
                   
</div>

{{-- <div class="btn-option" >
    <div class="form-group" style="display:inline-block;">
      <label for=""><span style="color:#8e8e8e">Vị Trí lắp đặt: </span> <span style="font-weight: bold;">Kẹp Trên Khe Gió</span></label>
      <select class="form-control" name="btn-option" id="" >
        <option><button type="button" class="btn btn-primary">Dán trên Taplo,kính ô tô</button></option>
        <option><button type="button" class="btn btn-primary">Kẹp trên khe gió</button></option>
      </select>
    </div>
</div>
<div class="btn-option" >
    <div class="form-group" style="display:inline-block;">
      <label for=""><span style="color:#8e8e8e">Mẫu: </span> <span style="font-weight: bold;">Mẫu 1</span></label>
      <select class="form-control" name="btn-option" id="" >
        <option><button type="button" class="btn btn-primary">Mẫu 1</button></option>
        <option><button type="button" class="btn btn-primary">Mẫu 2</button></option>
        <option><button type="button" class="btn btn-primary">Mẫu 3</button></option>
        <option><button type="button" class="btn btn-primary">Mẫu 4</button></option>
      </select>
    </div>
</div> --}}