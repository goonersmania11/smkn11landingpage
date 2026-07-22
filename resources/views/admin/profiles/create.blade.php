@extends('admin.layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tambah Profil Sekolah</h5>
                <a href="{{ route('admin.profiles.index') }}" class="btn btn-secondary">
                    <i class="bx bx-arrow-back"></i> Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.profiles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="school_name" class="form-label">Nama Sekolah <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('school_name') is-invalid @enderror" 
                                   id="school_name" name="school_name" value="{{ old('school_name') }}" required>
                            @error('school_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="principal_name" class="form-label">Nama Kepala Sekolah <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('principal_name') is-invalid @enderror" 
                                   id="principal_name" name="principal_name" value="{{ old('principal_name') }}" required>
                            @error('principal_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="welcome_message" class="form-label">Pesan Selamat Datang <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('welcome_message') is-invalid @enderror" 
                                  id="welcome_message" name="welcome_message" rows="3" required>{{ old('welcome_message') }}</textarea>
                        @error('welcome_message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Sekolah</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="4">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="principal_message" class="form-label">Pesan Kepala Sekolah</label>
                        <textarea class="form-control @error('principal_message') is-invalid @enderror" 
                                  id="principal_message" name="principal_message" rows="3">{{ old('principal_message') }}</textarea>
                        @error('principal_message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="principal_photo" class="form-label">Foto Kepala Sekolah</label>
                        <input type="file" class="form-control @error('principal_photo') is-invalid @enderror" 
                               id="principal_photo" name="principal_photo" accept="image/*">
                        @error('principal_photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="vision" class="form-label">Visi Sekolah</label>
                            <textarea class="form-control @error('vision') is-invalid @enderror" 
                                      id="vision" name="vision" rows="3">{{ old('vision') }}</textarea>
                            @error('vision')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="mission" class="form-label">Misi Sekolah</label>
                            <textarea class="form-control @error('mission') is-invalid @enderror" 
                                      id="mission" name="mission" rows="3">{{ old('mission') }}</textarea>
                            @error('mission')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" 
                                   id="address" name="address" value="{{ old('address') }}">
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="phone" class="form-label">Telepon</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                                   id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="bx bx-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
