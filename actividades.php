<?php include 'inc/header.php'; ?>

<!-- CONTENT WRAPPER -->
<div class="content-wrapper">
	<section class="content-header no-index">
	    <div class="info-box p-rel">
	    	<span class="info-box-icon"><i class="fa fa-book"></i></span>
	    	<div class="info-box-content">
	          	<h2 class="info-box-text"><b>Gestión de Actividades</b></h2>
	          	<span class="info-box-number">A continuación podra gestionar las actividades del grupo de investigación o semilleros de investigación.</span>
	        </div>
	    </div>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header">
              	<h3 class="box-title">Listado de Actividades</h3>
            </div>
            <div class="box-body">
            	<table id="example" class="table table-striped table-bordered" style="width:100%">
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Nombre de la Actividad</th>
			                <th>Fecha de Realización</th>
			                <th>Responsables</th>
			                <th>Producto</th>
			                <th>Acciones</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>1</td>
			                <td>Uso de un repositorio digital como un recurso de comunicación que integra tecnologías de información  mediante una estrategia de visibilidad e impacto de la producción</td>
			                <td>Febrero 2018 – Noviembre 2018</td>
			                <td>Oscar A. Gallardo Perez - Milton Jesus Vera C - Judith del Pilar Rodriguez T</td>
			                <td>Envío de Articulo para publicación  Journal Physic ConferenCes</td>
			                <td class="text-center">
			                	<button type="button" class="btn btn-danger btn-xs">
			                		<i class="fa fa-trash" aria-hidden="true"></i>
			                	</button>
			                </td>
			            </tr>
			        </tbody>
			    </table>
            </div>
		</div>
	</section>
</div>
<a href="" data-toggle="modal" data-target="#modal" class="btn btn-danger pull-right btn-fixed" title="Agregar Nuevo Personal">
	<i class="fa fa-plus" style="vertical-align: bottom;"></i>
</a>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
    		<form action="">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title">Formulario de Registro</h4>
	      		</div>
	      		<div class="modal-body">
	      			<div class="alert alert-warning alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                <h4><i class="icon fa fa-warning"></i> Importante!</h4>
		                Las Actividadedes de Investigación corresponden a Espacios de socialización, Foros, Reuniones, Elaboración de documentos, entre otros.
		            </div>
	                <div class="form-group col-xs-12">
	                  	<label>Nombre de la Actividad (*)</label>
	                  	<input type="text" class="form-control">
	                </div>			                
	                <div class="form-group col-xs-12">
	                  	<label>Responsables (*)</label>
	                  	<input type="text" class="form-control">
	                </div>			                		
	                <div class="form-group col-xs-12">
	                  	<label>Producto (*)</label>
	                  	<input type="text" class="form-control">
	                </div>     
	                <div class="form-group col-xs-12">
	                  	<label>Vincular a (*)</label>
	                  	<select class="form-control" id="select-rol-investigador">
	                  		<option disabled selected>Seleccione</option>
		                    <option value="0">Grupo de Investigación</option>
		                    <option value="1">Semillero de Investigación</option>
	                  	</select>
	                </div>  		
	      		</div>
		      	<div class="modal-footer">
		       		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        	<button type="button" class="btn btn-primary">Guardar</button>
		      	</div>
	      	</form>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php include 'inc/footer.php' ?>