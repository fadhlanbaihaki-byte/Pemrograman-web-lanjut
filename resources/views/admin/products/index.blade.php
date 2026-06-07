@extends('admin.layouts.admin')

@section('title', 'Manajemen Produk')
@section('page-title', 'Produk')

@section('content')

<div class="filter-bar">
    <form action="{{ route('admin.products.index') }}" method="GET">
        <div class="row g-2 align-items-center">
            <div class="col-md-5">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0" style="border-radius:8px 0 0 8px;border:1.5px solid #e0e8e4;">
                        <i class="bi bi-search" style="color:#8a9a94;"></i>
                    </span>

                    <input type="text"
                           name="search"
                           class="form-control form-control-admin border-start-0"
                           placeholder="Cari nama produk..."
                           value="{{ request('search') }}"
                           style="border-radius:0 8px 8px 0;">
                </div>
            </div>

            <div class="col-md-3">
                <select name="category_id" class="form-select form-control-admin">
                    <option value="">Semua Kategori</option>

                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-auto">
                <button type="submit" class="btn-admin-primary">
                    <i class="bi bi-funnel"></i> Filter
                </button>

                @if(request('search') || request('category_id'))
                    <a href="{{ route('admin.products.index') }}"
                       class="btn-admin-sm btn-view ms-1"
                       style="padding:9px 14px;">
                        <i class="bi bi-x-lg"></i>
                    </a>
                @endif
            </div>

            <div class="col-md-auto ms-auto">
                <a href="{{ route('admin.products.create') }}" class="btn-admin-primary">
                    <i class="bi bi-plus-lg"></i>
                    Tambah Produk
                </a>
            </div>
        </div>
    </form>
</div>

<div class="table-card">
    <div class="table-card-header">
        <div class="table-card-title">
            <i class="bi bi-box-seam me-2" style="color:#8a9a94;"></i>
            Daftar Produk

            <span class="ms-2" style="background:#f0f4f2;color:#8a9a94;padding:2px 10px;border-radius:20px;font-size:12px;font-weight:500;">
                {{ $products->total() }} produk
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
                    <th>Produk</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Unggulan</th>
                    <th>Dibuat</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($products as $index => $product)
                    <tr>
                        <td style="color:#b0c0ba;font-size:12px;">
                            {{ ($products->firstItem() ?? 1) + $index }}
                        </td>

                        <td>
                            <div class="d-flex align-items-center gap-3">
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}"
                                         class="product-thumb"
                                         alt="{{ $product->name }}">
                                @else
                                    <div class="product-thumb-placeholder">
                                        <i class="bi bi-image"></i>
                                    </div>
                                @endif

                                <div>
                                    <div style="font-weight:600;color:#1a1a2e;font-size:13.5px;max-width:180px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                                        {{ $product->name }}
                                    </div>

                                    <div style="font-size:11.5px;color:#b0c0ba;">
                                        slug: {{ $product->slug }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span class="badge-category">
                                {{ $product->category->name ?? '—' }}
                            </span>
                        </td>

                        <td style="max-width:200px;">
                            <span style="font-size:12.5px;color:#6a7a74;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                                {{ $product->description ? Str::limit(strip_tags($product->description), 70) : '—' }}
                            </span>
                        </td>

                        <td>
                            @if($product->is_featured)
                                <span class="badge-featured">
                                    <i class="bi bi-star-fill me-1"></i>Ya
                                </span>
                            @else
                                <span style="color:#b0c0ba;font-size:12px;">Tidak</span>
                            @endif
                        </td>

                        <td style="color:#8a9a94;font-size:12.5px;white-space:nowrap;">
                            {{ $product->created_at ? $product->created_at->format('d M Y') : '-' }}
                        </td>

                        <td>
                            <div class="d-flex gap-1 justify-content-end">
                                <a href="{{ route('produk.detail', $product->slug) }}"
                                   target="_blank"
                                   class="btn-admin-sm btn-view"
                                   title="Lihat di website">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="{{ route('admin.products.edit', $product) }}"
                                   class="btn-admin-sm btn-edit"
                                   title="Edit">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>

                                <form action="{{ route('admin.products.destroy', $product) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus produk {{ addslashes($product->name) }}?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn-admin-sm btn-delete"
                                            title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-5" style="color:#b0c0ba;">
                            <i class="bi bi-inbox fs-3 d-block mb-2"></i>

                            <div style="font-size:14px;">
                                Belum ada produk ditemukan
                            </div>

                            <a href="{{ route('admin.products.create') }}"
                               class="btn-admin-primary d-inline-flex mt-3">
                                <i class="bi bi-plus-lg"></i> Tambah Produk Pertama
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($products->hasPages())
        <div class="p-3 border-top d-flex justify-content-between align-items-center"
             style="border-color:#f0f4f2!important;gap:28px;">

            <div style="font-size:12.5px;color:#8a9a94;white-space:nowrap;margin-right:35px;">
                Menampilkan {{ $products->firstItem() }}–{{ $products->lastItem() }}
                dari {{ $products->total() }} produk
            </div>

            <div style="margin-left:auto;">
                {{ $products->links() }}
            </div>
        </div>
    @endif
</div>

@endsection