<!DOCTYPE HTML>

<html>
	<head>
		<title>Firma Curierat</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		
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
		
		
		// In variabila result o sa imi pun fiecare produs
		$query="select *
				from produs
				where pret=50";
		$stmt=sqlsrv_query($conn,$query);
		$result1=sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
		
		$query="select *
				from produs
				where pret=75";
		$stmt=sqlsrv_query($conn,$query);
		$result2=sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
		
		$query="select *
				from produs
				where pret=80";
		$stmt=sqlsrv_query($conn,$query);
		$result3=sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
		
		$query="select *
				from produs
				where pret=150";
		$stmt=sqlsrv_query($conn,$query);
		$result4=sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
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
							<li><a href="index.php">Homepage</a></li>
							<li><a href="echipa.php">Echipa</a></li>
							<li class="active"><a href="costuri.php">Costuri</a></li>
							<li><a href="livrari.php">Livrari</a></li>
							<li><a href="inregistrare.php">Inregistrare</a></li>
							<li><a href="autentificare.php">Autentificare</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
			
	
	
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">
				
					<div class="login-container" id="coscontainer">
						<div class="table-responsive">
							<!-- Inserarea datelor in tabela -->
							<table class="table">
								<tr>
									<th width="40%">Marime </th>
									<th width="20%">Greutate</th>
									<th width="20%">Reducere%</th>
									<th width="20%">Pret </th>
								</tr>
								<tr>
									<th width="40%"><?php echo $result1['Marime'];?> </th>
									<th width="20%"><?php echo $result1['Greutate'];?></th>
									<th width="20%"><?php echo $result1['Reducere'];?></th>
									<th width="20%"><?php echo $result1['Pret'];?></th>
								</tr>
								<tr>
									<th width="40%"><?php echo $result2['Marime'];?> </th>
									<th width="20%"><?php echo $result1['Greutate'];?></th>
									<th width="20%"><?php echo $result2['Reducere'];?></th>
									<th width="20%"><?php echo $result2['Pret'];?></th>
								</tr>
								<tr>
									<th width="40%"><?php echo $result3['Marime'];?> </th>
									<th width="20%"><?php echo $result3['Greutate'];?></th>
									<th width="20%"><?php echo $result3['Reducere'];?></th>
									<th width="20%"><?php echo $result3['Pret'];?></th>
								</tr>
								<tr>
									<th width="40%"><?php echo $result4['Marime'];?> </th>
									<th width="20%"><?php echo $result4['Greutate'];?></th>
									<th width="20%"><?php echo $result4['Reducere'];?></th>
									<th width="20%"><?php echo $result4['Pret'];?></th>
								</tr>
								
							</table>
				
				
					</div>
					
				
				</div>
			
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