<?php
$content = array(
	"356B" => array(
		1=>"Rohan Sharma",
		2=>"Anmol Mago",
		3=>"Hassan Gondal",
		4=>"Harshkumar Lad",
		5=>"Prabh Chaudary"
	),
	"356E" => array(
		1=>"Jaskaran Singh",
		2=>"Dhrumil Shah",
		3=>"Kunal Chopra",
		4=>"Sahil Sharma",
		5=>"Harshiv Patel"
	),
	"356X" => array(
		1=>"Abhinav Shamnani",
		2=>"Huzafah Gondal",
		3=>"Mathu Yogan",
		4=>"Veerpal Brar",
		5=>"Bikram Dhaliwal"
	),
	"356Y" => array(
		1=>"Senthura Yogarajan",
		2=>"Ashton Ramnauth",
		3=>"Nana Abekah",
		4=>"Ranbir Singh",
		5=>"Ishaan LastName"
	)
);
if(!isset($_GET['data'])){
	$team = "356B";
}else{
	$team = $_GET['data'];
}
?>
<div id="teams">
    <ul id="teamsPicker">
        <a href="./teams/356B"><li>356B</li></a>
        <a href="./teams/356E"><li>356E</li></a>
        <a href="./teams/356X"><li>356X</li></a>
        <a href="./teams/356Y"><li>356Y</li></a>
    </ul>
    <div class="people">
    	<?php
        	for($i = 1; $i <= 2; $i++){
				$person = $content[$team][$i];
				$imageExists = file_exists('../i/teams/'.$team.'/'.str_replace(" ", "", $person).'.png');
				if($imageExists){
					$image = './i/teams/'.$team.'/'.str_replace(" ", "", $person).'.png';
				}else{
					$image = './i/teams/'.$team.'/unknown.png';
				}
				echo '<div class="person person2">
						  <img width="140" height="140" src="'.$image.'" />
						  <p>'.$person.'</p>
					  </div>';
			}
		?>
    </div>
    <div class="people">
    	<?php
        	for($i = 3; $i <= 5; $i++){
				$person = $content[$team][$i];
				$imageExists = file_exists('../i/teams/'.$team.'/'.str_replace(" ", "", $person).'.png');
				if($imageExists){
					$image = './i/teams/'.$team.'/'.str_replace(" ", "", $person).'.png';
				}else{
					$image = './i/teams/'.$team.'/unknown.png';
				}
				echo '<div class="person person3">
						  <img width="140" height="140" src="'.$image.'" />
						  <p>'.$person.'</p>
					  </div>';
			}
		?>
    </div>
</div>