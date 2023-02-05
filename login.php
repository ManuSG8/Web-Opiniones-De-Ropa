<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
	/>
	<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"
	></script>
	<link rel="stylesheet" href="styles/navbar.css">
	<link rel="stylesheet" href="styles/estilosLogin.css" />
    <title>Login</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
        <div class="container-fluid">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" id="home">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                </svg>
            </a>
        </div>
	</nav>

    <?php
    
        require('config/connection.php');
        require('functions/functions.php');

        if(isset($_POST['aceptar'])) {
            engadirUsuario($_POST);
        }
    
    ?>

<div class="contenedor">
			<div class="esquerda">
				<h1 class="h1">Login</h1>

				<div class="formulario">
					<form action="mostra.php" method="POST">
						<div class="form-floating mb-3">
							<input
								type="text"
								name="nomeUsuario"
								id="nomeUsuario"
								class="form-control"
								placeholder="Nome de Usuario"
								required
							/>
							<label for="nomeUsuario" class="input-group">
								Nome de Usuario
							</label>
							<br />
						</div>

						<div class="form-floating mb-3">
							<input
								type="password"
								name="contrasinal"
								id="contrasinal"
								class="form-control"
								placeholder="Contrasinal"
								required
							/>
							<label for="contrasinal" class="input-group">
								Contrasinal
							</label>
							<br />
						</div>

                        <div class="form-floating mb-3">
							<select name="idioma" id="idioma" class="form-control">
                                <option value="0">Galego</option>
                                <option value="1">Castellano</option>
                                <option value="2">English</option>
                                <option value="3">Italiano</option>
                                <option value="4">Deutsch</option>
                            </select>
							<label for="idioma" class="input-group">
								Seleccione o idioma
							</label>
							<br />
						</div>

						<p>Non tes conta? <a href="rexistro.html">Crea unha!</a></p>

						<input
							type="submit"
							name="login"
							value="Aceptar"
							class="btn btn-primary"
						/>
					</form>
				</div>
			</div>
			<div class="dereita">
				<h2 class="h2 titulo">DressDebate by Manu</h2>
				<img src="imaxes/imagen2.png" alt="">
			</div>
		</div>
</body>
</html>