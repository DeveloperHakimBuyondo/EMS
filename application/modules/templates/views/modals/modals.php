

<!-- Edit Employee -->
<!-- <div class="modal fade" id="edit-employee">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-theme">Edit Employee Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <p>You want to Continue ?</p>

                <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Abort</button>
                <button type="button" class="btn btn-outline-danger">Delete</button>
            </div>
        </div>
    </div>
</div> -->
<!-- Edit Employee -->


<!-- Delete Employee -->
<div class="modal fade" id="delete-employee">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Delete Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <p>You want to Continue ?</p>

                <?php echo form_open();?>
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Abort</button>
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Delete Employee -->



<!-- Add Branch Manager -->
<div class="modal fade" id="modalSm">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add Branch Manager</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <?php echo form_open('managers/add');?>
        <div class="modal-body">
            
            <!-- <div class="form-group mb-3 form-group-sm">
                <input id="empName" class="form-control" value="" type="text" name="manager_name" placeholder="Manager's Name" required>
            </div> -->

            <div class="form-group mb-3">
                <select name="branch_id" class="form-select form-select-sm">
                    <option selected disabled value="">Select Brach</option>
                    <?php //foreach($branches->result() as $branch): ?>
                        <option value="<?php //echo $branch->branch_id; ?>"><?php //echo $branch->branch_name; ?></option>
                    <?php //endforeach; ?>
                </select>
            </div>

            <div class="form-group mb-3">
                <select name="emp_id" class="form-select form-select-sm">
                    <option selected disabled value="">Select Brach</option>
                    <?php //foreach($employees->result() as $employee): ?>
                        <option value="<?php //echo $employee->emp_id; ?>"><?php //echo $employee->emp_name; ?></option>
                    <?php //endforeach; ?>
                </select>
            </div>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-theme">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>