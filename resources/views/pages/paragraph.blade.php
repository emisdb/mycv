@if($ph['type'] == 'text')
    {{ $ph['data'] }}
@elseif($ph['type'] == 'badge')
    <span class="badge">{{$ph['data'] }}</span>
@elseif($ph['type'] == 'ul')
    <ul>
        @include('pages.list',['list' => $ph['data'],])
    </ul>
@elseif($ph['type'] == 'link')
    <a href="{{ route($ph['route']) }}">
        {{$ph['data'] }}
    </a>
@elseif($ph['type'] == 'pop')
    @include('pages.button',[
            'name' => $ph['data'],
             'text' => $ph['text']['text'],
            'color' => $ph['text']['color'],
            ])
@else
    {{ $ph['data'] }}
@endif



