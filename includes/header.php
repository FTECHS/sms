<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>F-TECHS:SCHOOL MANAGEMENT SYSTEM</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/load_logo.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		</div>
		<div class="header-right">
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>notification header</h3>
										<p>notification message</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">username:</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="vendors/images/ftechs-logo.png" alt="" class="dark-logo">
				<img src="vendors/images/ftechs-logo.png" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span data-color="#FFA701" class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li><a href="dashboard.php">Dashboard</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span data-color="#FFA701" class="micon dw dw-group"></span><span class="mtext">Students</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html">Registration</a></li>
                        </ul>
                        <ul class="submenu">
							<li><a href="form-basic.html">Lists</a></li>
                        </ul>
                        <ul class="submenu">
							<li><a href="form-basic.html">Attendance</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span data-color="#FFA701" class="micon dw dw-user-3"></span><span class="mtext">Employees</span>
						</a>
						<ul class="submenu">
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle">
									<span data-color="#FFA701" class="micon fa fa-user-circle-o"></span><span class="mtext">Teaching Staff</span>
								</a>
								<ul class="submenu child">
									<li><a href="javascript:;">Registration</a></li>
                                    <li><a href="javascript:;">Assign</a></li>
                                    <li><a href="javascript:;">Lists</a></li>
								</ul>
							</li>
                        </ul>
                        <ul class="submenu">
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle">
									<span data-color="#FFA701" class="micon fa fa-user-o"></span><span class="mtext">Non-Teaching Staff</span>
								</a>
								<ul class="submenu child">
									<li><a href="javascript:;">Registration</a></li>
                                    <li><a href="javascript:;">Lists</a></li>
								</ul>
							</li>
						</ul>
                    </li>
                    <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span data-color="#FFA701" class="micon dw dw-calculator"></span><span class="mtext">Fees Management</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html">Fees Allocation</a></li>
                        </ul>
                        <ul class="submenu">
							<li><a href="form-basic.html">Fees Collection</a></li>
                        </ul>
                        <ul class="submenu">
							<li><a href="form-basic.html">Report</a></li>
						</ul>
                    </li>
                    <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span data-color="#FFA701" class="micon dw dw-pencil"></span><span class="mtext">Exams/Assessment</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html">Setup Exams</a></li>
                        </ul>
                        <ul class="submenu">
							<li><a href="form-basic.html">Marks Entry</a></li>
                        </ul>
                        <ul class="submenu">
							<li><a href="form-basic.html">Report</a></li>
						</ul>
                    </li>
                    <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span data-color="#FFA701" class="micon dw dw-wallet-1"></span><span class="mtext">Expenses</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html">Expenses Incurred</a></li>
                        </ul>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Setups</div>
					</li>
					<li>
						<a href="academics_setup.php" class="dropdown-toggle no-arrow">
							<span data-color="#FFA701" class="micon dw dw-calendar1"></span><span class="mtext">Academic Year</span>
						</a>
                    </li>
                    <li>
						<a href="class_setup.php" class="dropdown-toggle no-arrow">
							<span data-color="#FFA701" class="micon dw dw-apartment"></span><span class="mtext">Class</span>
						</a>
                    </li>
                    <li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span data-color="#FFA701" class="micon dw dw-book1"></span><span class="mtext">Subject</span>
						</a>
                    </li>
                    <li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span data-color="#FFA701" class="micon dw dw dw-money"></span><span class="mtext">Fees</span>
						</a>
                    </li>
                    <li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span data-color="#FFA701" class="micon dw dw-money-2"></span><span class="mtext">Salary</span>
						</a>
                    </li>
                    <li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span data-color="#FFA701" class="micon dw dw-table1"></span><span class="mtext">Grade</span>
						</a>
                    </li>
                    <li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span data-color="#FFA701" class="micon dw dw-invoice-1"></span><span class="mtext">Expenses</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>