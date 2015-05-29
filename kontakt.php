<!DOCTYPE html>
<HTML>
<HEAD>
<link href="css/stil.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
 <meta http-equiv="refresh" content=""/> 
<TITLE>Srednja skola "Huse Fatkić"</TITLE>
<link href="css/stil.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">

</HEAD>
<BODY> 

	
		<div id="lijevoTijelo">
			<h3> Informacije</h3>
			<p><b>Naziv škole:</b><br> Srednja škola "Huse Fatkić"</p>
			<p><b>Adresa:</b><br> Zmaja od Bosne bb, 71000, Sarajevo</p>
			<p><b>Telefon:</b><br> (+387)32665987</p>
			<p><b>Telefon:</b><br> (+387)32665033</p>
			<p><b>Email:</b><br> husefatkic@unsa.ba</p>

		</div>
		<div id="desnoTijelo">
			<h3> Prijava</h3>
				<div id="login">	
					<form  name="loginForma"  method="post" onsubmit="return validateLogin()" >
						Email: <input type="text" name="email" ><br>
						Lozinka: <input type="text" name="lozinka" ><br>
						<input type="submit" value="PRIJAVA" id="prijava"> 
					</form>

				</div>	
			<br> 
			<br>
			<h3> Srodne stranice</h3>
			<ul>
				<li>
					<a href="http://www.tscze.com.ba/lokacija/uncategorised/lokacija">Tehnička škola Zenica</a>
				</li>
				<li>
					<a href="http://etf.unsa.ba/">Elektrotehnički fakultet Sarajevo</a>
				</li>
				<li>
					<a href="http://www.scilijas.com.ba/">ŠC "Ilijaš"</a>
				</li>
				<li>
					<a href="http://www.2gimnazija.edu.ba/">Druga gimnazija Sarajevo</a>
				</li>
				<li>
					<a href="http://www.ses.edu.ba/">Ekonomska škola Sarajevo</a>
				</li>
				<li>
					<a href="http://gdobrinja.edu.ba/">Gimnazija Dobrinja</a>
				</li>
				<li>
					<a href="http://www.mssvogosca.edu.ba/">SC "Vogošća"</a>
				</li>
				<li>
					<a href="http://www.peta-gimnazija.edu.ba/">Peta gimnazija</a>
				</li>
				<li>
					<a href="http://www.muzickasa.edu.ba/muzicka/">Muzička škola Sarajevo</a>
				</li>
				<li>
					<a href="http://www.bosnjackagim.edu.ba/">Bošnjačka gimnazija Sarajevo</a>
				</li>
				<li>
					<a href="http://www.sts.edu.ba/">Srednja trgovačka škola Sarajevo</a>
				</li>
				<li>
					<a href="http://www.treca-gimnazija.edu.ba/">Treća gimnazija Sarajevo</a>
				</li>


				


			</ul>
		</div>
		
		<div class= "sadrzaj">
			<h1> Kontaktirajte nas: </h1>
				<div id="kontakt">
					<form  name="kontaktForma" id="konForma" action="kontakt1.php" method="get">
						Ime: <br><input type="text" name="ime">	<br>
						
						Prezime: <br><input type="text" name="prezime"><br>
						
						Adresa(neobavezno): <br><input type="text" name="adresa"><br>
						
						Email: <br><input type="email" name="email"><br>
						
						Spol: <br><select> 
									  <option value="Musko">Muško</option>
									  <option value="Zensko">Žensko</option>
							   </select><br>
							   	
						Poruka: <br><textarea name="text" id="PorukaZaSlanje"></textarea><br>
						
					    <input type="submit" value="POŠALJI" id="posaljiPoruku">
					</form>
					
				</div>

		</div>

		
	</div>
	
	<SCRIPT src="javaScript/skripte.js"></SCRIPT>
	<SCRIPT src="javaScript/AjaxMeni.js"></SCRIPT>
	<SCRIPT src="javaScript/AjaxUcenici.js"></SCRIPT>

</BODY>
</HTML>