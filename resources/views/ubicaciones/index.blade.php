@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Ubicaciones</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('ubicaciones.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($ubicaciones->isEmpty())
                <div class="well text-center">No Ubicaciones found.</div>
            @else
                @include('ubicaciones.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $ubicaciones])


    </div>
@endsection