<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Message extends Component
{

     /**
      * @var $message;
      */
      public $message;
      
    public function render()
    {
        return view('livewire.message');
    }
}