<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports List</title>
</head>
<body>
    <h1>Reports List</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total Sales</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>{{ $report['date'] }}</td>
                    <td>{{ $report['product'] }}</td>
                    <td>{{ $report['quantity'] }}</td>
                    <td>{{ $report['total_sales'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>