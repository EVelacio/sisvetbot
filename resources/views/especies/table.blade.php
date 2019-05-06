<table class="table table-responsive" id="especies-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($especies as $especie)
        <tr>
            <td>{!! $especie->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['especies.destroy', $especie->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('especies.show', [$especie->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('especies.edit', [$especie->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>