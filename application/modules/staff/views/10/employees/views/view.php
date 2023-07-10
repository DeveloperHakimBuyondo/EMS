<div class="card">
    <div class="card-body p-0">
        <div class="profile">
            <div class="profile-container">


                <!-- Profile left -->
                <div class="profile-sidebar">
                    <div class="desktop-sticky-top">
                        <div class="profile-img">
                            <img src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $employee['emp_image'];?>" alt="" />
                        </div>

                        <h4><?php echo $employee['emp_name'];?></h4>
                        <center><div class="mb-3 text-white text-opacity-50 fw-bold mt-n2">- ID <?php echo $employee['employee_id'];?> - </div></center>
                        <div class="mb-3 text-white text-opacity-50 fw-bold mt-n2"><?php //echo $employee['emp_email'];?></div>
                        <!-- <p>
                        Principal UXUI Design & Brand Architecture for HUD. Creator of SeanTheme.
                        Bringing the world closer together. Studied Computer Science and Psychology at Harvard University.
                        </p> -->
                        <div class="mb-1">
                            <i class="fa fa-map-marker-alt fa-fw text-white text-opacity-50"></i> <?php echo $employee['emp_address'];?>
                        </div>
                        <hr class="mt-4 mb-4" />

                        <div class="fw-bold mb-3 fs-16px"><?php echo "Contact Info"; ?></div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill px-3">
                                <div class="fw-bold text-truncate w-100px"><?php echo "Mobile"; ?></div>
                                <div class="fs-12px text-white text-opacity-50"><?php echo $employee['emp_phone'];?></div>
                            </div>
                            <!-- <a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a> -->
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill px-3">
                                <div class="fw-bold text-truncate w-100px"><?php echo "Email"; ?></div>
                                <div class="fs-12px text-white text-opacity-50"><?php echo $employee['emp_email'];?></div>
                            </div>
                            <!-- <a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a> -->
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill px-3">
                                <div class="fw-bold text-truncate w-100px"><?php echo "Nationality"; ?></div>
                                <div class="fs-12px text-white text-opacity-50"><?php echo $employee['country_name'];?></div>
                            </div>
                            <!-- <a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a> -->
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill px-3">
                                <div class="fw-bold text-truncate w-100px"><?php echo "National ID Number"; ?></div>
                                <div class="fs-12px text-white text-opacity-50"><?php echo $employee['emp_nin'];?></div>
                            </div>
                            <!-- <a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a> -->
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill px-3">
                                <div class="fw-bold text-truncate w-100px"><?php echo "Gender"; ?></div>
                                <div class="fs-12px text-white text-opacity-50"><?php echo $employee['emp_sex'];?></div>
                            </div>
                            <!-- <a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a> -->
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill px-3">
                                <div class="fw-bold text-truncate w-100px"><?php echo "Date Of Birth"; ?></div>
                                <div class="fs-12px text-white text-opacity-50"><?php echo $employee['emp_date_of_birth'];?></div>
                            </div>
                            <!-- <a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a> -->
                        </div>

                        <hr class="mt-4 mb-4" />

                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-fill px-3">
                                <div class="fw-bold text-truncate w-100px"><?php echo "Active Salary"; ?></div>
                                <div class="fs-12px text-white text-opacity-50"><?php echo number_format($employee['salary'], 2);?></div>
                            </div>
                            <!-- <a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a> -->
                        </div>

                        <hr class="mt-4 mb-4" />


                    </div>
                </div>
                <!-- Profile left -->


                <div class="profile-content">
                <ul class="profile-tab nav nav-tabs nav-tabs-v2">
                <li class="nav-item">
                <a href="#personal-info" class="nav-link active" data-bs-toggle="tab">
                <div class="nav-field">Personal Info</div>
                </a>
                </li>
                <li class="nav-item">
                <a href="#personal-cv" class="nav-link" data-bs-toggle="tab">
                <div class="nav-field">Personal CV</div>
                </a>
                </li>
                <li class="nav-item">
                <a href="#social-media" class="nav-link" data-bs-toggle="tab">
                <div class="nav-field">Social Media</div>
                </a>
                </li>
                <li class="nav-item">
                <a href="#pay-loan" class="nav-link" data-bs-toggle="tab">
                <div class="nav-field">Loan Payments</div>
                </a>
                </li>
                </ul>
                <div class="profile-content-container">
                <div class="row gx-4">
                <div class="col-xl-8">
                <div class="tab-content p-0">

                <div class="tab-pane fade show active" id="personal-info">

                <div class="card mb-3">
                <div class="card-body">

                <div class="d-flex align-items-center mb-3">
                <a href="#" class="text-decoration-none"><img style="border-radius: 8px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $employee['emp_image'];?>" alt="" width="50" /></a>
                <div class="flex-fill ps-2">
                <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Department"; ?></a></div>
                <div class="small text-white text-opacity-50"><?php echo $employee['dep_name']; ?></div>

                <hr class="mb-3 mt-1" />

                <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Registered Date"; ?></a></div>
                <div class="small text-white text-opacity-50"><?php echo $employee['emp_date_of_joining']; ?></div>

                <hr class="mb-3 mt-1" />
                
                <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Employee Status"; ?></a></div>
                <div class="small text-white text-opacity-50">
                    <?php 

                        if($employee['emp_status'] == 1){
                            echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Active </span>';
                        }elseif($employee['emp_status'] == 2){
                            echo '<span class="badge border border-info text-info px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Suspended </span>';
                        }elseif($employee['emp_status'] == 0){
                            echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Resigned </span>';
                        }else{
                            echo "Employee has no status for now";
                        }
                    ?>
                </div>
                </div>
                </div>

                <hr class="mb-3 mt-1" />
                <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Personal Description"; ?></a></div>
                <p><?php echo $employee['emp_description']; ?></p>
                <!-- <hr class="mb-3 mt-1" /> -->


                <div class="d-flex align-items-center">
                <img src="assets/img/user/user.jpg" alt="" width="35" class="rounded-circle" />
                <div class="flex-fill ps-2">
                <div class="position-relative d-flex align-items-center">
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
                </div>




                <!-- CV -->
                <div class="tab-pane fade" id="personal-cv">
                <div class="card mb-3">
                <div class="card-body">

                <div class="d-flex align-items-center mb-3">
                <div class="flex-fill ps-2">

                <?php 
                    if(empty($cv['cv_name'])){ ?>

                        <center>
                            <div class="fw-bold"><a href="#" class="text-decoration-none">
                                <a href="#" class="text-decoration-none">
                                    <img style="border-radius: 18px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/cv/cv.png<?php //echo $employee['emp_image'];?>" alt="" width="200" />
                                </a>
                            </div>
                            <div class="container">
                                <span>No CV File Attached: </span><a href="#"> Upload File Here </a>
                            </div>                           
                        </center>

                   <?php }else{ ?>

                        <center>
                            <div class="fw-bold"><a href="#" class="text-decoration-none">
                                <a href="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/cv/<?php echo $cv['cv_name'];?>" class="text-decoration-none">
                                    <img style="border-radius: 18px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/cv/cv.png<?php //echo $employee['emp_image'];?>" alt="" width="200" />
                                </a>
                            </div>
                        </center>
                   <?php } ?>



                </div>
                </div>

                <hr class="mb-3 mt-1" />
                <div class="d-flex align-items-center">
                <img src="assets/img/user/user.jpg" alt="" width="35" class="rounded-circle" />
                <div class="flex-fill ps-2">
                <div class="position-relative d-flex align-items-center">
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
                <div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div>
                </div>
                <!-- CV -->


                <!-- Social Media -->
                <div class="tab-pane fade" id="social-media">
                <div class="card mb-3">
                <div class="card-body">

                <div class="d-flex align-items-center mb-3">
                <a href="#" class="text-decoration-none"><img style="border-radius: 8px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $employee['emp_image'];?>" alt="" width="50" /></a>
                <div class="flex-fill ps-2">
                <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Facebook"; ?></a></div>
                <div class="small text-white text-opacity-50"><?php echo $employee['emp_facebook']; ?></div>

                <hr class="mb-3 mt-1" />

                <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Twitter"; ?></a></div>
                <div class="small text-white text-opacity-50"><?php echo $employee['emp_twitter']; ?></div>

                <hr class="mb-3 mt-1" />
                
                <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Instagram"; ?></a></div>
                <div class="small text-white text-opacity-50"><?php echo $employee['emp_instagram']; ?></div>

                <hr class="mb-3 mt-1" />

                <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Linked In"; ?></a></div>
                <div class="small text-white text-opacity-50"><?php echo $employee['emp_linkedin']; ?></div>
                </div>
                </div>
                <div class="d-flex align-items-center">
                <img src="assets/img/user/user.jpg" alt="" width="35" class="rounded-circle" />
                <div class="flex-fill ps-2">
                <div class="position-relative d-flex align-items-center">
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
                <div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div>
                </div>
                <!-- Social Media -->



                <!-- Pay Loans -->
                <div class="tab-pane fade" id="pay-loan">
                <div class="card mb-3">
                <div class="card-body">

                <div class="d-flex align-items-center mb-3">
                <a style="padding: 50px;" href="#" class="text-decoration-none"><img style="border-radius: 8px;" src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $employee['emp_image'];?>" alt="" width="50" /></a>
                <div class="flex-fill ps-2">
                    <div class="row">

                        <?php 
                            if($ln['loan_balance'] < 1){ ?>
                                
                                <div class="col-xl-12">
                                    <div style="padding-bottom: 30px;" class="form-group">
                                        <center>
                                        <span>Loan Balance: </span><h1 class="page-header"><?php echo number_format(0, 2);?></h1>
                                        </center>
                                    </div>
                                </div>
                                
                           <?php }else{ ?>
                            
                            <div class="col-xl-12">
                                <div style="padding-bottom: 30px;" class="form-group">
                                    <center>
                                    <span>Loan Balance: </span><h1 class="page-header"><?php echo number_format($ln["loan_balance"], 2);?></h1>
                                    </center>
                                </div>
                            </div>
                            <form method="post" action="<?php echo base_url()."loans/pay_loan/".$ln["loan_id"];?>" class="was-validated" enctype="multipart/form-data">

                            <div class="col-xl-12">
                                <div style="padding-bottom: 30px;" class="form-group">
                                    <input type="hidden" name="balance" value="<?php echo $ln["loan_balance"];?>">
                                    <label style="padding-bottom: 5px;" class="text-theme"><span class="text-danger">*</span> Pay Installment: </label>
                                    <input class="form-control form-control-sm is-valid" type="text" name="pay" placeholder="Insert Amount  To Pay" required />
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div style="padding-bottom: 20px;" class="form-group">
                                    <button style="width: 100%" type="submit" class="btn btn-outline-theme btn-sm">Pay Installment Now</button>
                                </div>
                            </div>

                        </form>
                          <?php  } ?>
                    </div>
                </div>
                </div>
                <div class="d-flex align-items-center">
                <img src="assets/img/user/user.jpg" alt="" width="35" class="rounded-circle" />
                <div class="flex-fill ps-2">
                <div class="position-relative d-flex align-items-center">
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
                <div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div>
                </div>
                <!-- Pay Loans -->



                </div>
                </div>




                <!-- Former employer -->
                <div class="col-xl-4">
                <div class="desktop-sticky-top d-none d-lg-block">
                <div class="card mb-3">
                <div class="list-group list-group-flush">
                <div class="list-group-item fw-bold px-3 d-flex">
                <span class="flex-fill"><?php echo "Former Employer Info"; ?></span>
                </div>
                <div class="list-group-item px-3">
                <div class="text-white text-opacity-50"><small><strong><?php echo "Company Name"; ?></strong></small></div>
                <div class="fw-bold mb-2"><?php echo $employee['former_employer']; ?></div>
                </div>
                <div class="list-group-item px-3">
                <div class="text-white text-opacity-50"><small><strong><?php echo "Started Date"; ?></strong></small></div>
                <div class="fs-13px mb-1"><?php echo $employee['date_from']; ?></div>
                </div>
                <div class="list-group-item px-3">
                <div class="text-white text-opacity-50"><small><strong><?php echo "Stopped Date"; ?></strong></small></div>
                <div class="fs-13px mb-1"><?php echo $employee['date_to']; ?></div>
                </div>
                <!-- <div class="list-group-item px-3">
                <div class="text-white text-opacity-50"><small><strong>Trending Worldwide</strong></small></div>
                <div class="fw-bold mb-2">#CronaOutbreak</div>
                <div class="fs-13px mb-1">The coronavirus is affecting 210 countries around the world and 2 ...</div>
                <div><small class="text-white text-opacity-50">49.3m share</small></div>
                </div> -->
                <a href="#" class="list-group-item list-group-action text-center">
                Show more
                </a>
                </div>
                <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
                </div>
                </div>
                </div>
                </div>
                <!-- Former employer -->






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