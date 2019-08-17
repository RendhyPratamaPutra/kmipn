
>div class="content-wrapper">
        <section class="content-header">
            <h1>Halaman Pengguna <small>form data pengguna</small></h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Pengguna</h3>
                        </div>
                        
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                        <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                </div>
                                <div class="col-md-12 text-right">
                <?php echo anchor(site_url('personal/create'),'+ Tambah Pengguna', 'class="btn btn-primary"'); ?>
                                </div>                  
                            </div>
                            <br><br>
        <table class='table table-bordered table-striped' id='mytable'>
        <thead>
            <tr>
                <th>No</th>
		<th>USERNAME</th>
		<th>NAME</th>
        <th>GENDER</th>
        <th>ADDRESS</th>
		<th>CONTAC PERSON</th>
		<th>EMAIL</th>
		<th>PASSWORD</th>
		<th>POINT</th>
		<th>CREATED</th>
		<th>Action</th>
            </tr></thead><tbody><?php
            $start=0;
            foreach ($users_data as $users)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $users->USERNAME ?></td>
			<td><?php echo $users->NAME ?></td>
			<td><?php echo $users->GENDER ?></td>
			<td><?php echo $users->ADDRESS ?></td>
			<td><?php echo $users->CONTAC_PERSON ?></td>
			<td><?php echo $users->EMAIL ?></td>
			<td><?php echo $users->PASSWORD ?></td>
			<td><?php echo $users->POINT ?></td>
			<td><?php echo $users->CREATED ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('users/read/'.$users->id_personal),'Read'); 
				echo ' | '; 
				echo anchor(site_url('users/update/'.$users->id_personal),'Update'); 
				echo ' | '; 
				echo anchor(site_url('users/delete/'.$users->id_personal),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
            </tbody>
        </table>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var t = $("#mytable").dataTable({
                    "scrollX": true
                });
            });
        </script>