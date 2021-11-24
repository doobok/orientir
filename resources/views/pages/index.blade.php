@extends('app')

@section('head')
@component('components.meta')

  @slot('title') {{config('app.name')}} @endslot
  @slot('description') Desc @endslot
  @slot('image') /main.jpg @endslot
  @slot('date') @endslot

@endcomponent
@endsection

@section('main')

@include('layouts.partials.nav')

{{--@include('layouts.partials.mainpage.firstscreen')--}}
@include('layouts.partials.mainpage.index')

@foreach ($blocks as $block)
  @include('layouts.partials.mainpage.' . $block['name'])
@endforeach

{{--@include('layouts.partials.mainpage.endscreen')--}}

@endsection
