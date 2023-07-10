
<?php include('includes/header.php'); ?>

<div class="register">

    <div class="register-content">
        		<!-- Set Flash message -->
				<!-- --------------------------------------User Login failed alarts-------------------------------------- -->
				<?php if($this->session->flashdata('login_failed')):?>
					<div class="alert alert-danger alert-dismissable fade show p-3">
						<div class="row">
							<div class="col-lg-1">
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
							<div class="col-lg-11">
								<p class="mb-0"><?php echo $this->session->flashdata('login_failed'); ?></p>
							</div>
						</div>
					</div>
				<?php endif ;?>
				<!-- --------------------------------------User Login failed alarts-------------------------------------- -->

                <!-- Set Flash message -->
				<!-- --------------------------------------User Login passed alarts-------------------------------------- -->
                <?php if($this->session->flashdata('user_registered')):?>
                    <div class="alert alert-success alert-dismissable fade show p-3">
                        <div class="row">
                            <div class="col-lg-1">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                            <div class="col-lg-11">
                                <center>
                                    <p class="mb-0"><?php echo $this->session->flashdata('user_registered'); ?></p>
                                </center>
                            </div>
                        </div>
                    </div>
                <?php endif ;?>
				<!-- --------------------------------------User Login passed alarts-------------------------------------- -->

                <!-- Set Flash message -->
				<!-- --------------------------------------User Login passed alarts-------------------------------------- -->
                <?php if($this->session->flashdata('logout')):?>
                    <div class="alert alert-success alert-dismissable fade show p-3">
                        <div class="row">
                            <div class="col-lg-1">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                            <div class="col-lg-11">
                                <center>
                                    <p class="mb-0"><?php echo $this->session->flashdata('logout'); ?></p>
                                </center>
                            </div>
                        </div>
                    </div>
                <?php endif ;?>
				<!-- --------------------------------------User Login passed alarts-------------------------------------- -->
    <?php echo validation_errors();?>
    <form method="post" action="<?php echo base_url();?>users/login" class="was-validated" enctype="multipart/form-data">

            <h1 class="text-center"><?php echo "EMS"; ?></h1>
            <p class="text-white text-opacity-50 text-center">Login to your account</p>

            <div class="mb-3">
                <label class="form-label">Access Name  <span class="text-danger">*</span></label>
                <input type="text" name="username" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="Access Name / Username" required autofocus/>
            </div>

            <div class="mb-3">
                <label class="form-label">Access Password <span class="text-danger">*</span></label>
                <input type="password" name="password" minlength="5" maxlength="20" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="Access Password" required/>
            </div>

        <div class="mb-3">
        <div class="row gx-2">
        </div>
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100"> Login</button>
        </div>
        <div class="text-white text-opacity-50 text-center">
        Don't have an Access ID? <a href="<?php echo base_url(); ?>users/register">Create Access ID</a>
        </div>
        </form>
    </div>

</div>

<?php include('includes/footer.php'); ?>

