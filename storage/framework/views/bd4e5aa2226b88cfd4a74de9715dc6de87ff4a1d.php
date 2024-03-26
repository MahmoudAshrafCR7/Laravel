<?php echo $__env->make('includes.temp.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<a style="font-size: 50px" class="btn btn-succes" href=<?php echo e(route('home')); ?>>
    <i class="fa-solid fa-house"></i>
</a>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action=<?php echo e(route('orders.update')); ?> enctype="multipart/form-data" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="old_id" value=<?php echo e($moda->id); ?>>

            <label>Order Image</label>
            <input type="file" name="ord_image" class="form-control mb-4">
            <?php $__errorArgs = ['ord_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label>ID</label>
            <input type="text" name="id" class="form-control mb-4" value="<?php echo e($moda->id); ?>">
            <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label>Title_en</label>
            <input type="text" name="title_en" class="form-control mb-4" value="<?php echo e($moda->title_en); ?>">
            <?php $__errorArgs = ['title_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


            <label>Title_ar</label>
            <input type="text" name="title_ar" class="form-control mb-4" value="<?php echo e($moda->title_ar); ?>">
            <?php $__errorArgs = ['title_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


            <label>Description_en</label>
            <input type="text" name="description_en" class="form-control mb-4" value="<?php echo e($moda->description_en); ?>">
            <?php $__errorArgs = ['description_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


            <label>Description_ar</label>
            <input type="text" name="description_ar" class="form-control mb-4" value="<?php echo e($moda->description_en); ?>">

            <?php $__errorArgs = ['description_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label>Parent_id</label>
            <select name="parent_id" class="form-control mb-4">
                <option value=<?php echo e($moda->parent_id); ?> selected><?php echo e($moda->parent_id); ?></option>
                <?php if($moda->parent_id==0): ?>

                <?php else: ?>
                <option value="0">Main Order</option>
                <?php endif; ?>
                <?php $__currentLoopData = $alldata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value=<?php echo e($item->id); ?>><?php echo e($item->id); ?>-<?php echo e($item->title_en); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <input type="submit" class="btn btn-primary btn-block " value=" Save Edit">
        </form>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\M7mod\Project\resources\views/orders/edit.blade.php ENDPATH**/ ?>