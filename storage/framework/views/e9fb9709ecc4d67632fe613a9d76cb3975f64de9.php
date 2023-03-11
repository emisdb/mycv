<?php $__env->startSection('title-text'); ?>
    My Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('left'); ?>
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <div class="bgimg toes"></div>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:128px 16px" id="home">
            <h1 class="w3-jumbo"><b>Edit record <?php echo e($model['title'][1]); ?></b></h1>
            <p>Edit record.</p>
        </header>
        <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Form Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <form method="POST" action="/<?php echo e($model['title'][0]); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" id="id" value="<?php echo e($model['data']['id']); ?>" />
               <?php $__currentLoopData = $model['params']['fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-group">
                        <label for="<?php echo e($field); ?>"><?php echo e($model['params']['labels'][$field]); ?></label>
                        <input type="text" name="<?php echo e($field); ?>" id="<?php echo e($field); ?>" value="<?php echo e($model['data'][$field]); ?>" placeholder="<?php echo e($model['params']['labels'][$field]); ?>" class="form-control" />
                        <?php $__errorArgs = [$field];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <hr class="w3-opacity">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/denis/projects/my/web/mycv/resources/views/form.blade.php ENDPATH**/ ?>