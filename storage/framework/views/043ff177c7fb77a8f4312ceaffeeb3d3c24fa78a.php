<?php echo $__env->make('inc.cv-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title-text'); ?>
    My CV
<?php $__env->stopSection(); ?>
<?php $__env->startSection('left'); ?>
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg time"></div>
    </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Portfolio of personal work</b></h1>
            <p>Timeline of the acomplished projects</p>
            <?php echo $__env->yieldContent('cv-button'); ?>
        </header>

        <!-- Timeline Section -->
        <div class="timeline">
            <div class="time-container time-left">
                <div class="time-content">
                    <h2>2017</h2>
                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                </div>
            </div>
            <div class="time-container time-right">
                <div class="time-content">
                    <h2>2016</h2>
                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                </div>
            </div>
            <div class="time-container time-left">
                <div class="time-content">
                    <h2>2015</h2>
                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                </div>
            </div>
            <div class="time-container time-right">
                <div class="time-content">
                    <h2>2012</h2>
                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                </div>
            </div>
            <div class="time-container time-left">
                <div class="time-content">
                    <h2>2011</h2>
                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                </div>
            </div>
            <div class="time-container time-right">
                <div class="time-content">
                    <h2>2007</h2>
                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                </div>
            </div>
        </div>
        <hr class="w3-opacity">
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/denis/projects/my/web/mycv/resources/views/timeline.blade.php ENDPATH**/ ?>