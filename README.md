<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>Tes - SHOUTcast HTML5 Radio Player</title>
        <meta name="description" content="SHOUTcast">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--300-->
        <meta property="og:image" content="https://cdn.radiobintangtenggara.com/images/fbProfile_logo.png" />

        <link id="favicon" rel="shortcut icon" type="image/png" href="https://cdn1.bintangtenggarafm.com/images/favicon.png" />
        <link rel="apple-touch-icon" href="https://cdn1.bintangtenggarafm.com/images/iOS-76x76.png">
        <link rel="android-touch-icon" href="https://cdn1.bintangtenggarafm.com/images/Android-76x76.png" />
        
        
        <link href='https://bintangtenggarafm.com/v3/css/kastol.css' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400" type="text/css" rel="stylesheet">
</head>
<body>
    <!--[if lt IE 10]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <div id="preloader">
    <div id="loader"></div>
</div>
    
    <script src="https://cdn.jsdelivr.net/jquery/2.1.4/jquery.min.js"></script> 
    <script src='https://ajax.bintangtenggarafm.com/ajax/jQuery/jquery.vp.min.js?build=13150'></script>
    
    <script>
        // This script will call Kast player
        // please add your options (host, port, version, etc..)
        // read the docs for more available options
        $.kast({
            host: "live.prodjradio.net",
            port: 8050,
            version: 1,
            sid: 1,
            directStreamURL: 'https://live.prodjradio.net:8065/stream',
            artworkUrl100: ['https://warningfm.github.io/v3/images/no-cover-large.png'],
            minimizeMaximize: false,
            colors: 'dynamic',
            position: 'left',
            continuous: true
        })
    </script>
    </body>
</html>
