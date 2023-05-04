@switch($var['type'])
    @case('link')
    <a href="{{route($var['route'],$var['params'])}}">
        @if(empty($var['value']))
            <i class="fa fa-mail-forward w3-medium">
                <span class="badge badge-secondary">{{$var['count']}}</span>
            </i>
        @else
            {{$var['value']}}
            @if(isset($rec['topics_count'])&&($rec['topics_count']>0))
                <span class="badge badge-secondary" style="margin-left: -2px;">{{$rec['topics_count']}}</span>
            @endif
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





