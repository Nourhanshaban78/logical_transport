<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="container-fluid page-body-wrapper">
        <div style="padding-top:100px;">
      <form action="<?php echo e(url('add_transport')); ?>" method="post" enctype="multipart/form-data">
        
        <?php echo csrf_field(); ?>
        <div  > <label> Trans Name </label>
            <input type="text" name="name"style="color:black;" require placeholder="Trans name"></div>

            <div > <label> Speciality </label>
            <input type="text" name="speciality"style="color:black;" require placeholder="Speciality"></div>

          
            <div > <label>Trans Image </label>
            <input type="file" name="image" style="width:200px;" require></div>

            

            <div style="padding:15px;"> 
            <input type="submit" value="ADD TRANSPORT" class="btn btn-info" ></div>
            

    </form>

    
</div>
      
</div>
     


















    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\global-transport\resources\views/admin/trans.blade.php ENDPATH**/ ?>