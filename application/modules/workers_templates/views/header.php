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
<!-- --------------------------------------Salary Increment alarts-------------------------------------- -->
<?php if($this->session->flashdata('salary_request_failed')):?>
    <div class="alert alert-danger alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('salary_request_failed'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('salary_request_success')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('salary_request_success'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('leave_request_success')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('leave_request_success'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('leave_canceled')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('leave_canceled'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('cancel_salary_requests')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('cancel_salary_requests'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('worker_logged_in')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('worker_logged_in'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('worker_cv_upload')):?>
    <div class="alert alert-success alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('worker_cv_upload'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>

<!-- Set Flash message -->
<?php if($this->session->flashdata('cv_not_uploaded')):?>
    <div class="alert alert-danger alert-dismissable fade show p-3">
        <div class="row">
            <div class="col-lg-1">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="col-lg-11">
                <center>
                    <p class="mb-0"><?php echo $this->session->flashdata('cv_not_uploaded'); ?></p>
                </center>
            </div>
        </div>
    </div>
<?php endif ;?>



    <div class="row">
        <div class="col-lg-12">
            <h5 class="text-theme page-header text-uppercase"><span style="font-size: 20px; display: none;" class="text-light">All About - </span><?= $title; ?></h5>
        </div>
    </div>