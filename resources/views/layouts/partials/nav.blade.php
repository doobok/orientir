<div>
    <div class="w-full z-50 bg-black top-0 py-3 absolute">
        <div class="mx-4 flex justify-between items-center">
            <div class="ml-2">
                <a href="/" class="text-2xl text-white font-bold">
                    {{-- {{config('app.name')}} --}}
                    <img src="/img/logo_v2.svg"
                         class="h-12 md:h-16"
                         alt="{{config('app.name')}}">
                </a>
            </div>
            <div class="hidden xl:block">
                <ul class="list-none flex items-center">

                    @if ($blocks)
                        @foreach ($blocks as $block)
                            @if ($block['menu'])
                                <li class="group pl-6">
                        <span v-scroll-to="'#{{$block['name']}}'"
                              class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">
                          {{__('site.menu-' . $block['name'])}}
                        </span>
                                    <span class="block w-full h-0.5 bg-transparent group-hover:bg-orange"></span>
                                </li>
                            @endif
                        @endforeach
                    @endif
                    <li class="list-none group pl-16">
                        <a href="tel:+38{{preg_replace('/[^\d]/', '', config('var.phone'))}}"
                           class="font-header font-semibold text-2xl text-white uppercase pt-0.5 cursor-pointer flex flex-nowrap align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 mt-1" width="24" height="24"
                                 viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.5 17.311l-1.76-3.397-1.032.505c-1.12.543-3.4-3.91-2.305-4.497l1.042-.513-1.747-3.409-1.053.52c-3.601 1.877 2.117 12.991 5.8 11.308l1.055-.517z"/>
                            </svg>
                            {{config('var.phone')}}
                        </a>

                    </li>

                </ul>
            </div>
            <div class="block xl:hidden">
                <button class="absolute top-0 right-0 mt-4 mr-4"
                        onclick="toggleNavbar('collapse-navbar')"
                >
                    <img src="/img/menu.svg"
                         class="h-7 w-auto"
                         alt="">
                </button>
            </div>
        </div>
    </div>

    <div id="collapse-navbar"
         class="fixed hidden inset-0 bg-black bg-opacity-80 z-50 min-h-screen xl:hidden transition-opacity opacity-100 pointer-events-auto">
        <div class="w-2/3 md:w-1/3 bg-primary min-h-screen absolute right-0 shadow py-4 px-8">
            <button class="absolute top-0 right-0 mt-4 mr-4"
                    onclick="toggleNavbar('collapse-navbar')"
            >
                <img src="/img/icon-close.svg"
                     class="h-10 w-auto"
                     alt="">
            </button>

            <ul class="list-none flex flex-col mt-8">
                @if ($blocks)
                    @foreach ($blocks as $block)
                        @if ($block['menu'])
                            <li class="py-2">
                                <a href="#" v-scroll-to="'#{{$block['name']}}'"
                                   onclick="toggleNavbar('collapse-navbar')"
                                   class="font-header font-semibold text-primary-content uppercase pt-0.5 cursor-pointer">
                                    {{__('site.menu-' . $block['name'])}}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif

                <li class="group pt-8">
                    <a href="tel:+38{{preg_replace('/[^\d]/', '', config('var.phone'))}}"
                       class="font-header font-semibold text-base text-primary-content uppercase pt-0.5 cursor-pointer flex flex-nowrap inline-block align-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="24" height="24" viewBox="0 0 24 24"
                             fill="currentColor">
                            <path
                                d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.5 17.311l-1.76-3.397-1.032.505c-1.12.543-3.4-3.91-2.305-4.497l1.042-.513-1.747-3.409-1.053.52c-3.601 1.877 2.117 12.991 5.8 11.308l1.055-.517z"/>
                        </svg>
                        <span>{{config('var.phone')}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
