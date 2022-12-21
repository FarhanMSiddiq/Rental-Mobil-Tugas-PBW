<?php echo $this->session->flashdata('pesan') ?>

<div class="container-fluid dashboard-default-sec">
            <div class="row">
              <div class="col-xl-12 recent-order-sec">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
							<h5>Data Type Mobil</h5>
							<a href="<?php echo base_url('admin/data_type/tambah_type')?>" class="btn btn-primary mb-3 text-white" align="rigth">Tambah Data</a>
						</div>
						<div class="table-responsive">
                          <table class="table" id="basic-1">                                         
						 	<thead>
								<tr>
									<th>Kode Type</th>
									<th>Nama Type</th>
									<th width="180px">Aksi</th>
								</tr>
							</thead>
                            <tbody>
								<?php 
								$no = 1;
								foreach ($type as $tp ) : ?>

									<tr>
										<td><?php echo $tp->kode_type ?></td>
										<td><?php echo $tp->nama_type ?></td>
										<td>
											<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_type/update_type/' . $tp->id_type) ?>"><i class="fa fa-edit text-white"></i></a>
											<a class="btn btn-sm btn-danger" onclick="if(confirm(`Apakah kamu yakin ingin menghapus data ini?`)) window.location.href=`<?php echo base_url('admin/data_type/delete_type/' . $tp->id_type) ?>`;"><i class="fa fa-trash text-white"></i></a>
										</td>
									</tr>

								<?php endforeach; ?>
							</tbody>
                          </table>
                        </div>

                  </div>
    </div>
</div>
