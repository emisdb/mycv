   in
    @empty($data['names']['link'])
        {{$data['names']['name']}} {{$data['names']['location'] ? '('.$data['names']['location'].')' : ''}}
    @else
        <a href="{{$data['names']['link']}}" target="_blank">
            {{$data['names']['name']}} {{$data['names']['location'] ? '('.$data['names']['location'].')' : ''}}
        </a>
    @endempty




