<p>
	<a href="<?php echo base_url('admin/tree/tambah') ?>" class="btn btn-success btn-lg">
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
			
			<th>ID Tree</th>
			<th>ID Gejala</th>
			<th>Ifyes</th>
			<th>Ifno</th>
			<th>Hasil</th>
			<th>Pilih</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($tree as $tree) { ?>
		<tr>
			
			<td><?php echo $tree->id ?></td>
			<td><?php echo $tree->id_gejala ?></td>
			<td><?php echo $tree->ifyes ?></td>
			<td><?php echo $tree->ifno ?></td>
			<td><?php echo $tree->hasil ?></td>
			<td>
				<a href="<?php echo base_url('admin/tree/edit/'.$tree->id) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

				<a href="<?php echo base_url('admin/tree/delete/'.$tree->id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>