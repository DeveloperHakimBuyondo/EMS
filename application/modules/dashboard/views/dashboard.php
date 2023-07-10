



<!-- Row -->
<div class="row">


<!--  -->
<div class="col-xl-3 col-lg-6">
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex fw-bold small mb-3">
                <span class="flex-grow-1"><i class="fas fa-lg fa-fw me-2 fa-code-branch text-theme icon-size"></i><?php echo "DEPARTMENTS"; ?></span>
                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
            </div>
            <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0 text-theme"><?php echo $dashboard_departments_count; ?></h3>
                    </div>
                <div class="col-5">
                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
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
<!--  -->




<!--  -->
<div class="col-xl-3 col-lg-6">
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex fw-bold small mb-3">
                <span class="flex-grow-1"><i class="fas fa-lg fa-fw me-2 fa-users text-theme icon-size"></i><?php echo "EMPLOYEES"; ?></span>
                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
            </div>
            <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0 text-theme"><?php echo $count_all_active_employees; ?></h3>
                    </div>
                <div class="col-5">
                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
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
<!--  -->




<!--  -->
<div class="col-xl-3 col-lg-6">
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex fw-bold small mb-3">
                <span class="flex-grow-1"><i class="fas fa-sm fa-fw me-2 fa-eye-slash text-theme icon-size"></i><?php echo "LEAVE REQUESTS"; ?></span>
                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
            </div>
            <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0 text-theme"><?php echo $count_pending_leaves; ?></h3>
                    </div>
                <div class="col-5">
                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
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
<!--  -->




<!--  -->
<div class="col-xl-3 col-lg-6">
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex fw-bold small mb-3">
                <span class="flex-grow-1"><i class="fas fa-sm fa-fw me-2 fa-money-bill-alt text-theme icon-size"></i><?php echo "TOTAL SALARY - UGX"; ?></span>
                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
            </div>
            <div class="row align-items-center mb-2">
                    <div class="col-12">
                        
                            <?php foreach($salary_paid->result() as $salary): ?>

                                <h3 class="mb-0 text-theme"> <small>UGX: <?php echo number_format($salary->salary, 2); ?></small> </h3>

                            <?php endforeach; ?>
                        
                    </div>
                <div class="col-5">
                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
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

</div>
<!-- Row -->

<!-- <hr> -->

<!-- Row -->
<div class="row">


<!--  -->
<div class="col-xl-3 col-lg-6">
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex fw-bold small mb-3">
                <span class="flex-grow-1"><i class="far fa-sm fa-fw me-2 fa-money-bill-alt text-theme icon-size"></i><?php echo "LOAN REQUESTS"; ?></span>
                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
            </div>
            <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0 text-theme"><?php echo $count_pending_loans; ?></h3>
                    </div>
                <div class="col-5">
                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
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
<!--  -->




<!--  -->
<div class="col-xl-3 col-lg-6">
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex fw-bold small mb-3">
                <span class="flex-grow-1"><i class="fas fa-sm fa-fw me-2 fa-chart-line text-theme icon-size"></i><?php echo "RUNNING PROJECTS"; ?></span>
                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
            </div>
            <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0 text-theme"><?php echo $count_running_projects; ?></h3>
                    </div>
                <div class="col-5">
                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
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
<!--  -->




<!--  -->
<div class="col-xl-3 col-lg-6">
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex fw-bold small mb-3">
                <span class="flex-grow-1"><i class="fas fa-lg fa-fw me-2 fa-check text-theme icon-size"></i><?php echo "FINISHED PROJECTS"; ?></span>
                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
            </div>
            <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0 text-theme"><?php echo $count_finished_projects; ?></h3>
                    </div>
                <div class="col-5">
                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
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
<!--  -->




<!--  -->
<div class="col-xl-3 col-lg-6">
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex fw-bold small mb-3">
                <span class="flex-grow-1"><i class="fas fa-sm fa-fw me-2 fa-times text-theme icon-size"></i><?php echo "RESIGNED EMPLOYEES"; ?></span>
                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
            </div>
            <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0 text-theme"><?php echo $count_all_resigned_employees; ?></h3>
                    </div>
                <div class="col-5">
                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
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



<div class="col-xl-3 col-lg-6">
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex fw-bold small mb-3">
                <span class="flex-grow-1"><i class="fas fa-sm fa-fw me-2 fa-money-bill-alt text-theme icon-size"></i><?php echo "TOTAL SALARY - USD"; ?></span>
                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
            </div>
            <div class="row align-items-center mb-2">
                    <div class="col-12">
                        
                            <?php foreach($dollar_salary_paid->result() as $dollar_salary): ?>

                                <h3 class="mb-0 text-theme"> <small>USD: <?php echo number_format($dollar_salary->dollar_salary, 2); ?></small> </h3>

                            <?php endforeach; ?>
                        
                    </div>
                <div class="col-5">
                    <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
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

</div>
<!-- Row -->





<br>




<div class="row">

	<div class="col-xl-6">
		<div class="card mb-3">
			<div class="card-body">

				<div class="d-flex fw-bold small mb-3">
					<span class="flex-grow-1">Running Projects</span>
					<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
				</div>


				<div class="table-responsive">
					<table class="w-100 mb-0 small align-middle text-nowrap">
						<tbody>
                            <?php foreach($running_projects->result() as $running_p): ?>
							<tr>
								<td>
                                    <hr>
									<div class="d-flex">
										<div class="position-relative mb-2">
											<div class="bg-position-center bg-size-cover bg-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-1.jpg);">
											</div>
											<div class="position-absolute top-0 start-0">
												<span class="badge bg-theme text-theme-900 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px"><?php echo $running_p->project_id; ?></span>
											</div>
										</div>
										<div class="flex-1 ps-3">
											<div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-white bg-opacity-25 text-white text-opacity-75 pt-5px"><?php echo $running_p->project_name; ?></small></div>
											<div class="fw-500 text-white"><?php echo word_limiter($running_p->project_description, 30); ?></div>
										</div>
									</div>
								</td>
                                <td>
                                    <table class="mb-2">
                                        <tr>
                                            <td class="pe-3 text-nowrap"><small><?php echo $running_p->start_date; ?></small></td>
                                            <td class="text-white text-opacity-75 fw-500"><small><?php echo $running_p->close_date; ?></small></td>
                                        </tr>
                                    </table>
                                </td>
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









	<div class="col-xl-6">
		<div class="card">
			<div class="card-body">
				<div class="d-flex fw-bold small mb-3">
					<span class="flex-grow-1">My Do List / Tasks for today</span>
					<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
				</div>


				<div class="tab-content p-4">
					<div class="tab-pane fade show active" id="allTab">
						<div class="table-responsive">
							<table class="table table-hover text-nowrap">
								<tbody>
                                    <?php foreach($to_do_list->result() as $to_do): ?>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<!-- <input type="checkbox" class="form-check-input" id="product1"> -->
												<!-- <label class="form-check-label" for="product1"></label> -->
											</div>
										</td>
										<td class="align-middle"><?php echo $to_do->list_name; ?></td>
                                        <td class="w-10px align-middle">
                                            <?php echo form_open('dashboard/delete_todo/'.$to_do->list_id);?>
                                                <div class="form-check">
                                                    <!-- <input type="checkbox" class="form-check-input bg-danger" onclick="$('#delete_task_button').click()"> -->
                                                </div>
                                                <a href="<?php echo base_url().'dashboard/delete_todo/'.$to_do->list_id; ?>" id="delete_task_button" class="btn btn-danger btn-sm">Del</a>
                                            </form>
										</td>
									</tr>
                                    <?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
            <div class="card-footer">
            <?php echo form_open('dashboard/add_todo');?>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="mb-3 row">
                                <div class="">
                                    <input type="text" name="list_name" class="form-control" id="inputEmail3" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3 row">
                                <div class="">
                                    <button type="submit" class="btn btn-theme">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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





