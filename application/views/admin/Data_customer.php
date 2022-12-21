<?php echo $this->session->flashdata('pesan') ?>

<div class="container-fluid dashboard-default-sec">
            <div class="row">
              <div class="col-xl-12 recent-order-sec">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
							<h5>Data Customer</h5>
							<a href="<?php echo base_url('admin/data_customer/tambah_customer')?>" class="btn btn-primary mb-3 text-white" align="rigth">Tambah Data</a>
						</div>
						<div class="table-responsive">
                          <table class="table" id="basic-1">                                         
                            <thead >
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Alamat</th>
                                    <th>Gender</th>
                                    <th>No. Telp</th>
                                    <th>No. KTP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($customer as $cs) :
                                ?>

                                <tr>
                                    <td><?php echo $cs->nama ?></td>
                                    <td><?php echo $cs->username ?></td>
                                    <td><?php echo $cs->alamat ?></td>
                                    <td><?php echo $cs->gender ?></td>
                                    <td><?php echo $cs->no_telp ?></td>
                                    <td><?php echo $cs->no_ktp ?></td>
                                    <td>
                                        <a onclick="if(confirm(`Apakah kamu yakin ingin menghapus data ini?`)) window.location.href=`<?php echo base_url('admin/data_customer/delete_customer/') . $cs->id_customer?>`;" class="btn btn-sm btn-danger mr-1 mb-2"><i class="fa fa-trash text-white"></i></a><br>
                                        <a href="<?php echo base_url('admin/data_customer/update_customer/') . $cs->id_customer?>" class="btn btn-sm btn-primary"><i class="fa fa-edit text-white"></i></a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>

                  </div>
    </div>
</div>
