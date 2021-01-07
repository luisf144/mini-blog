<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <create-post />
        </div>
        <div class="col-md-6 posts-container" style="height: 35rem; overflow-y: scroll">
            <all-posts />
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/luiscarbajal/workspace/BlogCafe/resources/views/home.blade.php ENDPATH**/ ?>