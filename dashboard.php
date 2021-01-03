<?php
include_once('includes/header.php');
?>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">

		<div class="title pb-20">
			<h2 class="h3 mb-0">School Overview</h2>
		</div>

		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-18 text-dark">75</div>
							<div class="font-14 text-secondary weight-500">Appointment</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-18 text-dark">124,551</div>
							<div class="font-14 text-secondary weight-500">Total Patient</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-heart"></span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-18 text-dark">400+</div>
							<div class="font-14 text-secondary weight-500">Total Doctor</div>
						</div>
						<div class="widget-icon">
							<div class="icon"><i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-18 text-dark">GH&#8373; 50,000</div>
							<div class="font-14 text-secondary weight-500">Earning</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row pb-10">
			<div class="col-md-12 mb-20">
				<div class="card-box height-100-p pd-20">
					<div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
						<div class="h5 mb-md-0">Monthly Income Against Expenses</div>
						<div class="form-group mb-md-0">
							<select class="form-control form-control-sm selectpicker">
								<option value="">Last Week</option>
								<option value="">Last Month</option>
								<option value="">Last 6 Month</option>
								<option value="">Last 1 year</option>
							</select>
						</div>
					</div>
					<div id="activities-chart"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 mb-20">
				<div class="card-box height-100-p pd-20">
					<div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
					<div class="calendar-wrap">
						<div id='calendar'></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include_once('includes/footer.php');
?>