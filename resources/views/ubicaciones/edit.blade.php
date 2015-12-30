@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($ubicaciones, ['route' => ['ubicaciones.update', $ubicaciones->id], 'method' => 'patch']) !!}

          <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Datos</h3>
                </div>
                <div class="box-body" >

                    @include('ubicaciones.fields')

                </div>
            </div>


    {!! Form::close() !!}
</div>
@endsection
