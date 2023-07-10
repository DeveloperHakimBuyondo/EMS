<div id="responsiveTables" class="mb-5"><div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Department Name</th>
							<th scope="col">Date Created</th>
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
						<?php if($this->session->userdata('department_id') == $dep_data->dep_id): ?>
						<tr>
							<td><?php echo $dep_data->dep_name; ?></td>
							<td><?php echo $dep_data->created_at; ?></td>
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