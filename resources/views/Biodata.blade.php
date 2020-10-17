<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>Passing Data Laravel</h1>
    <a href="SWAG">This is Passing Data</a>
    
    <br>


    <p>Nama : {{ $nama }}</p>

    <p>Mata Kuliah</p>
    <ul>

        @foreach($matkul as $m)
        
        <li>{{ $m }}</li>

        @endforeach

    </ul>

</body>
</html>