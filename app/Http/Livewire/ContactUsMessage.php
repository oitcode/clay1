<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactUsMessage extends Component
{
    public function render()
    {
        return view('livewire.contact-us-message');
    }

    public function woof()
    {
        dd ('Woof woof');
    }
}
