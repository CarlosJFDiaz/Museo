<!doctype html>
<html>
<head>
	<title>Galeria del Museo</title>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <link rel="stylesheet" type="text/css" href="css/estiloh.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />

</head>
<a name="top"></a>
<body>

<?php
include_once("cabecera.html");
include_once("menu.php");
?>

<div class="titulo">
  <h1>Galería</h1>
</div>

 <div class="imagenes" align="center">
    <a class="fancybox" href="img/1.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/1p.jpeg" alt="Img-Thumbnail" /></a> 
    <a class="fancybox" href="img/2.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/2p.jpeg" alt="Img-Thumbnail" /></a> 
    <a class="fancybox" href="img/3.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/3p.jpeg" alt="Img-Thumbnail" /></a>
	  <a class="fancybox" href="img/4.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/4p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/5.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/5p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/6.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/6p.jpeg" alt="Img-Thumbnail" /></a> 
    <a class="fancybox" href="img/7.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/7p.jpeg" alt="Img-Thumbnail" /></a>

    <a class="fancybox" href="img/8.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/8p.jpeg" alt="Img-Thumbnail" /></a>
	  <a class="fancybox" href="img/9.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/9p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/10.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/10p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/11.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/11p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/12.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/12p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/13.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/13p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/14.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/14p.jpeg" alt="Img-Thumbnail" /></a>

    <a class="fancybox" href="img/15.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/15p.jpeg" alt="Img-Thumbnail" /></a> 
    <a class="fancybox" href="img/16.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/16p.jpeg" alt="Img-Thumbnail" /></a> 
    <a class="fancybox" href="img/17.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/17p.jpeg" alt="Img-Thumbnail" /></a>
	  <a class="fancybox" href="img/18.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/18p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/19.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/19p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/20.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/20p.jpeg" alt="Img-Thumbnail" /></a> 
    <a class="fancybox" href="img/21.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/21p.jpeg" alt="Img-Thumbnail" /></a>

    <a class="fancybox" href="img/22.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/22p.jpeg" alt="Img-Thumbnail" /></a>
	  <a class="fancybox" href="img/23.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/23p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/24.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/24p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/25.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/25p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/26.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/26p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/27.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/27p.jpeg" alt="Img-Thumbnail" /></a>
    <a class="fancybox" href="img/28.jpeg" data-fancybox-group="gallery" title="txt"><img  src="img/28p.jpeg" alt="Img-Thumbnail" /></a>
</div>
    
    
<script>
    $(document).ready(function() {
            $('.fancybox').fancybox({ keyboard : true });
    });
    </script>

    <div id="pie">
      <center> <a class="a" href="#top">Volver arriba</a> </center>
    </div>
</body>
<?php
include_once("pie.html");
?>
</html>
