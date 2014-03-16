<html>
<head>
	<meta charset="utf-8">
	  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
	 <script type="text/javascript" src="js/jquery2.1.0.js"></script>
</head>
<body>
<div class="info_menu">
	<a href="#stuff" class="active">Felszerelés</a>	
	<a href="#what">Mi a Vascserkész?</a>
	<a href="#group">Csapatok</a>
</div>

<div class="content">
	<div id="stuff" class="active">
		<p>Felszerelés</p>
	</div>

	<div id="what">
		<p>Vascserkész</p>
	</div>
	<div id="group">
		<p>Csapatok</p>
	</div>
</div>

	<script type="text/javascript">
		$(".info_menu a").click(function(){
	    $(".info_menu a").removeClass("active");
	    $(this).addClass("active");
	    
	    var id = $(this).attr("href");
	    
	    $(".content div").removeClass("active");
	    $(id).addClass("active");
	});
	</script>

</body>
</html>