@extends('layout.admin')

@section('content')
   
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Adicionar nuevo problema standar</h1>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Adicionar nuevo problema estandar de computadora</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                     <form action="" class="form">
                                <div class="form-group">
                                    <label for="">Descripcion del problema</label>
                                    <textarea name="" id="" cols="20" rows="3" class="form-control" placeholder="Describe el problema" required></textarea>
                                </div>
                                <div class="form-group" >
                                    <label for="">tipo de problema</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">hardware</option>
                                        <option value="">software</option>
                                        <option value="">limpieza</option>
                                    </select>
                                </div>
    
                                <div>
                                        <p class="text-primary">Agregar solucion al nuevo problema</p>
                                </div>

                                <div>
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Solución del problema</th>
                                                <th>tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_new_problem">
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <textarea name="" id="" cols="10" rows="1" class="form-control"></textarea>
                                                </td>
                                                <td>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">sol</option>
                                                        <option value="">sol</option>
                                                        <option value="">sol</option>  
                                                    </select>

                                                     <div id="button_add"><button class="btn btn-info btn-circle" onclick="add_row_table()"><i class="fa fa-plus"></i></button></div>
                                                </td>
                                            </tr>
                                            

                                        </tbody>
                                    </table>
                                </div>
                                <button type="submit" class="btn btn-success">  Registrar nuevo problema para equipos</button>
                            </form>
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
@endsection