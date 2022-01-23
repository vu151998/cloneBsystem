<div class="container" style="padding-top: 1%">
    {{-- @if(!empty($detailService)) --}}
        <div  style="border: 1px groove; padding:0% 1%;background: #FFFFF0">
            <div class="row" style=" margin-top: 1%">
                <div class="col-6 form-group row" style="padding-right: 0">
                    <label for="colFormLabel" class="col-sm-5 col-form-label">Mã giảm giá:</label>
                    <div class="col-sm-6">
                        <input type="text"   class="form-control" id="colFormLabel" wire:model.defer="detailDiscount.coupon_code" placeholder="" >
                    </div>
                </div>
                
                <div class="form-group  col-6" style="padding-right: 0" >
                    <div class ="row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Giảm giá</label>
                        <div class="">
                            <input type="number" wire:model.defer="detailDiscount.discount_amount" class="form-control" min="0" max="100" id="colFormLabel"    placeholder="">
                        </div>
                        <label class="col-sm-44 col-form-label" >%</label>
                    </div>
                </div>
                
            </div>
            <div>
                <h5>Nội dung</h5>
                <div class="content">
                    <div class="form-group">
                        <textarea wire:model.defer="detailDiscount.discount_type"   class="form-control"   id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                </div>
            </div>
            
                <div class="d-flex justify-content-between  mb-3">
                    <div class="p-2 ">
                        <div>
                            <div class="form-group row" >
                                <label class=" col-form-label" style="margin-left: 1%" >Ngày hết hạn</label>
                                <div class="col-sm-8">
                                    <input type="date" wire:model.defer="date"  class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($iddiscount !=-1)
                        <div class="p-2">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="p-2 ">
                                    <button type="button" wire:click="deleteDiscount" class="btn btn-danger">Xóa mã giảm giá</button>
                                </div>
                                <div class="p-2 ">
                                    <button type="button" wire:click="updateDiscount" class="btn btn-success">Cập nhật mã giảm giá</button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            
        </div>
    {{-- @endif --}}
</div>

