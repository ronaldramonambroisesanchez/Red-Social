<?php
function Headerb(){
?>
<div>
	   <nav class="navbar navbar-dark bg-dark">
 <button class="btn btn-success dropdown-toggle " type="button" data-toggle="dropdown">Opciones <span class="caret float-right"></span></button>
 <ul class="dropdown-menu float-right">
 <li class="dropdown-header"">Opciones</li>
 <ul class="sidebar-menu">
 <li>
 	<a href="main/logout.php">
 		<i class="fa fa-user"></i><span>Cerrar Sesion</span>
		<small class="label pull-right bg-green"></small>
 	</a>
 </li>
</ul>
<ul class="sidebar-menu">
        <li>
          <a href="mensajes.php">
            <i class="fa fa-comment"></i> <span>Chat</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
</ul>
 <ul class="sidebar-menu">

 <li>
 	<a href="#">
 		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></i><span>About Us</span>
	</a>
</li>
</ul>
 <li class="dropdown-header"> Menu de Navegacion</li>
       <ul class="sidebar-menu">
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Noticias</span>
          </a>
        </li>
        <li>
          <a href="mensajes.php">
            <i class="fa fa-comment"></i> <span>Chat</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fa fa-user"></i> <span>Mis seguidores</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fa fa-arrow-right"></i> <span>Seguidos</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fa fa-heart"></i> <span>Me gusta</span>
          </a>
        </li>
          </ul>
        </li>
      </ul>
 </ul>
<div class="container">
<a href="index.php" class="navbar-brand"><strong>Inicio</strong></a>
<a href="perfil.php" class="navbar-brand"><strong>Perfil</strong></a>




 </div>
</div>


</nav>

</div>
<?php  	
}
?>



<?php
function Side ()

{
?>
<!-- START LEFT SIDE -->
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left">
          <img src="avatars/<?php echo $_SESSION['avatar']; ?>" width="50" alt="User Image"><a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        <div class="pull-left info">
          

        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Encuentra Lo que Buscas">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

 
    </section>
    <!-- /.sidebar -->
  </aside>


<!-- END LEFT SIDE -->
<?php
}
?>
