<div class="site-blocks-cover bg-primary" style="background-image: url (<?php echo base_url() ?>localhost/sispak/xenia.jpeg);" data-aos="fade" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6   align-self-md-center">

                      <div class="col-lg-12">
                      <h1><?php echo $pertanyaan->gejala ?></h1>
                      
                      <?php if ($pertanyaan->ifyes > 0) { ?>
                      <a class="btn btn-success" href="<?php echo base_url('pertanyaan') ?><?php echo $pertanyaan->ifyes ?>">Ya</a>
                      <?php }else{ ?>
                      <a class="btn btn-success" href="<?php echo base_url('pertanyaan/hasil') ?><?php echo $hasil ?>">Ya</a>
                      <?php } ?>
                      <a class="btn btn-danger" href="<?php echo base_url('pertanyaan') ?> <?php echo $pertanyaan->ifno ?>">Tidak</a>
                      </div>


            
          </div>
        </div>
      </div>
    </div>    