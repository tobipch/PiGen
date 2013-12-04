<!DOCTYPE html>
<html>
    <head>
        <title>Pi Generator - Timemode</title>
        <link rel="stylesheet" href="style.css" />
        <script src="script.js"></script>
    </head>
    <body>
        <?php include("sites/header.php"); ?>
        <?php include("sites/settings.php"); ?>
        <div id="modeContainer">
            <a href="index.php"><input type="button" class="modeBtn" value="Standard"/></a>
            <input type="button" class="modeBtn active" value="Timemode"/>
            <a href="guessmode.php"><input type="button" class="modeBtn" value="Guessmode"/></a>
            <a href="imagemode.php"><input type="button" class="modeBtn" value="Imagemode"/></a>
        </div>
        <div class="actionContainer" id="t_actionContainer">
            <input type="text" class="valInput" id="t_valInput" value="1" autofocus="true">
            <input type="button" class="startBtn" id="t_startBtn" onclick="addPosEachSecond(document.getElementById('t_valInput').value);"/>
            <input type="button" class="optionBtn" id="optionBtn_pause" onclick="pauseInterval();" />
            <input type="button" value="Reset" id="resetBtn" onclick="reset();"/>
        </div>
        <p id="position">[Pos: 0]</p>
        <div id="piContainer">
            <p id="pi">3.</p>
        </div>
    </body>
</html>