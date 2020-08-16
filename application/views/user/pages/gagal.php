<body class="site-blocks-cover overlay login-page" style="background-image: url('<?php echo base_url(); ?>assets/ceper5.jpg');
background-position: center;
  background-repeat: no-repeat;">
  </div>
</div>
</div>
</div>
</div>
</body>  

<CENTER><div class="col-md-6 text-white">
	<table class="table">
	<center>
	<h1>HASIL ANALISIS</h1>
	</center>		

		<tr> 
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

		

		<tr>
			<center>
			<td><?php echo 'DATA KERUSAKAN TIDAK TERDETEKSI' ?></td>
			</center>
		</tr>
		
		<!-- 
		<tr>
			<td>Solusi</td>
			<td>:</td>
			<td><p>
				<?php $no=1; foreach ($solusi as $s) {?>
					<?php echo $no++.'. '.$s->solusi ?>
					<br>
				<?php } ?>
				</p>
			</td>
		</tr>  -->
</table>
<a href="<?php echo base_url() ?>user/pertanyaan" class="btn btn-danger btn-lg">Konsultasi Kembali</a>

<!-- <a href="<?php echo base_url() ?>home" class="btn btn-primary btn-lg">save</a> -->

<button class="btn btn-warning btn-lg" onclick="window.print()"><i class="fa fa-save"></i>Cetak</button>
</div>
</CENTER>