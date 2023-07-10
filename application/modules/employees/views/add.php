<div id="tabsV2" class="mb-5">
<!-- <h4>Tabs v2</h4>
<p>
This is an extended ui layout from default Bootstrap navigation tabs. Add <code>.nav-tabs-v2</code> to the navigation element in order to activate the v2 layout.
</p> -->
<div class="card">
<div class="card-body pt-1">
    
    <ul class="nav nav-tabs nav-tabs-v2">
        <li class="nav-item me-3"><a href="#personal" class="nav-link active" data-bs-toggle="tab">Personal Info</a></li>
        <li class="nav-item me-3"><a href="#contact" class="nav-link" data-bs-toggle="tab">Contact Info</a></li>
        <li class="nav-item me-3"><a href="#education" class="nav-link" data-bs-toggle="tab">Education Info</a></li>
        <li class="nav-item me-3"><a href="#experience" class="nav-link" data-bs-toggle="tab">Skills And Experience</a></li>
    </ul>


<form method="post" action="<?php echo base_url();?>employees/add" class="was-validated" enctype="multipart/form-data">
<div class="tab-content pt-3">

    <div class="tab-pane fade show active" id="personal">

		<div id="sizing" class="mb-5">

				<div class="row mb-n3">

					<!-- <div class="col-xl-12">
						<center>
							<h5 class="page-header text-theme"> Contact Info </h5>
						</center>
					</div> -->

					<div class="col-xl-12">
							<center>
								<input type="file" name="userfile" id="photo" style="display: none;">
								<div class="col-xl-6 rounded">
									<center>
									<a class="zwicon-camera new-contact__upload"  onclick="$('#imgInp').click()"></a>
									<img id="blah"  style="border-radius: 50%;" class="img img-thumbnail" src="<?php echo base_url();?>assets/assets/images/employee_images/uploads/avt.png" width="200px" onclick="$('#photo').click()">
									</center>
								
								</div>
								<br>
								<div class="col-xl-6">
									<center>
									<p>Upload Employee Image</p>
									</center>
								</div>
							</center>
						<br>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee Names: </label>
							<input type="text" name="emp_name" class="form-control form-control-sm is-valid" value="" placeholder="Full Name" required />
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee Sex: </label>
							<select name="emp_sex" class="form-select form-select-sm" id="validationTooltip03" required>
								<option selected disabled value="">Choose...</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
					</div>

					<div class="col-xl-4">
						<div style="padding-bottom: 30px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Date Of Birth: </label>
							<input class="form-control form-control-sm is-valid" max="<?php echo date('Y-m-d'); ?>" type="date" name="emp_date_of_birth" placeholder="Date Of Birth" required />
						</div>
					</div>

					<div class="col-xl-4">
						<div style="padding-bottom: 30px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Date Joined: </label>
							<input class="form-control form-control-sm is-valid" max="<?php echo date('Y-m-d'); ?>" type="date" name="emp_date_of_joining" placeholder="Date Joined" required />
						</div>
					</div>

					<div class="col-xl-4">
						<div style="padding-bottom: 30px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee NIN Number: </label>
							<input class="form-control form-control-sm is-valid" type="text" name="emp_nin" minlength="14" maxlength="14" placeholder="NIN Number" required />
						</div>
					</div>

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Personal Description: </label>
							<textarea name="emp_description" class="summernote" id="contents" title="Contents" placeholder="Personal Description..." required></textarea>
						</div>
					</div>

				</div>
		</div>

    </div>




    <div class="tab-pane fade" id="contact">

		<div id="sizing" class="mb-5">
				<div class="row mb-n3">

					<!-- <div class="col-xl-12">
						<center>
							<h5 class="page-header text-theme"> Contact Info </h5>
						</center>
					</div> -->

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Phone Number: </label>
							<input type="text" name="emp_phone" class="form-control form-control-sm is-valid" placeholder="Phone Number" required />
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee Email: </label>
							<input type="email" name="emp_email" class="form-control form-control-sm is-valid" placeholder="Email" required />
						</div>
						<br>
					</div>


					<!-- Social Media -->
					<div class="col-xl-12">
						<center>
							<h5 class="page-header text-theme"> Social Media </h5>
						</center>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Facebook: </label>
							<input type="text" name="emp_facebook" class="form-control form-control-sm is-valid" placeholder="Your Facebook Account"/>
						</div>
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Linked In: </label>
							<input type="text" name="emp_linkedin" class="form-control form-control-sm is-valid" placeholder="Your LinkedIn Account"/>
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Twitter: </label>
							<input type="text" name="emp_twitter" class="form-control form-control-sm is-valid" placeholder="Your Twitter Account"/>
						</div>
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Instagram: </label>
							<input type="text" name="emp_instagram" class="form-control form-control-sm is-valid" placeholder="Your Instagram Account"/>
						</div>
					</div>
					<!-- Social Media -->



					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee Address: </label>
							<textarea name="emp_address" class="summernote" id="contents" title="Contents" placeholder="Your Address..." required></textarea>
						</div>
					</div>
				</div>
		</div>

    </div>

    <div class="tab-pane fade" id="education">

		<div id="sizing" class="mb-5">
				<div class="row mb-n3">

					<!-- <div class="col-xl-12">
						<center>
							<h5 class="page-header text-theme"> Education Info </h5>
						</center>
					</div> -->

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Level Of Education: </label>
							<select name="education_id" class="form-select form-select-sm" id="validationTooltip03" required>
								<option selected disabled value="">Choose...</option>
								<?php foreach($education->result() as $edu): ?>
								<option value="<?php echo $edu->education_id; ?>"><?php echo $edu->education_level; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

				</div>
		</div>

    </div>



    <div class="tab-pane fade" id="experience">

		<div id="sizing" class="mb-5">
				<div class="row mb-n3">

					<!-- <div class="col-xl-12">
						<center>
							<h5 class="page-header text-theme"> Contact Info </h5>
						</center>
					</div> -->

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Former Employer: </label>
							<input type="text" name="former_employer" class="form-control form-control-sm is-valid" placeholder="Former Employer" required />
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> From: </label>
							<input type="date" max="<?php echo date('Y-m-d'); ?>" name="former_employer_date_from" class="form-control form-control-sm is-valid" placeholder="Email" required />
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> To: </label>
							<input type="date" max="<?php echo date('Y-m-d'); ?>" name="former_employer_date_to" class="form-control form-control-sm is-valid" placeholder="Email" required />
						</div>
						<br>
					</div>


					<!-- Social Media -->
					<div class="col-xl-12">
						<center>
							<p class="text-theme"> JOINING OUR COMPANY </p>
						</center>
					</div>

					<div class="col-xl-3">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Select Department: </label>
							<select name="department_id" class="form-select form-select-sm" id="validationTooltip03" required>
								<option selected disabled value="">Choose...</option>

								<?php foreach($departments->result() as $dep): ?>
									<option value="<?php echo $dep->dep_id; ?>"><?php echo $dep->dep_name; ?></option>
								<?php endforeach; ?>

							</select>
						</div>
					</div>

					<div class="col-xl-3">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Select Country: </label>
							<select name="country_id" class="form-select form-select-sm" id="validationTooltip03" required>
								<option selected disabled value="">Choose...</option>
								<?php foreach($countries->result() as $country): ?>
									<option value="<?php echo $country->country_id; ?>" ><?php echo $country->country_name; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="col-xl-3">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Select Currency: </label>
							<select name="currency" class="form-select form-select-sm" id="validationTooltip03" required>
								<option selected disabled value="">Choose...</option>
									<option value="ugx">UGX</option>
									<option value="usd">USD</option>
							</select>
						</div>
					</div>

					<div class="col-xl-3">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Salary: </label>
							<input type="number" name="emp_salary" class="form-control form-control-sm is-valid" min="0" placeholder="Salary" required />
						</div>
						<br>
					</div>

					<!-- Social Media -->

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<button style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">Add Employee Now</button>
						</div>
					</div>
				</div>
		</div>

    </div>

</div>
</form>

</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
</div>

<!-- <script src="<?php echo base_url(); ?>assets/assets/custom/custom.js"></script> -->