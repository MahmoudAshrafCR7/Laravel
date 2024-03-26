<?php echo $__env->make('includes.temp.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<a style="font-size: 50px" class="btn btn-succes" href=<?php echo e(route('home')); ?>>
    <i class="fa-solid fa-house"></i>
</a>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action=<?php echo e(route('sections.update')); ?> enctype="multipart/form-data" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="old_id" value=<?php echo e($moda->id); ?>>

            <label>Section Image</label>
            <input type="file" name="sec_image" class="form-control mb-4">
            <?php $__errorArgs = ['sec_image'];
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

            <label>Name_en</label>
            <input type="text" name="name_en" class="form-control mb-4" value="<?php echo e($moda->name_en); ?>">
            <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


            <label>Name_ar</label>
            <input type="text" name="name_ar" class="form-control mb-4" value="<?php echo e($moda->name_ar); ?>">
            <?php $__errorArgs = ['name_ar'];
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
            <input type="text" name="descripton_en" class="form-control mb-4" value="<?php echo e($moda->descripton_en); ?>">
            <?php $__errorArgs = ['descripton_en'];
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
            <input type="text" name="descripton_ar" class="form-control mb-4" value="<?php echo e($moda->descripton_en); ?>">

            <?php $__errorArgs = ['descripton_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label>Status</label>
            <select name="status" class="form-control mb-4">
                <option value="0">Block</option>
                <option value="1">Open</option>
            </select>

            <input type="submit" class="btn btn-primary btn-block" value="Save Edit">
        </form>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\M7mod\Project\resources\views/sections/edit.blade.php ENDPATH**/ ?>