@extends('layouts.main-x')
@include('inc.cv-button')
@include('inc.menu-button')
@section('title-text')
    Education
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg edu"></div>
    </nav>
@endsection

@section('content')
    <div class="w3-main w3-padding-large warm-bg">
        @yield('menu-button')
        <!-- Header -->
        <header class="w3-container w3-center  w3-animate-zoom" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Education</b></h1>
            <p>Education and training</p>
            @yield('cv-button')
        </header>
        <?php
        $topic = 0;
        $counter = 0;
        $open = 1;
        ?>
        <div class="w3-button w3-large w3-block w3-light-gray w3-left-align w3-bottombar w3-header">
            <div class="flex-container">
                <div class="flex-left">
                    <h2 style="font-weight:bold; ">College, Organization</h2>
                </div>
                <div>
                    <h4 style="text-align:center;">Started</h4>
                </div>
                <div>
                    <h4 style="text-align:center;">Finished</h4>
                </div>
            </div>
        </div>

        @foreach($model as $item)
            @if($topic != $item['c_id'])
                    <?php
                    $topic = $item['c_id'];
                    ?>
                @if($open == 0)
                    </div>
               @endif
               <?php $open = 0; ?>
               <div data-aos="fade-up" data-aos-delay="200">
               <h3>{{$item['c_desc']}}</h3>
            @endif
        <div onclick="accFunction('t{{$item['id']}}')"
             class="w3-button w3-large w3-block w3-dark-grey w3-left-align w3-bottombar animated"
             style="visibility: visible;">
            <div class="flex-container">
                <div class="flex-left">
                    @if(isset($item['pic']))
                        @if(substr($item['pic'],0,3) == 'fa ')
                            <i class="{{$item['pic']}} w3-xlarge" style="margin-right: 8px;"></i>
                        @else
                            <img src="images/symbols/{{$item['pic']}}" style="width:35px;margin-right: 8px;"/>
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
                    @isset($item['finish'])
                        {{$item['finish']}}
                    @endisset
                </div>
            </div>
        </div>
        <div id="t{{$item['id']}}"
             class="w3-hide <?php echo ($counter++)%2 ? "w3-animate-left" : "w3-animate-right"; ?> w3-white accordion">
            {!! $item['description'] !!}
        </div>
        @endforeach
         </div>
    </div>
@endsection
