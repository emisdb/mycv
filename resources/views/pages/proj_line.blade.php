@foreach($details as $detail)
    @if($detail['name']==$name)
        {{$detail['description']}}
    @endif
 @endforeach



