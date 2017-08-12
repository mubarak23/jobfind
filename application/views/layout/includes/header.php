<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jobfind | Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="jobs">Jobfind</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>jobs"><i class="glyphicon glyphicon-home">Home</i><span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url(); ?>jobs"><i class="glyphicon glyphicon-hourglass">Browse Jobs</i></a></li>
		<li><a href="users/register"><i class="glyphicon glyphicon-user">Register</i></a><li>
		<li><a href="login.html"><i class="glyphicon glyphicon-log-in">Login</i></a></li>
        <li><a href="jobs/add"><i class="glyphicon glyphicon-log-in">Add Job</i></a></li>
        <li> </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">

<div class="col-md-12" id="search-area">
	<div class="row">
	
	<form class="form-group" method="post" action="jobs/search">
		<div class="col-md-3">
		<input  class="form-control" type="text" id="keywords" name="keyword" placeholder="Enter a Keyword" />
		</div>
		<div class="col-md-3">
		<select id="state-select" class="form-control" name="state">
			<option>Select State</option>
			<option value="Kaduna">Kaduna</option>
			<option value="kano">Kano</option>
			<option value="jos">Jos</option>
			<option value="	Bauchi">Bauchi</option>
			<option value="Katsina">Katsina</option>
			<option value="Abuja">Abuja</option>
			<option value="nasarawa">Nasarawa</option>
		</select>
		</div>
		<div class="col-md-3">
			<select id="state-select" class="form-control" name="category">
			<option>Select Category</option>
			<option value="Baf">Banking And Finance</option>
			<option value="Tel">Telecommunication</option>
			<option value="Me">Media</option>
			<option value="	Tech">Techlonogy</option>
			<option value="Far">Food and Restaurant</option>
			<option value="Ras">Retail And Sale</option>
			<option value="Hec">Healthcare</option>
		</select>
		</div>
		<div class="col-md-3">
		<button type="submit" name="search" class="btn btn-default btn-lg btn btn-success btn-block">Search</button>
		</div>
		</form>
	</div>
	
</div>