<div id="about" class="relative py-12 lg:py-20">
    <div class="absolute inset-x-0 bottom-0 text-primary">
        <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1" preserveAspectRatio="none">
            <path
                d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
        </svg>
    </div>
    <div class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-2xl md:px-24 lg:px-8 lg:py-20">
        <div class="flex flex-col lg:flex-row justify-center items-center">
            <div class="w-full md:w-1/3">
                <img src="/img/photo.jpg"
                     class="w-full"
                     alt="Orientir">
            </div>
            <div class="lg:pl-24 pt-8 sm:pt-10 lg:pt-0">
                <h2>
                    {{__('home.about-h2')}}
                </h2>
                <h4>
                    <mark>
                        {{__('home.about-mark')}}
                    </mark>
                </h4>
                <div>
                    {!! __('home.about-text') !!}
                    <div class="flex justify-center py-4 lg:py-8">
                        <smpl-button txt="{{__('home.about-button')}}" cls="w-full md:w-2/3"></smpl-button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
