<?php
    $url  = $_GET['url'];
    $api  = "http://michaelbelgium.me/ytconverter/convert.php?youtubelink=$url";
    $data = file_get_contents($api);
    echo $data;
?>
