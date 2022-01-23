<div >
    <div class="header-overview row container-fluid">
        <div class="col-3 " >
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;text-align: center;">
                <div class="card-header bg-secondary" style="height: 75px">Số Đơn Hàng Bị Hủy</div>
                <div class="card-body bg-warning" style="text-align: center">
                  <h5 class="card-title">12</h5>
                </div>
              </div>
        </div>
        <div class="col-3 " >
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;text-align: center;">
                <div class="card-header bg-secondary" style="height: 75px">Số đơn hàng trong ngày</div>
                <div class="card-body bg-warning" style="text-align: center">
                  <h5 class="card-title">{{ DB::table('bills')->where('updated_at', new DateTime())->count(); }}</h5>
                </div>
              </div>
        </div>
        <div class="col-3 " >
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;text-align: center;">
                <div class="card-header bg-secondary" style="height: 75px">Số đơn hàng bị đổi trả trong ngày</div>
                <div class="card-body bg-warning" style="text-align: center">
                  <h5 class="card-title">12</h5>
                </div>
              </div>
        </div>
        <div class="col-3 " >
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;text-align: center;">
                <div class="card-header bg-secondary" style="height: 75px">Số lượng sản phẩm cần nhập</div>
                <div class="card-body bg-warning" style="text-align: center">
                  <h5 class="card-title">12</h5>
                </div>
              </div>
        </div>
    </div>
    <div >
        @livewire('owners.overview.revenue')
    </div>
</div>
