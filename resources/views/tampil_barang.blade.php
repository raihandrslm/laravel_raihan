<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1><i>Data Barang</i></h1></center>
            <hr color="black">
            @foreach($barang as $data)
            <p>{{$data->id}}</p>
            <p>{{$data->nama_baranng}}</p>
            <p>{{$data->merk}}</p>
            <p>{{$data->jumlah}}</p>
            <p>{{$data->stok}}</p>
            <hr color="black">
            @endforeach
</body>
</html>