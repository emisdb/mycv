   <div class="time-container <?php echo ($counter%2) ? 'time-left' : 'time-right'; ?> " onclick="openDialog('q')" style="cursor:pointer;">
        <div class="time-content w3-{{$techs[$proj['tech']]['color'][0]}} w3-hover-{{$techs[$proj['tech']]['color'][1]}}
            w3-border w3-border-{{$techs[$proj['tech']]['color'][1]}} w3-round-small w3-padding-small wow wobble animated">
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
