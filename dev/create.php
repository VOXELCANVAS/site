<!doctype html>
<html lang="en">
  <head>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83861814-4', 'auto');
  ga('send', 'pageview');
</script>
    <title>CREATE | VOXELCANVAS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta id="eyecathe" property="og:image"/>
    <meta property="og:image" content="https://voxelcanvas.me/bmodel_withlogo.PNG" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="twitter:card" content="player">
    <meta name="twitter:site" content="@voxelcanvas">
    <meta name="twitter:creator" content="@voxelcanvas">
    <meta name="twitter:title" content="VOXELCANVAS">
    <meta name="twitter:image:src" content="<?php echo 'https://utautattaro.com/apis/images/' . $_GET['m'] . '.png'; ?>" />
    <meta name="twitter:description" content="voxel modeling creation platform">
    <meta name="twitter:player" content="<?php echo 'https://voxelcanvas.me/view/?m=' . $_GET['m'] ; ?>" />
    <meta name="twitter:player:width" content="640" />
    <meta name="twitter:player:height" content="480" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="https://voxelcanvas.me/fabi.PNG" />
</head>
  <body onload = "checkmobile()">
        <nav class="navbar  navbar-dark bg-dark">
          <a class="navbar-brand" href="#">
            <img src="voxelcanvas.png" width="150" class="d-inline-block align-top" alt="">
          </a>
        <ul class="nav nav-pills" style="font-size:20px;">
            <li class="nav-item">
              <a class="nav-link" style="margin: 3px 0px 0px 0px;" href="/">HOME</a>
            </li>
            <li class="nav-item">
              <p class="nav-link active" style="margin: 3px 0px 0px 0px;">CREATE</p>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="margin: 3px 0px 0px 0px;" href="/gallery">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="margin: 3px 0px 0px 0px;" href="/document">DOCUMENT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" style="margin: 3px 0px 0px 0px;" href="#">EULA</a>
            </li>
          </ul>
        </nav>
            <iframe id="container" frameborder=0 src="<?php echo './build/?m=' . $_GET['m'] .'&location='. $_GET['location'] .'&zoom='. $_GET['zoom'] .'&image='. $_GET['image']; ?>"></iframe>
  </body>
  <script>
   function checkmobile(){
     if( getDevice == 'sp' ){
    //スマホ
    window.location.href = "<?php echo './build/?m=' . $_GET['m']; ?>"; 
    }else if( getDevice == 'tab' ){
    //タブレット
    window.location.href = "<?php echo './build/?m=' . $_GET['m']; ?>"; 
    }else if( getDevice == 'other' ){
    //その他
    }
   }

   var getDevice = (function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
        return 'sp';
    }else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
        return 'tab';
    }else{
        return 'other';
    }
})();
   </script>
</html>