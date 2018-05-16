@extends('layout.admin')

@section('content')

            <!-- begin REPORTAR PROBLEMA -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reportar problema</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Reportar problema de un equipo de computación</div>
                        <div class="panel-body">
                            <div class="row">
                                <form action="" class="form">
                                <div class="form-group col-lg-6" >
                                    <label for="coditic">Codigo ITIC</label>
                                    <input type="number" name="coditic" class="form-control" placeholder="ej: 123">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="codpc">Codigo informatica PC</label>
                                    <input type="text" name ="codpc" class="form-control" placeholder="ej: LB-MT12">
                                </div>
                                <div  class="form-group col-lg-8">
                                    <label for="codprob">Problema</label>
                                    
                                    <input list="problems" name="problems" class="form-control" placeholder="ej: Pantalla Negra">
                                    <datalist id="problems">
                                    <option value="Pantalla negra">
                                    <option value="Pantalla Azul">
                                    <option value="Ruidos al encender">
                                    <option value="Sin conexion a internet">
                                    <option value="Zona horaria desconfigurada">
                                    </datalist>  
                                 </div>

                                 <div class="col-lg-4">
                                    <br>
                                    <button type="submit" class="btn btn-danger"> Seleccionar </button>
                                </div>
                             
                             

                            </div>


                            <div class="col-lg-8">
                                   <button type="submit" class="btn btn-success"> Reportar </button>

                                   <button type="reset" class="btn btn-primary"> Limpiar</button>

                                   <button class="btn btn-warning" href="problems.html"> 
                                    <span class="fa fa-search"></span> Ver lista de problemas</button>
                                </div>

                            <br>
                            <br>
                           <span id="res" class="text-success"> Reportado con exito a horas <strong>5:00</strong> pm</span>
                     <span id="res" class="text-danger"> NO hay conexion hay internet</span> 
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END REPORTAR PROBLEMA -->

           <!-- BEGIN LISTA DE PROBLEMAS DE EQUIPOS -->

           <div class="row">
                <div class="col">
                     <h1 class="page-header">Lista de problemas ara equipos</h1>
                </div>
           </div>
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Listado de problemas para un equipo:
                                    <div class=" input-group" class="float-right">
                                        <input type="text" class="form-control" placeholder="Buscar problema ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning" type="button">Buscar</button>
                                        </span>

                                    </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                <ol>
                                
                                    <div class="col-lg-8 panel-heading"><li>Pantalla negra</li></div>
                                    <div class="col-lg-4"><button type="submit" class="btn btn-danger"> Seleccionar </button>
                                    </div>

                                    <div class="col-lg-8 panel-heading"><li>Pantalla azul</li></div>
                                    <div class="col-lg-4"><button type="submit" class="btn btn-danger"> Seleccionar </button>
                                    </div>

                                    <div class="col-lg-8 panel-heading"><li>Ruidos al encender</li></div>
                                    <div class="col-lg-4"><button type="submit" class="btn btn-danger"> Seleccionar </button>
                                    </div>

                                    <div class="col-lg-8 panel-heading"><li>Sin conexion a internet</li></div>
                                    <div class="col-lg-4"><button type="submit" class="btn btn-danger"> Seleccionar </button>
                                    </div>

                                    <div class="col-lg-8 panel-heading"><li>Zona horaria desconfigurada</li></div>
                                    <div class="col-lg-4"><button type="submit" class="btn btn-danger"> Seleccionar </button>
                                    </div>

                                </ol>
                                </div>
                                <div class="col-lg-4">
                                   
                                    <button type="submit" class="btn btn-primary"> Adicionar Nuevo Problema </button>
                                    
                                    <button type="submit" class="btn btn-success"> Volver  al  menu  Principal </button>
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            
           <!-- END LISTA DE PROBLEMAS DE EQUIPOS -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Adicionar nuevo problema estandar de computadora</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                     <form action="" class="form">
                                <div class="form-group">
                                    <label for="">Descripci&oacute;n del problema</label>
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
                                   <button type="submit" class="btn btn-danger">Salir </button>
                            </form>
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
@endsection