<?php

namespace App\Livewire;

use App\Models\Poll;
use Illuminate\Support\ValidatedInput;
use Livewire\Component;

class CreatePoll extends Component
{
    public $title = '';
    public $options = [''];
    public $success = '';
    public $error = '';

    protected $rules = [
        'title'     => 'required|min:3|max:255',
        'options'   => 'required|array|min:1|max:10',
        'options.*' => 'required|min:1|max:255'
    ];

    public function render()
    {
        return view('livewire.create-poll');
    }
    public function addOption()
    {
        $this->options[] = '';
    }
    public function removeOption($index)
    {
        unset($this->options[$index]);
        $this->options = array_values($this->options);
    }
    public function createPoll()
    {
        try {
            $this->validate();
            $poll = Poll::create([
                'title' => $this->title,
                'deleted' => false
            ]);
            foreach ($this->options as $option) {
                $poll->options()->create([
                    'name' => $option
                ]);
            }
            $this->reset(['title', 'options']);
            $this->error = '';
            $this->success = 'Poll created successfully!';
            $this->dispatch('pollCreated');
        } catch (\Exception $e) {
            $this->error = 'Fail to create the poll.';
            $this->success = '';
        }
    }


    // public function mount(){

    // }
}
