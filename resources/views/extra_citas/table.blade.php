<table class="table table-responsive" id="extraCitas-table">
    <thead>
        <tr>
            <th>Nota</th>
        <th>Nota Dinero</th>
        <th>Fecha</th>
        <th>Citas Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($extraCitas as $extraCita)
        <tr>
            <td>{!! $extraCita->nota !!}</td>
            <td>{!! $extraCita->nota_dinero !!}</td>
            <td>{!! $extraCita->fecha !!}</td>
            <td>{!! $extraCita->citas_id !!}</td>
            <td>
                {!! Form::open(['route' => ['extraCitas.destroy', $extraCita->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('extraCitas.show', [$extraCita->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('extraCitas.edit', [$extraCita->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>