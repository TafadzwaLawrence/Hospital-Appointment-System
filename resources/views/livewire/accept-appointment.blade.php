<div class="max-w-md mx-auto mt-20">
    <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
        @foreach ($appointments as $appointment)
        <dl class="-my-3 divide-y divide-gray-100 text-sm">
            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">{{ $appointment->id }}</dt>
            <dd class="text-gray-700 sm:col-span-2">Mr</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Name</dt>
            <dd class="text-gray-700 sm:col-span-2">John Frusciante</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Occupation</dt>
            <dd class="text-gray-700 sm:col-span-2">Guitarist</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Salary</dt>
            <dd class="text-gray-700 sm:col-span-2">$1,000,000+</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Bio</dt>
            <dd class="text-gray-700 sm:col-span-2">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis explicabo
                doloremque impedit nesciunt dolorem facere, dolor quasi veritatis quia fugit aperiam
                aspernatur neque molestiae labore aliquam soluta architecto?
            </dd>
            </div>
        </dl>
        @endforeach

    </div>

</div>
