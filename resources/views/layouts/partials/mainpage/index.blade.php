<div class="bg-bottom bg-contain bg-no-repeat relative pt-16 pb-20" style="background-image: url(/img/bg.jpg);">
    <div class="absolute inset-x-0 bottom-0 text-primary">
        <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1" preserveAspectRatio="none">
            <path
                d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
        </svg>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
        <div>
            <img src="/img/home.jpg" alt="Дом купить" class="lg:border-8 border-primary shadow-lg">
        </div>
        <div
            class="px-4 pt-4 pb-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl lg:px-8 lg:mt-10 2xl:mt-20 xl:pt-20">
            <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl">
                <h1>
                    {{__('home.h1')}}
                </h1>
                <h3>
                    <mark>
                        {{__('home.first-mark')}}
                    </mark>
                </h3>
                <h4>{{__('home.first-list')}}</h4>
                <div class="card glass card-body p-0 pl-2">
                    <ul class="list-outside">
                        <li>{{__('home.first-list-1')}}</li>
                        <li>{{__('home.first-list-2')}}</li>
                        <li>{{__('home.first-list-3')}}</li>
                    </ul>
                </div>
                @php
                    $cities = __('site.cities')
                @endphp
                <div class="flex justify-center flex-wrap gap-1">
                    @foreach ($cities as $c)
                        @include('components.location-bage', ['name' => $c])
                    @endforeach
                </div>

                <div class="flex justify-center py-8 lg:py-16">
                    <smpl-button txt="{{__('home.first-button')}}" cls="w-full md:w-1/2"></smpl-button>
                </div>
            </div>
        </div>
    </div>
    <span v-scroll-to="'#realtors'"
          class="flex items-center justify-center w-10 h-10 mx-auto duration-300 transform border-4 border-primary rounded-full bg-black hover:text-error hover:shadow hover:scale-110 text-primary"
    >
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 21l-12-18h24z"/>
        </svg>
    </span>

</div>
