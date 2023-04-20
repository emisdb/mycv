<div id="diaog-box" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
        <div id="container-box" class="w3-container  w3-display-container">
            <span onclick="document.getElementById('diaog-box').style.display='none'"
                  class="w3-button w3-display-topright w3-large">x</span>
            <div class="w3-row" id="modal-content">
            </div>
        </div>
    </div>
</div>
<?php $colors = []; ?>
@foreach($model['data'] as $proj)
        <?php $colors[$proj['name']] = $model['techs'][$proj['tech']]['color'][0]; ?>
        @include('pages.proj_popup',['data' => $proj, 'color' => $colors[$proj['name']], 'name' =>$proj['name']])
@endforeach
<script type="text/javascript">
    //   var colors = ['blue', 'green', 'pink', 'yellow', 'gray', 'lime', 'indigo', 'cyan', 'orange', 'red', 'sand'];
    var colors = <?php echo json_encode($colors); ?>;

    function openDialog(name) {
        element = document.getElementById('container-box');
        setcolor = "";
        for (const [key, color] of Object.entries(colors)) {
            if (key == name) {
                setcolor = color;
            } else {
                element.classList.remove("w3-" + color);
            }
        }
        element.classList.add("w3-" + setcolor);
        document.getElementById('diaog-box').style.display = 'block';
        var content = document.getElementById(name + '-content').innerHTML;
        document.getElementById('modal-content').innerHTML = content;
    }

    var modal_content = {
        'blue': '',
    }

</script>
