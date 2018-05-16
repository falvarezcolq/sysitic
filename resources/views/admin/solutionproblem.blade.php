@extends('layout.admin')

@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Solucionar Problemas de PC</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Solucionar problemas de PC</div>
                        <div class="panel-body">
                            <div class="row">
                               
                                 <div class="form-group col-lg-4" >
                                    <label for="coditic">Codigo ITIC</label>
                                    <input type="number" name="coditic" class="form-control" placeholder="ej: 123">
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="codpc">Codigo informatica PC</label>
                                    <input type="text" name ="codpc" class="form-control" placeholder="ej: LB-MT12">
                                </div>
                                
                                <div class="form-group col-lg-4" >
                                    <label for="coditic">Problema</label>
                                    <input type="number" name="coditic" class="form-control" placeholder="ej: DISCO DURO">
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="codpc">Laboratorio</label>
                                   <select class="form-control" name="lab" id="">
                                       <option value="1">ninguno</option>
                                       <option value="1">LASIN 1</option>
                                       <option value="1">lABORATORIO BASICO</option>
                                       <option value="1">LAB BASE DE DATOS</option>
                                       
                                   </select>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label for="problempc">Equipos con problemas </label>
                                        <table class="table table-striped table-advance table-hover">
                                            <tbody>
                                                <tr>
                                                    <th> Codigo ITIC</th>
                                                    <th> Codigo PC</th>
                                                    <th> Tipo</th>
                                                    <th> Problema </th>
                                                    <th> Acci&oacute;n </th>
                                                </tr>

                                                <tr>
                                                    <td>1</td>
                                                    <td>P3L303</td>
                                                    <td>Software</td>
                                                    <td>Verificaci&oacute;n y configuraci&oacute;n del BIOS</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                             <button class="btn btn-xs btn-warning btn-secondary">Solucionar</button>
                                                            <button class="btn btn-xs btn-primary btn-secondary"> Ver </button>
                                                        </div>
                                                       
                                                    </td>
                                                </tr>  

                                                <tr>
                                                    <td>1</td>
                                                    <td>P3L303</td>
                                                    <td>Software</td>
                                                    <td>Verificaci&oacute;n y configuraci&oacute;n del BIOS</td>
                                                    <td>
                                                        <div clas   s="btn-group" role="group">
                                                             <button class="btn btn-xs btn-default btn-secondary">Solucionado</button>
                                                            <button class="btn btn-xs btn-primary btn-secondary"> Ver </button>
                                                        </div>
                                                       
                                                    </td>
                                                </tr> 
                                                             
                                            </tbody>
                                         </table>
                                        
                                        
                                        {{-- <button  class="btn btn-success">Aceptar</button>
                                        <button type="submit" class="btn btn-danger">Salir </button>  --}}
                                    </div>

                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>



















            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Solucionar problemas de PC</div>
                        <div class="panel-body">
                            <div class="row">
                                <form action="" class="form">
                               
                                 <div class="form-group col-lg-4" >
                                    <label for="coditic">Codigo ITIC</label>
                                    <input type="number" name="coditic" class="form-control" placeholder="ej: 123">
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="codpc">Codigo informatica PC</label>
                                    <input type="text" name ="codpc" class="form-control" placeholder="ej: LB-MT12">
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group ">
                                        <label for="problempc">Posibles soluciones</label>
                                        <table class="table table-striped table-advance table-hover">
                                            <tbody>
                                                <tr>
                                                    <th> N&uacute;mero</th>
                                                    <th> Tipo</th>
                                                    <th> Problema </th>
                                                    <th> Acci&oacute;n </th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Software</td>
                                                    <td>Verificaci&oacute;n y configuraci&oacute;n del BIOS</td>
                                                    <td>
                                                        <button type="submit" class="btn btn-warning"> Solucionar </button>
                                                        
                                                    </td>
                                                </tr>   
                                                 <tr>
                                                    <td>1</td>
                                                    <td>Software</td>
                                                    <td>Verificaci&oacute;n y configuraci&oacute;n del BIOS</td>
                                                    <td>
                                                        <button type="submit" class="btn btn-default"> Solucionado</button>
                                                    </td>
                                                </tr>               
                                            </tbody>
                                         </table>
                                        
                                        
                                       {{--  <button  class="btn btn-success">Aceptar</button>
                                        <button type="submit" class="btn btn-danger">Salir </button>
                                    </div>

                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

         <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Aplicar soluci&oacute;n</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                     <div class="panel-heading">Elegir solucion para el problema: pantalla negra</div>
                     <div class="panel-body">
                            <div class="form-group col-lg-8" >
                                <label for="coditic">C&oacute;digo ITIC:</label> 123
                            </div>
                            <div class="form-group col-lg-8">
                                <label for="codpc">C&oacute;digo inform&aacute;tica PC: </label> LB(B) - PC20
                            </div>
                            
                            <div class="col-lg-8">
                                <div class="form-group ">
                                    <label for="problempc">Posibles soluciones</label>
                                    <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                            <tr>
                                                <th> N&uacute;mero</th>
                                                <th> Tipo</th>
                                                <th> Soluciones </th>
                                                <th> Acci&oacute;n </th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Software</td>
                                                <td>Verificaci&oacute;n y configuraci&oacute;n del BIOS</td>
                                                <td>
                                                    <button type="submit" class="btn btn-xs btn-warning"> Aplicar solucion </button>
                                                    
                                                </td>
                                            </tr>   
                                             <tr>
                                                <td>1</td>
                                                <td>Software</td>
                                                <td>Verificaci&oacute;n y configuraci&oacute;n del BIOS</td>
                                                <td>
                                                    <button type="submit" class="btn btn-xs btn-default"> Solucion aplicada</button>
                                                </td>
                                            </tr>               
                                        </tbody>
                                     </table>
                                    
                                    <button type="reset" class="btn btn-info "> Nueva soluci&oacute;n</button>
                                    <button  class="btn btn-success">Aceptar</button>
                                    <button type="submit" class="btn btn-danger">Salir </button>
                                </div>
                            </div>

                     </div>
                </div>
            </div>
        </div>


        

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Editar soluci&oacute;n</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Soluci&oacute;n anteriormente aplicada </div>
                    <div class="panel-body">
                        <div class="row">
                            <form action="" class="form">
                            <div class="form-group col-lg-8" >
                                <label for="coditic">C&oacute;digo ITIC:</label> 123
                            </div>
                            <div class="form-group col-lg-8">
                                <label for="codpc">C&oacute;digo inform&aacute;tica PC: </label> LB(B) - PC20
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group ">
                                    <div id="res" class="text-success"> 
                                        PATCH CORE REEMPLAZADO
                                    </div>
                                    <br>
                                    
                                    <button type="reset" class="btn btn-info"> Editar</button>
                                    <button  class="btn btn-warning">Descartar</button>
                                    <button type="submit" class="btn btn-danger">Salir </button>
                               </div>

                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Adicionar soluci&oacute;n</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Adicionar soluci&oacute;n de un problema </div>
                    <div class="panel-body">
                        <div class="row">
                            <form action="" class="form">
                            
                                <div class="col-lg-8">
                                    <div class="form-group ">
                                        <label>Descripci&oacute;n </label>
                                        <textarea name="descripcion" id="descripcion" class ="form-control" cols="10" rows="3"  placeholder="Patch core reemplazado" required></textarea>
                                        <br>
                                        <div class="form-group" >
                                            <label>Tipo soluci&oacute;n</label>
                                            <select class="form-control">
                                                <option>Hardware</option>
                                                <option>Software</option>
                                            </select>
                                        </div>
                                        <button  class="btn btn-success">Aceptar</button>
                                        <button type="reset" class="btn btn-danger"> Cancelar</button>    
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection