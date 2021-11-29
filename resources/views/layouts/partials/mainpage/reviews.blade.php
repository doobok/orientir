{{--<div class="relative bg-primary">--}}
{{--    <div class="absolute inset-x-0 bottom-0 text-white">--}}
{{--        <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1" preserveAspectRatio="none">--}}
{{--            <path--}}
{{--                d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>--}}
{{--        </svg>--}}
{{--    </div>--}}
{{--    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-20">--}}
{{--        <div class="max-w-2xl mb-10 md:mx-auto sm:text-center lg:max-w-3xl md:mb-12">--}}
{{--            <h2>--}}
{{--                Как мы работаем--}}
{{--            </h2>--}}
{{--            <h4>--}}
{{--                <mark class="bg-yellow-100">--}}
{{--                    Четыре простых шага в приобретении собственного дома--}}
{{--                </mark>--}}
{{--            </h4>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div id="reviews" class="bg-primary text-primary-content relative">
    <div class="absolute inset-x-0 bottom-0 text-white">
        <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1" preserveAspectRatio="none">
            <path
                d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
        </svg>
    </div>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
        <div class="max-w-2xl mb-10 md:mx-auto sm:text-center lg:max-w-3xl md:mb-12">
            <h2>
                Отзывы
            </h2>
            <h4>
                <mark class="bg-yellow-100">
                    короткие слова благодарности от наших клиентов
                </mark>
            </h4>
            <div class="my-8">
                @for($r=0; $r<7; $r++)
                    @include('components.review', [
                        'text' => 'lorem',
                        'image' => 'http://daisyui.com/tailwind-css-component-profile-1@94w.png',
                    ])
                @endfor
            </div>
        </div>
    </div>
</div>
