
               
                <div class="row">
                    <div class="col-lg-12">
                        <div id="msj"></div>
                        <h2 class="page-header">Informacion de Usuario</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Formulario para registrar a una nueva persona  
                            </div>
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">
                                                Datos personales
                                            </h4>
                                        </div>
                                        <div class="timeline-body">
                                            <dl class="list">   
                                                <dt>Nombre:</dt><dd>{{ $people->paterno.' '.$people->materno.' '.$people->nombre }}</dd>
                                                <dt>C.I.:</dt><dd>{{$people->ci}}</dd>
                                                <dt>Profesi&oacute;n</dt><dd>{{$people->profesion}}</dd>
                                                <dt>Fecha de nacimiento</dt><dd>{{$people->fecha_nac}}</dd>
                                                <dt>Genero:</dt>
                                                @if($people->genero == 1)
                                                <dd>Masculino</dd>
                                                @else
                                                <dd>Femenino</dd>
                                                @endif
                                                <dt>Correo:</dt><dd>{{$people->email}}</dd>
                                                <dt>Telf. fijo</dt><dd>{{$people->telfijo}}</dd>
                                                <dt>Telf. celular</dt><dd>{{$people->telcelular}}</dd>
                                                <dt>Direcci&oacute;n</dt><dd>{{$people->direccion}}</dd>
                                                <dt>Fecha de registro</dt><dd>{{$people->created_at}}</dd>
                                            </dl>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-5">

                                    <div class="timeline-panel">
                                        <div class="timeline-heding">
                                            <h4>Credenciales</h4>
                                        </div>
                                        <div class="timeline-body">
                                            @if($people->user == null)
                                            <div class="panel panel-info">
                                                <div class="panel-heading">Sobre las credenciales</div>
                                                <div class="panel-body"><p>La persona registrada  no posee credenciales para la authentificacion y uso del sistema si desea click en  <a href="{{url('/uscr/'.$people->id)}}">Otorgar credenciales.</a></p></div>
                                            </div>   
                                            @else
                                            <dl class="list">
                                                <dt>Tipo de usuario:</dt>
                                                <dd>{{$people->user->typeUser()}}</dd>
                                                <dt>Cargo:</dt><dd>{{$people->user->cargo}}</dd>
                                                <dt>Nombre de usuario:</dt><dd>{{$people->user->user}}</dd>
                                                <dt>Usuario creado en :</dt><dd>{{$people->user->created_at}}</dd>
                                                <dt>Creado por: </dt><dd>{{$people->user->createdBy->paterno.' '.$people->user->createdBy->materno.' '.$people->user->createdBy->nombre}}</dd>
                                            </dl> 

                                            <dl>
                                                <dl><button value="{{$people->user->id}}" class="btn btn-outline btn-primary btn-xs" onclick="editCr(this)">Editar credenciales</button></dl>
                                                <dl><button value="{{$people->user->id}}" class="btn btn-outline btn-primary btn-xs" onclick="changeCr(this)">Cambiar contraseña</button></dl>
                                                @if($people->user->active)
                                                <dl><button value="{{$people->user->id}}" class="btn btn-outline btn-primary btn-xs" onclick="inactiveCr(this)">Inactivar credenciales</button></dl>
                                                @else
                                                <dl><button value="{{$people->user->id}}" class="btn btn-outline btn-danger btn-xs" onclick="inactiveCr(this)">Activar Credenciales</button></dl>
                                                @endif
                                            </dl>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                
                            </div>  
                                
                            </div>
                            <div class="panel-footer">
                                <button onclick="closeModal()" class="btn btn-danger">Salir</button>
                            </div>
                        </div>
                    </div>
                </div>
        