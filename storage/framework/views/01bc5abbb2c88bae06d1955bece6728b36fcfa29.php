

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="username">Enter Your Username</label>
                    <input type="text" class="form-control" name="username">
                    <input class="mt-3 btn btn-outline-primary" type="submit" placeholder="Submit">
                </div>
            </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\resources\views/form.blade.php ENDPATH**/ ?>