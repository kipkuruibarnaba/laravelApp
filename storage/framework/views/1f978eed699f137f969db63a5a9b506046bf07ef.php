


<?php $__env->startSection('title'); ?>

Trips App
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container border my-4" >
    <div class="card">
        <h3 class="text-center my-5">Trip Search results</h3>
    </div>
    <h4 class="text-center">Complete and cancelled Trips between 8km to 15km</h4>
    <div class="row justify-content-center">
        <div class="col-md-8">

      <?php $__currentLoopData = $decoded_data->trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
       
       <?php if(($value->distance >='8' && $value->distance <'15') && ($value->duration >='10' && $value->duration <'20')): ?>  

         <div class="container border">
             <div class="row">
                <div class="col-md-6">
                 <?php echo e($value->request_date); ?>

                </div>
                <div class="col-md-6">
                  <div class="float-right">
                  <strong> <?php echo e($value->cost); ?> KES</strong>
                  </div>
                 </div>
            </div>
            <div class="float-right">
              Ratings : <?php echo e($value->driver_rating); ?>

            </div>
            <br>
            <div class="float-left">
                <i class="fa fa-circle" aria-hidden="true" style="color:#02FC06";></i>
                <?php echo e($value->pickup_location); ?>

            </div>
            <br>
            <br>
         <div class="location">
            <i class="fa fa-circle" aria-hidden="true"  style="color:#FA3106;"></i>
            <?php echo e($value->dropoff_location); ?>

         </div>
         <br>
         <div class="col-md-10">
         <div class="float-right">
            <?php if($value->status =='COMPLETED'): ?>
                <?php echo e($value->status); ?>

                <i class="fa fa-check" aria-hidden="true"  style="color:#02FC06;"></i>
            <?php else: ?> 
              <div class="text-danger">
                <?php echo e($value->status); ?>

                <i class="fa fa-ban" aria-hidden="true" style="color:#FA3106;"></i>      
              </div>         
            <?php endif; ?>
         </div>
         <br>
         </div>
         <br>
         </div>

         <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>   

       
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XAMPP\htdocs\tripsproject\resources\views/distanceunder15kmall.blade.php ENDPATH**/ ?>