@extends('layouts.admin')

@section('breadcrumbs')
    {{ Breadcrumbs::render('page',$page) }}
@stop

@section('content')
    <a href="{{route('products.create')}}" class="btn btn-success">Создать</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">
                Главное
                <br>
                изображение
            </th>
            <th scope="col">Код</th>
            <th scope="col">Цена</th>
            <th scope="col">

                Краткое
                <br>
                описание
            </th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @if (isset($products))

            @forelse($products as $product)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$product->title}}</td>
                    <td>
                        <img width="50px" src="{{$product->main_image}}" alt="{{$product->title}}">
                    </td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->short_description}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{route('products.show',[$product])}}" class="btn btn-primary">Показать</a>
                            <a href="{{route('products.edit',[$product])}}" class="btn btn-warning">Редактировать</a>

                            <form style="display: inline" method="post"
                                  action="{{route('products.destroy',$product->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>

                    </td>
                </tr>
            @empty
                <tr>
                    <td>Нету товаров</td>
                </tr>
            @endforelse
        @else
            <tr>
                <td class="text-center" colspan="7">Нету товаров</td>
            </tr>
        @endif

        </tbody>
    </table>
    {{ $products->links() }}
@endsection
