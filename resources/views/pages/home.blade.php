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
                    Indo Gummi menghadirkan produk karet industri berkualitas tinggi
                    dengan teknologi modern dan standar produksi terpercaya.
                </p>
            </div>

            {{-- Feature Cards --}}
            <div class="row g-4">

                @php
                $features = [

                    [
                        'icon' => 'bi-building-fill',
                        'color' => '#4e7d4e',
                        'title' => 'Pabrik Modern',
                        'desc' => 'Didukung fasilitas produksi modern untuk menghasilkan produk karet berkualitas tinggi.'
                    ],

                    [
                        'icon' => 'bi-patch-check-fill',
                        'color' => '#198754',
                        'title' => 'Kualitas Terjamin',
                        'desc' => 'Setiap produk melewati proses quality control ketat sesuai standar industri.'
                    ],

                    [
                        'icon' => 'bi-truck',
                        'color' => '#0d6efd',
                        'title' => 'Distribusi Cepat',
                        'desc' => 'Pengiriman produk tepat waktu dengan jaringan distribusi luas ke berbagai daerah.'
                    ],

                    [
                        'icon' => 'bi-gear-fill',
                        'color' => '#dc3545',
                        'title' => 'Produksi Presisi',
                        'desc' => 'Menggunakan teknologi presisi untuk memastikan hasil produk konsisten.'
                    ],

                    [
                        'icon' => 'bi-people-fill',
                        'color' => '#f0a500',
                        'title' => 'Tim Profesional',
                        'desc' => 'Didukung tenaga ahli berpengalaman di bidang manufaktur dan industri karet.'
                    ],

                    [
                        'icon' => 'bi-globe2',
                        'color' => '#6f42c1',
                        'title' => 'Mitra Industri',
                        'desc' => 'Dipercaya berbagai perusahaan manufaktur sebagai supplier produk karet.'
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
            @php
            $featuredProducts = [

                [
                    'id'=>1,
                    'slug'=>'rubber-o-ring',
                    'name'=>'Rubber O Ring',
                    'category'=>'Produk Industri',
                    'price'=>'Hubungi Kami',
                    'short_desc'=>' cincin segel elastomer berbentuk torus (lingkaran) dengan penampang melingkar.',
                    'image'=>'https://www.rs-online.id/p/rs-pro-nitrile-rubber-o-ring-1-6mm-bore-3-6mm-o-d/1965381/',
                    'badge'=>'Best'
                ],

                [
                    'id'=>2,
                    'slug'=>'rubber-gasket',
                    'name'=>'Rubber Gasket',
                    'category'=>'Komponen Mesin',
                    'price'=>'Hubungi Kami',
                    'short_desc'=>'Produk gasket karet tahan panas dan tekanan tinggi.',
                    'image'=>'https://www.google.com/imgres?q=rubber%20gasket&imgurl=https%3A%2F%2Fwww.deesawalarubber.com%2Fimg%2Fproducts%2Fepdm-flange-rubber-gaskets.webp&imgrefurl=https%3A%2F%2Fwww.deesawalarubber.com%2Fepdm-flange-rubber-gaskets.html&docid=Ta_dfeA2tibHwM&tbnid=SD72gtf2uT_RdM&vet=12ahUKEwjP8aDF2bKUAxWGSGwGHem9M10QnPAOegQIHxAB..i&w=370&h=275&hcb=2&ved=2ahUKEwjP8aDF2bKUAxWGSGwGHem9M10QnPAOegQIHxAB',
                    'badge'=>'Best'
                ],

                [
                    'id'=>3,
                    'slug'=>'rubber-roll',
                    'name'=>'Rubber Roll',
                    'category'=>'Mesin Industri',
                    'price'=>'Hubungi Kami',
                    'short_desc'=>'Karet roll industri dengan daya tahan tinggi dan presisi maksimal.',
                    'image'=>'https://www.google.com/imgres?q=rubber%20roll&imgurl=https%3A%2F%2Fwww.kobeglobal.com%2Fwp-content%2Fuploads%2F2025%2F05%2Fartikell-ruber-roll-2.jpeg&imgrefurl=https%3A%2F%2Fwww.kobeglobal.com%2Frubber-roll-komponen-multifungsi%2F&docid=Toilpj6Pe9avdM&tbnid=Wct5z6so7MRm6M&vet=12ahUKEwjl0N-q2bKUAxWvVmwGHV02BNYQnPAOegQIKhAB..i&w=800&h=533&hcb=2&ved=2ahUKEwjl0N-q2bKUAxWvVmwGHV02BNYQnPAOegQIKhAB',
                    'badge'=>'New'
                ],

                [
                    'id'=>4,
                    'slug'=>'rubber-seal',
                    'name'=>'Rubber Seal',
                    'category'=>'Produk Teknik',
                    'price'=>'Hubungi Kami',
                    'short_desc'=>'Seal karet premium untuk kebutuhan manufaktur dan mesin industri.',
                    'image'=>'https://www.google.com/imgres?q=rubber%20gasket&imgurl=https%3A%2F%2Fwww.deesawalarubber.com%2Fimg%2Fproducts%2Fepdm-flange-rubber-gaskets.webp&imgrefurl=https%3A%2F%2Fwww.deesawalarubber.com%2Fepdm-flange-rubber-gaskets.html&docid=Ta_dfeA2tibHwM&tbnid=SD72gtf2uT_RdM&vet=12ahUKEwjP8aDF2bKUAxWGSGwGHem9M10QnPAOegQIHxAB..i&w=370&h=275&hcb=2&ved=2ahUKEwjP8aDF2bKUAxWGSGwGHem9M10QnPAOegQIHxAB',
                    'badge'=>'Best'
                ],

            ];
            @endphp

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

    {{-- ===== TESTIMONI SECTION ===== --}}
  

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