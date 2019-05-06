<!-- Fecha Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    {!! Form::text('fecha_cita', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Remision Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_remision', 'Fecha Remision:') !!}
    {!! Form::text('fecha_remision', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_cita', 'Hora Cita:') !!}
    {!! Form::text('hora_cita', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_servicio', 'Tipo Servicio:') !!}
    {!! Form::text('tipo_servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Importe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('importe', 'Importe:') !!}
    {!! Form::text('importe', null, ['class' => 'form-control']) !!}
</div>

<!-- Saldo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('saldo', 'Saldo:') !!}
    {!! Form::text('saldo', null, ['class' => 'form-control']) !!}
</div>

<!-- Veterinarios Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('veterinarios_id', 'Veterinarios Id:') !!}
    {!! Form::number('veterinarios_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Mascotas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mascotas_id', 'Mascotas Id:') !!}
    {!! Form::number('mascotas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Clientes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clientes_id', 'Clientes Id:') !!}
    {!! Form::number('clientes_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('citas.index') !!}" class="btn btn-default">Cancel</a>
</div>
