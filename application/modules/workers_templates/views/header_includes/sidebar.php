<!-- SideBar Starts Here -->
<div id="sidebar" class="app-sidebar">
	<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
		<div class="menu">
			<div class="menu-header">Navigation</div>
			<div class="menu-item active">
				<a href="<?php echo base_url(); ?>workers/dashboard" class="menu-link">
					<span class="menu-icon"><i class="bi bi-cpu"></i></span>
					<span class="menu-text">Dashboard</span>
				</a>
			</div>

			<div class="menu-header">Components</div>
			
			<div class="menu-item has-sub">
				<a href="#" class="menu-link">
					<span class="menu-icon"><i class="fas fa-sm fa-fw me-2 fa-user"></i></span>
					<span class="menu-text">Others</span>
					<span class="menu-caret"><b class="caret"></b></span>
				</a>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="<?php echo base_url(); ?>workers/workers" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text">See Other Workers</span>
						</a>
					</div>
				</div>
			</div>

			<div class="menu-item has-sub">
				<a href="#" class="menu-link">
					<span class="menu-icon"><i class="fas fa-sm fa-fw me-2 fa-money-bill-alt"></i></span>
					<span class="menu-text">Salary</span>
					<span class="menu-caret"><b class="caret"></b></span>
				</a>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="<?php echo base_url(); ?>workers/salary" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text">My Salary</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="<?php echo base_url(); ?>workers/salary/request" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text"> Request an Increment</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="<?php echo base_url(); ?>workers/salary/my_requests" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text"> My Requests </span>
						</a>
					</div>
				</div>
			</div>
			<div class="menu-item has-sub">
				<a href="#" class="menu-link">
					<span class="menu-icon"><i class="fas fa-sm fa-fw me-2 fa-eye-slash"></i></span>
					<span class="menu-text">Leaves</span>
					<span class="menu-caret"><b class="caret"></b></span>
				</a>
				<div class="menu-submenu">

					<div class="menu-item">
						<a href="<?php echo base_url(); ?>workers/leaves/request" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text">Request a Leave</span>
						</a>
					</div>

					<div class="menu-item">
						<a href="<?php echo base_url(); ?>workers/leaves" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text"> My Leave Requests </span>
						</a>
					</div>

					<div class="menu-item">
						<a href="<?php echo base_url(); ?>workers/leaves/history" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text">My Leave History</span>
						</a>
					</div>
				</div>
			</div>

			<div class="menu-item has-sub">
				<a href="#" class="menu-link">
					<span class="menu-icon"><i class="far fa-sm fa-fw me-2 fa-money-bill-alt"></i></span>
					<span class="menu-text">Loans</span>
					<span class="menu-caret"><b class="caret"></b></span>
				</a>
				<div class="menu-submenu">

					<div class="menu-item">
						<a href="<?php echo base_url(); ?>workers/loans/request" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text">Request a Loan</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="<?php echo base_url(); ?>workers/loans" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text"> My Loan Requests </span>
						</a>
					</div>

					<div class="menu-item">
						<a href="<?php echo base_url(); ?>workers/loans/history" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text"> My Loan History </span>
						</a>
					</div>
				</div>
			</div>

			<!-- <div class="menu-item has-sub">
				<a href="#" class="menu-link">
					<span class="menu-icon"><i class="fas fa-sm fa-fw me-2 fa-times"></i></span>
					<span class="menu-text">Risignation</span>
					<span class="menu-caret"><b class="caret"></b></span>
				</a>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="#" class="menu-link"><i class="fas fa-sm fa-fw me-2 fa-bullseye"></i>
							<span class="menu-text">Resign coming is soon</span>
						</a>
					</div>
				</div>
			</div> -->
			
			<div class="menu-divider"></div>
		</div>
		<!-- <div class="p-3 px-4 mt-auto">
			<a href="#" class="btn d-block btn-outline-theme">
				<i class="fa fa-code-branch me-2 ms-n2 opacity-5"></i> Documentation
			</a>
		</div> -->
	</div>
</div>
<!-- SideBar Ends Here -->