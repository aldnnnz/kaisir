<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>product</h1>

    
<ul>
    <li>
        <h2>{{ $product['name'] }}</h2>
        <p>Price: ${{ number_format($product['price'], 2) }}</p>
        <p>Description: {{ $product['description'] }}</p>
    </li>

</ul>

</body>
</html>