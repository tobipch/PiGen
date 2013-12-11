<!DOCTYPE html>
<html>
    <head>
        <title>Pi Generator - Imagemode</title>
        <?php include("sites/include.php"); ?>
        <script src="scripts/jquery-1.10.2.min.js"></script>
        <script src="scripts/colpick/colpick.js"></script>
        <script src="draw_image.js"></script>
        <script src="script.js"></script>
        <link rel="stylesheet" href="scripts/colpick/colpick.css" />
    </head>
    <body onload="loadImage();">
        <?php include("sites/header.php"); ?>
        <div id="modeContainer">
            <a href="index.php"><input type="button" class="modeBtn" value="Standard"/></a>
            <a href="timemode.php"><input type="button" class="modeBtn" value="Timemode"/></a>
            <a href="guessmode.php"><input type="button" class="modeBtn" value="Guessmode"/></a>
            <input type="button" class="modeBtn active" value="Imagemode" />
        </div>
        <div class="actionContainer" id="i_actionContainer">
            <div id="imgBtnContainer">
                <input type="button" class="optionBtn" id="optionBtn_size" onclick="changeSize();"/>
                <input type="button" onclick="loadImage();" id="i_startBtn" class="startBtn"></input>
                <input type="button" id="optionBtn_color" class="optionBtn" onclick="loadColorChoice();" />
                <input type="button" id="optionBtn_settings" class="optionBtn" onclick="loadImageSettings();" />
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
            
            <div id="imageSettingsContainer">
                <form action="#" id="imageSettingsForm">
                    <label for="fill_bool">Fill</label>
                    <input type="radio" name="fill_bool" class="imageSettingsRadioButton fill_true" /> Yes <input type="radio" name="fill_bool" class="imageSettingsRadioButton fill_false" /> No<br />
                    
                    <label for="stroke_bool">Line</label>
                    <input type="radio" name="stroke_bool" class="imageSettingsRadioButton stroke_true" /> Yes <input type="radio" name="stroke_bool" class="imageSettingsRadioButton stroke_false" /> No<br />
                    
                    <label for="stroke_width">Line Width</label>
                    <input type="range" name="stroke_width" id="stroke_width" min="1" max="7" step="1" value="1"/><br />
                </form>
                <input type="button" value="Apply" id="settingsApplyBtn" class="startBtn" onclick="setSettings();">
            </div>
        </div>
    </body>
</html>

