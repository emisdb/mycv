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

        <!-- Portfolio Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <h2 class="w3-text-grey">About me</h2>
            <p>I am a web programmer from Russia currently located in Batumi, Republic of Georgia.</p>
            <p>The professional programmer with the experience of <span class="badge">25 years</span>.</p>
            <p>During last 15 years I specialize at the field of web-programming.</p>
            <p>My tech stack is Backend development on
                <button  onclick="openDialog('gray')"
                         class="w3-button w3-white w3-hover-gray w3-border w3-border-gray w3-hover-text-white w3-round-large w3-padding-small wow wobble animated">
                    <i>PHP <span class="badge">15 years</span></i>
                </button>
                with the use of
                <button  onclick="openDialog('blue')"
                         class="w3-button w3-white w3-hover-blue w3-border w3-border-blue w3-round-large w3-padding-small  wow wobble animated">
                <i>Yii and Yii2 framework<span class="badge">8 years</span></i>
            </button>
            .
            </p>
            <p>Good knowledge of
                <button  onclick="openDialog('pink')"
                         class="w3-button w3-white w3-hover-pink w3-border w3-border-pink w3-round-large w3-padding-small wow wobble animated">
                    <i>Laravel <span class="badge">2 years</span></i>
                </button>
                .
            </p>
            <p>
                Frontend development is based on the traditional basis:
                <button  onclick="openDialog('yellow')"
                         class="w3-button w3-white w3-hover-yellow  w3-hover-text-gray w3-border w3-border-yellow w3-round-large w3-padding-small  wow wobble animated">
                    <i>HTML, CSS, JS with jQuery and Bootstrap framework</i>
                </button>
                I have some practice in
                <button  onclick="openDialog('green')"
                         class="w3-button w3-white w3-hover-green w3-border w3-border-green w3-round-large w3-padding-small  wow wobble animated">
                    <i>Vue.js <span class="badge">2 years</span></i>
                </button>
               .
            </p>
            <p>
                Numerous projects were implemented both by
                <a href="{{ route('timeline') }}">
                    the individual efforts
                </a>
                and as
                <a href="{{ route('team') }}">
                    a part of the team
                </a>
                .
            </p>
            <p>
                My development practice is built on the SOLID principles and based on the design patterns accepted as the common practice in contemporary programming.
                The use of MVC pattern in the framework allows to create a clear and easily adopted code. It also leaves open the possibility to preserve the flexibility of the technology.
            </p>
            <p>
                During my extensive practice as the software engineer I handled many different
                <button  onclick="openDialog('pink')"
                         class="w3-button w3-white w3-hover-pink w3-border w3-border-pink w3-round-large w3-padding-small wow wobble animated">
                    <i>common tasks and problems</i>
                </button>
                .
            </p>
            <p>
                In many team projects I had experience to work with the Legacy systems and handled quite tangled technological solutions.
            </p>
             <p>
                I have experience in creating and editing existing sites based on CMS Joomla and Wordpress.
            </p>
            <p>
                Big experience in REST API development and other side API integration.
            <p>
                The project development basically is conducted in local environment provided by the Docker with the extensive use of Git flow and CI/CD tools.
            </p>
                For last 7 years I was involved in the team work based on the Agile principles with the Scrum style process. Wide variety of project management tools (Gira, Rally, Trello, Redmine) and communication tools (Slack, Google and Office 365) were practiced during this period.

            </p>
            <hr class="w3-opacity">
        </div>
    </div>
@include('inc.modals_index')
@endsection

{{--@yield('modals_index')--}}
