<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
<div class="container mt-5">

    <div class="row mt-5">
        <!-- Page Title Start -->
        <div class="col-lg-12 mt-5">
            <div class="section-title  text-center">
                <h2>Pilihan Mobil</h2>
                <span class="title-line"><i class="fa fa-car"></i></span>
                <p>Berbagai mobil terbaik untuk kebutuhan anda</p>
            </div>
        </div>
        <!-- Page Title End -->
    </div>
</div>
</section>
<!--== Page Title Area End ==-->

<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
<div class="container">
	<?php echo $this->session->flashdata('pesan') ?>
    <div class="row">
        <!-- Car List Content Start -->
        <div class="col-lg-12">
            <div class="car-list-content">
                <div class="row">
                    <!-- Single Car Start -->
                    <?php foreach ($mobil as $mb ) : ?>
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><div style="background-size: contain;background-repeat: no-repeat; background-position: center;height:200px;background-image: url('<?php echo base_url('assets/upload/' . $mb->gambar) ?>');" ></div>
                          <div class="product-hover">
                            <ul>
                              <li><a href="<?php echo base_url('customer/data_mobil/detail_mobil/') . $mb->id_mobil ?>"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="product-details"><a href="<?php echo base_url('customer/data_mobil/detail_mobil/') . $mb->id_mobil ?>">
                            <h4><?php echo $mb->merk ?> (<?php echo $mb->kode_type ?>)</h4></a>
                          <p><?php echo $mb->nama_rental ?></p>
                          <div class="product-price"><i class="fa fa-tag"></i> Rp. <?php echo number_format($mb->harga,0,',','.') ?>/Hari</div>
                          <hr>
                          <div class="bookmark">
                            <ul>
                            <?php if($mb->ac == '1') { ?>
                                <li><a class="btn btn-primary btn-xs text-white">AC</a></li>
                            <?php }?>

                            <?php if($mb->supir == '1') { ?>
                                <li><a class="btn btn-primary btn-xs text-white">SUPIR</a></li>
                            <?php } ?>
                            
                            <?php if($mb->mp3_player == '1') { ?>
                                <li><a class="btn btn-primary btn-xs text-white">MP3 PLAYER</a></li>
                            <?php } ?>

                            <?php if($mb->central_lock == '1') { ?>
                                <li><a class="btn btn-primary btn-xs text-white">CENTRAL LOCK</a></li>
                            <?php } ?>
                            
                            </ul>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                    <!-- Single Car End -->
                </div>
            </div>
        </div>
    </div>
</div>
</section>