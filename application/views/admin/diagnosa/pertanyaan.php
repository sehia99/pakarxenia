<?php
// NOTIFIKASI
if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
?>

<div style="margin-top:10px;">
	<form action="#" method="post" class="jumbotron form-check"  style="padding:40px !important;">
		<div class="row">
			<div class="col-md-12">
				<?php echo validation_errors('<p class="alert alert-danger">', '</p>');?>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-8">			
				<div class="form-group">
					Apakah Sapi anda mengalami gejala <?php echo $gejala->nama_gejala ?> ?
				</div>
			</div>
			<!-- <input type="hidden" name="id_gejala" id="id_gejala" value="<?php echo $gejala->id;?>"/>
			<div class="col-md-2"> -->
				<input type="radio" name="pilihan" id="pilihanYa" value="ya">Ya
			</div>
			<div class="col-md-2">
				<input type="radio" name="pilihan" id="pilihanTidak" value="tidak">Tidak
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<button type="submit" name="submit" class="btn btn-danger">Lanjut</button>
			</div>
		</div>
	</form>
</div>
<!-- <script type="text/javascript">
$("form.form-check").submit(function(e) {
	e.preventDefault();
	var id_gejala = $("#id_gejala").val();
	var pilihanYa = $("#pilihanYa").prop('checked');
	var pilihanTidak = $("#pilihanTidak").prop('checked');
	if (!pilihanYa && !pilihanTidak) {
		alert("Anda Harus Memilih");
	} else{
		if (pilihanYa) {pilihanYa = "ya";} else{pilihanYa = "tidak";};
		
		$.ajax({
			method : "POST",
			data : "id_gejala="+id_gejala+"&pilihan="+pilihanYa,
			url : "<?php echo base_url();?>diagnosa/act_pertanyaan",
			success : function(a) {
				console.log(a);
				a = JSON.parse(a);
				if (a.url == 'fail') {alert("Gagal");} else{
					window.location.href = a.url;
				};
			}
		})
	};
});
</script> -->