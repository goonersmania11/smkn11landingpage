<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jurusan</title>
</head>
<body>
<h1>Tambah Jurusan</h1>
<form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Nama Jurusan</label>
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