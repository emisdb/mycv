<div class="w3-content w3-display-container">
    @foreach($topics as $topic)
        @if($topic['name']=='slides')
            @foreach($topic['ideas'] as $idea)
                <div class="w3-display-container mySlides{{$id}}" style="display:none;">
                    <img src="/images/projects/{{$topic['description']}}/{{$idea['name']}}" style="width:100%">
                    <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
                        {{$idea['description']}}
                    </div>
                </div>
            @endforeach
        @endif
    @endforeach

     <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>
