<div id="home">
    <div class="buffer">
        <div id="slideshow">
            <ul class="bjqs">
                <li><img src="i/slideshow/worlds.JPG" title="We made it! Team356 is heading to the world championships!"/></li>
                <li><img src="i/slideshow/1.JPG" title="Team 356B become tournament finalists and take home sportsmanship awards at Ottawa National VRC Tournament!"/></li>
                <li><img src="i/slideshow/2.JPG" title="Team 356B and their alliance partner Team 1104Z" /></li>
                <li><img src="i/slideshow/3.JPG" title="Team 356 hosts iDesign Solution VRC qualifying event." /></li>
                <li><img src="i/slideshow/4.JPG" title="Team 356X and 356E take home tournament finalists and excellence at York Region VRC Tournament" /></li>
                <li><img src="i/slideshow/5.JPG" title="Team 356B become tournament finalists and take home judges award!" /></li>
                <li><img src="i/slideshow/6.JPG" title="The audience enjoys Team 356B's win!" /></li>
                <li><img src="i/slideshow/7.JPG" title="Team 356E become tournament champions at Central Toronto VRC!" /></li>
                <li><img src="i/slideshow/8.JPG" title="Team 356E poses with their champion robot!" /></li>
            </ul>
        </div>
        <?php 
			include('util.php');
			$posts = getPDO("VexApp_Posts")->selectPosts();
			if(count($posts) < 1){
				echo "Posts could not be reached!";
				return;
			}else{
				$countPost = 0;
				foreach($posts as $post){
					if(strlen($post['post']) > 500){
						$post['post'] = substr($post['post'], 0, 494)." [...]";
					}
					$countPost++;
					$type = "rightPost";
					if($countPost % 2 == 0)
						$type = "leftPost";
					echo '<div class="'.$type.'">
					<div class="postHead">
						<span></span>
						<ul>';
						if(strlen($post['video']) > 0)
							echo '<li><img id="videoIcon" src="i/video.png" onclick="video(\''.$post['video'].'\')"/></li>';
						if(strlen($post['pics']) > 0)
							echo '<li><img id="photoIcon" src="i/pics.png" onclick="photo(\''.$post['pics'].'\')"/></li>';//foreach(str_split(";", $post['photos']) as $photo)					
					echo '</ul>
						<h2 onclick="window.location.href = \'article/'.$post['id'].'\'">'.$post['title'].'</h2>
					</div>
					<div class="postData">
						<p>'.$post['post'].'</p>
					</div>
				</div>';
				}
			}
		?>
    </div>
</div>