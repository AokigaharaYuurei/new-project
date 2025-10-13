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
    <div class="container">
        @foreach($products as $product)
           <div class="card">
            <a href="{{ route('products.show', $product->id) }}"><p>{{ $product->name }}</p></a>
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
    </div>
</body>
</html>