<div id="responsiveTables" class="mb-5"><div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Reason</th>
							<th scope="col">Requested On</th>
							<th scope="col">Loan Status</th>
							<th scope="col">Requested Amount</th>
							<th scope="col">Loan Balance</th>
							<th scope="col">Requested By</th>
							<th class="text text-center" scope="col">Option</th>
						</tr>
					</thead>
					<tbody>
                        <?php if(empty($loans->result())){
                            echo    '<tr>
                                        <td colspan="11" class="text-center text-theme"><i class="fas fa-fw me-2 fa-trash empty-row-icon"></i><br>
                                            No pending loans for now !!! 
                                        </td>
                                    </tr>';
                        }?>

                        <?php foreach($loans->result() as $loan): ?>
						<tr>
							<td><?php echo $loan->loan_id; ?></td>
							<td><?php echo $loan->reason; ?></td>
							<td><?php echo $loan->date_requested; ?></td>
							<!-- <td><?php //echo $project->project_status; ?></td> -->
							<td class="text-center">

                                <?php  if($loan->loan_status == 1){
                                        echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Request Aproved </span>';
                                    }elseif($loan->loan_status == 0){
                                        echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Request Pending </span>';
                                    }elseif($loan->loan_status == 2){
                                        echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Request Rejected </span>';
                                    }else{
                                        echo "No Loan Status";
                                    }
                                    
                                ?>
                            </td>
                            
								<?php if($loan->loan_amount == 0){ ?>
									<td><?php echo "$: ".number_format($loan->dollar_loan_amount, 2); ?></td>
									<td><?php echo "$: ".number_format($loan->dollar_loan_balance, 2); ?></td>								
								<?php }elseif(!$loan->loan_amount == 0){ ?>
									<td><?php echo "UGX: ".number_format($loan->loan_amount, 2); ?></td>
									<td><?php echo "UGX: ".number_format($loan->loan_balance, 2); ?></td>	
								<?php }else{ ?>
									<?php echo 'Loan Undefined'; ?>
								<?php }?>
							<td><?php echo $loan->emp_name; ?></td>


							<th scope="col">
								<ul class="nav">
									<li class="nav-item me-1 dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
										<div class="dropdown-menu">
										<form method="post" action="<?php echo base_url().'loans/aprove_loan/'.$loan->loan_id;?>" class="was-validated" enctype="multipart/form-data">

												<?php if($loan->loan_amount == 0){ ?>
													<input type="hidden" value="<?php echo $loan->dollar_loan_amount; ?>" name="loan_amount">							
												<?php }elseif(!$loan->loan_amount == 0){ ?>
													<input type="hidden" value="<?php echo $loan->loan_amount; ?>" name="loan_amount">	
												<?php }else{ ?>
													<?php echo 'Loan Undefined'; ?>
												<?php }?>
											
											<!-- <a href="<?php //echo base_url(); ?>leaves/view/<?php //echo $leave->leave_id; ?>" class="dropdown-item">Project Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a> -->
											<button type="submit" class="dropdown-item"> Aprove Loan <i class="fas fa-sm fa-fw me-2 fa-check text-success float-right"></i></button>
											<a href="<?php echo base_url(); ?>loans/reject_loan/<?php echo $loan->loan_id; ?>" class="dropdown-item"> Reject Loan <i class="far fa-sm fa-fw me-2 fa-thumbs-down text-danger float-right"></i></a>
										</form>
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