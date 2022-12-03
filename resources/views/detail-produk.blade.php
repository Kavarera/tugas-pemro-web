<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>123210131</title>
</head>
<body>
    <center><h1>DETAIL PRODUK</h1></center>
    <table>
        <tr>
            <td>PID</td>
            <td>:</td>
            <td>{{ $data->ProductID }}</td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td>{{ $data->ProductName }}</td>
        </tr>
        <tr>
            <td>Supplier</td>
            <td>:</td>
            <td>{{ $data->getSupplier->CompanyName }}</td>
        </tr>
        <tr>
            <td>Category</td>
            <td>:</td>
            <td>{{ $data->getCategory->CategoryName }}</td>
        </tr>
        <tr>
            <td>QuantityPerUnit</td>
            <td>:</td>
            <td>{{ $data->QuantityPerUnit }}</td>
        </tr>
        <tr>
            <td>UnitPrice</td>
            <td>:</td>
            <td>{{ $data->UnitPrice }}</td>
        </tr>
        <tr>
            <td>UnitsInStock</td>
            <td>:</td>
            <td>{{ $data->UnitsInStock }}</td>
        </tr>
    </table>
    <form action="/AddToCarts/{{ $data->ProductID }}" method="POST">
        @csrf
        <input type="number" name="quantity" required>
        <button type="submit">Add To Cart</button>
    </form>
    @dd($data)
</body>
</html>