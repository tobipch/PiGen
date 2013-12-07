<?php
	$name = htmlspecialchars(utf8_decode($_POST["sendScore_name"]));
	$score = htmlspecialchars(utf8_decode($_POST["sendScore_score"]));
	$referer = $_SERVER["HTTP_REFERER"];
	if($referer == "http://tobip.ch/pigen/guessmode.php"){
        if($name != ""){
            $host = "tobipch.mysql.db.internal";
            $username = "tobipch_pigen";
            $password = "";
            
            $db = mysql_connect($host,$username,$password) or die("Couldn't connect to Database!");
            $db_connect = "use tobipch_pigen";
            $db_sendData = "insert into highscore values('".$name."',".(int)$score.",default);";
            
            mysql_query($db_connect) or die("Couldn't find proper Database!");
            $res = mysql_query($db_sendData) or die ("Couldn't run SQL Code. Check it");
        }
    }else{
        echo("No, hacking doesn't works! Greetings TDP =D");
    }
    header('Location: ../guessmode.php');
?>