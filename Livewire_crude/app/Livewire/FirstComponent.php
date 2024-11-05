<?php

namespace App\Livewire;

use Livewire\Component;

class FirstComponent extends Component
{
    public $Count = 0;

    public function down(){
        $this->Count--;
    }

    public function up(){
        $this->Count++;
    }
    public function render()
    {
        return view('livewire.first-component');
    }
}
