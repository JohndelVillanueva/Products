<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/products" method="POST">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"></input>
        <label for="type">Type: </label>
        <input type="text" name="type" id="type"></input>
        <label for="price">Price: </label>
        <input type="text" name="price" id="price"></input>
        <label for="qty">Qty: </label>
        <input type="text" name="qty" id="qty"></input>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>