@extends('layouts.main')
@section('title-text')
    edit {{$model['title']['list']}}
@endsection
@section('left')
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        @if(empty($model['title']['bground'][1]))
           <div class="bgimg toes"></div>
        @else
            <div class="bgimg {{$model['title']['bground'][1]}}"></div>
        @endif
    </nav>
@endsection
@section('content')
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;"
              onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Edit record {{$model['title']['list']}}</b></h1>
            @if(isset($path))
                @include('inc.breadcrumb')
            @else
                <p>Edit record.</p>
            @endif
        </header>
    @include('inc.messages')
    <!-- Form Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <?php // var_dump($model); ?>
            <form method="POST" id="main-form"
                  @if(isset($model['dataset']['id']))
                      @if($model['title']['is_mult'])
                        action="{{route("dict.substore" ,[$model['title']['id'],$model['dataset']['id'],$model['dataset'][$model['title']['parent_id']]])}}"
                      @else
                        action="{{route("dict.store",[$model['title']['id'],$model['dataset']['id']])}}"
                      @endif
                  @else
                      @if($model['title']['is_mult'])
                           action="{{route("dict.substore" ,[$model['title']['id'],0,$model['dataset'][$model['title']['parent_id']]])}}"
                      @else
                            action="{{route("dict.store",[$model['title']['id'],0])}}"
                      @endif
                  @endif
            />

            @csrf
            <input type="hidden" name="id" id="id"
                   @if(isset($model['dataset']['id']))
                   value="{{$model['dataset']['id']}}"
                @endif
            />
            @foreach($model['params'] as $field)
                <div class="form-group">
                    @if(!in_array($field['type'],['hidden','datestamp']))
                        <label for="{{$field['name']}}">{{$field['label']}}</label>
                    @endif
                    <input type="{{$field['type'] == 'datestamp' ? 'hidden' : $field['type']}}"
                           name="{{$field['name']}}" id="{{$field['name']}}"
                           @include('inc.formfield')
                           placeholder="{{$field['label']}}" class="form-control"/>
                     @error($field['name'])
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                    @if($field['type'] == 'datestamp')
                        @include('inc.datefield',['name' => $field['name'],
                                                    'label' => $field['label'],
                                                    'selected_month' => isset($model['dataset'][$field['name']]) ? $model['dataset'][$field['name']]['month'] : 0,
                                                    'selected_year' => isset($model['dataset'][$field['name']]) ? $model['dataset'][$field['name']]['year'] : 0 ,
                                                     ])
                    @endif
            @endforeach
            <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <hr class="w3-opacity">
        </div>
    </div>
@endsection
