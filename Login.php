<!DOCTYPE html>
<html>

<?php
$serverName = "DESKTOP-B9RNLOT\SQLEXPRESS";
$connectionInfo = array ("Database" => "Firma Curierat");
$conn = sqlsrv_connect ($serverName, $connectionInfo);

if ($conn)
	echo nl2br("**Conectare la baza de date reusita**\n\n\n");
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


<form action="login.php" method="POST">
	<label for="username">Nume de utilizator</label> <br>
	<input type="text" id="username" name="username"> <br><br><br>
	<label type="pass" for="pass">Parola</label><br>
	<input type="pass" id="pass" name="pass"> <br><br><br>
	<input type="submit" name="Submit" value="Login"> 
</form>

</html>