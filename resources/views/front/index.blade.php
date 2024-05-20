<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sky: '#007bff',
                        cyan: colors.cyan,
                    },
                    rotate: {
                        '-25': '-25deg'
                    },
                    margin: {
                        '26': '6.5rem'
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @tailwind base;
        @tailwind components;
        @tailwind utilities;

        @layer utilities {
            .flying-img {
                position: absolute;
                animation: fly_to_cart 1s ease-in-out;
            }

            @keyframes fly_to_cart {
                0% {
                    left: 0;
                    top: 0;
                }

                45%,
                50% {
                    left: var(--left);
                    top: 60px;
                }

                80%,
                90% {
                    left: var(--left);
                    top: var(--top);
                    transform: scale(.2);
                }

                100% {
                    left: calc(var(--left) + 40px);
                    top: var(--top);
                    transform: scale(.2);
                }
            }

            .shopping-cart.active {
               background-color: #bae6fd;
               
            }
        }
    </style>
</head>

<body>
    <header
        class='nav1 flex bg-black  border-b py-2 sm:px-8 px-6 font-[sans-serif] min-h-[30px] tracking-wide top-0 left-0 z-50 w-full'>
        <div class='flex flex-wrap items-center lg:gap-y-2 gap-4 w-full'>


            <div id="collapseMenu"
                class='lg:ml-10 max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex lg:gap-x-3 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                                class='w-36' />
                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='text-gray-400 hover:text-gray-200 text-[12px] block font-semibold text-decoration-none'><i
                                class="fa-solid fa-phone"></i> +44 7415322654 <br> <span></span> </a></li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='text-gray-400 hover:text-gray-200 text-[12px] block font-semibold text-decoration-none'><i
                                class="fa-solid fa-headset"></i> support 24/7</a></li>

                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='text-gray-400 hover:text-gray-200 text-[12px] block font-semibold text-decoration-none'><i
                                class="fa-solid fa-location-dot"></i> 85 Great Portland Street London W1W 7LT United
                            Kingdom</a></li>

                </ul>
            </div>

            <div class="flex gap-x-6 gap-y-4 ml-auto">
                <div class='flex items-center space-x-8'>
                    <!-- Dropdown menu -->
                    <button id="dropdownHoverButton" data-dropdown-toggle="lang" data-dropdown-trigger="hover"
                        class="text-white focus:outline-none font-medium rounded-lg text-[9px] px-3 py-1 text-center inline-flex items-center"
                        type="button">
                        @if (app()->getLocale() == 'en')
                            @lang('front.en') <img src="{{ asset('front/img/eng.png') }}" class="w-3 ml-2" alt="">
                            
                        @elseif (app()->getLocale() == 'fr')
                            @lang('front.fr') <img src="{{ asset('front/img/fr.png') }}" class="w-3 ml-2" alt="">
                            
                        @else
                            @lang('front.ar') <img src="{{ asset('front/img/ar.png') }}" class="w-3 ml-2" alt="">
                        @endif

                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <div id="lang"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="{{url('lang/en') }}"
                                    class="flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">@lang('front.en')
                                    <img src="{{ asset('front/img/eng.png') }}" class="w-5 ml-2" alt=""></a>
                            </li>
                            <li>
                                <a href="{{url('lang/fr') }}"
                                    class="flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">@lang('front.fr')
                                    <img src="{{ asset('front/img/fr.png') }}" class="w-5 ml-2" alt=""></a>
                            </li>
                            <li>
                                <a href="{{url('lang/ar') }}"
                                    class="flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">@lang('front.ar')
                                    <img src="{{ asset('front/img/ar.png') }}" class="w-5 ml-2" alt=""></a>
                            </li>
                        </ul>
                    </div>

                    <!-- Dropdown menu -->
                    <button id="dropdownHoverButton" data-dropdown-toggle="currency" data-dropdown-trigger="hover"
                        class="text-white focus:outline-none  font-medium rounded-lg text-[9px] px-3 py-1 text-center inline-flex items-center"
                        type="button"> $ <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <div id="currency"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">

                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            
                            <li>
                                <a href="#"
                                    class="flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">$</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">€</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">MAD</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header
        class='nav2 flex bg-white border-b py-4 sm:px-8 px-6 font-[sans-serif] min-h-[80px] tracking-wide top-0 left-0 z-50 w-full bg-[url("{{ asset('img/SkayNav.jpg') }}")]'>
        <div class='flex flex-wrap items-center lg:gap-y-2 gap-4 w-full'>
            <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                    class='w-36' />
            </a>

            <div id="collapseMenu"
                class='lg:ml-10 max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex lg:gap-x-3 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg"
                                alt="logo" class='w-36' />
                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='text-[#007bff] hover:text-[#007bff] text-[15px] block font-semibold'>New</a></li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='text-[#333] hover:text-[#007bff] text-[15px] block font-semibold'>Men</a></li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='text-[#333] hover:text-[#007bff] text-[15px] block font-semibold'>Women</a></li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='text-[#333] hover:text-[#007bff] text-[15px] block font-semibold'>Kids</a></li>
                </ul>
            </div>



            <div class="flex gap-x-6 gap-y-4 ml-auto">
                <div
                    class='flex border-2 focus-within:border-gray-400 rounded-full px-6 py-3 overflow-hidden max-w-52 max-lg:hidden'>
                    <input type='text' placeholder='Search something...'
                        class='w-full text-sm bg-transparent outline-none pr-2' />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"
                        class="cursor-pointer fill-gray-600">
                        <path
                            d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                        </path>
                    </svg>
                </div>

                <div class='flex items-center space-x-8'>
                    <span class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                            class="cursor-pointer fill-[#333] inline" viewBox="0 0 64 64">
                            <path
                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                data-original="#000000" />
                        </svg>
                        <span
                            class="absolute left-auto -ml-1 top-0 rounded-full bg-red-500 px-1 py-0 text-xs text-white">0</span>
                    </span>

                    <span class="relative shopping-cart rounded-full px-3 py-2" data-product-count="0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                            class="cursor-pointer fill-[#333] inline" viewBox="0 0 512 512">
                            <path
                                d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0"
                                data-original="#000000"></path>
                        </svg>
                        <span
                            class="cartCount absolute left-auto -ml-1 top-0 rounded-full bg-red-500 px-1 py-0 text-xs text-white">0</span>
                    </span>
                    <button
                        class='px-5 py-2 text-sm rounded-full text-white border-2 border-[#007bff] bg-[#007bff] hover:bg-[#004bff]'>Sign
                        In</button>

                    <button id="toggleOpen" class='lg:hidden'>
                        <svg class="w-7 h-7" fill="#333" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
    {{-- <nav class="nav1">First Navbar</nav>
    <nav class="nav2">Second Navbar</nav> --}}


    {{-- <nav class="nav1">First Navbar</nav>
    <nav class="nav2">Second Navbar</nav> --}}


    {{-- slider image --}}
    <section class="h-screen bg-[url('{{ asset('img/sea.jpeg') }}')] bg-no-repeat bg-cover bg-center">
        <div class=" h-full ">
            <div>
                <div class="min-h-screen  p-3 relative">
                    <div class="w-96 mx-auto" style="scroll-snap-type: x mandatory;">
                        <!-- first -->
                        <div class="">
                            <input class="sr-only peer" type="radio" name="carousel" id="carousel-1" checked />
                            <!-- content #1 -->
                            <div
                                class="w-96 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                                <img class="rounded-t-lg w-96 h-64"
                                    src="https://flowbite.com/docs/images/carousel/carousel-1.svg" alt="" />
                                <div class="py-4 px-8">
                                    <h1
                                        class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                                        Lorem
                                        ipsum dolor sit amet consectetur adipisicing.
                                    </h1>
                                    <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">Lorem ipsum dolor, sit
                                        amet
                                        consectetur adipisicing elit.
                                    </p>
                                </div>
                                <!-- controls -->
                                <div class="absolute top-1/2 w-full flex justify-between z-20">
                                    <label for="carousel-3"
                                        class="inline-block text-red-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </label>
                                    <label for="carousel-2"
                                        class="inline-block text-red-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- second -->
                        <div class="">
                            <input class="sr-only peer" type="radio" name="carousel" id="carousel-2" />
                            <!-- content #2 -->
                            <div
                                class="w-96 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                                <img class="rounded-t-lg w-96 h-64"
                                    src="https://images.unsplash.com/photo-1628191139360-4083564d03fd?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=384&q=80"
                                    alt="" />
                                <div class="py-4 px-8">
                                    <h1
                                        class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                                        Scelerisque eleifend donec pretium vulputate sapien.
                                    </h1>
                                    <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">Egestas diam in arcu
                                        cursus euismod
                                        quis. Fusce id velit ut tortor. Congue quisque egestas diam in arcu cursus
                                        euismod quis.
                                    </p>
                                </div>
                                <!-- controls -->
                                <div class="absolute top-1/2 w-full flex justify-between z-20">
                                    <label for="carousel-1"
                                        class="inline-block text-blue-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </label>
                                    <label for="carousel-3"
                                        class="inline-block text-blue-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- three -->
                        <div class="">
                            <input class="sr-only peer" type="radio" name="carousel" id="carousel-3" />
                            <!-- content #3 -->
                            <div
                                class="w-96 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                                <img class="rounded-t-lg w-96 h-64"
                                    src="https://images.unsplash.com/photo-1628718120482-07e03fe361dd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=384&q=80"
                                    alt="" />
                                <div class="py-4 px-8">
                                    <h1
                                        class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                                        Consectetur purus ut faucibus pulvinar elementum.
                                    </h1>
                                    <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">Aliquam ultrices
                                        sagittis orci a
                                        scelerisque purus semper. Quisque id diam vel quam elementum pulvinar. Facilisis
                                        magna etiam
                                        tempor orci eu lobortis elementum.
                                    </p>
                                </div>
                                <!-- controls -->
                                <div class="absolute top-1/2 w-full flex justify-between z-20">
                                    <label for="carousel-2"
                                        class="inline-block text-yellow-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </label>
                                    <label for="carousel-1"
                                        class="inline-block text-yellow-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://www.buymeacoffee.com/dgauderman" target="_blank"
                    class="md:absolute bottom-0 right-0 p-4 float-right animate-bounce">
                    <img src="https://www.buymeacoffee.com/assets/img/guidelines/logo-mark-3.svg"
                        alt="Buy Me A Coffee"
                        class="transition-all rounded-full w-14 -rotate-45 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
                </a>
            </div>

            {{-- <p class="w-52">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur blanditiis iusto expedita neque autem ad dolorum. Vero nostrum, fuga tempora eum qui non excepturi provident eaque ab ullam vitae molestias.</p> --}}
            {{-- <img src="{{ asset('img/bg.jpg') }}" class="w-50"> </div> --}}
            <div id="cards" class="flex flex-row justify-center space-x-5 -mt-[35px]">
                <div class="p-5 bg-dark-200/30 text-black border border-white rounded-lg backdrop-brightness-125">
                    text <i class="fa-solid fa-money-check-dollar"></i>
                </div>
                <div class="p-5 bg-dark-200/30 text-black border border-white rounded-lg backdrop-brightness-125">
                    text <i class="fa-solid fa-shield"></i>
                </div>
                <div class="p-5 bg-dark-200/30 text-black border border-white rounded-lg backdrop-brightness-125">
                    text <i class="fa-solid fa-truck"></i>
                </div>
            </div>
        </div>


    </section>

    {{-- main --}}
    <div
        class="bg-gradient-to-b from-[rgba(0,111,149,1)] to-[rgba(0,67,100,0.8856792717086834)] to-[rgba(211,205,205,1)] h-full p-5">

        {{-- card --}}
        <div class="min-h-screen  flex items-center justify-center antialised space-x-2">
            <!-- card -->
            <div class=" flex bg-gradient-to-tr from-blue-100 to -ble-200 rounded-xl shadow-lg">
                <div class="relative hidden lg:flex flex-col min-hfull  items-center justify-center">
                    <img src="https://static.nike.com/a/images/t_default/xafjtunb69j40gagoyyc/chaussure-air-max-270-pour-9KTdg8qw.jpg"
                        class="absolute w-10 inset-0 m-5" alt="">
                    <img src="{{ asset('front/img/shoes-removebg-preview.png') }}"
                        class="w-80 transform -rotate-25 mr-3" alt="">

                </div>


                <div class="bg-white rounded-xl shadow-md h-96 flex flex-col relative w-72 lg:w-96 flex-shrink-0">
                    <img src='{{ asset('front/img/shoes-removebg-preview.png') }}'
                        class="absolute lg-hidden  top-0 transform -translate-y-1/2 rotate-12 w-52" alt="">
                    <div class="mt-28 mx-5 lg:mt -16 px text-gray-700 flex-1">
                        <h2 class="text-black font-extrabold text-2xl tracking-wide leding-none">Nike Air jjdjd</h2>
                        <h3 class="text-sm mt-2 text-gray-500"> Men's Racing jddhj</h3>
                        <div class="my-2">
                            <p class="mb-1"> Size </p>
                            <div class="flex text-xs gap-4 items-center">
                                <div
                                    class="rounded-full cursor-pointer h-6 w-6 leading-none border border-gray-600 flex items-center justify-center">
                                    7</div>
                                <div
                                    class="rounded-full cursor-pointer h-6 w-6 leading-none border border-gray-600 flex items-center justify-center">
                                    8</div>
                                <div
                                    class="rounded-full cursor-pointer h-6 w-6 leading-none border border-gray-600 flex items-center justify-center">
                                    9</div>
                                <div
                                    class="rounded-full cursor-pointer h-6 w-6 leading-none border border-blue-600 flex items-center justify-center text-white bg-blue-600">
                                    7</div>
                            </div>
                            <div class="mt-1">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. <span
                                    class="hidden lg:inline"> dolor sit amet consectetur adipisicing </span>
                            </div>
                        </div>


                    </div>
                    <div class="px-6 flex items-center justify-between text-gray-700 mb-3">
                        <p class="font-extrabold text-2xl gtransform scale-110 leading-none">$150.99</p>
                        <button class="border-2 text-gray-700 border-gray-400 px-2 rounded-lg leading-non p-1.5"> Add
                            to Cart</button>
                    </div>
                </div>

            </div>

            <div class=" flex bg-gradient-to-tr from-blue-100 to -ble-200 rounded-xl shadow-lg">
                <div class="relative hidden lg:flex flex-col min-hfull  items-center justify-center">
                    <img src="https://static.nike.com/a/images/t_default/xafjtunb69j40gagoyyc/chaussure-air-max-270-pour-9KTdg8qw.jpg"
                        class="absolute w-10 inset-0 m-5" alt="">
                    <img src="{{ asset('front/img/shoes-removebg-preview.png') }}"
                        class="w-80 transform -rotate-25 mr-3" alt="">

                </div>


                <div class="bg-white rounded-xl shadow-md h-96 flex flex-col relative w-72 lg:w-96 flex-shrink-0">
                    <img src='{{ asset('front/img/shoes-removebg-preview.png') }}'
                        class="absolute lg-hidden w-full top-0 transform -translate-y-1/2 rotate-12" alt="">
                    <div class="mt-28 mx-5 lg:mt -16 px text-gray-700 flex-1">
                        <h2 class="text-black font-extrabold text-2xl tracking-wide leding-none">Nike Air jjdjd</h2>
                        <h3 class="text-sm mt-2 text-gray-500"> Men's Racing jddhj</h3>
                        <div class="my-2">
                            <p class="mb-1"> Size </p>
                            <div class="flex text-xs gap-4 items-center">
                                <div
                                    class="rounded-full cursor-pointer h-6 w-6 leading-none border border-gray-600 flex items-center justify-center">
                                    7</div>
                                <div
                                    class="rounded-full cursor-pointer h-6 w-6 leading-none border border-gray-600 flex items-center justify-center">
                                    8</div>
                                <div
                                    class="rounded-full cursor-pointer h-6 w-6 leading-none border border-gray-600 flex items-center justify-center">
                                    9</div>
                                <div
                                    class="rounded-full cursor-pointer h-6 w-6 leading-none border border-blue-600 flex items-center justify-center text-white bg-blue-600">
                                    7</div>
                            </div>
                            <div class="mt-1">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. <span
                                    class="hidden lg:inline"> dolor sit amet consectetur adipisicing </span>
                            </div>
                        </div>


                    </div>
                    <div class="px-6 flex items-center justify-between text-gray-700 mb-3">
                        <p class="font-extrabold text-2xl gtransform scale-110 leading-none">$150.99</p>
                        <button class="border-2 text-gray-700 border-gray-400 px-2 rounded-lg leading-non p-1.5"> Add
                            to Cart</button>
                    </div>
                </div>

            </div>

        </div>

        {{-- PRODUCT CARD  --}}

        <!-- component -->
        <!-- component -->
        <!-- This is an example component -->
        <div class="max-w-2xl mx-auto flex gap-4">


            <div class="card bg-white shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg p-8"
                        src="https://i.ibb.co/KqdgGY4/cosmetic-packaging-mockup-1150-40280.webp" alt="product image">
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h3 class="text-gray-900 font-semibold text-xl tracking-tight dark:text-white">Apple Watch
                            Series 7
                            GPS, Aluminium Case, Starlight Sport</h3>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <button
                            class="add-to-cart text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            to cart</button>
                    </div>
                </div>
            </div>
            <div class="card bg-white shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="rounded-t-lg p-8"
                      src="https://i.ibb.co/KqdgGY4/cosmetic-packaging-mockup-1150-40280.webp" alt="product image">
              </a>
              <div class="px-5 pb-5">
                  <a href="#">
                      <h3 class="text-gray-900 font-semibold text-xl tracking-tight dark:text-white">Apple Watch
                          Series 7
                          GPS, Aluminium Case, Starlight Sport</h3>
                  </a>
                  <div class="flex items-center mt-2.5 mb-5">
                      <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                      </svg>
                      <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                      </svg>
                      <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                      </svg>
                      <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                      </svg>
                      <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                      </svg>
                      <span
                          class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                  </div>
                  <div class="flex items-center justify-between">
                      <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                      <a href="#"
                          class="add-to-cart text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                          to cart</a>
                  </div>
              </div>
          </div>
        </div>
        {{-- customer reviewsn --}}
        <section class="py-24 relative">
            <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">
                <div class="w-full">
                    <h2 class="font-manrope font-bold text-4xl text-black mb-8 text-center">Our customer reviews</h2>
                    <div
                        class="grid grid-cols-1 xl:grid-cols-2 gap-11 pb-11 border-gray-100 max-xl:max-w-2xl max-xl:mx-auto">
                        <div class="box flex flex-col gap-y-4 w-full ">
                            <div class="flex items-center w-full">
                                <p class="font-medium text-lg text-black mr-0.5">5</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_12042_8589)">
                                        <path
                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12042_8589">
                                            <rect width="20" height="20" fill=" " />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p class="h-2 w-full sm:min-w-[278px] rounded-3xl bg-amber-50 ml-5 mr-3">
                                    <span class="h-full w-[30%] rounded-3xl bg-amber-400 flex"></span>
                                </p>
                                <p class="font-medium text-lg  text-black mr-0.5">989</p>
                            </div>
                            <div class="flex items-center w-full">
                                <p class="font-medium text-lg text-black mr-0.5">4</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_12042_8589)">
                                        <path
                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12042_8589">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p class="h-2 w-full xl:min-w-[278px] rounded-3xl bg-amber-50 ml-5 mr-3">
                                    <span class="h-full w-[40%] rounded-3xl bg-amber-400 flex"></span>
                                </p>
                                <p class="font-medium text-lg text-black mr-0.5">4.5K</p>
                            </div>
                            <div class="flex items-center">
                                <p class="font-medium text-lg text-black mr-0.5">3</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_12042_8589)">
                                        <path
                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12042_8589">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p class="h-2 w-full xl:min-w-[278px] rounded-3xl bg-amber-50 ml-5 mr-3">
                                    <span class="h-full w-[20%] rounded-3xl bg-amber-400 flex"></span>
                                </p>
                                <p class="font-medium text-lg text-black mr-0.5">50</p>
                            </div>
                            <div class="flex items-center">
                                <p class="font-medium text-lg text-black mr-0.5">2</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_12042_8589)">
                                        <path
                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12042_8589">
                                            <rect width="20" height="20" fill=" " />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p class="h-2 w-full xl:min-w-[278px] rounded-3xl bg-amber-50 ml-5 mr-3">
                                    <span class="h-full w-[16%] rounded-3xl bg-amber-400 flex"></span>
                                </p>
                                <p class="font-medium text-lg text-black mr-0.5">16</p>
                            </div>
                            <div class="flex items-center">
                                <p class="font-medium text-lg text-black mr-0.5">1</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_12042_8589)">
                                        <path
                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_12042_8589">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p class="h-2 w-full xl:min-w-[278px] rounded-3xl bg-amber-50 ml-5 mr-3">
                                    <span class="h-full w-[8%] rounded-3xl bg-amber-400 flex"></span>
                                </p>
                                <p class="font-medium text-lg py-[1px] text-black mr-0.5">8</p>
                            </div>
                        </div>
                        <div class="p-8 bg-amber-50 rounded-3xl flex items-center justify-center flex-col">
                            <h2 class="font-manrope font-bold text-5xl text-amber-400 mb-6">
                                4.3</h2>
                            <div class="flex items-center justify-center gap-2 sm:gap-6 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                    viewBox="0 0 44 44" fill="none">
                                    <g clip-path="url(#clip0_13624_2608)">
                                        <path
                                            d="M21.1033 2.9166C21.4701 2.17335 22.5299 2.17335 22.8967 2.9166L28.233 13.729C28.3786 14.0241 28.6602 14.2287 28.9859 14.276L40.9181 16.0099C41.7383 16.1291 42.0658 17.137 41.4723 17.7156L32.8381 26.1318C32.6024 26.3616 32.4949 26.6926 32.5505 27.017L34.5888 38.9009C34.7289 39.7178 33.8714 40.3408 33.1378 39.9551L22.4653 34.3443C22.174 34.1911 21.826 34.1911 21.5347 34.3443L10.8622 39.9551C10.1286 40.3408 9.27114 39.7178 9.41125 38.9009L11.4495 27.017C11.5051 26.6926 11.3976 26.3616 11.1619 26.1318L2.52771 17.7156C1.93419 17.137 2.2617 16.1291 3.08192 16.0099L15.0141 14.276C15.3398 14.2287 15.6214 14.0241 15.767 13.729L21.1033 2.9166Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2608">
                                            <rect width="44" height="44" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                    viewBox="0 0 44 44" fill="none">
                                    <g clip-path="url(#clip0_13624_2608)">
                                        <path
                                            d="M21.1033 2.9166C21.4701 2.17335 22.5299 2.17335 22.8967 2.9166L28.233 13.729C28.3786 14.0241 28.6602 14.2287 28.9859 14.276L40.9181 16.0099C41.7383 16.1291 42.0658 17.137 41.4723 17.7156L32.8381 26.1318C32.6024 26.3616 32.4949 26.6926 32.5505 27.017L34.5888 38.9009C34.7289 39.7178 33.8714 40.3408 33.1378 39.9551L22.4653 34.3443C22.174 34.1911 21.826 34.1911 21.5347 34.3443L10.8622 39.9551C10.1286 40.3408 9.27114 39.7178 9.41125 38.9009L11.4495 27.017C11.5051 26.6926 11.3976 26.3616 11.1619 26.1318L2.52771 17.7156C1.93419 17.137 2.2617 16.1291 3.08192 16.0099L15.0141 14.276C15.3398 14.2287 15.6214 14.0241 15.767 13.729L21.1033 2.9166Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2608">
                                            <rect width="44" height="44" fill=" " />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                    viewBox="0 0 44 44" fill="none">
                                    <g clip-path="url(#clip0_13624_2608)">
                                        <path
                                            d="M21.1033 2.9166C21.4701 2.17335 22.5299 2.17335 22.8967 2.9166L28.233 13.729C28.3786 14.0241 28.6602 14.2287 28.9859 14.276L40.9181 16.0099C41.7383 16.1291 42.0658 17.137 41.4723 17.7156L32.8381 26.1318C32.6024 26.3616 32.4949 26.6926 32.5505 27.017L34.5888 38.9009C34.7289 39.7178 33.8714 40.3408 33.1378 39.9551L22.4653 34.3443C22.174 34.1911 21.826 34.1911 21.5347 34.3443L10.8622 39.9551C10.1286 40.3408 9.27114 39.7178 9.41125 38.9009L11.4495 27.017C11.5051 26.6926 11.3976 26.3616 11.1619 26.1318L2.52771 17.7156C1.93419 17.137 2.2617 16.1291 3.08192 16.0099L15.0141 14.276C15.3398 14.2287 15.6214 14.0241 15.767 13.729L21.1033 2.9166Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2608">
                                            <rect width="44" height="44" fill=" " />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                    viewBox="0 0 44 44" fill="none">
                                    <g clip-path="url(#clip0_13624_2608)">
                                        <path
                                            d="M21.1033 2.9166C21.4701 2.17335 22.5299 2.17335 22.8967 2.9166L28.233 13.729C28.3786 14.0241 28.6602 14.2287 28.9859 14.276L40.9181 16.0099C41.7383 16.1291 42.0658 17.137 41.4723 17.7156L32.8381 26.1318C32.6024 26.3616 32.4949 26.6926 32.5505 27.017L34.5888 38.9009C34.7289 39.7178 33.8714 40.3408 33.1378 39.9551L22.4653 34.3443C22.174 34.1911 21.826 34.1911 21.5347 34.3443L10.8622 39.9551C10.1286 40.3408 9.27114 39.7178 9.41125 38.9009L11.4495 27.017C11.5051 26.6926 11.3976 26.3616 11.1619 26.1318L2.52771 17.7156C1.93419 17.137 2.2617 16.1291 3.08192 16.0099L15.0141 14.276C15.3398 14.2287 15.6214 14.0241 15.767 13.729L21.1033 2.9166Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2608">
                                            <rect width="44" height="44" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                    viewBox="0 0 44 44" fill="none">
                                    <g clip-path="url(#clip0_13624_2608)">
                                        <path
                                            d="M21.1033 2.9166C21.4701 2.17335 22.5299 2.17335 22.8967 2.9166L28.233 13.729C28.3786 14.0241 28.6602 14.2287 28.9859 14.276L40.9181 16.0099C41.7383 16.1291 42.0658 17.137 41.4723 17.7156L32.8381 26.1318C32.6024 26.3616 32.4949 26.6926 32.5505 27.017L34.5888 38.9009C34.7289 39.7178 33.8714 40.3408 33.1378 39.9551L22.4653 34.3443C22.174 34.1911 21.826 34.1911 21.5347 34.3443L10.8622 39.9551C10.1286 40.3408 9.27114 39.7178 9.41125 38.9009L11.4495 27.017C11.5051 26.6926 11.3976 26.3616 11.1619 26.1318L2.52771 17.7156C1.93419 17.137 2.2617 16.1291 3.08192 16.0099L15.0141 14.276C15.3398 14.2287 15.6214 14.0241 15.767 13.729L21.1033 2.9166Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2608">
                                            <rect width="44" height="44" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p class="font-medium text-xl leading-8 text-gray-900 text-center">46 Ratings</p>
                        </div>
                    </div>
                    <div class="flex">
                        {{-- card1 --}}
                        <div
                            class="pt-11 pb-8 px-8 m-8 border-b border-red-100 bg-amber-50 rounded-3xl max-xl:max-w-2xl max-xl:mx-auto">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_13624_2892)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2892">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_13624_2892)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2892">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_13624_2892)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2892">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_13624_2892)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2892">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_13624_2892)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2892">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <h3 class="font-manrope font-semibold text-base sm:text-2xl leading-9 text-black mb-6">
                                Outstanding Experience!!!
                            </h3>
                            <div class="flex sm:items-center flex-col min-[400px]:flex-row justify-between gap-5 mb-4">
                                <div class="flex items-center gap-3">
                                    <img src="https://pagedone.io/asset/uploads/1704349572.png" alt="John image"
                                        class="w-11 h-11">
                                    <h6 class="font-semibold text-base leading-8 text-indigo-600 ">John Watson</h6>
                                </div>
                                <p class="font-normal text-base leading-8 text-gray-400">Nov 01, 2023</p>
                            </div>
                            <p class="font-normal text-sm leading-8 text-gray-400 max-xl:text-justify">One of the
                                standout features of Pagedone is its intuitive and user-friendly interface. Navigating
                                through the system feels natural, and the layout makes it easy to locate and utilize
                                various design elements. This is particularly beneficial for designers looking to
                                streamline their workflow.</p>
                        </div>
                        {{-- card 2 --}}
                        <div class="pt-11 pb-8 px-8 m-8 max-xl:max-w-2xl  bg-amber-50 rounded-3xl max-xl:mx-auto">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_13624_2892)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2892">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_13624_2892)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2892">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_13624_2892)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2892">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_13624_2892)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2892">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_13624_2892)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            fill="#FBBF24" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2892">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="font-manrope font-semibold text-base sm:text-2xl leading-9 text-black mb-6">
                                Pagedone's design system seamlessly bridges the gap between designers and developers!
                            </h3>
                            <div class="flex sm:items-center flex-col min-[400px]:flex-row justify-between gap-5 mb-4">
                                <div class="flex items-center gap-3">
                                    <img src="https://pagedone.io/asset/uploads/1704351103.png" alt="Robert image"
                                        class="w-11 h-11">
                                    <h6 class="font-semibold text-base leading-8 text-indigo-600">Robert Karmazov</h6>
                                </div>
                                <p class="font-normal text-base leading-8 text-gray-400">Nov 01, 2023</p>
                            </div>
                            <p class="font-normal text-sm leading-8 text-gray-400 max-xl:text-justify">Pagedone doesn't
                                disappoint when it comes to the variety and richness of its design components. From
                                pre-built templates to customizable elements, the system caters to both beginners and
                                seasoned designers. The extensive library ensures a diverse range of options to bring
                                creative visions to life.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- services --}}

        <section>
            <div class="text-center mb-5">
                <h1 class="text-3xl font-bold"> Or Services </h1>
                <h3> Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
            </div>

            <div class="flex flex-row justify-center space-x-5 ">
                {{-- 1 --}}
                <div class="w-60 text-center">
                    <div class="mb-4 relative p-[46px]">
                        <span class="px-[58px] py-[46px] bg-black rounded-full"></span>
                        <img src="img/bateau.png" class="absolute top-[12px] left-[80px] w-20" alt="">
                    </div>
                    <h2> SHIPYARD</h2>
                    <h3> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>
                </div>

                {{-- 2 --}}

                <div class="w-60 text-center">
                    <div class="mb-4 relative p-[46px]">
                        <span class="px-[58px] py-[46px] bg-black rounded-full"> </span>
                        <img src="img/bateau.png" class="absolute top-[12px] left-[80px] w-20" alt="">
                    </div>
                    <h2>CHARTER</h2>
                    <h3> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>
                </div>

                {{-- 3 --}}

                <div class="w-60 text-center">
                    <div class="mb-4 relative p-[46px]">
                        <span class="px-[58px] py-[46px] bg-black rounded-full"> </span>
                        <img src="img/bateau.png" class="absolute top-[12px] left-[80px] w-20" alt="">
                    </div>
                    <h2> REFT SERVICES</h2>
                    <h3> Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>
                </div>


            </div>
        </section>

        <section>
            <div class="container my-24 mx-auto md:px-6">
                <!-- Section: Design Block -->
                <section class="mb-32 text-center">
                    <div class="py-12 md:px-12">
                        <div class="container mx-auto xl:px-32">
                            <div class="grid items-center lg:grid-cols-2">
                                <div class="mb-12 md:mt-12 lg:mt-0 lg:mb-0">
                                    <div
                                        class="relative z-[1] block rounded-lg bg-[hsla(0,0%,100%,0.55)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] backdrop-blur-[30px] dark:bg-[hsla(0,0%,5%,0.7)] dark:shadow-black/20 md:px-12 lg:-mr-14">
                                        <h2 class="mb-12 text-3xl font-bold">@lang('front.contact')</h2>
                                        <form>
                                            <div class="relative mb-6" data-te-input-wrapper-init>
                                                <input type="text"
                                                    class="text-black peer block min-h-[auto] w-full rounded  border-1 border-black bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="exampleInput90" placeholder="Name" />
                                                <label
                                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                                    for="exampleInput90">@lang('front.name')
                                                </label>
                                            </div>
                                            <div class="relative mb-6" data-te-input-wrapper-init>
                                                <input type="email"
                                                    class="text-black peer block min-h-[auto] w-full rounded border-1 border-black bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="exampleInput91" placeholder="Email address" />
                                                <label
                                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                                    for="exampleInput91">Email address
                                                </label>
                                            </div>
                                            <div class="relative mb-6" data-te-input-wrapper-init>
                                                <textarea
                                                    class="text-black peer block min-h-[auto] w-full rounded border-1 border-black bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                                                <label for="exampleFormControlTextarea1"
                                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Message</label>
                                            </div>
                                            <div
                                                class="mb-6 inline-block min-h-[1.5rem] justify-center pl-[1.5rem] md:flex">
                                                <input
                                                    class="text-black relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                                    type="checkbox" value="" id="exampleCheck96" checked />
                                                <label class="inline-block pl-[0.15rem] hover:cursor-pointer"
                                                    for="exampleCheck96">
                                                    Send me a copy of this message
                                                </label>
                                            </div>
                                            <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                                class="inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                                                Send
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="md:mb-12 lg:mb-0">
                                    <div class="relative h-[700px] rounded-lg shadow-lg dark:shadow-black/20">
                                        {{-- <iframe
                          src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                          
                          frameborder="0"
                          allowfullscreen></iframe> --}}
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9930.85131424211!2d-0.1422139!3d51.5184843!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b360500ce2d%3A0x1aa383ff6d5fe1a5!2scaptain%20sea!5e0!3m2!1sfr!2sma!4v1715265309090!5m2!1sfr!2sma"
                                            class="absolute left-0 top-0 h-full w-full rounded-lg" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Design Block -->
            </div>

        </section>

    </div> {{-- end main --}}
    {{-- end main --}}
    




    {{-- Footer --}}

    <section class="bg-[url('{{ asset('img/footer.jpg') }}')] bg-no-repeat bg-cover bg-center">


        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                        <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round"
                            stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor"
                            fill="none">
                            <rect x="3" y="1" width="7" height="12"></rect>
                            <rect x="3" y="17" width="7" height="6"></rect>
                            <rect x="14" y="1" width="7" height="6"></rect>
                            <rect x="14" y="11" width="7" height="12"></rect>
                        </svg>
                        <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                    </a>
                    <div class="mt-6 lg:max-w-sm">
                        <p class="text-sm text-gray-800">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam.
                        </p>
                        <p class="mt-4 text-sm text-gray-800">
                            Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo.
                        </p>
                    </div>
                </div>
                <div class="space-y-2 text-sm">
                    <p class="text-base font-bold tracking-wide text-gray-900">Contacts</p>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Phone:</p>
                        <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">850-123-5021</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Email:</p>
                        <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">info@lorem.mail</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Address:</p>
                        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer"
                            aria-label="Our address" title="Our address"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                            312 Lovely Street, NY
                        </a>
                    </div>
                </div>
                <div>
                    <span class="text-base font-bold tracking-wide text-gray-900">Social</span>
                    <div class="flex items-center mt-1 space-x-3">
                        <a href="/"
                            class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                                </path>
                            </svg>
                        </a>
                        <a href="/"
                            class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                <circle cx="15" cy="15" r="4"></circle>
                                <path
                                    d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                                </path>
                            </svg>
                        </a>
                        <a href="/"
                            class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <p class="mt-4 text-sm text-gray-500">
                        Bacon ipsum dolor amet short ribs pig sausage prosciutto chicken spare ribs salami.
                    </p>
                </div>
            </div>
            <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
                <p class="text-sm text-gray-600">
                    © Copyright 2020 Lorem Inc. All rights reserved.
                </p>
                <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                    <li>
                        <a href="/"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">F.A.Q</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy
                            Policy</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Terms
                            &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>




    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script src="{{ asset('front/script.js') }}"></script>
    <script src="{{ asset('js/flycard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements@2.0.0/js/tw-elements.umd.min.js"></script>
    <!-- JIT SUPPORT, for using peer-* below -->
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

</body>

</html>
