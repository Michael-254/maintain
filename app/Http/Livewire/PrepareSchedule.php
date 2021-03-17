<?php

namespace App\Http\Livewire;

use App\Models\Machines;
use Livewire\WithPagination;

use Livewire\Component;

class PrepareSchedule extends Component
{

    use WithPagination;
    public $user;
    public $scheduleType;
    public $date;

    public function remove($commentId)
    {
        if ($this->scheduleType == 'Weekly') {
            $comment = Machines::find($commentId);
            $comment->update([
                'process_owner' => $this->user->id, 'date' => $this->date,
                "schedule_status" => 1, "type" => 'Weekly'
            ]);
            session()->flash('message', 'Machine successfully Scheduled 😁');
        } else {
            $comment = Machines::find($commentId);
            $comment->update([
                'process_owner' => $this->user->id,'date' => $this->date, "schedule_status" => 1, "type" => 'Daily'
            ]);
            session()->flash('message', 'Machine successfully Scheduled 😁');
        }
    }

    public function render()
    {
        return view('livewire.prepare-schedule', [
            'comments' => Machines::where([['schedule_status', '=', 0],['site', '=', $this->user->site]])
                ->orderBy('machine_name', 'asc')
                ->Paginate(10),
        ]);
    }
}
