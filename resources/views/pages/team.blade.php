@extends('layouts.main')
@include('inc.cv-button')
@section('title-text')
    My CV
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
    <div class="flip-box">
        <div class="flip-box-inner">
            <div class="flip-box-front bgimg team">
                <h2>Mission</h2>
            </div>
            <div class="flip-box-back bgimg team-over">
                <h2>Acomplished</h2>
            </div>
        </div>
    </div>
    </nav>
@endsection

@section('content')
    <div class="w3-main w3-padding-large  modern-bg">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center  w3-animate-zoom" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Portfolio of team work</b></h1>
            <p>Timeline of the projects I took part in</p>
            @yield('cv-button')
        </header>

        <!-- Timeline Section -->
        <?php
        $topic = 0;
        $counter = 0;
        ?>
        <div class="flex-container">
        <ul class="w3-ul  w3-card-4 w3-margin-bottom">
            @foreach($model['techs'] as $key => $tech)
                <li class="w3-{{$tech['color'][0]}}">{{$tech['name']}}</li>
            @endforeach
        </ul>
        </div>
        <div class="timeline">
            @foreach($model['data'] as $proj)
                <?php $side = ($counter++ % 2) ? 'left' : 'right'; ?>
                @include('pages.proj',['proj'=>$proj, 'techs' => $model['techs'], 'side' => $side])
            @endforeach

        </div>
        @include('pages.proj_popups' )
        <hr class="w3-opacity">

    </div>

@endsection
