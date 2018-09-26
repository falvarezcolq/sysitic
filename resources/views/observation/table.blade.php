
<table class="table table-striped table-advance table-hover">
    <thead>
        <tr>
            <th> Fecha</th>
            <th> Código</th>
            <th> Laboratorio</th>
            <th> Descripcion</th>
            <th> Acci&oacute;n</th>
        </tr>
    </thead>

    <tbody id="tableCleaning">

        @foreach( $observations as  $obs) 
            <tr> 
                <td>{{ $obs->created_at}}</td>
                <td>{{ $obs->laboratory->codigo}}</td>
                <td>{{ $obs->laboratory->nombre_lab}}</td>
                <td>{{ $obs->descripcion   }}</td>
                <td><button value="{{$obs->id}}" class="btn btn-warning" onclick=" edit_observation(this);" >Editar</button></td>
            </tr>
        @endforeach
    </tbody>
</table>
<?php echo $observations->render() ?>

           