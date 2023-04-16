@if($counter%2)
    <button  onclick="openDialog('q')"
                     class="time-container time-left w3-button w3-white w3-hover-{{$techs[$proj['tech']]['color']}} w3-border-{{$techs[$proj['tech']]['color']}} w3-round-small w3-padding-small wow wobble animated">
        <div class="time-content w3-{{$techs[$proj['tech']]['color']}}">
            <h2>
                @isset($proj['start'])
                 {{$proj['start']}}
                @endisset
                    -
            @isset($proj['finish'])
                {{$proj['finish']}}
            @endisset
            </h2>
            <p>{{$proj['name']}}</p>
        </div>
    </button>
@else
    <div class="time-container time-right">
        <div class="time-content w3-{{$techs[$proj['tech']]['color']}}">
            <h2>
                @isset($proj['start'])
                    {{$proj['start']}}
                @endisset
                -
                @isset($proj['finish'])
                    {{$proj['finish']}}
                @endisset
            </h2>
            <p>{{$proj['name']}}</p>
        </div>
    </div>
@endif
