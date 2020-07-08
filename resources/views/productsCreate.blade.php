<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a new product</title>
</head>
<body>
    <h1>Create a new products</h1>
    <form action="{{ route('products.store')}}" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name"><br>

        <label>Description:</label><br>
        <input type="text" name="description"><br>

        <label>Type:</label><br>
        <input type="text" name="type"><br>

        <label>Amount:</label><br>
        <input type="number" name="amount"><br>

        <label>Price:</label><br>
        <input type="text" name="price"><br>
        <br>
        <input type="submit" value="Register Product">
    </form>
</body>
</html>