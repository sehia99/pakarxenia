<div class="col col-12">
	<table class="table">
	<center>
	<h4>DAIHATSU XENIA</h4>
	</center>
		<tr>
			<td>Nama Pemilik</td>
			<td>:</td>
			<td><?php echo $this->session->userdata('nama'); ?></td>
		</tr>

		<tr>
			<td>Nama Kerusakan</td>
			<td>:</td>
			<td><?php echo $hasil->kerusakan ?></td>
		</tr>

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
		</tr>
</table>
<a href="<?php echo base_url() ?>pertanyaan/pertanyaan" class="btn btn-danger btn-lg">Konsultasi Kembali</a>

<!-- <a href="<?php echo base_url() ?>user/" class="btn btn-primary btn-lg">Home</a> -->

<button class="btn btn-warning btn-lg" onclick="window.print()"><i class="fa fa-save"></i>Cetak</button>
</div>