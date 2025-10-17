<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$product->name}}</h1>
    <p>{{$product->price}}</p>
    <p>{{$product->description}}</p>
    @foreach($product->features as $feature)
    <div>
        <p>{{$feature->name}}</p>
        <p>{{$feature->pivot->value}} {{$feature->unit}}</p>
    </div>
    @endforeach
</body>
</html>