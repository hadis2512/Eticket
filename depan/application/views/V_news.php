<!DOCTYPE html>
<html lang="en">
<?= $head; ?>
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/styles/news.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/styles/news_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Menu -->

        <?= $menuHeader; ?>

        <!-- Home -->
<!-- 
        <div class="home">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url(); ?>assets/images/news.jpg" data-speed="0.8"></div>

             Header -->
        


            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                <div class="current_page">News</div>
                                <div class="breadcrumbs ml-auto">
                                    <ul>
                                        <li><a href="<?= base_url('') ?>">Home</a></li>
                                        <li>News</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- News -->

        <div class="news">
            <?php

                                foreach ($data as $a) {
                                    $id     =$a['id'];
                                    $topic = $a['topic'];
                                    $author = $a['author'];
                                    $date = $a['date'];
                                    $content = $a['content'];  
                                    $picture = $a['picture'];

                                ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="news_items">

                            <!-- News Item -->
                            <div class="news_item">
                                <div class="news_image_container col-lg-8">
                                    <div class="news_image">
                                        <div class="img-thumbnail-square" >
                                            <img class="img-thumbnail-square" src="<?php echo 'http://localhost/Eticket/cms/'.$picture;?>" alt="">
                                        </div>
                                    </div>
                                    <div class="date_container">
                                        <a href="#">
                                            <span class="date_content d-flex flex-column align-items-center justify-content-center">
                                                <div class="date_day"><?= date('d M Y ', strtotime($date));?></div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="news_body">
                                    <div class="news_title"><a href="#"><?= $topic;?></a></div>
                                    <div class="news_info">
                                        <ul>
                                            <!-- News Author -->
                                            <li>
                                                <span>by <a href="#" class="font-weight-bold"><?= $author;?></a></span>
                                            </li>
                                            <!-- Tags -->
                                            <!-- <li><span>in <a href="events.html">Events</a></span></li>
                                            Comments -->
                                            <!-- <li><a href="#">3 Comments</a></li> --> 
                                        </ul>
                                    </div>
                                    <div class="news_text">
                                        <p><?= $content;?></p>
                                    </div>
                                    <div class="button news_button"><a href="<?= base_url('read-news/') . $id ?>">Read More</a></div>
                                </div>
                            </div>

                            <!-- News Item -->
                            

                    <!-- Sidebar -->
                    
                </div>
            </div>
        <?php }?>
        </div>
<div class="row">
        <div class="col">
            <div class="pagination">
                <!-- <ul>
                    <li class="active"><a href="#">01.</a></li>
                    <li><a href="#">02.</a></li>
                    <li><a href="#">03.</a></li>
                </ul> -->
            </div>
        </div>
    </div>
        <!-- Call to action -->

        

        <!-- Footer -->

        <?= $foot; ?>

    </div>

    <?= $script; ?>
</body>

</html>

