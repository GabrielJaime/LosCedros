@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($conceptos, ['route' => ['conceptos.update', $conceptos->id], 'method' => 'patch']) !!}

          <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Datos</h3>
                </div>
                <div class="box-body" >

                    @include('conceptos.fields')

                </div>
            </div>


    {!! Form::close() !!}
</div>
@endsection
