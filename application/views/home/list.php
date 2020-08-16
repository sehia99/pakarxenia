<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
                <div class="container">
                <div class="row align-items-center">  

                
           
              <img src="<?php echo base_url() ?>assets/LOGO.png" class="user-image" alt="User Image">
             
                <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu mb-16 text-right ">
                <li><a href="<?php echo base_url('home') ?>" class= "text-white" class="nav-link">Beranda</a></li>
                <li><a href="<?php echo base_url('history') ?>" class= "text-white" class="nav-link">History</a></li>
                <?php if($this->session->userdata('username')){ ?>
                <?php }else{ ?>
                <li><p class="mb-2"><a href="<?php base_url() ?>login" class="btn btn-warning mr-2">Login</a></p></li>
            <?php } ?>
                </ul>
                </nav>
                </div>
                </div>
</header>