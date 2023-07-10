
<?php include('includes/header.php'); ?>

<div class="register">

    <div class="register-content">

                <!-- Set Flash message -->
				<!-- --------------------------------------User Login passed alarts-------------------------------------- -->
                <?php if($this->session->flashdata('worker_no_login')):?>
                    <div class="alert alert-danger alert-dismissable fade show p-3">
                        <div class="row">
                            <div class="col-lg-1">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                            <div class="col-lg-11">
                                <center>
                                    <p class="mb-0"><?php echo $this->session->flashdata('worker_no_login'); ?></p>
                                </center>
                            </div>
                        </div>
                    </div>
                <?php endif ;?>
				<!-- --------------------------------------User Login passed alarts-------------------------------------- -->

                <!-- Set Flash message -->
				<!-- --------------------------------------User Login passed alarts-------------------------------------- -->
                <?php if($this->session->flashdata('worker_resigned')):?>
                    <div class="alert alert-danger alert-dismissable fade show p-3">
                        <div class="row">
                            <div class="col-lg-1">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                            <div class="col-lg-11">
                                <center>
                                    <p class="mb-0"><?php echo $this->session->flashdata('worker_resigned'); ?></p>
                                </center>
                            </div>
                        </div>
                    </div>
                <?php endif ;?>
				<!-- --------------------------------------User Login passed alarts-------------------------------------- -->

                				<!-- --------------------------------------User Login passed alarts-------------------------------------- -->
                                <?php if($this->session->flashdata('worker_logout')):?>
                    <div class="alert alert-success alert-dismissable fade show p-3">
                        <div class="row">
                            <div class="col-lg-1">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                            <div class="col-lg-11">
                                <center>
                                    <p class="mb-0"><?php echo $this->session->flashdata('worker_logout'); ?></p>
                                </center>
                            </div>
                        </div>
                    </div>
                <?php endif ;?>
				<!-- --------------------------------------User Login passed alarts-------------------------------------- -->
    <?php echo validation_errors();?>
    <form method="post" action="<?php echo base_url();?>users/worker_login" class="was-validated" enctype="multipart/form-data">

            <h1 class="text-center text-theme"><?= $title; ?></h1>
            <p class="text-white text-opacity-50 text-center">Login to your account</p>

            <div class="mb-3">
                <label class="form-label">Employee ID  <span class="text-danger">*</span></label>
                <input type="text" name="employee_id" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="Employee ID" required autofocus/>
            </div>

        <div class="mb-3">
        <div class="row gx-2">
        </div>
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100"> Login </button>
        </div>
        <div class="text-white text-opacity-50 text-center">
        <a href="<?php echo base_url(); ?>users/login">Departments Login</a>
        </div>
        </form>
    </div>

</div>

<?php include('includes/footer.php'); ?>

