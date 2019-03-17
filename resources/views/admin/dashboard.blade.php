@extends('layouts.admin')

@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard') }}
@stop

@section('content')
    <div class="row">
        <div class="card col-md-6">
            <a href="{{route('dashboard')}}">
                <div class="card-header">Панель Управления</div>
            </a>

            <div class="card-body">
                hello world
            </div>
        </div>
        <div class="card col-md-6">
            <a href="{{route('products.index')}}">
                <div class="card-header">Продукты</div>
            </a>

            <div class="card-body">
                hello world
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card col-md-6">
            <a href="{{route('attachments.index')}}">
                <div class="card-header">Файлы</div>
            </a>

            <div class="card-body">
                hello world
            </div>
        </div>
        <div class="card col-md-6">
            <a href="{{url('/admin/galleries')}}">
                <div class="card-header">Галереи</div>
            </a>

            <div class="card-body">
                hello world
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card col-md-6">
            <a href="{{route('subscribes.index')}}">
                <div class="card-header">Подписки</div>
            </a>

            <div class="card-body">
                hello world
            </div>
        </div>
        <div class="card col-md-6">
            <a href="{{route('contacts.index')}}">
                <div class="card-header">Контакты</div>
            </a>

            <div class="card-body">
                hello world
            </div>
        </div>
    </div>

@endsection
