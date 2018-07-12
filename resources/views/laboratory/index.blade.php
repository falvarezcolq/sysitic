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
        <div class="col-md-10 col-md-offset-1" id="ventana">
		<div class="panel panel-default">
                <div class="panel-heading">
                    Formulario de registro de nuevo laboratorio
                </div>
                <div class="panel-body">
                <form action = "javascript:" >
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
                    <div class="form-group">
                        <label for="codigo">Codigo de laboratorio:</label>
                        <input class="form-control"type="text" name="codigo" id="codigo">
                    </div>

                    <div class="form-group">
                        <label for="nombre_lab">Nombre de laboratorio:</label>
                        <input class="form-control"type="text" name="nombre_lab" id="nombre_lab">
                    </div>

                    <div class="form-group">
                        <label for="ubicacion">Ubicacion</label>
                        <input class="form-control"type="text" name="ubicacion" id="ubicacion">
                    </div>

                    <select name="" id="responsable" class="form-control">
                    </select>
                    
                    <button type="submit" class="btn btn-success" id="btn-register" >Registra nuevo</button>
                    <button type="reset" class="btn btn-primary">Limpiar</button>
                </form>

                </div>
                
            </div>
        </div>
    </div>
        
</div>
<!--END MODAL-->



	@endsection

	@section('scripts')
     <script src="{{ asset('sysitic/js/laboratory.index.js')}}"></script>
    @endsection