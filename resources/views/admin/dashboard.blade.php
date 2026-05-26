@extends('admin.layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

{{-- Stat Cards --}}
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-4">
        <div class="stat-card green">
            <div class="stat-icon green">
                <i class="bi bi-box-seam-fill"></i>
            </div>
            <div class="stat-value">{{ $totalProducts }}</div>
            <div class="stat-label">Total Produk</div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="stat-card blue">
            <div class="stat-icon blue">
                <i class="bi bi-tags-fill"></i>
            </div>
            <div class="stat-value">{{ $totalCategories }}</div>
            <div class="stat-label">Total Kategori</div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="stat-card orange">
            <div class="stat-icon orange">
                <i class="bi bi-star-fill"></i>
            </div>
            <div class="stat-value">{{ $featuredProducts }}</div>
            <div class="stat-label">Produk Unggulan</div>
        </div>
    </div>
</div>

{{-- Recent Products --}}
<div class="table-card">
    <div class="table-card-header">
        <div class="table-card-title">
            <i class="bi bi-clock-history me-2" style="color:#8a9a94;"></i>
            Produk Terbaru
        </div>
        <a href="{{ route('admin.products.create') }}" class="btn-admin-primary">
            <i class="bi bi-plus-lg"></i>
            Tambah Produk
        </a>
    </div>

    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Kategori</th>
                    <th>Unggulan</th>
                    <th>Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($recentProducts as $product)
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}"
                                     class="product-thumb" alt="{{ $product->name }}">
                            @else
                                <div class="product-thumb-placeholder">
                                    <i class="bi bi-image"></i>
                                </div>
                            @endif
                            <div>
                                <div style="font-weight:500;color:#1a1a2e;font-size:13.5px;">
                                    {{ $product->name }}
                                </div>
                                <div style="font-size:12px;color:#8a9a94;">
                                    /produk/{{ $product->slug }}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge-category">{{ $product->category->name ?? '—' }}</span>
                    </td>
                    <td>
                        @if($product->is_featured)
                            <span class="badge-featured"><i class="bi bi-star-fill me-1"></i>Unggulan</span>
                        @else
                            <span style="color:#b0c0ba;font-size:12px;">—</span>
                        @endif
                    </td>
                    <td style="color:#8a9a94;font-size:12.5px;">
                        {{ $product->created_at->format('d M Y') }}
                    </td>
                    <td>
                        <div class="d-flex gap-1">
                            <a href="{{ route('admin.products.edit', $product) }}"
                               class="btn-admin-sm btn-edit">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4" style="color:#b0c0ba;">
                        <i class="bi bi-inbox fs-4 d-block mb-2"></i>
                        Belum ada produk
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($totalProducts > 5)
    <div class="p-3 text-center border-top" style="border-color:#f0f4f2!important;">
        <a href="{{ route('admin.products.index') }}"
           style="font-size:13px;color:var(--admin-primary);font-weight:500;text-decoration:none;">
            Lihat semua {{ $totalProducts }} produk
            <i class="bi bi-arrow-right ms-1"></i>
        </a>
    </div>
    @endif
</div>

@endsection
