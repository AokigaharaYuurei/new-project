<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Создание нового продукта</h1>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Название продукта">
        <br>
        <input type="text" name="price" placeholder="Цена продукта">
        <br>
        <textarea name="description" id="" placeholder="Описание"></textarea>
        <br>
        <input type="submit" value="Создать">
    </form>
</body>
</html>