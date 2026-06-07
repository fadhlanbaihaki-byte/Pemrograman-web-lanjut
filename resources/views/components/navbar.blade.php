
<style>
    /* =============================================
       NAVBAR STYLES
    ============================================= */
    #mainNavbar {
        background: rgba(250, 250, 248, 0.92);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border-bottom: 1px solid transparent;
        padding: 18px 0;
        transition: all 0.35s ease;
        position: sticky;
        top: 0;
        z-index: 1050;
    }

    #mainNavbar.scrolled {
        padding: 12px 0;
        background: rgba(250, 250, 248, 0.97);
        border-bottom-color: var(--color-border);
        box-shadow: var(--shadow-sm);
    }

    .navbar-brand-custom {
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: var(--font-display);
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--color-dark) !important;
        letter-spacing: -0.3px;
    }

    .navbar-brand-custom .brand-icon {
        width: 38px;
        height: 38px;
        background: var(--color-primary);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 18px;
    }

    .navbar-brand-custom .brand-sub {
        font-family: var(--font-body);
        font-size: 10px;
        font-weight: 400;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--color-muted);
        display: block;
        line-height: 1;
        margin-top: 1px;
    }

    .nav-link-custom {
        font-family: var(--font-body);
        font-size: 14px;
        font-weight: 500;
        color: var(--color-text) !important;
        padding: 6px 14px !important;
        border-radius: 50px;
        transition: var(--transition);
        position: relative;
    }

    .nav-link-custom:hover,
    .nav-link-custom.active {
        color: var(--color-primary) !important;
        background: var(--color-primary-light);
    }

    .nav-cta {
        background: var(--color-primary);
        color: #fff !important;
        padding: 8px 20px !important;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: var(--transition);
        box-shadow: 0 3px 14px rgba(200, 149, 108, 0.3);
    }

    .nav-cta:hover {
        background: var(--color-primary-dark) !important;
        color: #fff !important;
        transform: translateY(-1px);
        box-shadow: 0 5px 18px rgba(200, 149, 108, 0.4);
    }

    .navbar-toggler {
        border: 1.5px solid var(--color-border);
        border-radius: var(--radius-sm);
        padding: 6px 10px;
    }

    .navbar-toggler:focus { box-shadow: none; }

    @media (max-width: 991px) {
        .navbar-collapse {
            background: var(--color-white);
            border-radius: var(--radius-md);
            padding: 16px;
            margin-top: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--color-border);
        }

        .nav-link-custom { padding: 10px 16px !important; }
        .nav-cta { margin-top: 8px; justify-content: center; }
    }
</style>

<nav class="navbar navbar-expand-lg" id="mainNavbar">
    <div class="container">

        {{-- Brand / Logo --}}
        <a class="navbar-brand-custom" href="{{ url('/') }}">
            <div class="brand-icon">
                <i class="bi bi-hexagon-fill"></i>
            </div>
            <div>
                <span>UD Indo Gummi</span>
                <span class="brand-sub">Mitra Karet Industri Anda</span>
            </div>
        </a>

        {{-- Toggle Button (Mobile) --}}
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-5" style="color: var(--color-dark);"></i>
        </button>

        {{-- Navigation Menu --}}
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-center gap-1">
                <li class="nav-item">
                    <a class="nav-link-custom {{ request()->is('/') ? 'active' : '' }}"
                       href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-custom {{ request()->is('tentang') ? 'active' : '' }}"
                       href="{{ url('/tentang') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-custom {{ request()->is('produk*') ? 'active' : '' }}"
                       href="{{ url('/produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-custom {{ request()->is('kontak') ? 'active' : '' }}"
                       href="{{ url('/kontak') }}">Kontak</a>
                </li>
                <li class="nav-item ms-2">
                    <a class="nav-cta" href="https://wa.me/0818427665" target="_blank">
                        <i class="bi bi-whatsapp"></i>
                        <span>Pesan Sekarang</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>