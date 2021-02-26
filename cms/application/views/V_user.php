<!DOCTYPE html>
<html lang="en">

<head>
	<title>User</title>

	<?php $this->load->view('Scripts'); ?>


</head>

<body class="menubar-hoverable header-fixed">

	<?php
	$this->load->view('V_header');
	?>

	<!-- BEGIN BASE-->
	<div id="base">

		<!-- BEGIN OFFCANVAS LEFT -->
		<div class="offcanvas">

		</div>
		<!--end .offcanvas-->
		<!-- END OFFCANVAS LEFT -->

		<!-- BEGIN CONTENT-->
		<div id="content">
			<section>
				<div class="section-header">
					<h2><span class="fa fa-user"></span> Data User</h2>
				</div>
				<?php echo $this->session->flashdata('msg'); ?>
			</section>

			<!-- BEGIN TABLE HOVER -->
			<section class="style-default-bright" style="margin-top:0px;">
				<p><a href="<?= base_url() . 'add-user' ?>" class="btn btn-primary"><span class="fa fa-plus"></span> Add User</a></p>

				<div class="section-body">
					<div class="row">

						<table class="table table-hover" id="datatable1">
							<thead>
								<tr>
									<th>No</th>
									<th>ID</th>
									<th>Password</th>
									<th>Name</th>
									<th>Access</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$no = 0;
								foreach ($data as $a) {
									$no++;
									$id = $a['id'];
									$name = $a['name'];
									$password = $a['password'];
									$access = $a['access'];


								?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $id; ?></td>
										<td><?php echo $password; ?></td>
										<td><?php echo $name; ?></td>
										<td><?php echo $access; ?></td>
										<td class="text-center">
											<a href="<?= base_url() . 'update-user/' . $id ?>" data-keyboard="false" data-backdrop="static" class="btn btn-icon-toggle" title="Edit user"><i class="fa fa-pencil"></i></a>
											<a href="#" data-keyboard="false" data-backdrop="static" class="btn btn-icon-toggle" title="Delete User" data-toggle="modal" data-target="#modal_delete_user<?php echo $id; ?>"><i class="fa fa-trash-o"></i></a>
											<div class="modal fade" id="modal_delete_user<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															<h3 class="modal-title" id="myModalLabel">Delete User</h3>
														</div>
														<?php echo form_open('User/delete_user', 'class="form-horizontal"', 'role="form"', 'enctype="multipart/form-data"'); ?>
														<div class="modal-body">
															<div class="form-group">
																<label for="regular13" class="col-sm-2 control-label"></label>
																<div class="col-sm-8">
																	<?php $id = array(
																		'name' => 'id',
																		'value' => $id,
																		'type' => 'hidden'
																	);
																	echo form_input($id); ?>
																	<?php $name1 = array(
																		'name' => 'name',
																		'class' => 'form-control',
																		'value' => $name,
																		'type' => 'hidden'
																	);
																	echo form_input($name1); ?>
																	<p>Are you sure want to delete data <b><?php echo $name; ?></b> ?</p>
																</div>
															</div>

														</div>
														<div class="modal-footer">
															<?php $button1 = array(
																'class' => 'btn',
																'value' => 'Close',
																'data-dismiss' => 'modal',
																'type' => 'button',
															);
															echo form_input($button1); ?>
															<?php $button2 = array(
																'class' => 'btn btn-primary',
																'value' => 'Delete',
																'type' => 'submit',
															);
															echo form_input($button2);
															echo form_close(); ?>
														</div>
														</form>
													</div>
												</div>
											</div>
										</td>
									</tr>

								<?php } ?>

							</tbody>
						</table>

					</div>
				</div>
				<!--end .section-body -->


			</section>
			<!-- END TABLE HOVER -->



		</div>
		<!--end #content-->
		<!-- END CONTENT -->

		<!-- BEGIN MENUBAR-->
		<div id="menubar" class="menubar-inverse ">
			<div class="menubar-fixed-panel">
				<div>
					<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
						<i class="fa fa-bars"></i>
					</a>
				</div>

			</div>
			<div class="menubar-scroll-panel">

				<!-- BEGIN MAIN MENU -->
				<?php $this->load->view('Menubar'); ?>

				<!-- END MAIN MENU -->

				<?php $this->load->view('V_footer'); ?>
			</div>
			<!--end .menubar-scroll-panel-->
		</div>
		<!--end #menubar-->
		<!-- END MENUBAR -->

	</div>
	<!--end #base-->
	<!-- END BASE -->

	<!-- ============ MODAL ADD USER =============== -->
	<div class="container">


		<div class="container">
			<button type="button" class="close">
				<a href="<?= base_url() . 'Add_user' ?>"></a>
			</button>

		</div>
</body>

</html>