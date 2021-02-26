<!DOCTYPE html>
<html lang="en">

<?= $head; ?>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/events.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/events_responsive.css">
</head>

<body>
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
    ?>

    <div class="super_container " style="border:box;">

        <!-- Menu -->


            <!-- Header -->

            <?= $menuHeader; ?>

            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                <div class="current_page">Events</div>
                                <div class="breadcrumbs ml-auto">
                                    <ul>
                                        <li><a href="<?= base_url('') ?>">Home</a></li>
                                        <li>Events</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->session->flashdata('message');?>
        <?= $this->session->flashdata('msg');?>
        <div class="events">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <!-- Event -->
                        <div class="event">
                            <?php
                            $date = date_default_timezone_set('Asia/Jakarta');
                            $dateNow = date('Y-m-d H:i:s');
                            foreach ($data as $a) {
                                if($a['end'] > $dateNow){

                                $id = $a['id'];
                                $end = $a['end'];
                                $picture = $a['picture'];
                                $quota = $a['quota'];
                                $name = $a['name'];
                                $venue = $a['venue'];
                                $start = $a['start'];
                                $speaker = $a['speaker'];
                                $moderator = $a['moderator'];
                                $content = $a['content'];
                            ?>
                                <div class="row row-lg-eq-height ">
                                    <div class="col-lg-4 col-md-4 col-sm-4 event_col">
                                        <div class="event_image_container">
                                            <div class="img-thumbnail-square">
                                                <img class="img-thumbnail " src='<?php echo 'http://localhost/Eticket/cms/	'  . $picture; ?>' alt="">
                                            </div>
                                            <div class="date_container">
                                                <span class="date_content d-flex flex-column align-items-center justify-content-center">
                                                    <div class="date_day"><?php echo date('d M', strtotime($start)); ?></div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 event_col">
                                        <div class="event_content">
                                            <div class="event_title"><?= $name; ?></div>
                                            <div class="event_location"><?= $venue; ?></div>
                                            <div class="event_text">
                                                <p><?php echo limit_words($content, 100) . '...'; ?></p>
                                            </div>
                                            <div class="event_speakers">
                                                <!-- Event Speaker -->
                                                <!-- <div class="event_speaker d-flex flex-row align-items-center justify-content-start">
                                                    <div class="event_speaker_content">
                                                        <div class="event_speaker_name fa fa-user"><?= $speaker; ?></div>
                                                    </div>
                                                </div>
                                                Event Speaker
                                                <div class="event_speaker d-flex flex-row align-items-center justify-content-start">
                                                    <div class="event_speaker_content">
                                                        <div class="event_speaker_name fa fa-user"><?= $moderator; ?></div>
                                                    </div>
                                                </div> -->
                                                <div class="button event_button d-flex-row event_button"><a href="<?= base_url('read-event/') . $id ?>">Read more</a></div>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                        </div></br>
                    <?php }
                }
                     ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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