<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;

class Homefeed extends Component
{
    public $amount = 5;

    public function loadMore()
    {
        $this->amount += 5;
    }
    public function render()
    {
        $activeJobs = Job::where('status', 1)
            ->where('deadline', '>=', now()->startOfDay())
            ->take($this->amount)->latest()->get();
        return view('livewire.homefeed', compact('activeJobs'));
    }
}
