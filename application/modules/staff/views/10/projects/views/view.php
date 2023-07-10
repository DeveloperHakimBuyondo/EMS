<div class="card">
    <div class="card-body p-0">
        <div class="profile">
            <div class="profile-container">
                <div class="profile-content">
                    <ul class="profile-tab nav nav-tabs nav-tabs-v2">
                        <li class="nav-item">
                            <a href="#profile-post" class="nav-link active" data-bs-toggle="tab">
                                <div class="nav-value"><?php echo $project['project_name'];?></div>
                            </a>
                        </li>
                    </ul>
                    <div class="profile-content-container">
                        <div class="row gx-4">
                            <div class="col-xl-12">
                                <div class="tab-content p-0">
                                    <div class="tab-pane fade show active" id="profile-post">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <!-- <a href="#" class="text-decoration-none"><img src="assets/img/user/profile.jpg" alt="" width="50" class="rounded-circle" /></a> -->
                                                    <div class="flex-fill ps-2">
                                                        <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Department In Charge"; ?></a></div>
                                                        <div class="small text-white text-opacity-50"><?php echo $project['dep_name'];?></div>
                                                    </div>

                                                    <div class="flex-fill ps-2">
                                                        <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Start Date"; ?></a></div>
                                                        <div class="small text-white text-opacity-50"><?php echo $project['start_date'];?></div>
                                                    </div>

                                                    <div class="flex-fill ps-2">
                                                        <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Close Date"; ?></a></div>
                                                        <div class="small text-white text-opacity-50"><?php echo $project['close_date'];?></div>
                                                    </div>

                                                    <div class="flex-fill ps-2">
                                                        <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Project Was Post On"; ?></a></div>
                                                        <div class="small text-white text-opacity-50"><?php echo $project['date_posted'];?></div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="d-flex align-items-center mb-3">
                                                    <!-- <a href="#" class="text-decoration-none"><img src="assets/img/user/profile.jpg" alt="" width="50" class="rounded-circle" /></a> -->
                                                    <div class="flex-fill ps-2">
                                                        <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Project Status"; ?></a></div>
                                                        <div class="small text-white text-opacity-50">
                                                            <?php
                                                                if($project['project_status'] == 1){
                                                                    echo '<span class="badge border border-warning text-warning px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Running </span>';
                                                                }elseif($project['project_status'] == 0){
                                                                    echo '<span class="badge border border-danger text-danger px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Coming up </span>';
                                                                }elseif($project['project_status'] == 2){
                                                                    echo '<span class="badge border border-success text-success px-2 pt-3px pb-3px rounded fs-10px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Finished </span>';
                                                                }else{
                                                                    echo "Invalid Project Status";
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center mb-3">
                                                    <!-- <a href="#" class="text-decoration-none"><img src="assets/img/user/profile.jpg" alt="" width="50" class="rounded-circle" /></a> -->
                                                    <div class="flex-fill ps-2">
                                                        <div class="fw-bold"><a href="#" class="text-decoration-none"><?php echo "Project Description"; ?></a></div>
                                                        <div class="small text-white text-opacity-50"><?php echo $project['project_description'];?></div>
                                                        <p><?php //echo $project['project_description'];?></p>
                                                    </div>
                                                </div>

                                                <!-- <hr class="mb-1" />

                                                <div class="row text-center fw-bold">
                                                    <div class="col">
                                                        <a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
                                                            <i class="far fa-thumbs-up me-1 d-block d-sm-inline"></i> Likes
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
                                                            <i class="far fa-comment me-1 d-block d-sm-inline"></i> Comment
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
                                                            <i class="fa fa-share me-1 d-block d-sm-inline"></i> Share
                                                        </a>
                                                    </div>
                                                </div> -->
                                                <!-- <hr class="mb-3 mt-1" />
                                                <div class="d-flex align-items-center">
                                                <img src="assets/img/user/user.jpg" alt="" width="35" class="rounded-circle" />
                                                    <div class="flex-fill ps-2">
                                                        <div class="position-relative d-flex align-items-center">
                                                        <input type="text" class="form-control rounded-pill bg-white bg-opacity-15" style="padding-right: 120px;" placeholder="Write a comment..." />
                                                            <div class="position-absolute end-0 text-center">
                                                                <a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-smile"></i></a>
                                                                <a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-camera"></i></a>
                                                                <a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-video"></i></a>
                                                                <a href="#" class="text-white text-opacity-50 me-3"><i class="fa fa-paw"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
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