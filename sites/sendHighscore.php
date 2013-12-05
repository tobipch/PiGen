<?php
	$name = utf8_decode($_POST["sendScore_name"]);
	$score = utf8_decode($_POST["sendScore_score"]);
	
	if($name != ""){
        $host = "mysql15.000webhost.com";
        $username = "a9696726_pigen";
        $password = "pi3141";
        
        $db = mysql_connect($host,$username,$password) or die("Couldn't connect to Database!");
        $db_connect = "use a9696726_pigen";
        $db_sendData = "insert into highscore values('".$name."',".(int)$score.",default);";
        
        mysql_query($db_connect) or die("Couldn't find proper Database!");
        $res = mysql_query($db_sendData) or die ("Couldn't run SQL Code. Check it");
        echo($res);
        if($res){
            header('Location: ../guessmode.php');
        }
        else{
            echo($res);
        }
	}
?>