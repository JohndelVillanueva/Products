<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table" border="3">
        <a href="products/form">Create New Product</a>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->type}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->qty}}</td>
                    <td><a href="/products/<?= $product->id ?>">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>