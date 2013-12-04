<!DOCTYPE html>
<html>
    <head>
        <title>Pi Generator - Guessmode</title>
        <link rel="stylesheet" href="style.css" />
        <script src="script.js"></script>
    </head>
    <body>
        <?php include("sites/header.php"); ?>
        <?php include("sites/settings.php"); ?>
        <div id="modeContainer">
            <a href="index.php"><input type="button" class="modeBtn" value="Standard"/></a>
            <a href="timemode.php"><input type="button" class="modeBtn" value="Timemode"/></a>
            <input type="button" class="modeBtn active" value="Guessmode"/>
            <a href="imagemode.php"><input type="button" class="modeBtn" value="Imagemode" /></a>
        </div>
        <div id="resultContainer">
            <img src="images/correct.png" id="correct" />
            <img src="images/false.png" id="false" />
            <div id="sendScoreContainer">
                <form action="sites/sendHighscore.php" method="post">
                    <input type="text" name="sendScore_score" id="sendScoreScoreHidden" />
                    <input type="text" name="sendScore_name" id="sendScoreNameInput" placeholder="Name for Score" />
                    <input type="submit" id="sendScoreButton" value="" />
                </form>
            </div>
        </div>
        <div class="actionContainer" id="g_actionContainer">
            <input type="text" class="valInput" id="g_valInput" value="1" maxlength="1" autofocus="true" />
            <button class="startBtn" id="g_startBtn" onclick="guessNumber(document.getElementById('g_valInput').value);"></button>
            <div id="points">0 P.</div>
            <a href="sites/highscoreList.php"><div id="showHighscore"></div></a>
        </div>
        <p id="position">[Pos: 0]</p>
        <div id="piContainer">
            <p id="pi">3.</p>
        </div>
    </body>
</html>