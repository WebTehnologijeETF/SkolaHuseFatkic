function ucitaj(stranica,a){

	
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4 && ajax.status==200){

			document.getElementById("tijelo").innerHTML=ajax.responseText;
			document.getElementById("0").className= "";
			document.getElementById("1").className= "";
			document.getElementById("2").className= "";
			document.getElementById("3").className= "";
			document.getElementById("4").className= "";
			document.getElementById("4.1").className= "";
			document.getElementById("4.2").className= "";
			document.getElementById("4.3").className= "";
	  		a.className = "odabrano";
	  		
	  	}
	  	}
	
	ajax.open("GET",stranica+".html",true);
	ajax.send();

}