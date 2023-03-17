    @switch($var['type'])
    @case('link')
        <a href="{{route($var['route'],$var['params'])}}">{{$var['name']}} </a>
       @break

    @case('text')
    @break

    @default
    @endswitch





