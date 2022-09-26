<!DOCTYPE html>
<html>

<head>
	<title>Inserir Dados</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => q1w2e3
		// database name => bancoForm
		$conn = mysqli_connect("localhost", "root", "q1w2e3", "bancoForm");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$nome = $_REQUEST['nome'];
		$idade = $_REQUEST['idade'];
		$telefone = $_REQUEST['telefone'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO user VALUES ('$nome',
			'$idade','$telefone', '$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Dados armazenado com sucesso</h3>"

			echo nl2br("\n$nome\n $idade\n "
				. "$telefone\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
