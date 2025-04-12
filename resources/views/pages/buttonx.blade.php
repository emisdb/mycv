<span onclick="openDialog('{{$name}}')"
         class="w3-button w3-white w3-hover-{{$color}} w3-border w3-border-{{$color}} w3-round-large w3-padding-small wow wobble animated tech-label"
       style="cursor: pointer;user-select: text !important;">
    @foreach($text as $ph)
        @if($ph['type'] == 'badge')
            <span class="badge">{{$ph['data'] }}</span>
        @else
            {{$ph['data'] }}
        @endif
    @endforeach
</span>


