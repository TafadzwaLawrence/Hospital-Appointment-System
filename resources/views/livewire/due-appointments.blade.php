<div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
    @foreach ($appointments as $appointment)
    <div class="max-w-md mx-auto mt-20 rounded-lg border border-gray-100 py-3 shadow-sm">
        <dl class="-my-3 divide-y divide-gray-100 text-sm">
            <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
                <dt class="font-medium text-gray-900">Patient Name</dt>
                <dd class="text-gray-700 col-span-2">{{ $appointment->first_name }}. {{ $appointment->last_name }}</dd>
            </div>

            <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
                <dt class="font-medium text-gray-900">Email</dt>
                <dd class="text-gray-700 col-span-2">{{ $appointment->email }}</dd>
            </div>

            <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
                <dt class="font-medium text-gray-900">Date of Birth</dt>
                <dd class="text-gray-700 col-span-2">{{ $appointment->date_of_birth }}</dd>
            </div>

            <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
                <dt class="font-medium text-gray-900">Phone</dt>
                <dd class="text-gray-700 col-span-2">{{ $appointment->phone }}</dd>
            </div>

            <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
                <dt class="font-medium text-gray-900">Address</dt>
                <dd class="text-gray-700 col-span-2">{{ $appointment->address }}</dd>
            </div>

            <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
                <dt class="font-medium text-gray-900">Emergency Contact</dt>
                <dd class="text-gray-700 col-span-2">{{ $appointment->emergency_contact }}</dd>
            </div>

            <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
                <dt class="font-medium text-gray-900">Reason of Visit</dt>
                <dd class="text-gray-700 col-span-2">{{ $appointment->reason_of_visit }}</dd>
            </div>

            <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
                <dt class="font-medium text-gray-900">Date of Appointment</dt>
                <dd class="text-gray-700 col-span-2">{{ $appointment->date_of_appointment }}</dd>
            </div>
        </dl>
    </div>
    @endforeach
</div>
