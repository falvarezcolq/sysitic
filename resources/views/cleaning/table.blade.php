

<table class="table table-striped table-advance table-hover">
    <thead>
        <tr>
            <th> Fecha</th>
            <th> Código</th>
            <th> Laboratorio</th>
            <th> Estado</th>
            <th> Acci&oacute;n</th>
        </tr>
    </thead>

    <tbody id="tableCleaning">

        @foreach( $cleanings as  $clean) 
            <tr> 
                <td>{{ $clean->created_at}}</td>
                <td>{{ $clean->laboratory->codigo}}</td>
                <td>{{ $clean->laboratory->nombre_lab}}</td>
                <td>{{ (($clean->estado == 1)? 'limpio' : 'sucio')  }}</td>
                
                @if( $clean->canEdit() < 1 || Auth::user()->is_admin )
                <td><button value="{{$clean->id}}" class="btn btn-warning btn-xs" onclick="edit_cleaning(this);" >Editar</button></td>
                @else
                <td></td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
<?php echo $cleanings->render() ?>
    