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
        <h1>LIST CATEGORY</h1>
        @foreach ($datas as $data)
            <h1><a href="/products/{{ $data->CategoryID }}">
            {{ $data->CategoryName }}</a></h1>
        @endforeach
    </center>
</body>
</html>