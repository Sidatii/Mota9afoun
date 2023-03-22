<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Mota9afoun</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
                <a href="/" class="flex mr-4">
                    <img src="{{asset('./images/mota9afoun.png')}}" class="mr-3 h-8" alt="FlowBite Logo"/>
                </a>
            </div>
            <nav class="items-center justify-center hidden space-x-5 text-gray-200 md:flex lg:space-x-8">
                <a href="/" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
                   class="relative inline-block px-1 text-base font-bold text-black uppercase transition duration-150 ease hover:text-gray-900">
                    <span class="block">Home</span>
                </a>
                <a href="/books" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
                   class="relative inline-block px-1 text-base font-bold text-black uppercase transition duration-150 ease hover:text-gray-900">
                    <span class="block">Books</span>
                </a>
                <a href="groups" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
                   class="relative inline-block px-1 text-base font-bold text-black uppercase transition duration-150 ease hover:text-gray-900">
                    <span class="block">Groups</span>
                </a>
                <a href="myspace" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
                   class="relative inline-block px-1 text-base font-bold text-black uppercase transition duration-150 ease hover:text-black">
                    <span class="block">My space</span>
                </a>

            </nav>
            <div class="flex items-center lg:order-2">

                <!-- Notifications -->
                <button type="button" data-dropdown-toggle="notification-dropdown"
                        class="p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                    <span class="sr-only">View notifications</span>
                    <!-- Bell icon -->
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div
                    class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700"
                    id="notification-dropdown">
                    <div
                        class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        Notifications
                    </div>
                    <div>
                        <a href="#"
                           class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                            <div class="flex-shrink-0">
                                <img class="w-11 h-11 rounded-full"
                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                     alt="Bonnie Green avatar">
                                <div
                                    class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 rounded-full border border-white bg-primary-700 dark:border-gray-700">
                                    <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                        <path
                                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">New message
                                    from <span class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span>:
                                    "Hey, what's up? All set for the presentation?"
                                </div>
                                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">a few moments
                                    ago
                                </div>
                            </div>
                        </a>


                    </div>
                    <a href="#"
                       class="block py-2 text-base font-normal text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-700 dark:text-white dark:hover:underline">
                        <div class="inline-flex items-center ">
                            <svg aria-hidden="true" class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                <path fill-rule="evenodd"
                                      d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            View all
                        </div>
                    </a>
                </div>
                <!-- Apps -->
                <button type="button" data-dropdown-toggle="apps-dropdown"
                        class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                    <span class="sr-only">View notifications</span>
                    <!-- Icon -->
                </button>
                <!-- Dropdown menu -->
                @auth
                    <div class="flex md:order-2 gap-2">
                        <div class="">
                            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                                 data-dropdown-placement="bottom-start"
                                 class="w-10 h-10 rounded-full cursor-pointer shadow-md" src="" alt="User dropdown">

                            <!-- Dropdown menu -->
                            <div id="userDropdown"
                                 class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                                <div class="py-3 px-4 text-sm text-gray-900 ">
                                    <div>{{auth()->user()->name}}</div>
                                </div>
                                <ul class="py-1 text-sm text-gray-700" aria-labelledby="avatarButton">

                                    <li>
                                        <a href="/books" class="py-2 px-4 hover:bg-gray-100 ">Manage</a>
                                    <li>
                                        <a href="#" class="py-2 px-4 hover:bg-gray-100 ">My readings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Settings</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <form method="POST" action="/logout">
                                        @csrf
                                        <button type="submit"
                                                class="block w-full text-left py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">
                                            Sign out
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>


                        @else
                            <div class="flex gap-4">
                                <a href="/login" x-data="{ hover: false }" @mouseenter="hover = true"
                                   @mouseleave="hover = false"
                                   class="relative inline-block px-0.5 text-base font-bold text-black uppercase transition duration-150 ease hover:text-gray-900">
                                    <span class="block">Login</span>
                                    <span
                                        class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                                </span>
                                </a>

                                <a href="/register" class="relative h-6 group">
                                    <span
                                        class="relative z-10 px-5 py-2 font-bold leading-tight text-black bg-white border-4 border-gray-900 rounded-lg group-hover:bg-yellow-100">Signup</span>
                                    <span class="absolute top-0 right-0 w-full h-10 -mr-1 bg-black rounded-lg"></span>
                                </a>
                            </div>

                        @endauth
                    </div>
    </nav>
</header>
{{-- Here we render our content/different pages --}}
{{$slot}}
<x-flash-message/>

{{--    <script src="//unpkg.com/alpinejs" defer></script>--}}
{{--    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>--}}
{{--    <script src="../users/to/flowbite/dist/flowbite.min.js"></script>--}}
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
