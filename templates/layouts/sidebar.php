<?php
if (! defined('_HUNG')) {
	die('Truy cập không hợp lệ');
}

?>
<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
	<!--begin::Sidebar Brand-->
	<div class="sidebar-brand">
		<!--begin::Brand Link-->
		<a href="./index.html" class="brand-link">
			<!--begin::Brand Image-->
			<img src="<?php echo _HOST_URL_TEMPLATES?>/assets/images/Logo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
			<!--end::Brand Image-->
			<!--begin::Brand Text-->
			<span class="brand-text fw-light">HUNG CHIKA</span>
			
			<!--end::Brand Text-->
		</a>
		<!--end::Brand Link-->
	</div>
	<!--end::Sidebar Brand-->
	<!--begin::Sidebar Wrapper-->
	<div class="sidebar-wrapper" data-overlayscrollbars="host">
		<div class="os-size-observer">
			<div class="os-size-observer-listener"></div>
		</div>
		<div class="" data-overlayscrollbars-viewport="scrollbarHidden overflowXHidden overflowYScroll" tabindex="-1" style="margin-right: -16px; margin-bottom: -16px; margin-left: 0px; top: -8px; right: auto; left: -8px; width: calc(100% + 16px); padding: 8px;">
			<nav class="mt-2">
				<!--begin::Sidebar Menu-->
				<ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
					<li class="nav-item menu-open">
						<a href="#" class="nav-link active">
							<i class="nav-icon bi bi-speedometer"></i>
							<p>
								Dashboard
							</p>
						</a>
						
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon bi bi-box-seam-fill"></i>
							<p>
								Courses
								<i class="nav-arrow bi bi-chevron-right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./widgets/small-box.html" class="nav-link">
									<i class="nav-icon bi bi-circle"></i>
									<p>Courses List</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./widgets/info-box.html" class="nav-link">
									<i class="nav-icon bi bi-circle"></i>
									<p>Add Course</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./widgets/cards.html" class="nav-link">
									<i class="nav-icon bi bi-circle"></i>
									<p>Course Categories</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon bi bi-clipboard-fill"></i>
							<p>
								User Management
								<i class="nav-arrow bi bi-chevron-right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./layout/unfixed-sidebar.html" class="nav-link">
									<i class="nav-icon bi bi-circle"></i>
									<p>Users List</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./layout/fixed-sidebar.html" class="nav-link">
									<i class="nav-icon bi bi-circle"></i>
									<p>Create User</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon bi bi-pencil-square"></i>
							<p>
								Student Management
								<i class="nav-arrow bi bi-chevron-right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./forms/general.html" class="nav-link">
									<i class="nav-icon bi bi-circle"></i>
									<p>Student List</p>
								</a>
							</li>
						</ul>
					</li>
				</ul>
				<!--end::Sidebar Menu-->
			</nav>
		</div>
		<div class="os-scrollbar os-scrollbar-horizontal os-theme-light os-scrollbar-auto-hide os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-cornerless os-scrollbar-unusable" style="--os-viewport-percent: 1; --os-scroll-direction: 0;">
			<div class="os-scrollbar-track">
				<div class="os-scrollbar-handle"></div>
			</div>
		</div>
		<div class="os-scrollbar os-scrollbar-vertical os-theme-light os-scrollbar-auto-hide os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-visible os-scrollbar-cornerless" style="--os-viewport-percent: 0.1268; --os-scroll-direction: 0;">
			<div class="os-scrollbar-track">
				<div class="os-scrollbar-handle"></div>
			</div>
		</div>
	</div>
	<!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
<script>
// Tự động đếm và hiển thị số lượng item trong nav-treeview
document.addEventListener('DOMContentLoaded', function() {
	document.querySelectorAll('.nav-badge').forEach(function(badge) {
		const navItem = badge.closest('.nav-item');
		const treeview = navItem.querySelector('.nav-treeview');
		if (treeview) {
			const count = treeview.querySelectorAll('.nav-item').length;
			badge.textContent = count;
		}
	});
});
</script>