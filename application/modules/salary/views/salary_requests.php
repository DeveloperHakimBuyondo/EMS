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
							<th scope="col">Message</th>
							<th scope="col">Date</th>
                            <th scope="col">Requested By</th>
							<th scope="col">Options</th>
						</tr>
					</thead>
					<tbody>
                        <?php if(empty($requests->result())){
                            echo    '<tr>
                                        <td colspan="11" class="text-center text-theme"><i class="fas fa-fw me-2 fa-trash empty-row-icon"></i><br>
                                            Searching Requests !!! 
                                        </td>
                                    </tr>';
                        }?>
                        <?php foreach($requests->result() as $rquest): ?>
						<tr>
							<td>
								
							<?php

									if($rquest->status == 0){
										echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Request Pending </span>';
									}elseif($rquest->status == 1){
										echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Salary Increased </span>';
									}elseif($rquest->status == 2){
										echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Request Rejected </span>';
									}elseif($rquest->status == 3){
										echo '<span class="badge border border-primary text-primary px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Leader Accepted </span>';
									}else{
										echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> INVALID REQUEST </span>';
									}

							?>

							</td>
							<td><?php echo $rquest->message; ?></td>
							<td><?php echo $rquest->date_requested; ?></td>
							<td><?php echo $rquest->employee_id; ?></td>
							<th scope="col">
								<?php if($rquest->status == 1){ ?>

								<ul class="nav">
									<li class="nav-item me-1 dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
										<div class="dropdown-menu">
											<a href="#!" class="dropdown-item">Salary Already Increased !!!</a>
										</div> 
									</li>
								</ul>

								<?php }elseif($rquest->status == 2){ ?>

								<ul class="nav">
									<li class="nav-item me-1 dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
										<div class="dropdown-menu">
											<a href="#!" class="dropdown-item">Request Already Rejected !!!</a>
											<a href="<?php echo base_url(); ?>salary<?php //echo $rquest->employee_id; ?>" class="dropdown-item">Do you want to Increase Salary ?</a>
										</div> 
									</li>
								</ul>

								<?php }else{ ?>
								<ul class="nav">
									<li class="nav-item me-1 dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
										<div class="dropdown-menu">
											<a href="<?php echo base_url(); ?>salary<?php //echo $rquest->employee_id; ?>" class="dropdown-item">Increase Salary</a>
                                            <form method="post" action="<?php echo base_url();?>salary/reject/<?php echo $rquest->employee_id; ?>" class="was-validated" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $rquest->employee_id; ?>" name="id">
											<button  class="dropdown-item">Reject Request </button>
                                            </form>
										</div> 
									</li>
								</ul>
								<?php } ?>
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