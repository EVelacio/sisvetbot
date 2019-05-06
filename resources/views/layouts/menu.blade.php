@can('crear_cita')
    <li class="{{ Request::is('citas*') ? 'active' : '' }}">
        <a href="{!! route('citas.index') !!}"><i class="fa fa-edit"></i><span>Citas</span></a>
    </li>
@endcan


<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('especies*') ? 'active' : '' }}">
    <a href="{!! route('especies.index') !!}"><i class="fa fa-edit"></i><span>Especies</span></a>
</li>

<li class="{{ Request::is('mascotas*') ? 'active' : '' }}">
    <a href="{!! route('mascotas.index') !!}"><i class="fa fa-edit"></i><span>Mascotas</span></a>
</li>

<li class="{{ Request::is('veterinarios*') ? 'active' : '' }}">
    <a href="{!! route('veterinarios.index') !!}"><i class="fa fa-edit"></i><span>Veterinarios</span></a>
</li>



<li class="{{ Request::is('extraCitas*') ? 'active' : '' }}">
    <a href="{!! route('extraCitas.index') !!}"><i class="fa fa-edit"></i><span>Extra Citas</span></a>
</li>

<li class="{{ Request::is('abonos*') ? 'active' : '' }}">
    <a href="{!! route('abonos.index') !!}"><i class="fa fa-edit"></i><span>Abonos</span></a>
</li>

<li class="{{ Request::is('razas*') ? 'active' : '' }}">
    <a href="{!! route('razas.index') !!}"><i class="fa fa-edit"></i><span>Razas</span></a>
</li>

