<body class="site-blocks-cover overlay login-page" style="background-image: url('<?php echo base_url(); ?>assets/ceper5.jpg');
background-position: center;
  background-repeat: no-repeat;">
  </div>
</div>
</div>
</div>
</div>
</body> 
<style type="text/css">
.table{
	background-color: #ffffff;
	color : #000000;
	font-size: 20px;
}
.p-black {
	color: #000000;
}
</style>
<CENTER><div class="col-md-12 ">
	<table class="table" width="100%"  >
	<center>
	<h4>HASIL ANALISIS</h4>
	</center>
		<?php 
					// FORM UNTUK MEMPROSES BELANJAAN

					echo form_open(base_url('user/hasil')); 
					?>

		<tr > 
			<td>Tanggal Konsultasi</td>
			<td>:</td>
			<td><?php
				function tgl_indo($tanggal){
				$bulan = array (
								1 =>    'Januari',
										'Februari',
										'Maret',
										'April',
										'Mei',
										'Juni',
										'Juli',
										'Agustus',
										'September',
										'Oktober',
										'November',
										'Desember');
				$pecahkan = explode('-', $tanggal);
	
				// variabel pecahkan 0 = tanggal
				// variabel pecahkan 1 = bulan
				// variabel pecahkan 2 = tahun
 
				return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
					} 
				echo tgl_indo(date('Y-m-d'));  ?></td>
		</tr>

		<!--<tr >
			<td>Username</td>
			<td>:</td>
			<td><?php echo $username ?></td>
		</tr> -->

		<tr>
			<td>Nama Kerusakan</td>
			<td>:</td>
			<td><?php echo $hasil->nama_kerusakan ?></td>
		</tr>
		
		
		<tr>
			<td>Solusi</td>
			<td>:</td>
			<td>
				<?php $no=1; foreach ($solusi as $s) {?>
					<?php echo $no++.'. '.$s->solusi ?>
					<br>
				<?php } ?>
				
			</td>
		</tr> 
</table>
<a href="<?php echo base_url() ?>konsultasi" class="btn btn-danger btn-lg">Konsultasi Kembali</a>

<!-- <a href="<?php echo base_url() ?>history" class="btn btn-primary btn-lg">save</a>
 -->
<button class="btn btn-warning btn-lg" onclick="window.print()"><i class="fa fa-save"></i>Cetak</button>
            <?php 
					 //closing form
			echo form_close();
			?>
</div>
</CENTER>
