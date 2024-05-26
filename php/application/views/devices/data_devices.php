  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<!-- Page Heading -->
  			<div class="card shadow mb-4">
  				<div class="card-header py-3">
  					<h6 class="m-0 font-weight-bold ">Data Devices<Section></Section>
  					</h6>
  				</div>
  				<div class="card-body">
  					<div class="table-responsive">
  						<div class="container">
  							<a href="<?= base_url('device_controller/add_device') ?>" class="btn btn-success"><i
  									class="fas fa-plus-circle"></i> Add Davice</a>
  							<hr>
  						</div>
  						<?php

                if ($this->session->flashdata('pesan') == "hapus") { ?>
  						<div class="alert alert-danger" role="alert">Data Deleted Successfully !
  						</div>
  						<?php   } elseif ($this->session->flashdata('pesan') == "buat") { ?>
  						<div class="alert alert-success" role="alert">
  							Data Added Successfully !
  						</div>
  						<?php    } elseif ($this->session->flashdata('pesan') == "ubah") { ?>
  						<div class="alert alert-warning" role="alert">
  						Data Changed Successfully !
  						</div>
  						<?php    } ?>
  						<table class="table table-bordered" id="example1" width="100%" cellspacing="0">
  							<thead>
  								<tr>
  									<th>No</th>
  									<th>Name Device</th>
  									<th>IP</th>
  									<th>Aksi</th>
  								</tr>
  							</thead>
  							<tbody>
  								<?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
  								<tr>
  									<td><?= $nomor++; ?></td>
  									<td><?= $x->name; ?></td>
  									<td><?= $x->ip; ?></td>
  									<td align="center">
  										<a href="<?= base_url('device_controller/delete_devices/') . $x->id_device; ?>"
  											class="btn btn-danger"> <i class="fas fa-trash"></i></a>
  										<a href="<?= base_url('device_controller/edit_devices/') . $x->id_device; ?>"
  											class="btn btn-primary"><i class="fas fa-edit"></i></a>
  									</td>
  								</tr>
  								<?php   } ?>
  							</tbody>
  						</table>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</div>

  <?php if ($this->session->flashdata('flash_message')) : ?>
  <script>
  	swal({
  		title: "Done",
  		text: "<?php echo $this->session->flashdata('flash_message'); ?>",
  		timer: 1500,
  		showConfirmButton: false,
  		type: 'success'
  	});

  </script>
  <?php endif; ?>
