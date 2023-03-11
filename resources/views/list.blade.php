@extends('layouts.main')
@section('title-text')
    {{$tab ?? "features"}}
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg dear"></div>
    </nav>
@endsection
@section('content')
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;"
              onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>List {{$params['title'][0]}}</b></h1>
            <p>List table.</p>
        </header>
    @include('inc.messages')
    <!-- Form Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <div class="Rtable Rtable--3cols">
                @foreach($dataset as $rec)
                    <div class="Rtable-cell rc-first">{{$rec[$params['fields'][0]]}}</div>
                    <div class="Rtable-cell rc-second">{{$rec[$params['fields'][1]]}}</div>
                    <div class="Rtable-cell rc-third">
                        <a href="{{route("dict-edit",[$params['title'][1],$rec['id']])}}"><i
                                class="fa fa-edit w3-medium"></i></a>
                        <a href="{{route("dict-delete",[$params['title'][1],$rec['id']])}}"><i
                                class="fa fa-remove w3-medium"></i></a>
                    </div>
                @endforeach
            </div>

            <hr class="w3-opacity">
        </div>
    </div>
@endsection
