<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Leer Archivo txt en php</title>
    <!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
            <section class="hero is-primary">
  			<div class="hero-body">
    				<p class="title">Biblioteca de libros</p>
  			</div>
		</section>
            <section class="section">
            <p class="subtitle">Informacion del libro</p>
                 <div>
                    
                 <?php
	                $nombresLibro = $_POST['nombresLibro'];
	                $nombresAutor = $_POST['nombresAutor'];
                    $Fecha = $_POST['Fecha'];
	                $Editorial = $_POST['Editorial'];
                    $anio = $_POST['anio'];
	                $libros = fopen("libros.txt", "w");
                    fputs($libros,  $nombresLibro);
                    fputs($libros,  "<br>");
                    fputs($libros,  $nombresAutor);
                    fputs($libros,  "<br>");
                    fputs($libros,  $Fecha);
                    fputs($libros,  "<br>");
                    fputs($libros,  $Editorial);
                    fputs($libros,  "<br>");
                    fputs($libros,   $anio);
	                fclose($libros);
                ?>
                <?php
	                $lecturaArchivo = fopen("libros.txt", "r");
		            while (!feof($lecturaArchivo)) {
			            $linea = fgets($lecturaArchivo);
			            echo nl2br($linea);
			        }
		            fclose($lecturaArchivo);
	            ?>
                      
            </div>
        </section> 
    </body>
</html>