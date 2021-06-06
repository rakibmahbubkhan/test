

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Started</th>
      <th scope="col">Finished</th>
      <th scope="col">Working Hours</th>

    </tr>
  </thead>
  <tbody>
 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
      <th scope="row"><?php echo e($user->id); ?></th>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->first_in); ?></td>
      <td><?php echo e($user->last_out); ?></td>
      <td><?php echo e($user->last_out->diffForHumans()); ?></td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    
  </tbody>
</table>
<a href="<?php echo e(url('/download-pdf')); ?>"><input class="btn btn-warning" type="submit" value="Export report"></a>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\resources\views/index.blade.php ENDPATH**/ ?>