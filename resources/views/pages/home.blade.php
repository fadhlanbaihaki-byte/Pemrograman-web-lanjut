@extends('layouts.app')
@section('title', 'Indo Gummi - Industri Produk Karet Berkualitas')
@section('content')

    {{-- ===== HERO SECTION ===== --}}
    @include('components.hero')

    {{-- ===== KEUNGGULAN SECTION ===== --}}
    <section class="section-padding bg-light-warm">
        <div class="container">

            <div class="text-center mb-5 fade-up">
                <span class="section-label">Mengapa Memilih Kami</span>
                <h2 class="section-title">Keunggulan Indo Gummi</h2>
                <div class="divider-elegant centered"></div>

                <p class="section-subtitle mx-auto">
                    Indo Gummi menyediakan komponen karet industri berkualitas
                    dengan pengerjaan yang teliti dan hasil cetakan yang dapat diandalkan.
                </p>
            </div>

            {{-- Feature Cards --}}
            <div class="row g-4">

                @php
                $features = [

                    [
                        'icon' => 'bi-building-fill',
                        'color' => '#4e7d4e',
                        'title' => 'Produksi Mandiri',
                        'desc' => 'Dikerjakan langsung di bengkel produksi kami sendiri untuk memastikan setiap proses pembuatan terpantau dengan baik.'
                    ],

                    [
                        'icon' => 'bi-patch-check-fill',
                        'color' => '#198754',
                        'title' => 'Mutu Terjaga',
                        'desc' => 'Setiap komponen karet diperiksa secara manual satu per satu untuk memastikan kerapian hasil akhir sebelum dikirim ke pelanggan.'
                    ],

                    [
                        'icon' => 'bi-truck',
                        'color' => '#0d6efd',
                        'title' => 'Pengiriman Fleksibel',
                        'desc' => 'Kami siap mengirimkan pesanan tepat waktu menggunakan layanan ekspedisi andalan yang menjangkau lokasi wilayah Anda.'
                    ],

                    [
                        'icon' => 'bi-gear-fill',
                        'color' => '#dc3545',
                        'title' => 'Hasil Presisi & Rapi',
                        'desc' => 'Proses cetak menggunakan cetakan (molding) yang akurat untuk memastikan dimensi produk pas.'
                    ],

                    [
                        'icon' => 'bi-people-fill',
                        'color' => '#f0a500',
                        'title' => 'Pengalaman di Bidangnya',
                        'desc' => 'Berbekal pengalaman bertahun-tahun dalam mengolah material karet, kami memahami karakter bahan yang tepat untuk berbagai kebutuhan fungsional.'
                    ],

                    [
                        'icon' => 'bi-globe2',
                        'color' => '#6f42c1',
                        'title' => 'Mitra Terpercaya',
                        'desc' => 'Telah dipercaya oleh berbagai pelaku usaha lokal, bengkel bubut, dan sektor operasional bengkel sebagai penyedia komponen karet andalan.'
                    ],

                ];
                @endphp

                @foreach($features as $i => $feat)

                <div class="col-lg-4 col-md-6 fade-up"
                     style="transition-delay: {{ $i * 0.1 }}s;">

                    <div class="card-elegant p-4 h-100">

                        <div class="feat-icon-wrap mb-3"
                             style="
                                width:52px;
                                height:52px;
                                background:{{ $feat['color'] }}1a;
                                border-radius:14px;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                font-size:22px;
                                color:{{ $feat['color'] }};
                             ">

                            <i class="bi {{ $feat['icon'] }}"></i>

                        </div>

                        <h5 style="
                            font-family:var(--font-display);
                            font-size:1.15rem;
                            margin-bottom:10px;
                        ">
                            {{ $feat['title'] }}
                        </h5>

                        <p style="
                            font-size:14px;
                            color:var(--color-muted);
                            line-height:1.7;
                            margin:0;
                        ">
                            {{ $feat['desc'] }}
                        </p>

                    </div>

                </div>

                @endforeach

            </div>
        </div>
    </section>

    {{-- ===== PRODUK UNGGULAN SECTION ===== --}}
    <section class="section-padding">
        <div class="container">

            <div class="d-flex align-items-end justify-content-between mb-5 flex-wrap gap-3">

                <div class="fade-up">
                    <span class="section-label">Produk Industri</span>

                    <h2 class="section-title mb-0">
                        Produk Unggulan
                    </h2>

                    <div class="divider-elegant"></div>
                </div>

                <a href="{{ url('/produk') }}" class="btn-outline-custom fade-up">
                    Lihat Semua
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>

            {{-- Product Grid --}}
            {{-- $featuredProducts sudah dikirim dari HomeController --}}

            <div class="row g-4">

                @foreach($featuredProducts as $i => $product)

                <div class="col-lg-3 col-md-6 fade-up"
                     style="transition-delay: {{ $i * 0.1 }}s;">

                    @include('components.product-card', ['product' => $product])

                </div>

                @endforeach

            </div>

        </div>
    </section>

    {{-- ===== CTA BANNER ===== --}}
    <section class="section-padding-sm">

        <div class="container">

            <div class="cta-banner fade-up">

                <div class="row align-items-center g-4">

                    <div class="col-lg-8">

                        <span class="section-label" style="color:#d8f3dc;">
                            Kerjasama Industri
                        </span>

                        <h3 style="
                            font-family:var(--font-display);
                            font-size:clamp(1.6rem,3vw,2.4rem);
                            color:#fff;
                            margin-bottom:10px;
                        ">
                            Solusi Produk Karet untuk Industri Anda
                        </h3>

                        <p style="
                            color:rgba(255,255,255,0.75);
                            font-size:15px;
                            margin:0;
                        ">
                            Hubungi Indo Gummi untuk konsultasi produk,
                            pemesanan skala besar, dan kerja sama industri.
                        </p>

                    </div>

                    <div class="col-lg-4 text-lg-end">

                        <a href="https://wa.me/6281234567890"
                           class="btn-wa"
                           target="_blank">

                            <i class="bi bi-whatsapp"></i>
                            Hubungi Kami

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


@endsection

@push('styles')
<style>

    .cta-banner {
        background: linear-gradient(135deg, #1f3b1f 0%, #122112 100%);
        border-radius: var(--radius-xl);
        padding: 50px 50px;
        position: relative;
        overflow: hidden;
    }

    .cta-banner::before {
        content: '';
        position: absolute;
        top: -50px;
        right: -50px;
        width: 250px;
        height: 250px;
        background: radial-gradient(circle,
                    rgba(76,175,80,0.2) 0%,
                    transparent 70%);
        border-radius: 50%;
    }

    @media (max-width: 576px) {

        .cta-banner {
            padding: 36px 28px;
        }

    }
</style>
@endpush