{{-- ============================================
     COMPONENT: Footer
     File: resources/views/components/footer.blade.php
============================================ --}}

<style>
    /* =============================================
       FOOTER STYLES
    ============================================= */
    .footer-main {
        background: #1a1a1a;
        color: #c8c8c8;
        padding: 70px 0 0;
    }

    .footer-brand .brand-name {
        font-size: 1.8rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 4px;
    }

    .footer-brand .brand-tagline {
        font-size: 11px;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #4CAF50;
        margin-bottom: 16px;
    }

    .footer-brand p {
        font-size: 14px;
        line-height: 1.8;
        color: #a0a0a0;
        max-width: 320px;
    }

    .footer-social {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .social-icon {
        width: 38px;
        height: 38px;
        border: 1px solid #333;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #a0a0a0;
        font-size: 15px;
        transition: 0.3s;
    }

    .social-icon:hover {
        background: #4CAF50;
        border-color: #4CAF50;
        color: #fff;
    }

    .footer-heading {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #4CAF50;
        margin-bottom: 20px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 10px;
    }

    .footer-links a {
        color: #a0a0a0;
        font-size: 14px;
        text-decoration: none;
        transition: 0.3s;
    }

    .footer-links a:hover {
        color: #4CAF50;
        padding-left: 4px;
    }

    .footer-contact-item {
        display: flex;
        gap: 12px;
        margin-bottom: 16px;
    }

    .icon-wrap {
        width: 36px;
        height: 36px;
        background: rgba(76,175,80,0.15);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #4CAF50;
        flex-shrink: 0;
    }

    .contact-label {
        font-size: 11px;
        text-transform: uppercase;
        color: #777;
        margin-bottom: 2px;
    }

    .contact-text {
        font-size: 13px;
        color: #a0a0a0;
        line-height: 1.6;
    }

    .footer-divider {
        border-color: #2a2a2a;
        margin: 40px 0 0;
    }

    .footer-bottom {
        background: #111;
        padding: 18px 0;
    }

    .footer-bottom p {
        margin: 0;
        font-size: 13px;
        color: #777;
    }

    .footer-bottom strong {
        color: #fff;
    }
</style>

<footer class="footer-main">

    <div class="container">
        <div class="row g-5">

            {{-- Brand --}}
            <div class="col-lg-4 col-md-6">

                <div class="footer-brand">
                    <div class="brand-name">
                        UD Indo Gummi
                    </div>

                    <div class="brand-tagline">
                        Industri · Karet · Berkualitas
                    </div>

                    <p>
                        Perusahaan industri karet terpercaya yang menyediakan
                        berbagai produk karet berkualitas tinggi untuk kebutuhan
                        manufaktur, otomotif, dan industri modern di Indonesia.
                        (entar ganti kalimatnya )
                    </p>
                </div>

                <div class="footer-social">

                    <a href="https://wa.me/... (simpen link wa disini)" class="social-icon">
                        <i class="bi bi-whatsapp"></i>
                    </a>

                </div>
            </div>

            {{-- Menu --}}
            <div class="col-lg-2 col-md-6 col-6">

                <h6 class="footer-heading">
                    Menu
                </h6>

                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('/produk') }}">Produk</a></li>
                    <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                </ul>

            </div>

            {{-- Produk --}}
            <div class="col-lg-2 col-md-6 col-6">

                <h6 class="footer-heading">
                    Produk
                </h6>

                <ul class="footer-links">
                    <li><a href="#">Produk kategori 1</a></li>
                    <li><a href="#">Produk kategori 2</a></li>
                    <li><a href="#">Produk kategori 3</a></li>
                    <li><a href="#">Produk kategori 4</a></li>
                    <li><a href="#">Produk kategori 5</a></li>
                </ul>

            </div>

            {{-- Kontak --}}
            <div class="col-lg-4 col-md-6">

                <h6 class="footer-heading">
                    Hubungi Kami
                </h6>

                <div class="footer-contact-item">

                    <div class="icon-wrap">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>

                    <div>
                        <div class="contact-label">
                            Alamat
                        </div>

                        <div class="contact-text">
                            Jl. Terusan Awi Bitung No 235/143 B<br>
                            Bandung, Jawa Barat (kodeposnya lupa)
                        </div>
                    </div>

                </div>

                <div class="footer-contact-item">

                    <div class="icon-wrap">
                        <i class="bi bi-whatsapp"></i>
                    </div>

                    <div>
                        <div class="contact-label">
                            WhatsApp
                        </div>

                        <div class="contact-text">
                            nomor wa nya 
                        </div>
                    </div>

                </div>

                <div class="footer-contact-item">

                    <div class="icon-wrap">
                        <i class="bi bi-envelope-fill"></i>
                    </div>

                    <div>
                        <div class="contact-label">
                            Email
                        </div>

                        <div class="contact-text">
                            emailnya belum ada jir
                        </div>
                    </div>

                </div>

                <div class="footer-contact-item">

                    <div class="icon-wrap">
                        <i class="bi bi-clock-fill"></i>
                    </div>

                    <div>
                        <div class="contact-label">
                            Jam Operasional
                        </div>

                        <div class="contact-text">
                            setiap hari keknya 
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <hr class="footer-divider">

    </div>

    {{-- Footer Bottom --}}
    <div class="footer-bottom">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">
                    <p>
                        © {{ date('Y') }}
                        <strong>UD Indo Gummi </strong>.
                        All Rights Reserved.
                    </p>
                </div>

                <div class="col-md-6 text-md-end">
                    <p>
                        Industri Karet Berkualitas untuk Indonesia
                    </p>
                </div>

            </div>

        </div>

    </div>

</footer>