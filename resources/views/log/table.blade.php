@extends('layout.admin')

@section('content')

            
            
           <!-- END LISTA DE PROBLEMAS DE EQUIPOS -->
         <br>   
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Registro de actividades en el sistema  </div>
                            <div class="panel-body">
                                <div> <?php echo $logs->render() ?></div>
                                <div class="table-responsive">
                                    <table class="table  table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>fecha</th>
                                                <th>Nombre de la tabla</th>
                                                <th>Operacion</th>
                                                <th>datos anteriores</th>
                                                <th>datos nuevos</th>
                                                <th>Usuario</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody_new_problem">
                                            @foreach($logs as $log)
                                            <tr>
                                                <td>{{$log->id}}</td>
                                                <td>{{$log->created_at}}</td>
                                                <td>{{$log->table_name}}</td>
                                                <td>{{$log->operation}}</td>
                                                <td><pre class="unfold-text">{{$log->old_value}}</pre></td>
                                                @if($log->new_value != null)
                                                <td><pre class="unfold-text">{{$log->new_value}}</pre></td>
                                                @else
                                                <td></td>
                                                @endif
                                                
                                                <td>{{$log->user}}</td>
                                            
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <?php echo $logs->render() ?>
                                </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            
        

           
@endsection

@section('scripts')
   
@endsection