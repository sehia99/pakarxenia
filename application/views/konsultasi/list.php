<?php
// NOTIFIKASI EROR
echo validation_errors('<div class="alert alert-warning">','</div>');

// FORM OPEN
echo form_open(base_url('admin/customer/tambah'),' class="form-horizontal"');
?>




	 <div class="site-blocks-cover overlay" style="background-image: url('<?php echo base_url(); ?>assets/ceper4.jpg');
	"data-aos="fade" id="home-section">
	<div class="container">
	<div class="row">
	<div class="col-md-12 ">
	
<!-- background-position: center;
  background-repeat: nso-repeat;"> -->


			<div style="margin-top:10px;">
			<form action="#" method="post" class="form-check">
			<div class="row">
			<div class="col-md-6">			
			<div class="form-group">
			<span><small>Nama Customer :</small></span>
			<input type="text" name="nama_customer" class="form-control"placeholder="Nama Customer" value="<?php echo set_value('nama_customer') ?>" required>
			</div>
			</div>
			</div>
			</div>
			
			<div class="row">
			<div class="col-md-5">			
			<div class="form-group">
			<span><small>Username :</small></span>
			<input type="text" name="username_cust" class="form-control"placeholder="Username" value="<?php echo set_value('username_cust') ?>" required>
			</div>
			</div>
			</div>

			<div class="row">
			<div class="col-md-5">			
			<div class="form-group">
			<span><small>Password :</small></span>
			<input type="password" name="password" class="form-control"placeholder="password" value="<?php echo set_value('password') ?>" required>
			</div>
			</div>
			</div>

			<div class="row">
			<div class="col-md-5">			
			<div class="form-group">
			<span><small>Email :</small></span>
			<input type="text" name="email" class="form-control"placeholder="email" value="<?php echo set_value('email') ?>" required>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-md-5">			
			<div class="form-group">
			<span><small>Type Mobil :</small></span>
			<select name="type" class="form-control">
	 		<option value="">Pilih Type Mobil </option>
	 		<option value="LI VVTI">LI VVTI </option>
	 		<option value="XI VVTI">XI VVTI </option>
	 		<option value="Type D">Type D </option>
	 		<option value="Type X">Type X </option>
	 		<option value="Type M">Type M </option>
	 		<option value="Type R">Type R </option>
			</select>
			</div>
			</div>
			</div>
			
			
			<div class="row">
			<div class="col-md-5">			
			<div class="form-group">
			<span><small>Tahun :</small></span>
			<select name="tahun" class="form-control">
				<!-- <input type="number" name="tahun" class="form-control" placeholder="tahun"value="<?php echo set_value('tahun') ?>"required > -->
            <option value="">Pilih Tahun Mobil Anda</option>
	 		<option value="2004">2004</option>
	 		<option value="2005">2005</option>
	 		<option value="2006">2006</option>
	 		<option value="2007">2007</option>
	 		<option value="2008">2008</option>
	 		<option value="2009">2009</option>
	 		<option value="2010">2010</option>
	 		<option value="2011">2011</option>
	 		<option value="2012">2012</option>
	 		<option value="2013">2013</option>
	 		<option value="2014">2014</option>
	 		<option value="2015">2015</option> 
	 		</select>
			</div>
			</div>
			</div>
		
			<div class="row">
			<div class="col-md-12">
			<div class="form-group">
			<button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i> Lanjutkan</button>
			</div>
			</div>
			</div>
			</form>

</div>
</div>
</div>
</div>


<?php echo form_close(); ?>