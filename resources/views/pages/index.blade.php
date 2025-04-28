@extends('layouts.main')
@include('inc.cv-button')
@include('inc.menu-button')
{{--@include('inc.modals_index')--}}
@section('title-text')
    My CV
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg"></div>
    </nav>
@endsection
@section('content')
    <div class="w3-main w3-padding-large front-bg">
        @yield('menu-button')
        <!-- Header -->
        <header class="w3-container w3-center  w3-animate-zoom" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Denis Tsybulia</b></h1>
            <p>Senior Software Engineer.</p>
            <p>Web application developer.</p>
            <p>Backend PHP programmer.</p>
            @yield('cv-button')

        </header>

        <!-- Portfolio Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <h2 class="w3-text-grey">About me</h2>
            @foreach($model as $rec)
                <div>
                    @foreach($rec as $ph)
                        @include('pages.paragraph',['ph'=>$ph] )
                    @endforeach
                </div>
            @endforeach
            <hr class="w3-opacity">
        </div>
    </div>
    @include('pages.popups2' )
@endsection

{{--@yield('modals_index')--}}
