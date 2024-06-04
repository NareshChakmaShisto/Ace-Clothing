<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >

  <?php
	
	if(!isset($_GET['p'])){
		return require_once('./view/home.php');
	}
	
	switch ($_GET['p']) {
		case 'home':
		
			require_once('./view/home.php');
			break;

		case 'final':
			
			require_once('./view/final.php');
			break;
		
		default:
	
			require_once('./view/home.php');
			break;
	}

?>

  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>


  </body>