<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kritik & Saran</title>

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
					<h2><span class="fa fa-user"></span> Data Kritik & Saran</h2>
				</div>
				<?php echo $this->session->flashdata('msg'); ?>
			</section>

			<!-- BEGIN TABLE HOVER -->
			<section class="style-default-bright" style="margin-top:0px;">
				<!-- <p><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_user"><span class="fa fa-plus"></span> Add User</a></p> -->

				<div class="section-body">
					<div class="row">

						<table class="table table-hover" id="datatable1">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Subject</th>
									<th>Message</th>
									
									<!-- <th class="text-center">Actions</th> -->
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($data->result_array() as $a) {
									$id = $a['id'];
									$name = $a['name'];
									$email = $a['email'];
									$subject = $a['subject'];
									$message = $a['message'];
									

								?>
									<tr>
										<td><?php echo $id; ?></td>
										<td><?php echo $name; ?></td>
										<td><?php echo $email; ?></td>
										<td><?php echo $subject; ?></td>
										<td><?php echo $message; ?></td>
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

				<?php $this->load->view('V_footer');?>
			</div>
			<!--end .menubar-scroll-panel-->
		</div>
		<!--end #menubar-->
		<!-- END MENUBAR -->

	</div>