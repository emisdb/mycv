    <div class="w3-container">
        <div class="w3-dropdown-click cv-dropdown">
            <button onclick="CvFunction()" class="w3-button w3-light-grey w3-padding-large w3-margin-top">
                <i class="fa fa-download"></i> Download Resume
            </button>
            <div id="cv_button" class="w3-dropdown-content w3-bar-block w3-border">
                <a href="{{url('/')}}/docs/cv_eng_short.pdf" class="w3-bar-item w3-button" target="_blank">Short version (3 pages)</a>
                <a href="{{url('/')}}/docs/cv_eng_g.pdf" class="w3-bar-item w3-button" target="_blank">Extended version (14 pages)</a>
                <a href="{{url('/')}}/docs/cv_ru.pdf" class="w3-bar-item w3-button" target="_blank">Short version in Russian</a>
                <a href="{{url('/')}}/docs/cv_long_ru.pdf" class="w3-bar-item w3-button" target="_blank">Long version in Russian (14 pages)</a>
            </div>
        </div>
    </div>
