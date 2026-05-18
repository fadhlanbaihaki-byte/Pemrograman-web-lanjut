\cat > /home/claude/projek/pages/produk.blade.php << 'ENDOFFILE'
@extends('layouts.app')
@section('title', 'Produk - Karet Nusantara')
@section('content')

    {{-- ===== PAGE HEADER ===== --}}
    <section class="page-header">
        <div class="container text-center">
            <span class="section-label fade-up" style="display:block;"></span>
            <h1 class="page-header-title fade-up">Produk Kami</h1>
            <nav aria-label="breadcrumb" class="fade-up">
                <ol class="breadcrumb justify-content-center" style="font-size:13px;">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" style="color:var(--color-primary);">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color:var(--color-muted);">Produk</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">

            {{-- ===== SEARCH & FILTER ===== --}}
            <div class="row align-items-center g-3 mb-5 fade-up">

                {{-- Search Bar --}}
                <div class="col-lg-5">
                    <div class="search-wrap">
                        <i class="bi bi-search search-icon"></i>
                        <input type="text" id="searchInput" class="search-input"
                               placeholder="Cari produk... (contoh: rubber sheet, gloves, dll)">
                    </div>
                </div>

                {{-- Filter Kategori --}}
                <div class="col-lg-7">
                    <div class="filter-pills" id="filterPills">
                        <button class="filter-pill active" data-filter="all">Semua</button>
                        <button class="filter-pill" data-filter="sheet">Rubber Sheet</button>
                        <button class="filter-pill" data-filter="selang">Selang & Pipa</button>
                        <button class="filter-pill" data-filter="seal">Seal & Gasket</button>
                        <button class="filter-pill" data-filter="sarung">Sarung Tangan</button>
                        <button class="filter-pill" data-filter="ban">Ban & Solid Tyre</button>
                        <button class="filter-pill" data-filter="industri">Industri Khusus</button>
                    </div>
                </div>

            </div>

            {{-- ===== PRODUCT GRID ===== --}}
            @php
            $allProducts = [
                ['id'=>1,  'slug'=>'rubber-sheet-alam',          'name'=>'Natural Rubber Sheet',          'category'=>'Rubber Sheet',    'cat_key'=>'sheet',   'short_desc'=>'Lembaran karet alam murni dengan ketebalan seragam, cocok untuk alas industri dan isolasi getaran.',         'image'=>'https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=400&q=80', 'badge'=>'Best'],
                ['id'=>2,  'slug'=>'rubber-sheet-sbr',           'name'=>'SBR Rubber Sheet',              'category'=>'Rubber Sheet',    'cat_key'=>'sheet',   'short_desc'=>'Lembaran karet SBR tahan abrasi dan ozon, tersedia berbagai ketebalan untuk kebutuhan konstruksi.',          'image'=>'https://images.unsplash.com/photo-1581091012184-7c3b12cd6b0f?w=400&q=80', 'badge'=>'Best'],
                ['id'=>3,  'slug'=>'selang-industri',            'name'=>'Selang Industri Karet',         'category'=>'Selang & Pipa',   'cat_key'=>'selang',  'short_desc'=>'Selang karet industri bertekanan tinggi, tahan minyak dan bahan kimia, diameter bervariasi.',              'image'=>'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&q=80', 'badge'=>'New'],
                ['id'=>4,  'slug'=>'pipa-karet-fleksibel',       'name'=>'Pipa Karet Fleksibel',          'category'=>'Selang & Pipa',   'cat_key'=>'selang',  'short_desc'=>'Pipa karet fleksibel tahan suhu tinggi, ideal untuk sistem pemipaan mesin dan kendaraan berat.',             'image'=>'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=400&q=80'],
                ['id'=>5,  'slug'=>'o-ring-epdm',                'name'=>'O-Ring EPDM',                   'category'=>'Seal & Gasket',   'cat_key'=>'seal',    'short_desc'=>'O-Ring EPDM premium tahan cuaca ekstrem dan bahan kimia, tersedia dalam ratusan ukuran standar.',            'image'=>'https://images.unsplash.com/photo-1567789884554-0b844b597180?w=400&q=80'],
                ['id'=>6,  'slug'=>'gasket-karet-neoprene',      'name'=>'Gasket Karet Neoprene',         'category'=>'Seal & Gasket',   'cat_key'=>'seal',    'short_desc'=>'Gasket karet neoprene presisi tinggi untuk sambungan pipa dan mesin, tahan minyak dan tekanan.',            'image'=>'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=400&q=80'],
                ['id'=>7,  'slug'=>'sarung-tangan-nitril',       'name'=>'Sarung Tangan Nitril',          'category'=>'Sarung Tangan',   'cat_key'=>'sarung',  'short_desc'=>'Sarung tangan nitril bebas lateks, tahan bahan kimia dan minyak, tersedia berbagai ukuran.',               'image'=>'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400&q=80', 'badge'=>'New'],
                ['id'=>8,  'slug'=>'sarung-tangan-latex',        'name'=>'Sarung Tangan Latex Industri',  'category'=>'Sarung Tangan',   'cat_key'=>'sarung',  'short_desc'=>'Sarung tangan latex tebal untuk industri berat, permukaan bertekstur untuk daya cengkeram optimal.',         'image'=>'https://images.unsplash.com/photo-1609220136736-443140cffec6?w=400&q=80'],
                ['id'=>9,  'slug'=>'ban-padat-forklift',         'name'=>'Ban Padat Forklift',            'category'=>'Ban & Solid Tyre', 'cat_key'=>'ban',    'short_desc'=>'Ban padat karet untuk forklift, tahan beban berat dan tidak memerlukan pengisian udara.',               'image'=>'https://images.unsplash.com/photo-1570733577524-3a047079e80d?w=400&q=80'],
                ['id'=>10, 'slug'=>'anti-vibration-mount',       'name'=>'Anti-Vibration Mount',          'category'=>'Industri Khusus', 'cat_key'=>'industri','short_desc'=>'Dudukan peredam getar karet-logam untuk mesin industri, mengurangi kebisingan dan perpanjang usia mesin.',   'image'=>'https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?w=400&q=80', 'badge'=>'New'],
                ['id'=>11, 'slug'=>'karet-bumper-dok',           'name'=>'Karet Bumper Dok',              'category'=>'Industri Khusus', 'cat_key'=>'industri','short_desc'=>'Bumper karet untuk dermaga dan dok pelabuhan, meredam benturan kapal, tahan air laut dan UV.',              'image'=>'https://images.unsplash.com/photo-1508739773434-c26b3d09e071?w=400&q=80'],
                ['id'=>12, 'slug'=>'rubber-expansion-joint',     'name'=>'Rubber Expansion Joint',        'category'=>'Seal & Gasket',   'cat_key'=>'seal',    'short_desc'=>'Expansion joint karet untuk kompensasi ekspansi termal pada sistem perpipaan industri besar.',             'image'=>'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400&q=80'],
            ];
            @endphp

            {{-- Product Count --}}
            <div class="d-flex justify-content-between align-items-center mb-4 fade-up">
                <p style="font-size:13px; color:var(--color-muted); margin:0;">
                    Menampilkan <span id="productCount" style="font-weight:600; color:var(--color-dark);">{{ count($allProducts) }}</span> produk
                </p>
                <select class="sort-select" id="sortSelect">
                    <option value="default">Urutkan: Default</option>
                    <option value="name">Nama A-Z</option>
                </select>
            </div>

            {{-- Grid --}}
            <div class="row g-4" id="productGrid">
                @foreach($allProducts as $i => $product)
                <div class="col-lg-3 col-md-4 col-sm-6 product-item fade-up"
                     data-category="{{ $product['cat_key'] }}"
                     data-name="{{ strtolower($product['name']) }}"
                     style="transition-delay: {{ ($i % 4) * 0.08 }}s;">
                    @include('components.product-card', ['product' => $product])
                </div>
                @endforeach
            </div>

            {{-- No Results Message --}}
            <div id="noResults" class="text-center py-5" style="display:none;">
                <i class="bi bi-search" style="font-size:3rem; color:var(--color-border);"></i>
                <h5 style="font-family:var(--font-display); margin-top:16px; color:var(--color-muted);">Produk tidak ditemukan</h5>
                <p style="font-size:14px; color:var(--color-muted);">Coba kata kunci lain atau reset filter</p>
                <button onclick="resetFilter()" class="btn-outline-custom mt-2">Reset Filter</button>
            </div>

            {{-- ===== PAGINATION ===== --}}
            <div class="pagination-wrap fade-up mt-5" id="paginationWrap">
                <nav aria-label="Pagination">
                    <ul class="pagination-custom">
                        <li>
                            <button class="page-btn prev-btn" disabled>
                                <i class="bi bi-chevron-left"></i>
                            </button>
                        </li>
                        <li><button class="page-btn active">1</button></li>
                        <li><button class="page-btn">2</button></li>
                        <li><button class="page-btn">3</button></li>
                        <li>
                            <button class="page-btn next-btn">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </section>

@endsection

@push('styles')
<style>
    .page-header {
        background: linear-gradient(135deg, #fdf8f4 0%, #f5ede3 100%);
        padding: 60px 0 50px;
        border-bottom: 1px solid var(--color-border);
    }
    .page-header-title {
        font-family: var(--font-display);
        font-size: clamp(2rem, 4vw, 3rem);
        margin-bottom: 12px;
    }

    /* Search */
    .search-wrap {
        position: relative;
    }
    .search-icon {
        position: absolute;
        left: 16px; top: 50%;
        transform: translateY(-50%);
        color: var(--color-muted);
        font-size: 15px;
    }
    .search-input {
        width: 100%;
        padding: 12px 16px 12px 44px;
        border: 1.5px solid var(--color-border);
        border-radius: 50px;
        font-family: var(--font-body);
        font-size: 14px;
        background: white;
        color: var(--color-text);
        transition: var(--transition);
        outline: none;
    }
    .search-input:focus {
        border-color: var(--color-primary);
        box-shadow: 0 0 0 3px rgba(200, 149, 108, 0.12);
    }

    /* Filter Pills */
    .filter-pills {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }
    .filter-pill {
        padding: 8px 18px;
        border: 1.5px solid var(--color-border);
        border-radius: 50px;
        background: white;
        font-family: var(--font-body);
        font-size: 13px;
        font-weight: 500;
        color: var(--color-text);
        cursor: pointer;
        transition: var(--transition);
    }
    .filter-pill:hover,
    .filter-pill.active {
        background: var(--color-primary);
        border-color: var(--color-primary);
        color: white;
    }

    /* Sort Select */
    .sort-select {
        padding: 8px 14px;
        border: 1.5px solid var(--color-border);
        border-radius: 50px;
        font-family: var(--font-body);
        font-size: 13px;
        color: var(--color-text);
        background: white;
        cursor: pointer;
        outline: none;
        transition: var(--transition);
    }
    .sort-select:focus { border-color: var(--color-primary); }

    /* Pagination */
    .pagination-wrap { display: flex; justify-content: center; }
    .pagination-custom {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 6px;
        align-items: center;
    }
    .page-btn {
        width: 40px; height: 40px;
        border: 1.5px solid var(--color-border);
        border-radius: 50%;
        background: white;
        font-family: var(--font-body);
        font-size: 14px;
        font-weight: 500;
        color: var(--color-text);
        cursor: pointer;
        transition: var(--transition);
        display: flex; align-items: center; justify-content: center;
    }
    .page-btn:hover:not(:disabled) {
        border-color: var(--color-primary);
        color: var(--color-primary);
    }
    .page-btn.active {
        background: var(--color-primary);
        border-color: var(--color-primary);
        color: white;
    }
    .page-btn:disabled { opacity: 0.4; cursor: not-allowed; }

    /* Product hidden state */
    .product-item.hidden { display: none !important; }
</style>
@endpush

@push('scripts')
<script>
    // === SEARCH & FILTER FUNCTIONALITY ===
    const searchInput  = document.getElementById('searchInput');
    const filterPills  = document.querySelectorAll('.filter-pill');
    const productItems = document.querySelectorAll('.product-item');
    const noResults    = document.getElementById('noResults');
    const productCount = document.getElementById('productCount');

    let activeFilter = 'all';

    function filterProducts() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        productItems.forEach(item => {
            const name = item.getAttribute('data-name');
            const cat  = item.getAttribute('data-category');

            const matchesSearch = query === '' || name.includes(query);
            const matchesFilter = activeFilter === 'all' || cat === activeFilter;

            if (matchesSearch && matchesFilter) {
                item.classList.remove('hidden');
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });

        productCount.textContent = visibleCount;
        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
        document.getElementById('paginationWrap').style.display = visibleCount === 0 ? 'none' : 'flex';
    }

    // Filter pill click
    filterPills.forEach(pill => {
        pill.addEventListener('click', () => {
            filterPills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');
            activeFilter = pill.getAttribute('data-filter');
            filterProducts();
        });
    });

    // Search input
    searchInput.addEventListener('input', filterProducts);

    // Reset function
    function resetFilter() {
        searchInput.value = '';
        activeFilter = 'all';
        filterPills.forEach(p => p.classList.remove('active'));
        document.querySelector('[data-filter="all"]').classList.add('active');
        filterProducts();
    }
</script>
@endpush
ENDOFFILE