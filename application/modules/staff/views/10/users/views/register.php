
<?php include('includes/header.php'); ?>

			<div class="register">

				<div class="register-content">


                <?php echo validation_errors();?>
                <form method="post" action="<?php echo base_url();?>users/register" class="was-validated" enctype="multipart/form-data">
					    <h1 class="text-center"><?= $title; ?></h1>
					    <p class="text-white text-opacity-50 text-center">Register System User</p>

                        <div class="mb-3">
                            <label class="form-label">Select Departments <span class="text-danger">*</span></label>
                            <select name="department_id" class="form-select form-select-lg bg-white bg-opacity-5" required>
                                <option selected disabled value="">Choose...</option>
                                <?php foreach($get_departments->result() as $dep): ?>
                                <option value="<?php echo $dep->dep_id; ?>"><?php echo $dep->dep_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Access Positions <span class="text-danger">*</span></label>
                            <select name="user_access" class="form-select form-select-lg bg-white bg-opacity-5" required>
                                <option selected disabled value="">Registering as...</option>
                                <option value="1">Human Resource Manager</option>
                                <option value="0">Department Leader</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Access Name  <span class="text-danger">*</span></label>
                            <input type="text" name="username" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="Access Name / Username" required/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Access Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" minlength="5" maxlength="20" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="Access Password" required/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Access Password <span class="text-danger">*</span></label>
                            <input type="password" name="password2" minlength="5" maxlength="20" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="Confirm Access Password" required/>
                        </div>
					<div class="mb-3">
					<div class="row gx-2">
					</div>
					</div>
					<div class="mb-3">
					<button type="submit" class="btn btn-outline-theme btn-lg d-block w-100">Add System User</button>
					</div>
					<div class="text-white text-opacity-50 text-center">
					Already have an Access ID? <a href="<?php echo base_url(); ?>users/login">Sign In</a>
					</div>
					</form>
				</div>

			</div>

<?php include('includes/footer.php'); ?>

