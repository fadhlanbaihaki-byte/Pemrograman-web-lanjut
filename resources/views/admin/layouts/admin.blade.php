<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') — Indo Gummi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --admin-primary:   #2f5d50;
            --admin-primary-d: #23463c;
            --admin-primary-l: #e8f0ed;
            --admin-sidebar:   #1a1a2e;
            --admin-sidebar-h: #16213e;
            --admin-accent:    #4ecca3;
            --admin-text:      #e8e8f0;
            --admin-muted:     #9898b0;
            --admin-border:    #2a2a45;
            --admin-card:      #ffffff;
            --admin-bg:        #f0f4f2;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--admin-bg);
            display: flex;
            min-height: 100vh;
            font-size: 14px;
        }

        /* ============ SIDEBAR ============ */
        .admin-sidebar {
            width: 260px;
            min-height: 100vh;
            background: var(--admin-sidebar);
            display: flex;
            flex-direction: column;
            position: fixed;
            left: 0; top: 0;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        .sidebar-brand {
            padding: 24px 20px;
            border-bottom: 1px solid var(--admin-border);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-brand .brand-icon {
            width: 40px; height: 40px;
            background: linear-gradient(135deg, var(--admin-primary), var(--admin-accent));
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            color: #fff; font-size: 18px;
            flex-shrink: 0;
        }

        .sidebar-brand .brand-name {
            font-weight: 700;
            font-size: 15px;
            color: #fff;
            line-height: 1.2;
        }

        .sidebar-brand .brand-role {
            font-size: 10px;
            color: var(--admin-accent);
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .sidebar-nav {
            flex: 1;
            padding: 16px 0;
            overflow-y: auto;
        }

        .sidebar-section {
            padding: 8px 20px 4px;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--admin-muted);
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 20px;
            color: var(--admin-text);
            text-decoration: none;
            border-radius: 0;
            transition: all 0.2s ease;
            font-size: 13.5px;
            font-weight: 400;
            position: relative;
        }

        .sidebar-link i {
            font-size: 16px;
            width: 20px;
            text-align: center;
            opacity: 0.75;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,0.06);
            color: #fff;
        }

        .sidebar-link:hover i { opacity: 1; }

        .sidebar-link.active {
            background: linear-gradient(90deg, rgba(78,204,163,0.15), rgba(78,204,163,0.05));
            color: var(--admin-accent);
            font-weight: 500;
        }

        .sidebar-link.active::before {
            content: '';
            position: absolute;
            left: 0; top: 0; bottom: 0;
            width: 3px;
            background: var(--admin-accent);
            border-radius: 0 2px 2px 0;
        }

        .sidebar-link.active i { opacity: 1; }

        .sidebar-footer {
            padding: 16px 20px;
            border-top: 1px solid var(--admin-border);
        }

        .sidebar-user {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .sidebar-user .user-avatar {
            width: 34px; height: 34px;
            background: var(--admin-primary);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: #fff; font-size: 13px; font-weight: 600;
            flex-shrink: 0;
        }

        .sidebar-user .user-name {
            font-size: 13px;
            font-weight: 500;
            color: #fff;
        }

        .sidebar-user .user-email {
            font-size: 11px;
            color: var(--admin-muted);
        }

        .btn-logout {
            width: 100%;
            background: rgba(255,255,255,0.06);
            border: 1px solid var(--admin-border);
            color: var(--admin-muted);
            padding: 8px;
            border-radius: 8px;
            font-size: 12.5px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
        }

        .btn-logout:hover {
            background: rgba(220,53,69,0.15);
            border-color: rgba(220,53,69,0.3);
            color: #f87171;
        }

        /* ============ MAIN CONTENT ============ */
        .admin-main {
            margin-left: 260px;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ============ TOPBAR ============ */
        .admin-topbar {
            background: #fff;
            padding: 14px 28px;
            border-bottom: 1px solid #e5e9e7;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 900;
            box-shadow: 0 1px 6px rgba(0,0,0,0.04);
        }

        .topbar-title {
            font-size: 16px;
            font-weight: 600;
            color: #1a1a2e;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .topbar-title .breadcrumb-sep {
            color: #ccc;
            font-weight: 300;
        }

        .topbar-title .breadcrumb-current {
            color: var(--admin-primary);
        }

        .topbar-badge {
            background: var(--admin-primary-l);
            color: var(--admin-primary);
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        /* ============ PAGE CONTENT ============ */
        .admin-content {
            padding: 28px;
            flex: 1;
        }

        /* ============ STAT CARDS ============ */
        .stat-card {
            background: #fff;
            border-radius: 14px;
            padding: 22px;
            border: 1px solid #e8edeb;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            transition: all 0.25s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 80px; height: 80px;
            border-radius: 0 0 0 80px;
            opacity: 0.06;
        }

        .stat-card.green::after  { background: var(--admin-primary); }
        .stat-card.blue::after   { background: #3b82f6; }
        .stat-card.orange::after { background: #f59e0b; }
        .stat-card.red::after    { background: #ef4444; }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        }

        .stat-icon {
            width: 44px; height: 44px;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px;
            margin-bottom: 14px;
        }

        .stat-icon.green  { background: #dcf0ea; color: var(--admin-primary); }
        .stat-icon.blue   { background: #dbeafe; color: #3b82f6; }
        .stat-icon.orange { background: #fef3c7; color: #d97706; }
        .stat-icon.red    { background: #fee2e2; color: #dc2626; }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a2e;
            line-height: 1;
        }

        .stat-label {
            font-size: 12px;
            color: #8a9a94;
            margin-top: 4px;
            font-weight: 500;
        }

        /* ============ TABLE CARD ============ */
        .table-card {
            background: #fff;
            border-radius: 14px;
            border: 1px solid #e8edeb;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            overflow: hidden;
        }

        .table-card-header {
            padding: 18px 22px;
            border-bottom: 1px solid #f0f4f2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }

        .table-card-title {
            font-size: 15px;
            font-weight: 600;
            color: #1a1a2e;
        }

        .admin-table {
            width: 100%;
            border-collapse: collapse;
        }

        .admin-table thead th {
            background: #f8faf9;
            padding: 12px 16px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #8a9a94;
            border-bottom: 1px solid #e8edeb;
            white-space: nowrap;
        }

        .admin-table tbody td {
            padding: 14px 16px;
            border-bottom: 1px solid #f0f4f2;
            color: #3a4a44;
            vertical-align: middle;
        }

        .admin-table tbody tr:last-child td { border-bottom: none; }

        .admin-table tbody tr:hover td { background: #fafcfb; }

        /* ============ BADGES ============ */
        .badge-featured {
            background: #dcf0ea;
            color: var(--admin-primary);
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        .badge-category {
            background: #f0f4f2;
            color: #5a7a6e;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 11.5px;
            font-weight: 500;
        }

        /* ============ BUTTONS ============ */
        .btn-admin-primary {
            background: var(--admin-primary);
            color: #fff;
            border: none;
            padding: 9px 18px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-admin-primary:hover {
            background: var(--admin-primary-d);
            color: #fff;
            transform: translateY(-1px);
        }

        .btn-admin-sm {
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            cursor: pointer;
            text-decoration: none;
            border: none;
            transition: all 0.2s;
        }

        .btn-edit  { background: #dbeafe; color: #2563eb; }
        .btn-edit:hover  { background: #bfdbfe; color: #1d4ed8; }
        .btn-view  { background: #f0f4f2; color: var(--admin-primary); }
        .btn-view:hover  { background: #dcf0ea; }
        .btn-delete { background: #fee2e2; color: #dc2626; }
        .btn-delete:hover { background: #fecaca; color: #b91c1c; }

        /* ============ FORM CARD ============ */
        .form-card {
            background: #fff;
            border-radius: 14px;
            border: 1px solid #e8edeb;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 28px;
        }

        .form-label-admin {
            font-size: 12.5px;
            font-weight: 600;
            color: #4a5a54;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-control-admin {
            border: 1.5px solid #e0e8e4;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 13.5px;
            color: #1a1a2e;
            transition: all 0.2s;
            background: #fff;
        }

        .form-control-admin:focus {
            outline: none;
            border-color: var(--admin-primary);
            box-shadow: 0 0 0 3px rgba(47,93,80,0.1);
        }

        /* ============ IMAGE PREVIEW ============ */
        .img-preview {
            width: 100px; height: 100px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #e8edeb;
        }

        .product-thumb {
            width: 52px; height: 52px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #e8edeb;
        }

        .product-thumb-placeholder {
            width: 52px; height: 52px;
            border-radius: 8px;
            background: #f0f4f2;
            display: flex; align-items: center; justify-content: center;
            color: #b0c0ba;
            font-size: 20px;
        }

        /* ============ ALERTS ============ */
        .alert-admin {
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 13.5px;
            border: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .alert-success-admin {
            background: #dcf0ea;
            color: var(--admin-primary);
        }

        .alert-danger-admin {
            background: #fee2e2;
            color: #dc2626;
        }

        /* ============ SEARCH / FILTER BAR ============ */
        .filter-bar {
            background: #fff;
            border-radius: 12px;
            padding: 16px 20px;
            border: 1px solid #e8edeb;
            margin-bottom: 20px;
        }

        /* ============ RESPONSIVE ============ */
        @media (max-width: 991px) {
            .admin-sidebar {
                transform: translateX(-260px);
            }
            .admin-sidebar.open {
                transform: translateX(0);
            }
            .admin-main {
                margin-left: 0;
            }
            .sidebar-overlay {
                display: block !important;
            }
        }

        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.4);
            z-index: 999;
        }
    </style>

    @stack('styles')
</head>
<body>

{{-- Sidebar Overlay (mobile) --}}
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

{{-- ============ SIDEBAR ============ --}}
<aside class="admin-sidebar" id="adminSidebar">
    <div class="sidebar-brand">
        <div class="brand-icon">
            <i class="bi bi-hexagon-fill"></i>
        </div>
        <div>
            <div class="brand-name">Indo Gummi</div>
            <div class="brand-role">Admin Panel</div>
        </div>
    </div>

    <nav class="sidebar-nav">
        <div class="sidebar-section">Menu Utama</div>

        <a href="{{ route('admin.dashboard') }}"
           class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid-1x2-fill"></i>
            Dashboard
        </a>

        <div class="sidebar-section" style="margin-top:10px;">Manajemen</div>

        <a href="{{ route('admin.products.index') }}"
           class="sidebar-link {{ request()->routeIs('admin.products*') ? 'active' : '' }}">
            <i class="bi bi-box-seam-fill"></i>
            Produk
        </a>

        <div class="sidebar-section" style="margin-top:10px;">Lihat Website</div>

        <a href="{{ route('home') }}" target="_blank" class="sidebar-link">
            <i class="bi bi-globe2"></i>
            Halaman Publik
        </a>
    </nav>

    <div class="sidebar-footer">
        <div class="sidebar-user">
            <div class="user-avatar">{{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}</div>
            <div>
                <div class="user-name">{{ auth()->user()->name ?? 'Admin' }}</div>
                <div class="user-email">{{ auth()->user()->email ?? '' }}</div>
            </div>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn-logout">
                <i class="bi bi-box-arrow-left"></i>
                Keluar
            </button>
        </form>
    </div>
</aside>

{{-- ============ MAIN ============ --}}
<div class="admin-main">

    {{-- Topbar --}}
    <div class="admin-topbar">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-sm border-0 d-lg-none p-1" onclick="openSidebar()">
                <i class="bi bi-list fs-5"></i>
            </button>
            <div class="topbar-title">
                Admin
                <span class="breadcrumb-sep">/</span>
                <span class="breadcrumb-current">@yield('page-title', 'Dashboard')</span>
            </div>
        </div>
        <span class="topbar-badge">
            <i class="bi bi-shield-check me-1"></i>Administrator
        </span>
    </div>

    {{-- Content --}}
    <div class="admin-content">

        {{-- Flash Messages --}}
        @if(session('success'))
            <div class="alert-admin alert-success-admin mb-4">
                <i class="bi bi-check-circle-fill"></i>
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert-admin alert-danger-admin mb-4">
                <i class="bi bi-exclamation-circle-fill"></i>
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function openSidebar() {
        document.getElementById('adminSidebar').classList.add('open');
        document.getElementById('sidebarOverlay').style.display = 'block';
    }
    function closeSidebar() {
        document.getElementById('adminSidebar').classList.remove('open');
        document.getElementById('sidebarOverlay').style.display = 'none';
    }
</script>
@stack('scripts')
</body>
</html>
