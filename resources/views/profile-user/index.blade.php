@extends('layouts.app')
@section('title', 'Usuarios')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @livewire('profile-user.show')
        @livewire('profile-user.create')
    </div>
@endsection