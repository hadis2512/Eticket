<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit User</title>

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
                    <h2><span class="fa fa-Pencil"></span> Edit user</h2>
                </div>
                <?php echo $this->session->flashdata('msg'); ?>
            </section>

            <?php
            $no = 1;
            for ($i = 0; $i < count($data['id']); $i++) {
                $id = $data['id'][$i];
                $password = $data['password'][$i];
                $name = $data['name'][$i];
                $access = $data['access'][$i];

            ?>
                ?>
                <div class="container" id="<? echo $id; ?>" style="width: 82%">
                    <div class="row ">



                        <div class="card o-hidden border-0 shadow-lg my-6">
                            <div class="card-body p-1">

                                <div class="row">
                                    <?php echo form_open('User/update_user', 'class="form-horizontal"', 'role="form"', 'enctype="multipart/form-data"'); ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="regular13" class="col-sm-2 control-label">ID</label>
                                            <div class="col-sm-9">
                                                <?php $kode = array(
                                                    'id' => 'kode',
                                                    'name' => 'kode',
                                                    'value' => $id,
                                                    'type' => 'hidden'
                                                );
                                                echo form_input($kode); ?>
                                                <?php $id = array(
                                                    'id' => 'id',
                                                    'name' => 'id',
                                                    'class' => 'form-control',
                                                    'value' => $id,
                                                    'autocomplete' => 'off',
                                                    'type' => 'text',
                                                    'required' => '',
                                                    'readonly' => ''
                                                );
                                                echo form_input($id); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password13" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-9">
                                                <?php $password = array(
                                                    'id' => 'password',
                                                    'name' => 'password',
                                                    'class' => 'form-control',
                                                    'autocomplete' => 'off',
                                                    'type' => 'password'
                                                );
                                                echo form_input($password); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password13" class="col-sm-2 control-label">Ulangi Password</label>
                                            <div class="col-sm-9">
                                                <?php $password2 = array(
                                                    'id' => 'password2',
                                                    'name' => 'password2',
                                                    'class' => 'form-control',
                                                    'autocomplete' => 'off',
                                                    'type' => 'password'
                                                );
                                                echo form_input($password2); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="regular13" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-9">
                                                <?php $name = array(
                                                    'id' => 'name',
                                                    'name' => 'name',
                                                    'class' => 'form-control',
                                                    'value' => $name,
                                                    'autocomplete' => 'off',
                                                    'type' => 'text',
                                                    'required' => ''
                                                );
                                                echo form_input($name); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="regular13" class="col-sm-2 control-label">Access</label>
                                            <div class="col-sm-5">
                                                <?php $options = array(
                                                    '0' => 'User',
                                                    '1' => 'Admin',
                                                );
                                                echo form_dropdown('type', $options, $access, 'id="select13", class="form-control"');
                                                ?>
                                            </div>
                                            <div class="text-center">
                                                <a href="<?= base_url('user') ?>">
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