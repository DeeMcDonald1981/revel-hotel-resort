<?php 
if($page == 'home'){

	$current_home = 'current';
}elseif($page == 'about'){

	$current_about = 'current';

}elseif($page == 'contact'){

	$current_contact = 'current';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Revel Hotel & Resort | Welcome</title>
	<link rel="stylesheet" href="fontawesome-free-5.7.2-web/fontawesome-free-5.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
			<nav id="navbar" class="clearfix">
				<div class="container">
					<a href="index.php">
						<h1 class="logo">Revel Hotel & Resort</h1>
					</a>
					<div class="nav_icon">
						<div class="navbar"></div>
						<div class="navbar"></div>
						<div class="navbar"></div>
					</div>
					<ul>
						<li ><a class="<?php echo $current_home ?>" href="index.php">home</a></li>
						<li><a a class="<?php echo $current_about ?>" href="about.php">about</a></li>
						<li><a a class="<?php echo $current_contact ?>" href="contact.php">contact</a></li>
					</ul>
				</div><!-- container -->
			</nav>
	<?php 
		if($page =='home'){
		?>
		<div id="showcase">
			<div class="container">
				<div class="showcase_content">
					<h1><span class="text_primary">revel</span> in your visit</h1>
					<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse non quisquam magnam quasi fugiat ipsum?</p>
					<a class="btn" href="about.php" id="">regarding our resort </a>
				</div>	
			</div>
		</div>
	<?php
	}
	?>

		</header>
