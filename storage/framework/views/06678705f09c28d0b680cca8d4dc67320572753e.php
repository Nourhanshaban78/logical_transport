<!DOCTYPE html>
<html lang="en">
  <head>
    <base herf="/public">
    <?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="container-fluid page-body-wrapper">

<div style="padding-top:100px;" align="center">

<table style="padding:25px;" bgcolor="gray">


   <tr >
      <th style="padding:10px;">Name</th>
      <th style="padding:10px;">Email</th>
      <th style="padding:10px;">type</th>
      <th style="padding:10px;">size</th>
      <th style="padding:10px;">City</th>
      <th style="padding:10px;">Delivery </th>
      <th style="padding:10px;">Messages</th>
      <th style="padding:10px;">Status</th>
      <th style="padding:10px;">Appoved</th>
      <th style="padding:10px;">Cancel</th>
    </tr>


   
 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <tr >
      <th style="padding:10px;"><?php echo e($data->name); ?></th>
      <th style="padding:10px;"><?php echo e($data->email); ?></th>
      <th style="padding:10px;"><?php echo e($data->type); ?></th>
      <th style="padding:10px;"><?php echo e($data->size); ?></th>
      <th style="padding:10px;"><?php echo e($data->city); ?></th>
      <th style="padding:10px;"><?php echo e($data->delivery); ?></th>
      <th style="padding:10px;"><?php echo e($data->message); ?></th>
      <th style="padding:10px;"><?php echo e($data->status); ?></th>
  <th><a class="btn btn-info" href="<?php echo e(url('approved',$data->id)); ?>">Appoved</a></th>
  <th><a class="btn btn-danger" href="<?php echo e(url('canceled',$data->id)); ?>">Cancel</a></th>
 </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





</table>
</div>
</div>
 
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\global-transport\resources\views/admin/all_est.blade.php ENDPATH**/ ?>