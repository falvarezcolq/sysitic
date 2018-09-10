@extends('layout.admin')

	@section('content')


	<!-- begin Lista de laboratorios -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Lista de laboratorios</h1>
    </div>
</div>
        
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Lista de laboratorios</div>
            <div class="panel-body">
                <div class="row">
				<table class="table">
					<thead>
						<th>Código Laboratorio</th>
						<th>Nombre de Laboratorio</th>
						<th>Ubicación</th>
						<th>Responsable</th>
						<th>Acciones</th>
					</thead>
					<tbody id="laboratories">
												
					</tbody>
				</table>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12"><a href="{{url('laboratory/create')}}" class="btn btn-primary">Adiccionar nuevo laboratorio</a></div>
</div>




		

<!--BEGIN MODAL-->
<input id="mostrar-modal" name="modal" type="radio" /> 
<input id="cerrar-modal" name="modal" type="radio" />
 
<div id="modal">
<label for="cerrar-modal" id="cerrar-modal-label"> X </label> 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="page-header">Editar laboratorio</h1>
        </div>
    </div>
    <div class="row">
    <div id="msj" class="col-md-10 col-md-offset-1"></div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1" id="ventana">
		<div class="panel panel-default">
                <div class="panel-heading">
                    Actualización de datos del Laboratorio
                </div>
                <div class="panel-body">
                <form action = "javascript:" >
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
                    <div class="form-group">
                        <label for="codigo">Codigo de laboratorio:</label>
                        <input class="form-control"type="text" name="codigo" id="codigo" required>
                    </div>

                    <div class="form-group">
                        <label for="nombre_lab">Nombre de laboratorio:</label>
                        <input class="form-control"type="text" name="nombre_lab" id="nombre_lab" required>
                    </div>

                    <div class="form-group">
                        <label for="ubicacion">Ubicación</label>
                        <input class="form-control"type="text" name="ubicacion" id="ubicacion" required>
                    </div>

                    <div class="form-group">
                        <label for="responsable">Responsable del laboratorio</label>
                        <select name="" id="responsable" class="form-control"></select>
                    </div>

                   
                    <div class="form-group">        
                        <button type="submit" class="btn btn-success" id="btn-register" >Actualizar Laboratorio</button>
                        <button type="reset" class="btn btn-danger " onclick="closeModal()" >Salir</button>
                        <button class="btn btn-primary" id="btn-delete-laboratory">Eliminar</button>
                    </div>
                </form>

                </div>
                
            </div>
        </div>
    </div> 
</div>

<div class="myalert" id="alert-confirm" style="display:none;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 id="alert-confirm-title">¿Realmente desea eliminar el registro?</h4> 
        </div>
        <div class="panel-body">
            <h5 id="alert-confirm-body">Esta acción tambien eliminara otros registros dependientes al actual.</h5>
                <button class="btn btn-primary" name="confirm" id="alert-confirm-btn">Confirmar</button>
                <button class="btn btn-danger" name="exit" id="alert-exit-btn" >Cancelar</button>
        </div>  
    </div>
</div>
<!--END MODAL-->

	@endsection

	@section('scripts')
     <script src="{{ asset('sysitic/js/laboratory.index.js')}}"></script>
    
    
    @endsection