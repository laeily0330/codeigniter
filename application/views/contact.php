<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact - Blog Lelah Kuliah</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="container">
		<div class="row-xs-12 row-sm-12 row-md-12 row-lg-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Blog Lelah Kuliah</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url(); ?>/home">Home</a></li>
							<li><a href="<?php echo site_url(); ?>/about">About</a></li>
							<li class="active"><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
							<!--<li><a href="<?php echo site_url(); ?>/berita/7">News</a></li>-->
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Login</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			<div class="container-fluid">
				<form action="" method="POST" role="form">
					<legend>Feedback Form</legend>
								
					<div class="form-group">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input type="text" class="form-control" id="" placeholder="Name" name="nama">
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input type="email" name="email" id="inputEmail" class="form-control" value="" required="required" title="" placeholder="Email Address">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<textarea name="pesan" id="inputPesan" class="form-control" rows="3" required="required" placeholder="Message"></textarea>
							</div>
						</div>
					</div>
						<button type="submit" class="btn btn-primary">Submit</button>
				</form>				
			</div>			
		</div>
	</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>