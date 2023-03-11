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
</div>
<div id="red-content" style="display:none">
    <h4 class="w3-center">Digitalisation drives values</h4>
    <div class="w3-half m6">
        <div class="w3-container w3-padding-small">
            <h5 class="w3-center">For businesses</h5>
            <ol class="w3-ul w3-card-4 w3-hoverable">
                <li>Increased access to markets and customers</li>
                <li>More productive business processes and business models</li>
                <li>Better access to talent through digital channels</li>
                <li>New innovations spurred by open access to external (government, open source, web
                    based) data
                </li>
            </ol>
        </div>
    </div>
    <div class="w3-half m6">
        <div class="w3-container w3-padding-small">
            <h5 class="w3-center">For customers</h5>
            <ol class="w3-ul w3-card-4 w3-hoverable">
                <li>Increased competition driven by consumers’ ability to easily compare</li>
                <li>Access to new types of products and services (e.g., the sharing economy)</li>
                <li>Better employment opportunities through greater access to job listings</li>
                <li>Improved access to the provider data powered by internet information</li>
            </ol>
        </div>
    </div>
</div>
<div id="cyan-content" style="display:none">
    <h4 class="w3-center">PHP drives values</h4>
    <div class="w3-half m6">
        <div class="w3-container w3-padding-small">
            <h5 class="w3-center">For businesses</h5>
            <ol class="w3-ul w3-card-4 w3-hoverable">
                <li>Increased access to markets and customers</li>
                <li>More productive business processes and business models</li>
                <li>Better access to talent through digital channels</li>
            </ol>
        </div>
    </div>
</div>

<script type="text/javascript">
    var colors = ['blue', 'green', 'pink', 'yellow', 'gray', 'lime', 'indigo', 'cyan', 'orange', 'red', 'sand'];

    function openDialog(setcolor) {
        element = document.getElementById('container-box');
        colors.forEach(function (color, index) {
            if (setcolor == color) {
                element.classList.add("w3-" + color);
            } else {
                element.classList.remove("w3-" + color);
            }
        })
        document.getElementById('diaog-box').style.display = 'block';
        var content = document.getElementById(setcolor+'-content').innerHTML;
        document.getElementById('modal-content').innerHTML = content;
    }
    var modal_content  = {
        'blue' : '',
    }

</script>
