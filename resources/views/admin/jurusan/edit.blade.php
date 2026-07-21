<!DOCTYPE html>
<html>
<head>
    <title>Edit Jurusan</title>
</head>
<body>
<h1>Edit Jurusan</h1>
<form action="{{ route('jurusan.update',$jurusan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Nama Jurusan</label>
    <br>
    <input
        type="text"
        name="nama"
        value="{{ $jurusan->nama }}"
    >
    <br><br>
    <label>Deskripsi</label>
    <br>
    <textarea name="deskripsi">{{ $jurusan->deskripsi }}</textarea>
    <br><br>
    <label>Gambar Baru</label>
    <br>
    <input type="file" name="gambar">
    <br><br>
    <button type="submit">
        Update
    </button>
</form>
</body>
</html>