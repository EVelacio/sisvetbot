@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Raza
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($raza, ['route' => ['razas.update', $raza->id], 'method' => 'patch']) !!}

                        @include('razas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection