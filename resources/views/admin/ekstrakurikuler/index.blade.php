<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ekstrakurikuler</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin:40px;
        }

        table{
            width:100%;
            border-collapse: collapse;
            margin-top:20px;
        }

        table th,
        table td{
            border:1px solid #ddd;
            padding:10px;
            text-align:left;
            vertical-align: middle;
        }

        table th{
            background:#f5f5f5;
        }

        img{
            border-radius:6px;
        }

        .btn{
            padding:6px 12px;
            text-decoration:none;
            border:none;
            cursor:pointer;
            border-radius:4px;
        }

        .btn-tambah{
            background:green;
            color:white;
        }

        .btn-edit{
            background:blue;
            color:white;
        }

        .btn-hapus{
            background:red;
            color:white;
        }

        form{
            display:inline;
        }
    </style>
</head>
<body>

    <h1>Data Ekstrakurikuler</h1>

    <a href="{{ route('ekstrakurikuler.create') }}" class="btn btn-tambah">
        Tambah Ekstrakurikuler
    </a>

    <table>

        <thead>

            <tr>

                <th>No</th>
                <th>Nama Ekstrakurikuler</th>
                <th>Slug</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

            @forelse ($ekstrakurikuler as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->nama_ekstrakurikuler }}</td>

                    <td>{{ $item->slug }}</td>

                    <td>{{ $item->deskripsi }}</td>

                    <td>

                        @if($item->gambar)

                            <img
                                src="{{ asset('storage/'.$item->gambar) }}"
                                width="120"
                            >

                        @else

                            Tidak ada gambar

                        @endif

                    </td>

                    <td>

                        <a
                            href="{{ route('ekstrakurikuler.edit',$item->id) }}"
                            class="btn btn-edit"
                        >
                            Edit
                        </a>

                        <form
                            action="{{ route('ekstrakurikuler.destroy',$item->id) }}"
                            method="POST"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-hapus"
                            >
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6" align="center">

                        Data Ekstrakurikuler Belum Ada

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</body>
</html>