<div>
    @if(!empty($detailService))
        <div  style="border: 1px groove; padding:0% 1% ">
            <div class="form-group row" style="padding-left: 6%; margin-top: 1%">
                <label for="colFormLabel" class="col-sm-44 col-form-label">Tên dịch vụ:</label>
                <div class="col-sm-6">
                    <input type="text"   class="form-control" id="colFormLabel" wire:model.defer="name" placeholder="" >
                </div>
            </div>
             
            {{-- <h4>{{ $detailService->name }}</h4> --}}
                <div class="img">
                   @livewire('owners.services.upload-image', ['id' => $detailService->id])
                </div>
                <div class ="row">
                    <div class="col-6">
                        <div class="form-group row" style="padding-left: 6%">
                            {{-- <input type="hidden" class="form-control" id="colFormLabel" value="{{ $detailService->price }}" placeholder=""> --}}
                            <label for="colFormLabel" class="col-sm-44 col-form-label">Giá dịch vụ</label>
                            <div class="col-sm-5">
                                <input type="number"  class="form-control" id="colFormLabel"  wire:model.defer="price" placeholder="">
                            </div>
                            <label class="col-sm-44 col-form-label" >VNĐ</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row" style="padding-left: 6%">
                            <label for="colFormLabel" class="col-sm-44 col-form-label">Số điện thoại</label>
                            <div class="col-sm-6">
                                <input type="number"   wire:model.defer="phone" class="form-control" id="colFormLabel" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h5>Tiêu đề dịch vụ</h5>
                    <div class="content">
                        <div class="form-group">
                            <input type="text"   wire:model.defer="title" class="form-control" id="colFormLabel" placeholder="">
                        </div>
                    </div>
                </div>
                <div>
                    <h5>Mô tả dịch vụ</h5>
                    <div class="content">
                        <div class="form-group">
                            <textarea   wire:model.defer="description" class="form-control"   id="exampleFormControlTextarea1" rows="4">{{ $detailService->description }}</textarea>
                        </div>
                    </div>
                </div>
                
                <div style="text-align: right">
                    <button type="button" wire:click="updateService" class="btn btn-success">Cập nhật</button>
                </div>
        </div>
    @endif
</div>

