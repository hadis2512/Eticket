<!-- BEGIN MAIN MENU -->
<ul id="main-menu" class="gui-controls">

	<!-- BEGIN DASHBOARD -->
	<li>

		<a href="<?php echo base_url() . 'beranda' ?>" <?php if ($this->uri->segment(1) == "beranda") {
															echo 'class="active"';
														} ?>>
			<div class="gui-icon"><i class="fa fa-home"></i></div>
			<span class="title">Dashboard</span>
		</a>
	</li>
	<!--end /menu-li -->
	<!-- END DASHBOARD -->
	<?php
	if ($this->session->userdata('access') == '1') {

	?>
		<li>
			<a href="<?php echo base_url() . 'user' ?>" <?php if ($this->uri->segment(1) == "user") {
															echo 'class="active"';
														} ?>>
				<div class="gui-icon"><i class="fa fa-user"></i></div>
				<span class="title">Akun Admin</span>
			</a>
		</li>
	<?php }
	?>
	<li>
		<a href="<?php echo base_url() . 'member' ?>" <?php if ($this->uri->segment(1) == "member") {
															echo 'class="active"';
														} ?>>
			<div class="gui-icon"><i class="fa fa-money"></i></div>
			<span class="title">Akun Pengguna</span>
		</a>
	</li>
	<li>
		<a href="<?php echo base_url() . 'event' ?>" <?php if ($this->uri->segment(1) == "event") {
															echo 'class="active"';
														} ?>>
			<div class="gui-icon"><i class="fa fa-calendar"></i></div>
			<span class="title">Event</span>
		</a>
	</li>

	<li>
		<a href="<?php echo base_url() . 'ticket' ?>" <?php if ($this->uri->segment(1) == "ticket") {
															echo 'class="active"';
														} ?>>
			<div class="gui-icon"><i class="fa fa-ticket"></i></div>
			<span class="title">Ticket</span>
		</a>
	</li>

	<li>
		<a href="<?php echo base_url() . 'kritik_saran' ?>" <?php if ($this->uri->segment(1) == "kritik_saran") {
															echo 'class="active"';
														} ?>>
			<div class="gui-icon"><i class="fa fa-comments"></i></div>
			<span class="title">Kritik & Saran</span>
		</a>
	</li>

	<li>
		<a href="<?php echo base_url() . 'news' ?>" <?php if ($this->uri->segment(1) == "news") {
															echo 'class="active"';
														} ?>>
			<div class="gui-icon"><i class="fa fa-newspaper-o"></i></div>
			<span class="title">News</span>
		</a>
	</li>


</ul>
<!--end .main-menu -->
<!-- END MAIN MENU -->