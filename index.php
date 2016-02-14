<!-- I N D E X -->

<?php
	require_once 'config/library.php';
	require_once 'config/settings.php';
?>





<!DOCTYPE html>
<html>
<head>
	<title>Cerita Anak</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="stylesheet.css">

</head>






<body>

	<div id="main-wrapper">
		<div class="nav-container">
			<?php require_once LAYOUT.'nav.php'; ?>
		</div>
		<main>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<?php require_once LAYOUT.'main.php'; ?>
					</div>
				</div>
			</div>			
		</main>
		<footer><?php require_once LAYOUT.'footer.php'; ?></footer>
	</div>

</body>
</html>