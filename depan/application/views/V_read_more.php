<!DOCTYPE html>
<html lang="en">

<?= $head; ?>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/events.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/events_responsive.css">
</head>

<body>    
    <div class="super_container " style="border:box;">
            
        <!-- Menu -->
<?php
        foreach ($data->result_array() as $a) {
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
        <div class="menuheader">
            <?= $menuHeader; ?>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">                                                
                        <div class="col">
                            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                <div class="current_page"><?= $name; ?></div>
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
            <!-- Header -->

            
            
                    
        <div class="events">
            <div class="container">
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
                                                    <div class="date_day"><?php echo date('d M', strtotime($start)); ?></div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 event_col">
                                        <div class="event_content">                                        
                                            <div class="event_location"><?= $venue; ?></div>
                                                                                       
                                            <div class="event_text">
                                                <p><?= $content; ?></p>
                                            </div>
                                             

                                                <?php if($quota == 0){ ?>
                                                <div class="book_now d-flex flex-row align-items-center justify-content-start"><p><a class="btn btn-primary text-light"><span ></span> Sold out!</a></p>    
                                                <?php 
                                            }else{?>  

                                                <div class="book_now d-flex flex-row align-items-center justify-content-start"><p><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_book_event"><span ></span> Book Now</a></p>
                                               <?php }?>
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
        <div class="modal fade" id="modal_book_event" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">

                <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                    <h3 class="modal-title" id="myModalLabel">Book Now</h3>
                </div>
                <?php echo form_open('transaksi/beli_tiket','class="form-horizontal"','enctype="multipart/form-data"');
                if ($this->session->userdata('masuk') == true) {
                ?>
                    <div class="modal-body">
                                    <div class="form-group">
                                        <input type="hidden" name="id_event" value="<?=$id;?>">
                                        <label for="reguler13" class="col-sm-3 control-label" name="event_id">Event</label>
                                        <div class="col-sm-8">
                                            <?php 
                                            echo $name;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="regular13" class="col-sm-2 control-label">Jumlah</label>
                                        <div class="col-sm-9">
                                            <?php $jumlah = array(
                                                'id' => 'jumlah',
                                                'name' => 'jumlah',
                                                'class' => 'form-control',
                                                'autocomplete' => 'off',
                                                'min' => '1',
                                                'max' => $quota,
                                                'type' => 'number',
                                                'required' => ''
                                            );
                                            echo form_input($jumlah); ?>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <!-- <input type="text" name="id_member" value=""> -->
                                        <label for="email13" class="col-sm-2 control-label" name="member_id">Email</label>
                                        <div class="col-sm-9">                                            
                                            <?php if($this->session->userdata('masuk') == true){
                                                 echo  $this->session->userdata('email');
                                            }
                                            ?>
                                        </div>
                                    </div>   
                                    
                    </div>
                    <div class="modal-footer">
                        <?php $button1 = array(
                            'class'=>'btn',
                            'value'=>'Close',
                            'data-dismiss'=>'modal',
                            'type'=>'button',
                            );
                        echo form_input($button1);?>
                        <?php $button2 = array(
                            'class'=>'btn btn-primary',
                            'value'=>'Save',
                            'type'=>'submit',
                            );
                        echo form_input($button2);
                    }else{?>
                        <div class="modal-body">
                                    <div class="form-group">
                                        <input type="hidden" name="id_event" value="<?=$id;?>">
                                        <label for="reguler13" class="col-sm-3 control-label" name="event_id">Event</label>
                                        <div class="col-sm-8">
                                            <?php 
                                            echo $name;
                                            ?>
                                        </div>
                                    </div>                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="<?= base_url('Login')?>" class="btn btn-block btn-primary">Login</a>
                                                <a href="<?= base_url('Register')?>" class="btn btn-block btn-danger">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                        
                    <div class="modal-footer">
                        <?php $button1 = array(
                            'class'=>'btn',
                            'value'=>'Close',
                            'data-dismiss'=>'modal',
                            'type'=>'button',
                            );
                        echo form_input($button1);?>
                    <?php }
                        echo form_close();?>
                        <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button> -->
                        <!-- <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span> Save</button> -->
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