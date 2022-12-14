<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactMessageComponent extends Component
{
    public $modes = [
        'create' => false, 
        'list' => true, 
        'update' => false, 
        'delete' => false, 
    ];

    public function render()
    {
        return view('livewire.contact-message-component');
    }
}
