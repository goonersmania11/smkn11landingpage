<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru</title>
</head>
<body>

<h1>Tambah Guru</h1>

<form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <label>Nama Guru</label>

    <br>

    <input type="text" name="nama">

    <br><br>

    <label>NIP</label>

    <br>

    <input type="text" name="nip">

    <br><br>

    <label>Jabatan</label>

    <br>

    <input type="text" name="jabatan">

    <br><br>

    <label>Foto</label>

    <br>

    <input type="file" name="foto">

    <br><br>

    <button type="submit">

        Simpan

    </button>

</form>

</body>
</html>