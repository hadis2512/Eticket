<!-- BEGIN MAIN MENU -->
<ul id="main-menu" class="gui-controls">
    <li>
        <a href="<?php echo base_url() . 'Depan/index' ?>" <?php if ($this->uri->segment(1) == "Depan/index") {
                                                                echo 'class="active"';
                                                            } ?>>
            <div class="gui-icon"><i class="fa fa-user"></i></div>
            <span class="title">Home</span>
        </a>
    </li>
    <li>
        <a href="<?php echo base_url() . 'Events/index' ?>" <?php if ($this->uri->segment(1) == "Events/index") {
                                                                echo 'class="active"';
                                                            } ?>>
            <div class="gui-icon"><i class="fa fa-money"></i></div>
            <span class="title">Events</span>
        </a>
    </li>




</ul>
<!--end .main-menu -->
<!-- END MAIN MENU -->