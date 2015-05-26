<?php

if(isset($_POST['pass']) && $_POST['pass'] === "DWWIGIWEB"){
		define('APP_RAN', 'true'); 
		echo"dsfdfsdfdf";
        include("secureGOOGLY.php");
}else{?>

            <form method="POST" action="">
            Pass: <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
<?php
}
?>