<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pi Generator - Release Notes</title>
        <?php include("include.php"); ?>
    </head>
    <body>
        <?php include("header.php");?>
        <div class="backBtn" onclick="history.back();"></div>
        <div id="releaseNotes_container">
            <div class="version_notes" id="beta0842">
                <h1 class="version_title">BETA.0842</h1>
                <ul class="releaseNotes_list">
                    <li class="releaseNotes_point">The Pi Generator, now has a Favicon and a <a href="../images/logo.png">Logo</a> by <a href="https://github.com/fabiocofano">@fabiocofano</a></li>
                    <li class="releaseNotes_point">I made the Pi Generator Guessmode ways more secure than it was (SQL Injections where possible and you could change your score in the browser)</li>
                </ul>
            </div>
            <div class="version_notes" id="beta0841">
                <h1 class="version_title">BETA.0841</h1>
                <ul class="releaseNotes_list">
                    <li class="releaseNotes_point">The Pi Generator is now on <a href="http://tobip.ch/pigen">tobip.ch/pigen</a>!</li>
                    <li class="releaseNotes_point">Faster Access in cause of faster Server</li>
                </ul>
            </div>
            <div class="version_notes" id="beta084">
                <h1 class="version_title">BETA.084</h1>
                <ul class="releaseNotes_list">
                    <li class="releaseNotes_point">80% Speed Improvement. Pi will now be safed in the local-storage. Implementation by <a href="https://github.com/fabiocofano">fco</a>!</li>
                    <li class="releaseNotes_point">If submitted Score with no name in the Guessmode, it won't be saved!</li>
                </ul>
            </div>
            <div class="version_notes" id="beta083">
                <h1 class="version_title">BETA.083</h1>
                <ul class="releaseNotes_list">
                    <li class="releaseNotes_point">Guessmode Scores are now saved in a highscore list, which also can be viewed.</li>
                    <li class="releaseNotes_point">Massive Speed improvement</li>
                    <li class="releaseNotes_point"><a href="https://github.com/PixelWizard/PiGen" target="_blank">PiGen is now on Github</a>! ♪ Dance ♪! Be Happy =)</li>
                </ul>
            </div>
            <div class="version_notes" id="beta082">
                <h1 class="version_title">BETA.082</h1>
                <ul class="releaseNotes_list">
                    <li class="releaseNotes_point">The query limit is now repealed</li>
                    <li class="releaseNotes_point">Added Setting-Menu</li>
                </ul>
            </div>
            <div class="version_notes" id="beta081">
                <h1 class="version_title">BETA.081</h1>
                <ul class="releaseNotes_list">
                    <li class="releaseNotes_point">Implemented a Release Notes List (This Site)</li>
                    <li class="releaseNotes_point">Possibility to use the Enter-Key as well as the Button</li>
                    <li class="releaseNotes_point">Code optimization (Header is now PHP-Driven)</li>
                </ul>
            </div>
        </div>
    </body>
</html>