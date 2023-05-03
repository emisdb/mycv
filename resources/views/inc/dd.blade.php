@switch($var['type'])
    @case('link')
        <a href="{{route($var['route'],$var['params'])}}">
            @if(empty($var['value']))
                <i class="fa fa-mail-forward w3-medium">
                    <span class="badge badge-secondary">{{$var['count']}}</span>
                </i>

            @else
                {{$var['value']}}
            @endif

        </a>
        @break
    @case('datestamp')
        {{$var['date']}}({{$var['value']}})
        @break
    @case('text')
    @break

    @default
@endswitch





