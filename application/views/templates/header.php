<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title> <?php echo $judul;  ?> </title>
  </head>
  <body class="bg-light">

  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  		<div class="container">
		  <a class="navbar-brand" href="#">
				<img src="<?= site_url(); ?>assets/img/logo.png" width="100" class="rounded-circle">
		  </a>
		  <a class="navbar-brand" href="<?= base_url(); ?>">English Club[TIF UNPAS]</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= base_url(); ?>member">Members</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= base_url(); ?>peoples">Peoples</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= base_url(); ?>#about">About</a>
		      </li>
		     </div>
		    </ul>
		  </div>
		</nav>