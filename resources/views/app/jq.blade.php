@extends('layouts.appfront')

@section('content')
    <div class="container">
        <h2>Elevator Simulation jQuery</h2>
        <div class="elevator-layout">
            <div class="floor-labels"></div>
            <div class="elevator-columns"></div>
            <div class="call-buttons"></div>
        </div>
    </div>
@endsection
@section('brand')
 jQuery v.3.6.0   Laravel v.{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/jq.css') }}">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/jq.js') }}"></script>
@endpush
