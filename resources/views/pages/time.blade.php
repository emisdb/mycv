@extends('layouts.main-x')
@include('inc.cv-button')
@include('inc.menu-button')
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
    <div class="w3-main w3-padding-large  skill-bg">
        @yield('menu-button')
        <!-- Header -->
        <header class="w3-container w3-center   w3-animate-zoom" style="padding:128px 16px" id="home">
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
                <?php $side = ($counter++ % 2) ? 'left' : 'right'; ?>
                @include('pages.proj',['proj'=>$proj, 'techs' => $model['techs'], 'side' => $side])
            @endforeach
        </div>
        @include('pages.proj_popups' )
        <hr class="w3-opacity">
    </div>
@endsection
