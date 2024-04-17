<?php

namespace App\Livewire;

use App\Models\ContactUs;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactForm extends Component
{
   

    #[Validate('required')]
    public $name = '';

    #[Validate('required','email')]
    public $email = '';

    #[Validate('required','numeric')]
    public $phone_no = '';

    #[Validate('required')]
    public $message = '';

    public function save()
    {
        ContactUs::create(
            $this->validate()

        );

        sweetalert()->addSuccess('Contact Has Been Send Successfully!');
        return $this->redirect('contact-us');
    }

    
    public function render()
    {
        return view('livewire.contact-form');
    }
}