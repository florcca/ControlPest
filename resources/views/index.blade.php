@extends('template.main')
@section('titulo')
ControlPEST
@endsection
@section('contenido')
<head>
  <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<body>
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
    <li><img src="data1/images/im4.png" alt="im4" title="im4" id="wows1_0"/></li>
    <li><img src="data1/images/fumigar.png" alt="fumigar" title="fumigar" id="wows1_1"/></li>
    <li><a href="http://wowslider.net"><img src="data1/images/im1.png" alt="image slider" title="im1" id="wows1_2"/></a></li>
    <li><img src="data1/images/im2.png" alt="im2" title="im2" id="wows1_3"/></li>
  </ul></div>
  <div class="ws_bullets"><div>
    <a href="#" title="im4"><span><img src="data1/tooltips/im4.png" alt="im4"/>1</span></a>
    <a href="#" title="fumigar"><span><img src="data1/tooltips/fumigar.png" alt="fumigar"/>2</span></a>
    <a href="#" title="im1"><span><img src="data1/tooltips/im1.png" alt="im1"/>3</span></a>
    <a href="#" title="im2"><span><img src="data1/tooltips/im2.png" alt="im2"/>4</span></a>
  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">html slideshow</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>  
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
</body>
@endsection
