@extends('admin.layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Detail Profil Sekolah</h5>
                <div>
                    <a href="{{ route('admin.profiles.edit', $profile) }}" class="btn btn-warning">
                        <i class="bx bx-edit"></i> Edit
                    </a>
                    <a href="{{ route('admin.profiles.index') }}" class="btn btn-secondary">
                        <i class="bx bx-arrow-back"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-muted">Nama Sekolah</h6>
                        <p class="fw-bold">{{ $profile->school_name }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-muted">Kepala Sekolah</h6>
                        <p class="fw-bold">{{ $profile->principal_name }}</p>
                    </div>
                </div>

                <hr>

                <div class="mb-3">
                    <h6 class="text-muted">Pesan Selamat Datang</h6>
                    <p>{{ $profile->welcome_message }}</p>
                </div>

                @if($profile->description)
                <div class="mb-3">
                    <h6 class="text-muted">Deskripsi Sekolah</h6>
                    <p>{{ $profile->description }}</p>
                </div>
                @endif

                @if($profile->principal_message)
                <div class="mb-3">
                    <h6 class="text-muted">Pesan Kepala Sekolah</h6>
                    <p>{{ $profile->principal_message }}</p>
                </div>
                @endif

                @if($profile->principal_photo)
                <div class="mb-3">
                    <h6 class="text-muted">Foto Kepala Sekolah</h6>
                    <img src="{{ asset('storage/' . $profile->principal_photo) }}" alt="Foto Kepala Sekolah" class="img-thumbnail" style="max-width: 200px;">
                </div>
                @endif

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-muted">Visi Sekolah</h6>
                        <p>{{ $profile->vision ?? '-' }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-muted">Misi Sekolah</h6>
                        <p>{{ $profile->mission ?? '-' }}</p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-4">
                        <h6 class="text-muted">Alamat</h6>
                        <p>{{ $profile->address ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-muted">Telepon</h6>
                        <p>{{ $profile->phone ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-muted">Email</h6>
                        <p>{{ $profile->email ?? '-' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
