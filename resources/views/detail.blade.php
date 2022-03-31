<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: #272727;
            color: white;
            font-family: sans-serif;
        }
        h1{
            text-align: left;
            font-size: 65px;
            margin: 0;
        }
        img{
            border-radius: 5%;
            border: 1px solid white;
            width: 700px;
            height: 500px;
        }
        .tulisan .name{
            font-size: 45px;
            margin: 0;
        }
        .tulisan p{
            font-size: 18px;
            /* padding: 10px 10px 0 10px; */
            margin: 0;
        }
        a.button{
            display:inline-block;
            padding:0.35em 1.2em;
            border:0.1em solid #ffffff;
            margin:0 0.3em 0.3em 0;
            border-radius:0.12em; 
            box-sizing: border-box;
            text-decoration:none;
            font-weight:300;
            color:#ffffff;
            text-align:center;
            transition: all 0.1s;
            font-size: 17px;
            border-radius: 30px;
        }
        a.button:hover{
            color:black;
            background-color:#ffffff;
        }
    </style>
</head>
<body>
    <h1>Detail Hotel</h1><br>
    <img src="{{ asset('iniimg/hotelkamar.jpg') }}" alt="">
    <div class="tulisan">
        <p class="name">{{$data->nama}}</p>
        <p>Lokasi: {{$data->lokasi}}</p><br><br>
        <p>{{$data->sinopsis}}</p>
        <p>Harga: {{$data->harga}}/malam</p><br>
    </div>
    <a href="/delete/{{$data->id}}" class="button">Hapus</a>
    <a href="/tampilkandata/{{$data->id}}" class="button">Edit</a>
</body>
</html>