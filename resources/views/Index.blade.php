<h3>PROFESIONALES</h3>
<table class="table table-condensed">
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DNI</th>
            <th>PROFESSION</th>
        </thead>
        <tbody>
            @foreach($professional as $profession)
                <tr>
                    <td><?= $profession ['id']?> </td>
                    <td><?= $profession ['name']?> </td>
                    <td><?= $profession ['dni']?></td>
                    <td><?= $profession ['profession']?></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
    <h3><a href="{{ route('professional.create') }}" >Añadir PROFESION</a></h3>