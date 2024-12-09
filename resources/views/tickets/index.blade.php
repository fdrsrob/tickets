@extends('layouts.app')
@section('title', 'Tickets')
@section('content')
    <div class="container-xxl">
        @livewire('tickets.show')
    </div>
@endsection