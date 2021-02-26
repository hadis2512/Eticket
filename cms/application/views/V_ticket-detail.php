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

			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
							<h2><span class="fa fa-ticket"></span> Data Ticket Used</h2>
					</div>
						<?php echo $this->session->flashdata('msg');?>
				</section>

				<!-- BEGIN TABLE HOVER -->
				<section class="style-default-bright" style="margin-top:0px;">
					
					<div class="section-body">	
						<div class="row">
							
							<table class="table table-hover" id="datatable1">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">No Transaksi</th>
									<th class="text-center">Email</th>										
									<th class="text-center">Jumlah</th>
									<th class="text-center">Active</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$no=0;
								foreach ($data->result_array() as $a) {
									$no++;
									$id=$a['id'];								
									$id_member=$a['email'];
									$jumlah=$a['jumlah'];
									$active=$a['active'];	
								
							?>
								<tr>
									<td class="text-center"><?php echo $no;?></td>
									<td class="text-center"><?php echo $id;?></td>
									<td class="text-center"><?php echo $id_member;?></td>									
									<td class="text-center"><?php echo $jumlah;?></td>
									<td class="text-center"><?php echo $active;?></td>									
								</tr>

							<?php } ?>
								
							</tbody>
						  </table>

						</div>
					</div><!--end .section-body -->

					
				</section>
				<!-- END TABLE HOVER -->

				

			</div><!--end #content-->
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
				</div><!--end .menubar-scroll-panel-->
			</div>
		</div>
	</body>
</html>
