<!doctype html>
<html lang="en">
<livewire:header-admin />
<body style="background-color: white;">
<livewire:navbar-admin/>
<div class="row" id="body-row">
    <livewire:staff-sidebar />
    <div class="col p-4">
        <h5 class="card-header font-weight-light" style="text-align: center;">QUẢN LÝ THÔNG TIN THỢ</h5>
        <div class="card-body">
            <livewire:manga-staff.list-staff />
        </div>
    </div>
</div>
<!-- add -->
<div id="id02" class="modal">

    <form class="modal-content animate" action="./addWorker" method="post">
        @csrf
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <h1 style="font-weight: bold">Thêm thợ</h1>



        </div>

        <div class="container">



            <div>
                <div style="float: left;width: 100%;">
                    <label for="uname"><b>Tên</b></label>
                    <input type="text" placeholder="" name="name" required>
                </div>

                <div style="float: left;width: 100%;">
                    <label for="uname"><b>Số điện thoại</b></label>
                    <input type="text" placeholder="" name="phone" required>
                </div>
            </div>

            <div>
                <div style="float: left;width: 100%;">
                    <label for="uname"><b>Tuổi</b></label>
                    <input type="text" placeholder="" name="age" required>
                </div>

                <div style="float: left;width: 100%;">
                    <label for="uname"><b>địa chỉ</b></label>
                    <input type="text" placeholder="" name="address" required>
                </div>
            </div>
            <div>
                <div style="float: left;width: 100%;margin-left: 0px">
                    <label for="uname"><b>Chức năng thợ</b></label>
                    <select name="group_workerID" id="">
                        @foreach($groupWorkers as $group)
                        <option  {{ old('group_workerID') == $group->id ? 'selected' : '' }} value="{{$group->id}}">{{$group->name_group}}</option>
                        @endforeach
                    </select>
                </div>


            </div>
            <div>
                <div style="float: left;width: 100%;margin-left: 0px">
                    <label for="uname"><b>Trạng thái</b></label>
                    <select name="status" id="">
                          <option value="1">đang làm</option>
                          <option value="2">đang chờ đơn</option>
                          <option value="3">xin nghỉ</option>
                    </select>
                </div>


            </div>
















        </div>
        <div class="container" style="background-color:#f1f1f1">

            <button type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 9%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;

           ">Thêm</button>
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="margin-left: 10px !important;">Thoát</button>

        </div>



    </form>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!-- edit -->
@foreach($workers as $worker)
<div id="{{$worker->id}}" class="modal">

    <form class="modal-content animate" action="./updateWorker/{{$worker->id}}" method="post">
        @csrf
        @method('put')
        <div class="imgcontainer">
            <span onclick="document.getElementById('{{$worker->id}}').style.display='none'" class="close" title="Close Modal">&times;</span>
            <h1 style="font-weight: bold">Sửa thông tin thợ</h1>
        </div>

        <div class="container">


            <div>
                <div style="float: left;width: 100%;">
                    <label for="uname"><b>Tên</b></label>
                    <input type="text" placeholder="" name="name" value="{{$worker->name}}" required>
                </div>

                <div style="float: left;width: 100%;">
                    <label for="uname"><b>Số điện thoại</b></label>
                    <input type="text" placeholder="" name="phone" value="{{$worker->phone}}" required>
                </div>
            </div>

            <div>
                <div style="float: left;width: 100%;">
                    <label for="uname"><b>Tuổi</b></label>
                    <input type="text" placeholder="" name="age" value="{{$worker->age}}" required>
                </div>

                <div style="float: left;width: 100%;">
                    <label for="uname"><b>địa chỉ</b></label>
                    <input type="text" placeholder="" name="address" value="{{$worker->address}}" required>
                </div>
            </div>

            <div>
                <div>
                    <div style="float: left;width: 100%;margin-left: 0px">
                        <label for="uname"><b>Chức năng thợ</b></label>
                        <select name="group_workerID" id="">
                            @foreach($groupWorkers as $group)
                            <option {{ $group->id == $worker->group_workerID ? 'selected' : '' }} value="{{$group->id}}">{{$group->name_group}}</option>
                            @endforeach
                        </select>
                    </div>


                </div>
                <div style="float: left;width: 44%;margin-left: 0px">
                    <label for="uname"><b>Trạng thái</b></label>
                    <select name="status" id="">
                        <option {{$worker->status == 1 ? 'selected' : '' }} value="1">đang làm</option>
                        <option {{$worker->status == 2 ? 'selected' : '' }} value="2">đang chờ đơn</option>
                        <option {{$worker->status == 3 ? 'selected' : '' }} value="3">xin nghỉ</option>
                    </select>
                </div>


            </div>







        </div>
        <div class="container" style="background-color:#f1f1f1">

            <button type="submit" style=" background-color: #04AA6D;
            color: white;
            width: 9%;
            height: 40px;
            border: none;
            cursor: pointer;
            border: 1px solid black;

           ">Lưu</button>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="margin-left: 10px !important;">Thoát</button>

        </div>


    </form>
</div>
@endforeach
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>




<script> // code Javascript edit
    const ipnElement = document.querySelector('#ipnPassword')
    const btnElement = document.querySelector('#btnPassword')

    // step 2
    btnElement.addEventListener('click', function() {
        // step 3
        const currentType = ipnElement.getAttribute('type')
        // step 4
        ipnElement.setAttribute(
            'type',
            currentType === 'password' ? 'text' : 'password'
        )
    })
</script>
@livewireScripts
</body>
</html>
