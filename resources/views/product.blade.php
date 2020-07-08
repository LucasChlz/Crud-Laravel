<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Id: {{$product->id}}</title>
</head>
<body>
<h1>Name: {{$product->name}}</h1>
<h1>Description: {{$product->description}}</h1>
<h1>Type: {{$product->type}}</h1>
<h1>Amount: {{$product->amount}}</h1>
<h1>Price: R$ {{$product->price}}</h1>
</body>
</html>