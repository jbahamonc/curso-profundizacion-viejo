<?php include 'inc/header.php'; ?>

<!-- CONTENT WRAPPER -->
<div class="content-wrapper">
	<section class="content-header no-index">
	    <div class="info-box p-rel">
	    	<span class="info-box-icon"><i class="fa fa-book"></i></span>
	    	<div class="info-box-content">
	          	<h2 class="info-box-text"><b>Gestión de Productos</b></h2>
	          	<span class="info-box-number">A continuación podra gestionar los productos relacionados con el proyecto de investigación.</span>
	        </div>
	    </div>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header">
              	<h3 class="box-title">Listado</h3>
            </div>
            <div class="box-body">
            	<table id="example" class="table table-striped table-bordered" style="width:100%">
			        <thead>
			            <tr>
			                <th>#</th>
			                <th width="200">Nombre del Producto</th>
			                <th width="400">Descripción</th>
			                <th>Tipología</th>
			                <th>Categoria</th>
			                <th>Tipo de Producto</th>
			                <th></th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>1</td>
			                <td>Propuesta final del proyecto de investigación y extensión</td>
			                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate similique recusandae beatae illo, quia non libero aperiam consequatur nostrum ut itaque corrupti totam ducimus at natus doloribus inventore iusto quo.</td>
			                <td>Generación de nuevo conocimiento o desarrollo tecnológico </td>
			                <td>LA1</td>
			                <td>Libro</td>
			                <td class="text-center">
			                	<a href="info-producto.php" type="button" class="btn btn-success btn-xs">
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
<a href="registro-productos.php" class="btn btn-danger pull-right btn-fixed" title="Agregar Nuevo Producto">
	<i class="fa fa-plus" style="vertical-align: bottom;"></i>
</a>

<?php include 'inc/footer.php' ?>