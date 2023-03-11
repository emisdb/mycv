@extends('layouts.main')
@section('title-text')
    edit {{$model['title'][1]}}
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
            <h1 class="w3-jumbo"><b>Edit record {{$model['title'][1]}}</b></h1>
            <p>Edit record.</p>
        </header>
        @include('inc.messages')
        <!-- Form Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <form method="POST" action="/store/{{$model['title'][0]}}/{{$model['dataset']['id']}}">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$model['dataset']['id']}}" />
               @foreach($model['params'] as $field)
                    <div class="form-group">
                        <label for="{{$field['name']}}">{{$field['label']}}</label>
                       <input type="text" name="{{$field['name']}}" id="{{$field['name']}}" value="{{$model['dataset'][$field['name']]}}" placeholder="{{$field['label']}}" class="form-control" />
                        @error($field['name'])
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
