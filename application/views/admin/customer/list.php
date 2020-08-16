<!-- <p>
	<a href="<?php echo base_url('admin/customer/tambah') ?>" class="btn btn-success btn-lg">
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
			
			<th>NO</th>
			<th>NAMA CUSTOMER</th>
			<th>USERNAME</th>
			<th>EMAIL CUSTOMER</th>
			<th>TYPE</th>
			<th>TAHUN</th>
			<th>NAMA KERUSAKAN</th>
			<th>TANGGAL KONSULTASI</th>
			
			<!-- <th>Detail</th> -->
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($customer as $customer) { ?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $customer->nama_customer ?></td>
			<td><?php echo $customer->username_cust ?></td>
			<td><?php echo $customer->email ?></td>
			<td><?php echo $customer->type ?></td>
			<td><?php echo $customer->tahun ?></td>
			<td><?php echo $customer->nama_kerusakan ?></td>
			<td><?php echo $customer->tanggal ?></td>
			
		</tr>
		<?php } ?>
	</tbody>
</table>