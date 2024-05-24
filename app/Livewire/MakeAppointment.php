<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointments;

class MakeAppointment extends Component
{
    public $first_name = '';
    public $last_name = '';
    public $date_of_birth = '';
    public $phone = '';
    public $address = '';
    public $reason_of_visit = '';
    public $emergency_contact = '';
    public $email = '';

    public function save()
    {
        Appointments::create(
            $this->only([
                'first_name',
                'last_name',
                'date_of_birth',
                'phone',
                'address',
                'reason_of_visit',
                'emergency_contact',
                'email'
                ])
        );

        $this->resetInputFields();
        session()->flash('message', 'Post successfully updated.');


        return view('livewire.make-appointment');
    }

    private function resetInputFields()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->date_of_birth = '';
        $this->phone = '';
        $this->address = '';
        $this->reason_of_visit = '';
        $this->emergency_contact = '';
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.make-appointment');
    }
}
