<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario</title>
    <!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
<section class="hero is-primary">
  			<div class="hero-body">
    				<p class="title">Registro de libro</p>
  			</div>
		</section>
<section class="section">
<form action="guardar.php" method="post">
				<div>
					<label>Nombre del Libro:</label>
					<input class="input is-primary" type="text" name="nombresLibro" required>
				</div>
				<div>
					<label>Nombre del Autor:</label>
					<input class="input is-primary" type="text" name="nombresAutor" required>
				</div>
				<div>
					<label>Fecha de publicasion:</label>
					<input class="input is-primary" type="date" name="Fecha" required>
				</div>
				<div>
					<label>Editorial:</label>
					<input class="input is-primary" type="text" name="Editorial" required>
				</div>

				<div>
					<label>Año:</label>
					<input class="input is-primary" type="number" name="anio" required>
				</div>

                <div style="text-align: center">
                <br>
                <input type="submit" class="button is-link" value="Guardar">
                </div>
			</form>
	</section> 
</body>
</html>