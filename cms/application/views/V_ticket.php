<!DOCTYPE html>
<html lang="en">

<head>
	<title>Ticket</title>


	<?php $this->load->view('Scripts'); ?>


</head>

<body class="menubar-hoverable header-fixed ">

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
					<h2><span class="fa fa-ticket"></span> Data Ticket</h2>
				</div>
				<?php echo $this->session->flashdata('msg'); ?>
			</section>

			<!-- BEGIN TABLE HOVER -->
			<section class="style-default-bright" style="margin-top:0px;">

				<div class="section-body">
					<div class="row">

						<table class="table table-hover" id="datatable1">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Event</th>
									<th class="text-center">Quota</th>
									<th class="text-center">Sold</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 0;
								foreach ($data->result_array() as $a) {
									$no++;
									$id = $a['id'];
									$event = $a['name'];
									$quota = $a['quota'];
									$ticket = $a['ticket'];

								?>
									<tr>
										<td class="text-center"><?php echo $no; ?></td>
										<td class="text-center"><?php echo $event; ?></td>
										<td class="text-center"><?php echo $quota; ?></td>
										<td class="text-center"><?php echo $ticket; ?></td>

										<td class="text-center">
											<a href="<?php echo base_url() . 'detail-ticket/'.$id; ?>" class="btn btn-icon-toggle" title="Detail Ticket"><i class="fa fa-pencil"></i></a>
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

				<?php $this->load->view('Menubar'); ?>

				<?php $this->load->view('V_footer'); ?>
			</div>
			<!--end .menubar-scroll-panel-->
		</div>
	</div>
</body>

</html>