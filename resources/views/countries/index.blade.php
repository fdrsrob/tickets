@extends('layouts.app')
@section('title', __('Countries'))
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @livewire('countries.show')
        @livewire('countries.create')
    </div>
@endsection