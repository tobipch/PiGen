<?php
	$name = utf8_decode($_POST["sendScore_name"]);
	$score = utf8_decode($_POST["sendScore_score"]);
	
	if($name != ""){
        $host = "tobipch.mysql.db.internal";
        $username = "tobipch_pigen";
        $password = "pi3141gen";
        
        $db = mysql_connect($host,$username,$password) or die("Couldn't connect to Database!");
        $db_connect = "use tobipch_pigen";
        $db_sendData = "insert into highscore values('".$name."',".(int)$score.",default);";
        
        mysql_query($db_connect) or die("Couldn't find proper Database!");
        $res = mysql_query($db_sendData) or die ("Couldn't run SQL Code. Check it");
    }
    header('Location: ../guessmode.php');
?>