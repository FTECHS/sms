<?php
include_once('includes/header.php');
?>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Academic Year Setup</h4>
				</div>
				<div class="pull-right">
					<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="modal" data-target="#Medium-modal" type="button"><i class="fa fa-plus-circle"></i> Add New</a>
				</div>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Year</th>
							<th scope="col">Term</th>
							<th scope="col">Opening Date</th>
							<th scope="col">Closing Date</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>2020/2021</td>
							<td>1</td>
							<td>12-12-20</td>
							<td>12-12-21</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modals -->
<div class="col-md-4 col-sm-12 mb-30">
		<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myLargeModalLabel">Academics</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
					<form id="frmacademics_setup">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Academic Year:</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="eg. 2020/2021" required="">
							</div>
						</div>
						<!--
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="1-(111)-111-1111" type="tel">
							</div>
						</div>
                         -->
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Select Term:</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" required="">
									<option value="" disabled selected>Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Opening Date:</label>
							<div class="col-sm-12 col-md-10">
							    <input type="text" class="form-control date-picker" placeholder="Select Date" required="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Closing Date:</label>
							<div class="col-sm-12 col-md-10">
							    <input type="text" class="form-control date-picker" placeholder="Select Date" required="">
							</div>
						</div>
					</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						<button type="submit" form="frmacademics_setup" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
</div>

<?php
include_once('includes/footer.php');
?>