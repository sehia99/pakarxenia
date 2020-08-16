<?php
// NOTIFIKASI EROR
echo validation_errors('<div class="alert alert-warning">','</div>');

// FORM OPEN
echo form_open(base_url('admin/customer/tambah'),' class="form-horizontal"');
?>

	

	<div class="form-group">
	<label class="col-md-2 control-label">Nama Customer</label>
	<div class="col-md-5">
	<input type="text" name="nama_customer" class="form-control"placeholder="Nama customer" value="<?php echo set_value('nama_customer') ?>" required>
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-2 control-label">Type Mobil</label>
	<div class="col-md-5">
	<input type="text" name="type" class="form-control"placeholder="Type Mobil" value="<?php echo set_value('type') ?>" required>
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-2 control-label">Tahun Mobil</label>
	<div class="col-md-5">
	<input type="text" name="tahun" class="form-control"placeholder="Tahun Mobil" value="<?php echo set_value('tahun') ?>" required>
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-2 control-label"></label>
	<div class="col-md-5">
	  <button class="btn btn-success btn-lg" name="submit" type="submit">
	  	<i class="fa fa-save"></i> Simpan
	  </button>
	  <button class="btn btn-info btn-lg" name="reset" type="reset">
	  	<i class="fa fa-times"></i> Reset
	  </button>
	</div>
	</div>

<?php echo form_close(); ?>