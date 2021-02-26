<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>


	<?php $this->load->view('Scripts'); ?>


</head>

<body class="menubar-hoverable header-fixed ">

	<!-- BEGIN LOGIN SECTION -->
	<section class="section-account">

		<div class="spacer"></div>
		<div class="card contain-sm style-white">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<br />
						<span class="text-lg text-bold text-primary">Admin Ghealways</span>
						<br /><br />
						<?php echo $this->session->flashdata('msg'); ?>
						<?php echo form_open('Administrator/auth', 'class="form floating-label" accept-charset="utf-8"'); ?>
						<div class="form-group">
							<?php $id = array(
								'id' => 'id',
								'name' => 'id',
								'class' => 'form-control',
								'autocomplete' => 'off',
								'type' => 'text',
								'required' => ''
							);
							echo form_input($id); ?>
							<label for="id">Username</label>
						</div>
						<div class="form-group">
							<?php $password = array(
								'id' => 'password',
								'name' => 'password',
								'class' => 'form-control',
								'autocomplete' => 'off',
								'type' => 'password',
								'required' => ''
							);
							echo form_input($password); ?>
							<label for="id">Password</label>
						</div>
						<br />
						<div class="row">
							<div class="col-xs-7 text-right">
								<?php $button = array(
									'class' => 'btn btn-primary btn-raised',
									'type' => 'submit',
									'value' => 'Login',
								);
								echo form_input($button); ?>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>

				</div>
				<!--end .row -->
			</div>
			<!--end .card-body -->
		</div>
		<!--end .card -->
	</section>
	<!-- END LOGIN SECTION -->

</body>

</html>