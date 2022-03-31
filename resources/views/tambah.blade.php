<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
    <style>
        body{
            background-color: #272727;
            font-family: sans-serif;
        }
        /* Style inputs with type="text", select elements and textareas */
        input[type=text], select, textarea {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */ 
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */

        }

        /* Style the submit button with a specific background color etc */
        input[type=submit] {
            background-color: #333E50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
            background-color: #4E525B;
        }

        /* Add a background color and some padding around the form */
        /* .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;

        } */

        h1{
            text-align: center;
            color: white;
            font-size: 50px;
        }

        .column {
            /* float: left; */
            padding: 0 0 0 0;
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
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: left;
            background-color: #493b3b;
            width: 600px;
            border-radius: 10px;
            font-size: 20px;
        }
        div .pilih{
            font-size: 10px;
        }
    </style>
</head>
<body>
    <h1>Tambah Hotel</h1>
    <center><div class="container">
        <div class="column">
            <div class="card">
                <form action="/insertdata" method="POST">
                    @csrf
                      <label for="" class="font">Nama Hotel</label>
                      <input type="text" name="nama" placeholder="Nama hotel"><br>
                  
                      <label for="" class="font">Lokasi</label>
                      <input type="text" name="lokasi" placeholder="Lokasi hotel">
            
                      <label for="" class="font">Harga</label>
                      <input type="text" name="harga" placeholder="Harga per malam">
            
                      <label for="" class="font">Pilih Foto Hotel:</label>
                      <input type="file" name="image" accept="image/png, image/jpeg"><br><br>
                      
                      <div id="checkboxes" name="fasilitas" class="font">
                        <label for="">Fasilitas</label><br>
                        <div class="pilih">
                            <label for="one"><input type="checkbox" id="one"/>Shower</label>
                            <label for="two"> <input type="checkbox" id="one"/>Pool</label> 
                            <label for="three"><input type="checkbox" id="one"/>Breakfast</label><br>
                            <label for="one"><input type="checkbox" id="one"/>Wifi</label>
                            <label for="two"> <input type="checkbox" id="one"/>Double bed</label> 
                            <label for="three"><input type="checkbox" id="one"/>Refrigerator</label>
                        </div>
                      </div><br>
            
                      <label for="" class="font">Sinopsis</label>
                      <textarea name="sinopsis" id=""></textarea>
            
                      <input type="submit" value="Submit">
                </form>
            </div>
        </div>
      </div></center>

    {{-- <div class="container">

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="insertdata" method="POST" enctype="multipart/form-data"> <!-- entype untuk input data seperti foto-->
                        @csrf
                        <div>
                            <label for="">Nama Hotel</label>
                            <input type="text" name="nama">
                        </div><br>
                        <div>
                            <label for="">Lokasi</label>
                            <input type="text" name="lokasi">
                        </div><br>
                        <div>
                            <label for="">Harga</label>
                            <input type="text" name="harga">
                        </div><br>
                        <button type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</body>
</html>