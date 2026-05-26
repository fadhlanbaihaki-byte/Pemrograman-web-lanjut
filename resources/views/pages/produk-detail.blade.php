@extends('layouts.app')
@section('title', 'Natural Rubber Sheet - Karet Nusantara')
@section('content')

    {{-- ===== PAGE HEADER ===== --}}
    <section class="page-header-mini">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-size:13px; margin:0;">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" style="color:var(--color-primary);">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/produk') }}" style="color:var(--color-primary);">Produk</a></li>
                    <li class="breadcrumb-item active" style="color:var(--color-muted);">Natural Rubber Sheet</li>
                </ol>
            </nav>
        </div>
    </section>

    {{-- ===== PRODUCT DETAIL ===== --}}
    <section class="section-padding">
        <div class="container">
            <div class="row g-5">

                {{-- Left: Images --}}
                <div class="col-lg-6 fade-up">
                    <div class="product-gallery">

                        {{-- Main Image --}}
                        <div class="gallery-main">
                            <img id="mainImg"
                                 src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=700&q=80"
                                 alt="Natural Rubber Sheet">
                            <div class="gallery-badge">Best Seller</div>
                        </div>

                        {{-- Thumbnail Images --}}
                        <div class="gallery-thumbs">
                            @php
                            $thumbs = [
                                'https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=200&q=80',
                                'https://images.unsplash.com/photo-1581091012184-7c3b12cd6b0f?w=200&q=80',
                                'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=200&q=80',
                                'https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?w=200&q=80',
                            ];
                            @endphp
                            @foreach($thumbs as $i => $thumb)
                            <div class="gallery-thumb {{ $i === 0 ? 'active' : '' }}"
                                 onclick="changeImg('{{ $thumb }}', this)">
                                <img src="{{ $thumb }}" alt="Foto {{ $i+1 }}">
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>

                {{-- Right: Info --}}
                <div class="col-lg-6 fade-up">
                    <div class="product-detail-info">

                        <div class="product-category-tag">Rubber Sheet</div>

                        <h1 class="product-detail-name">Natural Rubber Sheet</h1>

                        {{-- Rating --}}
                        <div class="product-rating">
                            @for($i=0; $i<5; $i++)
                            <i class="bi bi-star-fill" style="color:#f0a500; font-size:14px;"></i>
                            @endfor
                            <span style="font-size:13px; color:var(--color-muted); margin-left:8px;">5.0 (84 ulasan)</span>
                        </div>

                        <div class="divider-elegant"></div>

                        {{-- Short Description --}}
                        <p class="product-detail-desc">
                            Lembaran karet alam (natural rubber) berkualitas tinggi yang diproses dari lateks segar pilihan. Memiliki elastisitas dan ketahanan benturan yang sangat baik, cocok untuk alas mesin, isolasi getaran, dan berbagai aplikasi industri berat.
                        </p>

                        {{-- Product Details --}}
                        <div class="product-spec-table">
                            <div class="spec-row">
                                <div class="spec-label">Material</div>
                                <div class="spec-value">Natural Rubber (NR) 100%</div>
                            </div>
                            <div class="spec-row">
                                <div class="spec-label">Ketebalan</div>
                                <div class="spec-value">1 mm – 50 mm (custom order)</div>
                            </div>
                            <div class="spec-row">
                                <div class="spec-label">Kekerasan</div>
                                <div class="spec-value">40 – 80 Shore A</div>
                            </div>
                            <div class="spec-row">
                                <div class="spec-label">Suhu Kerja</div>
                                <div class="spec-value">-40°C hingga +70°C</div>
                            </div>
                            <div class="spec-row">
                                <div class="spec-label">Ukuran Standar</div>
                                <div class="spec-value">1,2 m × 10 m per roll</div>
                            </div>
                            <div class="spec-row">
                                <div class="spec-label">Min. Order</div>
                                <div class="spec-value">1 roll (custom dimension tersedia)</div>
                            </div>
                        </div>

                        {{-- Variants --}}
                        <div class="mb-4">
                            <div style="font-size:13px; font-weight:600; margin-bottom:10px; color:var(--color-dark);">Pilih Ketebalan:</div>
                            <div class="variant-pills">
                                <button class="variant-pill active">3 mm</button>
                                <button class="variant-pill">5 mm</button>
                                <button class="variant-pill">10 mm</button>
                                <button class="variant-pill">20 mm</button>
                            </div>
                        </div>

                        {{-- Actions --}}
                        <div class="product-actions">
                            <a href="https://wa.me/6281234567890?text=Halo%20Karet%20Nusantara,%20saya%20ingin%20menanyakan%20*Natural%20Rubber%20Sheet*%20(3mm).%20Mohon%20info%20lebih%20lanjut."
                               class="btn-wa" target="_blank" style="flex:1; justify-content:center;">
                                <i class="bi bi-whatsapp"></i>
                                Tanya via WhatsApp
                            </a>
                            <a href="{{ url('/produk') }}" class="btn-outline-custom">
                                <i class="bi bi-grid-3x3-gap"></i>
                            </a>
                        </div>

                        {{-- Info Notes --}}
                        <div class="product-notes">
                            <div class="note-item">
                                <i class="bi bi-truck" style="color:var(--color-primary);"></i>
                                <span>Pengiriman ke seluruh Indonesia, estimasi 2–5 hari kerja</span>
                            </div>
                            <div class="note-item">
                                <i class="bi bi-shield-check" style="color:var(--color-primary);"></i>
                                <span>Memenuhi standar SNI & ISO 9001:2015</span>
                            </div>
                            <div class="note-item">
                                <i class="bi bi-tools" style="color:var(--color-primary);"></i>
                                <span>Tersedia layanan cutting & fabrication sesuai kebutuhan</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            {{-- ===== DESKRIPSI LENGKAP ===== --}}
            <div class="row mt-5">
                <div class="col-12">
                    <div class="product-tabs fade-up">
                        <div class="tabs-header">
                            <button class="tab-btn active" data-tab="deskripsi">Deskripsi Produk</button>
                            <button class="tab-btn" data-tab="cara">Spesifikasi Teknis</button>
                            <button class="tab-btn" data-tab="ulasan">Ulasan (84)</button>
                        </div>

                        <div class="tab-content-custom">

                            {{-- Deskripsi --}}
                            <div class="tab-pane-custom active" id="tab-deskripsi">
                                <h5 style="font-family:var(--font-display);">Tentang Produk</h5>
                                <p>Natural Rubber Sheet dari Karet Nusantara diproduksi menggunakan lateks karet alam (Hevea brasiliensis) pilihan dari perkebunan terseleksi. Proses vulkanisasi yang terkontrol menghasilkan lembaran karet dengan konsistensi ketebalan dan kekerasan yang presisi di setiap batch produksi.</p>
                                <p>Karet alam memiliki sifat elastisitas dan ketahanan benturan yang unggul dibandingkan karet sintetis, menjadikannya pilihan utama untuk aplikasi yang memerlukan penyerapan energi tinggi, seperti bantalan mesin, alas conveyor, dan peredam getar industri.</p>
                                <h6 style="font-family:var(--font-display); margin-top:24px;">Keunggulan Produk:</h6>
                                <ul style="color:var(--color-muted); font-size:14px; line-height:2;">
                                    <li>Elastisitas tinggi — elongasi hingga 600%</li>
                                    <li>Ketahanan benturan dan abrasi yang sangat baik</li>
                                    <li>Permukaan halus dan rata untuk pemasangan presisi</li>
                                    <li>Tersedia dalam warna hitam dan natural (krem)</li>
                                    <li>Dapat dipotong dan difabrikasi sesuai dimensi kebutuhan</li>
                                    <li><em>Bebas kandungan berbahaya, ramah lingkungan</em></li>
                                </ul>
                            </div>

                            {{-- Spesifikasi Teknis --}}
                            <div class="tab-pane-custom" id="tab-cara" style="display:none;">
                                <h5 style="font-family:var(--font-display);">Spesifikasi Teknis</h5>
                                <div class="row g-3 mt-2">
                                    @php
                                    $specs = [
                                        ['icon'=>'bi-thermometer-sun',  'title'=>'Suhu Kerja',       'desc'=>'Beroperasi optimal pada suhu -40°C hingga +70°C. Tidak direkomendasikan untuk paparan ozon atau minyak mineral langsung.'],
                                        ['icon'=>'bi-bar-chart-line',   'title'=>'Kekerasan',        'desc'=>'Tersedia dalam Shore A 40 (lunak) hingga 80 (keras). Pemilihan kekerasan disesuaikan dengan kebutuhan aplikasi.'],
                                        ['icon'=>'bi-layers',           'title'=>'Ketebalan',        'desc'=>'Tersedia dari 1 mm hingga 50 mm. Ketebalan custom dapat diproduksi dengan minimum order tertentu.'],
                                    ];
                                    @endphp
                                    @foreach($specs as $s)
                                    <div class="col-md-4">
                                        <div style="background:var(--color-bg); border-radius:var(--radius-md); padding:20px; text-align:center;">
                                            <i class="bi {{ $s['icon'] }}" style="font-size:2rem; color:var(--color-primary); margin-bottom:12px; display:block;"></i>
                                            <h6 style="font-family:var(--font-display);">{{ $s['title'] }}</h6>
                                            <p style="font-size:13px; color:var(--color-muted); margin:0;">{{ $s['desc'] }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Ulasan --}}
                            <div class="tab-pane-custom" id="tab-ulasan" style="display:none;">
                                <div class="review-summary">
                                    <div class="review-score">5.0</div>
                                    <div>
                                        <div class="d-flex gap-1 mb-2">
                                            @for($i=0; $i<5; $i++)
                                            <i class="bi bi-star-fill" style="color:#f0a500; font-size:18px;"></i>
                                            @endfor
                                        </div>
                                        <div style="font-size:13px; color:var(--color-muted);">Dari 84 ulasan pelanggan</div>
                                    </div>
                                </div>

                                @php
                                $reviews = [
                                    ['name'=>'Budi S.', 'rating'=>5, 'date'=>'3 hari lalu', 'text'=>'Kualitas sheet-nya konsisten, ketebalan seragam dan tidak ada cacat permukaan. Cocok banget untuk alas mesin di pabrik kami. Pasti order lagi!'],
                                    ['name'=>'Hendra W.', 'rating'=>5, 'date'=>'2 minggu lalu', 'text'=>'Sudah pakai produk ini untuk isolasi getaran conveyor selama 6 bulan, performa sangat memuaskan. Pengiriman cepat dan packaging aman.'],
                                    ['name'=>'PT. Maju Jaya', 'rating'=>5, 'date'=>'1 bulan lalu', 'text'=>'Kami order rutin setiap bulan. Kualitas terjaga, pelayanan responsif, dan tim teknis siap membantu konsultasi kebutuhan kami.'],
                                ];
                                @endphp
                                <div class="reviews-list mt-4">
                                    @foreach($reviews as $r)
                                    <div class="review-item">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <div>
                                                <strong style="font-size:14px;">{{ $r['name'] }}</strong>
                                                <div class="d-flex gap-1 mt-1">
                                                    @for($i=0; $i<$r['rating']; $i++)
                                                    <i class="bi bi-star-fill" style="color:#f0a500; font-size:11px;"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                            <span style="font-size:12px; color:var(--color-muted);">{{ $r['date'] }}</span>
                                        </div>
                                        <p style="font-size:14px; color:var(--color-text); margin:0; line-height:1.7;">{{ $r['text'] }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===== RELATED PRODUCTS ===== --}}
    <section class="section-padding bg-light-warm">
        <div class="container">

            <div class="d-flex align-items-end justify-content-between mb-5 flex-wrap gap-3">
                <div class="fade-up">
                    <span class="section-label">Lainnya</span>
                    <h2 class="section-title mb-0">Produk Terkait</h2>
                    <div class="divider-elegant"></div>
                </div>
                <a href="{{ url('/produk') }}" class="btn-outline-custom fade-up">
                    Semua Produk <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            @php
            $related = [
                ['id'=>2,'slug'=>'rubber-sheet-sbr','name'=>'SBR Rubber Sheet','category'=>'Rubber Sheet','short_desc'=>'Lembaran karet SBR tahan abrasi dan ozon, berbagai ketebalan untuk konstruksi.','image'=>'https://images.unsplash.com/photo-1581091012184-7c3b12cd6b0f?w=400&q=80','badge'=>'Best'],
                ['id'=>5,'slug'=>'o-ring-epdm','name'=>'O-Ring EPDM','category'=>'Seal & Gasket','short_desc'=>'O-Ring EPDM premium tahan cuaca ekstrem dan bahan kimia, tersedia ratusan ukuran standar.','image'=>'https://images.unsplash.com/photo-1567789884554-0b844b597180?w=400&q=80'],
                ['id'=>10,'slug'=>'anti-vibration-mount','name'=>'Anti-Vibration Mount','category'=>'Industri Khusus','short_desc'=>'Dudukan peredam getar karet-logam untuk mesin industri berat.','image'=>'https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?w=400&q=80','badge'=>'New'],
                ['id'=>6,'slug'=>'gasket-karet-neoprene','name'=>'Gasket Karet Neoprene','category'=>'Seal & Gasket','short_desc'=>'Gasket karet neoprene presisi tinggi untuk sambungan pipa dan mesin.','image'=>'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=400&q=80'],
            ];
            @endphp

            <div class="row g-4">
                @foreach($related as $i => $product)
                <div class="col-lg-3 col-md-6 fade-up" style="transition-delay: {{ $i * 0.1 }}s;">
                    @include('components.product-card', ['product' => $product])
                </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection

@push('styles')
<style>
    .page-header-mini {
        background: var(--color-bg);
        padding: 18px 0;
        border-bottom: 1px solid var(--color-border);
    }

    /* Gallery */
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
        transition: transform 0.4s ease;
    }
    .gallery-main:hover img { transform: scale(1.03); }
    .gallery-badge {
        position: absolute; top: 16px; left: 16px;
        background: var(--color-primary); color: white;
        font-size: 11px; font-weight: 600; letter-spacing: 1.5px;
        text-transform: uppercase; padding: 5px 14px; border-radius: 50px;
    }

    .gallery-thumbs { display: flex; gap: 8px; }
    .gallery-thumb {
        flex: 1;
        height: 80px;
        border-radius: var(--radius-sm);
        overflow: hidden;
        cursor: pointer;
        border: 2px solid transparent;
        transition: var(--transition);
    }
    .gallery-thumb img { width: 100%; height: 100%; object-fit: cover; }
    .gallery-thumb:hover,
    .gallery-thumb.active { border-color: var(--color-primary); }

    /* Product Info */
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
    .product-rating { display: flex; align-items: center; margin-bottom: 16px; }
    .product-detail-desc {
        font-size: 14px; color: var(--color-muted);
        line-height: 1.85; margin-bottom: 20px;
    }

    /* Spec Table */
    .product-spec-table { margin-bottom: 24px; }
    .spec-row {
        display: flex; gap: 12px; padding: 10px 0;
        border-bottom: 1px solid var(--color-border); font-size: 14px;
    }
    .spec-row:last-child { border-bottom: none; }
    .spec-label { font-weight: 600; color: var(--color-dark); width: 110px; flex-shrink: 0; }
    .spec-value { color: var(--color-muted); }

    /* Variant Pills */
    .variant-pills { display: flex; gap: 8px; flex-wrap: wrap; }
    .variant-pill {
        padding: 7px 16px;
        border: 1.5px solid var(--color-border);
        border-radius: 50px; background: white;
        font-size: 13px; font-weight: 500; cursor: pointer;
        transition: var(--transition); color: var(--color-text);
    }
    .variant-pill:hover,
    .variant-pill.active {
        border-color: var(--color-primary);
        color: var(--color-primary);
        background: var(--color-primary-light);
    }

    /* Actions */
    .product-actions {
        display: flex; gap: 10px; margin-bottom: 20px;
    }

    /* Notes */
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
    .tab-btn:hover { color: var(--color-primary); }
    .tab-btn.active { color: var(--color-primary); border-bottom-color: var(--color-primary); }
    .tab-content-custom { padding: 32px; }
    .tab-content-custom p { font-size: 14px; color: var(--color-muted); line-height: 1.85; }

    /* Reviews */
    .review-summary { display: flex; align-items: center; gap: 20px; margin-bottom: 8px; }
    .review-score { font-family: var(--font-display); font-size: 3.5rem; font-weight: 600; color: var(--color-dark); }
    .review-item {
        padding: 18px 0;
        border-bottom: 1px solid var(--color-border);
    }
    .review-item:last-child { border-bottom: none; }

    @media (max-width: 991px) {
        .product-gallery { position: static; }
        .gallery-main { height: 320px; }
    }
</style>
@endpush

@push('scripts')
<script>
    // Gallery image switcher
    function changeImg(src, el) {
        document.getElementById('mainImg').src = src.replace('200', '700');
        document.querySelectorAll('.gallery-thumb').forEach(t => t.classList.remove('active'));
        el.classList.add('active');
    }

    // Variant pills
    document.querySelectorAll('.variant-pill').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.variant-pill').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Tabs
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const target = this.getAttribute('data-tab');
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.tab-pane-custom').forEach(p => p.style.display = 'none');
            this.classList.add('active');
            document.getElementById('tab-' + target).style.display = 'block';
        });
    });
</script>
@endpush
ENDOFFILE