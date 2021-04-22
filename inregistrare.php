<!DOCTYPE HTML>

<html>
	<head>
	
		<title>Firma Curierat</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		
	
	<?php 
//conectare la baza de date
$serverName = "DESKTOP-B9RNLOT\SQLEXPRESS";
$connectionInfo = array ("Database" => "Firma Curierat");
$conn = sqlsrv_connect ($serverName, $connectionInfo);

if ($conn)
	echo nl2br("**Conectare la baza de date reusita**\n");
else
	echo"Conectare nereusita la baza de date";


$numeErr=$prenumeErr=$telErr=$emailErr=$judetErr=$orasErr=$adresaErr=$cpErr=$usernameErr=$passErr="";
$nume=$prenume=$tel=$email=$judet=$oras=$adresa=$cp=$username=$pass="";
$flag=1;


if(isset($_POST['Submit']))
{
	if(empty($_POST["fname"])) {
		$numeErr="Numele este obligatoriu";
		$flag=0;
	}else {$nume=$_POST['fname'];}

	if(empty($_POST["lname"])) {
		$prenumeErr="Prenumele este obligatoriu";
		$flag=0;
	}else {$prenume=$_POST['lname'];}

    if(empty($_POST["tel"])) {
        $telErr="Telefonul este obligatoriu";
        $flag=0;
    }else {$tel=$_POST['tel'];}

    if(empty($_POST["email"])) {
        $emailErr="Emailul este obligatoriu";
        $flag=0;
    }else {$email=$_POST['email'];}

    if(empty($_POST["judet"])) {
        $judetErr="Judetul este obligatoriu";
        $flag=0;
    }else {$judet=$_POST['judet'];}

    if(empty($_POST["oras"])) {
        $orasErr="Orasul este obligatoriu";
        $flag=0;
    }else {$oras=$_POST['oras'];}

    if(empty($_POST["adresa"])) {
        $adresaErr="Adresa este obligatorie";
        $flag=0;
    }else {$adresa=$_POST['adresa'];}

    if(empty($_POST["cp"])) {
    }else {$cp=$_POST['cp'];}

    if(empty($_POST["username"])) {
        $usernameErr="Numele de Inregistrare este obligatoriu";
        $flag=0;
    }else {$username=$_POST['username'];}

    if(empty($_POST["pass"])) {
        $passErr="Parola este obligatorie";
        $flag=0;
    }else {$pass=$_POST['pass'];}


//Inserarea in baza de date
if($flag)
	sqlsrv_query($conn,"INSERT INTO Clienti 
	(Nume,Prenume,Telefon, Email, Judet, Oras, Adresa, Cod_Postal, Username, Pass) 
	VALUES ('$nume', '$prenume', '$tel','$email', '$judet', '$oras', '$adresa','$cp', '$username','$pass')");

}

 ?>
	
	
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">TABELLARIUM</a></h1>
						<span>we deliver</span>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li ><a href="index.php">Homepage</a></li>
							<li><a href="echipa.php">Echipa</a></li>
							<li><a href="costuri.php">Costuri</a></li>
							<li><a href="livrari.php">Livrari</a></li>
							<li class="active"><a href="onecolumn.php">Inregistrare</a></li>
							<li><a href="autentificare.php">Autentificare</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
				
				<form action="index.php" method="POST">
				<div class="container">
					<h2>Inregistrare cont</h2>
					<p>Completati formularul de mai jos pentru a crea un cont.</p>
					<hr>
					
					<ul>
					<li>
					<span class="error">*</span>
					<label for="fname"><b>Nume</b></label>
					<input type="text" placeholder="Introduceti Numele" name="fname" id="fname" required>
					</li>
					
					<li>
					<span class="error">*</span>
					<label for="lname"><b>Prenume</b></label>
					<input type="text" placeholder="Introduceti Prenumele" name="lname" id="lname" required>
					</li>
					
					<li>
					<span class="error">*</span>
					<label for="tel"><b>Telefon</b></label>
					<input type="text" placeholder="Introduceti Telefonul" name="tel" id="tel" required>
					</li>
					
					<li>
					<span class="error">*</span>
					<label for="email"><b>Email</b></label>
					<input type="text" placeholder="Introduceti Email" name="email" id="email" required>
					</li>
					
					<li>
					<span class="error">*</span>
					<label for="judet"><b>Judet</b></label>
					<input type="text" placeholder="Introduceti Judetul" name="judet" id="judet" required>
					</li>
					
					<li>
					<span class="error">*</span>
					<label for="oras"><b>Oras</b></label>
					<input type="text" placeholder="Introduceti Orasul" name="oras" id="oras" required>
					</li>
					
					<li>
					<span class="error">*</span>
					<label for="adresa"><b>Adresa</b></label>
					<input type="text" placeholder="Introduceti Adresa" name="adresa" id="adresa" required>
					</li>
					
					<li>
					<label for="cp"><b>Cod Postal</b></label>
					<input type="text" placeholder="Introduceti Codul Postal" name="cp" id="cp" required>
					</li>
					
					<li>
					<span class="error">*</span>
					<label for="username"><b>Nume de Utilizator</b></label>
					<input type="text" placeholder="Introduceti Numele de utilizator" name="username" id="username" required>
					</li>
					
					<li>
					<span class="error">*</span>
					<label for="pass"><b>Parola</b></label>
					<input type="text" placeholder="Introduceti Parola" name="pass" id="pass" required>
					</li>
					
					
					<li>
					</li>
					<input a href="index.php" class="button" type="submit" name="Submit" value="Submit">
					<li>
					<span class="error">*Camp obligatoriu</span><br><br>
					</li>
					<li>
					</li>
					<hr>
					</ul>
					
					
					<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
				</div>
				
				</form>
				
			</div>
		</div>
	<!-- Main -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					
					
					<div class="3u">
						<section>
							<header>
								<h2>  Link-uri utile </h2>
							</header>
							<ul>
							<li class="active"><a href="index.php" class="button">Homepage</a></li>
							<li><a href="echipa.php" class="button">Echipa</a></li>
							<li><a href="costuri.php" class="button">Costuri</a></li>
						</ul>
						
						</section>
					</div>
					
					<div class="3u">
						<section>
							<header>
								<li> 
								</li>
							</header>
							<ul>
							
							<li><a href="livrari.php" class="button">Livrari</a></li>
							<li><a href="inregistrare.php" class="button">Inregistrare</a></li>
							<li><a href="autentificare.php" class="button">Autentificare</a></li>
						</ul>
						
						</section>
					</div>
					
					<div class="5u">
						<section>
							<ul class="style1">
								<li><img src="images/tel.png" width="45" height="64" alt="">
								</li>
								<li>
									<p> Telefon: 0768862008 </p>
									
								</li>
								
								<li><img src="images/mail.png" width="64" height="64" alt="">
								</li>
								<li>
									<p> Email: tabellarium.supp@gmail.com </p>
									
								</li>
								<li><img src="images/loc.png" width="47" height="64" alt="">
								</li>
								<li>
									<p> Locatie: Calea Bucuresti, Nr 15, Craiova </p>
									
								</li>
							</ul>
						</section>
					</div>
					
				</div>
			</div>
		</div>
	<!-- Footer -->

	</body>
</html>