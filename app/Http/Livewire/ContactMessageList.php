<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ContactMessage;

class ContactMessageList extends Component
{
    public $newMessageCount;
    public $todayMessageCount;
    public $totalMessageCount;

    public $contactMessages;

    public function render()
    {
        $this->contactMessages = ContactMessage::all();

        return view('livewire.contact-message-list');
    }
}
