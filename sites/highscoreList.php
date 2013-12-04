<?php
	$host = "mysql15.000webhost.com";
	$username = "a9696726_pigen";
	$password = "pi3141";
	
	$db = mysql_connect($host,$username,$password) or die("Couldn't connect to Database!");
	$db_connect = "use a9696726_pigen";
	$db_getData = "select * from highscore order by score desc";
	
	mysql_query($db_connect) or die ("Couldn't find proper Database!");
	$r_getData = mysql_query($db_getData) or die ("Couldn't run SQL Code. Check it!");
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pi Generator - Highscore List</title>
        <link rel="stylesheet" href="../style.css" />
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="backBtn" onclick="history.back();"></div>
        <table id="highscoreList">
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Score</th>
            </tr>
			<?php 
				$counter = 0;
				while($a_getData = mysql_fetch_array($r_getData)){
				$counter++;
			?>
			    <tr>
			        <td><?=$counter?></td>
			        <td><b><?=$a_getData["Name"]?></b></td>
			        <td><?=$a_getData["Score"]?></td>
			    </tr>
			<?php 
				}
			?>
        </table>
    </body>
</html>