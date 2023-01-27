<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Estados do Brasil</title>
</head>
<body>
	<form action="site.php" method="get">
		<label>Letra ou conjunto de caracteres iniciais:</label><br/>
		<input type="text" id="fest" name="fest" required>
		<input type="submit" value="Localizar">
	</form>
	
	<table border="1">
		<tr>
			<th>Estado</th><th>Capital</th><th>Sigla</th>
		</tr>


<?php

	include "conexao.inc";

	if(isset($_GET['fest'])){
		echo "<a href=site.php>Mostrar todos</a>";
		$vest = $_GET['fest'];
		$query = "SELECT * FROM estados_brasil WHERE estado like '$vest%'";
		$res = mysqli_query($con, $query);
			
		while($vreg=mysqli_fetch_row($res)){
			echo "<tr>";
			echo "<td>".$vreg[0]."</td><td>".$vreg[1]."</td><td>".$vreg[2]."</td>";
			echo "<tr>";
		}
		
	}else{
		

	
		$query = "SELECT * FROM estados_brasil";
		$res = mysqli_query($con, $query);
		
		while($vreg=mysqli_fetch_row($res)){
			echo "<tr>";
			echo "<td>".$vreg[0]."</td><td>".$vreg[1]."</td><td>".$vreg[2]."</td>";
			echo "<tr>";
		}
	}
	mysqli_close($con);
?>

	</table>

</body>
</html>
