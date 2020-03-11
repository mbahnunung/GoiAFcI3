<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Live Streaming</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale = 1.0, user-scalable = no, width=device-width, height=device-height, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="description" content="Live Streaming" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flowplayer/7.2.7/skin/skin.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<style>
           body {
               margin:0;
               padding:10;
               overflow: hidden;
           }
       </style>
<script>
        var video_title = "Live Streaming";
    </script>
<div id="Streaming" class="fp-slim fp-mute"></div>
<script src="//cdn1.mbahnunungonline.net/nnVideo/nnVideo.core.js?v=9f75c5bc">
        {
            target      : 'Streaming',
            title       : 'Live Streaming',
            autoplay    : true,
            mute        : false,
            live        : true,
            imageUrl    : '../img/thumbs/Hits.jpg?v=8.3.2',
            channel     : 'livestreaming',
            videoUrl    : 'https:\/\/t4.mbahnunungonline.net\/uq2663\/h\/h37\/index.m3u8',
            fluid       : 'true',
            features: {
                loadByDiv:true,
                smartAutoplay: true            }
        }
        </script>
</body>
</html>
