@extends('admin.layouts.admin')

@section('title', 'Tambah Kategori')
@section('page-title', 'Tambah Kategori')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 style="font-weight:700;color:#1a1a2e;margin:0;">Tambah Kategori Baru</h5>
        <p style="font-size:13px;color:#8a9a94;margin:4px 0 0;">Isi nama kategori produk</p>
    </div>
    <a href="{{ route('admin.categories.index') }}"
       class="btn-admin-sm btn-view" style="padding:8px 16px;">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<form action="{{ route('admin.categories.store') }}" method="POST">
    @csrf

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="form-card">
                <h6 style="font-weight:600;color:#1a1a2e;margin-bottom:20px;padding-bottom:14px;border-bottom:1px solid #f0f4f2;">
                    <i class="bi bi-tag me-2" style="color:#8a9a94;"></i>
                    Informasi Kategori
                </h6>

                <div class="mb-0">
                    <label class="form-label-admin">Nama Kategori <span style="color:#ef4444;">*</span></label>
                    <input type="text" name="name"
                           class="form-control form-control-admin @error('name') is-invalid @enderror"
                           placeholder="Contoh: Seal Karet"
                           value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end gap-2 mt-4">
        <a href="{{ route('admin.categories.index') }}"
           class="btn-admin-sm btn-view" style="padding:10px 20px;font-size:13px;">
            Batal
        </a>
        <button type="submit" class="btn-admin-primary" style="font-size:13px;padding:10px 24px;">
            <i class="bi bi-check-lg"></i>
            Simpan Kategori
        </button>
    </div>
</form>

@endsection