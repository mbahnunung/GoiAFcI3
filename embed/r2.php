<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8" />
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
              }#player{height:100%;width:100%;padding:0;margin:0}
              
       </style>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       <script src="https://cdnjs.loli.net/ajax/libs/hola_player/1.0.89/hola_player.js"></script>
	   
       <div align="center">
        <video preload="none" class="video-js vjs-default-skin" width="596" height="340" controls autoplay>
    <source src="https://streaming-a-802.cdn.nextologies.com/SBS_Live_HD/playlist.m3u8" type="application/x-mpegURL" />
  </video>
  <script>
    (function(){
      window.hola_player({
        poster: '../img/thumbs/net-tv-stream.jpg?v=8.3.2',
        watermark: {
          image: '',
          title: 'NET.',
          position: 'top-left',
          fadeTime: null,
        },
        controls_watermark: {
          image: 'logo.svg',
          url: 'https://tv.mbahnunungonline.net',
        },
      });
    })();
  </script>
     </div>
   </body>
</html>