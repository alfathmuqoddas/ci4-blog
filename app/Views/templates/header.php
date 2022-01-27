<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <link rel="stylesheet" href="<?= base_url() ;?>/index.css">
    <link rel="stylesheet" href="<?= base_url() ;?>/hover.css"> 

    <title>Shouts! | <?= $title ?></title>
  </head>
  <body class="bg-light">

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
	  <div class="container">
	    <a class="navbar-brand fw-bold fst-italic" href="<?php echo base_url(); ?>">Shouts!</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav ms-auto">
	        <?php if(!session()->get('isLoggedIn')) : ?>
	        	<a class="nav-link" href="<?php echo base_url(); ?>/users/login">Login</a>
	        	<a class="nav-link" href="<?php echo base_url(); ?>/users/register">Register</a>
	    	<?php else: ?>
	    		<a class="nav-link" href="/users/details/<?= session()->get('id') ?>"><?= session()->get('username') ?></a>
	    		<a class="nav-link" href="<?php echo base_url(); ?>/users/logout">Logout</a>
	    	<?php endif; ?>
	      </div>
	    </div>
	  </div>
	</nav>

  	<section class="container">
	<?php if(session()->getFlashdata('msg_warning')):?>
	    <div class="alert alert-warning alert-dismissible fade show" role="alert">
	       <?= session()->getFlashdata('msg_warning') ?>
	       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>
	<?php endif;?>
	<?php if(session()->getFlashdata('msg_success')):?>
	    <div class="alert alert-success alert-dismissible fade show" role="alert">
	       <?= session()->getFlashdata('msg_success') ?>
	       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>
	<?php endif;?>
	</section>
	<div class="pt-5" style="min-height: 71vh;">
