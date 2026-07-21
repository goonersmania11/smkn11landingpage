<!DOCTYPE html>
<html>
<head>
    <title>Data Jurusan</title>
</head>
<body>
    <h1>Data Jurusan</h1>
    <a href="{{ route('jurusan.create') }}">
        Tambah Jurusan
    </a>
    <hr>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Slug</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($jurusan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->slug }}</td>
                <td>
                    @if($item->gambar)
                        <img src="{{ asset('storage/'.$item->gambar) }}" width="100">
                    @else
                        Tidak ada gambar
                    @endif
                </td>
                <td>
                    <a href="{{ route('jurusan.edit',$item->id) }}">
                        Edit
                    </a>
                    <form action="{{ route('jurusan.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">
                    Data belum ada
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>