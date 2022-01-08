<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?= $title ?></title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <div class="container">
	    <a class="navbar-brand" href="<?php echo base_url(); ?>">Shouts!</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
	        </li>
	        <?php if(!session()->get('isLoggedIn')) : ?>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>/users/login">Login</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>/users/register">Register</a>
	        </li>
	    	<?php endif; ?>
	    	<?php if(session()->get('isLoggedIn')) : ?>
	    	<li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>users/profile"><?= session()->get('username') ?></a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>/users/logout">Logout</a>
	        </li>
	    	<?php endif; ?>
	      </ul>
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