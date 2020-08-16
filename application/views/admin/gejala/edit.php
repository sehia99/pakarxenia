<?php
// NOTIFIKASI EROR
echo validation_errors('<div class="alert alert-warning">','</div>');

// FORM OPEN
echo form_open(base_url('admin/gejala/edit/'.$gejala->id_gejala),' class="form-horizontal"');
?>

	<div class="form-group">
	<label class="col-md-2 control-label">ID Gejala</label>
	<div class="col-md-5">
	<input type="text" name="id_gejala" class="form-control"placeholder="ID Gejala" value="<?php echo $gejala->id_gejala ?>" required>
	</div>
	</div>
	
	<div class="form-group">
	<label class="col-md-2 control-label">Nama Gejala</label>

	<div class="col-md-5">
	<input type="text" name="nama_gejala" class="form-control"placeholder="Nama Gejala" value="<?php echo $gejala->nama_gejala ?>" required>
	</div>
	</div>

	
	<div class="form-group">
	<label class="col-md-2 control-label"></label>
	<div class="col-md-5">
	  <button class="btn btn-success btn-lg" name="submit" type="submit">
	  	<i class="fa fa-save"></i> Submit
	  </button>
	  <button class="btn btn-info btn-lg" name="reset" type="reset">
	  	<i class="fa fa-times"></i> Reset
	  </button>
	</div>
	</div>

<?php echo form_close(); ?>