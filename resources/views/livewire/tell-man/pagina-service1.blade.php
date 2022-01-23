<div>
    <input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm" />
     <table class="table table-striped table-bordered table-list">
            <thead>
             <tr style="color: blue;">
              <th class="hidden-xs">ID</th>

        <th>Tên dịch vụ </th>
        <th>Mô tả</th>
        <th>Chi phí</th>
         
         <th ><em class="fa fa-cog" style="margin-left: 30%;" ></em>
                      </th>
  
           </tr>
            </thead>
            <tbody>
        @foreach($services as $service)
         
              <tr>
         
             <td class="hidden-xs">{{$service->id}}</td>
  
           
             <td class="content-product-h3">{{$service->name}}</td>
  
  
  
             <td>{{$service->description}}</td>
  
  
             <td class="price">{{$service->price}}</td>
  
  
  
              <td>
  
  
  
              <button type="button" class="btn5" wire:click= "AddCartService('{{$service->id}}')">Thêm Vào Giỏ</button>
  
            </td>
  
              
  
  
            </tr>
      @endforeach
     
              
           </tbody></table>
   
          {{ $services->links() }}
  
          
        </div>