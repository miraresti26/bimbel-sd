<!DOCTYPE HTML>
<?php
	error_reporting(E_ALL & ~E_NOTICE);
	require_once 'account_name.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<title>Bimbingan Belajar SD</title>
	</head>
<body class = "alert-warning">
	<nav class  = "navbar navbar-inverse">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand">Bimbingan Belajar SD</a>
			</div>
				
		</div>
	</nav>
	<div class = "container-fluid">
		<ul class="nav nav-pills">
			<li class="active"><a href="account.php">Akun</a></li>
		</ul>
		<br />
		<div class = "col-md-12">
			<button type = "button" class = "btn btn-success"  data-toggle="modal" data-target="#myModal"><span class = "glyphicon glyphicon-plus"></span> Buat Akun</button>
			<br/>
			<br/>
			<div class = "alert alert-info">
				<h2>Klik Tombol Buat Akun, Untuk Mendaftarkan Akun Bimbel</h2>>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Registrasi Peserta Bimbel</h4>
			</div>
			<div class="modal-body">
				<form method = "POST" enctype = "multipart/form-data">
					<div class = "form-group">
						<label>Nama Member</label>
						<input type = "text" class = "form-control" id = "username"/>
					</div>
					<div class = "form-group">
						<label>Password</label>
						<input type = "password" class = "form-control" id = "password"/>
					</div>
					<div id = "loading">
						
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" id= "signup" class="btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Save</button>
			</div>
				</form>
		</div>
	</div>
	</div>
	<footer class = "navbar navbar-fixed-bottom navbar-inverse" align="center">
		<strong>Copyright &copy; <?php echo date("Y") ?> Developer UNHASY <a href="https://web.facebook.com/aris.klaci">Aris Sugiantoro</a></strong>
	</footer>
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/script.js"></script>
<script src = "js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>
</html>