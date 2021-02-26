<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dashboard</title>

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
			<div class="container"><canvas id="myChart" width="400" height="400"></canvas></div>
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

				<!-- BEGIN DASHBOARD -->

				<?php $this->load->view('Menubar'); ?>


				<!-- END MAIN MENU -->

				<?php $this->load->view('V_footer')?>
			</div>
			<!--end .menubar-scroll-panel-->
		</div>
		<!--end #menubar-->
		<!-- END MENUBAR -->



	</div>
	<!--end #base-->
	<!-- END BASE -->


</body>

</html>