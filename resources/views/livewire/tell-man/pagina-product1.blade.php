<div>
    <input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm1" />
     <table class="table table-striped table-bordered table-list">
            <thead>
             <tr style="color: blue;">
        <th class="hidden-xs">ID</th>
             
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm </th>
        <th>Thương hiệu </th>
        <th>Nhóm sản phẩm </th>
       
        <th>Chi phí</th>
         
         <th ><em class="fa fa-cog" style="margin-left: 30%;" ></em>
                      </th>
  
           </tr>
            </thead>
            <tbody>
        @foreach($products as $product)
         
              <tr>
         
              <td>{{$product->id}}</td>
  
             <td>{{$product->productcode}}</td>
             <td >{{$product->productname}}</td>
             <td >{{$product->trandemark_name}}</td>
             <td >{{$product->category_name}}</td>

  
  
  
  
  
             <td >{{$product->price}}</td>
  
  
  
              <td>
  
  
  
              <button type="button" class="btn5" wire:click= "AddCartProduct('{{$product->productcode}}')">Thêm Vào Giỏ</button>
  
            </td>
  
              
  
  
            </tr>
      @endforeach
     
              
           </tbody></table>
   
          {{ $products->links() }}
  
          
        </div>