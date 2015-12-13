@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Conceptos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('conceptos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($conceptos->isEmpty())
                <div class="well text-center">No Conceptos found.</div>
            @else
                @include('conceptos.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $conceptos])


    </div>
@endsection