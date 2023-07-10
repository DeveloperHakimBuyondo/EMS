



<!-- User Pannel -->
<div class="menu-item dropdown dropdown-mobile-full">
	<?php if($this->session->userdata('user_access') == 0): ?>
	<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
		<div class="menu-img online">
			<img src="<?php echo base_url(); ?>assets/assets/images/staff_data/branch_avatar.png" height="60px" />
		</div>
		
		<div class="menu-text d-sm-block d-none"><span> <strong class="text text-capitalize"><?php echo $this->session->userdata('username'); ?></strong></span></div>
	</a>
	<?php endif; ?>
	<div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
		<!-- <a class="dropdown-item d-flex align-items-center" href="#">PROFILE <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
		<a class="dropdown-item d-flex align-items-center" href="#">INBOX <i class="bi bi-envelope ms-auto text-theme fs-16px my-n1"></i></a>
		<a class="dropdown-item d-flex align-items-center" href="#">CALENDAR <i class="bi bi-calendar ms-auto text-theme fs-16px my-n1"></i></a>
		<a class="dropdown-item d-flex align-items-center" href="#">SETTINGS <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>
		<div class="dropdown-divider"></div> -->
		<a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>users/logout">LOG OUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
	</div>
</div>
<!-- User Pannel -->