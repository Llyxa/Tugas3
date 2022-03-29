@extends('main')
@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="inicss/style.css">
    <style>
        .container {
            color: white; 
            padding: 10px;
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
        }
        a.button:hover{
            color:black;
            background-color:#ffffff;
        }
        .box{
            padding: 10px;
            border: 1px solid white;
            width: 300px;
            height: 150px;
            text-align: center;
            line-height: 10px;
            display: flex;
            box-sizing: border-box; 
        }
        img{
            height: 100px;
            width: 70px;
        }
        .tulisan{
            padding: 10px;
            width: 150px;
            height: 200px;
            text-align: center;
            line-height: 10px;
        }
        /* div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 200px;
            height: 300px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            object-fit: cover;
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        } */
    </style>
</head>
<body>
    <div class="container">
        <br>
        <a href="/tambah" class="button">Tambah</a><br><br>
        <div class="content">
            @foreach ($data as $hotel)
            <div class="box">
                <a href="/detail/{{ ($hotel->id) }}"><img src="{{asset('storage/'.$hotel->image)}}" alt=""></a>
                <div class="tulisan">
                    <p>{{ $hotel->nama}}</p>
                    <p>{{ $hotel->lokasi}}</p>
                    <p>{{ $hotel->harga}}/malam</p>
                </div>
            @endforeach    
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div class="content">
            <br>
            <a href="/tambah" class="button">Tambah +</a>
            <br><br>
            <div class="gallery">
                <a href="/detail">
                <img src="iniimg/spongebob.jpg" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            
            <div class="gallery">
                <a href="/detail">
                <img src="iniimg/spongebob.jpg" alt="Forest" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            
            <div class="gallery">
                <a href="/detail">
                <img src="iniimg/spongebob.jpg" alt="Northern Lights" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            
            <div class="gallery">
                <a href="/detail">
                <img src="iniimg/spongebob.jpg" alt="Mountains" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div>
        {{-- <div class="movies"> 
            @foreach ($data as $item)
            <div class="posterimg">
                <img src="{{asset('image/'.$item->image)}}" alt=""  class="img">
            </div>
            @endforeach
        </div> --}}
    {{-- </div>  --}}
</body>
</html>

@endsection

{{-- @foreach ($data as $item)
                <a href="/detail/{{ $data->id }}">
                    <img src="{{asset('image/'.$item->image)}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
                @endforeach --}}