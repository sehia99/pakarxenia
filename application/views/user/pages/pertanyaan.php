<body class="site-blocks-cover overlay login-page" style="background-image: url('<?php echo base_url(); ?>assets/ceper6.jpg');
background-position: center;
  background-repeat: no-repeat;">


</div>

</body>  
<center>
		<div class="container">
       
        <div class=" text-white align-center">


		<center><div class="col-lg-12 text-white"><h2>Apakah  <b><?php echo $pertanyaan->nama_gejala ?></b> ?</h2>
		<?php if ($pertanyaan->ifyes > 0) { ?>
		<a class="text-white btn btn-success" href="<?php echo base_url() ?>User/pertanyaan/<?php echo $pertanyaan->ifyes ?>">Ya</a>
		<?php }else{ ?>
		<a class="text-white btn btn-success" href="<?php echo base_url() ?>User/hasil/<?php echo $hasil ?>">Ya</a>
		<?php } ?>
		<a class="btn btn-danger" href="<?php echo base_url() ?>User/pertanyaan/<?php echo $pertanyaan->ifno ?>">Tidak</a>
		</div></center>
		</div>
		</div>
</center>