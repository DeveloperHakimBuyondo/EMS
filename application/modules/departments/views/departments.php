<div id="responsiveTables" class="mb-5"><div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Department Name</th>
							<th scope="col">Date Created</th>
							<th class="text text-center" scope="col">Option</th>
						</tr>
					</thead>
					<tbody>
                        <?php if(empty($departments->result())){
                            echo    '<tr>
                                        <td colspan="11" class="text-center text-theme"><i class="fas fa-fw me-2 fa-trash empty-row-icon"></i><br>
                                            No departments created yet !!! 
                                        </td>
                                    </tr>';
                        }?>
                        <?php foreach($departments->result() as $dep_data): ?>
						<tr>
							<td><?php echo $dep_data->dep_name; ?></td>
							<td><?php echo $dep_data->created_at; ?></td>
							<td class="text text-center" scope="col">
								<ul class="nav">
									<li class="nav-item me-1 dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
										<div class="dropdown-menu">
											<!-- <a href="<?php //echo base_url(); ?>departments/view/<?php //echo $dep_data->dep_id; ?>" class="dropdown-item">See Full Information<i class="fab fa-sm fa-fw me-2 fa-firstdraft text-success float-right"></i></a> -->
											<a href="<?php echo base_url(); ?>departments/edit/<?php echo $dep_data->dep_id; ?>" class="dropdown-item">Update Department Information<i class="fas fa-sm fa-fw me-2 fa-edit text-theme float-right"></i></a>
											<a href="<?php echo base_url(); ?>departments/delete/<?php echo $dep_data->dep_id; ?>" class="dropdown-item">Delete Department<i class="fas fa-sm fa-fw me-2 fa-trash-alt text-danger float-right"></i></a>
										</div> 
									</li>
								</ul>
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