	<video loop autoplay>
	  	<source src="http://as-pirlet.be/wp-content/uploads/2013/10/rain2.mp4" style="width:100%" type="video/mp4"/>
	  	<source src="http://as-pirlet.be/wp-content/uploads/2013/10/rain2.ogv" style="width:100%" type="video/ogg"/>
	</video>
	<script type="text/javascript">
		if(document.getElementById('derniersTravaux')){

		for(i=0;i<document.getElementsByClassName('galerie').length;i++){
			var tableauGalerie=["bigVignette","smallVignette","smallVignette","smallVignette","smallVignette","bigVignette"];

			document.getElementsByClassName('galerie')[i].className+=" "+tableauGalerie[i];
		}}
		if(document.getElementById('galerie')){

		for(i=0;i<document.getElementsByClassName('galerie').length;i++){
			var tableauGalerie=["bigVignette","smallVignette","smallVignette","smallVignette","smallVignette","bigVignette"];

			document.getElementsByClassName('galerie')[i].className+=" "+tableauGalerie[i];
		}}
	</script>
	<script type="text/javascript" src="http://as-pirlet.be/wp-content/uploads/2013/10/modernizr.js"></script>
<!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
</body>
</html>