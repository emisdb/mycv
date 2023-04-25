<div id="proj{{$name}}-content" style="display:none">
    <h4 class="w3-center">
        @include('pages.proj_line',['details'=>$proj['details'],'name'=>'name'])
        @if(!empty($proj['client']['names']))
            @include('pages.proj_client', ['data' => $proj['client']] )
        @endif
    </h4>
    <div class="w3-col m5">
        <div class="w3-container w3-padding-small">
            <h5> @include('pages.proj_time') </h5>
            <ul class="w3-ul  w3-card-4 w3-margin-bottom">
                <li>   @include('pages.proj_detail') </li>
                @if(!empty($proj['client']['names']))
                    <li> @include('pages.proj_client', ['data' => $proj['client']] ) </li>
                @endif
                <li>   @include('pages.proj_line',['details'=>$proj['details'],'name'=>'position'])</li>
                <li>   @include('pages.proj_techs',['details'=>$proj['techs']])</li>
            </ul>
            @include('pages.proj_ideas',['details'=>$proj['details'],'topics'=>$proj['topics']])

        </div>
    </div>
    <div class="w3-col m7">
        <div class="w3-container w3-padding-small">
            @include("pages.proj_slider3",['id'=>$name,'topics'=>$proj['topics']])
        </div>
    </div>
</div>
