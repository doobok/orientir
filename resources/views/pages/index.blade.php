@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') {{__('home.title')}} @endslot
        @slot('description') {{__('home.desc',
            ['phone' => config('var.phone')]
        )}} @endslot
        @slot('image') /img/home.jpg @endslot
        @slot('date') @endslot

    @endcomponent
@endsection

@section('main')

    @include('layouts.partials.nav')

    @include('layouts.partials.mainpage.index')

    @foreach ($blocks as $block)
        @include('layouts.partials.mainpage.' . $block['name'])
    @endforeach

@endsection
