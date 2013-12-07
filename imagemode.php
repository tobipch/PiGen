<!DOCTYPE html>
<html>
    <head>
        <title>Pi Generator - Imagemode</title>
        <?php include("sites/include.php"); ?>
        <script src="script.js"></script>
    </head>
    <body>
        <?php include("sites/header.php"); ?>
        <div id="modeContainer">
            <a href="index.php"><input type="button" class="modeBtn" value="Standard"/></a>
            <a href="timemode.php"><input type="button" class="modeBtn" value="Timemode"/></a>
            <a href="guessmode.php"><input type="button" class="modeBtn" value="Guessmode"/></a>
            <input type="button" class="modeBtn active" value="Imagemode" />
        </div>
        <div id="notification">
        <img src="images/notification.png" id="notificationImage" />
        <span id="notificationHoverHint">Hover Me!</span>
        <span id="notificationText">This Website has to compute up to <b>1 Million Operations</b>.<br />It takes at maximum <b>20-25 seconds</b> to load the biggest image, so hang on ;-)</span>
        </div>
        <div class="actionContainer" id="i_actionContainer">
            <div id="imgBtnContainer">
                <input type="button" class="optionBtn" id="optionBtn_size" onclick="changeSize();"/>
                <input type="button" onclick="loadImage();" id="i_startBtn" class="startBtn"></input>
                <input type="button" id="optionBtn_color" class="optionBtn" onclick="loadColorChoice();" />
            </div>
            <br />
            <canvas id="imageCanvas" class="canvas" height="200" width="200"></canvas>
            <div id="colorChoiceContainer">
                <h3>Choose <a href="http://tobias-peter.com/colortools" target="_blank">Hex-Color</a> for number...</h3>
                <div class="colorChoiceDiv" id="colorChoice0">0 <input type="text" id="colorChoiceInput0" class="colorChoiceInput" /></div>
                <div class="colorChoiceDiv" id="colorChoice1">1 <input type="text" id="colorChoiceInput1" class="colorChoiceInput" /></div>
                <div class="colorChoiceDiv" id="colorChoice2">2 <input type="text" id="colorChoiceInput2" class="colorChoiceInput" /></div>
                <div class="colorChoiceDiv" id="colorChoice3">3 <input type="text" id="colorChoiceInput3" class="colorChoiceInput" /></div>
                <div class="colorChoiceDiv" id="colorChoice4">4 <input type="text" id="colorChoiceInput4" class="colorChoiceInput" /></div>
                <div class="colorChoiceDiv" id="colorChoice5">5 <input type="text" id="colorChoiceInput5" class="colorChoiceInput" /></div>
                <div class="colorChoiceDiv" id="colorChoice6">6 <input type="text" id="colorChoiceInput6" class="colorChoiceInput" /></div>
                <div class="colorChoiceDiv" id="colorChoice7">7 <input type="text" id="colorChoiceInput7" class="colorChoiceInput" /></div>
                <div class="colorChoiceDiv" id="colorChoice8">8 <input type="text" id="colorChoiceInput8" class="colorChoiceInput" /></div>
                <div class="colorChoiceDiv" id="colorChoice9">9 <input type="text" id="colorChoiceInput9" class="colorChoiceInput" /></div>
                <input type="button" value="Apply" id="colorChoiceApplyBtn" class="startBtn" onclick="setNewColors();">
            </div>
        </div>
    </body>
</html>

