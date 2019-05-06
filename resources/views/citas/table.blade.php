<table class="table table-responsive" id="citas-table">
    <thead>
        <tr>
            <th>Fecha Cita</th>
        <th>Fecha Remision</th>
        <th>Hora Cita</th>
        <th>Tipo Servicio</th>
        <th>Importe</th>
        <th>Saldo</th>
        <th>Veterinarios Id</th>
        <th>Mascotas Id</th>
        <th>Clientes Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($citas as $cita)
        <tr>
            <td>{!! $cita->fecha_cita !!}</td>
            <td>{!! $cita->fecha_remision !!}</td>
            <td>{!! $cita->hora_cita !!}</td>
            <td>{!! $cita->tipo_servicio !!}</td>
            <td>{!! $cita->importe !!}</td>
            <td>{!! $cita->saldo !!}</td>
            <td>{!! $cita->veterinarios_id !!}</td>
            <td>{!! $cita->mascotas_id !!}</td>
            <td>{!! $cita->clientes_id !!}</td>
            <td>
                {!! Form::open(['route' => ['citas.destroy', $cita->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('citas.show', [$cita->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('citas.edit', [$cita->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>