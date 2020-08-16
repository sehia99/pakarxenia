<p>
	<a href="<?php echo base_url('pakar/kerusakan/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p>

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
			
			<th>ID Kerusakan</th>
			<th>Nama Kerusakan</th>
			<th>Status</th>
			<th>Pilih</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($kerusakan as $kerusakan) { ?>
		<tr>
			<td><?php echo $kerusakan->id_kerusakan ?></td>
			<td><?php echo $kerusakan->nama_kerusakan ?></td>
			
			<td>
				<?php if($kerusakan->status == '1'){ ?>
					Delay
				<?php }else{ ?>
					Telah Dikonfirmasi
				<?php } ?>
			</td>
			<td>
				<a href="<?php echo base_url('pakar/kerusakan/edit/'.$kerusakan->id_kerusakan) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

				<a href="<?php echo base_url('pakar/kerusakan/delete/'.$kerusakan->id_kerusakan) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>