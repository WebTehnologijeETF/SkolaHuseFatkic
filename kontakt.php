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

	<div id="header">
		<a href="index.html" class="logo"> 
			<img src="slike/logo.png" alt="logo">
		</a>
		<div id="meni">
			<ul>
				
				<li >
					<a id="0" class="odabrano" href="#" onclick="ucitaj('index1',this)">NASLOVNA</a>
				</li>
			  
				<li>
					<a href="#" id="1" class="pocetno" onclick="ucitaj('oskoli',this)">O šKOLI</a>
				</li>
				<li>
					<a href="#" id="2" class="pocetno" onclick="ucitaj('raspored',this)">RASPORED</a>
				</li>
				 <li>
					<a href="#" id="3" class="pocetno" onclick="ucitaj('kontakt',this)">KONTAKT</a>
				</li>
				<li>
					<a href="#" id="Profili" onclick="prikaziSakrij()"  >▼ PROFILI</a>
					<div id="profiliMeni" class="hidden"  onmouseleave="prikaziSakrij()">
						<ul>
							<li>
							<a href="#" id="4" onmouseenter="prikaziPodmeni()" onmouseleave="prikaziPodmeni()" >Učenici</a>
							<div id="uceniciPodmeni" onmouseenter="prikaziPodmeni()" onmouseleave="prikaziPodmeni()" class="hidden">
								<ul  >
									<li>
										<a href="#" id="4.1" onclick="ucitaj('ucenici',this)" >Dodaj</a>
									</li>
									<li>
										<a href="#"  onclick="ucitaj('ucenici',this)" >Izmjeni</a>
									</li>
									<li>
										<a href="#"  onclick="ucitaj('ucenici',this)" >Pregled</a>
									</li>
								</ul>
							</div>
							</li>
							<br>
							<li>
							<a href="#">Nastavnici</a>
							</li>
							<br>
							<li>
							<a href="#">Menadžment</a>
							</li>
							<br>
							<li>
							<a href="#">Pedagoška služba</a>
							</li>
							<br>	
							<li>
							<a href="#">Tehničko osoblje</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
	</div>
		
	</div>
	<div id="tijelo">

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
					<form  name="kontaktForma" id="konForma" action="kontakt.php" method="get">
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
	<div id="footer">
	</div>

	<SCRIPT src="javaScript/skripte.js"></SCRIPT>
	<SCRIPT src="javaScript/AjaxMeni.js"></SCRIPT>
	<SCRIPT src="javaScript/AjaxUcenici.js"></SCRIPT>

</BODY>
</HTML>