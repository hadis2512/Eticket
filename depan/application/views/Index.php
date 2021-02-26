    <div class="super_container">
        <?php echo $head; ?>

        <!-- Menu -->
        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>
                <div class="logo menu_logo">
                    <a href="#">
                        <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                            <div class="logo_image">
                                <div><img src="<?= base_url('assets/') ?>images/logo.png" alt=""></div>
                            </div>
                            <div class="logo_content">
                                <div class="logo_text logo_text_not_ie">The Conference</div>
                                <div class="logo_sub">August 25, 2018 - Miami Marina Bay</div>
                            </div>
                        </div>
                    </a>
                </div>
                <ul>
                    <li class="menu_item"><a href="index.html">Home</a></li>
                    <li class="menu_item"><a href="#">About us</a></li>
                    <li class="menu_item"><a href="#">Speakers</a></li>
                    <li class="menu_item"><a href="#">Tickets</a></li>
                    <li class="menu_item"><a href="news.html">News</a></li>
                    <li class="menu_item"><a href="contact.html">Contact</a></li>
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

        <!-- Home -->

        <div class="home">
            <!-- <div class="home_background" style="background-image: url(images/index.jpg)"></div> -->
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/') ?>images/index.jpg" data-speed="0.8"></div>

            <!-- Header -->

            <header class="header" id="header">
                <div>
                    <div class="header_top">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                        <div>
                                            <a href="#">
                                                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                                    <div class="logo_image">
                                                        <div><img src="<?= base_url('assets/') ?>images/logo.png" alt=""></div>
                                                    </div>
                                                    <div class="logo_content">
                                                        <div id="logo_text" class="logo_text logo_text_not_ie">The Conference</div>
                                                        <div class="logo_sub">August 25, 2018 - Miami Marina Bay</div>
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
                                                        <li class="active"><a href="index.html">Home</a></li>
                                                        <li><a href="#">About Us</a></li>
                                                        <li><a href="speakers.html">Speakers</a></li>
                                                        <li><a href="events.html">Events</a></li>
                                                        <li><a href="news.html">News</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                    </ul>
                                                </nav>
                                                <div class="header_extra ml-auto">
                                                    <div class="header_search"><i class="fa fa-search" aria-hidden="true"></i></div>
                                                    <div class="button header_button"><a href="#">Buy Tickets Now!</a></div>
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
                </div>
            </header>

            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <?php
                            foreach ($data as $a) {
                                $id = $a['id'];
                                $name = $a['name'];
                                $venue = $a['venue'];
                                $start = $a['start'];
                                $end = $a['end'];
                                $quota = $a['quota'];
                                $picture = $a['picture'];
                            ?>
                                <div class="home_content">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">

                                            <!-- <div class="home_date">
                                        </div> -->
                                            <!-- <div class="home_title">2018 Public Policy Conference</div>
                                            <div class="home_location">Miami Marina Bay, FL</div>
                                            <div class="home_text">Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</div>
                                            <div class="home_buttons">
                                                <div class="button home_button"><a href="#">Buy Tickets Now!</a></div>
                                                <div class="button home_button"><a href="#">Find out more</a></div> -->
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                        </div>
                    <?php
                            }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->



    <!-- Pricing -->


    <!-- Calendar -->


    <!-- Call to action -->

    <!-- Footer -->

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
                                            <div><img src="<?= base_url('assets/') ?>images/logo.png" alt=""></div>
                                        </div>
                                        <div class="logo_content">
                                            <div id="logo_text" class="logo_text logo_text_not_ie">The Conference</div>
                                            <div class="logo_sub">August 25, 2018 - Miami Marina Bay</div>
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
                    <div class="col-lg-3 footer_col">
                        <div class="footer_links">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Speakers</a></li>
                                <li><a href="#">Event Dates</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Calendar</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_col">
                        <div class="footer_links">
                            <ul>
                                <li><a href="#">Logistics</a></li>
                                <li><a href="#">Our Partners</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Price Plans</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-2 footer_col">
                        <div class="footer_links">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Speakers</a></li>
                                <li><a href="#">Event Dates</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Calendar</a></li>
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
                            <div class="footer_social">
                                <div class="footer_social_title">Follow us on Social Media</div>
                                <ul class="footer_social_list">
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="footer_extra_right ml-lg-auto text-lg-right">
                                <div class="footer_extra_links">
                                    <ul>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                                <div class="copyright">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <?= $foot; ?>