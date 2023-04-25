<div id="{{$name}}-content" style="display:none">
    <h4 class="w3-center">{{$format['title']}}</h4>
    @if(count($format['content'])==2)
        @foreach($format['content'] as $column)
            <div class="w3-half m6">
                <div class="w3-container w3-padding-small">
                    @foreach($column as $li)
                        @if($loop->first)
                            <h5 class="w3-center">{{$li}}</h5>
                            <ol class="w3-ul w3-card-4 w3-hoverable">
                        @else
                                    <li class="w3-hover-text-black">{{$li}}</li>
                        @endif
                    @endforeach
                            </ol>
                </div>
            </div>
        @endforeach
    @else
        <div class="w3-container m12">
            <div class="w3-container w3-padding-small">
                @foreach($format['content'][0] as $li)
                    @if($loop->first)
                        <h5 class="w3-center">{{$li}}</h5>
                        <ol class="w3-ul w3-card-4 w3-hoverable">
                    @else
                                <li class="w3-hover-text-black">{{$li}}</li>
                    @endif
                @endforeach
                </ol>
            </div>
        </div>
    @endif
</div>

