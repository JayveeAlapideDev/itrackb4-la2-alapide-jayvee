<!DOCTYPE html>
<html>
    <head>
        <title>{{$product['name'] }}</title>
    </head>
    <body>
        <h1>{{$product['name'] }}</h1>

        <p>Price {{$product['price'] }}</p>
        <p>Stock {{$product['stock'] }}</p>
        <p>Tag {{$product['tag'] }}</p>
        <p>Available {{$product['is_available'] }}</p>
        
        <p><a href="{{ route('products.index') }}">Back to List</a></p>
    </body>
</html>