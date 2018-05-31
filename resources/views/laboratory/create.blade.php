@extends('layout.admin')
@section('content')

    <div class="container-fluid">
               
               <div id="msj"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laboratorio: Registrar nuevo</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
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

@endsection

@section('scripts')
     <script src="{{ asset('sysitic/js/laboratory.create.js')}}"></script>
@endsection