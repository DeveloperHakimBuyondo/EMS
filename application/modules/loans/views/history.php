<div class="card">
    <div class="card-body p-0">
        <div class="profile">
            <div class="profile-container">
                <div class="profile-content">
                    <ul class="profile-tab nav nav-tabs nav-tabs-v2">
                        <li class="nav-item">
                            <a href="#pending" class="nav-link active" data-bs-toggle="tab">
                                <div class="nav-value">Pending Requests</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#aproved" class="nav-link" data-bs-toggle="tab">
                                <div class="nav-value">Aproved Loans</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#rejected" class="nav-link" data-bs-toggle="tab">
                                <div class="nav-value">Rejected Loans</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#settled" class="nav-link" data-bs-toggle="tab">
                                <div class="nav-value">Settled Loans</div>
                            </a>
                        </li>
                    </ul>
                    <div class="profile-content-container">
                        <div class="row gx-4">
                            <div class="col-xl-12">
                                <div class="tab-content p-0">







                                    <div class="tab-pane fade show active" id="pending">
                                        <div class="list-group">
                                            <?php foreach($pending->result() as $pending): ?>
                                            <div class="list-group-item d-flex align-items-center">
                                                <img style="border-radius: 16px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $pending->emp_image; ?>" alt="" width="70" height="70" class="rounded-sm ms-n2" />
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Requested By:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"> <a class=" text-decoration-none text text-theme" href="<?php echo base_url(); ?>employees/view/<?php echo $pending->emp_id; ?>"><?php echo $pending->emp_name; ?></a></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Reason:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $pending->reason; ?></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $pending->date_requested; ?></div>
                                                </div>

                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Pay From:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $pending->pay_from; ?></div>
                                                </div>

                                                    <?php if($pending->loan_amount == 0){ ?>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Amount:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "$: ".number_format($pending->dollar_loan_amount, 2); ?></div>
                                                        </div>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Balance:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "$: ".number_format($pending->dollar_loan_balance, 2); ?></div>
                                                        </div>
                                                    <?php }elseif(!$pending->loan_amount == 0){ ?>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Amount:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "UGX: ".number_format($pending->loan_amount, 2); ?></div>
                                                        </div>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Balance:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "UGX: ".number_format($pending->loan_balance, 2); ?></div>
                                                        </div>
                                                    <?php }else{ ?>
                                                        <?php echo 'Salary Undefined'; ?>
                                                    <?php }?>



                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Status:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px">
                                                        <?php
                                                            if($pending->loan_status == 0){
                                                                echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending </span>';
                                                            }elseif($pending->loan_status == 1){
                                                                echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Aproved </span>';
                                                            }elseif($pending->loan_status == 2){
                                                                echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Rejected </span>';
                                                            }else{
                                                                echo "Invalid Loan Status";
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <ul class="nav">
                                                    <li class="nav-item me-1 dropdown">
                                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                                                        <div class="dropdown-menu">
                                                            <!-- <a href="<?php //echo base_url(); ?>leaves/view/<?php //echo $leave->leave_id; ?>" class="dropdown-item">Project Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a> -->
                                                            <form method="post" action="<?php echo base_url().'loans/aprove_loan/'.$pending->loan_id;?>" class="was-validated" enctype="multipart/form-data">


                                                                    <?php if($pending->loan_amount == 0){ ?>
                                                                        <input type="hidden" value="<?php echo $pending->dollar_loan_amount; ?>" name="loan_amount">							
                                                                    <?php }elseif(!$pending->loan_amount == 0){ ?>
                                                                        <input type="hidden" value="<?php echo $pending->loan_amount; ?>" name="loan_amount">	
                                                                    <?php }else{ ?>
                                                                        <?php echo 'Loan Undefined'; ?>
                                                                    <?php }?>


                                                                <button type="submit" class="dropdown-item"> Put In Aproved </button>
                                                            </form>
                                                            <a href="<?php echo base_url(); ?>loans/reject_loan/<?php echo $pending->loan_id; ?>" class="dropdown-item"> Put In Rejected </a>
                                                        </div> 
                                                    </li>
                                                </ul>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- <div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div> -->
                                    </div>












                                    <div class="tab-pane fade" id="aproved">
                                        <div class="list-group">
                                            <?php foreach($aproved->result() as $aproved): ?>
                                            <div class="list-group-item d-flex align-items-center">
                                                <img style="border-radius: 16px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $aproved->emp_image; ?>" alt="" width="70" height="70" class="rounded-sm ms-n2" />
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Requested By:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"> <a class=" text-decoration-none text text-theme" href="<?php echo base_url(); ?>employees/view/<?php echo $aproved->emp_id; ?>"><?php echo $aproved->emp_name; ?></a></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Reason:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $aproved->reason; ?></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $aproved->date_requested; ?></div>
                                                </div>

                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Pay From:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $aproved->pay_from; ?></div>
                                                </div>



                                                <?php if($aproved->loan_amount == 0){ ?>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Amount:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "$: ".number_format($aproved->dollar_loan_amount, 2); ?></div>
                                                        </div>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Balance:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "$: ".number_format($aproved->dollar_loan_balance, 2); ?></div>
                                                        </div>
                                                    <?php }elseif(!$aproved->loan_amount == 0){ ?>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Amount:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "UGX: ".number_format($aproved->loan_amount, 2); ?></div>
                                                        </div>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Balance:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "UGX: ".number_format($aproved->loan_balance, 2); ?></div>
                                                        </div>
                                                    <?php }else{ ?>
                                                        <?php echo 'Salary Undefined'; ?>
                                                    <?php }?>



                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Status:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px">
                                                        <?php
                                                            if($aproved->loan_status == 0){
                                                                echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending </span>';
                                                            }elseif($aproved->loan_status == 1){
                                                                echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Aproved </span>';
                                                            }elseif($aproved->loan_status == 2){
                                                                echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Rejected </span>';
                                                            }else{
                                                                echo "Invalid Loan Status";
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <ul class="nav">
                                                    <li class="nav-item me-1 dropdown">
                                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                                                        <div class="dropdown-menu">
                                                            <!-- <a href="<?php //echo base_url(); ?>leaves/view/<?php //echo $leave->leave_id; ?>" class="dropdown-item">Project Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a> -->
                                                            <a href="<?php echo base_url(); ?>loans/pending_loan/<?php echo $aproved->loan_id; ?>" class="dropdown-item"> Put in pendin </a>
                                                            <a href="<?php echo base_url(); ?>loans/reject_loan/<?php echo $aproved->loan_id; ?>" class="dropdown-item"> Put In Rejected </a>
                                                        </div> 
                                                    </li>
                                                </ul>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- <div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div> -->
                                    </div>







                                    <div class="tab-pane fade" id="rejected">
                                        <div class="list-group">
                                            <?php foreach($rejected->result() as $rejected): ?>
                                            <div class="list-group-item d-flex align-items-center">
                                                <img style="border-radius: 16px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $rejected->emp_image; ?>" alt="" width="70" height="70" class="rounded-sm ms-n2" />
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Requested By:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"> <a class=" text-decoration-none text text-theme" href="<?php echo base_url(); ?>employees/view/<?php echo $rejected->emp_id; ?>"><?php echo $rejected->emp_name; ?></a></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Reason:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $rejected->reason; ?></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $rejected->date_requested; ?></div>
                                                </div>

                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Pay From:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $rejected->pay_from; ?></div>
                                                </div>


                                                    <?php if($rejected->loan_amount == 0){ ?>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Amount:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "$: ".number_format($rejected->dollar_loan_amount, 2); ?></div>
                                                        </div>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Balance:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "$: ".number_format($rejected->dollar_loan_balance, 2); ?></div>
                                                        </div>
                                                    <?php }elseif(!$rejected->loan_amount == 0){ ?>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Amount:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "UGX: ".number_format($rejected->loan_amount, 2); ?></div>
                                                        </div>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Balance:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "UGX: ".number_format($rejected->loan_balance, 2); ?></div>
                                                        </div>
                                                    <?php }else{ ?>
                                                        <?php echo 'Salary Undefined'; ?>
                                                    <?php }?>


                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Leave Status:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px">
                                                        <?php
                                                            if($rejected->loan_status == 0){
                                                                echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending </span>';
                                                            }elseif($rejected->loan_status == 1){
                                                                echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Aproved </span>';
                                                            }elseif($rejected->loan_status == 2){
                                                                echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Rejected </span>';
                                                            }else{
                                                                echo "Invalid Loan Status";
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <ul class="nav">
                                                    <li class="nav-item me-1 dropdown">
                                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                                                        <div class="dropdown-menu">
                                                            <!-- <a href="<?php //echo base_url(); ?>leaves/view/<?php //echo $leave->leave_id; ?>" class="dropdown-item">Project Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a> -->
                                                            <a href="<?php echo base_url(); ?>loans/pending_loan/<?php echo $rejected->loan_id; ?>" class="dropdown-item"> Put In Pending </a>
                                                            <form method="post" action="<?php echo base_url().'loans/aprove_loan/'.$rejected->loan_id;?>" class="was-validated" enctype="multipart/form-data">

                                                                    <?php if($rejected->loan_amount == 0){ ?>
                                                                        <input type="hidden" value="<?php echo $rejected->dollar_loan_amount; ?>" name="loan_amount">							
                                                                    <?php }elseif(!$rejected->loan_amount == 0){ ?>
                                                                        <input type="hidden" value="<?php echo $rejected->loan_amount; ?>" name="loan_amount">	
                                                                    <?php }else{ ?>
                                                                        <?php echo 'Loan Undefined'; ?>
                                                                    <?php }?>

                                                                <button type="submit" class="dropdown-item"> Put In Aproved </button>
                                                            </form>
                                                        </div> 
                                                    </li>
                                                </ul>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- <div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div> -->
                                    </div>




                                    <div class="tab-pane fade" id="settled">
                                        <div class="list-group">
                                            <?php foreach($settled->result() as $settled): ?>
                                            <div class="list-group-item d-flex align-items-center">
                                                <img style="border-radius: 16px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $settled->emp_image; ?>" alt="" width="70" height="70" class="rounded-sm ms-n2" />
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Requested By:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"> <a class=" text-decoration-none text text-theme" href="<?php echo base_url(); ?>employees/view/<?php echo $settled->emp_id; ?>"><?php echo $settled->emp_name; ?></a></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Reason:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $settled->reason; ?></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $settled->date_requested; ?></div>
                                                </div>

                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Pay From:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $settled->pay_from; ?></div>
                                                </div>


                                                    <?php if($settled->loan_amount == 0){ ?>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Amount:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "$: ".number_format($settled->dollar_loan_amount, 2); ?></div>
                                                        </div>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Balance:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "$: ".number_format($settled->dollar_loan_balance, 2); ?></div>
                                                        </div>
                                                    <?php }elseif(!$settled->loan_amount == 0){ ?>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Amount:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "UGX: ".number_format($settled->loan_amount, 2); ?></div>
                                                        </div>
                                                        <div class="flex-fill px-3">
                                                            <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Loan Balance:"; ?></a></div>
                                                            <div class="text-white text-opacity-50 fs-13px"><?php echo "UGX: ".number_format($settled->loan_balance, 2); ?></div>
                                                        </div>
                                                    <?php }else{ ?>
                                                        <?php echo 'Salary Undefined'; ?>
                                                    <?php }?>


                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Leave Status:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px">
                                                        <?php
                                                            if($settled->loan_status == 0){
                                                                echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending </span>';
                                                            }elseif($settled->loan_status == 1){
                                                                echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Aproved </span>';
                                                            }elseif($settled->loan_status == 2){
                                                                echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> settled </span>';
                                                            }elseif($settled->loan_status == 3){
                                                                echo '<span class="badge border border-primary text-primary px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Loan settled </span>';
                                                            }else{
                                                                echo "Invalid Loan Status";
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <ul class="nav">
                                                    <li class="nav-item me-1 dropdown">
                                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                                                        <div class="dropdown-menu">
                                                            <form method="post" action="<?php echo base_url().'loans/delete_settled_loan/'.$settled->loan_id;?>" class="was-validated" enctype="multipart/form-data">
                                                                <input type="hidden" value="<?php echo $settled->loan_amount; ?>" name="loan_amount">
                                                                <button type="submit" class="dropdown-item"> Delete Record </button>
                                                            </form>
                                                        </div> 
                                                    </li>
                                                </ul>
                                            </div>


                                            <?php endforeach; ?>
                                        </div>
                                        <!-- <div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-arrow">
        <div class="card-arrow-top-left"></div>
        <div class="card-arrow-top-right"></div>
        <div class="card-arrow-bottom-left"></div>
        <div class="card-arrow-bottom-right"></div>
    </div>
</div>