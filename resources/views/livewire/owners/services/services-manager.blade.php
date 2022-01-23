<div>
    <div class="row">
        <div class="col-12 col-lg-21 mb-3 search-bar">
            <div class="input-group rounded" >
                <input  wire:model="search" type="search" class="form-control rounded" placeholder="Tìm kiếm dịch vụ" />
            </div>
        </div>
    </div>
    <div  >
        <div class="row ">
            <div class="col-12">
                <div class="form-group row" >
                    <div style="margin-left: 1%">
                        <select wire:model="numberofServices"  class="form-control input-lg " data-dependent="state" required>
                            <option value="">Tất cả</option>
                            <option value="3">Top 3</option>
                            <option value="5">Top 5</option>
                            <option value="10">Top 10</option>
                        </select>
                    </div>
                    @if(!empty($numberofServices))
                        <label class=" col-form-label" style="margin-left: 1%" >dịch vụ được đặt nhiều nhất từ</label>
                        <div class="col-sm-2">
                            <input type="date" id="start" name="trip-start" class="form-control"
                                    value="2018-07-22">
                        </div>
                        <label class=" col-form-label" >đến</label>
                        <div class="col-sm-2">
                            <input type="date" id="end" name="trip-end" class="form-control"
                            value="2018-07-22">
                        </div>
                    @else
                        <label class=" col-form-label" style="margin-left: 1%" > dịch vụ </label>
                    @endif
                    
                    <div class="col-2 mb-3" style="float: left">
                        <a name="" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning"  role="button">Thêm dịch vụ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row detail-services">
        <div class=" col-6" >
            @livewire('owners.services.list-service')
        </div>
       
        <div class="col-6 ">
            @livewire('owners.services.detail-services')
        </div>
       
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Thêm mới dịch vụ</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @livewire('owners.services.add-service')
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Bỏ qua</button>
              <button type="button" class="btn btn-success">Thêm mới</button>
            </div>
          </div>
        </div>
      </div>
</div>

