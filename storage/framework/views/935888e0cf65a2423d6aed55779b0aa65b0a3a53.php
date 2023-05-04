<?php $__env->startSection('title-text'); ?>
    <?php echo e($model['title']['list']); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('left'); ?>
    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
        <?php if(empty($model['title']['bground'][0])): ?>
            <div class="bgimg dear2"></div>
        <?php else: ?>
            <div class="bgimg <?php echo e($model['title']['bground'][0]); ?>"></div>
        <?php endif; ?>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;"
              onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center" style="padding:98px 16px" id="home">
            <h1 class="w3-jumbo"><b>List <?php echo e($model['title']['list']); ?></b></h1>
            <?php if(isset($path)): ?>
                <?php echo $__env->make('inc.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
                <p>List dictionary.</p>
            <?php endif; ?>


        </header>
    <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Form Section -->
        <div class="w3-padding-32 w3-content" id="portfolio">
            <div class="Rtable Rtable--3cols">
                <?php $__currentLoopData = $model['params']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($field['length']>0): ?>
                        <div class="Rtable-cell Rtable-header"
                             style="width:<?php echo e($field['length']); ?>0%;"><?php echo e($field['label']); ?></div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="Rtable-cell Rtable-header rc-last">
                    <?php if($model['title']['is_mult']): ?>
                        <a href="<?php echo e(route("dict.create",[$model['title']['id'],isset($id)? $id : 0])); ?>">
                            <i class="fa fa-plus w3-medium"></i></a>
                    <?php else: ?>
                        <a href="<?php echo e(route("dict.edit",[$model['title']['id'],0])); ?>">
                            <i class="fa fa-plus w3-medium"></i></a>
                    <?php endif; ?>

                </div>

                 <?php $__currentLoopData = $model['dataset']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $model['params']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($field['length']>0): ?>
                            <div class="Rtable-cell" style="width:<?php echo e($field['length']); ?>0%;">
                                <?php if(is_array($rec[$field['name']])): ?>
                                    <?php echo $__env->make('inc.dd',['var'=>$rec[$field['name']]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                 <?php else: ?>
                                    <?php echo e($rec[$field['name']]); ?>

                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="Rtable-cell rc-last">
                         <a href="<?php echo e(route("dict.edit",[$model['title']['id'],$rec['id']])); ?>">
                            <i class="fa fa-edit w3-medium"></i>
                        </a>
                        <?php if(isset($rec['subdict'])): ?>
                            <?php echo $__env->make('inc.dd',['var'=>$rec['subdict']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php elseif(isset($rec['ideas_count'])&&($rec['ideas_count']>0)): ?>
                                <span class="badge badge-secondary" style="margin-left: -2px;"><?php echo e($rec['ideas_count']); ?></span>
                        <?php endif; ?>
                        <a href="<?php echo e(route("dict.delete",[$model['title']['id'],$rec['id']])); ?>">
                            <i class="fa fa-remove w3-medium"></i>
                        </a>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <hr class="w3-opacity">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/denis/projects/my/web/mycv/resources/views/dict/list.blade.php ENDPATH**/ ?>