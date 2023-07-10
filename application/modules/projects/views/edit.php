<div id="tabsV2" class="mb-5">
<!-- <h4>Tabs v2</h4>
<p>
This is an extended ui layout from default Bootstrap navigation tabs. Add <code>.nav-tabs-v2</code> to the navigation element in order to activate the v2 layout.
</p> -->
<div class="card">
<div class="card-body pt-1">
    
    <ul class="nav nav-tabs nav-tabs-v2">
        <li class="nav-item me-3"><a href="#project" class="nav-link active" data-bs-toggle="tab">Add Project</a></li>
    </ul>


<form method="post" action="<?php echo base_url();?>projects/update" class="was-validated" enctype="multipart/form-data">
<div class="tab-content pt-3">

    <div class="tab-pane fade show active" id="project">

		<div id="sizing" class="mb-5">

				<div class="row mb-n3">

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Project Name: </label>
                            <input type="hidden" name="id" value="<?php echo $edit_project['project_id']; ?>">
							<input type="text" name="project_name" class="form-control form-control-sm is-valid" value="<?php echo $edit_project['project_name']; ?>" placeholder="Project Name" required />
						</div>
					</div>

					<!-- <div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Employee Sex: </label>
							<select name="project_status" class="form-select form-select-sm" id="validationTooltip03" required>
								<option selected disabled value="">Choose...</option>
								<option>Pending</option>
								<option>Female</option>
								<option>Female</option>
							</select>
						</div>
					</div> -->

					<div class="col-xl-6">
						<div style="padding-bottom: 30px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Start Date: </label>
							<input class="form-control form-control-sm is-valid" type="date" value="<?php echo $edit_project['start_date']; ?>" name="start_date" placeholder="Start Date" required />
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 30px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Close Date: </label>
							<input class="form-control form-control-sm is-valid" type="date" value="<?php echo $edit_project['close_date']; ?>" name="close_date" placeholder="Close Date" required />
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Project For Which Department: </label>
							<select name="dep_id" class="form-select form-select-sm" id="validationTooltip03" required>
								<option selected disabled value="">Choose...</option>
								<?php foreach($get_department->result() as $d): ?>
								<option value="<?php echo $d->dep_id; ?>"><?php echo $d->dep_name; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="col-xl-6">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Select Project Status: </label>
							<select name="project_status" class="form-select form-select-sm" id="validationTooltip03" required>
								<option selected disabled value="">Choose...</option>
								<option value="<?php echo 0; ?>"><?php echo "Upcoming Project"; ?></option>
								<option value="<?php echo 1; ?>"><?php echo "Running Project"; ?></option>
								<option value="<?php echo 2; ?>"><?php echo "Finished Project"; ?></option>
							</select>
						</div>
					</div>

					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Add a Project Description: </label>
							<textarea name="project_description" class="summernote" id="contents" title="Contents" placeholder="Project Description..." required><?php echo $edit_project['project_description']; ?></textarea>
						</div>
					</div>

                    <div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<button style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm"> Update Project Data</button>
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