{{-- ============================================
     PAGE: Kontak
     File: resources/views/pages/kontak.blade.php
============================================ --}}

@extends('layouts.app')

@section('title', 'Kontak - Indo Gummi')

@section('content')

    {{-- ===== PAGE HEADER ===== --}}
    <section class="page-header">
        <div class="container text-center">
            <span class="section-label fade-up" style="display:block;">Kami Siap Melayani</span>
            <h1 class="page-header-title fade-up">Hubungi Indo Gummi</h1>

            <nav aria-label="breadcrumb" class="fade-up">
                <ol class="breadcrumb justify-content-center" style="font-size:13px;">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" style="color:var(--color-primary);">
                            Beranda
                        </a>
                    </li>
                    <li class="breadcrumb-item active" style="color:var(--color-muted);">
                        Kontak
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    {{-- ===== CONTACT INFO CARDS ===== --}}
    <section class="section-padding-sm bg-light-warm">
        <div class="container">

            @php
            $contacts = [
                [
                    'icon'=>'bi-geo-alt-fill',
                    'color'=>'#4e7d4e',
                    'title'=>'Alamat',
                    'lines'=>[
                        'Bandung',
                        'Jl. Terusan Awibitung NO 235/143 B'
                    ],
                    'link'=>'#maps',
                    'link_text'=>'Lihat Lokasi'
                ],

                [
                    'icon'=>'bi-whatsapp',
                    'color'=>'#25D366',
                    'title'=>'WhatsApp',
                    'lines'=>[
                        'no wanya',
                        'Senin – Sabtu, 08.00 – 17.00'
                    ],
                    'link'=>'https://wa.me/6281234567890 (ganti nomor wanya)',
                    'link_text'=>'Chat Sekarang'
                ],

                [
                    'icon'=>'bi-envelope-fill',
                    'color'=>'var(--color-primary)',
                    'title'=>'Email',
                    'lines'=>[
                        'info@indogummi.com (entar ganti)',
                        
                    ],
                    'link'=>'mailto:info@indogummi.com',
                    'link_text'=>'Kirim Email'
                ],

                [
                    'icon'=>'bi-building-fill',
                    'color'=>'#5b8dd9',
                    'title'=>'Layanan',
                    'lines'=>[
                        'Produksi Karet Industri',
                        'Custom Rubber Product'
                    ],
                    'link'=>null,
                    'link_text'=>null
                ],
            ];
            @endphp

            <div class="row g-4 justify-content-center">

                @foreach($contacts as $i => $c)
                <div class="col-lg-3 col-md-6 fade-up"
                     style="transition-delay: {{ $i * 0.1 }}s;">

                    <div class="contact-info-card text-center">

                        <div class="contact-icon"
                             style="background: {{ $c['color'] }}1a;
                                    color: {{ $c['color'] }};">
                            <i class="bi {{ $c['icon'] }}"></i>
                        </div>

                        <h6 class="contact-card-title">
                            {{ $c['title'] }}
                        </h6>

                        @foreach($c['lines'] as $line)
                        <p class="contact-card-line">
                            {{ $line }}
                        </p>
                        @endforeach

                        @if($c['link'])
                        <a href="{{ $c['link'] }}"
                           class="contact-link"
                           target="_blank">
                            {{ $c['link_text'] }}
                            <i class="bi bi-arrow-right"
                               style="font-size:11px;"></i>
                        </a>
                        @endif

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- ===== CONTACT FORM ===== --}}
    <section class="section-padding">
        <div class="container">
            <div class="row g-5">

                {{-- FORM --}}
                <div class="col-lg-7 fade-up">

                    <div class="contact-form-wrap">

                        <span class="section-label">
                            Tanya Seputaran Produk
                        </span>

                        <h2 class="section-title">
                            Butuh Produk Karet Industri?
                        </h2>

                        <div class="divider-elegant"></div>

                        <p style="font-size:14px;
                                  color:var(--color-muted);
                                  margin-bottom:32px;">

                            Silakan hubungi tim Indo Gummi untuk konsultasi,
                            penawaran harga, maupun kerja sama industri.
                        </p>

                        <form class="contact-form"
                              onsubmit="handleSubmit(event)">

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label class="form-label-custom">
                                            Nama Perusahaan
                                        </label>

                                        <input type="text"
                                               class="form-input-custom"
                                               placeholder="Masukkan nama perusahaan">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label class="form-label-custom">
                                            Nomor WhatsApp
                                        </label>

                                        <input type="tel"
                                               class="form-input-custom"
                                               placeholder="08xxxxxxxxxx">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group-custom">
                                        <label class="form-label-custom">
                                            Email
                                        </label>

                                        <input type="email"
                                               class="form-input-custom"
                                               placeholder="email@perusahaan.com">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group-custom">
                                        <label class="form-label-custom">
                                            Jenis Kebutuhan
                                        </label>

                                        <select class="form-input-custom form-select-custom">
                                            <option selected disabled>
                                                Pilih kebutuhan...
                                            </option>

                                            <option>
                                                Produk Rubber Sheet
                                            </option>

                                            <option>
                                                Rubber Gasket
                                            </option>

                                            <option>
                                                Seal Karet Industri
                                            </option>

                                            <option>
                                                Produk Custom
                                            </option>

                                            <option>
                                                Kerja Sama Industri
                                            </option>

                                            <option>
                                                Lainnya
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group-custom">
                                        <label class="form-label-custom">
                                            Detail Kebutuhan
                                        </label>

                                        <textarea class="form-input-custom"
                                                  rows="5"
                                                  placeholder="Tuliskan kebutuhan produk Anda..."></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex gap-3 flex-wrap">

                                        <button type="submit"
                                                class="btn-primary-custom">
                                            <i class="bi bi-send-fill"></i>
                                            Kirim Pesan
                                        </button>

                                        <a href="https://wa.me/6281234567890"
                                           target="_blank"
                                           class="btn-wa">

                                            <i class="bi bi-whatsapp"></i>
                                            Chat WhatsApp
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </form>

                        {{-- SUCCESS --}}
                        <div id="successMsg"
                             style="display:none;"
                             class="mt-4">

                            <div style="background:#d4edda;
                                        border:1px solid #c3e6cb;
                                        border-radius:var(--radius-md);
                                        padding:20px;
                                        display:flex;
                                        align-items:center;
                                        gap:12px;">

                                <i class="bi bi-check-circle-fill"
                                   style="color:#28a745;
                                          font-size:22px;"></i>

                                <div>
                                    <div style="font-weight:600;
                                                color:#155724;">
                                        Pesan Berhasil Dikirim
                                    </div>

                                    <div style="font-size:13px;
                                                color:#155724;">
                                        Tim Indo Gummi akan segera menghubungi Anda.
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                {{-- RIGHT SIDE --}}
                <div class="col-lg-5 fade-up">

                    {{-- SOCIAL --}}
                    <div class="mb-5">

                        <span class="section-label">
                            Ikuti Kami
                        </span>

                        <h4 style="font-family:var(--font-display);
                                   margin-bottom:8px;">
                            Media Sosial
                        </h4>

                        <div class="divider-elegant"></div>

                        <div class="social-links">

                            @php
                            $socials = [
                                [
                                    'icon'=>'bi-instagram',
                                    'name'=>'Instagram',
                                    'handle'=>'@indogummi',
                                    'color'=>'#E1306C'
                                ],

                                [
                                    'icon'=>'bi-facebook',
                                    'name'=>'Facebook',
                                    'handle'=>'Indo Gummi Official',
                                    'color'=>'#1877F2'
                                ],

                                [
                                    'icon'=>'bi-linkedin',
                                    'name'=>'LinkedIn',
                                    'handle'=>'Indo Gummi',
                                    'color'=>'#0A66C2'
                                ],
                            ];
                            @endphp

                            @foreach($socials as $s)
                            <div class="social-link-item">

                                <div class="social-icon-box"
                                     style="background: {{ $s['color'] }}15;
                                            color: {{ $s['color'] }};">

                                    <i class="bi {{ $s['icon'] }}"></i>
                                </div>

                                <div>
                                    <div class="social-name">
                                        {{ $s['name'] }}
                                    </div>

                                    <div class="social-handle">
                                        {{ $s['handle'] }}
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>

                    {{-- MAP --}}
                    <div id="maps">

                        <span class="section-label">
                            Lokasi Pabrik
                        </span>

                        <h4 style="font-family:var(--font-display);
                                   margin-bottom:8px;">
                            Indo Gummi Factory
                        </h4>

                        <div class="divider-elegant"></div>

                        <div class="maps-wrap">

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18"
                                width="100%"
                                height="250"
                                style="border:0;
                                       border-radius:var(--radius-md);"
                                loading="lazy">
                            </iframe>

                            <div class="maps-address">
                                <i class="bi bi-pin-map-fill"
                                   style="color:var(--color-primary);"></i>

                                <span>
                                    Bandung,
                                    Jawa Barat
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection