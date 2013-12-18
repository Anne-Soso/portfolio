if(document.getElementById('derniersTravaux'){

	for(i=0;i<document.getElementById('dernierTravaux').length){
		var tableauGalerie=["bigVignette","smallVignette","smallVignette","smallVignette","smallVignette","bigVignette"];

		document.getElementsByClassName('galerie')[i].className+=" "+tableauGalerie[i];
	}
}