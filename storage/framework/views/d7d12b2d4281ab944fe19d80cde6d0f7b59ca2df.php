<!DOCTYPE html>
<html>
<style type="text/css">
html{
    min-height: 100%;
}
body{
     background: -webkit-linear-gradient(#a4deff 0%, #77d0ff 100%);
     font-family: sans-serif;
     color: #555;    
}

h1{
    text-align: center;
}

.wrap{
    width: 625px;
    margin: 5em auto;
    background: white;
    padding: 2em 4em;
    border-radius: .5em;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.3);
}

label{
    font-weight: bold;
    background: -webkit-linear-gradient(#7ad3f1 0%, #3789a1 100%);
    padding: .7em .85em .8em 0em;
    display: block;
    width: 150px;
    float: left;
    border-radius: .3em 0px 0px .3em;
    margin: 5px 0;
    color: white;
    text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
    height: 40px;
}

form{
    width: 330px;
    margin: 0 auto;
    text-align: right;
}

#name, #email, #password, #password-confirm{
    box-shadow: inset 0px 0px 3px #a7a7a7;
    width: 210px;
    height: 40px;
    margin: 5px 0;
}

#submit{
    text-align: center;
    clear: both;
    float: none;
    position: relative;
    right:80px;
    margin: 1em;
    padding: 1em 3em;
    background: -webkit-linear-gradient(#fff1ba 0%, #ffc400 100%);
    border: 1px solid #ffb135;
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
    font-weight: bolder;
    color: #a74f00;
    font-size: 1em;
    text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.7);
    cursor: pointer;
    border-radius: .3em;
}

#submit:hover{
    background: -webkit-linear-gradient(#ffc400 0%, #fff1ba 100%);
}

</style>

<head>
    <title>Register</title>
</head>
<body>



<?php $__env->startSection('content'); ?>

<div class="wrap">
    <h1>Register</h1>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label>First Name</label> 
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label>E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label>Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>   
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Register" id="submit" />
                            </div>
                        </div>
                    </form>
               
<?php $__env->stopSection(); ?>

</body>
</html>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>