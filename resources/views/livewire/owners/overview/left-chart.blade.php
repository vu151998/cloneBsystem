<div  class="container">
    <div class="col " style="border:  1px ">
        <div class="form-group row" style="margin-top: 1%" >
            <label class=" col-form-label" style="margin-left: 1%" >Top 10 </label>
            <div style="margin-left: 1%">
                <select wire:model="typeselect"  class="form-control input-lg " data-dependent="state" required>
                    <option value="goods">hàng hóa</option>
                    <option value="service">dịch vụ</option>
                </select>
            </div>
            <label class=" col-form-label" style="margin-left: 1%" > trong </label>
            <div style="margin-left: 1%">
                <select wire:model="dayofproduct"  class="form-control input-lg " data-dependent="state" required>
                    <option value="3">3 ngày qua</option>
                    <option value="7">7 ngày qua</option>
                    <option value="30">1 tháng qua</option>
                </select>
            </div>
            <label class=" col-form-label" style="margin-left: 1%" >Theo</label>
            <div style="margin-left: 1%">
                <select wire:model="typeofproduct"  class="form-control input-lg " data-dependent="state" required>
                    
                        <option value="quantity">số lượng</option>
                        
                        <option value="reverneu">doanh thu</option>
                </select>
            </div>
            {{-- @if($typeselect != 'goods')
                <label class=" col-form-label" style="margin-left: 1%" > lần đặt</label>
            @endif --}}
        </div>
        <canvas height="120px" id="leftChart"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            window.addEventListener('update-product', event => {
                MeSeChart.data.labels=  event.detail.listproduct;
                MeSeChart.data.datasets.forEach((dataset) => {
                    dataset.data=event.detail.countproduct;
                });
                MeSeChart.update();
            })
            const MeSeContext = document.getElementById("leftChart").getContext("2d");
            const MeSeChart = new Chart(MeSeContext, {
                    type: 'bar',
                    data: {
                        labels: {!! $lisname !!} , 
                    datasets: [{
                        label: "",
                        data: {!! $count !!} ,
                        backgroundColor: ["#669911", "#119966"],
                        hoverBackgroundColor: ["#66A2EB", "#FCCE56"]
                    }]
                    },
                    options: {
                        indexAxis: 'y',
                        scales: {
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
                });
        </script>
    </div>
</div>
