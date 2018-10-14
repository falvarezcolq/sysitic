    <table class="table">
        <thead>
            <th>usuario</th>
            <th>Nombre</th>
            <th>Telf/cel</th>
            <th>Email</th>
            <th>Profesion</th>
            <th>Aciones</th>
        </thead>
        <tbody id="peoplelist">
            @foreach($people as $pe)
            <tr>
                @if($pe->user == null)
                    <td>Sin accesos</td>
                @elseif($pe->user->is_admin == 1)
                    <td>Administrador</td>
                @elseif($pe->user->is_admin == 0)
                    <td>Usuario</td> 
                @else 
                    <td>Sin permisos</td>   
                @endif

                <td>{{$pe->paterno.' '.$pe->materno.' '.$pe->nombre}}</td>
                <td>{{$pe->telfijo.' '.$pe->telcelular}}</td>
                <td>{{$pe->email}}</td>
                <td>{{$pe->profesion}}</td>
                <td>    
                    <div class="btn-group" role="group">
                        <button value="{{$pe->id}}" class="btn btn-xs btn-warning btn-secondary" onclick="editPeople(this)">Editar</button>
                        <button value="{{$pe->id}}" class="btn btn-xs btn-primary btn-secondary" onclick="showPeople(this)">Ver</button> 
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

<?php echo $people->render() ?>