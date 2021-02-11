<?php
$currentRouteName = Route::currentRouteName();
?>

<?php
$is_settins_menu_open = false;
$web_content_main_menu_open = false;
$web_content_child_menu_open = false;
if (
fnmatch( 'admin.users*', $currentRouteName) ||
fnmatch( 'admin.roles*', $currentRouteName) ||
fnmatch( 'admin.departments*', $currentRouteName) ||
fnmatch( 'admin.designations*', $currentRouteName) ||
fnmatch( 'admin.projects*', $currentRouteName) ||
fnmatch( 'admin.shares*', $currentRouteName)
){
$is_settins_menu_open = true;
}
if (
fnmatch( 'admin.cms*', $currentRouteName) && ($currentRouteName == 'admin.cms.homesection')
){
$web_content_main_menu_open = true;
}
else if(
fnmatch( 'admin.cms*', $currentRouteName) && ($currentRouteName != 'admin.cms.homesection')
)
{
$web_content_main_menu_open = true;
$web_content_child_menu_open = true;
}
?>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mb-3 d-blok">
        <div class="image">

            <?php if(!empty(Auth::user()->photo)): ?>
            <img src="<?php echo e(asset( Auth::user()->photo )); ?>" class="img-circle elevation-2" alt="User Image">
            <?php else: ?>
            <img src="<?php echo e(asset( 'backend/img/default/no-image-human.png')); ?>" class="img-circle elevation-2" alt="User Image">
            <?php endif; ?>
        </div>
        <div class="info">
            <a href="<?php echo e(route('admin.logout')); ?>" class="d-block"><?php echo e(Auth::user()->name); ?></a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Dashboard -->
            <li class="nav-item">
                <a href="<?php echo e(route('admin.dashboard')); ?>"
                    class="nav-link <?php if($currentRouteName == 'admin.dashboard' ): ?> active <?php endif; ?>">
                    <i class="far fas fa-tachometer-alt nav-icon"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <!-- Investor -->
            <li class="nav-item">
                <a href="<?php echo e(route('admin.investors.index')); ?>"
                    class="nav-link <?php if(fnmatch( 'admin.investors*', $currentRouteName)): ?> active <?php endif; ?> ">
                    <i class="fas fa-hand-holding-usd  nav-icon"></i>
                    <p>Investor</p>
                </a>
            </li>

            <!-- Investor -->
            <li class="nav-item">
                <a href="<?php echo e(route('admin.invoice.index')); ?>" class="nav-link">
                    <i class="fas fa-file-invoice  nav-icon"></i>
                    <p>Invoice</p>
                </a>
            </li>

            <!-- Web Content -->
            <li class="nav-item <?php if($web_content_main_menu_open): ?> menu-open <?php endif; ?> has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-globe"></i>
                    <p> Web Content <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.cms.homesection')); ?>"
                            class="nav-link <?php if(fnmatch( 'admin.cms.homesection', $currentRouteName )): ?> active <?php endif; ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Home Section</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if($web_content_child_menu_open): ?> menu-open <?php endif; ?> has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle"></i>
                            <p>
                                Details Section
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.cms.overview')); ?>"
                                    class="nav-link <?php if(fnmatch( 'admin.cms.overview', $currentRouteName )): ?> active <?php endif; ?>">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Overview</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.cms.modernliving')); ?>"
                                    class="nav-link <?php if(fnmatch( 'admin.cms.modernliving', $currentRouteName )): ?> active <?php endif; ?>">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Modernliving</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.cms.galleryList')); ?>"
                                    class="nav-link <?php if(fnmatch( 'admin.cms.galleryList', $currentRouteName )): ?> active <?php endif; ?>">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Gallery</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.cms.login')); ?>"
                                    class="nav-link <?php if(fnmatch( 'admin.cms.login', $currentRouteName )): ?> active <?php endif; ?>">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.cms.footer.create')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Footer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.cms.aboutUs')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>About Us</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.cms.findJobsList')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Find a Job</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.cms.publicationList')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Publiation</p>
                        </a>
                    </li>
























                </ul>
            </li>































            <!-- Configuration -->
            <li class="nav-item <?php if($is_settins_menu_open): ?> menu-open <?php endif; ?>">
                <a href="#" class="nav-link <?php if($is_settins_menu_open): ?> active <?php endif; ?>">
                    <i class="fas fa-cogs  nav-icon"></i>
                    <p>Settings <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.users.index')); ?>"
                            class="nav-link <?php if(fnmatch( 'admin.users*', $currentRouteName )): ?> active <?php endif; ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.roles.index')); ?>"
                            class="nav-link <?php if(fnmatch( 'admin.roles*', $currentRouteName)): ?> active <?php endif; ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Role</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.departments.index')); ?>"
                            class="nav-link <?php if(fnmatch( 'admin.departments*', $currentRouteName)): ?> active <?php endif; ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Department</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.designations.index')); ?>"
                            class="nav-link <?php if(fnmatch( 'admin.designations*', $currentRouteName)): ?> active <?php endif; ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Designations</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.projects.index')); ?>"
                            class="nav-link <?php if(fnmatch( 'admin.projects*', $currentRouteName)): ?> active <?php endif; ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Project</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.shares.index')); ?>"
                            class="nav-link <?php if(fnmatch( 'admin.shares*', $currentRouteName)): ?> active <?php endif; ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Share</p>
                        </a>
                    </li>






                </ul>
            </li>






            <li class="nav-item">
                <a href="<?php echo e(route('admin.inquiry')); ?>"
                    class="nav-link <?php if($currentRouteName == 'admin.inquiry' ): ?> active <?php endif; ?>">
                    <i class="fas fa-file-invoice nav-icon"></i>
                    <p>Inquiry History</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
<?php /**PATH E:\xampp\htdocs\mangrove-hotel\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>