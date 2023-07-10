<div id="responsiveTables" class="mb-5"><div class="card">
		<div class="card-body">
			<!-- <div class="row">
				<div class="col-lg-2">
					<div style="padding-bottom: 20px;" class="form-group">
						<a href="<?php echo base_url();?>employees/all_employees" style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">View All Employees</a>
					</div>
				</div>
			</div> -->
			<div class="table-responsive">
				<table class="table mb-0">
					<thead>
						<tr>
							<th style="width: 200xp;" scope="col">Status</th>
							<th scope="col">Image</th>
							<th scope="col">Name</th>
							<th scope="col">Sex</th>
							<th scope="col">Options</th>
						</tr>
					</thead>
					<tbody>
						
							<?php foreach($workers->result() as $worker): ?>
							
							<tr>
								<th scope="row"><span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Active </span></th>
								<td><img style="border-radius: 16%;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $worker->emp_image; ?>" alt="" width="30px" height="30px"></td>
								<td><?php echo $worker->emp_name; ?></td>
								<td><?php echo $worker->emp_sex; ?></td>
								<th scope="col">
									<ul class="nav">
										<li class="nav-item me-1 dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
											<div class="dropdown-menu">
                                                <?php if($this->session->userdata('employee_id') == $worker->employee_id){ ?>
												<a href="<?php echo base_url(); ?>workers/workers/view/<?php echo $worker->emp_id; ?>" class="dropdown-item">See Full Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a>
                                                <?php }else{ ?>
                                                    <a href="#!" class="dropdown-item">No Action for you !!!</a>
                                                <?php } ?>
												<!-- <a href="<?php //echo base_url(); ?>employees/edit/<?php //echo $emp_data->emp_id; ?>" class="dropdown-item">Update Information<i class="fas fa-sm fa-fw me-2 fa-edit text-theme float-right"></i></a> -->
												<!-- <a href="<?php //echo base_url(); ?>employees/delete/<?php //echo $emp_data->emp_id; ?>" class="dropdown-item">Delete Information<i class="fas fa-sm fa-fw me-2 fa-trash-alt text-danger float-right"></i></a> -->
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