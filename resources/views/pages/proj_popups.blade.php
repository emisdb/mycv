<div id="diaog-box" class="w3-modal">
    <div  id="container-box" class="w3-modal-content">
        <div  class="w3-container  w3-display-container">
            <span onclick="document.getElementById('diaog-box').style.display='none'"
                  class="w3-button w3-display-topright w3-large">x</span>
            <div class="w3-row" id="modal-content">
            </div>
        </div>
    </div>
</div>
<?php $colors = []; ?>
@foreach($model['data'] as $proj)
        <?php $colors["proj".$proj['id']] = $model['techs'][$proj['tech']]['color'][0]; ?>
        @include('pages.proj_popup',['proj' => $proj, 'color' => $colors["proj".$proj['id']], 'name' =>$proj['id']])
@endforeach
<script type="text/javascript">
    //   var colors = ['blue', 'green', 'pink', 'yellow', 'gray', 'lime', 'indigo', 'cyan', 'orange', 'red', 'sand'];
    var colors = <?php echo json_encode($colors); ?>;

    function openDialog(name,side) {
        element = document.getElementById('container-box');
        setcolor = "";
        for (const [key, color] of Object.entries(colors)) {
            if (key == 'proj'+name) {
                setcolor = color;
            } else {
                element.classList.remove("w3-" + color);
            }
        }
        element.classList.add("w3-" + setcolor);
        element.classList.remove("w3-animate-left");
        element.classList.remove("w3-animate-right");
        element.classList.add("w3-animate-" + side);
        document.getElementById('diaog-box').style.display = 'block';
        var content = document.getElementById('proj' + name + '-content').innerHTML;
        document.getElementById('modal-content').innerHTML = content;
        setSlides(name)
        slideIndex = 1;
        showDivs(slideIndex);
    }

    function setSlides(id){
        var i;
        var  x = document.getElementById('modal-content').getElementsByClassName("mySlides"+id);
        for (i = 0; i < x.length; i++) {
            x[i].classList.add("mySlides");
        }

    }

    var slideIndex = 1;
    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }

</script>
