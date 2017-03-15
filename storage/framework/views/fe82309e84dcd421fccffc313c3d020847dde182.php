<!DOCTYPE html>
<html>
<style type="text/css">
	.box{
		margin:2em auto;
		width: 500px;
		height: 500px;
	}

</style>
<head>
	<title>Edit</title>
</head>
<body>




<?php $__env->startSection('content'); ?>

<div class="box">
<h1 style="margin-top: 80px;">Edit Student</h1>

	<form method="POST" action="/grade/<?php echo e($grade->id); ?>">
		<?php echo e(method_field('PUT')); ?>

		<?php echo e(csrf_field()); ?>


		<input type="hidden" name="id" value="">
		<div>
		<label>Student Number</label>
			<input type="text" name="student_number" value="" style="border-radius: 6px; width:600px; height:45px; margin-bottom:20px;">
		</div>
		<div>
		<label>Name</label>
			<input type="text" name="name" value="<?php echo e($grade->name); ?>" style="border-radius: 6px; width:600px; height:45px; margin-bottom: 20px;"  >
		


		<div>
			<button type="submit" class="btn btn-success">Save</button>
			<button class="btn btn-danger"><a href="<?php echo e(url('student-welcome')); ?>">Cancel</a></button>
		</div>
		</div>
	</form>
	</div>

	<?php $__env->stopSection(); ?>

	</body>
	</html>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>