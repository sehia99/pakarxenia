<?php
// NOTIFIKASI EROR
echo validation_errors('<div class="alert alert-warning">','</div>');

// FORM OPEN
echo form_open(base_url('pakar/solusi/edit/'.$solusi->id_solusi),' class="form-horizontal"');
?>
	

	<div class="form-group">
	<label class="col-md-2 control-label">ID Solusi</label>
	<div class="col-md-5">
	<input type="text" name="id_solusi" class="form-control"placeholder="ID Solusi" value="<?php echo set_value('kd_solusi') ?>" required>
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-2 control-label">ID Kerusakan</label>
	<div class="col-md-5">
	<select name="id_kerusakan" class="form-control">
	<div class="form-group">
	 <option value="K01">Kerusakan pada Busi </option>
	 <option value="K02">Injektor bermasalah </option>
	 <option value="K03">Premature Ignition (Pengapian tidak sempurna)/knocking </option>
	 <option value="K04">Dinamo Radiator AC / Freon Ac </option>
	 <option value="K05">Rem bermasalah </option>
	 <option value="K06">Mesin overheat </option>
	 <option value="K07">Kerusakan transmisi </option>
	 <option value="K08">Kerusakan ACCU </option>
	 <option value="K09">Kerusakan Engine Mounting </option>
	 <option value="K10">Kerusakan Pada Bagian Roda </option>
	 <option value="K11">Kerusakan Kelistrikan Mobil </option>
	</select>
	</div>
	</div>
	<div class="form-group">
	<label class="col-md-2 control-label">Solusi</label>
	<div class="col-md-5">
	<input type="text" name="solusi" class="form-control" placeholder="solusi" value="<?php echo $solusi->solusi ?>"required>
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-2 control-label"></label>
	<div class="col-md-5">
	<button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i> Submit</button>
	<button class="btn btn-info btn-lg" name="reset" type="reset"><i class="fa fa-times"></i> Reset</button>
	</div>
	</div>

<?php echo form_close(); ?>