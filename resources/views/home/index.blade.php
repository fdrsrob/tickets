@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="containter-xxl flex-grow-1 container-p-y">
        @livewire('home.show')
    </div>
@endsection