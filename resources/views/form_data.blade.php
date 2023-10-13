<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta htttp-equals="X-UA-Compatible" content="ie=edge">
        <titlt>Document</title>
</head>
<body>
    <h1>Form Tambah Data</h1>
    <form action="/home/simpan" method="post">
        {{ csrf_field() }}
     nama <input type="text" name="nama" required="required"> </br>
     umur <input type="number" name="umur" required="required"> </br>
     kota <input type="text" name="kota" required="required"> </br>
     <input type="submit" value="Simpan Data">
</form>

</body>
</html>
