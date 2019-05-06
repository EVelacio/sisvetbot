@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mascota
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mascota, ['route' => ['mascotas.update', $mascota->id], 'method' => 'patch']) !!}

                        @include('mascotas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection