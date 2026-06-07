{{-- ============================================
     COMPONENT: Product Card
     Support: Eloquent Model ATAU Array
============================================ --}}

@php
    $isObj     = is_object($product);
    $pId       = $isObj ? $product->id       : ($product['id']         ?? 0);
    $pSlug     = $isObj ? $product->slug      : ($product['slug']        ?? '#');
    $pName     = $isObj ? $product->name      : ($product['name']        ?? 'Produk');
    $pDesc     = $isObj ? ($product->description ?? '') : ($product['short_desc'] ?? '');
    $pBadge    = $isObj ? ($product->is_featured ? 'Unggulan' : null) : ($product['badge'] ?? null);
    $pCatName  = $isObj ? ($product->category->name ?? 'Produk') : ($product['category'] ?? 'Produk');
    $pImage    = $isObj ? ($product->image ?? null) : null;
    $pImageRaw = !$isObj ? ($product['image'] ?? null) : null;
@endphp

<style>
.product-card {
    background: #fff;
    border-radius: 14px;
    border: 1px solid #ebebeb;
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 32px rgba(0,0,0,0.1);
}

.product-card-img-wrap {
    position: relative;
    width: 100%;
    height: 220px;        /* tinggi fixed semua card sama */
    overflow: hidden;
    background: #f5f5f5;
    flex-shrink: 0;
}

.product-card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;    /* crop rapi, tidak melar */
    object-position: center;
    display: block;
    transition: transform 0.4s ease;
}

.product-card:hover .product-card-img-wrap img {
    transform: scale(1.05);
}

.product-card-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 4px 12px;
    border-radius: 50px;
}

.badge-best, .badge-unggulan {
    background: var(--color-primary, #c8956c);
    color: white;
}

.badge-new {
    background: #2e7d32;
    color: white;
}

.product-card-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.product-card:hover .product-card-overlay {
    opacity: 1;
}

.overlay-btn {
    width: 44px; height: 44px;
    background: white;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: #333; font-size: 18px;
    text-decoration: none;
    transition: transform 0.2s;
}

.overlay-btn:hover { transform: scale(1.1); color: #333; }

.product-card-body {
    padding: 16px 18px 20px;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.product-category {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--color-primary, #c8956c);
    margin-bottom: 6px;
}

.product-name {
    font-family: var(--font-display, Georgia, serif);
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 8px;
    line-height: 1.35;
}

.product-desc {
    font-size: 13px;
    color: #888;
    line-height: 1.65;
    flex: 1;
    margin-bottom: 14px;
}

.product-card-actions { margin-top: auto; }

.btn-detail {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    font-weight: 500;
    color: var(--color-primary, #c8956c);
    text-decoration: none;
    border: 1.5px solid var(--color-primary, #c8956c);
    padding: 7px 16px;
    border-radius: 50px;
    transition: all 0.2s;
}

.btn-detail:hover {
    background: var(--color-primary, #c8956c);
    color: white;
}
</style>

<div class="product-card">
    {{-- Image --}}
    <div class="product-card-img-wrap">
        @if($pImage)
            <img src="{{ asset('storage/' . $pImage) }}" alt="{{ $pName }}" loading="lazy">
        @elseif($pImageRaw && Str::startsWith($pImageRaw, 'http'))
            <img src="{{ $pImageRaw }}" alt="{{ $pName }}" loading="lazy">
        @else
            <img src="https://picsum.photos/seed/{{ $pId }}/400/300" alt="{{ $pName }}" loading="lazy">
        @endif

        @if($pBadge)
            <span class="product-card-badge badge-{{ strtolower(str_replace(' ', '-', $pBadge)) }}">
                {{ $pBadge }}
            </span>
        @endif

        <div class="product-card-overlay">
            <a href="{{ url('/produk/' . $pSlug) }}" class="overlay-btn" title="Lihat Detail">
                <i class="bi bi-eye"></i>
            </a>
        </div>
    </div>

    {{-- Body --}}
    <div class="product-card-body">
        <div class="product-category">{{ $pCatName }}</div>
        <div class="product-name">{{ $pName }}</div>
        <div class="product-desc">
            {{ $pDesc ? Str::limit(strip_tags($pDesc), 90) : 'Klik detail untuk informasi lebih lanjut.' }}
        </div>
        <div class="product-card-actions">
            <a href="{{ url('/produk/' . $pSlug) }}" class="btn-detail">
                <i class="bi bi-info-circle"></i> Detail
            </a>
        </div>
    </div>
</div>