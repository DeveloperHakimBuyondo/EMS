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
						<?php if($this->session->userdata('department_id') == $loan->dep_id): ?>
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