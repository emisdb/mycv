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
@foreach($model as $rec)
    @foreach($rec as $ph)
        @if($ph['type'] == 'pop')
            <?php $colors[$ph['data']] = $ph['text']['color']; ?>
            @include('pages.popup',['format' => $ph['text']['dialog'], 'color' => $ph['text']['color'], 'name' =>$ph['data']])
        @endif
    @endforeach
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
