@extends('layouts.admin')

@section('breadcrumbs')
    {{ Breadcrumbs::render('page',$page) }}
@stop

@section('content')
    <div class="row">
        Hello world
    </div>
@endsection
