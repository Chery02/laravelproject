<?php $__env->startSection('content'); ?>

<h1 style="margin-top: 80px;">Students</h1>


<table class="table">
	<thead class="thead-inverse">
	 <tr>
	 	<th scope="row"></th>
		<th>No.</th>
		<th>Name</th>
		<th>Filipino 2</th>
		<th>Statistics</th>
		<th>Family Planning</th>
		<th>Business Process</th>
		<th>Bible Science 2</th>
        <th>Web App 2</th>
        <th>Team Sports</th>
	 </tr>	
	</thead>
	<tbody>
	
	 <tr>
	 	<th scope="row"></th>
	 	<td><?php echo e($grade->id); ?></td>
	 	<td><?php echo e($grade->name); ?></td>
	 	<td><?php echo e($grade->Filipino_2); ?></td>
	 	<td><?php echo e($grade->Statistics); ?></td>
	 	<td><?php echo e($grade->Family_Planning); ?></td>
	 	<td><?php echo e($grade->Business_Process); ?></td>
	 	<td><?php echo e($grade->Bible_Science_2); ?></td>
	 	<td><?php echo e($grade->Web_App_2); ?></td>
	 	<td><?php echo e($grade->Team_Sports); ?></td>
	 </tr>
	
	
	</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>