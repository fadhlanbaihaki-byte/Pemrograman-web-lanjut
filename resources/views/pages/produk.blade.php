@extends('layouts.app')
@section('title', 'Produk - Indo Gummi')
@section('content')

    {{-- ===== PAGE HEADER ===== --}}
    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-header-title fade-up">Produk Kami</h1>
            <nav aria-label="breadcrumb" class="fade-up">
                <ol class="breadcrumb justify-content-center" style="font-size:13px;">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" style="color:var(--color-primary);">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active" style="color:var(--color-muted);">Produk</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">

            {{-- ===== SEARCH & FILTER ===== --}}
            <form action="{{ route('produk') }}" method="GET" id="filterForm">
                <div class="row align-items-center g-3 mb-5 fade-up">

                    {{-- Search Bar --}}
                    <div class="col-lg-5">
                        <div class="search-wrap">
                            <i class="bi bi-search search-icon"></i>
                            <input type="text" name="search" id="searchInput"
                                   class="search-input"
                                   placeholder="Cari produk..."
                                   value="{{ request('search') }}">
                        </div>
                    </div>

                    {{-- Filter Kategori --}}
                    <div class="col-lg-7">
                        <div class="filter-pills">
                            <a href="{{ route('produk') }}"
                               class="filter-pill {{ !request('category_id') ? 'active' : '' }}">
                                Semua
                            </a>
                            @foreach($categories as $cat)
                                <a href="{{ route('produk', ['category_id' => $cat->id, 'search' => request('search')]) }}"
                                   class="filter-pill {{ request('category_id') == $cat->id ? 'active' : '' }}">
                                    {{ $cat->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </form>

            {{-- ===== PRODUCT COUNT ===== --}}
            <div class="d-flex justify-content-between align-items-center mb-4 fade-up">
                <p style="font-size:13px; color:var(--color-muted); margin:0;">
                    Menampilkan
                    <span style="font-weight:600; color:var(--color-dark);">
                        {{ $products->total() }}
                    </span> produk
                    @if(request('search'))
                        untuk "<strong>{{ request('search') }}</strong>"
                    @endif
                    @if(request('category_id'))
                        @php $activeCat = $categories->firstWhere('id', request('category_id')); @endphp
                        @if($activeCat)
                            dalam kategori <strong>{{ $activeCat->name }}</strong>
                        @endif
                    @endif
                </p>
                @if(request('search') || request('category_id'))
                    <a href="{{ route('produk') }}"
                       style="font-size:13px;color:var(--color-muted);text-decoration:none;">
                        <i class="bi bi-x-circle me-1"></i> Reset Filter
                    </a>
                @endif
            </div>

            {{-- ===== PRODUCT GRID ===== --}}
            @if($products->count() > 0)
                <div class="row g-4" id="productGrid">
                    @foreach($products as $i => $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 fade-up"
                             style="transition-delay: {{ ($i % 4) * 0.08 }}s;">
                            @include('components.product-card', ['product' => $product])
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <i class="bi bi-search" style="font-size:3rem; color:var(--color-border);"></i>
                    <h5 style="font-family:var(--font-display); margin-top:16px; color:var(--color-muted);">
                        Produk tidak ditemukan
                    </h5>
                    <p style="font-size:14px; color:var(--color-muted);">Coba kata kunci lain atau reset filter</p>
                    <a href="{{ route('produk') }}" class="btn-outline-custom mt-2">Reset Filter</a>
                </div>
            @endif

            {{-- ===== PAGINATION ===== --}}
            @if($products->hasPages())
                <div class="pagination-wrap fade-up mt-5">
                    {{ $products->withQueryString()->links('vendor.pagination.custom') }}
                </div>
            @endif

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
    .search-wrap { position: relative; }
    .search-icon {
        position: absolute; left: 16px; top: 50%;
        transform: translateY(-50%);
        color: var(--color-muted); font-size: 15px;
    }
    .search-input {
        width: 100%;
        padding: 12px 16px 12px 44px;
        border: 1.5px solid var(--color-border);
        border-radius: 50px;
        font-family: var(--font-body); font-size: 14px;
        background: white; color: var(--color-text);
        transition: var(--transition); outline: none;
    }
    .search-input:focus {
        border-color: var(--color-primary);
        box-shadow: 0 0 0 3px rgba(200, 149, 108, 0.12);
    }

    /* Filter Pills */
    .filter-pills { display: flex; gap: 8px; flex-wrap: wrap; }
    .filter-pill {
        padding: 8px 18px;
        border: 1.5px solid var(--color-border);
        border-radius: 50px; background: white;
        font-family: var(--font-body); font-size: 13px;
        font-weight: 500; color: var(--color-text);
        cursor: pointer; transition: var(--transition);
        text-decoration: none;
    }
    .filter-pill:hover,
    .filter-pill.active {
        background: var(--color-primary);
        border-color: var(--color-primary);
        color: white;
    }

    /* Pagination */
    .pagination-wrap { display: flex; justify-content: center; }
</style>
@endpush

@push('scripts')
<script>
    // Auto submit saat search dengan delay
    let searchTimer;
    document.getElementById('searchInput').addEventListener('input', function() {
        clearTimeout(searchTimer);
        searchTimer = setTimeout(() => {
            document.getElementById('filterForm').submit();
        }, 500);
    });
</script>
@endpush
