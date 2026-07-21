@extends('admin.layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Selamat Datang, {{ Auth::user()->name }}! 🎉</h5>
                        <p class="mb-4">
                            Ini adalah halaman Dashboard Admin. Template Sneat Bootstrap Admin kamu sudah berhasil terintegrasi dengan Laravel.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection