<div class="col-lg-12">
<form method="POST" action="<?php echo base_url() ?>User/submit_konsultasi">
						<div class="form-group">
							 <label class="col-lg-2">PILIH GEJALA<span class="text-danger">*</span></label>
							<div class="col-md-10">
								<select name="gejala[]" class="multiselect" multiple="multiple">
								<?php foreach ($gejala as $g) { ?>
									<option value="<?php echo $g->id_gejala; ?>"><?php echo $g->gejala; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
</div>


<script src="<?php echo base_url('assets/template/js/jquery.multi-select.js');?>"></script>
<script>
	$(document).ready(function() {
		$(".multiselect").multiSelect();
			});
</script>

<button class="btn btn-success btn-lg" name="submit" type="submit">
			<i class="fa fa-save"></i>Submit
		</button>
</form>