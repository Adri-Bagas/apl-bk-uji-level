<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        {{ $guru->user->name }}
    </h1>

    <img src="{{ asset('storage/'.$guru->fotos()->first()->img_location) }}" alt="" style="width: 500px">
</body>
</html>