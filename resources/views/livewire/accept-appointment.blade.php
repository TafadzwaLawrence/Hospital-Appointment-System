<div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-4">
    @foreach ($appointments as $appointment)
    <div class="max-w-md mx-auto mt-20 rounded-lg border border-gray-100 py-3 shadow-sm">
      <dl class="gap-x-4 gap-y-3 text-sm">
        <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
          <dt class="font-medium text-gray-900">Accepted by</dt>
          <dd class="text-gray-700 sm:col-span-2">Dr. {{ $appointment->doctorName->name }}</dd>
        </div>
        <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
          <dt class="font-medium text-gray-900">Patient Name</dt>
          <dd class="text-gray-700 sm:col-span-2">{{ $appointment->first_name }}. {{ $appointment->last_name }}</dd>
        </div>
        <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
          <dt class="font-medium text-gray-900">Phone</dt>
          <dd class="text-gray-700 sm:col-span-2">{{ $appointment->phone }}</dd>
        </div>
        <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
          <dt class="font-medium text-gray-900">Date Set</dt>
          <dd class="text-gray-700 sm:col-span-2">{{ $appointment->date_of_appointment }}</dd>
        </div>
        <div class="grid grid-cols-3 gap-4 p-3 even:bg-gray-50">
          <dt class="font-medium text-gray-900">Reason of visit</dt>
          <dd class="text-gray-700 sm:col-span-2">{{ $appointment->reason_of_visit }}</dd>
        </div>
      </dl>
    </div>
    @endforeach
  </div>
