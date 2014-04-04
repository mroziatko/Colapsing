<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery2.1.0.js"></script>
	
</head>
<body>
<div class="gallery" style="margin:0px">
	<div class="vas_2003">
		 <a class="cel" rel="2003">2 0 0 3</a>
	</div>
	<div class="vas_2004"><a class="row" rel="2004">2004</a></div>
	<div class="vas_2004" style="margin-top: 1%"><a class="row" rel="2005">2005</a></div>
</div>
<span class="cc_back_active" id="cc_back_active" style="display:none">&lt;&lt; Vissza</span>
<div class="pict" style="margin:0px">
<div id="2003" style="display:none">
<embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="800" height="533" flashvars="host=picasaweb.google.com&noautoplay=1&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F115691763761357174318%2Falbumid%2F5998168235071729937%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCPeuk5jescDZOg%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
</div>
<div id="2004" style="display:none">
<!--<?php 
    // definujeme prieèinok s obrázkami 
    // musí by» dopstupný na èítanie 
    $photosDir = 'images/Kepek/2004'; 
    
    // definuje prípony súborov 
    $photosExt = array('gif', 'jpg', 'jpeg', 'tif', 'tiff', 'bmp', 'png'); 
 
    // inicializuje pole, v ktorom budú názvy súborov 
    $photosList = array();
    // naèíta obsah adresára 
    // vytvorí list obrázkov 
    if (file_exists($photosDir)) { 
      $dp = opendir($photosDir) or die ('CHYBA: Nedá sa otvori» adresár'); 
      while ($file = readdir($dp)) { 
        if ($file != '.' && $file != '..') { 
          $fileData = pathinfo($file); 
          if (in_array($fileData['extension'], $photosExt)) { 
            $photosList[] = "$photosDir/$file"; 
          } 
        } 
      } 
      closedir($dp); 
    }
 
    // iteruje cez list obrázkov 
    // zobrazí ka¾dý obrázok, názov súboru a veµkos» 
    if (count($photosList) > 0) { 
      for ($x=0; $x<count($photosList); $x++) { 
?>  
          <img src="<?php echo $photosList[$x];?>" width="100" alt="" />  
<?php 
      } 
    } else { 
      die('CHYBA: adresár neobsahuje obrázky'); 
    } 
?>-->  
<embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="800" height="533" flashvars="host=picasaweb.google.com&noautoplay=1&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F115691763761357174318%2Falbumid%2F5998163387618345137%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCJO694Ssw7z69wE%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>

</div>

<div id="2005" style="display:none">
<embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="800" height="533" flashvars="host=picasaweb.google.com&noautoplay=1&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F115691763761357174318%2Falbumid%2F5998173276622889073%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCNKhhvWynvOuLA%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
</div>
</div>

<script type="text/javascript">
	$('a').on('click', function(){
		var target = $(this).attr('rel');
		$('#'+target).addClass('active');
		$('#cc_back').hide();
		$('#cc_back_active').show();
    $('div.active').show();
		$('div.gallery').hide();
	});

	$('a.cel,a.row').hover(function(){
		$(this).css({'cursor':'pointer', 'text-decoration': 'none'});
	});
	
	$('#cc_back_active').on('click', function(){
		$('#cc_back_active').hide();
		$('#cc_back').show();
		$('div.active').removeClass('active').hide();
		$('div.gallery').show();
	});	
</script>

</body>
</html>