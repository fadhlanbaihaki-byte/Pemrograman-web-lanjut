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
                        <a href="{{ url('/') }}" style="color:var(--color-primary);">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active" style="color:var(--color-muted);">Kontak</li>
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
                    'link'=>null,
                    'link_text'=>null
                ],
                [
                    'icon'=>'bi-whatsapp',
                    'color'=>'#25D366',
                    'title'=>'WhatsApp',
                    'lines'=>[
                        '0818-427-665',
                        'Senin – Sabtu, 08.00 – 17.00'
                    ],
                    'link'=>'https://wa.me/0818427665',
                    'link_text'=>'Chat Sekarang'
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
                             style="background: {{ $c['color'] }}1a; color: {{ $c['color'] }};">
                            <i class="bi {{ $c['icon'] }}"></i>
                        </div>
                        <h6 class="contact-card-title">{{ $c['title'] }}</h6>
                        @foreach($c['lines'] as $line)
                        <p class="contact-card-line">{{ $line }}</p>
                        @endforeach
                        @if($c['link'])
                        <a href="{{ $c['link'] }}" class="contact-link" target="_blank">
                            {{ $c['link_text'] }}
                            <i class="bi bi-arrow-right" style="font-size:11px;"></i>
                        </a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection