<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@kgdinesh</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/styles.css'); ?>"" rel="stylesheet">
  </head>
  <body>
	<div class="container">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="">@kgdinesh</a>
			</div>
			<div>
			  <ul class="nav navbar-nav">
				<li <?php if($active == 'home') echo 'class="active"'; ?>><a href="<?php echo base_url("index.php/home"); ?>"><i class="fa fa-home fa-lg"></i> Home</a></li>
				<li <?php if($active == 'message') echo 'class="active"'; ?>><a href="<?php echo base_url("index.php/messages"); ?>"><i class="fa fa-pencil fa-lg"></i> Message Board</a></li>
				<li <?php if($active == 'notifier') echo 'class="active"'; ?>><a href="<?php echo base_url("index.php/notifier"); ?>"><i class="fa fa-bullhorn fa-lg"></i> Notify Me</a></li>
			  </ul>
			</div>
		  </div>
		</nav>	