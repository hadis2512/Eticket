<!DOCTYPE html>
<html lang="en">

<head>
	<title>Member</title>

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
					<h2><span class="fa fa-user"></span> Data Member</h2>
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
									<th>Email</th>
									<th>Password</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Jenis Kelamin</th>
									<th>Phone</th>
									<th>Address 1</th>									
									<th>City</th>
									<th>Zip Code</th>									
									<th>Date</th>
									<th class="hidden">Status</th>
									<!-- <th class="text-center">Actions</th> -->
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($data->result_array() as $a) {
									$id = $a['id'];
									$email = $a['email'];
									$password = $a['password'];
									$fname = $a['first_name'];
									$lname = $a['last_name'];
									$jkelamin = $a['jenis_kelamin'];
									$phone = $a['phone'];
									$address1 = $a['address1'];									
									$city = $a['city'];
									$zipcode = $a['zip_code'];								
									$status = $a['status'];
									$date = $a['date'];

								?>
									<tr>
										<td><?php echo $id; ?></td>
										<td><?php echo $email; ?></td>
										<td><?php echo $password; ?></td>
										<td><?php echo $fname; ?></td>
										<td><?php echo $lname; ?></td>
										<td><?php echo $jkelamin; ?></td>
										<td><?php echo $phone; ?></td>
										<td><?php echo $address1; ?></td>										
										<td><?php echo $city; ?></td>
										<td><?php echo $zipcode; ?></td>									
										<td><?php echo date('d F Y H: i a', strtotime($date)); ?></td>
										<td class="text-center">
											<!-- <a href="#" class="btn btn-icon-toggle" title="Edit User" data-toggle="modal" data-target="#modal_edit_user<?php echo $id; ?>"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-icon-toggle" title="Delete User" data-toggle="modal" data-target="#modal_delete_user<?php echo $id; ?>"><i class="fa fa-trash-o"></i></a> -->
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