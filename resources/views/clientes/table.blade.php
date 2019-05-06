<table class="table table-responsive" id="clientes-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Edad</th>
        <th>Calle</th>
        <th>Numero</th>
        <th>Colonia</th>
        <th>Cp</th>
        <th>Tel</th>
        <th>Cel</th>
        <th>Users Id</th>
        <th>Mascotas Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <td>{!! $cliente->nombre !!}</td>
            <td>{!! $cliente->apellido_paterno !!}</td>
            <td>{!! $cliente->apellido_materno !!}</td>
            <td>{!! $cliente->edad !!}</td>
            <td>{!! $cliente->calle !!}</td>
            <td>{!! $cliente->numero !!}</td>
            <td>{!! $cliente->colonia !!}</td>
            <td>{!! $cliente->cp !!}</td>
            <td>{!! $cliente->tel !!}</td>
            <td>{!! $cliente->cel !!}</td>
            <td>{!! $cliente->users_id !!}</td>
            <td>{!! $cliente->mascotas_id !!}</td>
            <td>
                {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clientes.show', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clientes.edit', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>