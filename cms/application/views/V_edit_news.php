<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Event</title>

    <?php $this->load->view('Scripts'); ?>


</head>

<body class="menubar-hoverable header-fixed">

    <?php
    $this->load->view('V_header');
    ?>

    <!-- BEGIN BASE-->
    <div id="base">

        <!-- BEGIN OFFCANVAS LEFT -->
        <div class="offcanvas">

        </div>

        <div id="content">
            <section>
                <div class="section-header">
                    <h2><span class="fa fa-Pencil"></span> Edit News</h2>
                </div>
                <?php echo $this->session->flashdata('msg'); ?>
            </section>

            <?php


            
        foreach ($data->result_array() as $a) {
            $id = $a['id'];
            $topic = $a['topic'];
            $author = $a['author'];
            $date = $a['date'];
            $content = $a['content'];                       
            $picture = $a['picture'];                        

            ?>
                <div class="container" style="width: 82%">

                    <!-- Outer Row -->
                    <div class="row ">



                        <div class="card o-hidden border-0 shadow-lg my-6">
                            <div class="card-body p-1">

                                <div class="row">
                                    <?php echo form_open('News/update_news', 'class="form-horizontal" enctype="multipart/form-data"'); ?>
                                    <form>

                                        <div class="form-group">
                                            <label for="regular13" class="col-sm-2 control-label">Topic</label>
                                            <div class="col-sm-9">
                                                <?php $id = array(
                                                    'id' => 'id',
                                                    'name' => 'id',
                                                    'value' => $id,
                                                    'class' => 'form-control',
                                                    'autocomplete' => 'off',
                                                    'type' => 'hidden',
                                                    'required' => ''
                                                );
                                                echo form_input($id); ?>
                                                <?php $name = array(
                                                    'id' => 'topic',
                                                    'name' => 'topic',
                                                    'value' => $topic,
                                                    'class' => 'form-control',
                                                    'autocomplete' => 'off',
                                                    'type' => 'text',
                                                    'required' => ''
                                                );
                                                echo form_input($name); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="textarea13" class="col-sm-2 control-label">author</label>
                                            <div class="col-sm-9">
                                                <?php $author = array(
                                                    'id' => 'author',
                                                    'name' => 'author',
                                                    'value' => $author,
                                                    'class' => 'form-control',
                                                    'autocomplete' => 'off',
                                                    'type' => 'textarea',
                                                    'rows' => '3',
                                                    'required' => ''
                                                );
                                                echo form_textarea($author); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="regular13" class="col-sm-2 control-label">Content</label>
                                            <div class="col-sm-9">
                                                <?php $content = array(
                                                    'id' => 'test',
                                                    'name' => 'content',
                                                    'class' => 'form-control ckeditor',
                                                    'autocomplete' => 'off',
                                                    'value' => $content,
                                                    'type' => 'text',
                                                    'required' => ''
                                                );
                                                echo form_textarea($content); ?>
                                            </div>
                                        </div>

                                            </div>
                                        <div class="form-group">
                                            <label for="regular13" class="col-sm-2 control-label">Picture</label>
                                            <div class="col-sm-9">
                                                <?php $picture = array(
                                                    'name' => 'filefoto',
                                                    'class' => 'form-control',
                                                    'autocomplete' => 'off',
                                                    'value' => $picture,
                                                    'type' => 'file'
                                                );
                                                echo form_input($picture); ?>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="text-center">
                                        <a href="<?= base_url('event') ?>">
                                            <?php $button1 = array(
                                                'class' => 'btn btn-danger btn-md',
                                                'value' => 'Back',
                                                'role' => 'button',
                                                'aria-pressed' => 'true'
                                            );
                                            echo form_input($button1); ?>
                                        </a>
                                        <?php $button2 = array(
                                            'class' => 'btn btn-success btn-md ',
                                            'value' => 'Save',
                                            'type' => 'submit',
                                            'style' => 'width:17%;',
                                            'aria-pressed' => 'true'
                                        );
                                        echo form_input($button2);
                                        echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div id="menubar" class="menubar-inverse ">
                <div class="menubar-fixed-panel">
                    <div>
                        <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>

                </div>
                <div class="menubar-scroll-panel">

                    <!-- BEGIN MAIN MENU -->
                    <?php $this->load->view('Menubar'); ?>

                    <?php $this->load->view('V_footer'); ?>
                </div>
                <!--end .menubar-scroll-panel-->
            </div>