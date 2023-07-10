<div id="tabsV2" class="mb-5">
<!-- <h4>Tabs v2</h4>
<p>
This is an extended ui layout from default Bootstrap navigation tabs. Add <code>.nav-tabs-v2</code> to the navigation element in order to activate the v2 layout.
</p> -->
<div class="card">
<div class="card-body pt-1">
    
    <ul class="nav nav-tabs nav-tabs-v2">
        <li class="nav-item me-3"><a href="#personal" class="nav-link active" data-bs-toggle="tab">Add Department</a></li>
    </ul>


<form method="post" action="<?php echo base_url();?>departments/update" class="was-validated" enctype="multipart/form-data">
<div class="tab-content pt-3">

    <div class="tab-pane fade show active" id="personal">

		<div id="sizing" class="mb-5">

				<div class="row mb-n3">
					<input type="hidden" name="id" value="<?php echo $edit_dep['dep_id']; ?>">
					<div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Departments Name: </label>
							<input type="text" name="dep_name" class="form-control form-control-sm is-valid" value="<?php echo $edit_dep['dep_name']; ?>" placeholder="Type Departments Name" required/>
						</div>
					</div>

                    <div class="col-xl-12">
						<div style="padding-bottom: 20px;" class="form-group">
							<button style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">Update Department</button>
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