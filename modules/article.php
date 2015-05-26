<?php
if(!isset($_GET['data'])){
	
}
include_once("util.php");
$post = getPDO("VexApp_Posts")->select("*", "id", (string)$_GET['data']);
$post = $post[0];
if(!isset($post['title'])){
	
}
?>
<div id="post">
	<h2><?php echo $post['title']?></h2>
    <ul><?php 
						if(strlen($post['video']) > 0)
							echo '<li><img src="i/video.png" onclick="video(\''.$post['video'].'\')"/></li>';
						if(strlen($post['pics']) > 0)
							echo '<li><img src="i/pics.png" onclick="photo(\''.$post['pics'].'\')"/></li>';
					?></ul>
	<p><?php echo $post['post']?></p>
</div>