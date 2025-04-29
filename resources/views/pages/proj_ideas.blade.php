@foreach($topics as $topic)
    @if($topic['name']=='slides')
        @continue
    @endif
    <h5>{{$topic['description']}}</h5>
    <ul class="w3-ul  w3-card-4 w3-margin-bottom">
        @foreach($topic['ideas'] as $idea)
            <li><b>{{$idea['name']}}:</b>
                @if(strpos($idea['description'],"href")>0)
                    {!!$idea['description']!!}
                @else
                    {{$idea['description']}}
                @endif
            </li>
        @endforeach
    </ul>
@endforeach
@foreach($details as $detail)
    @if(substr($detail['name'],-6)=='_ideas')
        <?php
        $name = substr($detail['name'], 0, strlen($detail['name']) - 6);
        ?>
        <h5>{{$detail['description']}}</h5>
        <ul class="w3-ul  w3-card-4 w3-margin-bottom">
            @foreach($detail[$name] as $det)
                <li>{{$det['description']}}</li>
            @endforeach
        </ul>
    @endif
@endforeach
