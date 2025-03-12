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
@foreach($dialogs as $ph)
        <?php $colors[$ph['name']] = $ph['color']; ?>
        @include('pages.popup',['format' => $ph['dialog'], 'color' => $ph['color'], 'name' =>$ph['name']])
@endforeach
<script type="text/javascript">
 //   var colors = ['blue', 'green', 'pink', 'yellow', 'gray', 'lime', 'indigo', 'cyan', 'orange', 'red', 'sand'];
    var colors = <?php echo json_encode($colors); ?>;

    function openDialog(name) {
        element = document.getElementById('container-box');
        setcolor = '';
        for (const [key, color] of Object.entries(colors)) {

            if (key == name) {
                setcolor = color;
                element.classList.add("w3-" + setcolor);
            } else {
                if(setcolor != color){
                    element.classList.remove("w3-" + color);
                }
            }
        }
        document.getElementById('diaog-box').style.display = 'block';
        var content = document.getElementById(name + '-content').innerHTML;
        document.getElementById('modal-content').innerHTML = content;
    }

    var modal_content = {
        'blue': '',
    }

</script>
