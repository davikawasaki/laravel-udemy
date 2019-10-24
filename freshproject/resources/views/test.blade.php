<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        >
        <meta http-equiv="X-UA-COMPATIBLE"
            content="ie=edge"
        >
        <title>Document</title>
    </head>
    <body>
        {{-- $name; --}}
        {{-- htmlspecialchars($name, ENT_QUOTES) --}}
        <h1>{{ $name }}</h1> {{-- escaping the data --}}
        <h1>{{!! $name !!}}</h1> {{-- not escaping the data --}}
    </body>
</html>