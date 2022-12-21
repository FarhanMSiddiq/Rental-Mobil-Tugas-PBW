<div class="container-fluid dashboard-default-sec">
            <div class="row">
              <div class="col-xl-5 box-col-12 des-xl-100"> 
                <div class="row">
                  <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-primary icons-card">                                 
                      <div class="card-body text-center">                                  
                        <div class="round-box">
                        <i class="ico icofont icofont-car-alt-1"></i>
                        </div>
                        <h3><b><?php echo $total_data['total_mobil']; ?></b></h3>
                        <p>Total Data Mobil</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-secondary icons-card">                                 
                      <div class="card-body text-center">                                  
                        <div class="round-box">
                        <i class="ico icofont icofont-users-social"></i>
                        </div>
                        <h3><b><?php echo $total_data['total_customer']; ?></b></h3>
                        <p>Total Data Customer</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-primary icons-card">                                 
                      <div class="card-body text-center">                                  
                        <div class="round-box">
                        <i class="ico icofont icofont-files"></i>
                        </div>
                        <h3><b><?php echo $total_data['total_transaksi']; ?></b></h3>
                        <p>Total Data Rental</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-primary icons-card">                                 
                      <div class="card-body text-center">                                  
                        <div class="round-box">
                        <i class="ico icofont icofont-deal"></i>
                        </div>
                        <h3><b><?php echo $total_data['total_transaksi_selesai']; ?></b></h3>
                        <p>Total Data Rental Selesai</p>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <div class="col-xl-12 recent-order-sec">
                    <div class="card">
                      <div class="card-body">
                        <h5>Transaksi Terbaru</h5>
                        <div class="table-responsive">
                          <table class="table table-bordernone" id="basic-1">                                         
                            <thead class="bg-success">
                              <tr>                                        
                                <th class="text-white">ID Rental</th>
                                <th class="text-white">Nama Customer</th>
                                <th class="text-white">Keterangan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($transaksi as $tr) : ?>
                              <tr>
                                <td>
                                  Rental #<?php echo $tr->id_rental ?>
                                </td>
                                <td>
                                  <?php echo $tr->nama ?>
                                </td>
                                <td>
                                  <span class="text-small text-muted text-bold">Rental mobil <?php echo $tr->merk ?> dari tanggal <?php echo date('d/m/Y', strtotime($tr->tanggal_rental ))?> sampai <?php echo date('d/m/Y', strtotime($tr->tanggal_kembali ))?>.</span><br>

                                 <?php 
                                  if(empty($tr->bukti_pembayaran)) { ?>

                                    <span class="text-small text-muted text-bold">Customer belum membayar</span>

                                  <?php } else { ?>

                                    <span class="text-small text-muted text-bold">Customer telah membayar</span>

                                  <?php } ?>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>

                        <div class="text-center pt-1 pb-1">
                          <a href="<?php echo base_url('admin/transaksi') ?>" class="btn btn-primary btn-lg btn-round text-white">
                            Lihat Semua
                          </a>
                        </div>
                  </div>
    </div>
</div>
