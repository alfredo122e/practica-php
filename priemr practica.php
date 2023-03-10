<!-- <!DOCTYPE html>
<html>
<head>
	<title>Valores del usuario</title>
	<style>
		body {
			background-image: url('https://images.unsplash.com/photo-1521747116042-5a810fda9664');
			background-size: cover;
			background-position: center;
			font-family: Arial, sans-serif;
			color: #fff;
		}

		.container {
			width: 80%;
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: rgba(0, 0, 0, 0.7);
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
			border-radius: 10px;
			text-align: center;
		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			font-size: 18px;
			line-height: 1.5;
		}

		li {
			padding: 5px;
			border-bottom: 1px solid #ccc;
		}

		label {
			display: block;
			font-size: 20px;
			margin-top: 10px;
		}

		input[type="text"] {
			padding: 5px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			background-color: rgba(255, 255, 255, 0.8);
			width: 100%;
			max-width: 400px;
			margin-bottom: 10px;
		}

		input[type="submit"] {
			padding: 10px;
			font-size: 18px;
			border-radius: 5px;
			border: none;
			background-color: #4CAF50;
			color: #fff;
			cursor: pointer;
			transition: all 0.2s ease-in-out;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php
			$valores = array();
			if(isset($_POST['submit'])) {
				$valores[0] = $_POST['valor1'];
				$valores[1] = $_POST['valor2'];
				$valores[2] = $_POST['valor3'];
				$valores[3] = $_POST['valor4'];
				$valores[4] = $_POST['valor5'];
			}
		?>
		<h1>Valores del usuario</h1>
		<form method="post">
			<label for="valor1">Valor 1:</label>
			<input type="text" id="valor1" name="valor1">

			<label for="valor2">Valor 2:</label>
			<input type="text" id="valor2" name="valor2">

			<label for="valor3">Valor 3:</label>
			<input type="text" id="valor3" name="valor3">

			<label for="valor4">Valor 4:</label>
			<input type="text" id="valor4" name="valor4">

			<label for="valor5">Valor 5:</label>
			<input type="text" id="valor5" name="valor5">
            <input type="submit" name="submit" value="Enviar">
		</form>
		<?php if(isset($_POST['submit'])) { ?>
			<h2>Valores ingresados:</h2>
			<ul>
				<?php foreach($valores as $valor) { ?>
					<li><?php echo $valor; ?></li>
				<?php } ?>
			</ul>
		<?php } ?>
	</div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title>Determinar tipo de triángulo</title>
	<style>
		body {
			background-image: url('https://media.istockphoto.com/id/1334934707/es/foto/educaci%C3%B3n-en-trigonometr%C3%ADa.jpg?s=1024x1024&w=is&k=20&c=gtJ_kgOGCXPU_2skWb3KW3GTIqeaZEKOPDgvGfi3O-E=');
			background-size: cover;
			color: #fff;
			font-family: Arial, sans-serif;
			text-align: center;
			padding-top: 50px;
		}

		h1 {
			font-size: 36px;
			margin-bottom: 30px;
		}

		form {
			margin-bottom: 30px;
		}

		input {
			font-size: 18px;
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-right: 10px;
		}

		button {
			font-size: 18px;
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #4CAF50;
			color: #fff;
			cursor: pointer;
		}

		.resultado {
			font-size: 24px;
			margin-top: 30px;
		}

		.isosceles {
			color: yellow;
		}

		.escaleno {
			color: orange;
		}

		.equilatero {
			color: red;
		}
	</style>
</head>
<body>
	<h1>Determinar tipo de triángulo</h1>
	<form method="post">
		<input type="number" name="lado1" placeholder="Lado 1">
		<input type="number" name="lado2" placeholder="Lado 2">
		<input type="number" name="lado3" placeholder="Lado 3">
		<button type="submit">Calcular</button>
	</form>
	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$lado1 = $_POST['lado1'];
			$lado2 = $_POST['lado2'];
			$lado3 = $_POST['lado3'];

			if($lado1 == $lado2 && $lado2 == $lado3) {
				echo "<div class='resultado equilatero'>El triángulo es equilátero</div>";
			} elseif($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
				echo "<div class='resultado isosceles'>El triángulo es isósceles</div>";
			} else {
				echo "<div class='resultado escaleno'>El triángulo es escaleno</div>";
			}
		}
	?>
</body>
</html>
















<!-- 
         <!DOCTYPE html>
<html>
<head>
	<title>Tienda de Helados</title>
	<style>
		body {
			background-image: url('https://www.mdzol.com/u/fotografias/m/2022/8/12/f1280x720-1264366_1396041_5050.jpg');
			background-size: cover;
			color: white;
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
			font-size: 3em;
			margin-top: 50px;
			margin-bottom: 50px;
			text-shadow: 2px 2px black;
		}

		form {
			text-align: center;
			font-size: 1.5em;
			margin-bottom: 50px;
		}

		input[type=number] {
			font-size: 1.5em;
			padding: 10px;
			margin: 10px;
			border: none;
			background-color: white;
			border-radius: 5px;
		}

		input[type=submit] {
			font-size: 1.5em;
			padding: 10px;
			margin: 10px;
			border: none;
			background-color: #007bff;
			color: white;
			border-radius: 5px;
			cursor: pointer;
			box-shadow: 2px 2px black;
		}

		input[type=submit]:hover {
			background-color: #0062cc;
		}

		.total {
			font-size: 2em;
			margin-top: 50px;
			text-align: center;
			text-shadow: 2px 2px black;
		}

		.ganador {
			font-size: 2em;
			margin-top: 50px;
			text-align: center;
			color: #28a745;
			text-shadow: 2px 2px black;
		}

		.perdedor {
			font-size: 2em;
			margin-top: 50px;
			text-align: center;
			color: #dc3545;
			text-shadow: 2px 2px black;
		}
	</style>
</head>
<body>
	<h1>Tienda de Helados</h1>
	<form method="post">
		<label for="conos">Conos ($1.50):</label>
		<input type="number" id="conos" name="conos" min="0" step="1" value="0">
		<br>
		<label for="conos_dobles">Conos dobles ($1.75):</label>
		<input type="number" id="conos_dobles" name="conos_dobles" min="0" step="1" value="0">
		<br>
		<label for="paletas">Paletas ($0.25):</label>
		<input type="number" id="paletas" name="paletas" min="0" step="1" value="0">
		<br>
		<input type="submit" name="submit" value="Comprar">
	</form>
	<?php
		if(isset($_POST['submit'])) {
			$conos = $_POST['conos'];
			$conos_dobles = $_POST['conos_dobles'];
			$paletas = $_POST['paletas'];

			$total = $conos * 1.5 + $conos_dobles * 1.75 + $paletas * 0.25;

			echo "<div class='total'>Total a pagar: $".number_format($total, 2)." </div>";
            if($total > 10) {
                echo "<div class='ganador'>¡Felicidades! Usted ha ganado un helado gratis.</div>";
            } else {
                echo "<div class='perdedor'>¡Lo siento! Usted no ha ganado un helado gratis.</div>";
            }
        }
    ?>
    
 -->
