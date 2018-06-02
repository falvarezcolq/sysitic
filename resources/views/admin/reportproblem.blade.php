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
                                    <input type="number" name="codItic" id="codItic"class="form-control" placeholder="ej: 123">
                                    <div id="msjCodItic"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="codpc">Codigo informatica PC</label>
                                    <input type="text" name ="codpc" id="codpc" class="form-control" placeholder="ej: LB-MT12">
                                    <div id="msjCodPc"></div>
                                </div>
                                <div  class="form-group col-lg-8">
                                    <label for="codprob">Problema</label>
                                    <input list="problems" name="problems" id="problems" class="form-control" placeholder="ej: Pantalla Negra">
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

            
@endsection

@section('scripts')
    <script src="{{ asset('/sysitic/js/reportProblem.js')}}"></script>
@endsection