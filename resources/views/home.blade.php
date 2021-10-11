<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach ($travels as $travel)
            <p>Destinazione: {{$travel->destination}}</p>
            <p>Prezzo: € {{ $travel->price }}</p>
            <hr>    
        @endforeach    
    </div>
    
</body>
</html>