@extends('layouts.admin')


@section('breadcrumbs')
    {{ Breadcrumbs::render('action',$page) }}
@stop
@section('messages')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @include('admin.partials._message',$error)
        @endforeach
    @endif
@stop
@section('content')
    <a href="{{route('products.index')}}" class="btn btn-warning">Назад</a>
    <div class="card col-12">
        <h2>Название: {{$product->title}}</h2>
        <h6 class="font-italic font-weight-bolder">Код: {{$product->code}}</h6>
        <h6 class="font-italic font-weight-bolder">Цена: {{$product->code}}</h6>
        <hr>
        Короткое описание
        <hr>
        <p>
            {{$product->short_description}}
        </p>
        <hr>
        Контент
        <hr>

        <p>{!! $product->description !!}</p>
    </div>
@stop
