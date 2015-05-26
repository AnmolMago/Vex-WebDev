<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Team 356 - Castlebrooke VEX Robotics</title>
<base href="http://localhost/Vex/" target="_self">
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/simplyscroll.min.js"></script>
<script type="text/javascript" src="js/bjqs-1.3.min.js"></script>
<script type="text/javascript" src="js/Vex.js"></script>
<link href="css/style.css" rel="stylesheet"/>
<link type="text/css" rel="Stylesheet" href="css/bjqs.css" />
<link type="text/css" rel="Stylesheet" href="css/simplyscroll.css" />
</head>

<body>
	<div id="viel" onClick='$("#video iframe").attr("src","");$("#viel").hide();$("#video").hide();$("#photos").empty();$("#photos").hide();'></div>
	<div id="video"><iframe width="800" height="500" src="" frameborder="0" allowfullscreen></iframe></div>
    <div id="photos"></div>
    <?php
		include('modules/header.php');
       	if(isset($_GET['action']) && strpos($_GET['action'],'.php') == false){
			if(!is_file('modules/' . $_GET['action'].'.php')){
				header('Location: ./');
				return;
				exit();
			}
			include('modules/' . $_GET['action'] . '.php');
		}else{
			include('modules/home.php');
		}
		include('modules/footer.php');
	?>
</body>
</html>