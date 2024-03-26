
    <div  class="sidebar" data-image="../assets/img/sidebar-5.jpg">
        <div  class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo e(route('home')); ?>" class="simple-text">
                     My Dashboard
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>" >
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <i class="nc-icon nc-circle-09"></i>
                        <p>Tables</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <i class="nc-icon nc-paper-2"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <i class="nc-icon nc-atom"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="nav-item active active-pro">
                    <a class="nav-link active pl-5"
                    href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <?php echo e(__('Logout')); ?> <i class="fa-solid fa-right-from-bracket"></i>
                 </a>
                </li>
            </ul>
        </div>
    </div>
<?php /**PATH C:\Users\M7mod\Project\resources\views/includes/temp/navbar_dashboard.blade.php ENDPATH**/ ?>