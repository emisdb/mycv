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
            <h1 class="w3-jumbo"><b>My individual project</b></h1>
            <p>Timeline of the acomplished projects</p>
            @yield('cv-button')
        </header>

        <!-- Timeline Section -->
        @include('pages.proj_popup',['proj' => $model, 'color' => 'blue', 'name' =>$id])
        <hr class="w3-opacity">
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", (event) => {
                var div = document.querySelector("#<?= "proj".$id."-content" ?>");
                if(div){
                    div.style.display = "block";
                }
            });
        </script>
    </div>
@endsection

