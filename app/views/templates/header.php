<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $data['judul']; ?></title>
	<link rel="icon" href="<?= BASEURL; ?>/img/chatto-logo.ico">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
	


</head>

<body>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container">
			<nav class="navbar navbar-light bg-light">
				<a class="navbar-brand" href="<?= BASEURL ?>">
					<img src="<?= BASEURL ?>/img/chatto-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					Chatto
				</a>
			</nav>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link" href="<?= BASEURL ?>">Home</a>
					<a class="nav-link" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
					<a class="nav-link" href="<?= BASEURL ?>/about">About</a>
				</div>
			</div>
			<div class="col-md-3 text-end">
				<a href="<?= BASEURL ?>/signup/login">
					<button type="button" class="btn btn-outline-primary me-2">Login</button>
				</a>
				<a href="<?= BASEURL ?>/signup">
					<button type="button" class="btn btn-outline-primary me-2">Sign-up</button>
				</a>
			</div>
		</div>
	</nav>