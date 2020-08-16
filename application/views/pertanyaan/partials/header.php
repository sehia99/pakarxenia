
    <header class="site-navbar py-1" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
         
          <div class="col-12 col-md-12 d-none d-xl-block" data-aos="fade-down">
          <style type="text/css">
          .navbar-inverse{
            background-color: #ff8c00;
            font-size: 14px;
            }</style>
            <nav class="site-navigation navbar-inverse position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="has-children active">
                  <div data-aos="fade-down">
            <h1 class="mb-0"><a class="text-black h2 mb-0">SISTEM PAKAR</a></h1>
          </div>
                <li><a href="<?php echo base_url() ?>user">Home</a></li>
                <li><a href="<?php echo base_url() ?>user/gejala">Gejala</a></li>
                <li><a href="<?php echo base_url() ?>user/penyakit">Penyakit</a></li>
                
                <?php if ($this->session->userdata('id_user')!=null) {?>
                <li><a href="<?php echo base_url() ?>user/pertanyaan">Konsultasi</a></li>
                <li><a href="<?php echo base_url() ?>login/logout">Logout</a></li>
                <?php }else{?>
                <li><a href="<?php echo base_url() ?>login">Konsultasi</a></li>
                <li><a href="<?php echo base_url() ?>login">Login</a></li>
                <?php } ?>

                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
            </a>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3 text-black"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>


      
    </header>
