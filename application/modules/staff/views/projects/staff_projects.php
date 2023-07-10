<div id="responsiveTables" class="mb-5"><div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Project Name</th>
							<th scope="col">Start Date</th>
							<th scope="col">Close Date</th>
							<th scope="col">Posted On</th>
							<th scope="col">Project Status</th>
							<th scope="col">Department</th>
							<th class="text text-center" scope="col">Option</th>
						</tr>
					</thead>
					<tbody>
                        <?php if(empty($projects->result())){
                            echo    '<tr>
                                        <td colspan="11" class="text-center text-theme"><i class="fas fa-fw me-2 fa-trash empty-row-icon"></i><br>
                                            No projects posted yet !!! 
                                        </td>
                                    </tr>';
                        }?>

                        <?php foreach($projects->result() as $project): ?>
						<?php if($this->session->userdata('department_id') == $project->dep_id): ?>
						<tr>
							<td><?php echo $project->project_id; ?></td>
							<td><?php echo $project->project_name; ?></td>
							<td><?php echo $project->start_date; ?></td>
							<td><?php echo $project->close_date; ?></td>
							<td><?php echo $project->date_posted; ?></td>
							<!-- <td><?php //echo $project->project_status; ?></td> -->
							<td class="text-center">

                                <?php  if($project->project_status == 1){
                                        echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Running </span>';
                                    }elseif($project->project_status == 0){
                                        echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Coming up </span>';
                                    }elseif($project->project_status == 2){
                                        echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Finished </span>';
                                    }else{
                                        echo "No Status";
                                    }
                                    
                                ?>
                            </td>
							<td><?php echo $project->dep_name; ?></td>
							<th scope="col">
								<ul class="nav">
									<li class="nav-item me-1 dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
										<div class="dropdown-menu">
											<a href="<?php echo base_url(); ?>staff/projects/view/<?php echo $project->project_id; ?>" class="dropdown-item">Project Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a>
											<a href="<?php echo base_url(); ?>staff/projects/report/<?php echo $project->project_id; ?>" class="dropdown-item">Report Project Status<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-warning float-right"></i></a>
										</div> 
									</li>
								</ul>
							</th>
						</tr>
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