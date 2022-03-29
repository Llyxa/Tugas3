{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Hotel</h1>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data"> <!-- entype untuk input data seperti foto-->
                        @csrf
                        <div>
                            <label for="">Nama Hotel</label>
                            <input type="text" name="nama" value="{{ $data->nama }}">
                        </div><br>
                        <div>
                            <label for="">Lokasi</label>
                            <input type="text" name="lokasi" value="{{ $data->lokasi }}>
                        </div><br>
                        <div>
                            <label for="">Harga</label>
                            <input type="text" name="harga" value="{{ $data->harga }}>
                        </div><br>
                        <button type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <style>
        body{
            background-color: #0B1017;
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
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

h1{
    text-align: center;
}
    </style>
</head>
<body>
    <h1>Edit Hotel</h1>
    <div class="container">
        <form action="insertdata">
          <label>Nama Hotel</label>
          <input type="text" name="nama" placeholder="Nama hotel" value="{{ $data->nama }}">
      
          <label>Lokasi</label>
          <input type="text" name="lokasi" placeholder="Lokasi hotel" value="{{ $data->lokasi }}">

          <label>Harga</label>
          <input type="text" name="harga" placeholder="Harga" value="{{ $data->harga }}">
      
          <input type="submit" value="Submit">
        </form>
      </div>
</body>
</html>