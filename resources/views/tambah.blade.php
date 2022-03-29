<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
    <style>
        body{
            background-color: #0B1017;
            /* color: white; */
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
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;

        }

        h1{
            text-align: center;
            color: white;
            font-size: 50px;
        }

    </style>
</head>
<body>
    <h1>Tambah Hotel</h1>
    <div class="container">
        <form action="/insertdata" method="POST">
        @csrf
          <label for="">Nama Hotel</label>
          <input type="text" name="nama" placeholder="Nama hotel"><br>
      
          <label for="">Lokasi</label>
          <input type="text" name="lokasi" placeholder="Lokasi hotel">

          <label for="">Harga</label>
          <input type="text" name="harga" placeholder="Harga per malam">

          <label for="">Pilih Foto Hotel:</label>
          <input type="file" name="image" accept="image/png, image/jpeg"><br><br>
          
          <div id="checkboxes" name="fasilitas">
            <label for="">Fasilitas</label><br>
            <label for="one"><input type="checkbox" id="one"/>Shower</label>
            <label for="two"> <input type="checkbox" id="two"/>Pool</label> 
            <label for="three"><input type="checkbox" id="three"/>Breakfast</label>
            <label for="one"><input type="checkbox" id="one"/>Wifi</label>
            <label for="two"> <input type="checkbox" id="two"/>Double bed</label> 
            <label for="three"><input type="checkbox" id="three"/>Refrigerator</label>
          </div><br>

          <label for="">Sinopsis</label>
          <textarea name="sinopsis" id=""></textarea>

          <input type="submit" value="Submit">
        </form>
      </div>

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