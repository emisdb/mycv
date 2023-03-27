@extends('layouts.main')
@include('inc.cv-button')
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
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Denis Tsybulia</b></h1>
            <p>Web application developer.</p>
            @yield('cv-button')
        </header>
    <?php $line = "The professional programmer with the <POP_experience:total_sand> experience of <label> 25 years </label> </POP>."; ?>
        @include('inc.parse', ['sample' => $line ])
    </div>
@endsection

{{--@yield('modals_index')--}}
