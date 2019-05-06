@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Extra Cita
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($extraCita, ['route' => ['extraCitas.update', $extraCita->id], 'method' => 'patch']) !!}

                        @include('extra_citas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection