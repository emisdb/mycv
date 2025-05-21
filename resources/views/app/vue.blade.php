@extends('layouts.appfront')

@section('content')
    <div class="container">
        <div id="app"></div>
    </div>

@endsection
@section('brand')
    Vue.Js v.3   Laravel v.{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
@endsection
@push('styles')

@endpush

@push('scripts')
    <script src="{{ mix('js/vue.js') }}"></script>
@endpush
