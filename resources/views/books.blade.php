<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($libros as $libro)
        {{$libro->title}}
        {{$libro->publishdate}}
    @empty
        <p>No hay registros</p>
    @endforelse
</body>
</html>