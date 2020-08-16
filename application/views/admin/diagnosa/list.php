<div style="margin-top:10px;">
  <form action="#" method="post" class="form-check">
    <div class="row">
      <div class="col-md-5">     
        <div class="form-group">
          <span><small>Nama Pasien:</small></span>
          <input class="form-control requiered" name="nama_pasien" placeholder="Nama Pasien" type="text" autocomplete="off">
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-5">      
        <div class="form-group">
          <span><small>Jenis Kelamin :</small></span>
          <select name="kelamin" class="form-control ">
            <option value="pilih" selected>--Pilih Salah Satu--</option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
        </div>
      </div>
    </div>

     <div class="row"> 
      <div class="col-md-2">      
        <div class="form-group">
          <span><small>Usia : </small></span>
          <input class="form-control requiered" name="usia" placeholder="Usia" type="text" autocomplete="off">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <span><small>Alamat Lengkap:</small></span>
          <textarea class="form-control requiered" name="alamat" placeholder="Alamat Lengkap" type="text"></textarea>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <p class="mb-4"><a href="<?php base_url();?>analisa" class="btn btn-primary mr-2 mb-2">Konsultasi</a></p>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- <script type="text/javascript">
$("form.form-check").submit(function(e) {
  e.preventDefault();
  var inputs = $(this).find('.requiered');
  var success = 0;
  for (var i = 0; i < inputs.length; i++) {
    var _in = $(inputs[i]);
    var _val = _in.val();
    if (_val == '') {
      _in.focus();
      break;
    }
    else
    {
      success = success + 1;
    }
  }
  if (success >= inputs.length) {
    var $input = $("<input type='hidden' name='session_id_valid requiered' value='<?php echo @$session_id_valid;?>'/>")
    $(this).append($input);
    $(this).unbind();

  };
});
</script> -->