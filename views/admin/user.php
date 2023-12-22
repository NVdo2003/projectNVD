
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>LMD SHOP</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
						<li class="nav-item">
							<a href="index.php?controller=admin">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item active">
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
						<h3 class="page-title">Members list</h3>
						<br>
						<div class="card">
							<div class="card-header">
								<div class="card-title">Management member</div>
							</div>
							<div class="card-header">
							<div id="toolbar" class="btn-group">
								<a href="index.php?controller=users&action=create" class="btn btn-success">
									<i class="glyphicon glyphicon-plus"></i> Add members
								</a>
							</div>
								<table class="table mt-3">
									<thead>
										<tr>
											<th scope="col">ID</th>
											<th scope="col">First and last name</th>
											<th scope="col">Email</th>
											<th scope="col">Permission</th>
											<th scope="col">Act</th>
										</tr>
									</thead>

									<tbody>
										<?php
											foreach ($user as $use){
										?>
											<tr>
												<td><?= $use['user_id']; ?></td>
												<td><?= $use['user_name']; ?></td>
												<td><?= $use['user_email']; ?></td>
												<td>
													<?php 
														if($use['user_level'] == 1) {
															echo '<span class="badge text-bg-info">ADMIN</span>';
														}else{
															echo '<span class="badge text-bg-success">MEMBER</span>';
														}
													?>
												</td>
												<td><a href="index.php?controller=users&action=edit&user_id=<?= $use['user_id'] ?>" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Edit</a>
													<a href="index.php?controller=users&action=destroy&user_id=<?= $use['user_id'] ?>" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Delete</a></td>
											</tr>
										<?php
										        }
										?>
									</tbody>
								</table>
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
</html>