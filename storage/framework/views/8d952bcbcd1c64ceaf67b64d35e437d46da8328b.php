<?php $__env->startSection('content'); ?>
<?php if(Session::has('info')): ?>
<div class="row">
	<div class="col-md-12">
		<p class="alert alert-info"><?php echo e(Session::get('info')); ?></p>
	</div>
</div>
<?php endif; ?>

<div class="row">
	<div class="col-md-12">
<a href="/admin/create"><button type="submit" class="btn btn-success" >New Post</button></a>
</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
<p>Learning Laravel <a href="/admin/edit/1">Edit</a></p>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>