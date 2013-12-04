<!DOCTYPE html>
<html>
    <head>
        <title>Pi Generator</title>
        <link rel="stylesheet" href="style.css" defer />
        <script src="script.js" defer="defer"></script>
    </head>
    <body>
        <?php include("sites/header.php"); ?>
        <?php include("sites/settings.php"); ?>
        <div id="modeContainer">
            <input type="button" class="modeBtn active" value="Standard"/>
            <a href="timemode.php"><input type="button" class="modeBtn" value="Timemode"/></a>
            <a href="guessmode.php"><input type="button" class="modeBtn" value="Guessmode"/></a>
            <a href="imagemode.php"><input type="button" class="modeBtn" value="Imagemode" /></a>
        </div>
        <div class="actionContainer" id="s_actionContainer">
            <input type="text" class="valInput" id="s_valInput" value="1" autofocus="true">
            <input type="button" value="Click Me!" class="startBtn" id="clickMeBtn" onclick="addPos(document.getElementById('s_valInput').value);"/>
            <input type="button" value="Reset" id="resetBtn" onclick="reset();"/>
        </div>
        <p id="position">[Pos: 0]</p>
        <div id="piContainer">
            <p id="pi">3.</p>
        </div>
    </body>
</html>