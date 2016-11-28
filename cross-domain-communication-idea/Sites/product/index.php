<!DOCTYPE HTML>
<html lang="en">
<title>MengxuanCai_webSite_Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mx.css">
<link rel="stylesheet" href="mxsmall.css">
<link rel="stylesheet" href="font.css">
<head>
<style>
a{
  text-decoration: none;
}
html,body,h1,h2,h3,h4,h5 {font-family: "Lato", sans-serif}
.mySlides {display:none}
.mx-left, .mx-right, .mx-tag {cursor:pointer}
.mx-tag {height:15px;width:15px;padding:0;margin-top:6px}

.mx-content{max-width:980px;margin:auto}
.mx-navbar{list-style-type:none;margin:0;padding:0;overflow:hidden; background-color: #474747!important; color:white!important;}
.mx-navbar li{float:left}
.mx-navbar li a,
.mx-navitem{display:block;padding:8px 16px}

</style>
</head>
<body>
<div id="navbar">
<ul class="mx-navbar mx-left-align mx-light-grey mx-center mx-top mx-large">
<li class="mx-left" style="width:20% !important"><a href = "../" class="w3-text-teal">ZoomInBeauty</a></li>
  <li class="mx-left" style="width:20% !important"><a href="skincare">SkinCare</a></li>
  <li class="mx-left" style="width:20% !important"><a href="makeup.php">MakeUp</a></li>
  <li class="mx-left" style="width:20% !important"><a href="skincaretools.php">SkinCareTools</a></li>

</ul>

<!-- Content -->
<div class="mx-content mx-container" style="max-width:1100px;margin-top:10px;margin-bottom:80px">
  <div class="mx-section">
    <h1><b>Products</b></h1>
    <p>By Mengxuan_Cai</p>
  </div>

  <!-- Slideshow -->
  <div class="mx-display-container mySlides">
    <a href = "makeup.php"><img src="tomfordMakeup.jpg" style="width:100%"></a>
    <div class="mx-display-topright mx-text-white mx-container mx-padding-32 mx-hide-small">
      <span class="mx-white mx-padding-large mx-animate-bottom">MakeUp</span>
    </div>
  </div>
  <div class="mx-display-container mySlides">
    <a href = "skincare.php"><img src="tatcha.jpg" style="width:100%"></a>
    <div class="mx-display-topleft mx-text-white  mx-container mx-padding-32 mx-hide-small">
      <span class="mx-white mx-padding-large mx-animate-bottom">SkinCare</span>
    </div>
  </div>
  <div class="mx-display-container mySlides">
    <a href = "skincaretools.php"><img src="hitachiN4000.jpeg" style="width:100%"></a>
    <div class="mx-display-topright mx-text-white mx-container mx-padding-32 mx-hide-small">
      <span class="mx-white mx-padding-large mx-animate-bottom">SkinCare Tools</span>
    </div>
  </div>

  <!-- Slideshow next/previous buttons -->
  <div class="mx-container mx-dark-grey mx-padding-8 mx-xlarge">
    <div class="mx-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left mx-hover-text-teal "></i></div>
    <div class="mx-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right mx-hover-text-teal"></i></div>
    
    <div class="mx-center">
      <span class="mx-tag demodots mx-border mx-transparent mx-hover-white" onclick="currentDiv(1)"></span>
      <span class="mx-tag demodots mx-border mx-transparent mx-hover-white" onclick="currentDiv(2)"></span>
      <span class="mx-tag demodots mx-border mx-transparent mx-hover-white" onclick="currentDiv(3)"></span>
    </div>
  </div>


  <script>
// Slideshow script
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" mx-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " mx-white";
}
</script>

</body>
</html>