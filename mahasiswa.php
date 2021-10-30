<html>
	 <head>
		 <style>
		 .error {color: #FF0000;}
		 </style>
	 </head>

	 <body>
	 <?php
		 // define variables and set to empty values
		 $namaErr = $emailErr = $genderErr = $websiteErr = "";
		 $nama = $email = $gender = $comment = $website = "";

		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
		 if (empty($_POST["nama"])) {
		 	$namaErr = "Nama harus diisi";
		 }else {
		 	$nama = test_input($_POST["nama"]);
		 }

		 if (empty($_POST["nis"])) {
		 	$nisErr = "Email harus diisi";
		 }else {
		 	$nis= test_input($_POST["nis"]);

		 // check if e-mail address is well-formed
		 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 	$emailErr = "Email tidak sesuai format";
		 }
		 }

		 if (empty($_POST["website"])) {
			 $website = "";
		 }else {
		 	$website = test_input($_POST["website"]);
		 }

		 if (empty($_POST["comment"])) {
		 	$comment = "";
		 }else {
		 	$comment = test_input($_POST["comment"]);
		 }

		 if (empty($_POST["gender"])) {
		 	$genderErr = "Gender harus dipilih";
		 }else {
		 	$gender = test_input($_POST["gender"]);
		 	}
		 }

		 function test_input($data) {
			 $data = trim($data);
			 $data = stripslashes($data);
			 $data = htmlspecialchars($data);
			 return $data;
		 }
	 ?>
	<h2>DATA SISWA </h2>

	 <p><span class = "error">* Harus Diisi.</span></p>

	 <form method = "post" action = "<?php
	 echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	 	<table>
		 <tr>
			 <td>Nama:</td>
			 <td><input type = "text" name = "nama">
			 	<span class = "error">* <?php echo $namaErr;?></span>
			 </td>
		 </tr>

		 <tr>
			 <td>NIS: </td>
			 <td><input type = "text" name = "nis">
			 	<span class = "error">* <?php echo $nisErr;?></span>
			 </td>
		 </tr>

		 <tr>
			 <td>Website:</td>
			 <td> <input type = "text" name = "website">
			 	<span class = "error"><?php echo $websiteErr;?></span>
			 </td>
		 </tr>

		 <tr>
			 <td>Komentar:</td>
			 <td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
		 </tr>

		 <tr>
			 <td>Gender:</td>
			 <td>
			 <input type = "radio" name = "gender" value = "L">Laki-Laki
			 <input type = "radio" name = "gender" value = "P">Perempuan
			 <span class = "error">* <?php echo $genderErr;?></span>
			 </td>
		 </tr>
		 <td>
		 <input type = "submit" name = "submit" value = "Submit">
		 </td>
	 	</table>
	 </form>

	 <h2>Data yang anda isi:</h2>
	 <table>
	 	<tr>
			 <td>Nama:</td>
			 <td> 
			 	<?php echo $nama;?>
			 </td>
		 </tr>
		 <tr>
			 <td>NIS:</td>
			 <td> 
			 	<?php echo $nis;?>
			 </td>
		 </tr>
		 <tr>
			 <td>website:</td>
			 <td> 
			 	<?php echo $website;?>
			 </td>
		 </tr>
		 <tr>
			 <td>Comment:</td>
			 <td> 
			 	<?php echo $comment;?>
			 </td>
		 </tr>
		 <tr>
			 <td>gebder:</td>
			 <td> 
			 	<?php echo $gender;?>
			 </td>
		 </tr>
	</table>


	 </body>
</html>