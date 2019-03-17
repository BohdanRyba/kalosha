@extends('layouts.admin')

@section('breadcrumbs')
    {{ Breadcrumbs::render('action',$page) }}
@stop

@section('content')
    <div class="row">
        Hello world
    </div>
@endsection
