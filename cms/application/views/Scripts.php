<!-- BEGIN META -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- END META -->

<!-- BEGIN STYLESHEETS -->

<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.css' ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/css/materialadmin.css' ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/css/material-design-iconic-font.min.css' ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/css/DataTables/jquery.dataTables.css' ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/css/DataTables/extensions/dataTables.colVis.css' ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/css/DataTables/extensions/dataTables.tableTools.css' ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/css/lightgallery.min.css' ?>" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">
<!-- END STYLESHEETS -->



<script src="<?php echo base_url() . 'assets/js/bootstrap/bootstrap.min.js' ?>">
</script>
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script src="<?php echo base_url() . 'assets/js/spin/spin.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/autosize/jquery.autosize.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/ckeditor/ckeditor.js'?>"></script>
<script src="<?php echo base_url() . 'assets/js/DataTables/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/DataTables/extensions/ColVis/js/dataTables.colVis.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/nanoscroller/jquery.nanoscroller.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/source/App.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/source/AppNavigation.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/source/AppOffcanvas.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/source/AppCard.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/source/AppForm.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/source/AppNavSearch.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/source/AppVendor.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/core/DemoTableDynamic.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/lightgallery-all.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/lg-fullscreen.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/lg-thumbnail.min.js' ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<!--  Flatpickr  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
<script src="https://unpkg.com/flatpickr@4.2.3/dist/plugins/rangePlugin.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".lightgallery").lightGallery();
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".start").flatpickr({
			enableTime: true,
			time_24hr: true,
			minDate: 'today',
			altFormat: "d M Y H:i "
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".end").flatpickr({
			enableTime: true,
			time_24hr: true,
			minDate: 'today',
			altFormat: "d M Y H:i "
		});
	});
</script>
<script>
	$('#modal_book_event').on('hidden.bs.modal', function() {
		$(this).find("input,textarea,select").val('').end();
	});
</script>



<!-- END JAVASCRIPT -->




