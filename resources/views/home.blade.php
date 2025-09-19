<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <img src="" alt="">
        <ul>
            <li>Главная</li>
            <li>Массивы</li>
        </ul>
        <h1>Сайт</h1>
    </header>
    <main>
        <img src="{{ Vite::asset('resources/images/1.jpg') }}">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, reiciendis ex! Iusto eum alias dolores ad incidunt rem nulla! Quidem modi obcaecati, aperiam odio deleniti cum quas adipisci voluptatem delectus.</p>
    </main>
    <footer>© <p>Зубарева Анна Андреевна 2025г.</p></footer>
</body>
</html>