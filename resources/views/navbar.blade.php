<nav class="relative flex w-full flex-nowrap items-center justify-between bg-gray-100 py-2 shadow-dark-mild lg:flex-wrap lg:justify-start lg:py-4 shadow-xl"
    data-twe-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">

        <button
            class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
            type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent5"
            aria-controls="navbarSupportedContent5" aria-expanded="false" aria-label="Toggle navigation">

            <span class="[&>svg]:w-7 [&>svg]:stroke-black/50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>

        <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
            id="navbarSupportedContent5" data-twe-collapse-item>

            <ul class="list-style-none me-auto flex flex-col ps-0 lg:mt-1 lg:flex-row" data-twe-navbar-nav-ref>
                <li class="my-4 ps-2 mx-4 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
                    <a class="text-black" aria-current="page" href="{{ route('flight.index') }}"
                        data-twe-nav-link-ref>Home</a>
                </li>
                <li class="my-4 ps-2 mx-4 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
                    <a class="text-black" aria-current="page" href="{{ route('flight.index') }}"
                        data-twe-nav-link-ref>Flights</a>
                </li>
                <li class="my-4 ps-2 mx-4 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
                    <a class="text-black" aria-current="page" href="{{ route('flight.index') }}"
                        data-twe-nav-link-ref>More</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
