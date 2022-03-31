<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style footer -->
    <style>
        body{
            background-color: #000000;
            font-family: sans-serif;
        }
        a{
            text-decoration: none; 
            font-size: 20px;
            font-family: sans-serif;
            padding: 10px;
        }
        ul{
            padding: 10px;
            margin: 0px;
        }
        li{
            list-style: none; display: inline;
        }
        li a{
            background: #1b1b1b; color:#d4d4d4;
        }
        li a:hover{
            color:#fff;
        }
        .navi{
            background: #1b1b1b; 
            height: 50px;
            padding: 10px;
        }

        li .list{
            font-size: 18px;
            padding: 11px;
        }
        li .hotelio{
            font-size: 25px;
        }
    </style>

  </head>
  <body>
    <nav class="navi">
        <ul>
            <li><a href="/home" class="hotelio">HOTELIO</a></li>
            <li><a href="/hotels" class="list">List</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('container')
    </div>

  </body>
</html>