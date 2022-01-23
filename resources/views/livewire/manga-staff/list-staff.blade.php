<div>
    <div class="container">
        <div class="row">
            <div class="col col-xs-6">
                   <form class="d-flex">


                    <div style="float: left;">
                        <input class="form-control me-2" type="search" placeholder="Tìm kiếm tên thợ hoặc điện thoại" aria-label="Search"
                               style="width :210px;border-color: rgba(0,0,0,0.6);height: 43px;" wire:model="searchTerm">
                    </div>

                    <div style="float: left;">

                        <button class="btn btn-outline-success" type="submit"><i class="	fas fa-search"></i></button>
                    </div>



                </form>
                      </div>
            <div class="col col-xs-6 text-right">
                       <button type="button" class="btn btn-outline-success" style="margin-top: 23px;margin-left: 200px;"
                               onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Thêm mới</button>
                      </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list nowrap">
                <thead>
                <tr style="color: blue;">
                    <th>ID</th>
                    <th>Tên thợ</th>
                    <th>Số điện thoại</th>
                    <th>Tuổi</th>
                    <th>Địa chỉ</th>
                    <th>chức năng thợ</th>
                    <th>Trạng thái</th>
                    <th><em class="fa fa-cog" style="margin-left: 30%;"></em></th>
                </tr>
                </thead>
                <tbody>
                @foreach($workers as $worker)
                <tr>
                    <td>{{$worker->id}}</td>
                    <td>{{$worker->name}}</td>
                    <td>{{$worker->phone}}</td>
                    <td>{{$worker->age}}</td>
                    <td>{{$worker->address}}</td>
                    <td>{{$worker->group_worker->name_group}}</td>
                    <td>
                        @if($worker->status == 1  )
                            <p>thợ trong xưởng</p>
                        @elseif($worker->status == 2)
                             <p>thợ ngoài xưởng</p>
                        @else
                             <p>xin nghỉ</p>
                        @endif
                    </td>
                    <td>
                        <button class="btn1" onclick="document.getElementById('{{$worker->id}}').style.display='block'" style="width:auto;"><i class="fas fa-edit"></i></button>
                        <a href="./deleteWorker/{{$worker->id}}" class="btn2" id="btn-show-dialog"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$workers->links()}}
        </div>

    </div>
</div>
