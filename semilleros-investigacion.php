<?php include 'inc/header.php'; ?>

<!-- CONTENT WRAPPER -->
<div class="content-wrapper">
	<section class="content-header no-index">
	    <div class="info-box p-rel">
	    	<span class="info-box-icon"><i class="fa fa-book"></i></span>
	    	<div class="info-box-content">
	          	<h2 class="info-box-text"><b>Gestión de Semilleros de Investigación</b></h2>
	          	<span class="info-box-number">A continuación podra gestionar los semilleros de investigación.</span>
	        </div>
	    </div>
	</section>
	<section class="content">
		<div class="box box-warning">
			<div class="box-header">
              	<h3 class="box-title">Listado de Semilleros Registrados</h3>
            </div>
            <div class="box-body">
            	<table id="example" class="table table-striped table-bordered" style="width:100%">
			        <thead>
			            <tr>
			                <th>Nombre del Semillero</th>
			                <th>Siglas</th>
			                <th>Fecha de Creación</th>
			                <th>Tutor(es)</th>
			                <th>Ubicación</th>
			                <th>Acciones</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>Semillero de Investigación de Desarrollo de Aplicaciones Web</td>
			                <td>SIAWEB</td>
			                <td>02/02/2000</td>
			                <td>Judith Del Pilar Rodriguez Tenjo - Nelson Beltran</td>
			                <td>Aula Sur 404</td>
			                <td class="text-center">
			                	<button type="button" class="btn btn-danger btn-xs">
			                		<i class="fa fa-trash" aria-hidden="true"></i>
			                	</button>
			                	<a href="info-semillero.php" class="btn btn-success btn-xs">
			                		<i class="fa fa-eye" aria-hidden="true"></i>
			                	</a>
			                </td>
			            </tr>
			        </tbody>
			    </table>
            </div>
		</div>
	</section>
</div>
<a href="registro-semillero.php" class="btn btn-danger pull-right btn-fixed add-person" title="Nuevo Grupo de Investigación">
	<i class="fa fa-plus" style="vertical-align: bottom;"></i>
</a>
<?php include 'inc/footer.php' ?>