<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\Appointments;

class AcceptAppointment extends ModalComponent
{
    public Appointments $appointment;
    public function render()
    {
        return view('livewire.accept-appointment');
    }
}
