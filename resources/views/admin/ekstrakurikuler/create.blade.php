<!DOCTYPE html>
<html>
<head>
    <title>Tambah ekstrakurikuler</title>
</head>
<body>
<h1>Tambah ekstrakurikuler</h1>
<form action="{{ route('ekstrakurikuler.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Nama ekstrakurikuler</label>
    <br>
    <input type="text" name="nama">
    <br><br>
    <label>Deskripsi</label>
    <br>
    <textarea name="deskripsi"></textarea>
    <br><br>
    <label>Gambar</label>
    <br>
    <input type="file" name="gambar">
    <br><br>
    <button type="submit">
        Simpan
    </button>
</form>
</body>
</html>