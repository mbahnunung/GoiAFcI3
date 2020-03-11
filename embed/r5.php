<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Live Streaming</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale = 1.0, user-scalable = no, width=device-width, height=device-height, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="description" content="Live Streaming" />
        
        <link rel="stylesheet" href="//vjs.zencdn.net/5.4.6/video-js.min.css?v=1.8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

            <style>
           body {
               margin:0;
               padding:0;
               overflow: hidden;
               background:#2f3542;
           }
       </style>
       <center>
    <script>
        var video_title = "Live Streaming";
    </script>
        <div id="video" class="fp-slim fp-mute"></div>
        <script src="../js/nnVideo.core.js?v=98c76261ff1">
        {
            target      : 'video',
            title       : 'Live Streaming',
            autoplay    : false,
            mute        : false,
            live        : true,
            imageUrl    : "../img/thumbs/BAextreme-600x403.jpg?v=8.3.2",
            channel     : "livestreaming",
            videoUrl    : "https://kastproxy-us.herokuapp.com/http://rr1.dens.tv/h/h15/index.m3u8",
            adRules     : '',
            features: {
                loadByDiv:true,
                smartAutoplay: true            }
        }
        </script>
        </center>
        </body>
</html>
