<?php echo $this->session->flashdata('pesan') ?>

<div class="container-fluid dashboard-default-sec">
            <div class="row">
              <div class="col-xl-12 recent-order-sec">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
							<h5>Data Mobil</h5>
							<a href="<?php echo base_url('admin/data_mobil/tambah_mobil')?>" class="btn btn-primary mb-3 text-white" align="rigth">Tambah Data</a>
						</div>
						<div class="table-responsive">
                          <table class="table" id="basic-1">                                         
                            <thead >
								<tr>
									<th class="text-center">Gambar</th>
									<th>Type</th>
									<th>Merk</th>
									<th>No. Plat</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
                            </thead>
                            <tbody>
								<?php
									$no = 1;
									foreach ($mobil as $mb) : ?>
										<tr>
											<td class="text-center">
												<img height="100px" src="<?php echo base_url() . 'assets/upload/' . $mb->gambar ?>">            
											</td>
											<td><?php echo $mb->kode_type ?></td>
											<td><?php echo $mb->merk ?></td>
											<td><?php echo $mb->no_plat ?></td>
											<td><?php 
												if($mb->status == "0"){
													echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
												} else{
													echo "<span class='badge badge-primary'> Tersedia </span>";
												}
											?></td>
											<td>
												<a href="<?php echo base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-success mb-2"><i class="fa fa-eye text-white"></i></a><br>
												<a onclick="if(confirm(`Apakah kamu yakin ingin menghapus data ini?`)) window.location.href=`<?php echo base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil ?>`;" class="btn btn-sm btn-danger mb-2"><i class="fa fa-trash text-white"></i></a><br>
												<a href="<?php echo base_url('admin/data_mobil/update_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit text-white"></i></a>
											</td>
										</tr>
								<?php endforeach; ?>

                            </tbody>
                          </table>
                        </div>

                  </div>
    </div>
</div>
