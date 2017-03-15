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
    width: 500px;
    margin: 4em auto;
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
    width: 125px;
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

</style>

<head>
    <title></title>
</head>
<body>



<?php $__env->startSection('content'); ?>

<div class="wrap">
    <h1>Login</h1>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>



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
                            <div class="col-md-5 col-md-offset-4">
                                <div class="checkbox">
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            
                                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>" style="text-align:center"> Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
               
<?php $__env->stopSection(); ?>

</body>
</html>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>