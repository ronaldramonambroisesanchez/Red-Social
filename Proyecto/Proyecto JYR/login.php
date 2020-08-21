<?php
include ("main/config.php");
session_start();

if (isset($_SESSION['usuario'])) {
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesion</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!-- Link Popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <!-- Link Bootstrapp -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- Link CSS -->
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
<body>

<div>
	   <nav class="navbar navbar-dark bg-dark">
<div class="container-fluid">
	
<a href="login.php" class="navbar-brand"><strong>Inicio de Sesion</strong></a>
<a href="singin.php" class="navbar-brand"><strong>Registro</strong></a>
</div>
</nav>
</div>
<br><br>
<form action="" method="POST" class="formfondo align-self-center justify-content-center text-md-center">
	<div class="container-fluid form-group">
		<br>
<div class="text-center">
	<h2 class="letra3">LOGIN</h2>
</div>
<hr style="color: white">
			<h4 class="align-self-center">Introduzca el nombre de usuario</h4>
		
		<input class="form-control margintext"  type="text" name="usuario" placeholder="Nombre de Usuario" class="align-self-center" required>
		<br><br>
		<h4 class="align-self-center">Ingrese su Contrasena</h4>
		
		<input type="password" class="margintext form-control" name="contrasena" placeholder="Contrasena" class="align-self-center" required>
<br>
		<input type="submit" name="iniciarsesion" value="Ingresar" class="bottom-right btn btn-primary">

	
	</div>
	<div>
			<p>Si aun no tienes una cuenta haz click<a href="singin.php"> aqui</a></p>
		</div>
<br>
</form>
<br><br>
<hr>
	      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-right my-auto">
            <span>Copyright &copy; <strong>J-R</strong></span>
        </div>
      </footer>
<?php
if (isset($_POST['iniciarsesion'])) {
	
	$usuario=$_POST['usuario'];
	$usuario=strip_tags($_POST['usuario']);
	$usuario=trim($_POST['usuario']);

	$contrasena=(md5($_POST['contrasena']));
	$contrasena=strip_tags(md5($_POST['contrasena']));
	$contrasena=trim (md5($_POST['contrasena']));


$comprobar=mysqli_query($connect,"SELECT * FROM usuarios WHERE Nickname = '$usuario' AND Contrasena = '$contrasena'");

$contar= mysqli_num_rows($comprobar);

if ($contar != 1) 
{
	echo "Por favor revise los datos ingresados"; 
}
	else
	{
	while($row=mysqli_fetch_array($comprobar))

		{
			if ($usuario=$row['usuario'] && $contrasena = $row['contrasena']) 
			{
			$_SESSION['usuario']=$row['$usuario'];
			$_SESSION['id']=$row['id_use'];

			header('Location: index.php');

			}
		}

	}



}


?>
</body>
</html>
