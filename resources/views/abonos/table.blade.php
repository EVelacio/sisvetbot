<table class="table table-responsive" id="abonos-table">
    <thead>
        <tr>
            <th>Fecha</th>
        <th>Pago</th>
        <th>Citas Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($abonos as $abono)
        <tr>
            <td>{!! $abono->fecha !!}</td>
            <td>{!! $abono->pago !!}</td>
            <td>{!! $abono->citas_id !!}</td>
            <td>
                {!! Form::open(['route' => ['abonos.destroy', $abono->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('abonos.show', [$abono->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('abonos.edit', [$abono->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>