<?php echo $__env->make('inc.cv-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title-text'); ?>
    My skills
<?php $__env->stopSection(); ?>
<?php $__env->startSection('left'); ?>
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg skill"></div>
    </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Skills</b></h1>
            <p>Skills I acquired and exercised</p>
            <?php echo $__env->yieldContent('cv-button'); ?>
        </header>
        <table class="w3-card-4 w3-margin-bottom">
            <tr>
                <th>
                    Internet and World Wide Web
                </th>
                <th>
                    year
                </th>
                <th>
                    experience,<br/> years
                </th>
            </tr>
             <tr><td>JQuery, Ajax, JQuery UI, Google API, Yandex API</td><td>2009</td><td>14</td></tr>
            <tr><td>Yii Framework, Yii 2</td><td>2013</td><td>10</td></tr>
            <tr><td>Codeigniter</td><td>2015</td><td>8</td></tr>
            <tr><td>Bootstrap framework</td><td>2015</td><td>8</td></tr>
            <tr><td>CMS: Joomla, Wordpress</td><td>2014</td><td>9</td></tr>
            <tr><td>Outsystems Platform</td><td>2016</td><td>7</td></tr>
        </table>
        <table class="w3-card-4 w3-margin-bottom">
            <tr>
                <th>
                    Project Management tools
                </th>
                <th>
                    year
                </th>
                <th>
                    experience,<br/> years
                </th>
            </tr>
            <tr><td>Git DVCS</td><td>2014</td><td>9</td></tr>
            <tr><td>Project management software: JIRA, Rally, Trello, Redmine 5</td><td>2016</td><td>7</td></tr>
            <tr><td>Docker and Docker-compose</td><td>2020</td><td>3</td></tr>
            <tr><td>Commercial web products : Salesforce, Post Affiliate Pro</td><td>2017</td><td>6</td></tr>
        </table>
        <button onclick="accFunction('tHTML')" class="w3-button w3-large w3-block w3-dark-grey w3-left-align w3-bottombar wow wobble animated" style="visibility: visible;">
            <div class="flex-container">
                <div class="flex-left"><i class="fa fa-html5 w3-xlarge"></i> HTML HTML 5</div><div>1995</div><div>28</div>
            </div>
        </button>
        <div id="tHTML" class="w3-hide w3-animate-left w3-white accordion">
            <p>
                I have pretty extensive programmer experience. Started in 1995 when I was in USA at the student exchange program in the University of Alabama.
                There I got acquainted with the WWW and took my first classes and first practice in web programming.
            </p>
            <p>
                Since that time I follow and put in practice all advances in the Web technologies.
            </p>
        </div>
        <button onclick="accFunction('tCSS')" class="w3-button w3-large w3-block w3-dark-grey w3-left-align w3-bottombar wow wobble animated" style="visibility: visible;">
            <div class="flex-container">
                <div class="flex-left"><i class="fa fa-css3 w3-xlarge"></i>CSS CSS 3</div><div>1997</div><div>26</div>
            </div>
        </button>
        <div id="tCSS" class="w3-hide w3-animate-right w3-white accordion">
            <p>
                I have substantive makeup experience. Great deal of recent advances in layout technique like
                <ul>
                   <li>SVG</li>
                   <li>flexbox</li>
                    <li>canvas</li>
                    <li>css-animation</li>
                </ul>
            </p>
            <p>I  use responsive design for my frontend development.</p>
        </div>
        <button onclick="accFunction('tJS')" class="w3-button w3-large w3-block w3-dark-grey w3-left-align w3-bottombar wow wobble animated" style="visibility: visible;">
            <div class="flex-container">
                <div class="flex-left">
                    <svg class='fontawesomesvg' xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.478,14.8829a4.06111,4.06111,0,0,1-2.18725-.39825,1.4389,1.4389,0,0,1-.53547-1.01019.22184.22184,0,0,0-.22662-.21942c-.31659-.00385-.63312-.003-.94965-.00043a.2113.2113,0,0,0-.23138.18628,2.33854,2.33854,0,0,0,.75305,1.84454,3.99135,3.99135,0,0,0,2.22827.8382,8.06151,8.06151,0,0,0,2.53308-.10755,3.12591,3.12591,0,0,0,1.67823-.90442,2.33824,2.33824,0,0,0,.396-2.23077,1.869,1.869,0,0,0-1.2304-1.09454c-1.28077-.4494-2.66431-.41541-3.97-.7569-.22668-.07135-.50366-.1488-.60467-.38879a.85461.85461,0,0,1,.28418-.95478,2.5576,2.5576,0,0,1,1.34875-.33581,4.07051,4.07051,0,0,1,1.88416.26959,1.43564,1.43564,0,0,1,.68677.99219.243.243,0,0,0,.2276.23565c.31433.00641.62878.00171.94311.00214a.22791.22791,0,0,0,.24732-.16772,2.43369,2.43369,0,0,0-1.18665-2.106,5.8791,5.8791,0,0,0-3.2182-.49243V8.08341a3.50546,3.50546,0,0,0-2.17615.87438,2.1746,2.1746,0,0,0-.43438,2.26264,1.92964,1.92964,0,0,0,1.21838,1.06177c1.27649.46106,2.67554.31311,3.96442.72082.25116.08521.54364.21552.6206.49506a.9907.9907,0,0,1-.26965.94616A2.97065,2.97065,0,0,1,14.478,14.8829Zm5.81891-8.44537q-3.73837-2.114-7.47845-4.22418a1.67742,1.67742,0,0,0-1.63733,0Q7.4556,4.31715,3.72968,6.42075a1.54242,1.54242,0,0,0-.8042,1.34271V16.2377a1.55266,1.55266,0,0,0,.8352,1.355c.71351.38837,1.40674.81629,2.13318,1.17884a3.06373,3.06373,0,0,0,2.73822.07525,2.1275,2.1275,0,0,0,.99482-1.92114c.00555-2.79669.00085-5.59351.00213-8.39026a.21981.21981,0,0,0-.20727-.25415c-.31739-.00513-.63526-.003-.95264-.00085a.20935.20935,0,0,0-.228.21368c-.00427,2.77875.00086,5.55829-.00256,8.33746a.94053.94053,0,0,1-.609.88373,1.53242,1.53242,0,0,1-1.23993-.16595q-.99152-.56-1.983-1.11988a.23714.23714,0,0,1-.13464-.23529q0-4.19383,0-8.38726a.2589.2589,0,0,1,.157-.2602Q8.1423,5.4553,11.85419,3.35953a.258.258,0,0,1,.29163.00043Q15.859,5.452,19.57184,7.5455a.262.262,0,0,1,.15613.26142Q19.72733,12,19.72712,16.19376a.242.242,0,0,1-.13294.23828q-3.65643,2.06753-7.31677,4.12909c-.11658.06494-.25458.16943-.39093.09076-.6391-.36176-1.27039-.73755-1.90735-1.10273a.20589.20589,0,0,0-.22968-.01379,5.21834,5.21834,0,0,1-.88208.41162c-.13806.05591-.30792.07184-.40295.19989a1.31566,1.31566,0,0,0,.43127.31061q1.11741.647,2.236,1.29285a1.62967,1.62967,0,0,0,1.65539.046q3.7261-2.101,7.45185-4.20392a1.55627,1.55627,0,0,0,.83563-1.35474V7.76346A1.53956,1.53956,0,0,0,20.29694,6.43753Z"/></svg>
                   Javascript, Typescript</div><div>1998</div><div>25</div>
            </div>
        </button>
        <div id="tJS" class="w3-hide w3-animate-left w3-white accordion">
            <p> Good knowledge of Javascript and 20 years of efficient use in frontend development.
            </p>
         </div>
        <hr class="w3-opacity">
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/denis/projects/my/web/mycv/resources/views/skills.blade.php ENDPATH**/ ?>