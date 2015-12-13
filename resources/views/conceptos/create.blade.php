@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'conceptos.store']) !!}

        @include('conceptos.fields')

    {!! Form::close() !!}
</div>
@endsection
