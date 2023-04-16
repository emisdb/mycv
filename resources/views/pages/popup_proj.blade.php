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
<?php $colors = ['q' => 'pale-red']; ?>
<div id="q-content" style="display:none">
    <h4 class="w3-center">Vue.js</h4>
    <div class="w3-container m12">
        <div class="w3-container w3-padding-small">
            <h5 class="w3-center">Vue.js practical usage</h5>
            <ol class="w3-ul w3-card-4 w3-hoverable">
                <li class="w3-hover-text-black">While working on the Laravel project I hsd some practice in Vue.js usage.</li>
                <li class="w3-hover-text-black">I had some experience of implementing Vue.js with Inertia.js.</li>
            </ol>
        </div>
    </div>
</div>
<script type="text/javascript">
 //   var colors = ['blue', 'green', 'pink', 'yellow', 'gray', 'lime', 'indigo', 'cyan', 'orange', 'red', 'sand'];
    var colors = <?php echo json_encode($colors); ?>;

    function openDialog(name) {
        element = document.getElementById('container-box');
        for (const [key, color] of Object.entries(colors)) {
            if (key == name) {
                element.classList.add("w3-" + color);
            } else {
                element.classList.remove("w3-" + color);
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
