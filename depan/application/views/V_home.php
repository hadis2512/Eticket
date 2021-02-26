<?= $head; ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/responsive.css">
</head>

<body>
    <?php function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    } ?>
    <div class="super_container">
        <!-- Menu -->

       <?= $menuHeader;?>

        <!-- Home -->    
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <?php
                        foreach ($data->result_array() as $a) {
                            $id = $a['id'];
                            $end = $a['end'];
                            $picture = $a['picture'];
                            $quota = $a['quota'];
                            $name = $a['name'];
                            $venue = $a['venue'];
                            $start = $a['start'];
                            $content = $a['content'];
                        ?>
                            <div class="col">
                                <div class="home_content">
                                    <div class="home_date"><?php echo date('d F Y', strtotime($start)); ?></div>
                                    <div class="home_title"><?= $name; ?></div>
                                    <div class="home_location"><?= $venue; ?></div>
                                    <div class="home_text"><?= limit_words($content, 50) . '....'; ?></div>
                                    <div class="home_buttons">
                                        <div class="button home_button"><a href="<?= base_url('read-event/') . $id ?>">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Call to action -->

        <div class="cta">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url(); ?>assets/images/cta_1.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cta_content text-center">
                            <div class="cta_title">Explore your Events now!</div>
                            <div class="button cta_button"><a href="<?= base_url("Events")?>">Find out more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <?= $foot; ?>

    </div>
    <?= $script; ?>