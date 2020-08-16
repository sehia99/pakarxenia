<!-- <p>
	<a href="<?php echo base_url('admin/solusi/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p> -->

<?php
// NOTIFIKASI
if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
?>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			
			<th>ID Solusi</th>
			<th>Kerusakan</th>
			<th>Solusi</th>
			<th>Status</th> 
			</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($solusi as $solusi) { ?>
		<tr>
			
			<td><?php echo $solusi->id_solusi ?></td>
			<td><?php echo $solusi->nama_kerusakan ?></td>
			<td><?php echo $solusi->solusi ?></td>
			<td><?php if($solusi->status == '1'){ ?>
				<a href="<?php echo base_url('admin/solusi/konfirmasi/').$solusi->id_solusi ?>"><button class="btn btn-success">Konfirmasi</button></a>
			<?php }else{ ?>
				Sudah Konfirmasi
			<?php } ?>
			</td>
			<!-- <td>
				<a href="<?php echo base_url('admin/solusi/edit/'.$solusi->id_solusi) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

				<a href="<?php echo base_url('admin/solusi/delete/'.$solusi->id_solusi) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> Hapus</a>
			</td> -->
		</tr>
		<?php } ?>
	</tbody>
</table>