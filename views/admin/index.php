<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>LMD SHOP</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="views/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="views/admin/css/ready.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.php?controller=admin" class="logo">
					ADMIN SHOP
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="views/admin/img/cdcd.jpg" alt="user-img" width="40" class="img-circle"><span >Nguyễn Văn Đô</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="views/admin/img/cdcd.jpg" alt="user"></div>
										<div class="u-text">
											<h4>Nguyễn Văn Đô</h4>
											<p class="text-muted">do@gmail.com</p>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="index.php?controller=login&action=logout"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="views/admin/img/cdcd.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Nguyễn Văn Đô
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="index.php?controller=admin">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="index.php?controller=users">
								<i class="la la-table"></i>
								<p>Manage member</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="index.php?controller=category">
								<i class="la la-keyboard-o"></i>
								<p>Manage categories</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="index.php?controller=brand">
								<i class="la la-keyboard-o"></i>
								<p>Manage Brand</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="index.php?controller=payment">
								<i class="la la-keyboard-o"></i>
								<p>Manage Payment</p>
							</a>
						</li>
						<li class="nav-item">
                            <a href="index.php?controller=product">
								<i class="la la-th"></i>
								<p>Product Management</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="index.php?controller=order">
								<i class="la la-keyboard-o"></i>
								<p>Manage Order</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Dashboard</h4>
						<div class="row">
							<div class="col-md-4">
								<div class="card card-stats card-warning">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-users"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Access</p>
													<h4 class="card-title">2,294 Person</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-stats card-success">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-bar-chart"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Turnover</p>
													<h4 class="card-title">4.000.000 $</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-stats card-primary">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-check-circle"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Oder</p>
													<h4 class="card-title">204 Person</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Statistical</h4>
										<p class="card-category">Last month</p>
									</div>
									<div class="card-body">
										<div id="task-complete" class="chart-circle mt-4 mb-3"></div>
									</div>
									<div class="card-footer">
										<div class="legend"><i class="la la-circle text-primary"></i>Increase</div>
									</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-body">
										<div class="progress-card">
											<h4 class="card-title">Product Statistics</h4>
											<br>
											<div class="d-flex justify-content-between mb-3">
												<span class="text-muted">Laptop New</span>
												<span class="text-muted fw-bold"> 80%</span>
											</div>
											<div class="progress mb-2" style="height: 10px;">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="78%"></div>
											</div>
										</div>
										<div class="progress-card">
											<div class="d-flex justify-content-between mb-3">
												<span class="text-muted">Laptop Old</span>
												<span class="text-muted fw-bold"> 65%</span>
											</div>
											<div class="progress mb-2" style="height: 10px;">
												<div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="65%"></div>
											</div>
										</div>
										<div class="progress-card">
											<div class="d-flex justify-content-between mb-3">
												<span class="text-muted">Laptop Accessory</span>
												<span class="text-muted fw-bold"> 50%</span>
											</div>
											<div class="progress mb-2" style="height: 10px;">
												<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="70%"></div>
											</div>
										</div>
										<div class="progress-card">
											<div class="d-flex justify-content-between mb-3">
												<span class="text-muted">Other</span>
												<span class="text-muted fw-bold"> 10%</span>
											</div>
											<div class="progress mb-2" style="height: 10px;">
												<div class="progress-bar bg-dark" role="progressbar" style="width: 10%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="60%"></div>
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
</body>
<script src="views/admin/js/core/jquery.3.2.1.min.js"></script>
<script src="views/admin/js/core/bootstrap.min.js"></script>
<script src="views/admin/js/chart-circle/circles.min.js"></script>
<script src="views/admin/js/demo.js"></script>
</html>