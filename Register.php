<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="style.css">

<style>
.error{ color:red;}
</style>


<?php 

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



if($flag)
sqlsrv_query($conn,"INSERT INTO Clienti 
(Nume,Prenume,Telefon, Email, Judet, Oras, Adresa, Cod_Postal, Username, Pass) 
VALUES ('$nume', '$prenume', '$tel','$email', '$judet', '$oras', '$adresa','$cp', '$username','$pass')");

}

 ?>

</head>

<body>
<form action="Register.php" method="POST">


    <div class="container">
        <h2>Inregistrare cont</h2>
        <p>Completati formularul de mai jos pentru a crea un cont.</p>
        <hr>

        <span class="error">*<?php echo $numeErr;?></span>
        <label for="fname"><b>Nume</b></label>
        <input type="text" placeholder="Introduceti Numele" name="fname" id="fname" required>

        <span class="error">*<?php echo $prenumeErr;?></span>
        <label for="lname"><b>Prenume</b></label>
        <input type="text" placeholder="Introduceti Prenumele" name="lname" id="lname" required>

        <span class="error">*<?php echo $telErr;?></span>
        <label for="tel"><b>Telefon</b></label>
        <input type="text" placeholder="Introduceti Telefonul" name="tel" id="tel" required>

        <span class="error">*<?php echo $emailErr;?></span>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Introduceti Email" name="email" id="email" required>

        <span class="error">*<?php echo $judetErr;?></span>
        <label for="judet"><b>Judet</b></label>
        <input type="text" placeholder="Introduceti Judetul" name="judet" id="judet" required>

        <span class="error">*<?php echo $orasErr;?></span>
        <label for="oras"><b>Oras</b></label>
        <input type="text" placeholder="Introduceti Orasul" name="oras" id="oras" required>

        <span class="error">*<?php echo $adresaErr;?></span>
        <label for="adresa"><b>Adresa</b></label>
        <input type="text" placeholder="Introduceti Adresa" name="adresa" id="adresa" required>

        <label for="cp"><b>Cod Postal</b></label>
        <input type="text" placeholder="Introduceti Codul Postal" name="cp" id="cp" required>

        <span class="error">*<?php echo $usernameErr;?></span>
        <label for="username"><b>Nume de Utilizator</b></label>
        <input type="text" placeholder="Introduceti Numele de utilizator" name="username" id="username" required>

        <span class="error">*<?php echo $passErr;?></span>
        <label for="pass"><b>Parola</b></label>
        <input type="text" placeholder="Introduceti Parola" name="pass" id="pass" required>

        <span class="error">*Camp obligatoriu</span><br><br>

        <hr>

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    </div>


    <input type="submit" name="Submit" value="Submit">

</form>
</body>


</html>
