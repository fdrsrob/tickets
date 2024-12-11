@extends('layouts.app')
@section('title', __('States'))
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @livewire('states.show')
        @livewire('states.create')
    </div>
@endsection