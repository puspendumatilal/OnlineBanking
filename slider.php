<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/animate.min.css">
</head>
<body>
<h1></h1>

<div class="wrap">
  <h2></h2>
  <div id="cxslide_x" class="cxslide_x">
    <div class="box">
      <ul class="list">
        <li><a href="#1"><img src="image/1.jpg" width="1050" height="500"></a></li>
        <li><a href="#2"><img src="image/2.jpg" width="1050" height="500"></a></li>
        <li><a href="#3"><img src="image/3.jpg" width="1050" height="500"></a></li>
        <li><a href="#4"><img src="image/4.jpg" width="1050" height="500"></a></li>
        <li><a href="#5"><img src="image/5.jpg" width="1050" height="500"></a></li>
      </ul>
    </div>
  </div>
  
  
  
</div>

<script src="js/new.js"></script>
<script src="js/jquery.cxslide.min.js"></script>
<script>
$('#cxslide_x').cxSlide({
  plus: true,
  minus: true
});

$('#cxslide_y').cxSlide({
  type: 'y'
});

$('#cxslide_fade').cxSlide({
  events: 'mouseover',
  type: 'fade',
  speed: 300
});
</script>
</body>
</html>