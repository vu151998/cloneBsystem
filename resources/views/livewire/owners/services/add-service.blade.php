<div>
    <div class="row">
        <div class="col-md-4 mb-3">
          <label for="firstName">Tên dịch vụ</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="lastName">Giá tiền</label>
          <input type="number" class="form-control" id="lastName" placeholder="" value="" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="lastName">Số điện thoại</label>
            <div class="form-group">
                <input type="number" class="form-control" id="lastName" placeholder="" value="0969955709" required>
                <label for="lastName">VNĐ</label>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="lastName">Tiêu đề dịch vụ </label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            </div>
            <h5>Mô tả dịch vụ</h5>
            <div class="content">
                <div class="form-group">
                    <textarea  value="" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
            </div>
        </div>
        <div class="col-6">
            @livewire('owners.services.upload-image',['id' => '-1'])
        </div>
    </div>
</div>
