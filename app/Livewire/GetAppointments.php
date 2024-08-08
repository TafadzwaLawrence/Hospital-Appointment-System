<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointments;

class GetAppointments extends Component
{
    public $data;

    public function mount()
    {
        $this->data = Appointments::select(
            'id',
            'first_name',
            'last_name',
            'date_of_birth',
            'phone',
            'address',
            'reason_of_visit',
            'emergency_contact',
            'doctor',
            'booked',
            'email'
            )->where('booked', false)->get();
    }
    public function render()
    {
        return view('livewire.get-appointments');
    }
}
