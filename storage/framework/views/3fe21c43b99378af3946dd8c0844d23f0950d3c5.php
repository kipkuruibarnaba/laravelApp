

<?php $__env->startSection('title'); ?>

Trips App
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container border my-4" >
    <h4 class="text-center">Trip Details</h4>
    <div class="row justify-content-center">
        <div class="col-md-8">

      <?php $__currentLoopData = $decoded_data->trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    

         <div class="container border">
             <div class="row">
                <div class="col-md-6">
            Trips Details
                </div>
                <div class="col-md-6">
                  <div class="float-right">
                    
                  </div>
                 </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    Request Time:<strong><?php echo e($value->request_date); ?></strong>
                </div>
                <div class="col-md-6">
                  <div class="float-right">
                    <strong> <?php echo e($value->cost); ?> KES</strong>
                  </div>
                 </div>
            </div>
            <br>
            <hr style="border: none; border-bottom: 2px solid black;">
            <div class="row">
                <div class="col-md-6">
                  Pickup Time: <strong> <?php echo e($value->pickup_location); ?></strong>
                </div>
                <div class="col-md-6">
                  <div class="float-right">
                    <strong>  <?php echo e($value->pickup_date); ?></strong>
                  </div>
                 </div>
            </div>
         <br>

         <div class="row">
            <div class="col-md-6">
              Dropoff Time <strong> <?php echo e($value->dropoff_location); ?></strong>
            </div>
            <div class="col-md-6">
              <div class="float-right">
             <strong> <?php echo e($value->dropoff_date); ?></strong>
              </div>
             </div>
        </div>
        <hr style="border: none; border-bottom: 2px solid black;">
        <br>
        <br>
        <div class="row">
            <div class="col-md-3">
            
                <img src=" <?php echo e($value->car_pic); ?>" class="css-class" alt="alt text" height="70" width="100">
            
                <?php echo e($value->car_make); ?> 
            </div>
            <div class="col-md-3">
                Distance<br/>
               Duration<br/>
               Sub Total<br/>
            </div>
            <div class="col-md-3">
               <strong><?php echo e($value->distance); ?> km</strong><br/>
               <strong><?php echo e($value->duration); ?> min  </strong><br/>
               Driver Name: <strong><?php echo e($value->cost); ?> KES</strong>
             </div>
             <div class="col-md-3">
            Driver Name: <strong><?php echo e($value->driver_name); ?></strong>
            <img src=" <?php echo e($value->driver_pic); ?>" class="css-class" alt="alt text" height="40" width="70">
            </div>
        </div>


        <div>
            <iframe src="https://maps.google.com/maps?q='+<?php echo e($value->pickup_lat); ?>+','+<?php echo e($value->pickup_lng); ?>+'&hl=en&z=14&amp;output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>


         <br>
         </div>
         <hr style="border: none; border-bottom: 2px solid red;">
         <hr style="border: none; border-bottom: 2px solid red;">
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>   

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XAMPP\htdocs\tripsproject\resources\views/tripdetails.blade.php ENDPATH**/ ?>