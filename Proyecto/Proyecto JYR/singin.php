<?php 
include 'main/config.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>


	<title></title>
 <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!-- Link Popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <!-- Link Bootstrapp -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- Link CSS Mapa -->
  <link rel="stylesheet" type="text/css" href="CSS/mapa.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
<div>
	   <nav class="navbar navbar-dark bg-dark">
<div class="container-fluid">
	
<a href="login.php" class="navbar-brand"><strong>Inicio de Sesion</strong></a>
<a href="singin.php" class="navbar-brand"><strong>Registro</strong></a>
</div>
</nav>
</div>
<br>
	<div class="lform-group text-center">
		<h2 class="letra3" style="color: black; margin-left: 500px; margin-right: 500px">REGISTRO</h2>
	</div>
<div>
		<p class="login-box-msg text-center"> Registrate en <strong>"Match"</strong> para usar nuestros servicios.</p></div>
	<div class="div1 register-box-body formfondo align-self-center justify-content-center text-md-center">

		<form action="" method="POST" class="text-center">
			<div class="container-fluid form-group">
				

			<!--Nombre-->
			<h6 class="form-control-feedback" style="padding-top: 20px;">Ingrese su Nombre</h6>
			<div class="form-group has-feedback">
				<input type="text" name="nombre" class="form-control input2 " placeholder="Ingrese su Nombre" value="" required>
   			     <span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			
			
			<!--Apellido-->
			<h6 class="form-control-feedback">Ingrese su Apellido</h6>
			<div class="form-group has-feedback">
				<input type="text" name="apellido" class="form-control input2" placeholder="Ingrese su Apellido" value="" required>
				<span class="glyphicon glyphicon-star form-control-feedback"></span>
			</div>
			
			<!--Contrasena-->
			<h6 class="form-control-feedback">Ingrese su Contrasena</h6>
			<div class="form-group has-feedback">
				<input type="password" name="contrasena" class="form-control input2" placeholder="Ingrese su Contrasena" value="" required>
				<span class="glyphicon glyphicon-star form-control-feedback"></span>
			</div>

			<!--Contrasena Repeticion-->
			<h6 class="form-control-feedback">Por favor repita su Contrasena</h6>
			<div class="form-group has-feedback">
				<input type="password" name="repcontrasena" class="form-control input2" placeholder="Repita su Contrasena" value="" required>
				<span class="glyphicon glyphicon-star form-control-feedback"></span>
			</div>
			
			<!--Correo-->
			<h6 class="form-control-feedback">Ingrese su Correo Electronico</h6>
			<div class="form-group has-feedback">
				<input type="mail" name="correo" class="form-control input2" placeholder="Ingrese su Correo Electronico" value="" required>
				<span class="glyphicon glyphicon-star form-control-feedback"></span>
			</div>
			
			<!--Nickname-->
			<h6 class="form-control-feedback">Cree un Nombre de Usuario</h6>
			<div class="form-group has-feedback">
				<input type="text" name="nickname" class="form-control input2" placeholder="Ingrese su Nombre de usuario" value="" required>
				<span class="glyphicon glyphicon-star form-control-feedback"></span>
			</div>
		<div>
			<input type="checkbox" required name="condiciones">Haz leido los <a href="Terminos.php">"Terminos de Uso y Condiciones"</a>
		</div>
		<div>
			<p>Si ya tienes una cuenta haz click<a href="login.php"> aqui</a></p>
		</div>

			<div>
				<input type="submit" name="registrar" value="Registrar" class="btn btn-info">
						<p style="font-size: 5px; color: #F07149">. </p>
			</div>
			</div>
		
			</div>

		</form>

		<?php 
			if (isset($_POST['registrar'])) 
			{
			$nombre=($_POST['nombre']);
			$apellido=($_POST['apellido']);
			$contrasena=(md5($_POST['contrasena']));
			$contrasena2=(md5($_POST['repcontrasena']));
			$correo=($_POST['correo']);
			$nickname=($_POST['nickname']);
			
			$comprobarusuario=mysqli_num_rows(mysqli_query($connect,"SELECT Nickname FROM usuarios WHERE Nickname='$nickname'"));
			$comprobaremail=mysqli_num_rows(mysqli_query($connect,"SELECT Correo FROM usuarios WHERE Correo='$correo'"));


				if ($comprobarusuario != 0) 
				{
					echo "el Nombre de Usuario esta en uso, por favor escoja otro";
				}
				else
				{
					if ($comprobaremail != 0) {
						echo "El Correo Electronico esta en uso, porfavor escoja otro";
					}
					else
					{
						if ($contrasena != $contrasena2) 
						{
						echo "Las contrasenas no coinciden, intente de nuevo";
						}
						else
						{
							$insertar=mysqli_query($connect,"INSERT INTO usuarios (Nombre, Apellido, Contrasena, Correo, Nickname, Avatar) values ('$nombre','$apellido','$contrasena','$correo',$nickname',img/defect.jpg)");
							
							if ($insertar) {
								header("Location: cuentaregistrada.php");
							}
						}
					}
				}
			}

		?>
	</div>
</div>
<hr>
	      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-right my-auto">
            <span>Copyright &copy; <strong>J-R</strong></span>
        </div>
      </footer>
</body>
</html>