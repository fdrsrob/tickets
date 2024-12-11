@extends('layouts.app')
@section('title', 'Properties')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @livewire('properties.show')
    </div>
@endsection