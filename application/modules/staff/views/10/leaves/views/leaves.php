<div id="responsiveTables" class="mb-5"><div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Reason</th>
							<th scope="col">Requested On</th>
							<th scope="col">Start Date</th>
							<th scope="col">End Date</th>
							<th scope="col">Leave Status</th>
							<th scope="col">Requested By</th>
							<th class="text text-center" scope="col">Option</th>
						</tr>
					</thead>
					<tbody>
                        <?php if(empty($leaves->result())){
                            echo    '<tr>
                                        <td colspan="11" class="text-center text-theme"><i class="fas fa-fw me-2 fa-trash empty-row-icon"></i><br>
                                            No pending leaves for now !!! 
                                        </td>
                                    </tr>';
                        }?>

                        <?php foreach($leaves->result() as $leave): ?>
						<tr>
							<td><?php echo $leave->leave_id; ?></td>
							<td><?php echo $leave->reason; ?></td>
							<td><?php echo $leave->date_requested; ?></td>
							<td><?php echo $leave->start_date; ?></td>
							<td><?php echo $leave->end_date; ?></td>
							<!-- <td><?php //echo $project->project_status; ?></td> -->
							<td class="text-center">

                                <?php  if($leave->leave_status == 1){
                                        echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Aproved </span>';
                                    }elseif($leave->leave_status == 0){
                                        echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending </span>';
                                    }elseif($leave->leave_status == 2){
                                        echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Rejected </span>';
                                    }else{
                                        echo "No Leave Status";
                                    }
                                    
                                ?>
                            </td>
							<td><?php echo $leave->emp_name; ?></td>
							<th scope="col">
								<ul class="nav">
									<li class="nav-item me-1 dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
										<div class="dropdown-menu">
											<!-- <a href="<?php //echo base_url(); ?>leaves/view/<?php //echo $leave->leave_id; ?>" class="dropdown-item">Project Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a> -->
											<a href="<?php echo base_url(); ?>leaves/accept_leave/<?php echo $leave->leave_id; ?>" class="dropdown-item"> Aprove Leave <i class="fas fa-sm fa-fw me-2 fa-check text-success float-right"></i></a>
											<a href="<?php echo base_url(); ?>leaves/reject_leave/<?php echo $leave->leave_id; ?>" class="dropdown-item"> Reject Leave <i class="far fa-sm fa-fw me-2 fa-thumbs-down text-danger float-right"></i></a>
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