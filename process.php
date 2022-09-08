<?php 
require('config.php');
?>

<?php
$conn= mysqli_connect("127.0.0.1:3302","root","","srxbet");
if(isset($_POST)){

	$ime 			= $_POST['ime'];
	$prezime 		= $_POST['prezime'];
	$brojtelefona 	= $_POST['brojtelefona'];
	$email			= $_POST['email'];
	$password 		= $_POST['password'];
	$username		= $_POST['username'];
	
	// da li postoji username ili email - provjera http://localhost/srxbet1/
	$u="SELECT username FROM korisnici WHERE username='$username'";
		$uu=mysqli_query($conn,$u);
		
		$e="SELECT email FROM korisnici WHERE email='$email'";
		$ee=mysqli_query($conn,$e);
		
		$errors=array();
		
		if(mysqli_num_rows($uu) > 0) 
		{
			if(mysqli_num_rows($ee) > 0)
			{
				echo "Username i email se već koriste";
				exit();
			}
			else
			{
				echo "Username se već koristi";
				
			}
			
		}
		if(mysqli_num_rows($ee) > 0)
		{
			echo "Email se već koristi";
		
		}
	else 
		{ //upis u tabelu ako je sve ok
			$sql= "INSERT INTO korisnici(ime, prezime, brojtelefona, email, password, username) VALUES(?, ?, ?, ?, ?, ?)";
			$stmtinsert =$db->prepare($sql);
			$result=$stmtinsert->execute([$ime,$prezime,$brojtelefona,$email,$password,$username]);
			if($result)
			{
				echo'Uspješna registracija';
			}
			else
			{
				echo'Problemi sa konekcijom baze';
			}
		}
		

	
	
}
?>