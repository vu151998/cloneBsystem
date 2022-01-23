<div class="container-fluid">
    {{-- {{ dd($listDateReveneu ) }} --}}
    @livewire('owners.overview.chart-revenue')
    <div wire:ignor.self>
        @livewire('owners.overview.left-chart')
    </div>
    
    
</div>

