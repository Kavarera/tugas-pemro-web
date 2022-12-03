<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>123210131</title>
</head>

<body>
    <center>
        <h1>LIST PRODUK</h1>
    </center>
    <table style="border: black solid 2px">
        <tr>
            <td>PID</td>
            <td>NAMA PRODUk</td>
            <td>HARGA PRODUK</td>
        </tr>
        @foreach ($datas as $data)
            <tr>
                <td style="border: black solid 2px">{{ $data->ProductID }}</td>
                <td style="border: black solid 2px"><a href="/detail-produk/{{ $data->ProductID }}">
                    {{ $data->ProductName }}</a></td>
                <td style="border: black solid 2px">{{ $data->UnitPrice}}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
