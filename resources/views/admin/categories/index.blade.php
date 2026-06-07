@extends('admin.layouts.admin')

@section('title', 'Manajemen Kategori')
@section('page-title', 'Kategori')

@section('content')

<div class="filter-bar">
    <form action="{{ route('admin.categories.index') }}" method="GET">
        <div class="row g-2 align-items-center">
            <div class="col-md-5">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0" style="border-radius:8px 0 0 8px;border:1.5px solid #e0e8e4;">
                        <i class="bi bi-search" style="color:#8a9a94;"></i>
                    </span>
                    <input type="text" name="search"
                           class="form-control form-control-admin border-start-0"
                           placeholder="Cari nama kategori..."
                           value="{{ request('search') }}"
                           style="border-radius:0 8px 8px 0;">
                </div>
            </div>

            <div class="col-md-auto">
                <button type="submit" class="btn-admin-primary">
                    <i class="bi bi-search"></i> Cari
                </button>

                @if(request('search'))
                    <a href="{{ route('admin.categories.index') }}"
                       class="btn-admin-sm btn-view ms-1" style="padding:9px 14px;">
                        <i class="bi bi-x-lg"></i>
                    </a>
                @endif
            </div>

            <div class="col-md-auto ms-auto">
                <a href="{{ route('admin.categories.create') }}" class="btn-admin-primary">
                    <i class="bi bi-plus-lg"></i>
                    Tambah Kategori
                </a>
            </div>
        </div>
    </form>
</div>

<div class="table-card">
    <div class="table-card-header">
        <div class="table-card-title">
            <i class="bi bi-tags me-2" style="color:#8a9a94;"></i>
            Daftar Kategori
            <span class="ms-2" style="background:#f0f4f2;color:#8a9a94;padding:2px 10px;border-radius:20px;font-size:12px;font-weight:500;">
                {{ $categories->total() }} kategori
            </span>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success mx-3 mt-3 mb-0">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger mx-3 mt-3 mb-0">
            {{ session('error') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Jumlah Produk</th>
                    <th>Dibuat</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($categories as $index => $category)
                    <tr>
                        <td style="color:#b0c0ba;font-size:12px;">
                            {{ ($categories->firstItem() ?? 1) + $index }}
                        </td>

                        <td>
                            <span style="font-weight:600;color:#1a1a2e;font-size:13.5px;">
                                {{ $category->name }}
                            </span>
                        </td>

                        <td>
                            <span class="badge-category">
                                {{ $category->products_count ?? 0 }} produk
                            </span>
                        </td>

                        <td style="color:#8a9a94;font-size:12.5px;white-space:nowrap;">
                            {{ $category->created_at ? $category->created_at->format('d M Y') : '-' }}
                        </td>

                        <td>
                            <div class="d-flex gap-1 justify-content-end">
                                <a href="{{ route('admin.categories.edit', $category) }}"
                                   class="btn-admin-sm btn-edit" title="Edit">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>

                                <form action="{{ route('admin.categories.destroy', $category) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus kategori ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-admin-sm btn-delete" title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-5" style="color:#b0c0ba;">
                            <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                            <div style="font-size:14px;">Belum ada kategori ditemukan</div>

                            <a href="{{ route('admin.categories.create') }}"
                               class="btn-admin-primary d-inline-flex mt-3">
                                <i class="bi bi-plus-lg"></i> Tambah Kategori Pertama
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($categories->hasPages())
        <div class="p-3 border-top d-flex justify-content-between align-items-center"
             style="border-color:#f0f4f2!important;">
            <div style="font-size:12.5px;color:#8a9a94;">
                Menampilkan {{ $categories->firstItem() }}–{{ $categories->lastItem() }}
                dari {{ $categories->total() }} kategori
            </div>

            <div>
                {{ $categories->links() }}
            </div>
        </div>
    @endif
</div>

@endsection