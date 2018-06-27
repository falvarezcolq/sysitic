@extends('layout.admin')

@section('content')

<div class="panel panel-default">
                        <div class="panel-heading"> Solucionar problemas de PC</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                <table class="table table-striped table-advance table-hover">
                                    <thead>
                                        <tr>
                                            <th> Fecha</th>
                                            <th> Codigo ITIC</th>
                                            <th> Codigo PC</th>
                                            <th> Tipo</th>
                                            <th> Problema </th>
                                            <th> Acci&oacute;n </th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            @foreach($equipmentProblems as $equipment)
                                           <tr>
                                                <td>{{$equipment->timereport}}</td>
                                                <td>{{$equipment->equipment->cod_itic}}</td>
                                                <td>{{$equipment->equipment->cod_pc}}</td>
                                                <td>{{$equipment->standarProblem->problemType->name}}</td>
                                                <td>{{$equipment->standarProblem->descripcion}}</td>
                                                <td>

                                                   
                                                    <div class="btn-group" role="group">
                                                        @if( $equipment->timesolution == null)
                                                        <button value="{{$equipment->id}}" class="btn btn-xs btn-warning btn-secondary" onclick="solucionar(this)">Solucionar</button>
                                                        @else
                                                        <button value="{{$equipment->id}}" class="btn btn-xs btn-default btn-secondary" onclick="solucionar(this)">Solucionado</button>
                                                        @endif
                                                        <button value="{{$equipment->id}}"class="btn btn-xs btn-primary btn-secondary" onclick="ver(this)"> Ver </button>
                                                    </div>
                                                    
                                                </td>
                                            </tr>
                                           @endforeach
                                                             
                                        </tbody>
                                </table>
                                
                                <?php echo $equipmentProblems->render() ?>
                            
                            </div>
                        </div>
                    </div>
@endsection


@section('scripts')
    
    <script src="{{ asset('/sysitic/js/solutionProblem.js') }}"></script>
@endsection