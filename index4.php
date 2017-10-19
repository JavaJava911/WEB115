<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Sample Responsive Design</title>
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<!-- icon pic -->

	<?php 
		include'vars.php';
	?>
		<?php include 'header.php'; ?>
			<?php include 'menu.php'; ?>
				<h1>NEWSLETTER</h1>
				<!--
				<br />
				<b>Warning</b>: include(header.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in <b>/home/daveb/public_html/web115/php/index2.php</b> on line <b>12</b>
				<br />
				<br />
				<b>Warning</b>: include(header.php) [<a href='function.include'>function.include</a>]: failed to open stream: No such file or directory in <b>/home/daveb/public_html/web115/php/index2.php</b> on line <b>12</b>
				<br />
				<br />
				<b>Warning</b>: include() [<a href='function.include'>function.include</a>]: Failed opening 'header.php' for inclusion (include_path='.:/usr/lib/php:/usr/local/lib/php') in <b>/home/daveb/public_html/web115/php/index2.php</b> on line <b>12</b>
				<br />
				-->



				<!-- 2 col 75,25 -->
				<div class="row">
					<div class="col-9 col-m-9">
						<?php echo"<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ipsam maiores, nam! Maxime illo ipsum velit consequatur, laborum autem quam expedita fuga quia, quisquam delectus, quo atque cum beatae rem.</p>";?>

							<p>I have a
								<?php echo $boat; ?> boat that is
									<?php echo $color; ?> and is worth
										<?php echo $price; ?>
							</p>

					</div>
					<div class="col-3 col-m-3">
						<a href="#"><img src="http://via.placeholder.com/250x175" alt="PH"> </a>
					</div>
				</div>

				<!-- footer -->
				<?php 
		include 'footer.php'; 
	?>
</body>

</html>
