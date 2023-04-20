<?php $link=''; ?>
@foreach($proj['details'] as $detail)
    @if($detail['name']=='link')
        <?php $link = $detail['description']; ?>
    @endif
@endforeach
<h5>@include('pages.proj_line',['details'=>$proj['details'],'name'=>'type'])</h5>
<h4>
    @empty($link)
        @include('pages.proj_line',['details'=>$proj['details'],'name'=>'name'])
    @else
        <a href="{{$link}}" target="_blank" >
            @include('pages.proj_line',['details'=>$proj['details'],'name'=>'name'])
        </a>
    @endempty
</h4>


