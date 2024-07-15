{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}

@extends('themes.theme1.layout.app')

@section('content')
<div class="not-found d-flex align-items-center padding-30">
    <div class="container text-center">
        <h1 class="mb-4 mt-0 font-black">404 Not Found</h1>
        <p class="mb-4">Oops, the page you are looking for does not exist.</p>
    <a href="{{route('home')}}" class="btn btn-default"><i class="fa-sharp fa-solid fa-house" aria-hidden="true"></i> Return Home</a></div>
</div>
@endsection
