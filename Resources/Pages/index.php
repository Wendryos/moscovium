<?php 
require_once __DIR__ . "./../../Main/Essential/RedirectNotRoute.php";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Moscovium - Página Inicial </title>
</head>
 <body>
 	<h1> Hello Word ! </h1>
</body>
 <script type="text/javascript">
	
	window.addEventListener("load", () => {

		fetch("Main/Controller/UserController.php", {
				method: "POST",
				body: null
			}).then(response => response.json())
		    .then(res =>  {

		    	alert(res.message);
		});

	});


</script>


</html>