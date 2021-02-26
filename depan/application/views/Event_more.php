<div class="form-group">
                                        <label for="regular13" class="col-sm-3 control-label">ID</label>
                                        <div class="col-sm-8">
                                            <?php $id = array('id' =>'id',
                                                    'name'=> 'id',
                                                    'class'=>'form-control',
                                                    'autocomplete'=>'on',
                                                    'type'=>'text');
                                                    // 'required'=>'');
                                            echo form_input($id);?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="regular13" class="col-sm-3 control-label">ID Transaksi</label>
                                        <div class="col-sm-8">
                                            <?php $id_trans = array('id' =>'id_trans',
                                                    'name'=> 'id_trans',
                                                    'class'=>'form-control',
                                                    'autocomplete'=>'off',
                                                    'type'=>'text',
                                                    'required'=>'');
                                            echo form_input($id_trans);?>
                                        </div>
                                    </div>