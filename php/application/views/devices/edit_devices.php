 <div class="content-wrapper">
 	<div class="container-fluid">
 		<nav aria-label="breadcrumb" class="main-breadcrumb">
 			<ol class="breadcrumb">
 				<li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
 				<li class="breadcrumb-item active"><a href="<?= base_url('device_controller') ?>">Data Device</a></li>
 				<li class="breadcrumb-item active" aria-current="">Update Device</li>
 			</ol>
 		</nav>
 		<div class="card shadow mb-4">
 			<div class="card-header py-3">

 			</div>
 			<div class="card-body">
 				<div class="row">
 					<div class="container-fluid">
 						<h6 class="m-0 font-weight-bold ">Update Device</h6>
 					</div>
 					<div class="card-body">
 						<div class="row">
 							<div class="container-fluid">
 								<?= validation_errors() ?>
 								<form action="<?= base_url('device_controller/proses_edit_devices/') . $data->id_device ?>"
 									method="POST" enctype="multipart/form-data">
 									<table class="table">
 										<tr>
 											<td width=20%>Name Device</td>
 											<td><input type="text" name="name" class="form-control" required
 													placeholder="Nama Device" value="<?= $data->name ?>"></td>
 										</tr>
 										<tr>
 											<td width=20%>IP Device</td>
 											<td><input type="text" name="ip" class="form-control" required
 													placeholder="IP Device" value="<?= $data->ip ?>"></td>
 										</tr>
 										<tr>
 											<td>
 												<button class="btn btn-success">Update</button>
 											</td>
 											<td></td>
 										</tr>
 									</table>
 								</form>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
