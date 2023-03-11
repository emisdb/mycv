<?php $__env->startSection('title-text'); ?>
    My Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('left'); ?>
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg legs"></div>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Edit table <?php echo e($tab); ?></b></h1>
            <p>Edit table.</p>
        </header>
<?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php
            var_dump($feat);
        ?>
        <!-- Form Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <form method="POST" action="/dict">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="feature">Feature</label>
                    <input type="text" name="feature" id="feature" value="<?php echo e($feat['feature']); ?>" placeholder="Feature" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" value="<?php echo e($feat['description']); ?>" placeholder="Description" class="form-control">
               </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <hr class="w3-opacity">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/denis/projects/my/web/mycv/resources/views/dict.blade.php ENDPATH**/ ?>