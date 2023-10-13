<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta htttp-equals="X-UA-Compatible" content="ie=edge">
        
</head>
<body>
    @foreach($mahasiswa as $mhs)
    
    <form action="/home/simpan" method="post">
        {{ csrf_field() }}
        <input type="hidden" nama="id" value="{{ $mhs->id }}"></br>
     nama <input type="text" required="required" nama="nama" value="{{ $mhs->nama}}"> </br>
     umur <input type="number" required="required" nama="umur" value="{{ $mhs->umur}}"> </br>
     kota <input type="text" required="required" nama="kota" value="{{ $mhs->kota}}"> </br>
     <input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>
