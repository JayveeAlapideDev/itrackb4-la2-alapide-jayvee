<!DOCTYPE html>
<html>
<head>
    <title>My Product List</title>
</head>
<body>
    <h1>Products in my Store</h1>
    <p>Prepared by: Jayvee Espanola Alapide</p>
 
    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Tag</th>
            <th>Available</th>
        </tr>
 
        @foreach ($products as $product)
            <tr>
                <td><a href="/products/{{$product['id']}}"> {{ $product['name']}}</a></td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['stock'] }}</td>
                <td>{{ $product['tag'] }}</td>
                <td>{{ $product['is_available'] ? 'Yes' : 'No' }}</td>
                
            </tr>
        @endforeach
    </table>
</body>
</html>
