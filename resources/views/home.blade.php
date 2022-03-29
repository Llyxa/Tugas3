<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Trebuchet MS;
        }
        body {
            background-size: 100%;
            background-image: url('iniimg/hotelbjornson3.jpg');
        }
        .gambar{
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 0 70px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            color: #ffffff;
        }
        .gambar .bg{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        h1{
            font-size: 100px;
            white-space: pre;
        }
        p{
            font-size: 20px;
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
            transition: all 0.2s;
            font-size: 17px;
        }
        a.button:hover{
            color:black;
            background-color:#ffffff;
        }
    </style>
</head>
<body>
    <div class="gambar">
        <div class="tulisan">
            <h1>Our world<br>is your playground</h1>
            <br>
            <p>We give you what you want and less what you don't need</p><br>
            <div class="vertical"></div>
            <a href="/hotels" class="button">Explore</a>
        </div>
    </div>
</body>
</html>