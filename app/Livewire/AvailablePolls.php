<?php

namespace App\Livewire;

use App\Models\Option;
use App\Models\Poll;
use Livewire\Component;

class AvailablePolls extends Component
{
    protected $listeners = [
        'pollCreated' => 'render'
    ];
    public function render()
    {
        $polls = Poll::where('deleted',false)->with('options.votes')->latest()->get();
        return view('livewire.available-polls', ['polls' => $polls]);
    }
    public function vote($optionId) {
        $option = Option::findOrFail($optionId);
        $option->votes()->create();
    }
    public function delete($pollId) {
        $poll = Poll::findOrFail($pollId);
        $poll->update([
            'deleted' => true
        ]);
    }
}
