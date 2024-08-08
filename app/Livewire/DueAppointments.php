<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointments;

class DueAppointments extends Component
{
    public $appointments;

    public function mount()
    {
        $now = now();
        $this->appointments = Appointments::where('date_of_appointment', '<', $now)->get();
    }

    public function render()
    {
        return view('livewire.due-appointments', ['appointments' => $this->appointments]);
    }
}
