<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div>
<pages-loop></pages-loop>
<?php echo $__env->make('partials.info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<posts-loop></posts-loop>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>