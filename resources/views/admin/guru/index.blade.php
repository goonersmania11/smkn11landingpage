<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>

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

<h1>Data Guru</h1>

<a href="{{ route('guru.create') }}" class="btn btn-tambah">
    Tambah Guru
</a>

<table>

    <thead>

        <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>NIP</th>
            <th>Jabatan</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

    @forelse ($guru as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama_guru }}</td>

            <td>{{ $item->nip }}</td>

            <td>{{ $item->jabatan }}</td>

            <td>

                @if($item->foto)

                    <img
                        src="{{ asset('storage/'.$item->foto) }}"
                        width="100"
                    >

                @else

                    Tidak ada foto

                @endif

            </td>

            <td>

                <a
                    href="{{ route('guru.edit',$item->id) }}"
                    class="btn btn-edit"
                >
                    Edit
                </a>

                <form
                    action="{{ route('guru.destroy',$item->id) }}"
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

                Data Guru Belum Ada

            </td>

        </tr>

    @endforelse

    </tbody>

</table>

</body>
</html>