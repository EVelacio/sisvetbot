<table class="table table-responsive" id="razas-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Especies Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($razas as $raza)
        <tr>
            <td>{!! $raza->nombre !!}</td>
            <td>{!! $raza->especies_id !!}</td>
            <td>
                {!! Form::open(['route' => ['razas.destroy', $raza->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('razas.show', [$raza->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('razas.edit', [$raza->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>