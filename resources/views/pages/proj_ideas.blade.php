@foreach($topics as $topic)
    <h5>{{$topic['description']}}</h5>
    <ul class="w3-ul  w3-card-4 w3-margin-bottom">
        @foreach($topic['ideas'] as $idea)
            <li><b>{{$idea['name']}}:</b> {{$idea['description']}}</li>
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
                <li>{{$det}}</li>
            @endforeach
        </ul>
    @endif
@endforeach



