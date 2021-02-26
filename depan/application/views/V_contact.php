<!DOCTYPE html>
<html lang="en">
<?= $head; ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/contact.css">

</head>

<body>

    <div class="super_container">

        <!-- Menu -->

        <?= $menuHeader; ?>

        <!-- Home -->

       

            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                <div class="current_page">Contact</div>
                                <div class="breadcrumbs ml-auto">
                                    <ul>
                                        <li><a href="<?= base_url('') ?>">Home</a></li>
                                        <li>Contact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <?= $this->session->flashdata('msg'); ?>
        <div class="contact">
            <!-- <div class="contact_map_background"> -->

                <!-- Contact Map -->
                <!-- <div class="contact_map"> -->

                    <!-- Google Map -->
                  <!--   <div class="map">
                        <div id="google_map" class="google_map">
                            <div class="map_container">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact_form_container">
                            <div class="contact_form_title">Kritik dan Saran</div>
                            <form action="Contact/kirim_pesan" class="contact_form" id="contact_form" method="post">
                                <div class="form-grup">

                                    <?php if($this->session->userdata('masuk') == true){ ?>
                                        <input type="text" name="name" class="contact_input" value="<?php echo  $this->session->userdata('name');?>" readonly>
                                           <?php }else{?>
                                        <input type="text" class="contact_input" placeholder="Name" name="name" required="required">
                                    <?php }?>
                                </div></br>


                                <div class="form-grup">
                                    <?php if($this->session->userdata('masuk') == true){?>
                                            <input type="email" name="email" class="contact_input" value="<?php echo  $this->session->userdata('email');?>" readonly>
                                            <?php }else{?>
                                                <input type="email" class="contact_input" placeholder="E-mail" required="required" name="email">
                                            <?php }
                                            ?>
                                </div></br>

                                <input type="text" class="contact_input" placeholder="Subject" required="required" name="subject">

                                <textarea name="message" id="contact_textarea" class="contact_textarea contact_input" placeholder="Message" required="required" ></textarea>

                                <button class="button contact_button"><span>Send Message</span></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="contact_info_container">
                            <div>
                                <a href="#">
                                    <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                        <div class="logo_image">
                                            <div><img src="<?= base_url(); ?>assets/images/logog.jpg" alt=""></div>
                                        </div>
                                        <div class="logo_content">
                                            <div id="logo_text" class="logo_text logo_text_not_ie">Ghealways</div>
                                            
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="contact_info_list_container">
                                <ul class="contact_info_list">
                                    <!-- <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="contact_info_icon text-center"><img src="<?= base_url(); ?>assets/images/contact_1.png" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">Blvd Libertad, 34 m05200 Los Angeles, CA</div>
                                    </li> -->
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="contact_info_icon text-center"><img src="<?= base_url(); ?>assets/images/contact_2.png" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">0813 8172 3248</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="contact_info_icon text-center"><img src="<?= base_url(); ?>assets/images/contact_3.png" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">stefan_a@gmail.com</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact_info_pin">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <?= $foot; ?>

    </div>

    <?= $script; ?>
</body>

</html>