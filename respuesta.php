<?php
function login($contrasena) {
    if ($contrasena == "1234") {
        return true;
    } else {
        return false;
    }
}

$mensaje = "";
$clase_texto = "";
$enlace_boton = "index.html";
$texto_boton = "Volver al inicio de sesión";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $contrasena = $_POST['contrasena'] ?? '';
    $result = login($contrasena);

    if ($result == true) {
        $mensaje = "¡Bienvenido a JKVAM!";
        $clase_texto = "text-success"; // Verde corporativo para éxito
        $enlace_boton = "listado_de_tickets.html";
        $texto_boton = "Ver listado de tickets";
    } else {
        $mensaje = "Contraseña incorrecta";
        $clase_texto = "text-danger"; // Rojo para error
    }
} else {
    $mensaje = "No se ha enviado ningún formulario.";
    $clase_texto = "text-warning";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>JKVAM - Resultado</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />
	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="index.html">
						<img src="logojkvam.png" alt="Logo" />
					</a>
				</div>
			</div>
		</div>

		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="vendors/images/login-page-img.png" alt="Login Image" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Estado de Acceso</h2>
							</div>
							
							<div class="text-center py-4">
								<!-- Mensaje dinámico (éxito o error) -->
								<h4 class="<?php echo $clase_texto; ?> mb-30"><?php echo $mensaje; ?></h4>

								<!-- Botón dinámico dependiendo del resultado -->
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<a class="btn btn-primary btn-lg btn-block" href="<?php echo $enlace_boton; ?>">
												<?php echo $texto_boton; ?>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- js -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
	</body>
</html>