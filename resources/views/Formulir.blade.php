<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir ( Laravel - Request Data )</title>
</head>
<body>
    
    <form action="/formulir/proses" method="post">
        <input type="hidden" name = "_token" value = "<?php echo csrf_token() ?>">
    
        Nama :
        <input type="text" name="nama"> <br/>
        Alamat :
        <input type="text" name="alamat"> <br/>
        <input type="submit" value="Save">
    </form>


</body>
</html>