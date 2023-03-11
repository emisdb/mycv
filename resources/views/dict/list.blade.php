@extends('layouts.main')
@section('title-text')
    {{$model['title'][1]}}
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg dear2"></div>
    </nav>
@endsection
@section('content')
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;"
              onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:98px 16px" id="home">
            <h1 class="w3-jumbo"><b>List {{$model['title'][1]}}</b></h1>
            <p>List dictionary.</p>
        </header>
    @include('inc.messages')
    <!-- Form Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <div class="Rtable Rtable--3cols">
            @foreach($model['params'] as $field)
                <div class="Rtable-cell" style="width:{{$field['length']}}0%; background-color: #4a5568; color:#f1f1f1;">{{$field['label']}}</div>
            @endforeach
            <div class="Rtable-cell rc-third" style="background-color: #4a5568; color:#f1f1f1;">
                <a href="{{route("dict-edit",[$model['title'][0],0])}}"><i
                        class="fa fa-plus w3-medium"></i></a>
            </div>
            @foreach($model['dataset'] as $rec)
                    @foreach($model['params'] as $field)
                        <div class="Rtable-cell" style="width:{{$field['length']}}0%;">{{$rec[$field['name']]}}</div>
                    @endforeach
                     <div class="Rtable-cell rc-third">
                        <a href="{{route("dict-edit",[$model['title'][0],$rec['id']])}}"><i
                                class="fa fa-edit w3-medium"></i></a>
                        <a href="{{route("dict-delete",[$model['title'][0],$rec['id']])}}"><i
                                class="fa fa-remove w3-medium"></i></a>
                    </div>
                @endforeach
            </div>

            <hr class="w3-opacity">
        </div>
    </div>
@endsection
