{{-- ============================================
     COMPONENT: Product Card
     File: resources/views/components/product-card.blade.php
     Usage: @include('components.product-card', ['product' => $product])
============================================ --}}

<style>
    /* =============================================
       PRODUCT CARD STYLES
    ============================================= */
    .product-card {
        background: var(--color-card-bg);
        border: 1px solid var(--color-border);
        border-radius: var(--radius-md);
        overflow: hidden;
        transition: var(--transition);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-5px);
        border-color: var(--color-primary-light);
    }

    .product-card-img-wrap {
        position: relative;
        overflow: hidden;
        height: 220px;
        background: #f5f0eb;
    }

    .product-card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-card:hover .product-card-img-wrap img {
        transform: scale(1.06);
    }

    .product-card-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        background: var(--color-primary);
        color: #fff;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: 50px;
    }

    .product-card-badge.badge-new {
        background: #2d8653;
    }

    .product-card-badge.badge-best {
        background: var(--color-primary);
    }

    .product-card-overlay {
        position: absolute;
        top: 12px;
        right: 12px;
        display: flex;
        flex-direction: column;
        gap: 6px;
        opacity: 0;
        transform: translateX(8px);
        transition: var(--transition);
    }

    .product-card:hover .product-card-overlay {
        opacity: 1;
        transform: translateX(0);
    }

    .overlay-btn {
        width: 36px;
        height: 36px;
        background: white;
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-text);
        font-size: 15px;
        cursor: pointer;
        box-shadow: 0 2px 10px rgba(0,0,0,0.12);
        transition: var(--transition);
        text-decoration: none;
    }

    .overlay-btn:hover {
        background: var(--color-primary);
        color: white;
    }

    .product-card-body {
        padding: 18px 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .product-category {
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--color-primary);
        margin-bottom: 6px;
    }

    .product-name {
        font-family: var(--font-display);
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--color-dark);
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .product-desc {
        font-size: 13px;
        color: var(--color-muted);
        line-height: 1.6;
        margin-bottom: 16px;
        flex: 1;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-price {
        font-family: var(--font-display);
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--color-primary);
        margin-bottom: 14px;
    }

    .product-card-actions {
        display: flex;
        gap: 8px;
    }

    .btn-detail {
        flex: 1;
        padding: 9px 14px;
        border: 1.5px solid var(--color-border);
        background: transparent;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 500;
        color: var(--color-text);
        text-align: center;
        transition: var(--transition);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .btn-detail:hover {
        border-color: var(--color-primary);
        color: var(--color-primary);
        background: var(--color-primary-light);
    }
</style>

<div class="product-card">
    {{-- Product Image --}}
    <div class="product-card-img-wrap">
        <img
            src="{{ $product['image'] ?? 'https://picsum.photos/seed/' . ($product['id'] ?? '1') . '/400/300' }}"
            alt="{{ $product['name'] ?? 'Produk' }}"
            loading="lazy"
        >

        {{-- Badge --}}
        @if(!empty($product['badge']))
            <span class="product-card-badge badge-{{ strtolower($product['badge']) }}">
                {{ $product['badge'] }}
            </span>
        @endif

        {{-- Hover overlay buttons --}}
        <div class="product-card-overlay">
            <a href="{{ url('/produk/' . ($product['slug'] ?? '1')) }}"
               class="overlay-btn" title="Lihat Detail">
                <i class="bi bi-eye"></i>
            </a>
        </div>
    </div>

    {{-- Product Body --}}
    <div class="product-card-body">
        <div class="product-category">{{ $product['category'] ?? 'Produk' }}</div>
        <div class="product-name">{{ $product['name'] ?? 'Nama Produk' }}</div>
        <div class="product-desc">{{ $product['short_desc'] ?? 'Deskripsi singkat produk ini.' }}</div>
        <div class="product-price">{{ $product['price'] ?? 'Rp 0' }}</div>

        <div class="product-card-actions">
            <a href="{{ url('/produk/' . ($product['slug'] ?? '1')) }}" class="btn-detail">
                <i class="bi bi-info-circle"></i> Detail
            </a>
            <a href="https://wa.me/6281234567890?text=Halo%20Dapur%20Ayu,%20saya%20ingin%20memesan%20*{{ urlencode($product['name'] ?? 'produk') }}*"
               class="btn-wa-sm" target="_blank">
                <i class="bi bi-whatsapp"></i> Pesan
            </a>
        </div>
    </div>
</div>