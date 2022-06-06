<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>datos de contacto</title>
	<meta name="description" content="Curriculum Vitae de Edgardo Cometto. www.ecometto.com.ar para servicios de diseño y programacion web">
	<!-- bootstrap styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!-- iconos -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<!-- estilos propios -->
	<link rel="stylesheet" href="./css/styles.css" />

</head>

<body>
	<header>
		<?php // include "./views/header.php";
		       include "./views/nav.php";
		?>
	</header>


	<div class="container">
		<main>
			<div class="row">
				<h3 class="mt-3 py-1 h3-title" id="datos-container">DATOS PERSONALES... <i id="datos-icono" class="fas fa-chevron-circle-down "></i></h3>
				<p id="datos-parrafo">
					<b>APELLIDO Y NOMBRE:</b> Edgardo Daniel Cometto <br><br>
					<b>DOMICILIO:</b> Peredo 1067 - Cordoba <br><br>
					<b>FECHA DE NACIMIENTO: </b> 31/03/1980 <br><br>
					<b>NUMERO TELEFONICO:</b><a href="tel:+5493517648232"> 3517648232 - 3547651270 </a><br> <br>
					<b><i class="fab fa-whatsapp-square"> </i> CONTACTO WHATS APP 
						<a href="https://api.whatsapp.com/send?phone=+5493517648232">Click Here</a></b> <br> <br>
					<b>E-MAIL:</b><a target="_blank" href="mailto:ecometto@hotmail.com"> ecometto@hotmail.com </a> <br> <br>
					<b>Perfil LinkedIn:</b><a target="_blank" href="https://www.linkedin.com/in/edgardocometto?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BHb2ab6lSRxqXuAEBbw%2BLSg%3D%3D">linkedin.com/in/edgardocometto</a>
					<br> <br>
					<b>WEB Page:</b> <strong> <a target="_blank" href="https://www.ecometto.com.ar"> www.ecometto.com.ar </a> </strong><br> <br>
				</p>
			</div>


			<div class="row">
				<h3 class="text-center">Formulario de contacto</h3>
				<form class="col-md-8 offset-md-2 bg-light mb-5 rounded" action="mailer.php" method="POST">
					<div class="form-group my-3">
						<label for="ayn" class=""><i class=" fas fa-file-signature"></i>Apellido y Nombre</label>
						<input autocomplete="off" type="text" class="form-control bg-light" placeholder="Apellido y Nombre" required name="ayn">
					</div>
					<div class="form-group mb-3">
						<label for="" class=""><i class=" fas fa-envelope-open"></i>E-mail</label>
						<input autocomplete="off" type="email" class="form-control bg-light" placeholder="Direccion de e-mail" required name="mail">
					</div>
					<div class="form-group mb-3">
						<label class="" for=""><i class="fas fa-comment"></i>Comentarios</label>
						<textarea autocomplete="off" class="form-control bg-light" placeholder="Ingrese su consulta/comentario" required name="comentario" id="" cols="30" rows="3"></textarea>
					</div>
					<div class="text-center mb-4">
						<input type="submit" value="Enviar Comentario">
					</div>
				</form>
			</div>
		</main>
	</div>



	<footer>
		<?php include "./views/footer.php";
		?>
	</footer>


	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<script src="app.js"></script>
</body>

</html>