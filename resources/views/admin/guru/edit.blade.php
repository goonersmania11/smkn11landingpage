<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Guru</title>
</head>
<body>

<h1>Edit Guru</h1>

<form action="{{ route('guru.update',$guru->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <label>Nama Guru</label>

    <br>

    <input
        type="text"
        name="nama"
        value="{{ $guru->nama_guru }}"
    >

    <br><br>

    <label>NIP</label>

    <br>

    <input
        type="text"
        name="nip"
        value="{{ $guru->nip }}"
    >

    <br><br>

    <label>Jabatan</label>

    <br>

    <input
        type="text"
        name="jabatan"
        value="{{ $guru->jabatan }}"
    >

    <br><br>

    <label>Foto Baru</label>

    <br>

    <input type="file" name="foto">

    <br><br>

    @if($guru->foto)

        <img
            src="{{ asset('storage/'.$guru->foto) }}"
            width="120"
        >

        <br><br>

    @endif

    <button type="submit">

        Update

    </button>

</form>

</body>
</html>