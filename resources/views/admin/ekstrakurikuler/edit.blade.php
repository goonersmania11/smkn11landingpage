<!DOCTYPE html>
<html>
<head>
    <title>Edit Ekstrakurikuler</title>
</head>
<body>
<h1>Edit Ekstrakurikuler</h1>
<form action="{{ route('ekstrakurikuler.update',$ekstrakurikuler->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Nama Ekstrakurikuler</label>
    <br>
    <input
        type="text"
        name="nama"
        value="{{ $ekstrakurikuler->nama }}"
    >
    <br><br>
    <label>Deskripsi</label>
    <br>
    <textarea name="deskripsi">{{ $ekstrakurikuler->deskripsi }}</textarea>
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