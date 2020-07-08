<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Your products</h1>
    <table>
        <tr>
            <td>#ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Type</td>
            <td>Amount</td>
            <td>Price</td>
            <td>Created</td>
            <td>Updated</td>
            <td>Show</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach ($products as $productsInfo)
        <tr>
            <td>{{$productsInfo->id}}</td>
            <td>{{$productsInfo->name}}</td>
            <td>{{$productsInfo->description}}</td>
            <td>{{$productsInfo->type}}</td>
            <td>{{$productsInfo->amount}}</td>
            <td>{{$productsInfo->price}}</td>
            <td>{{$productsInfo->created_at}}</td>
            <td>{{$productsInfo->updated_at}}</td>
            <td><a href="">Show products</a></td>
            <td><a href="">Edit</a></td>
            <td>
                <form action="{{ route('products.destroy', ['product' => $productsInfo->id]) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>