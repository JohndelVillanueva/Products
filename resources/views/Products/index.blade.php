<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>
<body>
    <h1>Products list</h1>

    <h2>Total: {{$totalFruits}}</h2>

    @foreach($fruits as $fruit)
    <li>{{$fruit}}</li>
    @endforeach
</body>
</html>