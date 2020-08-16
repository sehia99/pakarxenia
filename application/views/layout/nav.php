<body class="site-blocks-cover overlay login-page" style="background-image: url('<?php echo base_url(); ?>assets/ceper4.jpg');
background-position: center;
  background-repeat: no-repeat;">


      <div class="container">
        <div class="row">
          <div class="col-md-12 ml-auto text-white align-right align-self-center">
           <center> <h1>Selamat datang</h1></center>
            <center><h3>Sistem Pakar Diagnosis Kerusakan Xenia</h3></center>
          <center>
                  
            <?php if($this->session->userdata('username')){ ?>
                  <a class="mb-4"><a href="<?php base_url() ?>login/logout" class="btn btn-warning mr-2 mb-2">Logout</a>
                  <a class="mb-4"><a href="<?php base_url() ?> konsultasi" class="btn btn-info mr-2 mb-2">KONSULTASI</a>
                <?php }else{ ?>
                  <a class="mb-4"><a href="<?php base_url() ?>login" class="btn btn-warning mr-2 mb-2">Login</a>
                  <a class="mb-4"><a href="<?php base_url() ?> daftar" class="btn btn-info mr-2 mb-2">DAFTAR</a>
                  
                <?php } ?>
                </center>

          </div>
            
        </div>
      </div>
    </div>  

   
          
        
      </div>
    </section>