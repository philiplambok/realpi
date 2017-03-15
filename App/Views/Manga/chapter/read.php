<!DOCTYPE html>
<html>
<head>
	<title><?= $data['manga']. '|' . $data['chapterNo'];?></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/style.css">
</head>
<body>
	<header></header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Previous <span class="sr-only">(current)</span></a></li>
					<li><a href="<?=base_url();?>">Home</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $data['manga']; ?><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chapter: <?= $data['chapterNo'] ?><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					<li><a href="#">Next</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<?php foreach ($data['image'] as $image): ?>
					<img src="<?=base_url()?>home/image/<?=$image->id?>" alt="image" class="img-responsive">
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<script src="<?=base_url()?>js/jquery-3.1.1.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
</body>
</html>