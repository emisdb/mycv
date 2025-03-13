@extends('layouts.main')
@include('inc.cv-button')
@section('title-text')
    My CV
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg skill"></div>
    </nav>
@endsection

@section('content')
    <div class="w3-main w3-padding-large  skill-bg" style="min-height: 100vh; ">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <!-- Header -->
        <header class="w3-container w3-center  w3-animate-zoom" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Contact</b></h1>
            <p>Preferable contact WhatsApp and Telegram</p>
            @yield('cv-button')
        </header>

        <table  class="w3-card-4 w3-margin-bottom w3-animate-top w3-black w3-padding-16" id="contact-table">
            <tr><th>currently resided</th><td>Batumi</td><td>Georgia</td></tr>
            <tr><th>nationality</th><td>Saint Petersburg</td><td>Russia</td></tr>
            <tr><th>WhatsApp:</th><td><a href="https://wa.me/79219428310">emisdb</a></td><td>prefered</td></tr>
            <tr><th>Telegram:</th><td><a href="https://t.me/dentsi">@dentsi</a></td><td>prefered</td></tr>
            <tr><th>Skype:</th><td><a href="skype:denis_emis">denis_emis</a></td><td></td></tr>
            <tr><th>Phone:</th><td>+7 (921) 942-8310</td><td><b>use WhatsApp or Telegram</b></td></tr>
            <tr><th>E - mail:</th><td><a href="mailto:dentsi@yahoo.com" >dentsi@yahoo.com</a></td><td></td></tr>
            <tr><th>Web-site</th><td><a href="http://www.emisdb.ru" target="_blank">www.emisdb.ru</a></td><td>corp.</td></tr>
        </table>
        <hr class="w3-opacity">
    </div>

@endsection
