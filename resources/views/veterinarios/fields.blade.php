<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Paterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_paterno', 'Apellido Paterno:') !!}
    {!! Form::text('apellido_paterno', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_materno', 'Apellido Materno:') !!}
    {!! Form::text('apellido_materno', null, ['class' => 'form-control']) !!}
</div>

<!-- Cel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cel', 'Cel:') !!}
    {!! Form::text('cel', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Prof Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cedula_prof', 'Cedula Prof:') !!}
    {!! Form::text('cedula_prof', null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::number('users_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('veterinarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
