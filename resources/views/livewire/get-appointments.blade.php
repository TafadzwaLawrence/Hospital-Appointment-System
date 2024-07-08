<div class="text-center m-24">
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead class="ltr:text-left rtl:text-right">
            <tr>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"></th>
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
                <td class="whitespace-nowrap px-4 py-2">
                    <span class="inline-block rounded-full w-4 h-4" style="background-color: {{ $item->booked ? 'green' : 'red' }};"></span>
            </td>
            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $item->first_name }}</td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $item->date_of_birth }}</td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $item->phone }}</td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $item->reason_of_visit }}</td>
            <td class="whitespace-nowrap px-4 py-2">
                <button
                    href="#"
                    class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                    onclick="populateModal({{ $item->id }}, '{{ $item->first_name }}', '{{ $item->phone }}', '{{ $item->date_of_birth }}', '{{ $item->reason_of_visit }}'); document.getElementById('modal').classList.remove('hidden'); document.querySelector('#modal > div').classList.remove('hidden')"
                >
                    View
                </button>
                            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- modal --}}
    <div id="modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity hidden" aria-hidden="true">
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    </div>
                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Patient</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500" id="patient-name">Name:</p>
                        </div>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500" id="patient-phone">Phone:</p>
                        </div>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500" id="patient-dob">Date of Birth:</p>
                        </div>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500" id="patient-reason">Reason for illness:</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <form action="" id="accept-form" method="post">
                        @csrf
                        <button
                        id="accept-btn"
                            type="submit" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:ml-3 sm:w-auto">
                                Accept
                        </button>
                    </form>

                    <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                        onclick="document.getElementById('modal').classList.add('hidden'); document.querySelector('#modal > div').classList.add('hidden')"
                    >
                        Cancel
                </button>
                </div>
            </div>
        </div>
    </div>

    </div>
    {{-- end of modal --}}
</div>

<script>
    function populateModal(id, firstName, phone, dob, reason) {
        document.getElementById('accept-form').action = "/accept/" + id + "/appointment";
        document.getElementById('patient-name').innerHTML = `Name: ${firstName}`;
        document.getElementById('patient-phone').innerHTML = `Phone: ${phone}`;
        document.getElementById('patient-dob').innerHTML = `Date of Birth: ${dob}`;
        document.getElementById('patient-reason').innerHTML = `Reason for illness: ${reason}`;
    }
</script>


<script>
    const form = document.getElementById('accept-form');

    form.addEventListener('submit', () => {
        const acceptBtn = document.getElementById('accept-btn');
        acceptBtn.disabled = true;
        acceptBtn.innerHTML = `
            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12H4zm2 5.291A7.962 7.962 0 014 19.708a7.962 7.962 0 0114.708 0 1.992 1.992 0 012.121.691z"></path>
            </svg>
            Loading...
        `;

        // Add toast notification
    });
</script>
