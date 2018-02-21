<html>

	<?php
		session_start(); 
		
		if(isset($_POST['submit'])) {				
				if($_SESSION['captcha'] != $_POST['kod_captcha']){
					echo 'Wpisany wynik nie jest poprawny.';
				}
				else {
					echo 'Gratulacje! Dobry wynik!';
				}
			} 	
	?>

<meta charset="utf-8">
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

	

	<form action='' method="post">
		Imie:<br>
        <input type="text" class="form-control" name="name"><br>
        Nazwisko:<br>
        <input type="text" class="form-control" name="lastname"><br>
        Napisz wynik działania:       
        <img src="captcha.php">
		<input type="text" name="kod_captcha" ><br>
		<input type="submit" name="submit" value="Wyslij"><br>
    </form>
	 
	 
	

</body>

</html>