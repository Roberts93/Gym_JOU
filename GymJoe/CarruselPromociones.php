
<head>
	<title></title>
<style type="text/css">
    /*<![CDATA[*/
<!--
div.ic_myCarousel {
    margin: 20px auto 0 auto;
    clear:right;
}
.infiniteCarousel {
    box-shadow: 0px 5px 5px #333;
    border: 2px solid #CCC;
}
.ic_left_nav, .ic_right_nav {
    display: none;
}
-->
    /*]]>*/
</style>
 
 <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="http://notoyontoy.site40.net/Js/jquery.infinitecarousel3.min.js"></script>
  <script type="text/javascript" src="http://notoyontoy.site40.net/Js/easing.js"></script>
  <script>
     var a = jQuery.noConflict();
        a(document).ready(function() {
        a('#carousel').infiniteCarousel({
           imagePath: '',
           transitionSpeed:9000,
           displayTime: 0,
           thumbnailType: 'none',
           customClass: 'myCarousel',
           easeLeft: 'linear',
           easeRight:'linear',
           inView: 1,
           advance: 1,
           autoPilot: true,
           displayProgressRing: false,
           showControls: false,
           prevNextInternal: false
});
 });
</script>


</head>
<body>


<ul id="carousel">
  <li><img width="851" height="315" alt="" src="fotos/imagenes/promocionescarrusel1.jpg" /></li>
  <li><img width="851" height="315" alt="" src="fotos/imagenes/promocionescarrusel2.jpg" /></li>
  <li><img width="851" height="315" alt="" src="fotos/imagenes/promocionescarrusel3.jpg" /></li>
  <li><img width="851" height="315" alt="" src="fotos/imagenes/promocionescarrusel4.jpg" /></li>
  <li><img width="851" height="315" alt="" src="fotos/imagenes/promocionescarrusel5.jpg" /></li>
 
</ul>



</body>
