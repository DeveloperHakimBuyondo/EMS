<div id="responsiveTables" class="mb-5"><div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-2">
					<div style="padding-bottom: 20px;" class="form-group">
						<a href="<?php echo base_url();?>employees/all_employees" style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">Refresh Page</a>
					</div>
				</div>
				<!-- <div class="col-lg-10">
					<form method="post" action="<?php echo base_url();?>employees/search_all" class="was-validated" enctype="multipart/form-data">
						<div class="input-group">
							<input type="text" name="search" class="form-control form-control-sm" placeholder="Search Employee Id...">
							<button class="btn btn-outline-default btn-sm" type="submit"><i class="fa fa-search text-muted"></i></button>
						</div>
					</form>
				</div> -->
			</div>
			<div class="table-responsive">
				<table class="table mb-0">
					<thead>
						<tr>
							<th style="width: 200xp;" scope="col">Status</th>
							<th scope="col">Image</th>
							<th scope="col">Name</th>
							<th scope="col">Sex</th>
							<th scope="col">Phone Number</th>
                            <th scope="col">Salary</th>
							<th scope="col">Options</th>
						</tr>
					</thead>
					<tbody>
                        <?php if(empty($get_mixed_employees->result())){
                            echo    '<tr>
                                        <td colspan="11" class="text-center text-theme"><i class="fas fa-fw me-2 fa-trash empty-row-icon"></i><br>
                                            No employee registered yet !!! 
                                        </td>
                                    </tr>';
                        }?>
                        <?php foreach($get_mixed_employees->result() as $emp_data): ?>
						<tr>
							<th scope="row">
                                <?php 
                                    if($emp_data->emp_status == 0){
                                        echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Resigned </span>';
                                    }elseif($emp_data->emp_status == 1){
                                        echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Active </span>';
                                    }else{
                                        echo "Invalid Employee";
                                    }
                                ?>
                                
                            </th>

							<td><img style="border-radius: 16%;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $emp_data->emp_image; ?>" alt="" width="30px" height="30px"></td>
							<td><?php echo $emp_data->emp_name; ?></td>
							<td><?php echo $emp_data->emp_sex; ?></td>
							<td><?php echo $emp_data->emp_phone; ?></td>
                            <td>
							<?php if($emp_data->salary == 0){ ?>

								<?php echo "$: ".number_format($emp_data->dollar_salary, 2); ?>

							<?php }elseif(!$emp_data->salary == 0){ ?>

								<?php echo "UGX: ".number_format($emp_data->salary, 2); ?>
							<?php }else{ ?>
								<?php echo 'Salary Undefined'; ?>
							<?php }?>
							</td>
							<th scope="col">
								<ul class="nav">
									<li class="nav-item me-1 dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
										<div class="dropdown-menu">
											<a href="<?php echo base_url(); ?>employees/view/<?php echo $emp_data->emp_id; ?>" class="dropdown-item">See Full Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right" style="padding-left: 10px;"></i></a>
											<a href="<?php echo base_url(); ?>employees/edit/<?php echo $emp_data->emp_id; ?>" class="dropdown-item">Update Information<i class="fas fa-sm fa-fw me-2 fa-edit text-theme float-right" style="padding-left: 10px;"></i></a>
											<?php if($emp_data->emp_status == 0){?>
											<a href="<?php echo base_url(); ?>employees/resign_employee/<?php echo $emp_data->emp_id; ?>/1" class="dropdown-item">Re-assign Employee<i class="fas fa-sm fa-fw me-2 fa-check text-theme float-right" style="padding-left: 10px;"></i></a>
											<?php }elseif($emp_data->emp_status == 1){ ?>
											<a href="<?php echo base_url(); ?>employees/resign_employee/<?php echo $emp_data->emp_id; ?>/0" class="dropdown-item">Resign Employee<i class="fas fa-lg fa-fw me-2 fa-times text-danger float-right float-right" style="padding-left: 10px;"></i></a>
											<?php }?>
											<a href="<?php echo base_url(); ?>employees/delete/<?php echo $emp_data->emp_id; ?>" class="dropdown-item">Delete Employee Permanently<i class="fas fa-sm fa-fw me-2 fa-trash-alt text-danger float-right" style="padding-left: 10px;"></i></a>
										</div> 
									</li>
								</ul>
							</th>
						</tr>
                        <?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="card-arrow">
			<div class="card-arrow-top-left"></div>
			<div class="card-arrow-top-right"></div>
			<div class="card-arrow-bottom-left"></div>
			<div class="card-arrow-bottom-right"></div>
		</div>
	</div>
</div>