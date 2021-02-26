<!DOCTYPE html>
<html lang="en">

<head>
	<title>News</title>

	<!-- BEGIN META -->
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
					<h2><span class="fa fa-calendar"></span> Data News</h2>
				</div>
				<?php echo $this->session->flashdata('msg'); ?>
			</section>


			<!-- BEGIN TABLE HOVER -->
			<section class="style-default-bright" style="margin-top:0px;">
				<p><a href="<?= base_url() . 'News/add' ?>" class="btn btn-primary"><span class="fa fa-plus"></span> Add News</a></p>

				<div class="section-body">
					<div class="row">

						<table class="table table-hover" id="datatable1">
							<thead>
								<tr>
									<th>No</th>
									<th>Id</th>
									<th>Author</th>
									<th>Topic</th>
									<th>Date</th>								
									<th>Content</th>
									<th>Picture</th>

									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$no = 0;
								foreach ($data->result_array() as $a) {
									$no++;
									$id = $a['id'];
									$topic = $a['topic'];
									$author = $a['author'];
									$date = $a['date'];
									$content = $a['content'];						
									$picture = $a['picture'];

								?>
									<tr>

										<td><?php echo $no; ?></td>
										<td><?php echo $id; ?></td>
										<td><?php echo $topic; ?></td>
										<td><?php echo $author; ?></td>
										<td><?php echo date('d F Y H:ia ', strtotime($date)); ?></td>										
										<td><?php echo $content; ?></td>
										<td class="lightgallery">
											<a href="<?php echo 'http://localhost/Eticket/cms/	' . $picture; ?>">
												<img style="width:80px;height:80px;" class="img-thumbnail width-1 " src="<?php echo 'http://localhost/Eticket/cms/' . $picture; ?>" alt="" />
											</a>
										</td>


										<td class="text-center">
											<a href="<?= base_url() . 'update-news/' . $id ?>" data-keyboard="false" data-backdrop="static" class="btn btn-icon-toggle" title="Edit News"><i class="fa fa-pencil"></i></a>

											<a href="#" data-keyboard="false" data-backdrop="static" class="btn btn-icon-toggle" title="Delete News" data-toggle="modal" data-target="#modal_delete_event<?php echo $id; ?>"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									<div class="modal fade" id="modal_delete_event<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													<h3 class="modal-title" id="myModalLabel">Delete Event</h3>
												</div>
												<?php echo form_open('News/delete_news', 'class="form-horizontal" enctype="multipart/form-data"'); ?>
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
																'value' => $topic,
																'type' => 'hidden'
															);
															echo form_input($name1); ?>
															<p>Are you sure want to delete data <b><?php echo $topic; ?></b> ?</p>
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
								<?php }
								?>

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

				<?php $this->load->view('V_footer'); ?>
			</div>
			<!--end .menubar-scroll-panel-->
		</div>
		<!--end #menubar-->
		<!-- END MENUBAR -->

	</div>
	<!--end #base-->
	<!-- END BASE -->

	<!-- ============ MODAL ADD EVENT =============== -->
	<div class="container">


		<div class="container">
			<button type="button" class="close">
				<a href="<?= base_url() . 'Add' ?>"></a>
			</button>

		</div>

		<!-- ============ MODAL EDIT MENU =============== -->

		<!-- ============ MODAL DELETE EVENT =============== -->

</body>

</html>