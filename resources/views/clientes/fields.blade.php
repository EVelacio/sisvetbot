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

<!-- Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::text('edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Calle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calle', 'Calle:') !!}
    {!! Form::text('calle', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Colonia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('colonia', 'Colonia:') !!}
    {!! Form::text('colonia', null, ['class' => 'form-control']) !!}
</div>

<!-- Cp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cp', 'Cp:') !!}
    {!! Form::text('cp', null, ['class' => 'form-control']) !!}
</div>

<!-- Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tel', 'Tel:') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Cel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cel', 'Cel:') !!}
    {!! Form::text('cel', null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::number('users_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Mascotas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mascotas_id', 'Mascotas Id:') !!}
    {!! Form::number('mascotas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clientes.index') !!}" class="btn btn-default">Cancel</a>
</div>
