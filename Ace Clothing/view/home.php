<?php
	
	require_once('./inc/functions.php');
	require_once('./controller/clotheController.php');

	$functions = new Functions();
	$clotheController = new clotheController();

	
	$clothes = json_decode($clotheController->getAll());
	shuffle($clothes);

	
	if(isset($_GET['clothe_id'])){
		$id = $_GET['clothe_id'];

		$clotheController->buy($id);
	}

	
	if (isset($_GET['clean'])) {
		$clotheController->destroy();
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="view/style.css">
	</head>
	<body>
		<h1 class="title">List's of clothes</h1>
		<a href="?clean" class="clean">For Men & Women</a>
		<div id="clothes" class="container">

			<?php
				for ($i=0; $i < count($clothes); $i++) { 
			?>

					<div class="clothe-card">
						<img src="<?= $clothes[$i]->image ?>" alt="<?= $clothes[$i]->name ?>" />
						<h5><?= $clothes[$i]->name ?></h5>

					<?php
						if($functions->alreadyPurchased($clothes[$i]->id)){
							echo "<p class='purchased'>Purchased</p>";
						}else{
							echo "<a href='?p=final&clothe_id=".$clothes[$i]->id."'>purchase</a>";
						}
					?>

								
						<div class="info">
							<p>Gender - <?= $clothes[$i]->gender ?></p>
							<p>Material - <?= $clothes[$i]->material ?></p>
							<p>Color- <?= $clothes[$i]->color ?></p>
							<p>Origin - <?= $clothes[$i]->origin ?></p>
							<p>Type - <?= $clothes[$i]->type ?></p>
						</div>
					</div>
					

			<?php
				}
			?>
		</div>

		<footer>
		</footer>
	</body>
</html>