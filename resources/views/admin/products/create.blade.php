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
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Название товара</label>
                <input required name="title" type="text" value="{{ old('title') }}" class="form-control" id="title"
                       placeholder="Название товара">
            </div>
            <div class="form-group">
                <label for="main_image">Главное изображение товара</label>
                <input required name="main_image" type="file" value="{{ old('main_image') }}"
                       class="form-control btn btn-info" id="main_image"
                       placeholder="Главное изображение товара">
            </div>

            <div class="form-group">
                <label for="price">Цена товара</label>
                <input required name="price" type="number" value="{{ old('price') }}" class="form-control" id="price"
                       placeholder="Цена товара">
            </div>
            <div class="form-group">
                <label for="code">Код товара</label>
                <input required name="code" type="text" value="{{ old('code') }}" class="form-control" id="code"
                       placeholder="Код товара">
            </div>

            <div class="form-group">
                <label for="short_description">Краткое описание</label>
                <input name="short_description" type="text" value="{{ old('short_description') }}" class="form-control"
                       id="short_description"
                       placeholder="Краткое описание">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea required placeholder="Краткое описание" name="description"
                          id="description" cols="30"
                          rows="10">{{old('description')}}</textarea>
            </div>
            <button class="btn btn-block btn-success" type="submit">Сохранить</button>
        </form>
    </div>
@endsection
