<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman Murid</h1>
    @foreach($data_murid as $data)
    <li>{{$data}}</li>
    @endforeach
    
    <h1>Data Kelas</h1>
    @foreach($data_kelas as $data2)
    <li>{{$data2}}</li>
    @endforeach
</body>
</html>