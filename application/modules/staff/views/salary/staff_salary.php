<div id="responsiveTables" class="mb-5"><div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Image</th>
							<th scope="col">Employee Name</th>
							<th scope="col">Department</th>
							<th colspan="2" scope="col">Active Salary</th>
						</tr>
					</thead>
					<tbody>
                        <?php if(empty($manage_salary->result())){
                            echo    '<tr>
                                        <td colspan="8" class="text-center text-theme"><i class="fas fa-fw me-2 fa-trash empty-row-icon"></i><br>
                                            Waiting for employees... 
                                        </td>
                                    </tr>';
                        }?>

                        <?php foreach($manage_salary->result() as $sal): ?>
						<?php if($this->session->userdata('department_id') == $sal->dep_id): ?>
						<tr>
							<td><?php echo $sal->emp_id; ?></td>
							<td><img style="border-radius: 16%;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $sal->emp_image; ?>" alt="" width="30px" height="30px"></td>
							<td><?php echo $sal->emp_name; ?></td>
							<td><?php echo $sal->dep_name; ?></td>
							<td>
								<?php if($sal->salary == 0){ ?>
									<?php echo "$: ".number_format($sal->dollar_salary, 2); ?>
								<?php }elseif(!$sal->salary == 0){ ?>
									<?php echo "UGX: ".number_format($sal->salary, 2); ?>
								<?php }else{ ?>
									<?php echo 'Salary Undefined'; ?>
								<?php }?>
							</td>


                                <!-- <td>
                                        <div class="form-group">
                                            <button style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">Upload Salary</button>
                                        </div>
                                    </form>
                                </td> -->
                            
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
						<?php endif; ?>
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