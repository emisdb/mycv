@extends('layouts.main')
@include('inc.cv-button')
@section('title-text')
    My skills
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg skill"></div>
    </nav>
@endsection

@section('content')
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black"
              style="width:auto;right:0;" onclick="openNav()">
            <i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Skills</b></h1>
            <p>Skills I acquired and exercised</p>
            @yield('cv-button')
        </header>
        <?php
        $topic = 0;
        $counter = 0;
        ?>
        <div class="w3-button w3-large w3-block w3-light-gray w3-left-align w3-bottombar w3-header" >
            <div class="flex-container">
                <div class="flex-left">
                    <h2 style="font-weight:bold; ">Technologies, systems</h2>
                </div>
                <div>
                    <h4 style="text-align:center;">Started<br> at</h4>
                </div>
                <div>
                    <h4 style="text-align:center;">Period<br>(years,months)</h4>
                </div>
            </div>
        </div>

       @foreach($model as $item)
            @if($topic != $item['c_id'])
                <?php
                $topic = $item['c_id'];
                 ?>
                <h3>{{$item['c_desc']}}</h3>
            @endif
            <button onclick="accFunction('t{{$item['id']}}')" class="w3-button w3-large w3-block w3-dark-grey w3-left-align w3-bottombar wow wobble animated"
                    style="visibility: visible;">
                <div class="flex-container">
                    <div class="flex-left">
                        @if(isset($item['pic']))
                            @if(substr($item['pic'],0,3) == 'fa ')
                                <i class="{{$item['pic']}} w3-xlarge" style="margin-right: 8px;"></i>
                            @else
                                <img src="images/symbols/{{$item['pic']}}" style="width:35px;margin-right: 8px;" />
                            @endif
                        @endif
                        {{$item['name']}}
                    </div>
                    <div>
                        @isset($item['start'])
                            {{$item['start']}}
                        @endisset
                    </div>
                    <div>
                        @isset($item['length'])
                            {{$item['length']}}
                        @endisset
                    </div>
                </div>
            </button>
            <div id="t{{$item['id']}}" class="w3-hide <?php echo ($counter++)%2 ? "w3-animate-left" : "w3-animate-right"; ?> w3-white accordion">
                    {!! $item['description'] !!}
             </div>
        @endforeach
     </div>
@endsection
