<div id="responsiveTables" class="mb-5"><div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-dark">
					<thead>
						<tr>
							<th scope="col">Image</th>
							<th scope="col">Employee Name</th>
							<th scope="col">Generated ID / Change to Company ID</th>
							<th scope="col">Update</th>
						</tr>
					</thead>
					<tbody>
                        <?php if(empty($ids->result())){
                            echo    '<tr>
                                        <td colspan="8" class="text-center text-theme"><i class="fas fa-fw me-2 fa-trash empty-row-icon"></i><br>
                                            Waiting for employee ID... 
                                        </td>
                                    </tr>';
                        }?>

                        <?php foreach($ids->result() as $id): ?>
						<tr>
							<td><img style="border-radius: 16%;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $id->emp_image; ?>" alt="" width="50px" height="50px"></td>
							<td><?php echo $id->emp_name; ?></td>

                            
							    <td>
                                    <form method="post" action="<?php echo base_url().'ids/id/update_id/'.$id->emp_image;?>" class="was-validated" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input style="width: 100px;" type="hidden" name="id" value="<?php echo $id->emp_id; ?>">
							                <input type="text" name="employee_id" class="form-control form-control-sm is-valid" value="<?php echo $id->employee_id; ?>" required />
						                </div>
                                </td>

                                <td>
                                        <div class="form-group">
                                            <button style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">Update ID</button>
                                        </div>
                                    </form>
                                </td>
                            
							<!-- <th scope="col">
								<ul class="nav">
									<li class="nav-item me-1 dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
										<div class="dropdown-menu">
											<a href="<?php //echo base_url(); ?>projects/view/<?php //echo $sal->emp_id; ?>" class="dropdown-item">Project Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a>
											<a href="<?php //echo base_url(); ?>projects/edit/<?php //echo $sal->emp_id; ?>" class="dropdown-item">Update Project Information<i class="fas fa-sm fa-fw me-2 fa-edit text-theme float-right"></i></a>
											<a href="<?php //echo base_url(); ?>projects/delete/<?php //echo $sal->emp_id; ?>" class="dropdown-item">Delete Project<i class="fas fa-sm fa-fw me-2 fa-trash-alt text-danger float-right"></i></a>
										</div> 
									</li>
								</ul>
							</th>
						</tr> -->
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