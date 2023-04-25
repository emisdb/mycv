<div class="time-container time-{{$side}}" onclick="openDialog('{{$proj['id']}}','{{$side}}')"
     style="cursor:pointer;">
    <div class="time-content w3-{{$techs[$proj['tech']]['color'][0]}} w3-hover-{{$techs[$proj['tech']]['color'][1]}}
        w3-border w3-border-{{$techs[$proj['tech']]['color'][1]}} w3-round-small w3-padding-small wow wobble animated">
        <h5> @include('pages.proj_time') </h5>
        <ul class="w3-ul  w3-card-4 w3-margin-bottom">
         <li>   @include('pages.proj_detail') </li>
            @if(!empty($proj['client']['names']))
          <li> @include('pages.proj_client', ['data' => $proj['client']] ) </li>
            @endif
            <li>   @include('pages.proj_line',['details'=>$proj['details'],'name'=>'position'])</li>
            <li>   @include('pages.proj_techs',['details'=>$proj['techs']])</li>
        </ul>
    </div>
</div>
