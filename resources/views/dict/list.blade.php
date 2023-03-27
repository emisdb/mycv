@extends('layouts.main')
@section('title-text')
    {{$model['title']['list']}}
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        @if(empty($model['title']['bground'][0]))
            <div class="bgimg dear2"></div>
        @else
            <div class="bgimg {{$model['title']['bground'][0]}}"></div>
        @endif
    </nav>
@endsection
@section('content')
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;"
              onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:98px 16px" id="home">
            <h1 class="w3-jumbo"><b>List {{$model['title']['list']}}</b></h1>
            @if(isset($path))
                @include('inc.breadcrumb')
            @else
                <p>List dictionary.</p>
            @endif


        </header>
    @include('inc.messages')
    <!-- Form Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <div class="Rtable Rtable--3cols">
                @foreach($model['params'] as $field)
                    @if($field['length']>0)
                        <div class="Rtable-cell Rtable-header"
                             style="width:{{$field['length']}}0%;">{{$field['label']}}</div>
                    @endif
                @endforeach
                <div class="Rtable-cell Rtable-header rc-last">
                    @if($model['title']['is_mult'])
                        <a href="{{route("dict.create",[$model['title']['id'],isset($id)? $id : 0])}}">
                            <i class="fa fa-plus w3-medium"></i></a>
                    @else
                        <a href="{{route("dict.edit",[$model['title']['id'],0])}}">
                            <i class="fa fa-plus w3-medium"></i></a>
                    @endif

                </div>
                @foreach($model['dataset'] as $rec)
                    @foreach($model['params'] as $field)
                        @if($field['length']>0)
                            <div class="Rtable-cell" style="width:{{$field['length']}}0%;">
                                @if(is_array($rec[$field['name']]))
                                    @include('inc.dd',['var'=>$rec[$field['name']]])
                                 @else
                                    {{ $rec[$field['name']] }}
                                @endif
                            </div>
                        @endif
                    @endforeach
                    <div class="Rtable-cell rc-last">
                        <a href="{{route("dict.edit",[$model['title']['id'],$rec['id']])}}">
                            <i class="fa fa-edit w3-medium"></i>
                        </a>
                        @if(isset($rec['subdict']))
                            @include('inc.dd',['var'=>$rec['subdict']])
                        @endif
                        <a href="{{route("dict.delete",[$model['title']['id'],$rec['id']])}}">
                            <i class="fa fa-remove w3-medium"></i>
                        </a>

                    </div>
                @endforeach
            </div>
            <hr class="w3-opacity">
        </div>
    </div>
@endsection
