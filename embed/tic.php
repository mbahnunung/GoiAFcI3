<!DOCTYPE html>
<html lang="en">
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
       
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <!-- Start Meta Ads -->
       <meta name="platform" content="desktop" />
       <meta name="site_name" content="streaming" />
       <!-- End Meta Ads -->
       <title>Live Streaming</title>
       <style>
           body {
               margin:0;
               padding:0;
               overflow: hidden;
           }
       </style>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       <script src="https://warningfm.github.io/ajax/libs/hola_player/package/dist/hola_player.js"></script>
	   
       <div align="center">
        <video poster="../img/thumbs/tic.jpg" id="video-player" class="video-js vjs-fluid vjs-default-skin" height="340" width="596" controls autoplay>
        <source src="http://202.93.133.3:1935/svr2/tic.com.stream_720p/playlist.m3u8" type="application/x-mpegURL" />
       </video>
     <script>
      window.hola_player();
     </script>
     </div>
   </body>
</html>