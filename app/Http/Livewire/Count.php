<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Count extends Component
{   

    /**
     * @var int $counter
     */
    public $counter = 0;
    

    /**
     * increment counter $counter
     */

    public function increment()
    {
        $this->counter++;
    }



    /**
     * decrement counter $counter
     */
    public function decrement()
    {
        $this->counter--;
    }
    
    /**
     * reset counter $counter
     */
    public function reset(...$properties)
    {
        $this->counter = 0;
        parent::reset(...$properties);
    }

    public function render()
    {
        return view('livewire.count');
    }
}