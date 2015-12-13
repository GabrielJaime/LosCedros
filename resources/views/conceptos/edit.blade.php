@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($conceptos, ['route' => ['conceptos.update', $conceptos->id], 'method' => 'patch']) !!}

        @include('conceptos.fields')

    {!! Form::close() !!}
</div>
@endsection
