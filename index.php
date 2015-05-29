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
		<a href="index.php" class="logo"> 
			<img src="slike/logo.png" alt="logo">
		</a>
		<div id="meni">
			<ul>
				
				<li >
					<a id="0" class="odabrano" href="#" onclick="ucitaj('index1.php',this)">NASLOVNA</a>
				</li>
			  
				<li>
					<a href="#" id="1" class="pocetno" onclick="ucitaj('oskoli.html',this)">O šKOLI</a>
				</li>
				<li>
					<a href="#" id="2" class="pocetno" onclick="ucitaj('raspored.html',this)">RASPORED</a>
				</li>
				 <li>
					<a href="#" id="3" class="pocetno" onclick="ucitaj('kontakt.php',this)">KONTAKT</a>
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
										<a href="#" id="4.1" onclick="ucitaj('ucenici.html',this)" >Dodaj</a>
									</li>
									<li>
										<a href="#" id="4.2" onclick="ucitaj('ucenici.html',this)" >Izmjeni</a>
									</li>
									<li>
										<a href="#" id="4.3" onclick="ucitaj('ucenici.html',this)" >Pregled</a>
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
			<h3> Registracija</h3>
				<div id="registracija">	
					
					<form  name="regForma" id="regForma" onsubmit="return validateRegistration()">
						Ime: <input type="text" name="ime" >
						<p id="greskaIme"> </p>
						Prezime: <input type="text" name="prezime" >
						<p id="greskaPrezime"> </p>
						Email: <input type="text" name="email" >
						<p id="greskaEmail"> </p>
						
						Lozinka: <input type="text" name="lozinka" >
						<p id="greskaLozinka"> </p>
						Broj mobitela(Neobavezno): <input type="text" name="mobitel" >
						Spol: <select> 
								  <option value="Musko">Muško</option>
								  <option value="Zensko">Žensko</option>
							   </select>
						<br>
						<br>
						Općina: <input type="text" name="opcina" >
						<p id="greskaOpcina"> </p>
						Mjesto: <input type="text" name="mjesto" >
						<p id="greskaMjesto"> </p>
						<input type="submit" value="REGISTRACIJA" name="posalji"  > 
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

			<h1> Novosti </h1>
			<ul>
					<?php
							$veza = new PDO("mysql:dbname=srednjaskola;host=localhost;charset=utf8", "adminiCclItz", "TeXad3t2Kj3L");
						    $veza->exec("set names utf8");
						    $rezultat = $veza->query("select id, autor, naslov, UNIX_TIMESTAMP(vrijeme) vrijeme2, slika, tekst, detaljanTekst from novosti order by vrijeme desc");
						    if (!$rezultat) {
						         $greska = $veza->errorInfo();
						         print "SQL greška: " . $greska[2];
						         exit();
						       }

						    foreach($rezultat as $novost)
						    {
						    	$tId=$novost['id'];
						    	$tAutor=$novost['autor'];
						    	$tNaslov=$novost['naslov'];
						    	$tVrijeme=$tVrijeme=date("d.m.Y. (h:i)", $novost['vrijeme2']);
						    	$tSlika=$novost['slika'];
						    	$tTekst=$novost['tekst'];
						    	$tDetaljanTekst=$novost['detaljanTekst'];

						    	$rezultat=$veza->prepare("select count(*) from komentari where novost=$tId");
						        $rezultat->execute();
						        $broj = $rezultat->fetchColumn();
						    	print "<li>
											<h2> $tNaslov </h2>
											
												<p class='datum'> $tVrijeme </p>
												<p class='tekst'> 
													<img src='$tSlika' alt=''>
													$tTekst
													<a href=''> Detaljnije...</a>
												</p>
												<p class='autor'> $tAutor                 	<a href='#' onclick='prikaziNovostKomentar()'> $broj komentara  </a>  </p>
										
											
									  </li>";

								 
						    }


					?>
		</ul>

		</div>

		
	</div>
	<div id="footer">
	</div>

	<SCRIPT src="javaScript/skripte.js"></SCRIPT>
	<SCRIPT src="javaScript/AjaxMeni.js"></SCRIPT>
	<SCRIPT src="javaScript/AjaxUcenici.js"></SCRIPT>

</BODY>
</HTML>