<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Pago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pago', 'Pago:') !!}
    {!! Form::text('pago', null, ['class' => 'form-control']) !!}
</div>

<!-- Citas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('citas_id', 'Citas Id:') !!}
    {!! Form::number('citas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('abonos.index') !!}" class="btn btn-default">Cancel</a>
</div>
