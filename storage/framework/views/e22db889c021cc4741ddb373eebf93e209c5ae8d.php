<?php echo $__env->make('includes.temp.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">

            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"><?php echo e(__('languge.ID')); ?></th>
                        <th scope="col"><?php echo e(__('languge.TITLE')); ?> </th>
                        <th scope="col">Title </th>
                        <th scope="col"><?php echo e(__('languge.DESCRIPTION')); ?></th>
                        <th scope="col">Description</th>
                        <th scope="col"><?php echo e(__('languge.PARENT_ID')); ?></th>
                        <th scope="col"><?php echo e(__('languge.CREATED_AT')); ?></th>
                        <th scope="col"><?php echo e(__('languge.OPERATION')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th scope="row"><?php echo e($moda->id); ?></th>
                          <th scope="row"><?php echo e($moda->title_en); ?></th>
                          <th scope="row"><?php echo e($moda->title_ar); ?></th>
                          <th scope="row"><?php echo e($moda->description_en); ?></th>
                          <th scope="row"><?php echo e($moda->description_ar); ?></th>
                          <th scope="row"><?php echo e($moda->parent_id); ?></th>
                          <th scope="row"><?php echo e($moda->created_at); ?></th>
                          <th scope="row">
                            <a  class="btn btn-success" href="<?php echo e(route('home')); ?>">
                                <i class="fa-solid fa-house"></i>
                            </a>
                          </th>
                        </tr>
                    </tbody>
                  </table>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\M7mod\Project\resources\views/orders/show.blade.php ENDPATH**/ ?>