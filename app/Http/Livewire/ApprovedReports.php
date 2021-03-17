<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Report;
use Livewire\WithPagination;

class ApprovedReports extends Component
{
    use WithPagination;
    public $search = '';
    
    public function render()
    {
        return view('livewire.approved-reports', [
            'comments' => Report::search($this->search)
                        ->where('status','=','HOD approved')
                        ->orderBy('date','DESC')
                        ->Paginate(10)
        ]);
    }
}
