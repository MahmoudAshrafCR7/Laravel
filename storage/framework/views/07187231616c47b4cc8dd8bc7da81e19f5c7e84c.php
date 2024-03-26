<?php echo $__env->make('includes.temp.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.temp.navbar_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<div class="wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                        <div class="col-md-12" style="margin-left: 100px">
                            <div class="card">
                                <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                                    <div>
                                        <?php echo e(('Orders')); ?> <span class="badge badge-info"> <?php echo e($ahmed->count()); ?></span>
                                    </div>

                                    <a href=<?php echo e(route('orders.create')); ?> class="btn btn-success float-right mb-3">Add New Order</a>
                                </div>
                                <?php if(session('success')): ?>
                                <h4 class="alert alert-success text-center"><?php echo e(session('success')); ?></h4>
                                <?php endif; ?>
                                <div class="card-body">
                                    <?php if($ahmed->count()>0): ?>
                                    <table class="table table-responsive">
                                        <thead>
                                          <tr>

                                            <th scope="col"><?php echo e(('IMAGE')); ?></th>
                                            <th scope="col"><?php echo e(('ID')); ?></th>
                                            <th scope="col"><?php echo e(('TITLE')); ?> </th>
                                            <th scope="col"><?php echo e(('DESCRIPTION')); ?></th>
                                            <th scope="col"><?php echo e(('CREATED_AT')); ?></th>
                                            <th scope="col"><?php echo e(('PARENT_ID')); ?></th>
                                            <th scope="col"><?php echo e(('OPERATION')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $ahmed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                              <th scope="row">
                                                <img src="<?php echo e(asset('img/orders/'.$item->ord_image)); ?>" style="height: 60px">
                                              </th>
                                              <th scope="row"><?php echo e($item->id); ?></th>
                                              <th scope="row"><?php echo e($item->title); ?></th>
                                              <th scope="row"><?php echo e($item->description); ?></th>
                                              <th scope="row"><?php echo e($item->created_at); ?></th>
                                              <th scope="row"><?php echo e($item->parent_id); ?></th>
                                              <th scope="row" class="d-flex">

                                                <a class="btn btn-success btn mr-1" href="<?php echo e(route('orders.show',$item->id)); ?>">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>

                                                <a class="btn btn-primary btn mr-1" href="<?php echo e(route('orders.edit',$item->id)); ?>">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>

                                                <a class="btn btn-danger" href="<?php echo e(route('orders.delete',$item->id)); ?>">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>

                                              </th>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                            <h2> No Data Yet..! </h2>
                                            <?php endif; ?>
                                        </tbody>
                                      </table>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-12" style="margin-left: 100px">
                            <div class="card">
                                <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center ">
                                    <div>
                                        <?php echo e(('Sections')); ?> <span class="badge badge-info" > <?php echo e($mohamed->count()); ?></span>
                                    </div>
                                    <a href=<?php echo e(route('sections.create')); ?> class="btn btn-success float-right mb-3">Add New Section</a>
                                </div>
                                <?php if(session('success')): ?>
                                <h4 class="alert alert-success text-center"><?php echo e(session('success')); ?></h4>
                                <?php endif; ?>
                                <div class="card-body">
                                    <?php if($mohamed->count()>0): ?>
                                    <table class="table table-responsive">
                                        <thead>
                                          <tr>
                                            <th scope="col"><?php echo e(('IMAGE')); ?></th>
                                            <th scope="col"><?php echo e(('ID')); ?></th>
                                            <th scope="col"><?php echo e(('NAME')); ?></th>
                                            <th scope="col"><?php echo e(('DESCRIPTION')); ?></th>
                                            <th scope="col"><?php echo e(('CREATED_AT')); ?></th>
                                            <th scope="col"><?php echo e(('OPERATION')); ?></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $mohamed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <th scope="row">
                                             <img src="<?php echo e(asset('img/sections/'.$item->sec_image)); ?>" style="height: 60px">
                                            </th>
                                              <th scope="row"><?php echo e($item->id); ?></th>
                                              <th scope="row"><?php echo e($item->name); ?></th>
                                              <th scope="row"><?php echo e($item->descripton); ?></th>
                                              <th scope="row"><?php echo e($item->created_at); ?></th>
                                              <th scope="row" class="d-flex">

                                                <a class="btn btn-success btn mr-1" href="<?php echo e(route('sections.show',$item->id)); ?>">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a class="btn btn-primary btn mr-1" href="<?php echo e(route('sections.edit',$item->id)); ?>">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>

                                                <a class="btn btn-danger" href="<?php echo e(route('sections.delete',$item->id)); ?>">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                              </th>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                            <h2>No Data Yet..!</h2>
                                            <?php endif; ?>
                                        </tbody>
                                      </table>
                                </div>
                              </div>
                        </div>

            </div>
        </div>
    </div>

</div>
</div>

<div class="fixed-plugin">
    <div class="dropdown dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>


<footer class="footer mb-5">
    <div class="container" style="padding-right: 270px">
        <nav >
            <p class="copyright">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="#">Mahmoud</a>, made with love for a better web
            </p>
        </nav>
    </div>
</footer>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\M7mod\Project\resources\views/home.blade.php ENDPATH**/ ?>