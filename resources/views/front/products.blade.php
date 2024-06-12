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
            .footer {
                background-image: linear-gradient(rgba(4, 9, 30, 0.02), rgba(4 9 30 /39%)), url({{ asset('img/footer.jpg') }});

            }

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


            .container {
                position: relative;
                overflow: hidden;
                border-radius: 5rem;
            }

            @media only screen and (max-width: 1000px) {
                .container {
                    border-radius: 0;
                }
            }

            .slider {
                display: flex;
                width: 500%;
                height: 55rem;
                transition: all 0.25s ease-in;
                transform: translateX(0);
            }

            @media only screen and (max-width: 1000px) {
                .slider {
                    height: 100vh;
                }
            }

            .slider .box {
                height: 100%;
                width: 100%;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                align-items: center;
                overflow: hidden;
                position: relative;
            }

            @media only screen and (max-width: 650px) {
                .slider .box {
                    grid-template-columns: 1fr;
                    grid-template-rows: repeat(2, 1fr);
                }
            }

            .slider .box .bg {
                padding: 2rem;
                /* background-color: rgba(0, 0, 0, 0.2); */
                width: 55%;
                transform: skewX(7deg);
                position: absolute;
                height: 100%;
                left: -10%;
                padding-left: 20rem;
                transform-origin: 0 100%;
            }

            @media only screen and (max-width: 800px) {
                .slider .box .bg {
                    width: 65%;
                }
            }

            @media only screen and (max-width: 650px) {
                .slider .box .bg {
                    width: 100%;
                    left: 0;
                    bottom: 0;
                    height: 54%;
                    transform: skewX(0deg);
                }
            }

            .slider .box .bg::before {
                content: "";
                width: 100%;
                height: 100%;
                position: absolute;
                left: 0;
                top: 0;
                background-color: inherit;
                pointer-events: none;
                transform: skewX(10deg);
            }

            @media only screen and (max-width: 650px) {
                .slider .box .bg::before {
                    width: 120%;
                    bottom: 0;
                    transform: skewX(0deg);
                }
            }

            .slider .box .details {
                padding: 5rem;
                padding-left: 10rem;
                z-index: 100;
                grid-column: 1/span 1;
                grid-row: 1/-1;
            }

            @media only screen and (max-width: 650px) {
                .slider .box .details {
                    grid-row: 2/span 1;
                    grid-column: 1/-1;
                    text-align: center;
                    padding: 2rem;
                    transform: translateY(-9rem);
                }
            }

            .slider .box .details h1 {
                font-size: 3.5rem;
                font-weight: 500;
                margin-bottom: 0.5rem;
            }

            .slider .box .details p {
                display: inline-block;
                font-size: 1.3rem;
                color: #B5B4B4;
                margin-bottom: 2rem;
                margin-right: 5rem;
            }

            @media only screen and (max-width: 800px) {
                .slider .box .details p {
                    margin-right: 0;
                }
            }

            .slider .box .details button {
                padding: 1rem 3rem;
                color: #fff;
                border-radius: 2rem;
                outline: none;
                border: none;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .slider .box .details button:hover {
                opacity: 0.8;
            }

            .slider .box .details button:focus {
                outline: none;
                border: none;
            }

            .slider .box1 {
                /* background-color: #500033; */
            }

            .slider .box1 .illustration .inner {
                background-color: #FF0077;
            }

            .slider .box1 .illustration .inner::after,
            .slider .box1 .illustration .inner::before {
                background-color: rgba(255, 0, 119, 0.4);
            }

            .slider .box1 button {
                background-color: #0033FF;
            }

            .slider .box2 {
                /* background-color: #000050; */
            }

            .slider .box2 .illustration .inner {
                background-color: #0033FF;
            }

            .slider .box2 .illustration .inner::after,
            .slider .box2 .illustration .inner::before {
                background-color: rgba(0, 51, 255, 0.4);
            }

            .slider .box2 button {
                background-color: #0033FF;
            }

            .slider .box3 {
                /* background-color: #00501D; */
            }

            .slider .box3 .illustration .inner {
                background-color: #00FF44;
            }

            .slider .box3 .illustration .inner::after,
            .slider .box3 .illustration .inner::before {
                background-color: rgba(0, 255, 68, 0.4);
            }

            .slider .box3 button {
                background-color: #0033FF;
            }

            .slider .box4 {
                /* background-color: #554D00; */
            }

            .slider .box4 .illustration .inner {
                background-color: #FF4E00;
            }

            .slider .box4 .illustration .inner::after,
            .slider .box4 .illustration .inner::before {
                background-color: rgba(255, 78, 0, 0.4);
            }

            .slider .box4 button {
                background-color: #0033FF;
            }

            .slider .box5 {
                /* background-color: #300050; */
            }

            .slider .box5 .illustration .inner {
                background-color: #8000FF;
            }

            .slider .box5 .illustration .inner::after,
            .slider .box5 .illustration .inner::before {
                background-color: rgba(128, 0, 255, 0.4);
            }

            .slider .box5 button {
                background-color: #0033FF;
            }

            .slider .illustration {
                grid-column: 2/-1;
                grid-row: 1/-1;
                justify-self: center;
            }

            @media only screen and (max-width: 650px) {
                .slider .illustration {
                    grid-row: 1/span 1;
                    grid-column: 1/-1;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            }

            .slider .illustration div {
                height: 25rem;
                width: 18rem;
                border-radius: 3rem;
                background-color: #FF0077;
                position: relative;
                transform: skewX(-10deg);
            }

            @media only screen and (max-width: 800px) {
                .slider .illustration div {
                    height: 20rem;
                    width: 15rem;
                }
            }

            .slider .illustration div::after,
            .slider .illustration div::before {
                content: "";
                position: absolute;
                height: 100%;
                width: 100%;
                border-radius: 3rem;
                top: 0;
                left: 0;
            }

            .slider .illustration div::after {
                transform: translate(4rem, -1rem);
            }

            .slider .illustration div::before {
                transform: translate(2rem, -2rem);
            }

            .prev,
            .next,
            .trail {
                z-index: 10000;
                position: absolute;
            }

            .prev,
            .next {
                width: 4rem;
                cursor: pointer;
                opacity: 0.5;
                transition: all 0.3s ease;
            }

            @media only screen and (max-width: 650px) {

                .prev,
                .next {
                    display: none;
                }
            }

            .prev:hover,
            .next:hover {
                opacity: 1;
            }

            .prev {
                top: 50%;
                left: 2%;
                transform: translateY(-50%);
            }

            .next {
                top: 50%;
                right: 2%;
                transform: translateY(-50%);
            }

            .trail {
                bottom: 5%;
                left: 50%;
                transform: translateX(-50%);
                width: 60%;
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                gap: 1rem;
                text-align: center;
                font-size: 1.5rem;
            }

            @media only screen and (max-width: 650px) {
                .trail {
                    width: 90%;
                    bottom: 13%;
                }
            }

            .trail div {
                padding: 2rem;
                border-top: 3px solid #fff;
                cursor: pointer;
                opacity: 0.3;
                transition: all 0.3s ease;
            }

            .trail div:hover {
                opacity: 0.6;
            }

            @media only screen and (max-width: 650px) {
                .trail div {
                    padding: 1rem;
                }
            }

            .active {
                opacity: 1 !important;
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
                            @lang('front.en') <img src="{{ asset('front/img/eng.png') }}" class="w-3 ml-2"
                                alt="">
                        @elseif (app()->getLocale() == 'fr')
                            @lang('front.fr') <img src="{{ asset('front/img/fr.png') }}" class="w-3 ml-2"
                                alt="">
                        @else
                            @lang('front.ar') <img src="{{ asset('front/img/ar.png') }}" class="w-3 ml-2"
                                alt="">
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
                                <a href="{{ url('lang/en') }}"
                                    class="flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">@lang('front.en')
                                    <img src="{{ asset('front/img/eng.png') }}" class="w-5 ml-2" alt=""></a>
                            </li>
                            <li>
                                <a href="{{ url('lang/fr') }}"
                                    class="flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">@lang('front.fr')
                                    <img src="{{ asset('front/img/fr.png') }}" class="w-5 ml-2" alt=""></a>
                            </li>
                            <li>
                                <a href="{{ url('lang/ar') }}"
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

                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownHoverButton">

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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="18px"
                        class="cursor-pointer fill-white">
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

                    <span class="shopping-cart relative rounded-full px-3 py-2" id="cart-count"
                        data-product-count="0">
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




{{-- main --}}


<body class="bg-gray-100">

    <div class="min-h-screen flex">
      <!-- Left section: Filter -->
      <div class="w-1/4 bg-white p-6 border-r border-gray-200">
        <h2 class="text-2xl font-semibold mb-4">Filtres</h2>
  
        <!-- Category Filter -->
        <div class="mb-6">
          <h3 class="text-lg font-medium mb-2">Catégorie</h3>
          <ul>
            <li class="mb-2">
              <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                <span class="ml-2 text-gray-700">Catégorie 1</span>
              </label>
            </li>
            <li class="mb-2">
              <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                <span class="ml-2 text-gray-700">Catégorie 2</span>
              </label>
            </li>
            <li class="mb-2">
              <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                <span class="ml-2 text-gray-700">Catégorie 3</span>
              </label>
            </li>
          </ul>
        </div>
  
        <!-- Price Filter -->
        <div>
          <h3 class="text-lg font-medium mb-2">Prix</h3>
          <div class="mb-4">
            <input type="range" id="minPrice" name="minPrice" min="0" max="1000" step="10" value="0" class="w-full">
            <label for="minPrice" class="block text-gray-700">Min: <span id="minPriceValue">0</span>€</label>
          </div>
          <div class="mb-4">
            <input type="range" id="maxPrice" name="maxPrice" min="0" max="1000" step="10" value="1000" class="w-full">
            <label for="maxPrice" class="block text-gray-700">Max: <span id="maxPriceValue">1000</span>€</label>
          </div>
          <button id="applyFilter" class="bg-blue-600 text-white px-4 py-2 rounded">Appliquer</button>
        </div>
      </div>
  
      <!-- Right section: Product cards -->
      <div class="w-3/4 p-6">
        <h2 class="text-2xl font-semibold mb-4">Produits</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="productGrid">
          <!-- Product Card -->
          <div class="bg-white p-4 rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/150" alt="Product Image" class="w-full h-40 object-cover mb-4 rounded">
            <h3 class="text-lg font-medium mb-2">Nom du Produit</h3>
            <p class="text-gray-700 mb-2">Description du produit.</p>
            <p class="text-blue-600 font-bold mb-4">€XX.XX</p>
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter au panier</button>
          </div>
          <!-- Repeat product cards as needed -->
        </div>
      </div>
    </div>
  
    <script>
      const minPrice = document.getElementById('minPrice');
      const maxPrice = document.getElementById('maxPrice');
      const minPriceValue = document.getElementById('minPriceValue');
      const maxPriceValue = document.getElementById('maxPriceValue');
      const applyFilter = document.getElementById('applyFilter');
  
      // Update min and max price display
      minPrice.addEventListener('input', function () {
        minPriceValue.innerText = this.value;
        if (parseInt(minPrice.value) > parseInt(maxPrice.value)) {
          maxPrice.value = minPrice.value;
          maxPriceValue.innerText = maxPrice.value;
        }
      });
  
      maxPrice.addEventListener('input', function () {
        maxPriceValue.innerText = this.value;
        if (parseInt(maxPrice.value) < parseInt(minPrice.value)) {
          minPrice.value = maxPrice.value;
          minPriceValue.innerText = minPrice.value;
        }
      });
  
      // Apply filter button click
      applyFilter.addEventListener('click', function () {
        const minPriceVal = minPrice.value;
        const maxPriceVal = maxPrice.value;
        console.log(`Filter applied with min price: ${minPriceVal}€ and max price: ${maxPriceVal}€`);
        // Add your filtering logic here
      });
    </script>
  </body>




{{-- end main --}}




    {{-- Footer --}}

    <section class="footer bg-no-repeat bg-cover bg-center h-[800px]">


        <div class="px-4 pt-[33rem] mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4 text-white">
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
                        <span class="ml-2 text-xl font-bold tracking-wide text-white uppercase">Captain Sea</span>
                    </a>
                    <div class="mt-6 lg:max-w-sm">
                        <p class="text-sm text-white">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam.
                        </p>
                        <p class="mt-4 text-sm text-white">
                            Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo.
                        </p>
                    </div>
                </div>
                <div class="space-y-2 text-sm">
                    <p class="text-base font-bold tracking-wide text-white">Contacts</p>
                    <div class="flex">
                        <p class="mr-1 text-white">Phone:</p>
                        <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">+212
                            666674335 / +44 7415322654</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-white">Email:</p>
                        <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800 ">contact@thecaptainsea.com</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-white">Address:</p>
                        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer"
                            aria-label="Our address" title="Our address"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                            85 Great Portland Street London W1W 7LT United Kingdom
                        </a>
                    </div>
                </div>
                <div>
                    <span class="text-base font-bold tracking-wide text-white">Social</span>
                    <div class="flex items-center mt-1 space-x-3">
                        <a href="/"
                            class="text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                                </path>
                            </svg>
                        </a>
                        <a href="/"
                            class="text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                <circle cx="15" cy="15" r="4"></circle>
                                <path
                                    d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                                </path>
                            </svg>
                        </a>
                        <a href="/"
                            class="text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <p class="mt-4 text-sm text-white">
                        Bacon ipsum dolor amet short ribs pig sausage prosciutto chicken spare ribs salami.
                    </p>
                </div>
            </div>
            <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
                <p class="text-sm text-white">
                    © Copyright 2024 YAZIDONE . All rights reserved.
                </p>
                <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                    <li>
                        <a href="/"
                            class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">F.A.Q</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy
                            Policy</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">Terms
                            &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>




    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script src="{{ asset('front/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements@2.0.0/js/tw-elements.umd.min.js"></script>
    <!-- JIT SUPPORT, for using peer-* below -->
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    {{-- slider --}}
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CSSRulePlugin3.min.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
    {{-- <script src="{{ asset('js/flycard.js') }}"></script> --}}
    <script>
        // afficher le nbr de produits dans panier
        let cart = localStorage.getItem('cart');
        // Si le panier n'existe pas, initialiser un tableau vide
        if (cart) {
            cart = JSON.parse(cart);
            cart.innerText = ''
            document.getElementById('cart-count').innerText = cart.length;
        }
    </script>

    <script>
        // ajouter au panier
        function addToCart(productId) {
            // let productId = cartBtn.getAttribute('data-id')
            let cartBtn = document.getElementById('cartBtn' + productId);
            let productName = cartBtn.getAttribute('data-name')
            let productImage = cartBtn.getAttribute('data-image')
            let productPrice = cartBtn.getAttribute('data-price')
            let productQuantity = 1; // Default quantity to add

            // Vérifier si le panier existe déjà dans le stockage local
            let cart = localStorage.getItem('cart');

            // Si le panier n'existe pas, initialiser un tableau vide
            if (!cart) {
                cart = [];
            } else {
                // Si le panier existe, le convertir en tableau JSON
                cart = JSON.parse(cart);
            }

            // Vérifier si le produit existe déjà dans le panier
            let existingProductIndex = cart.findIndex(item => item.id === productId);

            if (existingProductIndex !== -1) {
                // Si le produit existe déjà, incrementer la quantité
                cart[existingProductIndex].quantity++;
            } else {
                // Si le produit n'existe pas, l'ajouter au panier
                cart.push({
                    id: productId,
                    name: productName,
                    image: productImage,
                    price: productPrice,
                    quantity: productQuantity
                });
            }

            // Mettre à jour le panier dans le stockage local
            localStorage.setItem('cart', JSON.stringify(cart));

            // Mettre à jour le nombre de produits dans le panier affiché sur la page
            updateCartCount(cart.length);
        }

        // Fonction pour mettre à jour le nombre de produits dans le panier affiché sur la page
        function updateCartCount(count) {
            // Mettre à jour l'élément HTML avec l'ID "cart-count" avec le nouveau nombre de produits
            document.getElementById('cart-count').innerText = count;
        }

        // Exemple d'utilisation : Appeler la fonction addToCart avec l'ID du produit lorsqu'un bouton "Ajouter au panier" est cliqué
        // document.getElementById('add-to-cart-button').addEventListener('click', function() {
        // 	addToCart('productId123'); // Remplacer 'productId123' par l'ID réel du produit
        // });
    </script>


</body>

</html>
