<?php

namespace App\Livewire;

use App\Models\StudentAdmissionInquiry;
use Livewire\Component;
use Livewire\Attributes\Validate;

class AdmissionInquiryForm extends Component
{
    #[Validate('required')]
    public $child_name = '';

    #[Validate('required')]
    public $child_dob = '';

    #[Validate('required')]
    public $parent_name = '';

    #[Validate('required')]
    public $parent_designation = '';

    #[Validate('required')]
    public $phone_number = '';

    #[Validate('required')]
    public $email = '';

    public function save()
    {
        StudentAdmissionInquiry::create(
            $this->validate()


        );

        sweetalert()->addSuccess('Admission Inquiry Form Has Been Send Successfully!');
        return $this->redirect('admission');
    }

    
    public function render()
    {
        return view('livewire.admission-inquiry-form');
    }
}