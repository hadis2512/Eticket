<!DOCTYPE html>
<html lang="en">

<?= $head; ?>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/news.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/news_responsive.css">
</head>

<body>    
    <div class="super_container " style="border:box;">
            
        <!-- Menu -->
<?php
        foreach ($data->result_array() as $a) {
                                    $topic = $a['topic'];
                                    $author = $a['author'];
                                    $date = $a['date'];
                                    $content = $a['content'];  
                                    $picture = $a['picture'];

                                ?>
        <div class="menuheader">
            <?= $menuHeader; ?>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">                                                
                        <div class="col">
                            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                <div class="current_page"><?= $topic; ?></div>
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
            <!-- Header -->

            
            
                    
        <div class="events">
            <div class="container mt-5 mb-5 ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <!-- Event -->
                        <div class="event">                            
                                <div class="row row-lg-eq-height ">
                                    <div class="col-lg-4 col-md-4 col-sm-4 event_col">
                                        <div class="event_image_container">
                                            <div class="img-thumbnail-square">
                                                <img class="img-thumbnail" src="<?php echo 'http://localhost/Eticket/cms/'. $picture; ?>" alt="">
                                            </div>
                                            <div class="date_container">
                                                <span class="date_content d-flex flex-column align-items-center justify-content-center">
                                                    <div class="date_day"><?php echo date('d M', strtotime($date)); ?></div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 event_col">
                                        <div class="event_content">                                        
                                            <div class="event_location"><?= $author; ?></div>
                                            <div class="guest">
                                                <!-- <div class="event_speaker d-flex flex-row align-items-center justify-content-start">
                                                    <div class="event_speaker_content">
                                                        <div class="event_speaker_name fa fa-user"><?= $speaker; ?></div> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->
                                            </div>                                            
                                            <div class="event_text">
                                                <p><?= $content; ?></p>
                                            </div>
                                             
                                            <!-- <div class="event_speakers"> -->
                                                <!-- Event Speaker -->
                                                
                                                <!-- Event Speaker -->
                                                <!-- <div class="event_speaker d-flex flex-row align-items-center justify-content-start">
                                                    <div class="event_speaker_content">
                                                        <div class="event_speaker_name fa fa-user"><?= $moderator; ?></div>
                                                    </div>
                                                </div>  -->                                               
                                            <!-- </div> -->                                            
                                        </div>
                                    </div>
                                </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    </div>

    <!-- Call to action -->

    

    <!-- Footer -->

    <?= $foot; ?>

    </div>
    <?= $script; ?>
</body>

</html>