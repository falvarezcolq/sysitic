<table class="table table-striped table-advance table-hover">
    <thead>
        <tr>
            <th> Fecha</th>
            <th> Laboratorio</th>
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
                <td>{{$equipment->codigo_lab}}</td>
                <td>{{$equipment->cod_itic}}</td>
                <td>{{$equipment->cod_pc}}</td>
                <td>{{$equipment->tipo}}</td>
                <td>{{$equipment->nombre_problema}}</td>
                <td>    
                    <div class="btn-group" role="group">
                        @if( $equipment->timesolution == null)
                        <button value="{{$equipment->id}}" class="btn btn-xs btn-warning btn-secondary" onclick="solucionar(this)">Solucionar</button>
                        @else
                        <button value="{{$equipment->id}}" class="btn btn-xs btn-default btn-secondary" onclick="solucionado(this)">Solucionado</button>
                        @endif
                        <!-- <button value="{{$equipment->id}}"class="btn btn-xs btn-primary btn-secondary" onclick="ver(this)"> Ver </button> -->
                    </div>
      
                </td>
            </tr>
            @endforeach
                                
        </tbody>
</table>

<?php echo $equipmentProblems->render() ?>