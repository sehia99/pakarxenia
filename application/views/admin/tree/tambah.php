<?php
// NOTIFIKASI EROR
echo validation_errors('<div class="alert alert-warning">','</div>');

// FORM OPEN
echo form_open(base_url('admin/solusi/tambah'),' class="form-horizontal"');
?>

	<div class="form-group">
	<label class="col-md-2 control-label">ID Tree</label>
	<div class="col-md-5">
	<input type="text" name="id" class="form-control"placeholder="ID Tree" value="<?php echo set_value('id') ?>" required>
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-2 control-label">ID Gejala</label>
	<div class="col-md-5">
	<select name="id_kerusakan" class="form-control">
	 <option value="K01">Kerusakan pada Busi </option>
	 <option value="K02">Injektor bermasalah </option>
	 <option value="K03">Premature Ignition (Pengapian tidak sempurna)/knocking </option>
	 <option value="K04">Dinamo Radiator AC / Freon Ac </option>
	 <option value="K05">Rem bermasalah </option>
	 <option value="K06">Mesin overheat </option>
	 <option value="K07">Kerusakan transmisi </option>
	 <option value="K08">Kerusakan ACCU & Engine Mounting </option>
	</select>
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-2 control-label">Ifyes</label>
	<div class="col-md-5">
	<input type="text" name="ifyes" class="form-control"placeholder="Ifyes" value="<?php echo set_value('ifyes') ?>" required>
	</div>
	</div>
	<div class="form-group">
	<label class="col-md-2 control-label">Ifno</label>
	<div class="col-md-5">
	<input type="text" name="ifno" class="form-control"placeholder="Ifno" value="<?php echo set_value('ifno') ?>" required>
	</div>
	</div>
	<div class="form-group">
	<label class="col-md-2 control-label">Hasil</label>
	<div class="col-md-5">
	<input type="text" name="hasi" class="form-control"placeholder="Hasil" value="<?php echo set_value('hasil') ?>" required>
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