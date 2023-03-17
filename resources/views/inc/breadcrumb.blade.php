<ul class="breadcrumb">
    <li><a href="{{route("dict.uix",[$model['title'][0]])}}">
            <i  class="fa fa-share-square-o w3-large"></i>
        </a></li>
    @if(is_array($path))
        @foreach($path as $item)
            <li>
                @if(is_array($item))
                    @include('inc.dd',['var'=>$item])
                @else
                    {{ $item }}
                @endif
            </li>
        @endforeach
    @endif
</ul>





