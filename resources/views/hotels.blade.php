@extends('main')
@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="inicss/style.css">
    <title>List Hotel</title>
    <style>
        body{
            background-color: #272727;
        }
        .container {
            color: white;
            padding: 10px;
        }
        h1{
            font-size: 65px;
            margin: 10px;
        }
        a.button{
            display:inline-block;
            padding:0.35em 1.2em;
            border:0.1em solid #ffffff;
            margin: 10px;
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
        /* .box{ */
            /* padding: 10px;
            border: 1px solid white;
            width: 260px;
            height: 150px;
            text-align: center;
            line-height: 10px;
            display: flex;
            box-sizing: border-box;  */
            /* width: 100%; */
            /* height: 180px;
            position: relative;
            overflow: hidden; */
            /* margin-right: 20px;  */
        /* } */
        .card img{
            width: 100%;
            /* position: absolute;
            left: 10%; */
            /* max-width: inherit;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(-50%, -50%) scale(1.5);
            -moz-transform: translate(-50%, -50%) scale(1.5);
            -o-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5); */

        }
        /* .card{
            padding: 10px;
            width: 150px;
            height: 200px;
            text-align: left;
            line-height: 10px;
            margin: 10px;} */
        .card .nama{
            font-size: 30px;
            margin: 20px;
        }
        .card p{
            font-size: 16px;
            margin: 10px;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            /* width: 25%; */
            /* width: 100%; */
            padding: 0 15px 15px 0;
            /* border: 1px solid green; */

        }

        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        /* @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        } */

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #5a5151;
            width: 199px;
            border-radius: 10px;
            /* position: flex; */
            /* border: 1px solid yellow; */
        }

        .img-hotel{
            width: 5%;
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
        <h1>List Hotel Hotelio</h1>
        <a href="/tambah" class="button">+</a><br><br>
        <div class="container2">
        
        @foreach ($data as $hotel)
        <div class="column">
                <div class="card">
                    {{-- <img class="img-hotel" src="https://cdn-image.hipwee.com/wp-content/uploads/2021/01/hipwee-hotel-presidente-4s-4.jpg" alt=""> --}}
                    {{-- <a class="box" href="/detail/{{($hotel->id)}}"><img src="https://cdn-image.hipwee.com/wp-content/uploads/2021/01/hipwee-hotel-presidente-4s-4.jpg" alt=""></a> --}}
                    <img src="{{asset('iniimg/hotelkamar.jpg') }}" alt="" class="box">
                    <p class="nama">{{$hotel->nama}}</p>
                    <p>{{$hotel->lokasi}}</p>
                    <p>{{$hotel->harga}}/malam</p>
                    <a href="/detail/{{($hotel->id)}}" class="button">Detail</a>
                </div>
            </div>
            @endforeach
         
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
            
            
        </div>  --}}
</body>
</html>

@endsection

{{-- @foreach ($data as $item)
                <a href="/detail/{{ $data->id }}">
                    <img src="{{asset('image/'.$item->image)}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
                @endforeach --}}