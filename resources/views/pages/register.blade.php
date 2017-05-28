@extends('layouts.default')
@section('content')
	<div class="container">
    <form method="post" action="" enctype="multipart/form-data">
        <h3>Form Registrasi</h3>
        <?php
        if (isset($reg_msg)) {?>
        	<p class="text-primary"> {{ $reg_msg }} </p>
        	<?php
        }
        ?>
        <div class="form-group">
			<label for="InputName">Full Name</label>
			<input type="text" class="form-control" id="InputName" name="name" placeholder="Enter Full Name" value="{{ old('name') }}">
			<small class="form-text text-danger"><?php echo $errors->first('name') ?></small>
		</div>
        <div class="form-group">
			<label for="InputNIM">NIM</label>
			<input type="text" class="form-control" id="InputNIM" name="nim" placeholder="NIM" value="{{ old('nim') }}">
			<small class="form-text text-danger"><?php echo $errors->first('nim') ?></small>
		</div>
        <div class="form-group">
			<label for="InputBio">Motto</label>
			<input type="text" class="form-control" id="InputBio" name="bio" placeholder="beberapa kata..." value="{{ old('bio') }}">
			<small class="form-text text-danger"><?php echo $errors->first('bio') ?></small>
		</div>
		<h5> Foto </h5>
		<p> Upload 2 fotomu dengan dimensi yang sama (max size 1 MB). Pilih foto dengan muka serius dan muka senyum, upload ke 2 uploader di bawah ini.</p>
		<div class="form-group">
			<label for="InputPhoto1">Foto Serius</label>
			<input type="file" class="form-control-file" id="InputPhoto1" name="img1" value="{{ old('img1') }}">
			<small class="form-text text-danger"><?php echo $errors->first('img1') ?></small>
		</div>
		<div class="form-group">
			<label for="InputPhoto2">Foto Senyum</label>
			<input type="file" class="form-control-file" id="InputPhoto2" name="img2" value="{{ old('img2') }}">
			<small class="form-text text-danger"><?php echo $errors->first('img2') ?></small>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@stop