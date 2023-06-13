
<div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h3>
                            Services We Offer
                        </h3>
                    </div>
                </div>
            </div>

       
            <div class="row">
                <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single_service">
                       
                            <div class="thumb">
                                <img height="400" width="500" src="transimage/<?php echo e($data->image); ?>" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html"><?php echo e($data->name); ?></a></h3>
                                <p><?php echo e($data->Speciality); ?></p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
       
    </div><?php /**PATH E:\totorial\global-transport\resources\views/user/fight.blade.php ENDPATH**/ ?>