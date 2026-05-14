<style>
    /* =============================================
       HERO STYLES
    ============================================= */
    .hero-section {
        min-height: 92vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #f4f7f4 0%, #eef3ee 50%, #e6eee6 100%);
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: -120px;
        right: -120px;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(76, 175, 80, 0.12) 0%, transparent 70%);
        border-radius: 50%;
    }

    .hero-section::after {
        content: '';
        position: absolute;
        bottom: -80px;
        left: -80px;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(76, 175, 80, 0.08) 0%, transparent 70%);
        border-radius: 50%;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(76, 175, 80, 0.12);
        border: 1px solid rgba(76, 175, 80, 0.25);
        padding: 6px 16px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #2e7d32;
        margin-bottom: 24px;
    }

    .hero-title {
        font-size: clamp(2.8rem, 6vw, 5rem);
        font-weight: 700;
        color: #1f1f1f;
        line-height: 1.1;
        margin-bottom: 20px;
    }

    .hero-title .highlight {
        color: #4CAF50;
    }

    .hero-subtitle {
        font-size: 17px;
        color: #666;
        line-height: 1.8;
        max-width: 520px;
        margin-bottom: 36px;
    }

    .hero-actions {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
    }

    .hero-stats {
        display: flex;
        gap: 32px;
        margin-top: 48px;
        padding-top: 32px;
        border-top: 1px solid #ddd;
    }

    .hero-stat-item .stat-number {
        font-size: 1.8rem;
        font-weight: 700;
        color: #1f1f1f;
    }

    .hero-stat-item .stat-label {
        font-size: 12px;
        color: #666;
    }

    /* Hero Image */
    .hero-image-wrap {
        position: relative;
        z-index: 2;
    }

    .hero-image-main {
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    }

    .hero-image-main img {
        width: 100%;
        height: 520px;
        object-fit: cover;
        display: block;
    }

    .hero-image-badge {
        position: absolute;
        bottom: -20px;
        left: -20px;
        background: white;
        border-radius: 16px;
        padding: 16px 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: 220px;
    }

    .hero-image-badge .badge-icon {
        width: 44px;
        height: 44px;
        background: rgba(76,175,80,0.15);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #4CAF50;
        font-size: 20px;
    }

    .hero-image-badge .number {
        font-size: 1.3rem;
        font-weight: 700;
        color: #1f1f1f;
    }

    .hero-image-badge .label {
        font-size: 11px;
        color: #666;
    }

    .hero-float-card {
        position: absolute;
        top: 30px;
        right: -16px;
        background: white;
        border-radius: 14px;
        padding: 12px 16px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        font-size: 13px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .hero-float-card .dot {
        width: 8px;
        height: 8px;
        background: #4CAF50;
        border-radius: 50%;
    }

    @media (max-width: 991px) {
        .hero-section {
            min-height: auto;
            padding: 70px 0;
        }

        .hero-image-wrap {
            margin-top: 40px;
        }

        .hero-image-main img {
            height: 360px;
        }

        .hero-float-card {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .hero-image-main img {
            height: 280px;
        }

        .hero-image-badge {
            display: none;
        }
    }
</style>

<section class="hero-section">

    <div class="container">
        <div class="row align-items-center">

            {{-- LEFT CONTENT --}}
            <div class="col-lg-6">

                <div class="hero-content">

                    <div class="hero-eyebrow">
                        <i class="bi bi-building"></i>
                        Industri Karet Berkualitas
                    </div>

                    <h1 class="hero-title">
                        Solusi Produk
                        <span class="highlight">Karet Industri</span><br>
                        untuk Bisnis<br>
                        Modern
                    </h1>

                    <p class="hero-subtitle">
                        Indo Gummi menghadirkan berbagai produk karet industri
                        berkualitas tinggi dengan standar manufaktur modern
                        untuk kebutuhan otomotif, mesin, konstruksi,
                        dan berbagai sektor industri lainnya.
                        (belum sreg)
                    </p>

                    <div class="hero-actions">

                        <a href="{{ url('/produk') }}"
                           class="btn btn-success btn-lg">

                            <i class="bi bi-grid-fill"></i>
                            Lihat Produk

                        </a>

                        <a href="https://wa.me/6281234567890"
                           class="btn btn-dark btn-lg"
                           target="_blank">

                            <i class="bi bi-whatsapp"></i>
                            Hubungi Kami

                        </a>

                    </div>

                    {{-- STATS --}}
                    <div class="hero-stats">

                        <div class="hero-stat-item">
                            <div class="stat-number">10+</div>
                            <div class="stat-label">
                                Tahun Pengalaman
                            </div>
                        </div>

                        <div class="hero-stat-item">
                            <div class="stat-number">100+</div>
                            <div class="stat-label">
                                Mitra Industri
                            </div>
                        </div>

                        <div class="hero-stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">
                                Dukungan Pelanggan
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            {{-- RIGHT IMAGE --}}
            <div class="col-lg-6">

                <div class="hero-image-wrap">

                    <div class="hero-image-main">

                        <img
                            src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80"
                            alt="Indo Gummi"
                        >

                    </div>

                    {{-- BADGE --}}
                    <div class="hero-image-badge">

                        <div class="badge-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>

                        <div>
                            <div class="number">100%</div>
                            <div class="label">
                                Standar Kualitas Industri
                            </div>
                        </div>

                    </div>

                    {{-- FLOAT CARD --}}
                    <div class="hero-float-card">

                        <div class="dot"></div>

                        

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>