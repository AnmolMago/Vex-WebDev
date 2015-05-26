<?php
if(!isset($_GET['data'])){
	echo '<div id="teams">
	<img src="i/teams/356B.jpg" width="800px" style="border:10px solid #ccc;">
	<img src="i/teams/356E.jpg" width="800px" style="border:10px solid #ccc;">
	<img src="i/teams/356X.jpg" width="800px" style="border:10px solid #ccc;">
	<img src="i/teams/356Y.jpg" width="800px" style="border:10px solid #ccc;">
</div>';
}else{
	$team = $_GET['data'];
	echo '
<div id="teams" style="background:url(i/teams/'.$team.'.jpg); background-size:800px 500px;border:10px solid #ccc;">
</div>';
}
?>