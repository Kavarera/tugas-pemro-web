<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>123210131</title>
</head>

<body>

    @if (session('cart'))
        <?php $total = 0; ?>
        @foreach (session('cart') as $item)
            <div style="border: black solid 2px; margin-top: 20px;">
                <h2>Nama Barang : {{ $item['Products']->ProductName }}</h2>
                <h2>Banyak : {{ $item['Qty'] }}</h2>
                <h2>Sub Total : $ {{ $item['Qty'] * $item['Products']->UnitPrice }}</h2>
            </div>
            <?php $total += $item['Qty'] * $item['Products']->UnitPrice; ?>
        @endforeach
        <h1>TOTAL HARGA : $ {{ $total }}</h1>
    @else
        <center>
            <h1>TIDAK ADA BARANG YANG DIBELI</h1>
        </center>
    @endif
</body>

</html>
