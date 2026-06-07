@extends('layouts.app')
@section('title', $product->name . ' - Indo Gummi')
@section('content')

    {{-- ===== BREADCRUMB ===== --}}
    <section class="page-header-mini">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-size:13px; margin:0;">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" style="color:var(--color-primary);">Beranda</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('produk') }}" style="color:var(--color-primary);">Produk</a>
                    </li>
                    @if($product->category)
                    <li class="breadcrumb-item">
                        <a href="{{ route('produk', ['category_id' => $product->category->id]) }}"
                           style="color:var(--color-primary);">
                            {{ $product->category->name }}
                        </a>
                    </li>
                    @endif
                    <li class="breadcrumb-item active" style="color:var(--color-muted);">
                        {{ $product->name }}
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    {{-- ===== PRODUCT DETAIL ===== --}}
    <section class="section-padding">
        <div class="container">
            <div class="row g-5">

                {{-- Left: Image --}}
                <div class="col-lg-6 fade-up">
                    <div class="product-gallery">
                        <div class="gallery-main">
                            @if($product->image)
                                <img id="mainImg"
                                     src="{{ asset('storage/' . $product->image) }}"
                                     alt="{{ $product->name }}">
                            @else
                                <img id="mainImg"
                                     src="https://picsum.photos/seed/{{ $product->id }}/700/500"
                                     alt="{{ $product->name }}">
                            @endif

                            @if($product->is_featured)
                                <div class="gallery-badge">Unggulan</div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Right: Info --}}
                <div class="col-lg-6 fade-up">
                    <div class="product-detail-info">

                        @if($product->category)
                            <div class="product-category-tag">
                                {{ $product->category->name }}
                            </div>
                        @endif

                        <h1 class="product-detail-name">{{ $product->name }}</h1>

                        <div class="divider-elegant"></div>

                        {{-- Description --}}
                        @if($product->description)
                        <p class="product-detail-desc">
                            {!! nl2br(e($product->description)) !!}
                        </p>
                        @endif

                        {{-- Actions --}}
                        <div class="product-actions">
                            <a href="{{ $whatsappLink }}" target="_blank"
                               class="btn-primary-custom" style="flex:1; text-align:center;">
                                <i class="bi bi-whatsapp me-2"></i> Hubungi via WhatsApp
                            </a>
                        </div>

                        {{-- Notes --}}
                        <div class="product-notes">
                            <div class="note-item">
                                <i class="bi bi-check-circle-fill" style="color:var(--color-primary);"></i>
                                Bisa Kustom Sesuai Sampel / Gambar
                            </div>
                            <div class="note-item">
                                <i class="bi bi-check-circle-fill" style="color:var(--color-primary);"></i>
                                Fleksibel Tanpa Minimum Order Besar
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- ===== SPESIFIKASI TAB ===== --}}
            @if($product->specification)
            <div class="product-tabs mt-5 fade-up">
                <div class="tabs-header">
                    <button class="tab-btn active" data-tab="spec">Spesifikasi</button>
                </div>
                <div class="tab-content-custom">
                    <div id="tab-spec" class="tab-pane-custom">
                        <p>{!! nl2br(e($product->specification)) !!}</p>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </section>

    {{-- ===== PRODUK TERKAIT ===== --}}
    @php
        $related = \App\Models\Product::with('category')
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();
    @endphp

    @if($related->count() > 0)
    <section class="section-padding" style="background:var(--color-bg); padding-top:0;">
        <div class="container">
            <div class="d-flex align-items-end justify-content-between mb-5 flex-wrap gap-3">
                <div class="fade-up">
                    <span class="section-label">Lainnya</span>
                    <h2 class="section-title mb-0">Produk Terkait</h2>
                    <div class="divider-elegant"></div>
                </div>
                <a href="{{ route('produk') }}" class="btn-outline-custom fade-up">
                    Semua Produk <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach($related as $i => $rel)
                    <div class="col-lg-3 col-md-6 fade-up"
                         style="transition-delay: {{ $i * 0.1 }}s;">
                        @include('components.product-card', ['product' => $rel])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

@endsection

@push('styles')
<style>
    .page-header-mini {
        background: var(--color-bg);
        padding: 18px 0;
        border-bottom: 1px solid var(--color-border);
    }

    .product-gallery { position: sticky; top: 100px; }
    .gallery-main {
        border-radius: var(--radius-lg);
        overflow: hidden;
        position: relative;
        height: 440px;
        background: #f5f0eb;
        margin-bottom: 12px;
    }
    .gallery-main img {
        width: 100%; height: 100%;
        object-fit: cover;
    }
    .gallery-badge {
        position: absolute; top: 16px; left: 16px;
        background: var(--color-primary); color: white;
        font-size: 11px; font-weight: 600; letter-spacing: 1.5px;
        text-transform: uppercase; padding: 5px 14px; border-radius: 50px;
    }

    .product-category-tag {
        font-size: 11px; font-weight: 600; letter-spacing: 2px;
        text-transform: uppercase; color: var(--color-primary);
        margin-bottom: 8px;
    }
    .product-detail-name {
        font-family: var(--font-display);
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        margin-bottom: 12px;
    }
    .product-detail-desc {
        font-size: 14px; color: var(--color-muted);
        line-height: 1.85; margin-bottom: 20px;
    }
    .product-actions {
        display: flex; gap: 10px; margin-bottom: 20px;
    }
    .product-notes { display: flex; flex-direction: column; gap: 10px; }
    .note-item {
        display: flex; align-items: center; gap: 10px;
        font-size: 13px; color: var(--color-muted);
    }

    /* Tabs */
    .product-tabs {
        background: white; border-radius: var(--radius-lg);
        border: 1px solid var(--color-border); overflow: hidden;
    }
    .tabs-header {
        display: flex; border-bottom: 1px solid var(--color-border);
        padding: 0 24px;
    }
    .tab-btn {
        padding: 16px 20px; border: none; background: none;
        font-family: var(--font-body); font-size: 14px; font-weight: 500;
        color: var(--color-muted); cursor: pointer; transition: var(--transition);
        border-bottom: 2px solid transparent; margin-bottom: -1px;
    }
    .tab-btn.active {
        color: var(--color-primary);
        border-bottom-color: var(--color-primary);
    }
    .tab-content-custom { padding: 32px; }
    .tab-content-custom p {
        font-size: 14px; color: var(--color-muted); line-height: 1.85;
    }

    @media (max-width: 991px) {
        .product-gallery { position: static; }
        .gallery-main { height: 300px; }
    }
</style>
@endpush