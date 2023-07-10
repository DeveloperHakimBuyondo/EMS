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
                                <div class="nav-value">Aproved Leaves</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#rejected" class="nav-link" data-bs-toggle="tab">
                                <div class="nav-value">Rejected Leaves</div>
                            </a>
                        </li>
                    </ul>
                    <div class="profile-content-container">
                        <div class="row gx-4">
                            <div class="col-xl-12">
                                <div class="tab-content p-0">
                                    <div class="tab-pane fade show active" id="pending">
                                        <div class="list-group">
                                            <?php foreach($pending_leaves->result() as $pending): ?>
                                            <?php if($this->session->userdata('department_id') == $pending->dep_id): ?>
                                            <div class="list-group-item d-flex align-items-center">
                                                <img style="border-radius: 16px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $pending->emp_image; ?>" alt="" width="70" height="70" class="rounded-sm ms-n2" />
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Leave Requested By:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $pending->emp_name; ?></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Reason:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $pending->reason; ?></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $pending->date_requested; ?></div>
                                                </div>

                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Start Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $pending->start_date; ?></div>
                                                </div>
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "End Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $pending->end_date; ?></div>
                                                </div>
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Leave Status:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px">
                                                        <?php
                                                            if($pending->leave_status == 0){
                                                                echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending </span>';
                                                            }elseif($pending->leave_status == 1){
                                                                echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Aproved </span>';
                                                            }elseif($pending->leave_status == 2){
                                                                echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Rejected </span>';
                                                            }else{
                                                                echo "Invalid Leave Status";
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <ul class="nav">
                                                    <li class="nav-item me-1 dropdown">
                                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                                                        <div class="dropdown-menu">
                                                            <!-- <a href="<?php //echo base_url(); ?>leaves/view/<?php //echo $leave->leave_id; ?>" class="dropdown-item">Project Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a> -->
                                                            <a href="<?php echo base_url(); ?>staff/leaves/accept_leave/<?php echo $pending->leave_id; ?>" class="dropdown-item"> Aprove Leave </a>
											                <a href="<?php echo base_url(); ?>staff/leaves/reject_leave/<?php echo $pending->leave_id; ?>" class="dropdown-item"> Reject Leave </a>
                                                        </div> 
                                                    </li>
                                                </ul>
                                            </div>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- <div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div> -->
                                    </div>
                                    <div class="tab-pane fade" id="aproved">
                                        <div class="list-group">
                                            <?php foreach($aproved_leaves->result() as $aproved): ?>
                                            <?php if($this->session->userdata('department_id') == $aproved->dep_id): ?>
                                            <div class="list-group-item d-flex align-items-center">
                                                <img style="border-radius: 16px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $aproved->emp_image; ?>" alt="" width="70" height="70" class="rounded-sm ms-n2" />
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Leave Requested By:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $aproved->emp_name; ?></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Reason:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $aproved->reason; ?></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $aproved->date_requested; ?></div>
                                                </div>

                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Start Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $aproved->start_date; ?></div>
                                                </div>
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "End Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $aproved->end_date; ?></div>
                                                </div>
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Leave Status:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px">
                                                        <?php
                                                            if($aproved->leave_status == 0){
                                                                echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending </span>';
                                                            }elseif($aproved->leave_status == 1){
                                                                echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Aproved </span>';
                                                            }elseif($aproved->leave_status == 2){
                                                                echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Rejected </span>';
                                                            }else{
                                                                echo "Invalid Leave Status";
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <ul class="nav">
                                                    <li class="nav-item me-1 dropdown">
                                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                                                        <div class="dropdown-menu">
                                                            <!-- <a href="<?php //echo base_url(); ?>leaves/view/<?php //echo $leave->leave_id; ?>" class="dropdown-item">Project Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a> -->
                                                            <a href="<?php echo base_url(); ?>staff/leaves/pending_leave/<?php echo $aproved->leave_id; ?>" class="dropdown-item"> Pending Leave </a>
											                <a href="<?php echo base_url(); ?>staff/leaves/reject_leave/<?php echo $aproved->leave_id; ?>" class="dropdown-item"> Reject Leave </a>
                                                        </div> 
                                                    </li>
                                                </ul>
                                            </div>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- <div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div> -->
                                    </div>
                                    <div class="tab-pane fade" id="rejected">
                                        <div class="list-group">
                                            <?php foreach($rejected_leaves->result() as $rejected): ?>
                                            <?php if($this->session->userdata('department_id') == $rejected->dep_id): ?>
                                            <div class="list-group-item d-flex align-items-center">
                                                <img style="border-radius: 16px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $rejected->emp_image; ?>" alt="" width="70" height="70" class="rounded-sm ms-n2" />
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Leave Requested By:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $rejected->emp_name; ?></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Reason:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $rejected->reason; ?></div>

                                                    <hr>

                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Requested Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $rejected->date_requested; ?></div>
                                                </div>

                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Start Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $rejected->start_date; ?></div>
                                                </div>
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "End Date:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px"><?php echo $rejected->end_date; ?></div>
                                                </div>
                                                <div class="flex-fill px-3">
                                                    <div><a href="#" class="text-white fw-bold text-decoration-none"><?php echo "Leave Status:"; ?></a></div>
                                                    <div class="text-white text-opacity-50 fs-13px">
                                                        <?php
                                                            if($rejected->leave_status == 0){
                                                                echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending </span>';
                                                            }elseif($rejected->leave_status == 1){
                                                                echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Aproved </span>';
                                                            }elseif($rejected->leave_status == 2){
                                                                echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Rejected </span>';
                                                            }else{
                                                                echo "Invalid Leave Status";
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <ul class="nav">
                                                    <li class="nav-item me-1 dropdown">
                                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                                                        <div class="dropdown-menu">
                                                            <!-- <a href="<?php //echo base_url(); ?>leaves/view/<?php //echo $leave->leave_id; ?>" class="dropdown-item">Project Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a> -->
                                                            <a href="<?php echo base_url(); ?>staff/leaves/accept_leave/<?php echo $rejected->leave_id; ?>" class="dropdown-item"> Aprove Leave </a>
											                <a href="<?php echo base_url(); ?>staff/leaves/pending_leave/<?php echo $rejected->leave_id; ?>" class="dropdown-item"> Pending Leave </a>
                                                        </div> 
                                                    </li>
                                                </ul>
                                            </div>
                                            <?php endif; ?>
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