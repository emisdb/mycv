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
            <p>The professional programmer with the experience of 25 years.</p>
            <p>During last 10 years I specialize in the field of <a href="/skills">web-programming</a>.</p>
            <p>My tech stack is Backend development on
                <button  onclick="openDialog('gray')"
                         class="w3-button w3-white w3-hover-gray w3-border w3-border-gray w3-hover-text-white w3-round-large w3-padding-small wow wobble animated">
                    <i>PHP</i>
                </button>
                (16 years) with the use of
                <button  onclick="openDialog('blue')"
                         class="w3-button w3-white w3-hover-blue w3-border w3-border-blue w3-round-large w3-padding-small  wow wobble animated">
                <i>Yii and Yii2 framework</i>
            </button>
                (8 years).</p>
            <p>Good knowledge of
                <button  onclick="openDialog('pink')"
                         class="w3-button w3-white w3-hover-pink w3-border w3-border-pink w3-round-large w3-padding-small wow wobble animated">
                    <i>Laravel</i>
                </button>
                (2 years).</p>
            <p>
                Frontend development is on the traditional basis:
                <button  onclick="openDialog('yellow')"
                         class="w3-button w3-white w3-hover-yellow  w3-hover-text-gray w3-border w3-border-yellow w3-round-large w3-padding-small  wow wobble animated">
                    <i>HTML, CSS, JS with jQuery and Bootstrap framework</i>
                </button>
                I had some practice in
                <button  onclick="openDialog('green')"
                         class="w3-button w3-white w3-hover-green w3-border w3-border-green w3-round-large w3-padding-small  wow wobble animated">
                    <i>Vue.js</i>
                </button>
                for 3 years.
            </p>
            <p>
                Numerous projects were implemented both by the individual efforts and as a part of the team.
            </p>
            <hr class="w3-opacity">
        </div>
    </div>
<?php echo $__env->make('inc.modals_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/denis/projects/my/web/mycv/resources/views/index.blade.php ENDPATH**/ ?>