<div id="tabsV2" class="mb-5">
<!-- <h4>Tabs v2</h4>
<p>
This is an extended ui layout from default Bootstrap navigation tabs. Add <code>.nav-tabs-v2</code> to the navigation element in order to activate the v2 layout.
</p> -->
<div class="card">
<div class="card-body pt-1">
    
    <!-- <ul class="nav nav-tabs nav-tabs-v2">
        <li class="nav-item me-3"><a href="#personal" class="nav-link active" data-bs-toggle="tab">Personal Info</a></li>
        <li class="nav-item me-3"><a href="#contact" class="nav-link" data-bs-toggle="tab">Contact Info</a></li>
        <li class="nav-item me-3"><a href="#education" class="nav-link" data-bs-toggle="tab">Education Info</a></li>
        <li class="nav-item me-3"><a href="#experience" class="nav-link" data-bs-toggle="tab">Skills And Experience</a></li>
    </ul> -->


<form method="post" action="<?php echo base_url();?>workers/salary/request" class="was-validated" enctype="multipart/form-data">
<div class="tab-content pt-3">

    <div class="tab-pane fade show active" id="personal">

		<div id="sizing" class="mb-5">

				<div class="row mb-n3">

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Your ID: </label>
							<input type="text" name="employee_id" class="form-control form-control-sm is-valid" value="" placeholder="Your ID" required />
						</div>
					</div>


					<?php if($salary['salary'] == 0){ ?>
						<div class="col-xl-12">
							<div style="padding-bottom: 30px;" class="form-group">
								<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Active Salary: </label>
								<input class="form-control form-control-sm is-valid" value="<?php echo number_format($salary['dollar_salary'], 2); ?>" type="text" name="active_salary" placeholder="Active Salary" required disabled/>
							</div>
						</div>
					<?php }elseif(!$salary['salary']== 0){ ?>
						<div class="col-xl-12">
							<div style="padding-bottom: 30px;" class="form-group">
								<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Active Salary: </label>
								<input class="form-control form-control-sm is-valid" value="<?php echo number_format($salary['salary'], 2); ?>" type="text" name="active_salary" placeholder="Active Salary" required disabled/>
							</div>
						</div>
					<?php }else{ ?>
						<?php echo 'Salary Undefined'; ?>
					<?php }?>

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Pleave give us a peace of description: </label>
							<textarea name="message" class="summernote" id="contents" title="Contents" placeholder="Description..." required></textarea>
						</div>
						<br>
					</div>

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<button style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">Send Salary Request Now</button>
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