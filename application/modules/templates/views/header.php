<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/hud/layout_starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 12:55:36 GMT -->
<head>

<!-- CSS Styles -->
    <?php
        $css_styles = "styles/css_styles.php";
        include($css_styles);
    ?>
<!-- CSS Styles -->

</head>
<body>

<div id="app" class="app">



<!-- TopBar Starts Here -->
<div id="header" class="app-header">

    <!-- Taggle Button Desktop -->
        <?php
            $desktop = "header_includes/taggle_button_desktop.php";
            include($desktop);
        ?>
    <!-- Taggle Button Desktop -->



    <!-- Taggle Button Mobile -->
        <?php
            $mobile = "header_includes/taggle_button_mobile.php";
            include($mobile);
        ?>
    <!-- Taggle Button Mobile -->



    <!-- Admin Logo -->
        <?php
            $admin_logo = "header_includes/admin_logo.php";
            include($admin_logo);
        ?>
    <!-- Admin Logo -->


<div class="menu">

    <!-- Search Button -->
        <?php
            // $search_button = "header_includes/search_button.php";
            // include($search_button);
        ?>
    <!-- Search Button -->


    <!-- Management -->
        <?php
            // $management = "header_includes/management.php";
            // include($management);
        ?>
    <!-- Management -->


    <!-- Notifications -->
        <?php
            // $notifications = "header_includes/notifications.php";
            // include($notifications);
        ?>
    <!-- Notifications -->



    <!-- User Pannel -->
        <?php
            $user_pannel = "header_includes/user_pannel.php";
            include($user_pannel);
        ?>
    <!-- User Pannel -->


</div>


	<!-- TopBar Search Form -->
        <?php
            // $topbar_search_form = "header_includes/topbar_search_form.php";
            // include($topbar_search_form);
        ?>
	<!-- TopBar Search Form -->



</div>
<!-- TopBar Ends Here -->





    <!-- SideBar Here -->
        <?php
            $sidebar = "header_includes/sidebar.php";
            include($sidebar);
        ?>
    <!-- SideBar Here -->




<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


<!-- Main Content -->
<div id="content" class="app-content">

<!-- Set Flash message -->
<!-- --------------------------------------Departments alarts-------------------------------------- -->
<?php if($this->session->flashdata('department_added')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('department_added'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('department_updated')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('department_updated'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('department_deleted')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('department_deleted'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>
<!-- --------------------------------------Departments alarts-------------------------------------- -->


<!-- Set Flash message -->
<!-- --------------------------------------Employees alarts-------------------------------------- -->
<?php if($this->session->flashdata('employee_add')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('employee_add'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('cv_upload')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('cv_upload'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('employee_update')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('employee_update'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('employee_delete')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('employee_delete'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>
<!-- --------------------------------------Employees alarts-------------------------------------- -->






<!-- Set Flash message -->
<!-- --------------------------------------Leaves alarts-------------------------------------- -->
<?php if($this->session->flashdata('leave_request')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('leave_request'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('leave_aprove')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('leave_aprove'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('leave_pending')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('leave_pending'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('leave_reject')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('leave_reject'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>
<!-- --------------------------------------Leaves alarts-------------------------------------- -->



<!-- Set Flash message -->
<!-- --------------------------------------Loans alarts-------------------------------------- -->
<?php if($this->session->flashdata('loan_request')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('loan_request'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('loan_aprove')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('loan_aprove'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('loan_pending')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('loan_pending'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('loan_reject')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('loan_reject'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('loan_pay')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('loan_pay'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('loan_settled')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('loan_settled'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('loan_deleted')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('loan_deleted'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('loan_pay_failed')):?>
    <div class="alert alert-danger alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('loan_pay_failed'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>
<!-- --------------------------------------Loans alarts-------------------------------------- -->





<!-- Set Flash message -->
<!-- --------------------------------------Projects alarts-------------------------------------- -->
<?php if($this->session->flashdata('project_add')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('project_add'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('project_update')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('project_update'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('project_delete')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('project_delete'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>
<!-- --------------------------------------Projects alarts-------------------------------------- -->


<!-- Set Flash message -->
<!-- --------------------------------------Projects alarts-------------------------------------- -->
<?php if($this->session->flashdata('salary_update')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('salary_update'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>
<!-- --------------------------------------Projects alarts-------------------------------------- -->


<!-- Set Flash message -->
<!-- --------------------------------------User Login passed alarts-------------------------------------- -->
<?php if($this->session->flashdata('login_passed')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('login_passed'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>
<!-- --------------------------------------User Login passed alarts-------------------------------------- -->


<!-- Set Flash message -->
<!-- --------------------------------------User Login passed alarts-------------------------------------- -->
<?php if($this->session->flashdata('id_update')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('id_update'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>
<!-- --------------------------------------User Login passed alarts-------------------------------------- -->


<!-- Set Flash message -->
<!-- --------------------------------------User Login passed alarts-------------------------------------- -->
<?php if($this->session->flashdata('salary_rejected')):?>
    <div class="alert alert-danger alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('salary_rejected'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>
<!-- --------------------------------------User Login passed alarts-------------------------------------- -->


    <div class="row">
        <div class="col-lg-12">
            <h5 class="text-theme page-header text-uppercase"><span style="font-size: 20px; display: none;" class="text-light">All About - </span><?= $title; ?></h5>
        </div>
    </div>