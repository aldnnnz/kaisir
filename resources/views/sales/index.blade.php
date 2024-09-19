<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale['id'] }}</td>
                    <td>{{ $sale['customer_name'] }}</td>
                    <td>{{ $sale['product'] }}</td>
                    <td>{{ $sale['quantity'] }}</td>
                    <td>{{ $sale['total_price'] }}</td>
                    <td>{{ $sale['date'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>