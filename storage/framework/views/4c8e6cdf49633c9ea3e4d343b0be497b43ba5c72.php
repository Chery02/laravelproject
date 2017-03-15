<?php $__env->startSection('content'); ?>

<h1 style="margin-top: 50px;">Students</h1>

<table class="table">
	<thead class="thead-inverse">
	 <tr>
	 	<th scope="row"></th>
		<th>No.</th>
		<th>Name</th>
	 </tr>	
	</thead>
	<tbody>
		 
	 	<?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
	 <tr>
	 	<th scope="row"></th>
	 
	 	<td><?php echo e($grade->id); ?></td>
	 	<td><?php echo e($grade->name); ?></td>
	 
	 	<td>
	 		<button class="btn btn-info"><a href="/grade/<?php echo e($grade->id); ?>/edit">Edit</a></button>
	 		<button class="btn btn-danger"><a href="/student/delete/<?php echo e($grade->id); ?>">Delete</a></button>
	 		<button class="btn"><a href="/grade/<?php echo e($grade->id); ?>">View-Grade</a></button>		
	 	</td>
	 </tr>
	 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>