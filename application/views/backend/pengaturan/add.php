<?php 

echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('backend/tambah_user'), 'class="form-horizontal"');;
 ?>
<div class="form-group">
	<label class="col-md-2 control-label">Nama user<span style="color: red">*</span></label>
	<div class="col-md-5">
		<input type="text" name="nama_user" class="form-control" placeholder="Masukan nama user" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Username<span style="color: red">*</span></label>
	<div class="col-md-5">
		<input type="text" name="username" class="form-control" placeholder="Masukan username" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">password<span style="color: red">*</span></label>
	<div class="col-md-5">
		<input type="password" name="password" id="pw1" class="form-control" placeholder="Masukan password" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">password<span style="color: red">*</span></label>
	<div class="col-md-5">
		<input type="password" name="password" id="pw2" class="form-control" placeholder="Masukan konfirmasi password" required>
	</div>
</div>

<div class="form-group" style="display: none">
	<label class="col-md-2 control-label">Level <span style="color: red">*</span></label>
	<div class="col-md-5">
		<select class="form-control" name="level">
			<option value="1">Admin</option>
		</select>
	</div>
</div>

<div class="form-group col-md-12">
	<div class="col-md-5">
		<button class="btn btn-success btn-sm" type="submit">
			<i class="fa fa-save"></i>Simpan
		</button>
		<button class="btn btn-info btn-sm" name="reset" type="reset">
			<i class="fa fa-save"></i>reset
		</button>
	</div>
</div>

 <?php echo form_close(); ?> 

     <script type="text/javascript">
            window.onload = function () {
                document.getElementById("pw2").onchange = validatePassword;
                document.getElementById("pw1").onchange = validatePassword;
            }
            function validatePassword(){
                var pass2=document.getElementById("pw2").value;
                var pass1=document.getElementById("pw1").value;
                if(pass1!=pass2)
                    document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
                else
                    document.getElementById("pw2").setCustomValidity('');
            }
        </script>
