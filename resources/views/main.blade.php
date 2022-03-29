<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style footer -->
    <style>
        body{
            background-color: #0B1017;
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
            background: #222; color:#d4d4d4;
        }
        li a:hover{
            color:#fff;
        }
        .navi{
            background: #222; 
            height: 50px;
            padding: 10px;
        }
        hr { 
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 1px;
        } 
    </style>

  </head>
  <body>
    <nav class="navi">
        <ul>
            <li><a href="/home">HOTELIO</a></li>
            <li><a href="/hotels">List</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('container')
    </div>

  </body>
</html>