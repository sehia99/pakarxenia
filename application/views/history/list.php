

<CENTER>

	<div class="col-md-12 text-white ">
	<table class="table">
	<center>
	<h4>HISTORY</h4>
	</center>

	<?php 
 //notifikasi
if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

?>

	
	<border>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>TYPE</th>
			<th>TAHUN</th>
			<th>NAMA KERUSAKAN</th>
			<th>TANGGAL KONSULTASI</th>
		</tr>
	</border>
	<tbody>
		<?php $no=1; foreach($history as $history) { ?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $history->nama_customer ?></td>
			<td><?php echo $history->type ?></td>
			<td><?php echo $history->tahun ?></td>
			<td><?php echo $history->nama_kerusakan ?></td>
			<td><?php echo $history->tanggal ?></td>
			
		</tr> 
			
			<td></td>
			
			

			
		</tr>
		<?php } ?>
		</center>
	</tbody>
</table>
</center>
<CENTER>




</div>



</CENTER>