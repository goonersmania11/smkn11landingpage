@extends('admin.layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Profil Sekolah</h5>
                <a href="{{ route('admin.profiles.create') }}" class="btn btn-primary">
                    <i class="bx bx-plus"></i> Tambah Profil
                </a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if($profiles->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Kepala Sekolah</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($profiles as $profile)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $profile->school_name }}</td>
                                    <td>{{ $profile->principal_name }}</td>
                                    <td>{{ $profile->phone ?? '-' }}</td>
                                    <td>{{ $profile->email ?? '-' }}</td>
                                    <td>
                                        <a href="{{ route('admin.profiles.show', $profile) }}" class="btn btn-info btn-sm">
                                            <i class="bx bx-show"></i>
                                        </a>
                                        <a href="{{ route('admin.profiles.edit', $profile) }}" class="btn btn-warning btn-sm">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.profiles.destroy', $profile) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info">
                        Belum ada data profil sekolah. Klik "Tambah Profil" untuk menambahkan.
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
