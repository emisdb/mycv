<?php echo $__env->make('inc.cv-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title-text'); ?>
    My CV
<?php $__env->stopSection(); ?>
<?php $__env->startSection('left'); ?>
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg"></div>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Denis Tsybulia</b></h1>
            <p>Web application developer.</p>
            <?php echo $__env->yieldContent('cv-button'); ?>

        </header>

        <!-- Portfolio Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <h2 class="w3-text-grey">About me</h2>
            <p>I am a web programmer from Russia currently located in Batumi, Republic of Georgia.</p>
            <p>The professional programmer with the experience of <span class="badge">25 years</span>.</p>
            <p>During last <span class="badge">15 years</span> I specialize at the field of web-programming.</p>
            <p>My tech stack is Backend development on <exp.general>
                <?php echo $__env->make('pages.button',[
                            'text' => 'PHP <span class="badge">15 years</span>',
                            'color' => 'indigo',
                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               with the use of
                <button  onclick="openDialog('blue')"
                         class="w3-button w3-white w3-hover-blue w3-border w3-border-blue w3-round-large w3-padding-small  wow wobble animated">
                Yii and Yii2 framework <span class="badge">8 years</span>
            </button>
            .
            </p>
            <p>Good knowledge of
                <button  onclick="openDialog('pink')"
                         class="w3-button w3-white w3-hover-pink w3-border w3-border-pink w3-round-large w3-padding-small wow wobble animated">
                    <i>Laravel <span class="badge">2 years</span></i>
                </button>
                .
            </p>
            <p>
                Frontend development is based on the traditional basis:
                <button  onclick="openDialog('yellow')"
                         class="w3-button w3-white w3-hover-yellow  w3-hover-text-gray w3-border w3-border-yellow w3-round-large w3-padding-small  wow wobble animated">
                    HTML, CSS, JS with jQuery and Bootstrap framework <span class="badge">25 years</span>
                </button>
                I have some practice in
                <button  onclick="openDialog('green')"
                         class="w3-button w3-white w3-hover-green w3-border w3-border-green w3-round-large w3-padding-small  wow wobble animated">
                    Vue.js <span class="badge">2 years</span>
                </button>
               .
            </p>
            <p>
                During my long practice of desktop and web applications I workrd in
                <button  onclick="openDialog('green')"
                         class="w3-button w3-white w3-hover-green w3-border w3-border-green w3-round-large w3-padding-small  wow wobble animated">
                    database design and maintenance  <span class="badge">20 years</span>
                </button> on a large scale.
            </p>
            <p>
                Numerous projects were implemented both by
                <a href="<?php echo e(route('timeline')); ?>">
                    the individual efforts
                </a>
                and as
                <a href="<?php echo e(route('team')); ?>">
                    a part of the team
                </a>
                .
            </p>
            <p>
                My development practice is built on the SOLID principles and based on the design patterns accepted as the common attitude in contemporary programming.
                The use of MVC pattern in the framework allows to create a clear and easily adopted code. It also leaves open the possibility to preserve the flexibility of the technology.
            </p>
            <p>
                In my long-time activity as the software engineer I was involved in the web projects from
                <button  onclick="openDialog('lime')"
                         class="w3-button w3-light-grey w3-hover-lime w3-border w3-border-lime w3-round-large w3-padding-small  wow wobble animated">
                    different fields of economy
                </button>.
                There were some projects where I developed
                <button  onclick="openDialog('khaki')"
                         class="w3-button w3-light-khaki w3-hover-khaki w3-border w3-border-khaki w3-round-large w3-padding-small wow wobble animated">
                    my own architecture, configuration and solutions
                </button>
            </p>
            <p>
                During my extensive practice I handled many different
                <button  onclick="openDialog('sand')"
                         class="w3-button w3-light-grey w3-hover-sand w3-border w3-border-sand w3-round-large w3-padding-small wow wobble animated">
                    common popular tasks
                </button>
                .
            </p>
            <p>
                I had practice with a low-code rapid application development and delivery
                <button  onclick="openDialog('red')"
                         class="w3-button w3-white w3-hover-red w3-border w3-border-red w3-round-large w3-padding-small  wow wobble animated">
                    OutSystems platform<span class="badge">3 years</span>
                </button>.
                Associate Developer certified specialist.
            </p>
            <p>
                In many team projects I had experience to work with the Legacy systems and handled quite tangled technological solutions.
            </p>
             <p>
                I have experience in creating and editing existing sites based on CMS Joomla and Wordpress.
            </p>
            <p>
                Big experience in REST API development and other side API integration.
            <p>
                The project development basically is conducted in local environment provided by the
                <button  onclick="openDialog('cyan')"
                         class="w3-button w3-white w3-hover-cyan w3-border w3-border-cyan w3-round-large w3-padding-small  wow wobble animated">
                    Docker <span class="badge">4 years</span>
                </button>
                with the extensive use of Git flow and CI/CD tools.
            </p>
                Most of my developing activity was carried out in the projects based on
            <button  onclick="openDialog('orange')"
                     class="w3-button w3-white w3-hover-orange w3-border w3-border-orange w3-round-large w3-padding-small  wow wobble animated">
                the Agile principles <span class="badge">7 years</span>
            </button>
                with all stages of this process.
           </p>
            <p>
            Desktop application on C++ and Visual Basic. Embedded systems and equipment control system on C++ in UNIX and QNX environment;
            </p>
            <p>Fluent English. Good communication skills that I earned during long period of individual direct work with the customers.</p>
            <p>Registered as an individual entrepreneur in Georgia and have multicurrency account in Georgian Bank. </p>
            <hr class="w3-opacity">
        </div>
    </div>
<?php echo $__env->make('inc.modals_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/denis/projects/my/web/mycv/resources/views/index.blade.php ENDPATH**/ ?>