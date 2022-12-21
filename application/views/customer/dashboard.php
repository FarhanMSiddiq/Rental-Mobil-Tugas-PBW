    <div class="container-fluid faq-section" style="padding">
                <div class="row">
                <div class="col-12">
                    <div class="knowledgebase-bg"><img class="bg-img-cover bg-center" src="<?php echo base_url() ?>/assets/new_assets/images/bannerCFR.png" alt="looginpage"></div>
                    <div class="knowledgebase-search">
                    <div>
                        <h3 class="text-white">Sewa Mobil Termurah!</h3>
                        <h6 class="text-white"><i data-feather="check-circle"></i> Mobil Automatic</h6>
                        <h6 class="text-white"><i data-feather="check-circle"></i> Mobil Manual</h6>
                        <h6 class="text-white"><i data-feather="check-circle"></i> Lepas Kunci</h6>
                        <br>
                        <h5 class="text-white">Bisa ditemukan hanya di CFRStore</h5>
                    </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 box-col-6">
                    <div class="card bg-primary">
                    <div class="card-body">
                        <div class="media faq-widgets">
                        <div class="media-body">
                            <h5>Pelanggan</h5>
                            <h3><?php echo $total_customer ?> Orang</h3>
                        </div><i data-feather="users"></i>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 box-col-6">
                    <div class="card bg-primary">
                    <div class="card-body">
                        <div class="media faq-widgets">
                        <div class="media-body">
                            <h5>Mobil Tersedia</h5>
                            <h3><?php echo $total_mobil ?> Mobil</h3>
                        </div><i data-feather="aperture"></i>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 box-col-6">
                    <div class="card bg-primary">
                    <div class="card-body">
                        <div class="media faq-widgets">
                        <div class="media-body">
                            <h5>Penyedia Rental Terdaftar</h5>
                            <h3><?php echo $total_rental ?> Rental</h3>
                        </div><i data-feather="cpu"></i>
                        </div>
                    </div>
                    </div>
                </div>
    </div>

   <div class="page-body">
          <div class="container-fluid product-wrapper">
            <div class="product-grid">
              <div class="feature-products">
                <div class="row m-b-10">
                  <div class="col-md-3 col-sm-2 products-total">
                    <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                    <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="list"></i></a></div>
                    <div class="d-none-productlist filter-toggle">
                      <h6 class="mb-0">Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span></h6>
                    </div>
                    <div class="grid-options d-inline-block">
                      <ul>
                        <li><a class="product-2-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a></li>
                        <li><a class="product-3-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span></a></li>
                        <li><a class="product-4-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span><span class="line-grid line-grid-9 bg-primary"></span></a></li>
                        <li><a class="product-6-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span><span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-wrapper-grid">
                <div class="row">

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

                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>