<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel #11 Foreign CRUD</title>
</head>
<body>
    
    <h3>Edit Pegawai</h3>

    <a href="/pegawai">Back</a>

    <br/>
    <br/>

    @foreach($pegawai as $p)
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
        Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
        Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
        Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
        <input type="submit" value="Save Data">
    </form>
    @endforeach



</body>
</html>