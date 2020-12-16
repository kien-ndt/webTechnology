<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Technology</title>
</head>
<body>
	<h1> -->
	
		<?php
			// import class trong file system/libs

			session_start();	
			if (!isset($_SESSION['cart']['total'])){
				$_SESSION['cart']['total'] = (int)0;
			}
			if (!isset($_SESSION['cart']['count'])){
				$_SESSION['cart']['count'] = (int)0;
			}
			spl_autoload_register(function($class) {
				include_once 'system/libs/'.$class.'.php';
			});
			
			include_once 'app/config/config.php';

			$main = new Main();
		
		?>
	<!-- </h1>
</body>
</html>			 -->