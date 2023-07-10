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


<form method="post" action="<?php echo base_url()."employees/update/".$edit_employee_data['emp_image'];?><?php //echo $edit_employee_data['emp_image'];?>" class="was-validated" enctype="multipart/form-data">
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
									<img  style="border-radius: 50%;" class="img img-thumbnail" src="<?php echo base_url();?>assets/assets/images/employee_images/uploads/<?php echo $edit_employee_data['emp_image'];?>" width="200px" onclick="$('#photo').click()">
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
					<input type="hidden" name="id" value="<?php echo $edit_employee_data['emp_id'];?>" >
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee Names: </label>
							<input type="text" name="emp_name" class="form-control form-control-sm is-valid" value="<?php echo $edit_employee_data['emp_name'];?>" placeholder="Full Name" required />
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee Sex: </label>
							<select name="emp_sex" class="form-select form-select-sm" id="validationTooltip03" required>
								<option><?php echo $edit_employee_data['emp_sex'];?></option>
							</select>
						</div>
					</div>

					<div class="col-xl-4">
						<div style="padding-bottom: 30px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Date Of Birth: </label>
							<input class="form-control form-control-sm is-valid" type="date" value="<?php echo $edit_employee_data['emp_date_of_birth'];?>" name="emp_date_of_birth" placeholder="Date Of Birth" required />
						</div>
					</div>

					<div class="col-xl-4">
						<div style="padding-bottom: 30px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Date Joined: </label>
							<input class="form-control form-control-sm is-valid" type="date" value="<?php echo $edit_employee_data['emp_date_of_joining'];?>" name="emp_date_of_joining" placeholder="Date Joined" required />
						</div>
					</div>

					<div class="col-xl-4">
						<div style="padding-bottom: 30px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee NIN Number: </label>
							<input class="form-control form-control-sm is-valid" type="text" value="<?php echo $edit_employee_data['emp_nin'];?>" name="emp_nin" minlength="14" maxlength="14" placeholder="NIN Number" required />
						</div>
					</div>

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Personal Description: </label>
							<textarea name="emp_description" class="summernote" id="contents" title="Contents" placeholder="Personal Description..." required><?php echo $edit_employee_data['emp_description'];?></textarea>
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
							<input type="text" name="emp_phone" value="<?php echo $edit_employee_data['emp_phone'];?>" class="form-control form-control-sm is-valid" placeholder="Phone Number" required />
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee Email: </label>
							<input type="email" name="emp_email" value="<?php echo $edit_employee_data['emp_email'];?>" class="form-control form-control-sm is-valid" placeholder="Email" required />
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
							<input type="text" name="emp_facebook" value="<?php echo $edit_employee_data['emp_facebook'];?>" class="form-control form-control-sm is-valid" placeholder="Your Facebook Account"/>
						</div>
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Linked In: </label>
							<input type="text" name="emp_linkedin" value="<?php echo $edit_employee_data['emp_linkedin'];?>" class="form-control form-control-sm is-valid" placeholder="Your LinkedIn Account"/>
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Twitter: </label>
							<input type="text" name="emp_twitter" value="<?php echo $edit_employee_data['emp_twitter'];?>" class="form-control form-control-sm is-valid" placeholder="Your Twitter Account"/>
						</div>
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Instagram: </label>
							<input type="text" name="emp_instagram" value="<?php echo $edit_employee_data['emp_instagram'];?>" class="form-control form-control-sm is-valid" placeholder="Your Instagram Account"/>
						</div>
					</div>
					<!-- Social Media -->



					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee Address: </label>
							<textarea name="emp_address" class="summernote" id="contents" title="Contents" placeholder="Your Address..." required><?php echo $edit_employee_data['emp_address'];?></textarea>
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
							<input type="text" name="former_employer" value="<?php echo $edit_employee_data['former_employer'];?>" class="form-control form-control-sm is-valid" placeholder="Former Employer" required />
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> From: </label>
							<input type="date" name="former_employer_date_from" value="<?php echo $edit_employee_data['date_from'];?>" class="form-control form-control-sm is-valid" placeholder="Email" required />
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> To: </label>
							<input type="date" name="former_employer_date_to" value="<?php echo $edit_employee_data['date_to'];?>" class="form-control form-control-sm is-valid" placeholder="Email" required />
						</div>
						<br>
					</div>


					<!-- Social Media -->
					<div class="col-xl-12">
						<center>
							<p class="text-theme"> WORKING IN OUR COMPANY</p>
						</center>
					</div>

					<div class="col-xl-6">
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

					<div class="col-xl-6">
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
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Select Activity: </label>
							<select name="emp_status" class="form-select form-select-sm" id="validationTooltip03" required>
									<option selected disabled value="">Choose...</option>
									<option value="1" >Still working with us</option>
									<option value="0" >Not working with us any more</option>
							</select>
						</div>
					</div>

					<div class="col-xl-3">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee ID: </label>
							<input type="text" name="employee_id" value="<?php echo $edit_employee_data['employee_id'];?>" class="form-control form-control-sm is-valid" min="0" placeholder="Employee ID" required />
						</div>
						<br>
					</div>

					<div class="col-xl-3">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Currency </label>
							<select name="currency" class="form-select form-select-sm" id="validationTooltip03" required>
									<option selected disabled value="">Choose...</option>

									
									<?php if($edit_employee_data['salary'] == 0){ ?>
										<option value="usd" selected>
										<?php echo "USD:"; ?>
										</option>
									<?php }elseif(!$edit_employee_data['salary'] == 0){ ?>
										<option value="ugx" selected>
										<?php echo "UGX:"; ?>
										</option>
									<?php }else{ ?>
										<?php echo 'Salary Undefined'; ?>
									<?php }?>
									
	
							</select>
						</div>
					</div>

					<div class="col-xl-3">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Salary: </label>
								<?php if($edit_employee_data['salary'] == 0){ ?>							
									<input type="number" name="emp_salary" value="<?php echo $edit_employee_data['dollar_salary']; ?>" class="form-control form-control-sm is-valid" min="0" placeholder="Salary" required />
								<?php }elseif(!$edit_employee_data['salary'] == 0){ ?>
									<input type="number" name="emp_salary" value="<?php echo $edit_employee_data['salary']; ?>" class="form-control form-control-sm is-valid" min="0" placeholder="Salary" required />
								<?php }else{ ?>
									<?php echo 'Salary Undefined'; ?>
								<?php }?>
							
						</div>
						<br>
					</div>
					<!-- Social Media -->

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<button style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">Update Employee Info</button>
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