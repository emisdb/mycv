@extends('layouts.main')
@section('title-text')
    My Form
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg toes"></div>
    </nav>
@endsection
@section('content')
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Edit record {{$model['title']['list']}}</b></h1>
            <p>Edit record.</p>
        </header>
        @include('inc.messages')
        <!-- Form Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <form method="POST" action="/{{$model['title']['id']}}">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$model['data']['id']}}" />
               @foreach($model['params']['fields'] as $field)
                    <div class="form-group">
                        <label for="{{$field}}">{{$model['params']['labels'][$field]}}</label>
                        <input type="text" name="{{$field}}" id="{{$field}}" value="{{$model['data'][$field]}}" placeholder="{{$model['params']['labels'][$field]}}" class="form-control" />
                        @error($field)
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                @endforeach
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <hr class="w3-opacity">
        </div>
    </div>
@endsection
