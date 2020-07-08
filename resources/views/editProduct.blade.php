<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit product | ID: {{$product->id}}</title>
</head>
<body>
    <h1>Edit product | ID: {{$product->id}}</h1>
    <form action="{{ route('products.update', ['product' => $product->id])}}" method="POST">
        @csrf
        @method('put')
        <label>Name:</label><br>
        <input type="text" name="name" value="{{$product->name}}"><br>

        <label>Description:</label><br>
        <input type="text" name="description" value="{{$product->description}}"><br>

        <label>Type:</label><br>
        <input type="text" name="type" value="{{$product->type}}"><br>

        <label>Amount:</label><br>
        <input type="number" name="amount" value="{{$product->amount}}"><br>

        <label>Price:</label><br>
        <input type="text" name="price" value="{{$product->price}}"><br>
        <br>
        <input type="submit" value="Edit Product">
    </form>
</body>
</html>