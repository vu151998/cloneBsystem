
<div>
     <table class="table table-striped table-bordered table-list">
              <thead>
               <tr style="color: blue;">
                <th class="hidden-xs">ID</th>
     

          <th>Tên dịch vụ </th>



          <th>số lượng</th>








          <th>Chi phí</th>



          






                  <th ><em class="fa fa-cog" style="margin-left: 30%;" ></em>
                        </th>






               


               </tr>
              </thead>
              <tbody>
            @if (!is_null($cartServices))
          @foreach($cartServices as $cartService)
          <tr>
           
                   <td class="hidden-xs">{{$cartService->id}}</td>

        
            <td>{{$cartService->name}}</td>



            <td>{{$cartService->qty}}</td>


            <td>{{number_format($cartService->qty*$cartService->price)}}</td>

                <td>



                    <button type="button" class="btn2" wire:click= "deleteCartService('{{$cartService->rowId}}')"><i class="fas fa-trash"></i></button>
              </td>

                


              </tr>
          @endforeach
          @endif


             </tbody></table>
        {{-- <div class="cart-total">
          <strong class="cart-total-title">Tổng Cộng:</strong>
          <span class="cart-total-price">{{$totalPriceService}}VNĐ</span>
      </div> --}}
      @livewire('tell-man.total',['status'=>'5'])
</div>
