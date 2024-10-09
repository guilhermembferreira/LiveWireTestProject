<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class FormContact extends Component
{
    public $name, $email, $phone;

    public $error = "";
    public $success = "";

    public function new_contact()
    {
        // validação
        $this->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|min:5|max:50',
            'phone' => 'required|min:5|max:20',
        ]);

        // guardar na DB
        $result = Contact::firstOrCreate([
            'name' => $this->name,
            'email' => $this->email,
        ],
        [
            'phone' => $this->phone
        ]);

        // verificar se houve um erro
        if($result->wasRecentlyCreated){
            $this->reset();
            $this->success = "Contact created successfully!";
            $this->dispatch('contactAdded');
        } else {
            $this->error = "Error creating contact!";
        }

    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
