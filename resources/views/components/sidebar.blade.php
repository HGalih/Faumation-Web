<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Faumation</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="icon" href="{{ asset('img/favicon.ico?v=2') }}" type="image/ico" />

    <title>Faumation</title>
</head>
<body class="bg-gray-800">
  @php
  $activePage = request()->segment(count(request()->segments()))
  @endphp
    <!-- This example requires Tailwind CSS v2.0+ -->
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
            <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
            <div class="fixed inset-0 bg-gray-900 bg-opacity-75" aria-hidden="true"></div>

            <!--
      Off-canvas menu, show/hide based on off-canvas menu state.

      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
            <div class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800">
                <!--
        Close button, show/hide based on off-canvas menu state.

        Entering: "ease-in-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button"
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <div class="flex-shrink-0 flex items-center px-4">
                        <img class="h-8 w-auto" src="{{ asset('img/logo.png') }}" alt="Workflow">
                    </div>
                    <nav class="mt-5 px-2 space-y-1">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('kontrol') }}"
                            class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!--
              Heroicon name: outline/home

              Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
            -->
                            <svg class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6" width="18" height="18"
                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 3V1M9 3C7.89543 3 7 3.89543 7 5C7 6.10457 7.89543 7 9 7M9 3C10.1046 3 11 3.89543 11 5C11 6.10457 10.1046 7 9 7M3 15C4.10457 15 5 14.1046 5 13C5 11.8954 4.10457 11 3 11M3 15C1.89543 15 1 14.1046 1 13C1 11.8954 1.89543 11 3 11M3 15V17M3 11V1M9 7V17M15 15C16.1046 15 17 14.1046 17 13C17 11.8954 16.1046 11 15 11M15 15C13.8954 15 13 14.1046 13 13C13 11.8954 13.8954 11 15 11M15 15V17M15 11V1"
                                    stroke="#A5B4FC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>


                            Kontrol
                        </a>

                        <a href="{{ route('dashboard') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/users -->
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 19V13C9 11.8954 8.10457 11 7 11H5C3.89543 11 3 11.8954 3 13V19C3 20.1046 3.89543 21 5 21H7C8.10457 21 9 20.1046 9 19ZM9 19V9C9 7.89543 9.89543 7 11 7H13C14.1046 7 15 7.89543 15 9V19M9 19C9 20.1046 9.89543 21 11 21H13C14.1046 21 15 20.1046 15 19M15 19V5C15 3.89543 15.8954 3 17 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H17C15.8954 21 15 20.1046 15 19Z" stroke="#A5B4FC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>Riwayat
                        </a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/folder -->
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Profil
                        </a>

                        <a href="{{ route('tentang') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/calendar -->
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Tentang
                        </a>
                    </nav>
                </div>

            </div>

            <div class="flex-shrink-0 w-14">
                <!-- Force sidebar to shrink to fit close icon -->
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex-1 flex flex-col min-h-0 bg-indigo-700">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <img class="h-8 w-auto" src="{{ asset('img/logo.png') }}" alt="Workflow">
                    </div>
                    <nav class="mt-5 flex-1 px-2 space-y-1">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('kontrol') }}"
                            class="  text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md <?= $activePage == '' ? 'bg-indigo-800' : '' ?>">
                            <!--
              Heroicon name: outline/home

              Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
            -->
                            <svg class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" width="18" height="18"
                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 3V1M9 3C7.89543 3 7 3.89543 7 5C7 6.10457 7.89543 7 9 7M9 3C10.1046 3 11 3.89543 11 5C11 6.10457 10.1046 7 9 7M3 15C4.10457 15 5 14.1046 5 13C5 11.8954 4.10457 11 3 11M3 15C1.89543 15 1 14.1046 1 13C1 11.8954 1.89543 11 3 11M3 15V17M3 11V1M9 7V17M15 15C16.1046 15 17 14.1046 17 13C17 11.8954 16.1046 11 15 11M15 15C13.8954 15 13 14.1046 13 13C13 11.8954 13.8954 11 15 11M15 15V17M15 11V1"
                                    stroke="#A5B4FC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>


                            Kontrol
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="text-gray-300 hover:bg-gray-700 <?= $activePage == 'dashboard' ? 'bg-indigo-800' : '' ?> hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/users -->
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 19V13C9 11.8954 8.10457 11 7 11H5C3.89543 11 3 11.8954 3 13V19C3 20.1046 3.89543 21 5 21H7C8.10457 21 9 20.1046 9 19ZM9 19V9C9 7.89543 9.89543 7 11 7H13C14.1046 7 15 7.89543 15 9V19M9 19C9 20.1046 9.89543 21 11 21H13C14.1046 21 15 20.1046 15 19M15 19V5C15 3.89543 15.8954 3 17 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H17C15.8954 21 15 20.1046 15 19Z" stroke="#A5B4FC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>Riwayat
                        </a>

                        <a href="{{ route('profile.show') }}"
                            class="<?= $activePage == 'profile' ? 'bg-indigo-800' : '' ?> text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/folder -->
                            <svg  class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 5C12 7.20914 10.2091 9 8 9C5.79086 9 4 7.20914 4 5C4 2.79086 5.79086 1 8 1C10.2091 1 12 2.79086 12 5Z" stroke="#A5B4FC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 12C4.13401 12 1 15.134 1 19H15C15 15.134 11.866 12 8 12Z" stroke="#A5B4FC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                            
                            Profil
                        </a>

                        <a href="{{ route('tentang') }}"
                            class="<?= $activePage == 'tentang' ? 'bg-indigo-800' : '' ?> text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/calendar -->
                            
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14 10C14 7.79086 12.2091 6 10 6C7.79086 6 6 7.79086 6 10C6 12.2091 7.79086 14 10 14C12.2091 14 14 12.2091 14 10ZM14 10V11.5C14 12.8807 15.1193 14 16.5 14C17.8807 14 19 12.8807 19 11.5V10C19 5.02944 14.9706 1 10 1C5.02944 1 1 5.02944 1 10C1 14.9706 5.02944 19 10 19M14.5 17.7942C13.0801 18.614 11.5296 19.0029 9.99996 19.0015" stroke="#A5B4FC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                            
                            Tentang
                        </a>
                        


                    </nav>
                </div>

            </div>
        </div>
        <div class="md:pl-64 flex flex-col flex-1">
            <div class="sticky top-0 z-10 md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3 bg-gray-100">
                <button type="button"
                    class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <main class="flex-1 ">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h1 class="text-2xl font-semibold text-white">{{ $heading }}</h1>
                        <p class="mt-1 max-w-2xl text-sm text-indigo-300">{{ $subheading }}</p>
                    </div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <!-- Replace with your content -->
                        <div class="py-4">
                            <div class="text-white rounded-lg h-96">
                                {{ $content }}
                            </div>
                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
@livewireScripts