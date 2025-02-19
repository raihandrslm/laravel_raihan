<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1><i>Data Post</i></h1></center>
            <hr color="black">
            @foreach($post as $data)
            <p>{{$data->id}}</p>
            <p>{{$data->title}}</p>
            <p>{{$data->content}}</p>
            <hr color="black">
            @endforeach
</body>
</html>