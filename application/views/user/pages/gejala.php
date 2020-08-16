<H2>Form Tambah Pegawai</H2>
<div class="form-group">
    <label for="name">Nama Pegawai</label>
    <div class="controls">
    <input type="text" name="nama">
</div>
 <div class="form-group">
    <label for="name">Jabatan Pegawai</label>
    <div class="controls">
    <input type="text" name="jabatan">
</div>
</div>
 <div class="form-group">
    <label for="name">Bidang</label>
    <div class="controls">
        <select required name="kode_gejala">
        	<option value="" disabled diselected>-- Pilih Bidang --</option>
        <?php                                
        foreach ($dd_bidang as $row) {  
		  echo "<option value='".$row->id_bidang."'>".$row->nama_bidang."</option>";
		  }
		  echo"
		</select>"
		?>
    </div>
</div>

<?php $no=1 ; foreach ($gejala as $row) {
	# code...
 ?>
 


<h4> <?php echo $no++.'. '.$row->gejala ?></h4>





<?php  } ?>