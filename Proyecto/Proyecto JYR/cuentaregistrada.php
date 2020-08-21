<!DOCTYPE html>
<html>
<head>
	<style> 
.div1 {
  width: 100px;
  height: 100px;
  position: relative;
  animation-name: example;
  animation-duration: 3s;  
  animation-fill-mode: forwards;
  margin-left: 590px;
}

@keyframes example {
  from {top: 0px;}
  to {top: 180px; background-color: blue;}
}
</style>
	<title></title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="CSS/mapa.css">
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
<br><br><br><br>
<div>
	<h1 class="text-center" style="font-family: monospace; font-size: 40px"><strong>¡FELICIDADES EL REGISTRO SE HA COMPLETADO!</strong></h1>
</div>
<br>
<div class="div1">
	<img src="img/pulgararriba.jpg" width="200" height="200" style="display: block; margin: auto;">
</div>
<div>
	<h3 class="text-center" style="font-family: monospace; font-size: 20px">Para continuar solo debe <a href="login.php"> iniciar sesion</a></h3>
</div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
	      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-right my-auto">
            <span>Copyright &copy; <strong>J-R</strong></span>
        </div>
      </footer>
</body>
</html>