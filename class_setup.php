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
			<div class="pb-20">
						<table class="tbl_class_setup table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">#</th>
									<th>Class</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-plus">Gloria F. Mead</td>
									<td>1a</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-edit"></i> View/Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
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
					<h4 class="modal-title" id="myLargeModalLabel">Classes</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form id="frmacademics_setup">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Class Name:</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="eg. Creche, 1a, JHS 1" required="">
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
<script>
	$(document).ready(function(){
     $('.tbl_class_setup').DataTable();
	});
</script>