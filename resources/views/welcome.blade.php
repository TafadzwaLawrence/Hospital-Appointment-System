<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <!-- Styles -->

    </head>
    <body class="font-sans antialiased">
        <div class="bg-indigo-600 px-4 py-3 text-white">
            <p class="text-center text-sm font-medium">
              Appointment System now Up
              <a href="{{ route('register') }}" class="inline-block underline">Register!</a>
            </p>
          </div>
        <div class="bg-gray-50 text-black/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            {{-- <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg> --}}
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="">
                        <section class="bg-gray-50 text-white">
                            <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
                              <div class="mx-auto max-w-3xl text-center">
                                <h1
                                  class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl"
                                >
                                  Eden Hospital Ruwa.

                                  <span class="sm:block"> Appointment System. </span>
                                </h1>

                                <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed text-blue-600">
                                Easy tracking and streamless appointment scheduling and administration
                                </p>

                                <div class="mt-8 flex flex-wrap justify-center gap-4">
                                  <a
                                    class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
                                    href="{{ route('register') }}"
                                  >
                                    Get Started
                                  </a>

                                  <a
                                    class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-blue-600 hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto hover:text-white"
                                    href="#"
                                  >
                                    Learn More
                                  </a>
                                </div>
                              </div>
                            </div>
                          </section>

                        <span class="mt-6 relative flex justify-center">
                            <div
                            class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"
                            ></div>

                            <span class="relative z-10 bg-white px-6">Pricing and Plans</span>
                        </span>

                        <div class="mx-auto max-w-3xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:items-center md:gap-8">
                              <div
                                class="rounded-2xl border border-indigo-600 p-6 shadow-sm ring-1 ring-indigo-600 sm:order-last sm:px-8 lg:p-12"
                              >
                                <div class="text-center">
                                  <h2 class="text-lg font-medium text-gray-900">
                                    Pro
                                    <span class="sr-only">Plan</span>
                                  </h2>

                                  <p class="mt-2 sm:mt-4">
                                    <strong class="text-3xl font-bold text-gray-900 sm:text-4xl"> 30$ </strong>

                                    <span class="text-sm font-medium text-gray-700">/month</span>
                                  </p>
                                </div>

                                <ul class="mt-6 space-y-2">
                                  <li class="flex items-center gap-1">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="size-5 text-indigo-700"
                                    >
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>

                                    <span class="text-gray-700"> Scanning </span>
                                  </li>

                                  <li class="flex items-center gap-1">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="size-5 text-indigo-700"
                                    >
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>

                                    <span class="text-gray-700"> Medication </span>
                                  </li>

                                  <li class="flex items-center gap-1">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="size-5 text-indigo-700"
                                    >
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>

                                    <span class="text-gray-700"> Email support </span>
                                  </li>

                                  <li class="flex items-center gap-1">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="size-5 text-indigo-700"
                                    >
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>

                                    <span class="text-gray-700"> Help center access </span>
                                  </li>

                                  <li class="flex items-center gap-1">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="size-5 text-indigo-700"
                                    >
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>

                                    <span class="text-gray-700"> Phone support </span>
                                  </li>

                                  <li class="flex items-center gap-1">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="size-5 text-indigo-700"
                                    >
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>

                                    <span class="text-gray-700"> Community access </span>
                                  </li>
                                </ul>

                                <a
                                  href="#"
                                  class="mt-8 block rounded-full border border-indigo-600 bg-indigo-600 px-12 py-3 text-center text-sm font-medium text-white hover:bg-indigo-700 hover:ring-1 hover:ring-indigo-700 focus:outline-none focus:ring active:text-indigo-500"
                                >
                                  Get Started
                                </a>
                              </div>

                              <div class="rounded-2xl border border-gray-200 p-6 shadow-sm sm:px-8 lg:p-12">
                                <div class="text-center">
                                  <h2 class="text-lg font-medium text-gray-900">
                                    Consultation
                                    <span class="sr-only">Plan</span>
                                  </h2>

                                  <p class="mt-2 sm:mt-4">
                                    <strong class="text-3xl font-bold text-gray-900 sm:text-4xl"> 20$ </strong>
                                  </p>
                                </div>

                                <ul class="mt-6 space-y-2">
                                  <li class="flex items-center gap-1">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="size-5 text-indigo-700"
                                    >
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>

                                    <span class="text-gray-700"> Appointment Reminder </span>
                                  </li>

                                  <li class="flex items-center gap-1">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="size-5 text-indigo-700"
                                    >
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>

                                    <span class="text-gray-700"> 1 hr accessment </span>
                                  </li>

                                  <li class="flex items-center gap-1">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="size-5 text-indigo-700"
                                    >
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>

                                    <span class="text-gray-700"> Email support </span>
                                  </li>

                                  <li class="flex items-center gap-1">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="size-5 text-indigo-700"
                                    >
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>

                                    <span class="text-gray-700"> Help center access </span>
                                  </li>
                                </ul>

                                <a
                                  href="#"
                                  class="mt-8 block rounded-full border border-indigo-600 bg-white px-12 py-3 text-center text-sm font-medium text-indigo-600 hover:ring-1 hover:ring-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                                >
                                  Get Started
                                </a>
                              </div>
                            </div>
                          </div>

                          <span class="mt-6 relative flex justify-center">
                            <div
                            class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"
                            ></div>

                            <span class="relative z-10 bg-white px-6">Frequently asked questions</span>
                        </span>
                            <div class=" mt-6 space-y-4 justify-center max-w-lg mx-auto">
                                <details
                                class="group border-s-4 border-indigo-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
                                open
                                >
                                <summary class="flex cursor-pointer items-center justify-between gap-1.5">
                                    <h2 class="text-lg font-medium text-gray-900">
                                    How do i set up an appointment?
                                    </h2>

                                    <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="size-5 shrink-0 transition duration-300 group-open:-rotate-45"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                        fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        clip-rule="evenodd"
                                        />
                                    </svg>
                                    </span>
                                </summary>

                                <p class="mt-4 leading-relaxed text-gray-700">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in,
                                    recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo
                                    consequuntur distinctio corporis earum similique!
                                </p>
                                </details>

                                <details
                                class="group border-s-4 border-indigo-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
                                >
                                <summary class="flex cursor-pointer items-center justify-between gap-1.5">
                                    <h2 class="text-lg font-medium text-gray-900">
                                    How do check when my appointment is?
                                    </h2>

                                    <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="size-5 shrink-0 transition duration-300 group-open:-rotate-45"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                        fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        clip-rule="evenodd"
                                        />
                                    </svg>
                                    </span>
                                </summary>

                                <p class="mt-4 leading-relaxed text-gray-700">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in,
                                    recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo
                                    consequuntur distinctio corporis earum similique!
                                </p>
                                </details>
                            </div>

                            <span class="mt-6 relative flex justify-center">
                                <div
                                class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"
                                ></div>

                                <span class="relative z-10 bg-white px-6">Trusted</span>
                            </span>

                            <section class="mt-6">
                                <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
                                  <div class="mx-auto max-w-3xl text-center">
                                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Trusted by eCommerce Businesses</h2>

                                    <p class="mt-4 text-gray-500 sm:text-xl">
                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolores laborum labore
                                      provident impedit esse recusandae facere libero harum sequi.
                                    </p>
                                  </div>

                                  <div class="mt-8 sm:mt-12">
                                    <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                                      <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                                        <dt class="order-last text-lg font-medium text-gray-500">Total Sales</dt>

                                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">$4.8m</dd>
                                      </div>

                                      <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                                        <dt class="order-last text-lg font-medium text-gray-500">Official Addons</dt>

                                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">24</dd>
                                      </div>

                                      <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                                        <dt class="order-last text-lg font-medium text-gray-500">Total Addons</dt>

                                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86</dd>
                                      </div>
                                    </dl>
                                  </div>
                                </div>
                              </section>
                    </main>

                        <footer class="">
                            <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
                            <div class="flex justify-center text-teal-600">

                            </div>

                            <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt consequuntur amet culpa cum
                                itaque neque.
                            </p>

                            <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
                                <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> About </a>
                                </li>

                                <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Careers </a>
                                </li>

                                <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> History </a>
                                </li>

                                <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Services </a>
                                </li>

                                <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Projects </a>
                                </li>

                                <li>
                                <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Blog </a>
                                </li>
                            </ul>

                            <ul class="mt-12 flex justify-center gap-6 md:gap-8">
                                <li>
                                <a
                                    href="#"
                                    rel="noreferrer"
                                    target="_blank"
                                    class="text-gray-700 transition hover:text-gray-700/75"
                                >
                                    <span class="sr-only">Facebook</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd"
                                    />
                                    </svg>
                                </a>
                                </li>

                                <li>
                                <a
                                    href="#"
                                    rel="noreferrer"
                                    target="_blank"
                                    class="text-gray-700 transition hover:text-gray-700/75"
                                >
                                    <span class="sr-only">Instagram</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd"
                                    />
                                    </svg>
                                </a>
                                </li>

                                <li>
                                <a
                                    href="#"
                                    rel="noreferrer"
                                    target="_blank"
                                    class="text-gray-700 transition hover:text-gray-700/75"
                                >
                                    <span class="sr-only">Twitter</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                                    />
                                    </svg>
                                </a>
                                </li>

                            </ul>
                            </div>
                        </footer>
                </div>
            </div>
        </div>
    </body>
</html>
