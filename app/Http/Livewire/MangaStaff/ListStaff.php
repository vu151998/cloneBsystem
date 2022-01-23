<?php

namespace App\Http\Livewire\MangaStaff;

use App\Models\Worker;
use Livewire\Component;
use Livewire\WithPagination;

class ListStaff extends Component
{
    public $searchTerm;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function updating(){
        $this->resetPage();
    }
    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $workers = Worker::where('name','like',$searchTerm)->orWhere('phone','like',$searchTerm)->paginate(5);
        return view('livewire.manga-staff.list-staff',['workers' => $workers]);
    }
}
