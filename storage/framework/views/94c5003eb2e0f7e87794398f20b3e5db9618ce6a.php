<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid page-body-wrapper">

<div style="padding-top:100px;" align="center">

<table  style="width:200 hight:200" bgcolor="lightblue">

<tr >
 <th  >Transport Name</th>
 <th >Speciality</th>
 <th >Image</th>
 <th> Update</th>
 <th> Delete </th>
</tr>


<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td><?php echo e($data->name); ?></td>
  <td><?php echo e($data->Speciality); ?></td>
  <td><img  style="width:200 hight:200"   src="transimage/<?php echo e($data->image); ?>" alt=""></td>
  <td><a class="btn btn-info" href="<?php echo e(url('update',$data->id)); ?>">Update</a></td>
  <td><a class="btn btn-danger" href="<?php echo e(url('deleted',$data->id)); ?>"
  onclick="return confirm('Are you sure to delete the message')">Delete</a></td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>











</div>

</div>
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\global-transport\resources\views/admin/view.blade.php ENDPATH**/ ?>