@extends('layouts.default')

@section('content')

  <div class="colorlib-loader"></div>

  <div id="page">

      @include('partials.navbar')

	  <aside id="colorlib-hero">
              @include('partials.roomslide')
	  </aside>

	@include('partials.roomall')



 @include('partials.scripts')


@stop
