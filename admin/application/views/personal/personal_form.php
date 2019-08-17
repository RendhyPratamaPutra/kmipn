<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Halaman Pengguna <small>form data pengguna</small></h1>
        </section>
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="box box-info">


                        <div class="box-header with-border">
                            <h3 class="box-title">Form Pengguna</h3>
                        </div><!-- /.box-header -->
                        
                        <!-- form start -->
                        <div class="box-body">
                            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                 <label for="varchar">USERNAME <?php echo form_error('USERNAME') ?></label>
                                 <input type="text" class="form-control" name="USERNAME" id="USERNAME" placeholder="USERNAME" value="<?php echo $USERNAME; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">NAME <?php echo form_error('NAME') ?></label>
                                <input type="text" class="form-control" name="NAMAE" id="NAMA_PERSONAL" placeholder="NAMA PERSONAL" value="<?php echo $NAMA_PERSONAL; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">GENDER<?php echo form_error('GENDER') ?></label>
                                <input type="text" class="form-control" name="GENDER" id="GENDER" placeholder="GENDER" value="<?php echo $GENDER; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">ADDRESS <?php echo form_error('ADDRESS') ?></label>
                                <input type="number" class="form-control" name="ADDRESS" id="ADDRESS" placeholder="ADDRESS" value="<?php echo $ADDRESS; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="int">CONTAC PERSON <?php echo form_error('CONTAC_PERSON') ?></label>
                                <input type="text" class="form-control" name="CONTAC_PERSON" id="CONTAC_PERSON" placeholder="CONTAC PERSON" value="<?php echo $CONTAC_PERSON; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="decimal">PASSWORD <?php echo form_error('PASSWORD') ?></label>
                                <input type="text" class="form-control" name="PASSWORD" id="PASSWORD" placeholder="PASSWORD" value="<?php echo $PASSWORD; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">POINT <?php echo form_error('POIN') ?></label>
                                <input type="text" class="form-control" name="POIN" id="POIN" placeholder="POIN" value="<?php echo $POIN; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="datetime">CREATED <?php echo form_error('CREATED') ?></label>
                                <input type="text" class="form-control" name="CREATED" id="CREATED" placeholder="CREATED" value="<?php echo $CREATED; ?>" />
                            </div>

                            <input type="hidden" name=" id_personal" value="<?php echo $id_personal; ?>" /> 
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('personal') ?>" class="btn btn-default">keluar</a>
                        </form>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


