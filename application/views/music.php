<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Muscioon</title>
    <base href="<?php  echo base_url()."static/";?>"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="back">
    <div class="container">
        <div class="player">
            <div id="cd" class="cd">
                <div class="out">
                </div>
                <div id="album" class="album">
                </div>
                <div id="in" class="in">
                </div>
            </div>
            <div class="action">
                <a href="javascript:m_play()"><img id="m_play" src="images/play.png"></a>
                <input id="range" type="range" min="0" max="10" value="5" onchange="volume(this.value)">
                <a href="javascript:next_music()"><img id="next_music" src="images/forward.png"></a>
            </div>
            <div class="info">
                <span id="music_name"></span><span id="artist"></span>
            </div>
            <div id="lrc" class="lrc">
            </div>
        </div>
    </div>
</div>
<audio id="player">
</audio>
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/player.js" type="text/javascript"></script>
</body>
</html>