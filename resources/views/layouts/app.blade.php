<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Indo Gummi - Perusahaan produk karet berkualitas untuk kebutuhan industri dan manufaktur">
    <title>@yield('title', 'Indo Gummi - Solusi Produk Karet Berkualitas')</title>

    {{-- Bootstrap 5 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* =============================================
           CSS VARIABLES & GLOBAL RESET
        ============================================= */
        :root {
            --color-primary: #2f5d50;
            --color-primary-dark: #23463c;
            --color-primary-light: #dce9e4;
            --color-accent: #1f1f1f;
            --color-dark: #111111;
            --color-text: #4a4a4a;
            --color-muted: #8a8a8a;
            --color-bg: #f7f9f8;
            --color-white: #ffffff;
            --color-border: #e7ece9;
            --color-card-bg: #ffffff;

            --font-display: 'Cormorant Garamond', Georgia, serif;
            --font-body: 'DM Sans', sans-serif;

            --shadow-sm: 0 2px 12px rgba(0,0,0,0.06);
            --shadow-md: 0 8px 32px rgba(0,0,0,0.09);
            --shadow-lg: 0 20px 60px rgba(0,0,0,0.12);

            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 24px;
            --radius-xl: 32px;

            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        *, *::before, *::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            background-color: var(--color-bg);
            color: var(--color-text);
            font-size: 15px;
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-display);
            color: var(--color-dark);
            line-height: 1.2;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* =============================================
           UTILITY CLASSES
        ============================================= */
        .text-primary-custom {
            color: var(--color-primary) !important;
        }

        .bg-primary-custom {
            background-color: var(--color-primary) !important;
        }

        .bg-light-warm {
            background-color: #f2f6f4 !important;
        }

        .section-padding {
            padding: 90px 0;
        }

        .section-padding-sm {
            padding: 60px 0;
        }

        .section-label {
            font-family: var(--font-body);
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--color-primary);
            margin-bottom: 12px;
            display: block;
        }

        .section-title {
            font-family: var(--font-display);
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 600;
            color: var(--color-dark);
            margin-bottom: 16px;
        }

        .section-subtitle {
            font-size: 16px;
            color: var(--color-muted);
            max-width: 540px;
            line-height: 1.8;
        }

        .divider-elegant {
            width: 48px;
            height: 2px;
            background: var(--color-primary);
            margin: 20px 0;
        }

        .divider-elegant.centered {
            margin: 20px auto;
        }

        /* =============================================
           BUTTONS
        ============================================= */
        .btn-primary-custom {
            background: var(--color-primary);
            border: none;
            color: #fff;
            padding: 14px 32px;
            border-radius: 50px;
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.5px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition);
            box-shadow: 0 4px 20px rgba(47, 93, 80, 0.35);
        }

        .btn-primary-custom:hover {
            background: var(--color-primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(47, 93, 80, 0.45);
            color: #fff;
        }

        .btn-outline-custom {
            background: transparent;
            border: 1.5px solid var(--color-primary);
            color: var(--color-primary);
            padding: 13px 30px;
            border-radius: 50px;
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition);
        }

        .btn-outline-custom:hover {
            background: var(--color-primary);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(47, 93, 80, 0.3);
        }

        .btn-wa {
            background: #25D366;
            border: none;
            color: #fff;
            padding: 14px 28px;
            border-radius: 50px;
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition);
            box-shadow: 0 4px 18px rgba(37, 211, 102, 0.3);
        }

        .btn-wa:hover {
            background: #1da851;
            transform: translateY(-2px);
            box-shadow: 0 8px 26px rgba(37, 211, 102, 0.4);
            color: #fff;
        }

        .btn-wa-sm {
            background: #25D366;
            border: none;
            color: #fff;
            padding: 9px 18px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: var(--transition);
        }

        .btn-wa-sm:hover {
            background: #1da851;
            transform: translateY(-1px);
            color: #fff;
        }

        /* =============================================
           CARDS
        ============================================= */
        .card-elegant {
            background: var(--color-card-bg);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            overflow: hidden;
        }

        .card-elegant:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-4px);
            border-color: var(--color-primary-light);
        }

        /* =============================================
           FLOATING WA BUTTON
        ============================================= */
        .wa-float {
            position: fixed;
            bottom: 28px;
            right: 28px;
            z-index: 9999;
            background: #25D366;
            color: #fff;
            width: 58px;
            height: 58px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            box-shadow: 0 6px 24px rgba(37, 211, 102, 0.45);
            transition: var(--transition);
            animation: wa-pulse 2.5s infinite;
        }

        .wa-float:hover {
            transform: scale(1.1);
            color: #fff;
            box-shadow: 0 8px 30px rgba(37, 211, 102, 0.55);
        }

        @keyframes wa-pulse {
            0%, 100% {
                box-shadow: 0 6px 24px rgba(37, 211, 102, 0.45);
            }

            50% {
                box-shadow: 0 6px 32px rgba(37, 211, 102, 0.65);
            }
        }

        /* =============================================
           FADE-IN ANIMATION
        ============================================= */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* =============================================
           SCROLLBAR
        ============================================= */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--color-primary-light);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--color-primary);
        }
    </style>

    @stack('styles')
</head>

<body>

    {{-- Navbar Component --}}
    @include('components.navbar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer Component --}}
    @include('components.footer')

    {{-- WhatsApp Float Button --}}
    <a href="https://wa.me/6281234567890?text=Halo%20Indo%20Gummi,%20saya%20ingin%20bertanya%20tentang%20produk%20karet"
       class="wa-float"
       target="_blank"
       title="Chat WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    {{-- Bootstrap 5 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // === FADE-IN ON SCROLL ===
        const fadeEls = document.querySelectorAll('.fade-up');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12
        });

        fadeEls.forEach(el => observer.observe(el));

        // === NAVBAR SCROLL EFFECT ===
        const navbar = document.getElementById('mainNavbar');

        if (navbar) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }
    </script>

    @stack('scripts')

</body>
</html>
```
