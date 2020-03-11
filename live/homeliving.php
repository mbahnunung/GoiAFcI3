<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Living</title>
<link type='text/css' rel='stylesheet' href='https://cdn1.mbahnunungonline.net/css/dist/v7/jwplayer.css' />
<link type='text/css' rel='stylesheet' href='https://cdn1.mbahnunungonline.net/css/dist/v7/player.css' />
<style type="text/css">
        body { margin:0 auto; padding:0; background:#EEE; overflow: hidden; }
        #title { font:bold 24px/36px Arial, sans-serif; color:#000; margin:40px auto 10px auto; display:none; text-shadow:#FFF 2px 2px 0; }
        #description { font:13px/20px Arial, sans-serif; margin:15px auto; display:none; text-shadow:#FFF 1px 1px 0; }
    </style>
<script type="text/javascript">
    </script>
<script src="//ssl.p.jwpcdn.com/player/v/8.2.0/jwplayer.js?v=1.1.0.0.222"></script>
<script>jwplayer.key = "9dOyFG96QFb9AWbR+FhhislXHfV1gIhrkaxLYfLydfiYyC0s";</script>
</head>
<body bgcolor="transparent" text="white" topmargin="0" leftmargin="0" rightmargin="0">
<center>
<div id="streaming"></div>
<script type="text/javascript">
var meta = document.createElement('meta');
meta.name = "referrer";
meta.content = "no-referrer";
document.getElementsByTagName('head')[0].appendChild(meta); 
    jwplayer("streaming").setup({
		"key": "",
		primary : 'html5',
		width: '596',
		height: '340',
		skin: {"active": "#00CCCC", "inactive": "#CCCCCC", "name": "glow"},
		abouttext: 'Design by : mbah nunung Online',
		aboutlink: 'http://mbahnunungonline.net',
		autostart: 'true',
		stretching: 'uniform',
		aspectratio: '16:9',
		file: "http://edge.linknetott.swiftserve.com/live/BSgroup/amlst:homelivinghd/playlist.m3u8",
		title: "homelivinghd",
		image: "https://oona.tv/assets/img/channels/homeandliving.png"
	});
	jwplayer().onError(function(){
		jwplayer().load({
			file: "http://edge.linknetott.swiftserve.com/live/BSgroup/amlst:homelivinghd/playlist.m3u8",
			title: "homelivinghd",
			//image:""
		});jwplayer().play();
		jwplayer().onError(function(){
			jwplayer("streaming").setup({
				primary: "html5",
				file: "http://edge.linknetott.swiftserve.com/live/BSgroup/amlst:homelivinghd/playlist.m3u8",
				title: "homelivinghd",
				//image:""
			});			
			jwplayer("streaming").setup({
				primary: "html5",
				file: "http://edge.linknetott.swiftserve.com/live/BSgroup/amlst:homelivinghd/playlist.m3u8",
				title: "homelivinghd",
				//image:""
			});			
			jwplayer().onError(function(){
				jwplayer("streaming").setup({
					title: "homelivinghd",
					file:"https://edge.nim.mivo.tv/video/assets/oops.m3u8",
					image:"error.jpg"
				});
			});	
		});
	});
jwplayer().on('play', function(){
        setTimeout(function(){
            var textAlt = document.querySelectorAll('#' + jwplayer().id + ' .jw-controlbar-center-group .jw-text-alt')[0];
            if(textAlt) textAlt.innerHTML = 'homelivinghd';
        },300);
    });
</script>
</center>
</body>
</html>