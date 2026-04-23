<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">

    <title>Bem-vindo à Família Reisman | Acesso Exclusivo</title>

    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="Área exclusiva para clientes Reisman.">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ path('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ path('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ path('favicon-16x16.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ thumb(path('apple-touch-icon.png'), 48, 48) }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5N5VB6');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1054555486"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-1054555486');
    </script>

    <style>
        /* --- VARIÁVEIS & RESET --- */
        :root {
            --black: #000000;
            --white: #FFFFFF;
            --gray-dark: #727272;
            --gray-med: #B0B0B0;
            --gray-light: #DEDEDE;
            --bg-warm: #F1EFEE;
            --bg-ice: #F8F8F8;
        }

        ::selection {
            background: var(--black);
            color: var(--white);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-warm);
            color: var(--gray-dark);
            font-family: 'Spectral', serif;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        header,
        .header,
        footer,
        .footer,
        .topbar-new,
        .menu-mobile-aside {
            display: none !important;
        }

        .font-serif {
            font-family: 'Spectral', serif;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- HERO --- */
        .hero-full-split {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background-color: var(--bg-warm);
            position: relative;
        }

        .split-row {
            height: 100%;
        }

        .col-text {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            z-index: 2;
            text-align: left;
            background: var(--bg-warm);
            box-shadow: 5px 0 20px rgba(0, 0, 0, 0.08);
        }

        .text-content-wrapper {
            max-width: 600px;
            width: 100%;
        }

        .logo-hero-img {
            width: 240px;
            max-width: 80vw;
            height: auto;
            display: block;
            margin-bottom: 30px;
        }

        .hero-title {
            font-size: 2.6rem;
            font-weight: 300;
            margin-bottom: 25px;
            letter-spacing: 0;
            color: var(--black);
            line-height: 1.3;
        }

        .col-video {
            height: 100%;
            position: relative;
            overflow: hidden;
            padding: 0 !important;
            background: var(--black);
        }

        .video-blocker {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.5'/%3E%3C/svg%3E");
            opacity: 0.15;
            pointer-events: none;
        }

        .video-background-iframe {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 177.77vh;
            height: 100vh;
            /* Default: Height-based (Portrait/Mobile) */
            pointer-events: none;
            opacity: 0.8;
            filter: grayscale(100%);
        }

        @media (min-aspect-ratio: 16/9) {
            .video-background-iframe {
                width: 100vw;
                height: 56.25vw;
            }

            /* Width-based (Landscape/Desktop) */
        }

        .video-poster {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 5;
            pointer-events: none;
            filter: grayscale(100%);
            opacity: 0.8;
            transform: scale(1.1);
            transition: opacity 1.5s ease-out, transform 1.5s ease-out;
        }

        .video-poster.hidden {
            opacity: 0;
            transform: scale(1);
        }

        .scroll-down-indicator {
            position: absolute;
            bottom: 30px;
            left: 25%;
            transform: translateX(-50%);
            z-index: 99;
            font-size: 2rem;
            color: var(--black);
            animation: bounceArrow 2s infinite;
            cursor: pointer;
            opacity: 0.6;
            transition: 0.3s;
        }

        .scroll-down-indicator:hover {
            opacity: 1;
        }

        @keyframes bounceArrow {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateX(-50%) translateY(0);
            }

            40% {
                transform: translateX(-50%) translateY(-10px);
            }

            60% {
                transform: translateX(-50%) translateY(-5px);
            }
        }

        /* --- MEASURE SECTION & TRIGGER --- */
        .measure-full-section {
            background-color: var(--white);
            padding: 0;
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
        }

        .measure-wrapper {
            display: flex;
            align-items: stretch;
            justify-content: flex-start;
            gap: 0;
            max-width: none;
            margin: 0;
            padding: 0;
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100vh;
        }

        .measure-text-col {
            flex: 0 0 50%;
            max-width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 80px 8%;
            background: var(--white);
            position: relative;
            z-index: 2;
        }

        .measure-image-col {
            flex: 0 0 50%;
            max-width: 50%;
            position: relative;
            padding: 0;
            overflow: hidden;
        }

        .measure-full-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .measure-photo-frame {
            position: relative;
            padding-bottom: 160%;
            width: 100%;
            height: 0;
            background: #f0f0f0;
            overflow: hidden;
            border-radius: 2px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            transition: 0.6s cubic-bezier(0.19, 1, 0.22, 1);
            transform: none;
            border: none;
        }

        .measure-photo-frame:hover {
            transform: rotate(0deg) scale(1.02) translateY(-5px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .measure-photo-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
            transition: 0.6s;
            filter: grayscale(100%);
        }

        .measure-photo-frame:hover .measure-photo-img {
            opacity: 1;
            transform: scale(1.05);
            filter: grayscale(0%);
        }

        .signature-svg {
            position: absolute;
            bottom: -40px;
            right: -40px;
            width: 180px;
            height: auto;
            z-index: 5;
            pointer-events: none;
            transform: rotate(-5deg);
            filter: drop-shadow(0 2px 2px rgba(0, 0, 0, 0.05));
        }

        .signature-path {
            fill: none;
            stroke: var(--black);
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 800;
            stroke-dashoffset: 800;
        }

        .measure-full-section.active .signature-path {
            animation: signAnim 3s ease-out forwards 0.5s;
        }

        @keyframes signAnim {
            to {
                stroke-dashoffset: 0;
            }
        }

        .btn-primary-gold {
            background: var(--black);
            color: var(--white);
            border: 1px solid var(--black);
            padding: 12px 30px;
            text-transform: uppercase;
            font-size: 0.85rem;
            font-weight: 600;
            transition: 0.3s;
            margin: 10px 0 0 0;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-primary-gold:hover {
            background: var(--white);
            color: var(--black);
            transform: translateY(-2px);
            text-decoration: none;
            border-color: var(--black);
        }

        .btn-minimal-warranty {
            background: transparent;
            border: 1px solid var(--black);
            color: var(--black);
            padding: 12px 30px;
            text-transform: uppercase;
            font-size: 0.7rem;
            letter-spacing: 2px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 5px;
            display: inline-block;
            font-weight: 100;
            text-decoration: none;
        }

        .btn-minimal-warranty:hover {
            background: var(--black);
            color: var(--white);
            text-decoration: none;
        }

        .btn-gallery-cta {
            background: transparent;
            border: 1px solid var(--black);
            color: var(--black);
            padding: 15px 40px;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 2px;
            cursor: pointer;
            transition: 0.3s;
            display: inline-block;
            font-weight: 600;
            text-decoration: none;
            margin-top: 10px;
        }

        .btn-gallery-cta:hover {
            background: var(--black);
            color: var(--white);
            transform: translateY(-2px);
            text-decoration: none;
        }

        .btn-video-link {
            background: transparent;
            border: none;
            border-bottom: 1px solid var(--gray-med);
            color: var(--gray-dark);
            padding: 5px 0;
            margin-top: 15px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-video-link:hover {
            color: var(--black);
            border-color: var(--black);
        }

        /* --- EDITORIAL PARALLAX SECTION --- */
        .editorial-section {
            background-color: var(--bg-warm);
            padding: 0;
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            transition: background-color 2.5s ease;
        }

        .editorial-section.romantic-mode {
            background-color: #fcf0f2;
        }

        .editorial-wrapper {
            display: flex;
            align-items: stretch;
            width: 100%;
            height: 100vh;
        }

        .editorial-text-col {
            flex: 0 0 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 8%;
            position: relative;
            z-index: 2;
            background: transparent;
            order: 2;
        }

        .editorial-image-col {
            flex: 0 0 50%;
            position: relative;
            overflow: hidden;
            display: flex;
            gap: 20px;
            background: var(--black);
            padding: 0;
            align-items: flex-start;
            justify-content: center;
            order: 1;
            -webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 15%, black 85%, transparent 100%);
            mask-image: linear-gradient(to bottom, transparent 0%, black 15%, black 85%, transparent 100%);
        }

        /* Marquee Animation */
        .gallery-marquee-col {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
            will-change: transform;
        }

        .gallery-marquee-col img {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
            filter: grayscale(100%);
            transition: 0.5s;
            opacity: 0.7;
        }

        .gallery-marquee-col img:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        .marquee-up {
            animation: marqueeUp 60s linear infinite;
        }

        .marquee-down {
            animation: marqueeDown 60s linear infinite;
        }

        @keyframes marqueeUp {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-50%);
            }
        }

        @keyframes marqueeDown {
            0% {
                transform: translateY(-50%);
            }

            100% {
                transform: translateY(0);
            }
        }

        .gallery-stats {
            margin-top: 35px;
            opacity: 0;
            transform: translateY(10px);
            transition: all 1s ease-out;
        }

        .gallery-stats.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-counter {
            font-family: 'Spectral', serif;
            font-size: 2.5rem;
            color: var(--black);
            line-height: 1;
            font-style: italic;
            font-weight: 300;
        }

        .gallery-label {
            font-family: 'Spectral', serif;
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--gray-med);
            display: block;
            margin-top: 5px;
        }

        /* --- FOOTER --- */
        .nav-footer {
            background: var(--black);
            color: var(--white);
            padding: 100px 0 60px;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            display: block !important;
        }

        .nav-footer h3 {
            font-family: 'Spectral', serif;
            color: var(--white);
            margin-bottom: 60px;
            font-size: 2rem;
            font-weight: 300;
            letter-spacing: 0.5px;
            opacity: 0.9;
        }

        .nav-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 50px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .nav-card {
            flex: 0 1 auto;
            background: transparent;
            border: none;
            padding: 10px;
            text-decoration: none;
            color: var(--gray-med);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .nav-card:hover {
            transform: translateY(-3px);
            text-decoration: none;
            color: var(--white);
        }

        .nav-card i {
            font-size: 1.1rem;
            color: var(--white);
            opacity: 0.6;
            transition: 0.3s;
        }

        .nav-card:hover i {
            opacity: 1;
            transform: scale(1.1);
        }

        .nav-card span {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 500;
            border-bottom: 1px solid transparent;
            padding-bottom: 5px;
            transition: 0.3s;
        }

        .nav-card:hover span {
            border-color: rgba(255, 255, 255, 0.3);
        }

        /* --- MODALS GERAIS --- */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 10000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 0;
            backdrop-filter: blur(5px);
        }

        .modal-content-wrapper {
            width: 100%;
            max-width: 1100px;
            width: 90vw;
            position: relative;
        }

        .modal-paper {
            background-color: var(--bg-ice);
            width: 100%;
            max-width: 600px;
            max-height: 85vh;
            overflow-y: auto;
            position: relative;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            border: 1px solid var(--gray-light);
            outline: 1px solid var(--gray-light);
            outline-offset: -10px;
            padding: 50px 40px;
            text-align: center;
            font-family: 'Spectral', serif;
            color: var(--gray-dark);
            margin: auto;
        }

        .close-modal {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 2.5rem;
            color: var(--black);
            cursor: pointer;
            opacity: 0.8;
            line-height: 1;
        }

        .close-modal-video {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            cursor: pointer;
            font-family: 'Spectral', sans-serif;
            font-size: 1.2rem;
        }

        .modal-paper h2 {
            color: var(--black);
            font-size: 2.2rem;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .paper-text {
            font-size: 1.05rem;
            line-height: 1.8;
            text-align: justify;
        }

        .highlight-box {
            background: var(--bg-warm);
            border: 1px solid var(--gray-light);
            padding: 20px;
            border-radius: 4px;
            margin-top: 30px;
            text-align: left;
        }

        .modal-ajuste-paper {
            background-color: var(--white);
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
            border: none;
            padding: 0;
            text-align: center;
            font-family: 'Spectral', serif;
        }

        /* --- WIDGETS --- */
        .video-audio-control {
            position: absolute;
            bottom: 30px;
            right: 30px;
            z-index: 30;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--white);
        }

        .video-audio-control:hover {
            background: rgba(255, 255, 255, 0.9);
            color: var(--black);
            transform: scale(1.1);
        }

        .video-audio-control i {
            font-size: 1rem;
        }

        /* --- CARE SECTION --- */
        .care-section {
            background-color: var(--bg-ice);
            padding: 0;
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
        }

        .care-wrapper {
            display: flex;
            align-items: stretch;
            justify-content: flex-start;
            gap: 0;
            max-width: none;
            margin: 0;
            padding: 0;
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100vh;
        }

        .care-text-col {
            flex: 0 0 50%;
            max-width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 80px 8%;
            position: relative;
            overflow: hidden;
        }

        .care-image-col {
            flex: 0 0 50%;
            max-width: 50%;
            position: relative;
            padding: 0;
            overflow: hidden;
        }

        .care-full-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .care-photo-frame {
            position: relative;
            padding-bottom: 150%;
            width: 100%;
            max-width: 450px;
            height: 0;
            background: #f0f0f0;
            overflow: hidden;
            border-radius: 2px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            transition: 0.6s cubic-bezier(0.19, 1, 0.22, 1);
            transform: rotate(3deg);
            border: 10px solid var(--white);
        }

        .care-photo-frame:hover {
            transform: rotate(0deg) scale(1.02) translateY(-5px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .care-photo-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
            transition: 0.6s;
            filter: grayscale(100%);
        }

        .care-photo-frame:hover .care-photo-img {
            opacity: 1;
            transform: scale(1.05);
            filter: grayscale(0%);
        }

        .care-tabs-list {
            display: flex;
            flex-direction: column;
            gap: 0;
            margin-top: 40px;
            border-left: 1px solid var(--gray-light);
            padding-left: 0;
            position: relative;
        }

        .care-list-item {
            display: flex;
            align-items: center;
            padding: 20px 30px;
            cursor: pointer;
            transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
            color: #909090;
            font-family: 'Spectral', serif;
            font-size: 1.2rem;
            position: relative;
            background: transparent;
            border: none;
        }

        .care-list-item::before {
            content: '';
            position: absolute;
            left: -1px;
            top: 0;
            height: 100%;
            width: 2px;
            background: var(--black);
            transform: scaleY(0);
            transition: transform 0.4s ease;
            transform-origin: top;
        }

        .care-list-item:hover {
            color: var(--gray-dark);
            padding-left: 35px;
        }

        .care-list-item.active {
            color: var(--black);
            font-style: italic;
            padding-left: 40px;
            font-size: 1.3rem;
        }

        .care-list-item.active::before {
            transform: scaleY(1);
        }

        .care-list-item span {
            font-weight: 400;
            letter-spacing: 0.5px;
        }

        .care-watermark {
            position: absolute;
            top: 58%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Spectral', serif;
            font-size: 13vw;
            color: var(--black);
            opacity: 0.025;
            pointer-events: none;
            z-index: 0;
            font-style: italic;
            white-space: nowrap;
            line-height: 1;
            user-select: none;
        }

        .care-mobile-photo {
            display: none;
            margin-top: 40px;
        }

        .care-mobile-photo.reveal {
            transition: all 1.5s ease-out;
        }

        /* --- SCROLL DOTS --- */
        .scroll-dots-nav {
            position: fixed;
            top: 50%;
            right: 30px;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 20px;
            z-index: 900;
        }

        .scroll-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            border: 1px solid var(--gray-dark);
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: block;
        }

        .scroll-dot:hover {
            border-color: var(--black);
            transform: scale(1.2);
        }

        .scroll-dot.active {
            background: var(--black);
            border-color: var(--black);
            transform: scale(1.4);
        }

        /* --- BACK TO TOP --- */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 900;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--black);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.4s ease;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border: 1px solid var(--black);
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover {
            background: var(--white);
            color: var(--black);
            transform: translateY(-5px);
        }

        /* --- AJUSTE SECTION OVERRIDES --- */
        #ajuste .measure-text-col {
            text-align: left;
        }

        #ajuste .measure-text-col span {
            color: var(--gray-med);
        }

        #ajuste .measure-text-col h2 {
            color: var(--black);
        }

        #ajuste .measure-text-col p {
            color: var(--gray-dark);
        }

        #ajuste .care-watermark {
            color: var(--black);
            opacity: 0.03;
        }

        #ajuste .care-tabs-list {
            align-items: flex-start;
            border-left: 1px solid var(--gray-light);
            border-top: none;
            padding-left: 0;
            margin-top: 40px;
            width: 100%;
        }

        #ajuste .care-list-item {
            color: var(--gray-med);
            justify-content: flex-start;
            padding: 20px 30px;
            width: 100%;
            border-bottom: none;
        }

        #ajuste .care-list-item::before {
            display: block;
            background: var(--black);
        }

        #ajuste .care-list-item:hover {
            color: var(--black);
            background: transparent;
            padding-left: 35px;
        }

        @media (max-width: 768px) {
            .cert-vertical-paper {
                min-height: 500px;
                padding: 50px 30px;
                max-width: 90%;
            }

            .btn-intro {
                padding: 15px 20px;
                letter-spacing: 1px;
            }

            .nav-card {
                flex: 0 0 45%;
                max-width: 45%;
            }

            .nav-grid {
                padding: 0 10px;
                gap: 30px;
            }

            .hero-full-split {
                height: 100vh;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }

            /* Mobile Linktree Layout */
            .col-text {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 20;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.5) 70%, rgba(0, 0, 0, 0.85) 100%);
                justify-content: center;
                align-items: center;
                text-align: center;
                padding: 0 40px;
                box-shadow: none;
            }

            .hero-desktop-content {
                display: none;
            }

            .mobile-linktree {
                display: flex !important;
                flex-direction: column;
                width: 100%;
                max-width: 340px;
                gap: 12px;
                margin: 0 auto;
            }

            .mobile-footer-text {
                display: block !important;
                position: absolute;
                bottom: 60px;
                left: 0;
                width: 100%;
                text-align: center;
                padding-bottom: 10px;
            }

            .logo-hero-img {
                position: absolute;
                top: 40px;
                left: 50%;
                transform: translateX(-50%);
                width: 160px;
                margin: 0;
                filter: brightness(0) invert(1);
                opacity: 0.8;
            }

            .col-video {
                display: block !important;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                overflow: hidden;
            }

            .scroll-down-indicator {
                display: none;
            }

            .scroll-dots-nav {
                display: none;
            }

            .btn-minimal-warranty {
                border: 1px solid rgba(255, 255, 255, 0.25);
                border-left: 1px solid rgba(255, 255, 255, 0.25);
                color: var(--white);
                background: rgba(0, 0, 0, 0.35);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                margin-top: 0;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 16px 22px;
                border-radius: 8px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
                text-align: center;
                font-family: 'Spectral', serif;
                font-size: 0.8rem;
            }

            .btn-minimal-warranty::after {
                content: '\f054';
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                font-size: 0.7rem;
                display: none;
            }

            .btn-minimal-warranty:hover {
                background: rgba(255, 255, 255, 0.15);
                transform: translateX(5px);
            }

            /* Small Screens / Landscape Adjustment */
            @media (max-height: 700px) {
                .col-text {
                    padding: 0 40px;
                }

                .logo-hero-img {
                    top: 20px;
                    width: 150px;
                }

                .mobile-linktree {
                    gap: 8px;
                }

                .btn-minimal-warranty {
                    padding: 10px 15px;
                    font-size: 0.75rem;
                }
            }

            /* Responsive Measure Section */
            .measure-wrapper {
                flex-direction: column;
                gap: 30px;
            }

            .measure-full-section {
                padding: 0;
                min-height: 100vh;
                background-image: url('https://assets.betalabs.net/production/reisman/extra_fields/272/phpknxenO1741809568.jpg?q=80&w=600&auto=format&fit=crop');
                background-size: cover;
                background-position: center;
            }

            .measure-full-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.75);
                z-index: 0;
            }

            .measure-wrapper {
                flex-direction: column;
                gap: 0;
                height: auto;
                min-height: 100vh;
                justify-content: center;
                position: relative;
                z-index: 2;
            }

            .measure-text-col {
                text-align: left;
                order: 1;
                flex: 0 0 100%;
                max-width: 100%;
                padding: 0 40px;
                background: transparent !important;
            }

            .measure-image-col {
                display: none;
            }

            #ajuste .measure-text-col span {
                color: rgba(255, 255, 255, 0.6) !important;
            }

            #ajuste .measure-text-col h2 {
                color: var(--white) !important;
            }

            #ajuste .measure-text-col p {
                color: rgba(255, 255, 255, 0.8) !important;
            }

            #ajuste .care-watermark {
                color: var(--white) !important;
                opacity: 0.015 !important;
            }

            #ajuste .care-mobile-photo {
                display: none !important;
            }

            #ajuste .care-tabs-list {
                align-items: flex-start;
                border-left: none;
                border-top: 1px solid rgba(255, 255, 255, 0.2);
                margin-top: 50px;
            }

            #ajuste .care-list-item {
                color: rgba(255, 255, 255, 0.6);
                justify-content: flex-start;
                padding: 25px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                font-size: 1.1rem;
            }

            #ajuste .care-list-item::before {
                display: none;
            }

            #ajuste .care-list-item:hover {
                padding-left: 0;
            }

            .signature-svg {
                width: 120px;
                bottom: -25px;
                right: -20px;
            }

            /* Responsive Care Section */
            .care-section {
                padding: 0;
                min-height: 100vh;
                height: auto;
            }

            .care-wrapper {
                flex-direction: column;
                gap: 0;
                height: 100vh;
                min-height: 100vh;
                justify-content: center;
            }

            .care-text-col {
                text-align: left;
                order: 1;
                flex: 0 0 100%;
                max-width: 100%;
                padding: 0 40px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .care-text-col h2 {
                font-size: 3.5rem !important;
                font-style: italic;
                font-weight: 300;
                margin-bottom: 30px !important;
                line-height: 1.1 !important;
            }

            .care-image-col {
                display: none;
            }

            .care-tabs-list {
                border-left: none;
                border-top: 1px solid var(--gray-light);
                margin-top: 50px;
            }

            .care-list-item {
                justify-content: flex-start;
                padding: 25px 0;
                border-bottom: 1px solid var(--gray-light);
                font-size: 1.1rem;
            }

            .care-list-item::before {
                display: none;
            }

            .care-list-item.active {
                padding-left: 0;
                font-size: 1.2rem;
            }

            .care-watermark {
                font-size: 100vw;
                top: 50%;
                opacity: 0.015;
                transform: translate(-50%, -50%) rotate(-90deg);
            }

            .care-mobile-photo {
                display: none !important;
            }

            .modal-paper {
                padding: 30px 20px;
                max-width: 90%;
                margin: 20px auto;
                max-height: 80vh;
            }

            .col-md-4 {
                flex: 0 0 50%;
                max-width: 50%;
                padding-left: 6px;
                padding-right: 6px;
            }

            /* Responsive Editorial Section */
            .editorial-section {
                background-image: none;
                background-color: var(--bg-warm);
            }

            .editorial-section::before {
                display: none;
            }

            .editorial-wrapper {
                flex-direction: column;
                position: relative;
                z-index: 2;
            }

            .editorial-text-col {
                flex: 0 0 100%;
                background: transparent;
                color: var(--black);
                padding: 0 40px;
                text-align: left;
                order: 1;
            }

            .editorial-image-col {
                display: none;
            }

            .editorial-text-col h2 {
                color: var(--black);
                font-size: 2.5rem !important;
                margin-bottom: 20px;
            }

            .editorial-text-col p {
                color: var(--gray-dark);
            }

            .btn-gallery-cta {
                border-color: var(--black);
                color: var(--black);
            }

            .btn-gallery-cta:hover {
                background: var(--black);
                color: var(--white);
            }

            .gallery-counter {
                font-size: 2rem;
            }

            .measure-text-col h2 {
                font-size: 3.5rem !important;
                font-style: italic;
                font-weight: 300;
                margin-bottom: 30px !important;
                line-height: 1.1 !important;
            }

            .row.justify-content-center {
                margin-left: -6px;
                margin-right: -6px;
            }

            .story-card-container {
                padding-bottom: 150%;
            }

            .story-title {
                font-size: 0.85rem;
                margin-bottom: 5px;
            }

            .story-icon {
                font-size: 1.6rem;
                margin-bottom: 10px;
            }

            .story-hint {
                font-size: 0.55rem;
                padding: 3px 8px;
            }
        }
    </style>
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N5VB6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div id="videoModal" class="modal-overlay">
        <div class="modal-content-wrapper" style="max-width: 800px;">
            <span class="close-modal-video" onclick="closeVideo()">× Fechar</span>
            <div id="videoContainer"
                style="position: relative; padding-bottom: 56.25%; height: 0; background: #000; overflow: hidden; border-radius: 8px;">
                <iframe id="videoFrame" src=""
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <div class="video-audio-control" style="bottom: 20px; right: 20px;" onclick="toggleModalAudio(this)">
                    <i class="fas fa-volume-mute"></i>
                </div>
            </div>
        </div>
    </div>

    <div id="warrantyModal" class="modal-overlay">
        <div class="modal-paper">
            <span class="close-modal" onclick="closeWarranty()">×</span>
            <img src="{{ path('logo-novo-preto.svg') }}" width="140" style="margin-bottom: 20px; opacity: 0.8;"
                alt="Reisman">
            <h2>Garantia</h2>
            <h3 style="font-size: 1.2rem; font-style: italic; color: var(--gray-dark);">Uma joia para sempre.</h3>
            <div class="paper-text">
                <p>Adquirir uma joia Reisman significa receber mais de 55 anos de experiência e cuidado. A fabricação
                    acontece com matérias-primas de alta qualidade, individualmente inspecionadas.</p>
                <p>Nossa garantia oferece <strong>um ano</strong> contra defeito de fabricação (superior aos 90 dias do
                    CDC).</p>
                <p>A garantia Reisman é <strong>vitalícia</strong> para autenticidade do Ouro 18K 750 e Diamantes
                    Naturais. Limpeza e polimento também são gratuitos, por tempo indeterminado.</p>
                <div class="highlight-box">
                    <strong>Pontos Importantes:</strong>
                    <ul>
                        <li>Devolução em 10 dias corridos;</li>
                        <li>O <strong>primeiro</strong> ajuste é gratuito no período de 1 ano. Caso a numeração
                            ultrapasse o padrão de confecção, poderá incidir custos.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section id="hero" class="container-fluid hero-full-split p-0">
        <div class="row no-gutters split-row">
            <div class="col-md-6 col-lg-6 col-text reveal">
                <div class="text-content-wrapper">
                    <img src="{{ path('logo-novo-preto.svg') }}" class="logo-hero-img" alt="Reisman">

                    <div class="hero-desktop-content">
                        <span
                            style="font-family: 'Montserrat', sans-serif; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 3px; color: var(--gray-med); display: block; margin-bottom: 15px; font-weight: 600;">Exclusive
                            Access</span>
                        <h1 class="hero-title font-serif"
                            style="font-style: italic; font-size: 3.5rem; margin-bottom: 30px;">Manual do Proprietário
                        </h1>
                        <a href="/garantia" class="btn-minimal-warranty">Termos de Garantia</a>
                    </div>

                    <div class="mobile-linktree" style="display: none;">
                        <a href="#cuidados" class="btn-minimal-warranty">Manutenção & Cuidados</a>
                        <a href="#ajuste" class="btn-minimal-warranty">Ajuste & Medida</a>
                        <a href="#galeria" class="btn-minimal-warranty">Galeria de Clientes</a>
                        <a href="/garantia" class="btn-minimal-warranty">Termos de Garantia</a>
                        <div class="mobile-footer-text" style="display: none;">
                            <span
                                style="font-family: 'Montserrat', sans-serif; font-size: 0.65rem; text-transform: uppercase; letter-spacing: 3px; color: rgba(255,255,255,0.5); display: block; margin-bottom: 5px; font-weight: 500;">Exclusive
                                Access</span>
                            <span
                                style="font-family: 'Montserrat', sans-serif; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 3px; color: rgba(255,255,255,0.7); font-weight: 600;">Manual
                                do Proprietário</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-video reveal">
                <div class="video-blocker"></div>
                <img src="https://img.youtube.com/vi/UPvTA6fwKCw/maxresdefault.jpg" class="video-poster"
                    alt="Reisman Craftsmanship">
                <iframe class="video-background-iframe"
                    src="https://www.youtube.com/embed/UPvTA6fwKCw?autoplay=1&mute=1&controls=0&loop=1&playlist=UPvTA6fwKCw&modestbranding=1&rel=0&showinfo=0&iv_load_policy=3&fs=0&disablekb=1&playsinline=1&enablejsapi=1"
                    title="Reisman Craftsmanship" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen
                    loading="eager"></iframe>
            </div>
        </div>
        <div class="scroll-down-indicator" onclick="window.scrollBy({top: window.innerHeight, behavior: 'smooth'})">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <section id="cuidados" class="care-section reveal">
        <div class="care-wrapper">
            <div class="care-image-col">
                <img src="https://assets.betalabs.net/production/reisman/extra_fields/272/php7b3nv71687784478.jpg?q=80&w=1200&auto=format&fit=crop"
                    class="care-full-img" alt="Cuidados Especiais">
            </div>
            <div class="care-text-col">
                <div class="care-watermark">Care</div>
                <span
                    style="letter-spacing: 2px; text-transform: uppercase; color: var(--gray-med); font-size: 0.8rem; font-weight: 600;">Manutenção</span>
                <h2 class="font-serif"
                    style="font-size: 2rem; color: var(--black); margin-bottom: 20px; margin-top: 10px; line-height: 1.2;">
                    Cuidados Especiais</h2>
                <p style="font-size: 0.95rem; color: var(--gray-dark); line-height: 1.7; margin-bottom: 30px;">
                    Para manter sua joia sempre impecável, preparamos guias exclusivos de limpeza e conservação.
                </p>

                <div class="care-tabs-list">
                    <div class="care-list-item" onclick="openVideo('1r81jvevefI', true)">
                        <span>01. Limpeza em Casa</span>
                    </div>
                    <div class="care-list-item" onclick="openVideo('lf7Wws_ok2Q', true)">
                        <span>02. Dicas de Cuidados</span>
                    </div>
                    <div class="care-list-item" onclick="openVideo('aIxgVqaXh9U', true)">
                        <span>03. Manutenção Ouro Branco</span>
                    </div>
                </div>

                <div class="care-mobile-photo reveal">
                    <div class="care-photo-frame">
                        <img src="https://assets.betalabs.net/production/reisman/extra_fields/272/php7b3nv71687784478.jpg?q=80&w=600&auto=format&fit=crop"
                            class="care-photo-img" alt="Cuidados Especiais">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ajuste" class="measure-full-section reveal">
        <div class="measure-wrapper">
            <div class="measure-text-col">
                <div class="care-watermark">Measure</div>
                <span
                    style="letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem; font-weight: 600;">Suporte
                    & Cuidado</span>
                <h2 class="font-serif"
                    style="font-size: 2rem; margin-bottom: 20px; margin-top: 10px; line-height: 1.2;">A Medida Ideal
                </h2>
                <p style="font-size: 0.95rem; line-height: 1.7; margin-bottom: 30px;">
                    Garantimos que sua joia tenha o ajuste perfeito. Assista ao vídeo para conferir como medir
                    corretamente, ou entre em contato para que possamos te ajudar.
                </p>
                <div class="care-tabs-list">
                    <div class="care-list-item" onclick="openVideo('DKRAcdjVJ78', true)">
                        <span><i class="fas fa-play" style="font-size: 0.7rem; margin-right: 10px; opacity: 0.7;"></i>
                            Assistir Guia de Medição</span>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=5512991524367&text=Ol%C3%A1%2C%20gostaria%20de%20solicitar%20ajuste%20de%20medida"
                        target="_blank" class="care-list-item" style="text-decoration: none;">
                        <span><i class="fas fa-ruler"
                                style="font-size: 0.7rem; margin-right: 10px; opacity: 0.7;"></i> Solicitar Ajuste de
                            Medida</span>
                    </a>
                </div>

                <div class="care-mobile-photo reveal">
                    <div class="care-photo-frame">
                        <img src="https://assets.betalabs.net/production/reisman/extra_fields/272/phpknxenO1741809568.jpg?q=80&w=600&auto=format&fit=crop"
                            class="care-photo-img" alt="Ajuste Perfeito">
                    </div>
                </div>
            </div>
            <div class="measure-image-col">
                <img src="https://assets.betalabs.net/production/reisman/extra_fields/272/phpknxenO1741809568.jpg?q=80&w=1200&auto=format&fit=crop"
                    class="measure-full-img" alt="Ajuste Perfeito">
            </div>
        </div>
    </section>

    <section id="galeria" class="editorial-section">
        <div class="editorial-wrapper">
            <div class="editorial-text-col">
                <span
                    style="letter-spacing: 2px; text-transform: uppercase; color: var(--gray-med); font-size: 0.8rem; font-weight: 600; display: block; margin-bottom: 10px;">Social
                    Media</span>
                <h2 class="font-serif"
                    style="font-size: 2.5rem; color: var(--black); margin-bottom: 20px; line-height: 1.2;">Você faz
                    parte da nossa história</h2>
                <p style="font-size: 1rem; color: var(--gray-dark); line-height: 1.7; margin-bottom: 35px;">
                    Cada joia carrega um sentimento único. Adoraríamos ver como o seu "para sempre" começou.
                    <br>Compartilhe seu momento marcando <strong>@reisman_aliancas</strong>.
                </p>
                <a href="https://instagram.com/reisman_aliancas/tagged" target="_blank" class="btn-gallery-cta">
                    Ver Galeria de Clientes
                </a>
                <div class="gallery-stats">
                    <div class="gallery-counter" data-target="10000">0</div>
                    <span class="gallery-label">Histórias de Amor</span>
                </div>
            </div>
            <div class="editorial-image-col">
                <div class="gallery-marquee-col marquee-up">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpKmDttK1678187511.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpda7l171678187522.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpfCTPeK1678187533.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/php2G7Sh91678187544.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phphOjX3Z1678187554.jpg"
                        alt="Cliente Reisman">
                    <!-- Duplicate for Loop -->
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpKmDttK1678187511.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpda7l171678187522.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpfCTPeK1678187533.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/php2G7Sh91678187544.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phphOjX3Z1678187554.jpg"
                        alt="Cliente Reisman">
                </div>
                <div class="gallery-marquee-col marquee-down">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpIGMSvs1678187565.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/382/phpZamjk91729521031.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/381/phpeDuvtc1729521031.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/380/php6zgKp81729521472.png"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/380/phpjxIWon1729521601.jpg"
                        alt="Cliente Reisman">
                    <!-- Duplicate for Loop -->
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpIGMSvs1678187565.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/382/phpZamjk91729521031.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/381/phpeDuvtc1729521031.jpg"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/380/php6zgKp81729521472.png"
                        alt="Cliente Reisman">
                    <img src="https://assets.betalabs.net/production/reisman/extra_fields/380/phpjxIWon1729521601.jpg"
                        alt="Cliente Reisman">
                </div>
            </div>
        </div>
    </section>

    <div id="colecoes" class="nav-footer">
        <div class="container">
            <h3>Explore Nossas Coleções</h3>
            <div class="nav-grid">
                <a href="/aneis-de-noivado" class="nav-card">
                    <i class="fas fa-ring"></i>
                    <span>Anéis de Noivado</span>
                </a>
                <a href="/aliancas-de-casamento" class="nav-card">
                    <i class="fas fa-infinity"></i>
                    <span>Alianças de Casamento</span>
                </a>
                <a href="/aparadores-de-aliancas" class="nav-card">
                    <i class="fas fa-layer-group"></i>
                    <span>Aparadores</span>
                </a>
                <a href="/brincos-de-ouro-18k" class="nav-card">
                    <i class="fas fa-star"></i>
                    <span>Brincos de Ouro</span>
                </a>
            </div>

            <div style="margin-top: 80px; margin-bottom: 20px;">
                <img src="{{ path('logo-novo-preto.svg') }}"
                    style="width: 100px; filter: brightness(0) invert(1); opacity: 0.3;" alt="Reisman">
            </div>
            <div style="opacity: 0.3; font-size: 0.7rem; letter-spacing: 1px;">
                © 2026, REISMAN TODOS OS DIREITOS RESERVADOS CNPJ: 10.423.979/0001-64
            </div>
        </div>
    </div>

    <div class="scroll-dots-nav">
        <a href="#hero" class="scroll-dot active" title="Início"></a>
        <a href="#cuidados" class="scroll-dot" title="Cuidados"></a>
        <a href="#ajuste" class="scroll-dot" title="Ajuste"></a>
        <a href="#galeria" class="scroll-dot" title="Galeria"></a>
        <a href="#colecoes" class="scroll-dot" title="Coleções"></a>
    </div>

    <div id="backToTop" class="back-to-top" title="Voltar ao Topo">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function reveal() {
                var reveals = document.querySelectorAll(".reveal");
                for (var i = 0; i < reveals.length; i++) {
                    var windowHeight = window.innerHeight;
                    var elementTop = reveals[i].getBoundingClientRect().top;
                    var elementVisible = 100;
                    if (elementTop < windowHeight - elementVisible) {
                        reveals[i].classList.add("active");
                    }
                }
            }
            window.addEventListener("scroll", reveal);
            reveal();

            // Hide Video Poster after load
            setTimeout(function() {
                var poster = document.querySelector('.video-poster');
                if (poster) poster.classList.add('hidden');
            }, 2500);

            // Scroll Dots Logic
            const sections = document.querySelectorAll('section, .nav-footer');
            const navDots = document.querySelectorAll('.scroll-dot');

            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (window.scrollY >= (sectionTop - window.innerHeight / 2)) {
                        current = section.getAttribute('id');
                    }
                });
                navDots.forEach(dot => {
                    dot.classList.remove('active');
                    if (dot.getAttribute('href').includes(current)) {
                        dot.classList.add('active');
                    }
                });
            });

            // Back to Top Logic
            const backToTopBtn = document.getElementById('backToTop');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 500) backToTopBtn.classList.add('show');
                else backToTopBtn.classList.remove('show');
            });
            backToTopBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Watermark Dynamic Opacity Effect
            const watermarks = document.querySelectorAll('.care-watermark');

            if (watermarks.length > 0) {
                window.addEventListener('scroll', () => {
                    const windowHeight = window.innerHeight;

                    watermarks.forEach(wm => {
                        const section = wm.closest('section');
                        if (section) {
                            const rect = section.getBoundingClientRect();

                            if (rect.top < windowHeight && rect.bottom > 0) {
                                // Calculate progress based on center position
                                const centerDist = Math.abs((rect.top + rect.height / 2) - (
                                    windowHeight / 2));
                                const maxDist = (windowHeight / 2) + (rect.height / 2);
                                const progress = Math.max(0, 1 - (centerDist /
                                maxDist)); // 1 = center, 0 = edge

                                // Vary opacity between 0.005 and 0.025
                                wm.style.opacity = (0.005 + (progress * 0.02)).toFixed(3);
                            }
                        }
                    });
                });
            }

            // Gallery Counter Animation
            const galleryStats = document.querySelector('.gallery-stats');
            const galleryCounter = document.querySelector('.gallery-counter');
            const editorialSection = document.querySelector('.editorial-section');
            let counterAnimated = false;

            if (galleryStats && galleryCounter) {
                window.addEventListener('scroll', () => {
                    const rect = galleryStats.getBoundingClientRect();

                    // Background Transition
                    if (editorialSection) {
                        const sectionRect = editorialSection.getBoundingClientRect();
                        if (sectionRect.top < window.innerHeight / 1.5 && sectionRect.bottom > window
                            .innerHeight / 3) {
                            editorialSection.classList.add('romantic-mode');
                        } else {
                            editorialSection.classList.remove('romantic-mode');
                        }
                    }

                    if (rect.top < window.innerHeight && rect.bottom > 0 && !counterAnimated) {
                        galleryStats.classList.add('visible');
                        counterAnimated = true;
                        galleryCounter.innerText = "10k+";
                    }
                });
            }
        });

        // Generic Video Modal (Used by Measure Section)
        function openVideo(videoId, isShort) {
            var modal = document.getElementById('videoModal');
            var iframe = document.getElementById('videoFrame');
            var container = document.getElementById('videoContainer');
            var wrapper = document.querySelector('#videoModal .modal-content-wrapper');

            if (isShort) {
                container.style.paddingBottom = '177.77%'; // 9:16 (Shorts)
                wrapper.style.maxWidth = '400px';
            } else {
                container.style.paddingBottom = '56.25%'; // 16:9 (Standard)
                wrapper.style.maxWidth = '800px';
            }

            // Native-like reproduction: Muted Autoplay + No Controls + Loop
            // mute=1 is essential for autoplay to work reliably in modern browsers/modals
            var params = "?autoplay=1&mute=1&controls=0&loop=1&playlist=" + videoId +
                "&modestbranding=1&rel=0&showinfo=0&iv_load_policy=3&fs=0&disablekb=1&playsinline=1&enablejsapi=1";
            iframe.src = "https://www.youtube.com/embed/" + videoId + params;

            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';

            // Reset Audio Icon
            modalVideoMuted = true;
            var icon = document.querySelector('#videoModal .video-audio-control i');
            if (icon) icon.className = 'fas fa-volume-mute';
        }

        function closeVideo() {
            var modal = document.getElementById('videoModal');
            var iframe = document.getElementById('videoFrame');
            iframe.src = "";
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Modal Audio Control
        var modalVideoMuted = true;

        function toggleModalAudio(btn) {
            var iframe = document.getElementById('videoFrame');
            var icon = btn.querySelector('i');
            if (modalVideoMuted) {
                iframe.contentWindow.postMessage('{"event":"command","func":"unMute","args":""}', '*');
                icon.className = 'fas fa-volume-up';
                modalVideoMuted = false;
            } else {
                iframe.contentWindow.postMessage('{"event":"command","func":"mute","args":""}', '*');
                icon.className = 'fas fa-volume-mute';
                modalVideoMuted = true;
            }
        }

        // Warranty Modal
        function openWarranty() {
            document.getElementById('warrantyModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeWarranty() {
            document.getElementById('warrantyModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('warrantyModal')) closeWarranty();
            if (event.target == document.getElementById('videoModal')) closeVideo();
        }

        // Random Color Pop for Mural
        document.addEventListener("DOMContentLoaded", function() {
            var images = document.querySelectorAll('.editorial-mural-img');
            if (images.length > 0) {
                setInterval(function() {
                    var randomIndex = Math.floor(Math.random() * images.length);
                    var selectedImg = images[randomIndex];

                    selectedImg.style.setProperty('--gray-amount', '0%');

                    setTimeout(function() {
                        selectedImg.style.setProperty('--gray-amount', '100%');
                    }, 4000);
                }, 7000);
            }
        });

        // Inline Video Player for Measure Section
        function playInlineVideo(container, videoId) {
            container.classList.add('playing');
            container.innerHTML = '<iframe src="https://www.youtube.com/embed/' + videoId +
                '?autoplay=1&rel=0&modestbranding=1&playsinline=1" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            container.onclick = null;
        }
    </script>
</body>

</html>
