<!DOCTYPE html>
<html>
<style type="text/css">
	html{
		min-height: 100%;
	}
	body{
		font-family: sans-serif;
		color: #555;
	}

	body h6{
		margin-top: 3em;
		font-size: 25pt;
		font-weight: bold;
		padding: 10px;
	}

	.box{
		width: 500px;
		height: 400px;
		float: left;
	}

	.box p{
		margin: 5px;

	}

	.form{
		width: 400px;
		height: 40px;
		color: black;
		border-radius: 6px;
		margin-left: 20px;
	}
	.button{
		width: 400px;
		height: 48px;
		background-color: #add0fe;
		border-color: #4d81ad;
		border-radius: 5px;
		margin-left: 20px;
		margin-top: 25px;


	}

	
</style>
<head>
	<title>Student Status</title>
</head>
<body>




<?php $__env->startSection('content'); ?>

<div class="container">
	<h6>Student Output</h6>
	<form method="POST" action="/grade">

			<?php echo e(csrf_field()); ?>


		<div class="box"></p>
			<p>Student Number: </p>
			<input type="number" name="student_number" class="form"><br>
			<p>Name:</p>
			<input type="text" name="name" class="form"><br>
			<p>Filipino 2: </p>
			<input type="number" name="Filipino_2" class="form"><br>
			<p>Statistics: </p>
			<input type="number" name="Statistics" class="form"><br>
			<p>Family Planning: </p>
			<input type="number" name="Family_Planning" class="form"><br>
			</div>

			<div class="box">
			<p>Business Process:</p>
			<input type="number" name="Business_Process" class="form"><br>		
			<p>Bible Science 2:</p>	
			<input type="number" name="Bible_Science_2" class="form"><br>
			<p>Web App 2:</p>
			<input type="number" name="Web_App_2" class="form"><br>
			<p>Team Sports:</p>
			<input type="number" name="Team_Sports" class="form"><br>

			<button type="submit" class="button">Submit</button>
		</div>	

	</form>
</div>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>