<table class="table table-responsive" id="veterinarios-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Cel</th>
        <th>Cedula Prof</th>
        <th>Users Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($veterinarios as $veterinario)
        <tr>
            <td>{!! $veterinario->nombre !!}</td>
            <td>{!! $veterinario->apellido_paterno !!}</td>
            <td>{!! $veterinario->apellido_materno !!}</td>
            <td>{!! $veterinario->cel !!}</td>
            <td>{!! $veterinario->cedula_prof !!}</td>
            <td>{!! $veterinario->users_id !!}</td>
            <td>
                {!! Form::open(['route' => ['veterinarios.destroy', $veterinario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('veterinarios.show', [$veterinario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('veterinarios.edit', [$veterinario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>