<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product details</h1>
    <table border="1">
        <th>Id</th>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
        <th>Qty</th>
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->type}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->qty}}</td>
        </tr>
    </table>
</body>
</html>