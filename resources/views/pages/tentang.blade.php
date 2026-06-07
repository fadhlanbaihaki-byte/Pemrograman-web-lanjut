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
                                <
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
                                    Mitra Industri
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Content --}}
                <div class="col-lg-6 fade-up">

                    <span class="section-label">Siapa Kami</span>

                    <h2 class="section-title">
                        Usaha Mandiri <br>
                        Pembuatan Produk Karet Presisi
                    </h2>

                    <div class="divider-elegant"></div>

                    <p style="font-size:15px; color:var(--color-muted); line-height:1.9; margin-bottom:20px;">
                        Selamat datang di Indo Gummi. Kami adalah usaha pribadi yang bergerak di bidang pembuatan dan penyediaan 
                        berbagai macam kebutuhan produk karet. Kami melayani pembuatan serta distribusi perlengkapan teknis 
                        seperti gasket, seal, rubber sheet, hingga berbagai komponen karet custom lainnya yang disesuaikan dengan kebutuhan Anda.

                    <p style="font-size:15px; color:var(--color-muted); line-height:1.9; margin-bottom:32px;">
                        Sebagai usaha mandiri, kami berfokus pada pengerjaan yang teliti untuk setiap pesanan yang masuk. 
                        Karena dikelola secara pribadi, kami bisa memberikan perhatian lebih pada detail produk yang dibuat. 
                        Kami selalu berusaha menghasilkan produk yang rapi, pas ukurannya, dan sesuai dengan spesifikasi operasional yang Anda gunakan.
                    </p>

                    <p style="font-size:15px; color:var(--color-muted); line-height:1.9; margin-bottom:32px;">
                        Kami siap menjadi mitra tepercaya untuk membantu memenuhi kebutuhan produk karet Anda, baik untuk keperluan perawatan mesin, bengkel, maupun operasional harian lainnya.
                    </p>



                    <a href="{{ url('/kontak') }}" class="btn-primary-custom">
                        <i class="bi bi-telephone-fill"></i>
                        Hubungi Kami
                    </a>

                </div>

            </div>
        </div>
    </section>
@endsection