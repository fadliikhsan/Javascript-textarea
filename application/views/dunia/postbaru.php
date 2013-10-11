<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Selamat datang di Dunia14inch</title>
	<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>
	<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-1.9.1.min.js'); ?>"></script>
</head>
<script>
$(document).ready(function () {
	var max = 100;
	$('#tanyajawab').keypress(function (event){		
		var len = $(this).val().length;
		if (event.which < 0x20) {
		  // e.which < 0x20, then it's not a printable character
		  // e.which === 0 - Not a character
		  return; // Do nothing
		}

		if (len >= max) {
		  event.preventDefault();
		}
	});
	
	if($('textarea[name=tanyajawab]').val().trim()==''){
	   $("#btnkirim").attr("disabled", true);  
	}

	$('textarea[name=tanyajawab]').keyup(function(){
		
		val = $(this).val().trim();    
		if(val.length > 0 && val.length < max){
			$("#btnkirim").attr("disabled", false);
		}else{
			$("#btnkirim").attr("disabled", true);
		}
	});
	
  $('#tanyajawab').keyup(function (event) {
    var len = $(this).val().length;
    var char = max - len;
    $('#sisatext').text('sisa '+char + ' karakter');
  });

});
</script>
<body>
<div id="container">
	<h1>Selamat Datang di Dunia14inch</h1>
	<div class="alert alert-info"><b>Semoga bisa membantu teman - teman yang membutuhkan</b></div>
	<blockquote>		
			<textarea class="form-control" placeholder="Silahkan ketikkan sesuatu disini ..." rows="5" id="tanyajawab" style="width:682px;" name="tanyajawab"></textarea>
			<form class="form-inline" role="form">
				<div class="form-group">
					<button type="button" style="margin-top:10px;" class="btn btn-primary" id="btnkirim">Coba Kirim</button>
					<label>
						<span id="sisatext" style="padding:10px 0 0 20px;">sisa 100 karakter</span>
					</label>
				</div>
			</form>
	</blockquote>
</div>
</html>