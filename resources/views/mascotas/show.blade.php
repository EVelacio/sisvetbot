@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mascota
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('mascotas.show_fields')
                    <a href="{!! route('mascotas.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
