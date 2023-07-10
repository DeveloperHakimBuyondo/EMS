



<!-- User Pannel -->
<div class="menu-item dropdown dropdown-mobile-full">
	<?php if($this->session->userdata('worker_logged')): ?>
	<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
		<div class="menu-img online">
			<img src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $this->session->userdata('emp_image'); ?>" height="60px" />
		</div>
		
		<div class="menu-text d-sm-block d-none"><span> <strong><?php echo $this->session->userdata('emp_name'); ?></strong> </span></div>
	</a>
	<?php endif; ?>
	<div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
		<!-- <a class="dropdown-item d-flex align-items-center" href="#">PROFILE <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
		<a class="dropdown-item d-flex align-items-center" href="#">INBOX <i class="bi bi-envelope ms-auto text-theme fs-16px my-n1"></i></a>
		<a class="dropdown-item d-flex align-items-center" href="#">CALENDAR <i class="bi bi-calendar ms-auto text-theme fs-16px my-n1"></i></a>
		<a class="dropdown-item d-flex align-items-center" href="#">SETTINGS <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>
		<div class="dropdown-divider"></div> -->
		<a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>workers/workers/view/<?php echo $this->session->userdata('emp_id');?>">PROFILE <i class="bi bi-person ms-auto text-theme fs-16px my-n1"></i></a>
		<a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>workers/worker_cv"> UPLOAD CV <i class="bi bi-papers ms-auto text-theme fs-16px my-n1"></i></a>
		<a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>workers/chat/chat_room/<?php echo $this->session->userdata('employee_id');?>"> GROUP CHAT <i class="fab fa-lg fa-fw me-2 fa-rocketchat ms-auto text-theme fs-16px my-n1"></i></a>
		<a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>users/worker_logout">LOG OUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
	</div>
</div>
<!-- User Pannel -->