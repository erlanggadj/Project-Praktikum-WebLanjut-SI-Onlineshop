<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="/" class="brand-link navbar-primary">
	  	<img src="<?php echo base_url()?>/admin/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
			style="opacity: .8">
	  	<span class="brand-text font-weight-light">Online Shop</span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
	  	<!-- Sidebar user panel (optional) -->
	  	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
		  		<img src="<?php echo base_url()?>/admin/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
		  		<a href="#" class="d-block">Erlangga Dwi Jiwantoro</a>
			</div>
	  	</div>

	  	<!-- Sidebar Menu -->
	  	<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= site_url('admin/dashboard') ?>" class="nav-link <?= ($currentAdminSubMenu == 'dashboard') ? 'active' : '' ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item has-treeview <?= ($currentAdminMenu == 'catalogue') ? 'menu-open' : '' ?>">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>Catalogue <i class="fas fa-angle-left right"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="http://localhost:8080/admin/products" class="nav-link <?= ($currentAdminSubMenu == 'product') ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Products</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('admin/products/trashed') ?>" class="nav-link <?= ($currentAdminSubMenu == 'deleted-product') ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Deleted Products</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('admin/categories') ?>" class="nav-link <?= ($currentAdminSubMenu == 'category') ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Categories</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('admin/attributes') ?>" class="nav-link <?= ($currentAdminSubMenu == 'attribute') ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Attributes</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('admin/brands') ?>" class="nav-link <?= ($currentAdminSubMenu == 'brand') ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Brands</p>
							</a>
						</li>
					</ul>
				</li>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>