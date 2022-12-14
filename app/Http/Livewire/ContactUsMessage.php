<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ContactMessage;

class ContactUsMessage extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function render()
    {
        return view('livewire.contact-us-message');
    }

    public function create()
    {
        $validatedData = $this->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'phone' => 'required',
            'message' => 'required',
        ]);

        ContactMessage::create($validatedData);

        dd ('Message sent!');
    }
}
