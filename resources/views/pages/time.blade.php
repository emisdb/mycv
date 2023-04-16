@extends('layouts.main')
@include('inc.cv-button')
@section('title-text')
    My CV
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg time"></div>
    </nav>
@endsection

@section('content')
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;"
              onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Portfolio of personal work</b></h1>
            <p>Timeline of the acomplished projects</p>
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
                @include('pages.proj',['proj'=>$proj, 'techs' => $model['techs'], 'counter' => $counter])
                <?php $counter++ ?>
            @endforeach
        </div>
        @include('pages.popup_proj' )
        <hr class="w3-opacity">
    </div>
@endsection
