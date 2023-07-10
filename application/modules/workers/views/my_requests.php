<div id="responsiveTables" class="mb-5"><div class="card">
		<div class="card-body">
			<!-- <div class="row">
				<div class="col-lg-2">
					<div style="padding-bottom: 20px;" class="form-group">
						<a href="<?php echo base_url();?>employees/all_employees" style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">View All Employees</a>
					</div>
				</div>
				<div class="col-lg-10">
					<form method="post" action="<?php echo base_url();?>employees/search" class="was-validated" enctype="multipart/form-data">
						<div class="input-group">
							<input type="text" name="search" class="form-control form-control-sm" placeholder="Search Employee Id...">
							<button class="btn btn-outline-default btn-sm" type="submit"><i class="fa fa-search text-muted"></i></button>
						</div>
					</form>
				</div>
			</div> -->
			<div class="table-responsive">
				<table class="table mb-0">
					<thead>
						<tr>
							<th scope="col">Status</th>
							<th scope="col">Was Attended By</th>
							<th scope="col">Date</th>
							<th scope="col">Options</th>
						</tr>
					</thead>
					<tbody>
                        <?php if(empty($my_requests->result())){
                            echo    '<tr>
                                        <td colspan="11" class="text-center text-theme"><i class="fas fa-fw me-2 fa-trash empty-row-icon"></i><br>
                                            Searching Requests !!! 
                                        </td>
                                    </tr>';
                        }?>
                        <?php foreach($my_requests->result() as $rquest): ?>
                        <?php if($this->session->userdata('employee_id') == $rquest->employee_id): ?>
						<tr>
							<td>
                                <?php

                                    if($rquest->status == 0){
                                        echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> R - Pending </span>';
                                    }elseif($rquest->status == 1){
                                        echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> S - Increased </span>';
                                    }elseif($rquest->status == 2){
                                        echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> R - Rejected </span>';
                                    }elseif($rquest->status == 3){
										echo '<span class="badge border border-info text-info px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> I Agree </span>';
									}else{
                                        echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> INVALID REQUEST !!! </span>';
                                    }
                                
                                ?>
                            </td>
							<td>
                            <?php

                                if($rquest->user_access == 0){
                                    echo '<span class="badge border border-primary text-primary px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> My Leader </span>';
                                }elseif($rquest->user_access == 1){
                                    echo '<span class="badge border border-primary text-primary px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> H.R </span>';
                                }else{
                                    echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Not Attended to !!! </span>';
                                }

                            ?>
                            </td>
							<td><?php echo $rquest->date_requested; ?></td>
							<th scope="col">
								<ul class="nav">
									<li class="nav-item me-1 dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
										<div class="dropdown-menu">

                                            <?php if($rquest->status == 0){ ?>
												<a href="<?php echo base_url();?>workers/salary/cancel_salary_requests" class="dropdown-item"> Cancel Request <i class="fas fa-lg fa-fw me-2 fa-times  text-danger float-right"></i></a>
                                            <?php }elseif($rquest->status == 1){ ?>
												<a class="dropdown-item">Request was Aproved Already !!!</a>
											<?php }elseif($rquest->status == 2){ ?>
												<a class="dropdown-item">Request was Rejected Already !!!</a>
											<?php }elseif($rquest->status == 3){ ?>
												<a class="dropdown-item">You've Agreed on the request !!!</a>
											<?php }else{ ?>
												<a class="dropdown-item">No action / Invalid Request !!!</a>
                                            <?php }?>
											<!-- <a href="<?php //echo base_url(); ?>salary/delete/<?php //echo $rquest->salary_id; ?>" class="dropdown-item">Delete Information<i class="fas fa-sm fa-fw me-2 fa-trash-alt text-danger float-right"></i></a> -->
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