<footer class="footer">
    <div class="footer_content">
        <div class="container">
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_about">
                        <div>
                            <a href="#">
                                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                    <div class="logo_image">
                                        <div><img src="<?= base_url('assets');?>/images/ghealways.png" alt=""></div>
                                    </div>
                                    <div class="logo_content">
                                        <div id="logo_text" class="logo_text logo_text_not_ie">Ghealways</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="footer_about_text">
                            <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->


                <!-- Footer Column -->
                <div class="col-lg-8 footer_col">
                    <div class="footer_links">
                        <ul class="d-flex justify-content-between align-items-center">
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
                </div>

            </div>
        </div>
    </div>
    <div class="footer_extra">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                        <!-- <div class="footer_social">
                            <div class="footer_social_title">Follow us on Social Media</div>
                            <ul class="footer_social_list">
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div> -->
                        <div class="footer_extra_right ml-lg-auto text-lg-right">
                            
                            <div class="copyright">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | <i aria-hidden="true">Ghealways</i> 
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>