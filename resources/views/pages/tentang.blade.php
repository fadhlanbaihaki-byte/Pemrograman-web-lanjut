{{-- ============================================
     PAGE: Tentang Kami
     File: resources/views/pages/tentang.blade.php
============================================ --}}

@extends('layouts.app')

@section('title', 'Tentang Kami - Indo Gummi')

@section('content')

    {{-- ===== PAGE HEADER ===== --}}
    <section class="page-header">
        <div class="container text-center">
            <span class="section-label fade-up" style="display:block;">Kenali Kami</span>
            <h1 class="page-header-title fade-up">Tentang Indo Gummi</h1>

            <nav aria-label="breadcrumb" class="fade-up">
                <ol class="breadcrumb justify-content-center" style="font-size:13px;">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" style="color:var(--color-primary);">
                            Beranda
                        </a>
                    </li>

                    <li class="breadcrumb-item active"
                        aria-current="page"
                        style="color:var(--color-muted);">
                        Tentang Kami
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    {{-- ===== PROFIL PERUSAHAAN ===== --}}
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center g-5">

                {{-- Image --}}
                <div class="col-lg-6 fade-up">
                    <div class="about-img-wrap">

                        <div class="about-img-main">
                            <img
                                src="https://images.unsplash.com/photo-1565043589221-1a6fd9ae45c7?w=700&q=80"
                                alt="Pabrik Indo Gummi"
                                class="rounded-4 shadow"
                            >
                        </div>

                        <div class="about-img-badge">
                            <div class="badge-icon">
                                <i class="bi bi-building-fill"></i>
                            </div>

                            <div>
                                <div class="badge-number">Est. 2015</div>
                                <div class="badge-text">Berpengalaman di Industri</div>
                            </div>
                        </div>

                        <div class="about-img-float">
                            <i class="bi bi-award-fill"
                               style="color:var(--color-primary); font-size:20px;"></i>

                            <div>
                                <div style="font-weight:600; font-size:13px;">
                                    Terpercaya
                                </div>

                                <div style="font-size:11px; color:var(--color-muted);">
                                    Mitra Industri Nasional
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Content --}}
                <div class="col-lg-6 fade-up">

                    <span class="section-label">Siapa Kami</span>

                    <h2 class="section-title">
                        Industri Produk Karet<br>
                        Berkualitas Tinggi
                    </h2>

                    <div class="divider-elegant"></div>

                    <p style="font-size:15px; color:var(--color-muted); line-height:1.9; margin-bottom:20px;">
                        Indo Gummi adalah perusahaan manufaktur produk karet yang
                        bergerak di bidang produksi dan distribusi berbagai kebutuhan
                        industri seperti gasket, seal, rubber sheet, dan komponen karet lainnya.
                    </p>

                    <p style="font-size:15px; color:var(--color-muted); line-height:1.9; margin-bottom:32px;">
                        Dengan dukungan teknologi modern dan tenaga profesional,
                        kami berkomitmen menghadirkan produk berkualitas tinggi
                        yang memenuhi standar industri nasional maupun internasional.
                    </p>

                    {{-- Stats --}}
                    <div class="row g-3 mb-4">

                        @php
                        $stats = [
                            ['number'=>'100+', 'label'=>'Mitra Industri'],
                            ['number'=>'50+',  'label'=>'Produk Karet'],
                            ['number'=>'9 Th', 'label'=>'Pengalaman'],
                            ['number'=>'100%', 'label'=>'Kualitas Teruji'],
                        ];
                        @endphp

                        @foreach($stats as $stat)
                        <div class="col-6">

                            <div style="
                                background:var(--color-primary-light);
                                border-radius:var(--radius-md);
                                padding:16px 20px;
                            ">

                                <div style="
                                    font-family:var(--font-display);
                                    font-size:1.6rem;
                                    font-weight:600;
                                    color:var(--color-primary);
                                ">
                                    {{ $stat['number'] }}
                                </div>

                                <div style="
                                    font-size:12px;
                                    color:var(--color-muted);
                                ">
                                    {{ $stat['label'] }}
                                </div>

                            </div>

                        </div>
                        @endforeach

                    </div>

                    <a href="{{ url('/kontak') }}" class="btn-primary-custom">
                        <i class="bi bi-telephone-fill"></i>
                        Hubungi Kami
                    </a>

                </div>

            </div>
        </div>
    </section>


    {{-- ===== TIMELINE ===== --}}
    <section class="section-padding">
        <div class="container">

            <div class="text-center mb-5 fade-up">
                <span class="section-label">Perjalanan Kami</span>
                <h2 class="section-title">Sejarah Indo Gummi</h2>
                <div class="divider-elegant centered"></div>
            </div>

            @php
            $timeline = [
                [
                    'year'=>'2015',
                    'title'=>'Perusahaan Berdiri',
                    'desc'=>'Indo Gummi didirikan sebagai usaha produksi komponen karet untuk kebutuhan industri lokal.'
                ],

                [
                    'year'=>'2017',
                    'title'=>'Ekspansi Produksi',
                    'desc'=>'Menambah kapasitas produksi dan mulai melayani berbagai sektor manufaktur.'
                ],

                [
                    'year'=>'2019',
                    'title'=>'Teknologi Modern',
                    'desc'=>'Mengadopsi mesin produksi modern untuk meningkatkan kualitas dan efisiensi.'
                ],

                [
                    'year'=>'2021',
                    'title'=>'Distribusi Nasional',
                    'desc'=>'Memperluas jaringan distribusi ke berbagai kota besar di Indonesia.'
                ],

                [
                    'year'=>'2023',
                    'title'=>'Produk Industri Baru',
                    'desc'=>'Mengembangkan produk gasket, seal, dan rubber roll berkualitas premium.'
                ],

                [
                    'year'=>'2024',
                    'title'=>'Mitra Industri Terpercaya',
                    'desc'=>'Dipercaya oleh banyak perusahaan sebagai supplier produk karet industri.'
                ],
            ];
            @endphp

            <div class="timeline">

                @foreach($timeline as $i => $item)

                <div class="timeline-item {{ $i % 2 === 0 ? 'left' : 'right' }} fade-up">

                    <div class="timeline-dot"></div>

                    <div class="timeline-card">

                        <div class="timeline-year">
                            {{ $item['year'] }}
                        </div>

                        <h5 class="timeline-title">
                            {{ $item['title'] }}
                        </h5>

                        <p class="timeline-desc">
                            {{ $item['desc'] }}
                        </p>

                    </div>

                </div>

                @endforeach

            </div>

        </div>
    </section>

@endsection