    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <div class="logo menu_logo">
                <a href="<?= base_url('Home');?>">
                    <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                        <div class="logo_image"><div><img src="<?= base_url('assets');?>/images/ghealways.png" alt=""></div></div>
                        <div class="logo_content">
                            <div class="logo_text logo_text_not_ie">Ghealways</div>                        
                        </div>
                    </div>
                </a>
            </div>
            <ul>
                <li class="menu_item" <?php if ($this->uri->segment(1) == 'Home') {
                                                echo 'class="active"';
                                            } ?>><a href="<?= base_url('')?>">Home</a></li>                
                <li class="menu_item" <?php if ($this->uri->segment(1) == 'Events') {
                                                echo 'class="active"';
                                            } ?>><a href="<?= base_url('Events')?>">Events</a></li>
                <li class="menu_item" <?php if ($this->uri->segment(1) == 'News') {
                                                echo 'class="active"';
                                            } ?>><a href="<?= base_url('News')?>">News</a></li>
                <li class="menu_item" <?php if ($this->uri->segment(1) == 'Contact') {
                                                echo 'class="active"';
                                            } ?>><a href="<?= base_url('Contact')?>">Contact</a></li>
            </ul>
        </div>
        <div class="menu_social">
            <div class="menu_social_title">Follow uf on Social Media</div>
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="home">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url(); ?>assets/images/events.jpg" data-speed="0.8">               
    </div>

    <header class="header" id="header">
    <div class="header_top-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                        <div <?php if ($this->uri->segment(1) == ' ') {
                                    echo 'class="active"';
                                } ?>>
                            <a href="<?= base_url('Home') ?>">
                                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                    <div class="logo_image">
                                        <div><img src="<?= base_url(); ?>assets/images/ghealways.png" alt=""></div>
                                    </div>
                                    <div class="logo_content">
                                        <div id="logo_text" class="logo_text logo_text_not_ie" style="text-decoration-color: #ff1493;">Ghealways</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="header_social ml-auto">
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_nav" id="header_nav_pin">
        <div class="header_nav_inner">
            <div class="header_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                <nav class="main_nav">
                                    <ul>
                                        <li <?php if ($this->uri->segment(1) == '') {
                                                echo 'class="active"';
                                            } ?>><a href="<?= base_url(''); ?>">Home</a></li>

                                        <li <?php if ($this->uri->segment(1) == 'Events') {
                                                echo 'class="active"';
                                            } ?>><a href="<?= base_url('Events') ?>">Events</a></li>

                                        <li <?php if ($this->uri->segment(1) == 'News') {
                                                echo 'class="active"';
                                            } ?>><a href="<?= base_url('News') ?>">News</a></li>

                                        <li <?php if ($this->uri->segment(1) == 'Contact') {
                                                echo 'class="active"';
                                            } ?>><a href="<?= base_url('Contact') ?>">Contact</a></li>
                                    </ul>
                                </nav>
                                <div class="header_extra ml-auto">
                                    
                                    <ul class="header-nav header-nav-profile">
                                        
                                    <?php
                                        if($this->session->userdata('masuk') == true){?>
                                            <ul class="header-nav header-nav-profile">
                                                <li class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                                                    <span class="profile-info">
                                                    <?php echo  $this->session->userdata('name'); ?>
                                                    </span>
                                                </a>
                                                <ul class="dropdown-menu animation-dock">
                                                    <li><a href="<?php echo base_url() . 'Login/logout' ?>"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                                                </ul>                    
                                                </li>                
                                            </ul>
                                        <?php }else{?>
                                            <div class="button header_button"><a href="<?= base_url("Login") ?>">Login</a></div>
                                        <?php };?>
                                        

                                            
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" id="search_container_form" class="search_container_form">
                                    <input type="text" class="search_container_input" placeholder="Search" required="required">
                                    <button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

