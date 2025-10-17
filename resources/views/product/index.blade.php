<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод товаров</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1>Каталог товаров</h1>
    <a href="{{ route('products.create') }}">Создать новый продукт</a>
    <p>{{$buyer->user->name}}</p>
    <p>{{$buyer->adress}}</p>
    <div class="container">
        @foreach($categories as $category)
        <h2>{{$category->name}}</h2>
        @foreach($category->products as $product)
        <div class="card">
            <a href="{{ route('products.show', $product->id) }}">
                <p>{{ $product->name }}</p>
            </a>
            <p>{{ $product->description }}</p>
            <p>Цена: {{ $product->price }} &#8381</p>
            <p>Категория {{$product->category->name}}</p>
            <form method="POST" action="{{route('products.destroy', $product->id)}}">
                @csrf
                @method('delete')
                <input type="submit" value="удалить">
            </form>
            <hr>
        </div>
        @endforeach
        @endforeach
    </div>
</body>

</html>