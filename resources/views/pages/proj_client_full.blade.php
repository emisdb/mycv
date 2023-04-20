<h4>
    in
    @empty($data['names']['link'])
        {{$data['names']['name']}} {{$data['names']['location'] ?? '('.$data['names']['location'].')'}}
    @else
        <a href="{{$data['names']['link']}}" target="_blank">
            {{$data['names']['name']}} {{$data['names']['location'] ?? '('.$data['names']['location'].')'}}
        </a>
    @endempty
</h4>
@if(!empty($data['other']))
    <ul class="w3-ul">
        @foreach($data['other'] as $key => $entr)
            <li>{{$key}}: {{$entr}}</li>
        @endforeach
    </ul>
@endif




