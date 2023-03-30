<style>
    ul#head li {
        list-style-type: none;
        width: 30px;
        height: 30px;
        margin-right: 0px;
        float: left;
        overflow: hidden;
    }
    ul#head li img {
        height: 30px;
        max-width:none;
    }
</style>

<script type="text/javascript">

 		$(document).ready(function(){

    		$("li.movable").mouseover(function(){
   				$(this).removeClass("m_inactive");
   				$(this).addClass("m_active");
        		$("li.m_active").animate({ width: "120px"}, 1000 );
  //    			$("li.inactive").animate({ width: "100px"}, 1000 );
      		});
      		$("li.movable").mouseout(function(){
    			$(this).removeClass("m_active");
   				$(this).addClass("m_inactive");
      			$("li.movable").animate({ width: "30px"});
    		});
		});
</script>
<ul id="head" style="background-color:#fff; padding-left:0px;">
        <li class="inactive" style="width:5px;">
        <li class="inactive movable"><img src="{{ asset('images/head/e_.jpg') }}" alt="" />/li>
        <li class="inactive movable"><img src="{{ asset('images/head/m_.jpg') }}" alt=""/>/li>
        <li class="inactive movable"><img src="{{ asset('images/head/i_.jpg') }}" alt=""/>/li>
        <li class="inactive movable"><img src="{{ asset('images/head/s_.jpg') }}" alt=""/>/li>
        <li class="inactive"><img src="{{ asset('images/head/dot.jpg') }}g" alt=""/>/li>
        <li class="inactive movable"><img src="{{ asset('images/head/d_.jpg') }}" alt=""/>/li>
        <li class="inactive movable"><img src="{{ asset('images/head/b_.jpg') }}" alt=""/>/li>
</ul>


