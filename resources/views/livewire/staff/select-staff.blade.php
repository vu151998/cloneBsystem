<div>
  {{-- <label>Thợ :</label> --}}
    @if (!is_null($cartStaffs))
          @foreach($cartStaffs as $cartStaff)
         
           
                 

        
            <button class="btn5">{{$cartStaff->name}}</button>

            {{-- <a wire:click= "deleteCartStaff('{{$cartStaff->rowId}}')">Xóa</a> --}}
            <button type="button" class="btn2" wire:click= "deleteCartStaff('{{$cartStaff->rowId}}')"><i class="fas fa-trash"></i></button>


                


          @endforeach
          @endif
</div>
