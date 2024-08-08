<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\Appointments;
use Illuminate\Support\Facades\Auth;


class AcceptAppointment extends ModalComponent
{
    public Appointments $appointment;

    public function render()
    {
        $appointments = Appointments::where('user_id', Auth::id())
            ->where('booked', true)
            ->with('doctorName')
            ->get();

        return view('livewire.accept-appointment', ['appointments' => $appointments]);
    }
}
