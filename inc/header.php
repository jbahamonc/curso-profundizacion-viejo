<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Curso de profundización</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/select2.min.css">	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/skin-red-light.min.css">
	<link rel="stylesheet" href="css/AdminLTE.min.css">	
	<link rel="stylesheet" href="css/pace.min.css">
	<link rel="stylesheet" href="css/daterangepicker.css">
	<link rel="stylesheet" href="css/admin.css">
</head>
<body class="hold-transition skin-red-light fixed">
	<div class="wrapper">
		<!-- NAVBAR -->
	    <header class="main-header">
	      	<!-- Logo -->
	      	<a href="./" class="logo">
	        	<!-- logo for regular state and mobile devices -->
	        	<span class="logo-lg">NOMBRE</b></span>
	      	</a>
	      	<!-- Header Navbar -->
	      	<nav class="navbar navbar-static-top" role="navigation">
	        	<!-- Sidebar toggle button-->
	        	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	          		<span class="sr-only">Toggle navigation</span>
	        	</a>
		        <!-- Navbar Right Menu -->
		        <div class="navbar-custom-menu">
		            <ul class="nav navbar-nav">
		                <!-- User Account Menu -->
		                <li class="dropdown user user-menu">
		                  	<!-- Menu Toggle Button -->
		                  	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                    	<!-- The user image in the navbar-->
		                    	<img src="img/avatar5.png" class="user-image" alt="User Image">
		                    	<!-- hidden-xs hides the username on small devices so only the image appears. -->
		                    	<span class="hidden-xs" style="text-transform: capitalize;">NOMBRE</span>
		                  	</a>
		                  	<ul class="dropdown-menu">
		                    	<!-- The user image in the menu -->
		                    	<li class="user-header">
		                      		<img src="img/avatar5.png" class="img-circle" alt="User Image">

		                      		<p style="text-transform: capitalize;">
		                        		NOMBRE
		                        		<small>Administrador</small>
		                      		</p>
		                    	</li>
			                    <!-- Menu Footer-->
			                    <li class="user-footer">
			                      	<div class="pull-right">
			                        	<a href="../../panel-admin/close/" class="btn btn-default btn-flat">Cerrar Sesion</a>
			                      	</div>
			                    </li>
		                	</ul>
		            	</li>
		          	</ul>
		        </div>
	      	</nav>
	    </header>
	    <!-- /END NAVBAR -->
	    <!-- SIDEBAR!-->
	    <aside class="main-sidebar">
	      	<section class="sidebar">
		        <div class="user-panel">
		            <div class="pull-left image">
		                <img src="img/avatar5.png" class="img-circle" alt="User Image">
		            </div>
		            <div class="pull-left info">
		                <p style="text-transform: capitalize;">Nombre</p>
		                <!-- Status -->
		                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		            </div>
		        </div>
	        	<!-- Sidebar Menu -->
	        	<ul class="sidebar-menu tree" data-widget="tree">
	        		<li class="header">MENÚ PRINCIPAL</li>
	        		<li>
		                <a href="index.php"><i class="fa fa-home"></i> <span>home</span></a>
		            </li>	        		
		            <li class="treeview">
		            	<a href="#">
		            		<i class="fa fa-home"></i>
		            		<span>Gestión de Grupos</span>
		            		<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
		            	</a>
		            	<ul class="treeview-menu" style="display: none;">
				            <li><a href="registro-grupo.php"><i class="fa fa-circle-o"></i>Registro</a></li>
				            <li><a href="grupos-investigacion.php"><i class="fa fa-circle-o"></i>Ver Grupos</a></li>
				            <li><a href="categorias-grupos.php"><i class="fa fa-circle-o"></i><span>Categorias</span></a></li>
				        </ul>
		            </li>	
		            <li class="treeview">
		            	<a href="#">
		            		<i class="fa fa-home"></i>
		            		<span>Gestión de Semilleros</span>
		            		<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
		            	</a>
		            	<ul class="treeview-menu" style="display: none;">
				            <li><a href="registro-semillero.php"><i class="fa fa-circle-o"></i>Registro</a></li>
				            <li><a href="semilleros-investigacion.php"><i class="fa fa-circle-o"></i>Ver Semilleros</a></li>
				        </ul>
		            </li>        				  		
		            <li class="treeview">
		            	<a href="#">
		            		<i class="fa fa-home"></i>
		            		<span>Gestión de Categorias</span>
		            		<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
		            	</a>
		            	<ul class="treeview-menu" style="display: none;">
				            <li>
				                <a href="categoria-dedicacion.php"><i class="fa fa-circle-o"></i> <span>Categorias Dedicación</span></a>
				            </li>
				            <li>
				                <a href="categoria-docente.php"><i class="fa fa-circle-o"></i> <span>Categoria Docente</span></a>
				            </li>
				            <li>
				                <a href="categoria-investigador.php"><i class="fa fa-circle-o"></i> <span>Categoria Investigador</span></a>
				            </li>
				        </ul>
			        </li>
			        <li class="treeview">
		            	<a href="#">
		            		<i class="fa fa-home"></i>
		            		<span>Gestión de Tipologías</span>
		            		<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
		            	</a>
		            	<ul class="treeview-menu" style="display: none;">
				            <li>
				                <a href="tipologias-producto.php"><i class="fa fa-circle-o"></i> <span>Tipologías</span></a>
				            </li>
				            <li>
				                <a href="subtipologia-producto.php"><i class="fa fa-circle-o"></i> <span>Subtipologías</span></a>
				            </li>
				            <li>
				                <a href="tipos-producto.php"><i class="fa fa-circle-o"></i> <span>Tipo de Productos</span></a>
				            </li>
				            <li>
				                <a href="categoria-productos.php"><i class="fa fa-circle-o"></i> <span>Categorias</span></a>
				            </li>
				        </ul>
			        </li>
		            <li>
		                <a href="facultad.php"><i class="fa fa-home"></i> <span>Gestion de Facultades</span></a>
		            </li>
		            <li>
		                <a href="programas-academicos.php"><i class="fa fa-home"></i> <span>Gestion de Programas</span></a>
		            </li>
		        </ul>
	      	</section>
	    </aside>
	    <!-- /END SIDEBAR -->