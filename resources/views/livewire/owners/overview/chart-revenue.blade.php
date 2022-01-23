<div >
    <div class="form-group row">
            <label class=" col-form-label" style="margin-left: 1%" >Doanh thu :</label>
            <div style="margin-left: 1%">
                <select wire:model="selectReveneu"  class="form-control input-lg " data-dependent="state" required>
                    <option value="3">3 ngày qua</option>
                    <option value="7">7 ngày qua</option>
                    <option value="30">1 tháng qua</option>
                </select>
            </div>
        </div>
        <canvas wire:ignore id="myChart" width="300" height="100"></canvas>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        window.addEventListener('name-updated', event => {
            myChart.data.labels=  event.detail.datecount;
            myChart.data.datasets.forEach((dataset) => {
                dataset.data=event.detail.data;
            });
            myChart.update();
        })
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! $listDateReveneu !!} ,
                datasets: [{
                    label: 'Tổng doanh thu',
                    data: {!! $listReveneu !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</div>
