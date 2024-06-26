<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<div class="text-center m-24">
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
      <thead class="ltr:text-left rtl:text-right">
        <tr>
          <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Last Name</th>
          <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Date of Birth</th>
          <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Phone</th>
          <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Reason of Visit</th>
          <th class="px-4 py-2"></th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200">
        @foreach($data as $item)
        <tr>
          <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $item->first_name }}</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $item->date_of_birth }}</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $item->phone }}</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $item->reason_of_visit }}</td>
          <td class="whitespace-nowrap px-4 py-2">
            <button
                href="#"
                class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                onclick="Livewire.dispatch('openModal', { component: 'accept-appointment' })"
                >
                View
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


