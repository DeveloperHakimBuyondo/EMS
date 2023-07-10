<div id="tabsV2" class="mb-5">
<!-- <h4>Tabs v2</h4>
<p>
This is an extended ui layout from default Bootstrap navigation tabs. Add <code>.nav-tabs-v2</code> to the navigation element in order to activate the v2 layout.
</p> -->
<div class="card">
<div class="card-body pt-1">
    
    <ul class="nav nav-tabs nav-tabs-v2">
        <li class="nav-item me-3"><a href="#personal" class="nav-link active" data-bs-toggle="tab">Upload CV</a></li>
    </ul>


<form method="post" action="<?php echo base_url();?>employees/upload_cv" class="was-validated" enctype="multipart/form-data">
<div class="tab-content pt-3">

    <div class="tab-pane fade show active" id="personal">
		<div id="sizing" class="mb-5">
            <div class="row mb-n3">

                <div class="col-xl-6">
                    <div style="padding-bottom: 20px;" class="form-group">
                        <label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Staff List: </label>
                        <select name="emp_id" class="form-select form-select-sm" id="validationTooltip03" required>
                            <option selected disabled value="">Select Employee</option>
                            <?php foreach($employees->result() as $emp): ?>
                                <option value="<?php echo $emp->emp_id; ?>" ><?php echo $emp->emp_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <br>
                </div>

                <div class="col-xl-6">
                        <center>
                            <input type="file" name="userfile" id="emp_cv" style="display: none;">
                            <div class="col-xl-6 rounded">
                                <center>
                                <img  style="border-radius: 16%;" class="img img-thumbnail" src="<?php echo base_url();?>assets/assets/images/employee_images/uploads/cv/cv.png" width="200px" onclick="$('#emp_cv').click()">
                                </center>
                            
                            </div>
                            <br>
                            <div class="col-xl-6">
                                <center>
                                <p>Upload Employee CV</p>
                                </center>
                            </div>
                        </center>
                    <br>
                </div>

                <div class="col-xl-12">
                    <div style="padding-bottom: 20px;" class="form-group">
                        <button style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">Upload</button>
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