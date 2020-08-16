<p>
	<a href="<?php echo base_url('pakar/gejala/tambah') ?>" class="btn btn-success btn-lg">
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

			<th>ID Gejala</th>
			<th>Nama Gejala</th>
			<th>Pilih</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($gejala as $gejala) { ?>
		<tr>
			<td><?php echo $gejala->id_gejala ?></td>
			<td><?php echo $gejala->nama_gejala ?></td>
			<td>
				<a href="<?php echo base_url('pakar/gejala/edit/'.$gejala->id_gejala) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

				<a href="<?php echo base_url('pakar/gejala/delete/'.$gejala->id_gejala) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>