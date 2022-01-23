<div>
    <table class="table table-striped table-bordered table-list">
              <thead>
               <tr style="color: blue;">
                <th class="hidden-xs">Mã sản phẩm</th>

    

          <th>Tên sản phẩm</th>
  
     
  
  
  
          <th>số lượng</th>
  
  
  
  
  
  
  
  
          <th>Chi phí</th>
  
  
  
          
  
  
  
  
  
  
                  <th ><em class="fa fa-cog" style="margin-left: 30%;" ></em>
                        </th>
  
  
  
  
  
  
               
  
  
               </tr>
              </thead>
              <tbody>
            @if (!is_null($cartProducts))
          @foreach($cartProducts as $cartproduct)
          <tr>
           
                   <td class="hidden-xs">{{ $cartproduct->id}}</td>
             
        
            <td>{{ $cartproduct->name}}</td>
  
  
  
            <td>{{ $cartproduct->qty}}</td>
  
              
            <td>{{number_format( $cartproduct->qty*$cartproduct->price)}}</td>
  
                <td>
  
  
  
                    <button type="button" class="btn2" wire:click= "deleteCartProduct('{{ $cartproduct->rowId}}')"><i class="fas fa-trash"></i></button>
              </td>
  
                
  
  
              </tr>
          @endforeach
          @endif
  
  
             </tbody></table>
        {{-- <div class="cart-total">
          <strong class="cart-total-title">Tổng Cộng:</strong>
          <span class="cart-total-price">{{$totalPriceProduct}}VNĐ</span>
      </div> --}}
      @livewire('tell-man.total',['status'=>'4'])
      
  </div>
  