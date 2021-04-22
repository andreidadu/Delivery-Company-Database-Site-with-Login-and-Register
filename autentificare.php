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
			echo nl2br("**Conectare la baza de date reusita**");
		else
			echo"Conectare nereusita la baza de date";



		if(isset($_POST["username"], $_POST["pass"]))
			{

			$username = $_POST["username"]; 
			$pass = $_POST["pass"];

			$result = sqlsrv_query($conn,"SELECT Username, Pass FROM Clienti WHERE Username = '$username'  AND  Pass = '$pass'");

			if(sqlsrv_has_rows($result))
			{ 
				echo "Autentificare reusita";
			   
			}
			else
			{
			   echo "Nume sau parola incorecte";
			}
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
							<li><a href="inregistrare.php">Inregistrare</a></li>
							<li class="active"><a href="autentificare.php">Autentificare</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
	<div id="main">
		<div class="container">
				<section>
				<form action="login.php" method="POST">
				<label for="username">Nume de utilizator</label> <br>
				<input type="text" id="username" name="username"> <br><br><br>
				<label type="password" for="pass">Parola</label><br>
				<input type="pass" id="pass" name="pass"> <br><br><br>
				<input class="button" type="submit" name="Submit" value="Login"> 
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