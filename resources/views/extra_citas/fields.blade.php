<!-- Nota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nota', 'Nota:') !!}
    {!! Form::text('nota', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota Dinero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nota_dinero', 'Nota Dinero:') !!}
    {!! Form::text('nota_dinero', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Citas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('citas_id', 'Citas Id:') !!}
    {!! Form::number('citas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('extraCitas.index') !!}" class="btn btn-default">Cancel</a>
</div>
