<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puncak Mas Gallery - Luxury Interior Design</title>
    <link href="https://api.fontshare.com/v2/css?f[]=boska@400,500,600,700&f[]=satoshi@300,400,500,700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /**
        * @license
        *
        * Font Family: Boska
        * Designed by: Barbara Bigosinska
        * URL: https://www.fontshare.com/fonts/boska
        * © 2025 Indian Type Foundry
        */

        /* Custom Tailwind configuration */
        @layer utilities {
            .font-boska {
                font-family: 'Boska', serif;
            }
            .font-satoshi {
                font-family: 'Satoshi', sans-serif;
            }
        }

        .header-home {
            color: #F7F2EB;
        }

        .header-shell {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            border: 1px solid rgba(247, 242, 235, 0.14);
            border-radius: 999px;
            background:
                linear-gradient(180deg, rgba(20, 20, 20, 0.82), rgba(12, 12, 12, 0.76));
            box-shadow: 0 20px 70px rgba(10, 10, 10, 0.28);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            overflow: hidden;
        }

        .header-shell::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(255, 255, 255, 0.06), transparent 24%, transparent 76%, rgba(255, 255, 255, 0.04)),
                linear-gradient(180deg, rgba(216, 178, 138, 0.08), transparent 42%);
            pointer-events: none;
        }

        .header-brand {
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            z-index: 1;
            min-width: 0;
            padding: 0.7rem 1rem 0.7rem 1.2rem;
        }

        .header-brand::after {
            content: "";
            width: 1px;
            height: 2.25rem;
            background: linear-gradient(180deg, rgba(247, 242, 235, 0.18), rgba(247, 242, 235, 0.04));
        }

        .header-logo {
            display: block;
            width: auto;
            height: 2rem;
            object-fit: contain;
            filter: brightness(1.04);
        }

        .header-brand-note {
            font-family: 'Satoshi', sans-serif;
            font-size: 10px;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.54);
            white-space: nowrap;
        }

        .header-nav {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 0.15rem;
            margin-left: auto;
            padding: 0 0.4rem;
        }

        .header-link {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.95rem 1rem;
            font-family: 'Satoshi', sans-serif;
            font-size: 11px;
            letter-spacing: 0.26em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.68);
            transition:
                color 350ms ease,
                transform 350ms ease;
        }

        .header-link::after {
            content: "";
            position: absolute;
            left: 1rem;
            right: 1rem;
            bottom: 0.78rem;
            height: 1px;
            background: linear-gradient(90deg, rgba(216, 178, 138, 0.92), rgba(216, 178, 138, 0.12));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 350ms cubic-bezier(0.16, 1, 0.3, 1);
        }

        .header-link:hover {
            color: rgba(247, 242, 235, 0.96);
            transform: translateY(-1px);
        }

        .header-link:hover::after {
            transform: scaleX(1);
        }

        .header-cta {
            position: relative;
            z-index: 1;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            padding: 0.95rem 1.2rem;
            border-left: 1px solid rgba(247, 242, 235, 0.1);
            font-family: 'Satoshi', sans-serif;
            font-size: 11px;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: rgba(247, 242, 235, 0.9);
            transition:
                color 350ms ease,
                background-color 350ms ease;
        }

        .header-cta::before {
            content: "";
            width: 0.45rem;
            height: 0.45rem;
            border-radius: 999px;
            background: #d8b28a;
            box-shadow: 0 0 0 0 rgba(216, 178, 138, 0.26);
            transition: box-shadow 350ms ease, transform 350ms ease;
        }

        .header-cta:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.04);
        }

        .header-cta:hover::before {
            transform: scale(1.04);
            box-shadow: 0 0 0 8px rgba(216, 178, 138, 0.08);
        }
        
        .hero-heading {
            font-family: 'Boska' !important;
            font-weight: 200 !important;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 0.02em;
            line-height: 1;
            letter-spacing: -0.022em;
        }

        .hero-heading-line {
            display: block;
            line-height: 0.9;
            white-space: nowrap;
        }

        .hero-heading-line-last {
            display: flex;
            align-items: flex-end;
            gap: 0.08em;
            white-space: nowrap;
        }

        .hero-heading-line-last .h3-about-celcius {
            transform: translateY(-0.08em);
        }

        .h3-about {
            font-family: 'Satoshi', sans-serif;
            font-size: 35px;
            font-weight: 300;
            line-height: 1.6;
            letter-spacing: -0.02em;
        }

        .h3-about-celcius {
            font-family: 'Satoshi', sans-serif;
            font-size: 25px;
            font-weight: 300;
            line-height: 1;
            letter-spacing: -0.02em;
        }

        .p-about {
            font-family: 'Satoshi', sans-serif;
            font-size: 15px;
        }
        
        .readmore-about {
            font-family: 'Satoshi', sans-serif;
            font-size: 15px;
            font-weight: 300;
            line-height: 1.6;
            letter-spacing: -0.02em;
        }

        .offer-list {
            display: flex;
            flex-direction: column;
            gap: 0.15rem;
            margin-bottom: 2rem;
        }

        .offer-item {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 1.2rem;
            align-items: start;
            padding: 0.8rem 0;
            border-bottom: 1px solid rgba(44, 44, 44, 0.12);
            transition: border-color 220ms ease, transform 220ms ease;
        }

        .offer-item:hover {
            border-color: rgba(216, 178, 138, 0.55);
            transform: translateX(3px);
        }

        .offer-number {
            min-width: 2.4rem;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            font-family: 'Satoshi', sans-serif;
            font-size: 0.78rem;
            font-weight: 500;
            line-height: 1;
            letter-spacing: 0.18em;
            color: rgba(216, 178, 138, 0.95);
            flex-shrink: 0;
            padding-top: 0.38rem;
        }

        .offer-text {
            font-family: 'Satoshi', sans-serif;
            font-size: 16px;
            line-height: 1.72;
            color: #2c2c2c;
            max-width: 32rem;
        }

        .offer-philosophy {
            padding-top: 1rem;
            border-top: 1px solid rgba(216, 178, 138, 0.55);
        }
        
        .h2-porto {
            font-family: 'Boska' !important;
            font-size: 55px;
            font-weight: 500px !important;
            line-height: 0.9;
            letter-spacing: -0.02em;
        }

        .h2-timeline {
            font-family: 'Boska' !important;
            font-size: 75px;
            font-weight: 400px !important;
            line-height: 0.9;
            letter-spacing: -0.02em;
        }

        .section-heading {
            font-family: 'Boska', serif;
            font-weight: 300;
            line-height: 1.2;
        }

        /* Custom colors matching the image */
        .text-darkCharcoal {
            color: #2c2c2c;
        }
        
        .text-warmGray {
            color: #666666;
        }

        @keyframes luxuryCardReveal {
            0% {
                opacity: 0;
                transform: translateY(20px) scale(0.985);
                filter: blur(8px);
            }
            65% {
                opacity: 1;
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
                filter: blur(0);
            }
        }

        .project-slide-card {
            will-change: transform, opacity, filter;
            backface-visibility: hidden;
            transform: translateZ(0);
        }

        .project-thumb {
            aspect-ratio: 4 / 3;
        }

        @keyframes heroSheenSweep {
            0% {
                opacity: 0;
                transform: translateX(-46%) skewX(-14deg);
            }
            18% {
                opacity: 0.26;
            }
            100% {
                opacity: 0;
                transform: translateX(158%) skewX(-14deg);
            }
        }

        .hero-intro-item {
            opacity: 1;
            transform: none;
            filter: none;
        }

        .hero-media {
            transform: scale(1);
            filter: saturate(1);
        }

        .hero-overlay {
            opacity: 1;
        }

        .hero-sheen {
            opacity: 0;
            pointer-events: none;
        }

        body.hero-preload .hero-intro-item {
            opacity: 0;
            transform: translateY(26px);
            filter: blur(6px);
        }

        body.hero-ready .hero-intro-item {
            opacity: 1;
            transform: translateY(0);
            filter: blur(0);
            transition:
                opacity 900ms cubic-bezier(0.16, 1, 0.3, 1),
                transform 900ms cubic-bezier(0.16, 1, 0.3, 1),
                filter 900ms cubic-bezier(0.16, 1, 0.3, 1);
            transition-delay: var(--intro-delay, 0ms);
        }

        body.hero-preload .hero-media {
            transform: scale(1.08);
            filter: saturate(0.9);
        }

        body.hero-ready .hero-media {
            transform: scale(1);
            filter: saturate(1);
            transition:
                transform 1800ms cubic-bezier(0.16, 1, 0.3, 1),
                filter 1800ms cubic-bezier(0.16, 1, 0.3, 1);
        }

        body.hero-preload .hero-overlay {
            opacity: 0.38;
        }

        body.hero-ready .hero-overlay {
            opacity: 1;
            transition: opacity 1500ms cubic-bezier(0.16, 1, 0.3, 1);
        }

        body.hero-ready .hero-sheen {
            animation: heroSheenSweep 1800ms cubic-bezier(0.22, 1, 0.36, 1) 420ms 1;
        }

        @keyframes ambientFloat {
            0%, 100% {
                transform: translate3d(0, 0, 0) scale(1);
            }
            50% {
                transform: translate3d(0, -18px, 0) scale(1.04);
            }
        }

        .ambient-orb {
            animation: ambientFloat 7.5s ease-in-out infinite;
            will-change: transform;
        }

        .hero-frame {
            transform: translateY(0);
            transition: transform 900ms cubic-bezier(0.16, 1, 0.3, 1);
        }

        body.hero-preload .hero-frame {
            transform: translateY(24px);
        }

        .luxury-parallax {
            will-change: transform;
            transform: translate3d(0, 0, 0);
        }

        .luxury-scroll-reveal {
            opacity: 0;
            transform: translateY(34px) scale(0.985);
            filter: blur(10px);
            transition:
                opacity 950ms cubic-bezier(0.16, 1, 0.3, 1),
                transform 950ms cubic-bezier(0.16, 1, 0.3, 1),
                filter 950ms cubic-bezier(0.16, 1, 0.3, 1);
            transition-delay: var(--reveal-delay, 0ms);
            will-change: opacity, transform, filter;
        }

        .luxury-scroll-reveal.is-visible {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0);
        }

        #timeline .luxury-scroll-reveal {
            filter: none;
        }

        #contact .luxury-scroll-reveal,
        .site-footer .luxury-scroll-reveal {
            filter: none;
        }

        .section-divider {
            position: relative;
            overflow: hidden;
        }

        .section-divider::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, rgba(44, 44, 44, 0.78), rgba(44, 44, 44, 0.08));
            transform: scaleX(0.12);
            transform-origin: left;
            opacity: 0.28;
            transition: transform 1.1s cubic-bezier(0.16, 1, 0.3, 1), opacity 1.1s ease;
        }

        .section-divider.is-visible::after {
            transform: scaleX(1);
            opacity: 1;
        }

        .project-card-shell {
            transition: transform 650ms cubic-bezier(0.16, 1, 0.3, 1), box-shadow 650ms cubic-bezier(0.16, 1, 0.3, 1);
        }

        .project-card-shell:hover {
            transform: translateY(-10px);
            box-shadow: 0 28px 80px rgba(44, 44, 44, 0.12);
        }

        .project-card-shell::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(255,255,255,0) 35%, rgba(12,12,12,0.14) 100%);
            opacity: 0;
            transition: opacity 500ms ease;
            pointer-events: none;
        }

        .project-card-shell:hover::after {
            opacity: 1;
        }

        .timeline-step {
            position: relative;
            padding-left: 1.5rem;
        }

        .timeline-step.luxury-scroll-reveal {
            transform: translateY(24px);
            filter: none;
        }

        .timeline-step::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.35rem;
            bottom: 2rem;
            width: 1px;
            background: linear-gradient(180deg, rgba(44, 44, 44, 0.52), rgba(44, 44, 44, 0.08));
            opacity: 0.3;
            transform: scaleY(0.3);
            transform-origin: top;
            transition: transform 900ms cubic-bezier(0.16, 1, 0.3, 1), opacity 900ms ease;
        }

        .timeline-step::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -1px;
            height: 1px;
            background: linear-gradient(90deg, rgba(44, 44, 44, 0.88), rgba(44, 44, 44, 0.08));
            transform: scaleX(0.08);
            transform-origin: left;
            opacity: 0.4;
            transition: transform 900ms cubic-bezier(0.16, 1, 0.3, 1), opacity 900ms ease;
        }

        .timeline-step.is-visible::before {
            transform: scaleY(1);
            opacity: 0.75;
        }

        .timeline-step.is-visible::after {
            transform: scaleX(1);
            opacity: 0.92;
        }

        .timeline-step-shell {
            position: relative;
            padding: 0.25rem 0;
            border-radius: 1.5rem;
            transition:
                transform 750ms cubic-bezier(0.16, 1, 0.3, 1),
                background-color 750ms cubic-bezier(0.16, 1, 0.3, 1),
                box-shadow 750ms cubic-bezier(0.16, 1, 0.3, 1);
        }

        .timeline-step-shell::before {
            content: "";
            position: absolute;
            left: -1.5rem;
            top: 1rem;
            width: 0.5rem;
            height: 0.5rem;
            border-radius: 999px;
            background: #d2691e;
            opacity: 0;
            transform: scale(0.4);
            box-shadow: 0 0 0 0 rgba(210, 105, 30, 0.22);
            transition:
                opacity 650ms ease,
                transform 650ms cubic-bezier(0.16, 1, 0.3, 1),
                box-shadow 650ms cubic-bezier(0.16, 1, 0.3, 1);
        }

        .timeline-step:hover .timeline-step-shell {
            transform: translateX(8px);
            background-color: rgba(247, 242, 235, 0.75);
            box-shadow: 0 20px 50px rgba(44, 44, 44, 0.06);
        }

        .timeline-step:hover .timeline-step-shell::before {
            opacity: 1;
            transform: scale(1);
            box-shadow: 0 0 0 12px rgba(210, 105, 30, 0.08);
        }

        .timeline-step:hover::after {
            transform: scaleX(1);
            opacity: 1;
        }

        .timeline-index {
            min-width: 3rem;
            transition:
                color 650ms cubic-bezier(0.16, 1, 0.3, 1),
                transform 650ms cubic-bezier(0.16, 1, 0.3, 1),
                opacity 650ms ease;
        }

        .timeline-title {
            transition:
                color 650ms cubic-bezier(0.16, 1, 0.3, 1),
                transform 650ms cubic-bezier(0.16, 1, 0.3, 1),
                letter-spacing 650ms cubic-bezier(0.16, 1, 0.3, 1);
        }

        .timeline-body {
            transition:
                color 650ms cubic-bezier(0.16, 1, 0.3, 1),
                transform 650ms cubic-bezier(0.16, 1, 0.3, 1),
                opacity 650ms ease;
        }

        .timeline-step:hover .timeline-index {
            color: #2c2c2c;
            transform: translateY(-2px);
            opacity: 1;
        }

        .timeline-step:hover .timeline-title {
            color: #2c2c2c;
            transform: translateX(4px);
            letter-spacing: 0.01em;
        }

        .timeline-step:hover .timeline-body {
            color: #4a4a4a;
            transform: translateX(4px);
        }

        .contact-panel {
            position: relative;
            overflow: hidden;
        }

        .contact-panel::before {
            content: "";
            position: absolute;
            inset: -20% auto auto -12%;
            width: 280px;
            height: 280px;
            border-radius: 999px;
            background: radial-gradient(circle, rgba(210, 105, 30, 0.18) 0%, rgba(210, 105, 30, 0) 72%);
            pointer-events: none;
        }

        .contact-panel::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.05), transparent 34%),
                linear-gradient(180deg, rgba(232, 221, 212, 0.04), transparent 48%);
            pointer-events: none;
        }

        .contact-shell {
            position: relative;
            z-index: 1;
            max-width: 42rem;
        }

        .contact-kicker {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            font-family: 'Satoshi', sans-serif;
            font-size: 11px;
            letter-spacing: 0.35em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.72);
        }

        .contact-kicker::before {
            content: "";
            display: block;
            width: 2.5rem;
            height: 1px;
            background: linear-gradient(90deg, rgba(210, 105, 30, 0.95), rgba(210, 105, 30, 0.12));
        }

        .contact-ledger {
            margin-top: 3rem;
            border-top: 1px solid rgba(232, 221, 212, 0.18);
        }

        .contact-ledger-item {
            display: grid;
            grid-template-columns: minmax(0, 11rem) minmax(0, 1fr);
            gap: 1.25rem;
            padding: 1.4rem 0;
            border-bottom: 1px solid rgba(232, 221, 212, 0.12);
            transition:
                transform 650ms cubic-bezier(0.16, 1, 0.3, 1),
                border-color 650ms cubic-bezier(0.16, 1, 0.3, 1);
        }

        .contact-ledger-item:hover {
            transform: translateX(8px);
            border-color: rgba(232, 221, 212, 0.24);
        }

        .contact-ledger-label {
            font-family: 'Satoshi', sans-serif;
            font-size: 11px;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.52);
        }

        .contact-ledger-value {
            font-family: 'Satoshi', sans-serif;
            font-size: 15px;
            line-height: 1.7;
            color: rgba(247, 242, 235, 0.96);
            transition: color 400ms ease;
        }

        .contact-ledger-link:hover {
            color: #d8b28a;
        }

        .contact-map-card {
            position: relative;
            overflow: hidden;
            margin-top: 1rem;
            border: 1px solid rgba(232, 221, 212, 0.12);
            border-radius: 1.25rem;
            background: rgba(255, 255, 255, 0.03);
        }

        .contact-map-frame {
            position: relative;
            height: 11rem;
            background: rgba(255, 255, 255, 0.04);
        }

        .contact-map-embed {
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(1) contrast(1.05) brightness(0.88);
            opacity: 0.82;
            pointer-events: none;
        }

        .contact-map-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: flex-end;
            justify-content: flex-start;
            padding: 1rem;
            background: linear-gradient(180deg, rgba(10, 10, 10, 0.04) 0%, rgba(10, 10, 10, 0.62) 100%);
        }

        .contact-map-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            border-radius: 999px;
            border: 1px solid rgba(247, 242, 235, 0.16);
            background: rgba(10, 10, 10, 0.42);
            padding: 0.55rem 0.9rem;
            font-family: 'Satoshi', sans-serif;
            font-size: 10px;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: rgba(247, 242, 235, 0.94);
            transition:
                transform 400ms ease,
                border-color 400ms ease,
                background-color 400ms ease;
        }

        .contact-map-card:hover .contact-map-badge {
            transform: translateY(-2px);
            border-color: rgba(216, 178, 138, 0.36);
            background: rgba(10, 10, 10, 0.58);
        }

        .contact-map-badge span:last-child {
            letter-spacing: 0.08em;
        }

        .contact-side-note {
            margin-top: 2.25rem;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 1rem;
            font-family: 'Satoshi', sans-serif;
            font-size: 11px;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.46);
        }

        .contact-side-note span:last-child {
            letter-spacing: 0.3em;
            color: rgba(247, 242, 235, 0.78);
        }

        .site-footer {
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(circle at top left, rgba(210, 105, 30, 0.14), transparent 28%),
                linear-gradient(180deg, #080808 0%, #111111 100%);
        }

        .site-footer::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(232, 221, 212, 0.06) 0, rgba(232, 221, 212, 0.06) 1px, transparent 1px, transparent 100%);
            background-size: 22% 100%;
            opacity: 0.22;
            pointer-events: none;
        }

        .footer-shell {
            position: relative;
            z-index: 1;
        }

        .footer-main {
            align-items: start;
        }

        .footer-mark {
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            font-family: 'Satoshi', sans-serif;
            font-size: 11px;
            letter-spacing: 0.34em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.68);
        }

        .footer-mark::before {
            content: "";
            display: block;
            width: 2.75rem;
            height: 1px;
            background: linear-gradient(90deg, rgba(210, 105, 30, 0.92), rgba(210, 105, 30, 0.14));
        }

        .footer-brand-column,
        .footer-column {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .footer-summary {
            max-width: 42rem;
            font-family: 'Satoshi', sans-serif;
            font-size: 0.95rem;
            line-height: 1.8;
            color: rgba(232, 221, 212, 0.66);
        }

        .footer-summary-left {
            max-width: 20rem;
        }

        .footer-column-title {
            font-family: 'Satoshi', sans-serif;
            font-size: 10px;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.42);
        }

        .footer-links-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.8rem 2rem;
        }

        .footer-link-item {
            font-family: 'Satoshi', sans-serif;
            font-size: 12px;
            color: rgba(247, 242, 235, 0.88);
            transition: color 300ms ease, transform 300ms ease;
        }

        .footer-link-item:hover {
            color: #d8b28a;
            transform: translateX(3px);
        }

        .footer-grid {
            position: relative;
        }

        .footer-panel {
            position: relative;
            min-height: 100%;
            padding: 1.35rem 0 0.2rem;
        }

        .footer-panel::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 3rem;
            height: 1px;
            background: linear-gradient(90deg, rgba(216, 178, 138, 0.86), rgba(216, 178, 138, 0.12));
        }

        .footer-contact-top {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.25rem;
        }

        .footer-contact-mini {
            display: flex;
            flex-direction: column;
            gap: 0.55rem;
            color: rgba(247, 242, 235, 0.88);
        }

        .footer-contact-mini-label {
            display: inline-flex;
            align-items: center;
            gap: 0.55rem;
            font-family: 'Satoshi', sans-serif;
            font-size: 11px;
            color: rgba(232, 221, 212, 0.7);
        }

        .footer-contact-mini-value {
            font-family: 'Satoshi', sans-serif;
            font-size: 12px;
            line-height: 1.6;
        }

        .footer-social-links {
            display: flex;
            gap: 0.7rem;
        }

        .footer-social-link {
            width: 2.3rem;
            height: 2.3rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
            border: 1px solid rgba(216, 178, 138, 0.16);
            background: rgba(216, 178, 138, 0.06);
            color: rgba(216, 178, 138, 0.9);
            transition: transform 300ms ease, border-color 300ms ease, color 300ms ease, background-color 300ms ease;
        }

        .footer-social-link:hover {
            transform: translateY(-1px);
            border-color: rgba(216, 178, 138, 0.3);
            color: #f7f2eb;
            background: rgba(216, 178, 138, 0.12);
        }

        .footer-contact-address {
            margin-top: 0.25rem;
        }

        .footer-info-stack {
            margin-top: 1.35rem;
            display: flex;
            flex-direction: column;
            gap: 0.9rem;
        }

        .footer-info-line {
            display: flex;
            align-items: flex-start;
            gap: 0.85rem;
            width: fit-content;
            max-width: 100%;
            padding-bottom: 0.85rem;
            border-bottom: 1px solid rgba(232, 221, 212, 0.08);
        }

        .footer-info-icon-shell {
            width: 2rem;
            height: 2rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border: 1px solid rgba(216, 178, 138, 0.18);
            border-radius: 999px;
            background: rgba(216, 178, 138, 0.06);
            color: rgba(216, 178, 138, 0.86);
            margin-top: 0.05rem;
        }

        .footer-info-icon {
            width: 0.95rem;
            height: 0.95rem;
            display: block;
        }

        .footer-info-content {
            min-width: 0;
            flex: 1 1 auto;
        }

        .footer-hours-panel {
            padding: 1.35rem 1.35rem 1.1rem;
            border: 1px solid rgba(232, 221, 212, 0.1);
            border-radius: 1.2rem;
            background:
                linear-gradient(180deg, rgba(255, 255, 255, 0.045), rgba(255, 255, 255, 0.018));
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.04);
        }

        .footer-hours-label {
            font-family: 'Satoshi', sans-serif;
            font-size: 10px;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.42);
        }

        .footer-hours-value {
            margin-top: 1.2rem;
            font-family: 'Boska', serif;
            font-size: clamp(2rem, 3vw, 2.65rem);
            line-height: 0.95;
            color: rgba(247, 242, 235, 0.95);
        }

        .footer-hours-note {
            margin-top: 0.75rem;
            font-family: 'Satoshi', sans-serif;
            font-size: 11px;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.5);
        }

        .footer-aside {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
            padding-top: 0.5rem;
        }

        .footer-aside-copy {
            max-width: 18rem;
            font-family: 'Satoshi', sans-serif;
            font-size: 12px;
            line-height: 1.8;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.52);
        }

        .footer-back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.85rem;
            font-family: 'Satoshi', sans-serif;
            font-size: 11px;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: rgba(247, 242, 235, 0.86);
            transition: color 400ms ease, transform 400ms ease;
        }

        .footer-back-link::before {
            content: "";
            display: block;
            width: 2.25rem;
            height: 1px;
            background: linear-gradient(90deg, rgba(216, 178, 138, 0.9), rgba(216, 178, 138, 0.16));
        }

        .footer-back-link:hover {
            color: #d8b28a;
            transform: translateX(4px);
        }

        .footer-bottom {
            position: relative;
            z-index: 1;
        }

        .footer-bottom-tagline {
            color: rgba(157, 148, 141, 0.82);
        }

        .footer-meta-label {
            font-family: 'Satoshi', sans-serif;
            font-size: 10px;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: rgba(232, 221, 212, 0.42);
        }

        .footer-meta-value {
            font-family: 'Satoshi', sans-serif;
            font-size: 14px;
            line-height: 1.7;
            color: rgba(247, 242, 235, 0.88);
        }

        @media (max-width: 1023px) {
            .footer-summary {
                max-width: 34rem;
            }

            .footer-main {
                gap: 2rem;
            }

            .footer-contact-top {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .footer-info-stack {
                gap: 0.65rem;
            }

            .footer-info-line {
                width: 100%;
                padding-bottom: 0.7rem;
            }
        }

        @media (max-width: 1279px) {
            #projectsSlider .project-card-shell {
                border-right: 0 !important;
                border-bottom: 1px solid rgb(209 213 219);
            }

            #projectsSlider .min-w-full > .project-card-shell:last-child {
                border-bottom: 0 !important;
            }
        }

        @media (min-width: 768px) and (max-width: 1279px) {
            #projectsSlider .projects-slide-center-tail > .project-card-shell:last-child {
                grid-column: 1 / -1;
                width: min(100%, 36rem);
                justify-self: center;
                border-right: 0 !important;
                border-bottom: 0 !important;
            }
        }

        @media (max-width: 1023px) {
            .ambient-orb {
                display: none;
            }

            .header-brand {
                padding-right: 0.8rem;
            }

            .header-brand-note {
                display: none;
            }

            .contact-ledger-item {
                grid-template-columns: minmax(0, 1fr);
                gap: 0.55rem;
            }

            .contact-side-note {
                flex-direction: column;
                align-items: flex-start;
            }

            .timeline-step-shell {
                flex-direction: column;
                align-items: flex-start;
                gap: 1.25rem;
            }

            .timeline-step-shell .max-w-md {
                max-width: none;
            }

            .modal-content {
                padding-left: 0;
                padding-top: min(48svh, 30rem);
                height: 100svh;
            }

            .project-details {
                position: absolute;
                inset: 0 0 auto 0;
                width: 100%;
                max-width: none;
                height: min(48svh, 30rem);
                bottom: auto;
                padding: 70px 28px 28px;
                border-bottom-left-radius: 1.4rem;
                border-bottom-right-radius: 1.4rem;
                box-shadow: 0 16px 50px rgba(0, 0, 0, 0.28);
            }

            .gallery-nav-btn.prev {
                left: 18px;
            }

            .gallery-nav-btn {
                top: auto;
                bottom: 26px;
                transform: none;
            }

            .gallery-nav-btn.next {
                right: 18px;
            }

            .project-details.hidden {
                transform: translateY(-106%);
            }

            .project-details.hidden ~ .modal-content {
                padding-top: 0;
            }

            .project-details.hidden ~ .modal-content .gallery-nav-btn.prev {
                left: 18px;
            }

            .contact-map-frame {
                height: 10rem;
            }

            #projectsSlider .project-card-shell {
                min-height: auto;
                padding: 1.25rem;
            }

            #projectsSlider .project-card-shell .project-thumb {
                margin-bottom: 1rem;
            }

            #projects .absolute.inset-0.pointer-events-none {
                display: none;
            }

            #timeline .absolute.left-0.top-0.w-px.h-full {
                display: none;
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .about-lead-column .hero-heading {
                font-size: clamp(4.75rem, 9.4vw, 6.2rem) !important;
                gap: 0.04em;
                letter-spacing: -0.02em;
            }

            .about-lead-column .h3-about-celcius {
                font-size: 2rem;
            }

            .projects-intro-column {
                justify-content: flex-start;
                padding-top: 3rem;
                padding-bottom: 2rem;
            }

            .projects-intro-copy {
                max-width: none;
            }

            .projects-intro-column .h2-porto {
                font-size: clamp(3.7rem, 7.6vw, 4.9rem);
                line-height: 0.92;
                letter-spacing: -0.022em;
            }

            .projects-intro-brand {
                margin-top: 1.5rem;
            }

            .projects-grid-column {
                padding-left: 0;
            }
        }

        @media (max-width: 767px) {
            .header-shell {
                gap: 0.55rem;
                flex-wrap: wrap;
                border-radius: 1.5rem;
                padding: 0.35rem;
            }

            .header-brand {
                flex: 1 1 auto;
                padding: 0.7rem 0.85rem 0.7rem 1rem;
            }

            .header-brand::after {
                display: none;
            }

            .header-logo {
                height: 1.7rem;
            }

            .header-nav {
                order: 3;
                width: 100%;
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 0.35rem;
                padding: 0.15rem 0.15rem 0.2rem;
            }

            .header-link {
                padding: 0.8rem 0.5rem;
                font-size: 10px;
                letter-spacing: 0.16em;
                border-radius: 999px;
                background: rgba(255, 255, 255, 0.035);
            }

            .header-link::after {
                display: none;
            }

            .header-cta {
                margin-left: auto;
                padding: 0.85rem 1rem;
                border-left: 0;
                border: 1px solid rgba(247, 242, 235, 0.12);
                border-radius: 999px;
                font-size: 10px;
                letter-spacing: 0.16em;
            }

            .hero-heading {
                font-size: clamp(2.9rem, 13vw, 4rem) !important;
                gap: 0.08em;
                letter-spacing: -0.016em;
            }

            .hero-heading-line {
                line-height: 0.92;
            }

            .hero-heading-line-last {
                gap: 0.1em;
                align-items: baseline;
            }

            .h3-about-celcius {
                display: inline-block;
                font-size: 1.45rem;
                line-height: 1;
                vertical-align: baseline;
            }

            .h2-porto {
                font-size: 3.45rem;
                line-height: 0.92;
                letter-spacing: -0.022em;
            }

            .projects-intro-column {
                padding-top: 2.5rem;
                padding-bottom: 1.75rem;
            }

            .projects-intro-copy {
                padding-right: 0;
            }

            .projects-intro-brand {
                margin-top: 1.25rem;
            }

            .projects-intro-brand .font-satoshi {
                font-size: 12px;
                letter-spacing: 0.22em;
            }

            .h2-timeline {
                font-size: 3.25rem;
            }

            .h3-about {
                font-size: 1.85rem;
                line-height: 1.25;
            }

            .footer-shell {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .footer-main {
                gap: 3.1rem;
                justify-items: center;
                text-align: center;
            }

            .footer-brand-column,
            .footer-column {
                width: 100%;
                max-width: 24rem;
                align-items: center;
                text-align: center;
            }

            .footer-mark {
                justify-content: center;
                gap: 0.95rem;
                letter-spacing: 0.3em;
            }

            .footer-summary {
                font-size: 0.9rem;
                line-height: 1.7;
                max-width: 22rem;
                margin-inline: auto;
            }

            .footer-summary-left {
                max-width: 22rem;
            }

            .footer-back-link {
                justify-content: center;
            }

            .footer-column-title {
                text-align: center;
            }

            .footer-links-grid {
                grid-template-columns: 1fr 1fr;
                width: min(100%, 18rem);
                gap: 0.9rem 1.1rem;
                justify-items: center;
            }

            .footer-link-item {
                font-size: 13px;
            }

            .offer-item {
                grid-template-columns: 2.9rem 1fr;
                gap: 0.9rem;
            }

            .offer-text {
                font-size: 15px;
            }

            .gallery-stage {
                padding: 0.85rem;
            }

            .project-thumb {
                aspect-ratio: 16 / 11;
            }

            .footer-column:last-child {
                gap: 1.5rem;
            }

            .footer-contact-address {
                order: 1;
                margin-top: 0;
                width: 100%;
                align-items: center;
            }

            .footer-contact-top {
                order: 2;
                width: min(100%, 20rem);
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 1.25rem;
                justify-items: center;
            }

            .footer-contact-mini {
                align-items: center;
                text-align: center;
            }

            .footer-contact-mini-label {
                justify-content: center;
            }

            .footer-contact-mini-value {
                font-size: 13px;
            }

            .footer-social-links {
                justify-content: center;
            }

            .footer-info-stack {
                width: 100%;
                align-items: center;
                gap: 1rem;
            }

            .footer-info-line {
                width: min(100%, 23rem);
                justify-content: center;
                margin-inline: auto;
                text-align: center;
            }

            .footer-info-content {
                flex: 0 1 auto;
            }

            .footer-bottom {
                align-items: center;
                text-align: center;
                gap: 0.75rem;
            }

            .footer-bottom-copy,
            .footer-bottom-tagline {
                display: block;
            }

            .gallery-nav-btn {
                bottom: 76px;
            }

            .gallery-nav-btn.prev {
                left: 12px;
            }

            .gallery-nav-btn.next {
                right: 12px;
            }

            .project-details.hidden ~ .modal-content .gallery-nav-btn.prev {
                left: 12px;
            }

            .image-counter {
                bottom: 18px;
                font-size: 12px;
                padding: 7px 14px;
            }

            .project-details {
                height: min(62svh, 36rem);
                padding: 68px 18px 24px;
            }

            .modal-content {
                padding-top: min(62svh, 36rem);
            }

            .project-details.hidden {
                transform: translateY(-108%);
            }

            .close-modal {
                top: 12px;
                right: 18px;
                font-size: 34px;
            }

            .details-toggle {
                left: 14px !important;
                right: auto !important;
                top: 16px !important;
                background: rgba(255, 255, 255, 0.96);
            }

            .reopen-details-btn {
                left: 14px;
                top: 14px;
                padding: 10px 16px;
                font-size: 12px;
            }

            #projects .flex.justify-center.items-center.py-8.bg-lightGray > div {
                gap: 1rem;
            }

            #projects #prevBtn,
            #projects #nextBtn {
                width: 2.8rem;
                height: 2.8rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .hero-intro-item,
            .hero-media,
            .hero-overlay,
            .hero-sheen,
            .ambient-orb,
            .luxury-parallax,
            .hero-frame {
                opacity: 1 !important;
                transform: none !important;
                filter: none !important;
                transition: none !important;
                animation: none !important;
            }

            .luxury-scroll-reveal {
                opacity: 1;
                transform: none;
                filter: none;
                transition: none;
            }
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.95);
            animation: fadeIn 0.3s ease-in-out;
        }

        .modal.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            position: relative;
            margin: auto;
            padding: 0;
            width: 100%;
            height: 100%;
            padding-left: 500px;
            transition: padding-left 0.3s ease;
        }

        .project-details.hidden ~ .modal-content {
            padding-left: 0;
        }

        .gallery-stage {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2.5rem;
            background:
                radial-gradient(circle at center, rgba(255, 255, 255, 0.05), transparent 58%),
                linear-gradient(180deg, rgba(8, 8, 8, 0.96), rgba(0, 0, 0, 1));
        }

        .gallery-viewport {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .gallery-image {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            opacity: 0;
            transform: scale(1.018);
            filter: saturate(0.98);
            transition:
                opacity 460ms cubic-bezier(0.22, 1, 0.36, 1),
                transform 700ms cubic-bezier(0.22, 1, 0.36, 1),
                filter 460ms ease;
            will-change: opacity, transform;
        }

        .gallery-image.active {
            opacity: 1;
            transform: scale(1);
            filter: saturate(1);
        }

        .gallery-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 3.4rem;
            height: 3.4rem;
            border-radius: 999px;
            background: rgba(16, 16, 16, 0.42);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(247, 242, 235, 0.96);
            cursor: pointer;
            transition:
                transform 0.3s ease,
                background-color 0.3s ease,
                border-color 0.3s ease,
                box-shadow 0.3s ease,
                color 0.3s ease;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.22);
            z-index: 8;
        }

        .gallery-nav-btn:hover {
            background: rgba(28, 28, 28, 0.58);
            border-color: rgba(216, 178, 138, 0.34);
            box-shadow: 0 24px 52px rgba(0, 0, 0, 0.28);
            color: #ffffff;
        }

        .gallery-nav-btn.prev {
            left: 536px;
            transition: left 0.3s ease, transform 0.3s ease, background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
        }

        .gallery-nav-btn.next {
            right: 24px;
        }

        .project-details.hidden ~ .modal-content .gallery-nav-btn.prev {
            left: 24px;
        }

        .gallery-nav-btn:focus-visible {
            outline: 2px solid rgba(216, 178, 138, 0.85);
            outline-offset: 4px;
        }

        .gallery-nav-icon {
            font-size: 2rem;
            line-height: 1;
            color: inherit;
            transform: translateY(-1px);
        }

        @media (max-width: 767px) {
            .gallery-stage {
                padding: 1rem;
            }

            .gallery-nav-btn {
                width: 3rem;
                height: 3rem;
            }

            .gallery-nav-btn.prev {
                left: 12px;
            }

            .gallery-nav-btn.next {
                right: 12px;
            }

            .project-details.hidden ~ .modal-content .gallery-nav-btn.prev {
                left: 12px;
            }
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 35px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            z-index: 25;
            transition: color 0.3s ease;
        }

        .close-modal:hover,
        .close-modal:focus {
            color: #bbb;
        }

        /* Image counter */
        .image-counter {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 14px;
            background: rgba(0, 0, 0, 0.5);
            padding: 8px 16px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            z-index: 5;
        }

        /* Project details panel */
        .project-details {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 500px;
            background: white;
            padding: 60px 40px;
            overflow-y: auto;
            box-shadow: 2px 0 20px rgba(0, 0, 0, 0.3);
            z-index: 20;
            transform: translateX(0);
            transition: transform 0.3s ease;
        }

        .project-details.hidden {
            transform: translateX(-100%);
        }

        .details-toggle {
            position: absolute;
            right: 20px;
            top: 20px;
            background: transparent;
            border: 1px solid #e0e0e0;
            color: #2c2c2c;
            width: 36px;
            height: 36px;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.3s ease;
            z-index: 25;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .details-toggle:hover {
            background: #f5f5f5;
            border-color: #2c2c2c;
        }

        .project-details.hidden ~ .details-toggle {
            display: none;
        }

        /* Show toggle button when panel is hidden */
        .reopen-details-btn {
            position: absolute;
            left: 20px;
            top: 20px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #2c2c2c;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
            z-index: 15;
            border-radius: 25px;
            backdrop-filter: blur(10px);
            display: none;
            font-family: 'Satoshi', sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 500;
        }

        .reopen-details-btn:hover {
            background: white;
        }

        .project-details.hidden ~ .modal-content .reopen-details-btn {
            display: block;
        }

        @media (max-width: 1023px) {
            .modal-content {
                padding-left: 0;
                padding-top: min(48svh, 30rem);
                height: 100svh;
            }

            .project-details {
                position: absolute;
                inset: 0 0 auto 0;
                width: 100%;
                max-width: none;
                height: min(48svh, 30rem);
                bottom: auto;
                padding: 70px 28px 28px;
                border-bottom-left-radius: 1.4rem;
                border-bottom-right-radius: 1.4rem;
                box-shadow: 0 16px 50px rgba(0, 0, 0, 0.28);
            }

            .project-details.hidden {
                transform: translateY(-106%);
            }

            .project-details.hidden ~ .modal-content {
                padding-top: 0;
            }

            .gallery-nav-btn {
                top: auto;
                bottom: 26px;
                transform: none;
            }

            .gallery-nav-btn.prev,
            .project-details.hidden ~ .modal-content .gallery-nav-btn.prev {
                left: 18px;
            }

            .gallery-nav-btn.next {
                right: 18px;
            }

            .details-toggle {
                display: none !important;
            }

            .close-modal {
                top: 14px;
                right: 18px;
                width: 3rem;
                height: 3rem;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border-radius: 999px;
                color: #1f1f1f;
                background: rgba(255, 255, 255, 0.96);
                border: 1px solid rgba(44, 44, 44, 0.12);
                box-shadow: 0 14px 30px rgba(0, 0, 0, 0.14);
            }
        }

        @media (max-width: 767px) {
            .modal-content {
                padding-top: min(62svh, 36rem);
            }

            .project-details {
                height: min(62svh, 36rem);
                padding: 68px 18px 24px;
            }

            .project-details.hidden {
                transform: translateY(-108%);
            }

            .gallery-stage {
                padding: 0.85rem;
            }

            .gallery-nav-btn {
                bottom: 76px;
            }

            .gallery-nav-btn.prev,
            .project-details.hidden ~ .modal-content .gallery-nav-btn.prev {
                left: 12px;
            }

            .gallery-nav-btn.next {
                right: 12px;
            }

            .image-counter {
                bottom: 18px;
                font-size: 12px;
                padding: 7px 14px;
            }

            .close-modal {
                top: 12px;
                right: 18px;
                width: 2.9rem;
                height: 2.9rem;
                font-size: 32px;
            }

            .reopen-details-btn {
                left: 14px;
                top: 14px;
                padding: 10px 16px;
                font-size: 12px;
            }
        }

        /**
        * @license
        *
        * Font Family: Satoshi
        * Designed by: Deni Anggara
        * URL: https://www.fontshare.com/fonts/satoshi
        * © 2025 Indian Type Foundry
        */
        @font-face {
          font-family: 'Satoshi';
          src: url('https://fonts.cdnfonts.com/s/79445/Satoshi-Light.woff') format('woff');
          font-weight: 300;
          font-display: swap;
          font-style: normal;
        }
        @font-face {
          font-family: 'Satoshi';
          src: url('https://fonts.cdnfonts.com/s/79445/Satoshi-Regular.woff') format('woff');
          font-weight: 400;
          font-display: swap;
          font-style: normal;
        }
        @font-face {
          font-family: 'Satoshi';
          src: url('https://fonts.cdnfonts.com/s/79445/Satoshi-Medium.woff') format('woff');
          font-weight: 500;
          font-display: swap;
          font-style: normal;
        }
        @font-face {
          font-family: 'Satoshi';
          src: url('https://fonts.cdnfonts.com/s/79445/Satoshi-Bold.woff') format('woff');
          font-weight: 700;
          font-display: swap;
          font-style: normal;
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cream: '#FAF7F2',
                        warmBeige: '#E8DDD4',
                        lightGray: '#F5F5F5',
                        darkCharcoal: '#2C2C2C',
                        accentOrange: '#D2691E'
                    },
                    fontFamily: {
                        'boska': ['Boska', 'serif'],
                        'satoshi': ['Satoshi', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
    <body class="font-satoshi hero-preload">
    @include('partials.header')

    <!-- Hero Section -->
    <section id="hero" class="relative min-h-[100svh] bg-cream overflow-hidden">
        <div class="absolute inset-0">
            <img 
                src="cover.jpg"
                alt="Modern luxury interior"
                class="w-full h-full object-cover hero-media"
            />
            <div class="absolute inset-0 bg-black/20 hero-overlay"></div>
            <div class="hero-sheen absolute inset-y-0 -left-1/4 w-1/3 bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
            <div class="ambient-orb luxury-parallax absolute -top-12 right-[12%] h-56 w-56 rounded-full bg-white/10 blur-3xl" data-parallax-speed="0.16"></div>
            <div class="ambient-orb luxury-parallax absolute bottom-[14%] left-[8%] h-32 w-32 rounded-full border border-white/20" data-parallax-speed="0.1"></div>
        </div>
        
        <div class="relative flex min-h-[100svh] items-end md:h-full md:items-center hero-frame">
            <div class="absolute bottom-8 left-4 right-4 md:bottom-12 md:left-auto md:right-20 hero-intro-item" style="--intro-delay: 320ms;">
                <a 
                    href="https://wa.me/6285172392266?text=Hello%20I%20am%20interested%20in%20your%20services"
                    target="_blank"
                    class="bg-darkCharcoal hover:bg-darkCharcoal/90 text-white mx-0 my-10 px-8 py-4 rounded-full font-satoshi text-sm uppercase tracking-widest transition-colors inline-block w-full md:w-auto text-center"
                >
                    GET STARTED WITH US ↗
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 md:py-24 bg-lightGray section-divider">
        <div class="px-4 md:px-6">
            <div class="grid grid-cols-12 gap-10 md:gap-16">
                <!-- Left column - Large heading -->
                <div class="about-lead-column col-span-12 lg:col-span-4 relative">
                    <div class="pl-0">
                        <h1 class="hero-heading text-4xl md:text-5xl lg:text-7xl xl:text-8xl text-darkCharcoal mb-8">
                            <span class="hero-heading-line">FROM</span>
                            <span class="hero-heading-line">THE GROUND,</span>
                            <span class="hero-heading-line hero-heading-line-last">
                                <span>UNTIL NOW.</span>
                                <span class="h3-about-celcius text-darkCharcoal">©</span>
                            </span>
                        </h1>
                    </div>
                </div>
                
                <!-- Right column - Content grid -->
                <div class="col-span-12 lg:col-span-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-12">
                        <!-- Top left -->
                        <div>
                            <h3 class="h3-about font-satoshi uppercase tracking-widest mb-4 text-darkCharcoal"><b>Interior & Sanitary Gallery,</b></h3>
                            <p class="p-about mb-8"> 
                                We are a curated interior and sanitary gallery, offering a refined selection of accessories and design solutions to elevate every space.
                            </p>
                            <p class="p-about mb-8">
                                With a strong commitment to quality and aesthetics, we collaborate with well-known architects and interior designers to bring visionary concepts to life. Our network also includes highly skilled furniture makers, combining craftsmanship with advanced manufacturing technology.
                            </p>
                            <p class="p-about mb-8">
                                Our furniture partners are equipped with full-scale machinery, including CNC and edge banding machines. Their CNC technology supports laser cutting and highly precise drilling positions, ensuring exceptional accuracy in every detail. This results in clean edges, seamless finishes, and a level of precision typically achieved only by large-scale factories.
                            </p>
                            <p class="p-about">
                                From contemporary to timeless designs, we ensure every product and partnership reflects our dedication to excellence, functionality, and style.
                            </p>
                        </div>
                        
                        <!-- Top right -->
                        <div>
                            <h3 class="h3-about font-satoshi uppercase tracking-widest mb-4 text-darkCharcoal"><b>What We Offer</b></h3>
                            <div class="offer-list">
                                <div class="offer-item">
                                    <span class="offer-number">1</span>
                                    <p class="offer-text">Curated interior & sanitary accessories</p>
                                </div>
                                <div class="offer-item">
                                    <span class="offer-number">2</span>
                                    <p class="offer-text">Collaboration with leading architects & designers</p>
                                </div>
                                <div class="offer-item">
                                    <span class="offer-number">3</span>
                                    <p class="offer-text">Custom and selected furniture pieces</p>
                                </div>
                                <div class="offer-item">
                                    <span class="offer-number">4</span>
                                    <p class="offer-text">Advanced precision manufacturing (CNC, laser cutting & edge banding)</p>
                                </div>
                                <div class="offer-item">
                                    <span class="offer-number">5</span>
                                    <p class="offer-text">High-quality materials and craftsmanship</p>
                                </div>
                            </div>
                            <h3 class="h3-about font-satoshi uppercase tracking-widest mb-4 text-darkCharcoal"><b>Our Philosophy</b></h3>
                            <div class="offer-philosophy">
                                <p class="p-about">
                                    We believe that great design is a balance of beauty, function, and craftsmanship—where every detail matters.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Projects Section -->
    <section id="projects" class="py-0 bg-lightGray relative overflow-hidden section-divider">
        <!-- Horizontal grid lines -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="h-full w-full relative">
                <div class="absolute top-0 left-0 w-full h-px bg-gray-300"></div>
                <div class="absolute bottom-0 left-0 w-full h-px bg-gray-300"></div>
            </div>
        </div>

        <div class="px-4 md:px-6 relative">
            <div class="grid grid-cols-12 md:min-h-[600px] relative">

                <!-- Left column - Text content -->
                <div class="projects-intro-column col-span-12 md:col-span-5 xl:col-span-3 relative flex flex-col justify-center py-12 md:py-16">
                    <div class="projects-intro-copy pl-0 pr-8">
                        <h2 class="h2-porto mb-8">
                            Rooted in
                            <br />
                            experience.
                            <br />
                            Driven by
                            <br />
                            integrity.
                        </h2>
                    </div>
                    
                    <div class="projects-intro-brand mt-8 lg:absolute lg:bottom-8 lg:left-0">
                        <div class="font-satoshi text-xs uppercase tracking-widest text-gray-600">
                            PUNCAK MAS GALLERY™
                        </div>
                    </div>
                </div>
                
                <!-- Right column - Projects Container -->
                <div class="projects-grid-column col-span-12 md:col-span-7 xl:col-span-9 relative md:border-l border-gray-300">
                    <!-- Projects Slider Container -->
                    <div class="relative h-full overflow-hidden">
                        <div id="projectsSlider" class="flex transition-transform duration-500 ease-in-out h-full">
                            <!-- Slide 1 - First 3 projects -->
                            <div class="projects-slide-center-tail min-w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 h-full">
                                <!-- Project 1 -->
                                <div class="project-card-shell relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(0)">
                                        <div class="project-thumb relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="1e.png"
                                                alt="Commercial Lobby"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">Commercial Lobby</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2023</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 2 -->
                                <div class="project-card-shell relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(1)">
                                        <div class="project-thumb relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="2a.jpg"
                                                alt="AS House"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">AS House</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2026</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 3 -->
                                <div class="project-card-shell relative p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(2)">
                                        <div class="project-thumb relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="3c.jpg"
                                                alt="BL HOUSE"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">BL HOUSE</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2024</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 - Next 3 projects -->
                            <div class="projects-slide-center-tail min-w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 h-full">
                                <!-- Project 4 -->
                                <div class="project-card-shell relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(3)">
                                        <div class="project-thumb relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="4a.jpg"
                                                alt="GO House"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">GO House</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2024</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 5 -->
                                <div class="project-card-shell relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(4)">
                                        <div class="project-thumb relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="5a.jpg"
                                                alt="EC HOUSE"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">EC HOUSE</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2024</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 6 -->
                                <div class="project-card-shell relative p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(5)">
                                        <div class="project-thumb relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="6a.jpg"
                                                alt="YG House"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">YG House</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2025</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 - Last 2 projects -->
                            <div class="min-w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 h-full">
                                <!-- Project 7 -->
                                <div class="project-card-shell relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(6)">
                                        <div class="project-thumb relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="7b.jpg"
                                                alt="SS House"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">SS House</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2026</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 8 -->
                                <div class="project-card-shell relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(7)">
                                        <div class="project-thumb relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="8a.jpg"
                                                alt="TK House"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">TK House</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2024</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Empty third column for last slide -->
                                <div class="relative p-6 hidden xl:block"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Controls -->
        <div class="flex justify-center items-center py-8 bg-lightGray">
            <div class="flex items-center space-x-6">
                <button 
                    id="prevBtn" 
                    class="w-12 h-12 border border-darkCharcoal rounded-full flex items-center justify-center hover:bg-darkCharcoal hover:text-white transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed"
                    onclick="previousSlide()"
                >
                    <span class="text-lg">←</span>
                </button>
                
                <div class="flex space-x-3">
                    <div class="w-3 h-3 rounded-full bg-darkCharcoal slide-dot active-dot transition-all duration-300"></div>
                    <div class="w-3 h-3 rounded-full bg-gray-300 slide-dot hover:bg-gray-400 transition-all duration-300"></div>
                    <div class="w-3 h-3 rounded-full bg-gray-300 slide-dot hover:bg-gray-400 transition-all duration-300"></div>
                </div>
                
                <button 
                    id="nextBtn" 
                    class="w-12 h-12 border border-darkCharcoal rounded-full flex items-center justify-center hover:bg-darkCharcoal hover:text-white transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed"
                    onclick="nextSlide()"
                >
                    <span class="text-lg">→</span>
                </button>
            </div>
        </div>
    </section>

    @include('partials.project-modal')

    <!-- Timeline Section -->
    <section id="timeline" class="py-16 md:py-24 bg-white section-divider">
        <div class="px-4 md:px-6">
            <div class="grid grid-cols-12 gap-10 md:gap-12">
                <!-- Left column -->
                <div class="col-span-12 lg:col-span-4 relative">
                    <div class="absolute left-0 top-0 w-px h-full"></div>
                    <div class="pl-0">
                        <h2 class="h2-timeline leading-tight">
                            Our Timelines
                            <br />
                            Process,
                        </h2>
                    </div>
                    
                    <div class="mt-8 lg:absolute lg:bottom-0 lg:left-0">
                        <div class="font-satoshi text-xs uppercase tracking-widest">
                            PUNCAK MAS GALLERY™
                        </div>
                    </div>
                </div>
                
                <!-- Right column - Timeline -->
                <div class="col-span-12 lg:col-span-8">
                    <div class="space-y-8">
                        <div class="group timeline-step border-b border-warmBeige pb-8 transition-colors duration-500">
                            <div class="timeline-step-shell flex items-start justify-between gap-8">
                                <div class="flex items-start space-x-8">
                                    <span class="timeline-index font-boska text-2xl font-light text-gray-400">01</span>
                                    <div>
                                        <h3 class="timeline-title font-satoshi text-lg font-medium mb-2 text-darkCharcoal">Site Visit &amp; Get-to-Know Session</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="timeline-body font-satoshi text-sm text-gray-600 leading-relaxed">
                                        Get to know what the client wants. We'll start by visiting your place to understand what you need, what styles you like, and what problems you're currently facing. It's all about getting on the same page.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="group timeline-step border-b border-warmBeige pb-8 transition-colors duration-500">
                            <div class="timeline-step-shell flex items-start justify-between gap-8">
                                <div class="flex items-start space-x-8">
                                    <span class="timeline-index font-boska text-2xl font-light text-gray-400">02</span>
                                    <div>
                                        <h3 class="timeline-title font-satoshi text-lg font-medium mb-2 text-darkCharcoal">Quotation</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="timeline-body font-satoshi text-sm text-gray-600 leading-relaxed">
                                        Based on your needs and the scope of the project, we'll send you a quotation that includes design and estimated execution costs.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="group timeline-step border-b border-warmBeige pb-8 transition-colors duration-500">
                            <div class="timeline-step-shell flex items-start justify-between gap-8">
                                <div class="flex items-start space-x-8">
                                    <span class="timeline-index font-boska text-2xl font-light text-gray-400">03</span>
                                    <div>
                                        <h3 class="timeline-title font-satoshi text-lg font-medium mb-2 text-darkCharcoal">Down Payment (DP)</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="timeline-body font-satoshi text-sm text-gray-600 leading-relaxed">
                                        If you're happy with the quotation, we'll move forward with a down payment to lock in the project and start the design process.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="group timeline-step border-b border-warmBeige pb-8 transition-colors duration-500">
                            <div class="timeline-step-shell flex items-start justify-between gap-8">
                                <div class="flex items-start space-x-8">
                                    <span class="timeline-index font-boska text-2xl font-light text-gray-400">04</span>
                                    <div>
                                        <h3 class="timeline-title font-satoshi text-lg font-medium mb-2 text-darkCharcoal">Design Process</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="timeline-body font-satoshi text-sm text-gray-600 leading-relaxed">
                                        We'll work on your design and you'll get unlimited revisions-as long as the core design concept stays the same.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="group timeline-step border-b border-warmBeige pb-8 transition-colors duration-500">
                            <div class="timeline-step-shell flex items-start justify-between gap-8">
                                <div class="flex items-start space-x-8">
                                    <span class="timeline-index font-boska text-2xl font-light text-gray-400">05</span>
                                    <div>
                                        <h3 class="timeline-title font-satoshi text-lg font-medium mb-2 text-darkCharcoal">Final Measurements</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="timeline-body font-satoshi text-sm text-gray-600 leading-relaxed">
                                        Once the design is approved, we'll do another round of detailed measurements to make sure everything fits perfectly.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="group timeline-step border-b border-warmBeige pb-8 transition-colors duration-500">
                            <div class="timeline-step-shell flex items-start justify-between gap-8">
                                <div class="flex items-start space-x-8">
                                    <span class="timeline-index font-boska text-2xl font-light text-gray-400">06</span>
                                    <div>
                                        <h3 class="timeline-title font-satoshi text-lg font-medium mb-2 text-darkCharcoal">Execution</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="timeline-body font-satoshi text-sm text-gray-600 leading-relaxed">
                                        After everything is set, we move on to production and installation. This usually takes about 2 months, depending on the complexity of the project. Production can be completed within 30 working days for projects under 50 m². Installation for areas below 10 m² can be done in approximately 3 days (terms & conditions apply).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="relative min-h-[100svh] bg-black text-white section-divider">
        <div class="grid min-h-[100svh] grid-cols-1 lg:grid-cols-12">
            <!-- Left side - Interior Image -->
            <div class="relative min-h-[320px] lg:col-span-6">
                <img 
                    src="6d.jpg"
                    alt="Modern luxury interior design"
                    class="w-full h-full object-cover"
                />
                <!-- Overlay for text readability -->
                <div class="absolute inset-0 bg-black/10"></div>
                
                <!-- PMG Logo/Watermark -->
                <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8">
                    <div class="w-12 h-12 border-2 border-white flex items-center justify-center">
                        <span class="font-boska text-white text-lg font-medium">P</span>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Contact Information -->
            <div class="bg-black flex flex-col justify-center px-6 py-14 md:px-12 md:py-16 contact-panel lg:col-span-6">
                <div class="contact-shell">
                    <div class="mb-12 md:mb-14">
                        <span class="contact-kicker">Contact</span>
                        <h2 class="font-boska text-4xl md:text-5xl font-light leading-tight mt-5 mb-5">
                            Private access to<br />
                            Puncak Mas Gallery.
                        </h2>
                        <p class="font-satoshi max-w-xl text-sm leading-relaxed text-[#c9c1bb]">
                            For consultations, appointments, or detailed project discussions, reach out directly through the lines below.
                        </p>
                    </div>

                    <div class="contact-ledger">
                        <div class="contact-ledger-item">
                            <p class="contact-ledger-label">Contact Person</p>
                            <a  href="https://wa.me/6285172392266?text=Hello%20I%20am%20interested%20in%20your%20services"
                                class="contact-ledger-value contact-ledger-link">
                                +62 8517 2392 266 (Sheila)
                            </a>
                        </div>

                        <div class="contact-ledger-item">
                            <p class="contact-ledger-label">Email</p>
                            <a href="mailto:puncakmasgallery@gmail.com" class="contact-ledger-value contact-ledger-link break-all">
                                puncakmasgallery@gmail.com
                            </a>
                        </div>

                        <div class="contact-ledger-item">
                            <p class="contact-ledger-label">Instagram</p>
                            <a href="https://www.instagram.com/puncakmasgallery/" target="_blank" rel="noreferrer" class="contact-ledger-value contact-ledger-link">
                                @puncakmasgallery
                            </a>
                        </div>

                        <div class="contact-ledger-item">
                            <p class="contact-ledger-label">Address</p>
                            <div>
                                <a
                                    href="https://maps.google.com/?q=Jl.+Soekarno+Hatta+No.2,+Kota+Malang,+Jawa+Timur+65142"
                                    target="_blank"
                                    rel="noreferrer"
                                    class="contact-ledger-value contact-ledger-link"
                                >
                                    Jl. Soekarno Hatta No.2, Kota Malang, Jawa Timur 65142
                                </a>

                                <div class="contact-map-card">
                                    <div class="contact-map-frame">
                                        <iframe
                                            title="Puncak Mas Gallery location"
                                            src="https://maps.google.com/maps?q=Jl.+Soekarno+Hatta+No.2,+Kota+Malang,+Jawa+Timur+65142&z=16&output=embed"
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"
                                            class="contact-map-embed"
                                        ></iframe>
                                        <a
                                            href="https://maps.google.com/?q=Jl.+Soekarno+Hatta+No.2,+Kota+Malang,+Jawa+Timur+65142"
                                            target="_blank"
                                            rel="noreferrer"
                                            class="contact-map-overlay"
                                            aria-label="Open location in Google Maps"
                                        >
                                            <span class="contact-map-badge">
                                                <span>Open</span>
                                                <span>Google Maps</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contact-ledger-item">
                            <p class="contact-ledger-label">Working Hour</p>
                            <p class="contact-ledger-value">
                                08.00 AM - 20.00 PM
                            </p>
                        </div>
                    </div>

                    <div class="contact-side-note">
                        <span>By Appointment Preferred</span>
                        <span>Malang, East Java</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script>
        @include('partials.project-modal-data')

        let currentProject = 0;
        let currentImageIndex = 0;
        let detailsOpen = false;
        let activeGalleryLayer = 'primary';
        let galleryTransitionId = 0;
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // Portfolio slider functionality
        let currentSlide = 0;
        const totalSlides = 3;

        function animateActiveProjectSlide() {
            const slider = document.getElementById('projectsSlider');
            const slides = slider?.querySelectorAll(':scope > .min-w-full');
            const activeSlide = slides?.[currentSlide];

            if (!activeSlide) return;

            const cards = activeSlide.querySelectorAll(':scope > div');

            cards.forEach((card, index) => {
                if (!card.querySelector('.group')) return;

                card.classList.add('project-slide-card');

                if (prefersReducedMotion) {
                    card.style.animation = 'none';
                    card.style.opacity = '1';
                    card.style.transform = 'none';
                    card.style.filter = 'none';
                    return;
                }

                card.style.animation = 'none';
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px) scale(0.985)';
                card.style.filter = 'blur(8px)';

                void card.offsetWidth;
                card.style.animation = `luxuryCardReveal 900ms cubic-bezier(0.16, 1, 0.3, 1) ${index * 110}ms forwards`;
            });
        }

        function updateSlider() {
            const slider = document.getElementById('projectsSlider');
            const translateX = -currentSlide * 100;
            slider.style.transform = `translateX(${translateX}%)`;
            
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            prevBtn.disabled = currentSlide === 0;
            nextBtn.disabled = currentSlide === totalSlides - 1;
            
            const dots = document.querySelectorAll('.slide-dot');
            dots.forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.add('active-dot');
                    dot.classList.remove('bg-gray-300');
                    dot.classList.add('bg-darkCharcoal');
                } else {
                    dot.classList.remove('active-dot');
                    dot.classList.remove('bg-darkCharcoal');
                    dot.classList.add('bg-gray-300');
                }
            });

            animateActiveProjectSlide();
        }

        function nextSlide() {
            if (currentSlide < totalSlides - 1) {
                currentSlide++;
                updateSlider();
            }
        }

        function previousSlide() {
            if (currentSlide > 0) {
                currentSlide--;
                updateSlider();
            }
        }

        function getGalleryLayers() {
            return {
                primary: document.getElementById('modalImagePrimary'),
                secondary: document.getElementById('modalImageSecondary'),
            };
        }

        function setActiveGalleryLayer(nextLayerKey) {
            const layers = getGalleryLayers();

            Object.entries(layers).forEach(([key, layer]) => {
                if (!layer) return;
                layer.classList.toggle('active', key === nextLayerKey);
            });

            activeGalleryLayer = nextLayerKey;
        }

        function showModalImage(imageSrc, options = {}) {
            const { animate = true } = options;
            const layers = getGalleryLayers();
            const currentLayer = layers[activeGalleryLayer];
            const nextLayerKey = activeGalleryLayer === 'primary' ? 'secondary' : 'primary';
            const nextLayer = layers[nextLayerKey];
            const transitionId = ++galleryTransitionId;

            if (!currentLayer || !nextLayer) return;

            if (!animate || prefersReducedMotion || !currentLayer.src) {
                currentLayer.src = imageSrc;
                currentLayer.alt = 'Project Image';
                nextLayer.src = imageSrc;
                nextLayer.alt = 'Project Image';
                setActiveGalleryLayer(activeGalleryLayer);
                return;
            }

            const preloadImage = new Image();
            preloadImage.onload = () => {
                if (transitionId !== galleryTransitionId) return;

                nextLayer.src = imageSrc;
                nextLayer.alt = 'Project Image';

                requestAnimationFrame(() => {
                    setActiveGalleryLayer(nextLayerKey);
                });
            };

            preloadImage.onerror = () => {
                if (transitionId !== galleryTransitionId) return;

                nextLayer.src = imageSrc;
                nextLayer.alt = 'Project Image';
                setActiveGalleryLayer(nextLayerKey);
            };

            preloadImage.src = imageSrc;
        }

        // Modal functionality
        function openProjectModal(projectIndex) {
            currentProject = projectIndex;
            currentImageIndex = 0;
            detailsOpen = true; // Changed to true
            galleryTransitionId++;
            activeGalleryLayer = 'primary';
            
            const modal = document.getElementById('projectModal');
            const project = projectsData[projectIndex];
            
            // Update modal content
            document.getElementById('modalProjectTitle').textContent = project.title;
            document.getElementById('modalProjectDescription').textContent = project.description;
            document.getElementById('modalProjectYear').textContent = project.year;
            document.getElementById('modalProjectLocation').textContent = project.location;
            document.getElementById('modalProjectDesigner').textContent = project.designer;
            document.getElementById('modalProjectCategoryDetail').textContent = project.category;
            
            // Update features list
            const featuresList = document.getElementById('modalProjectFeatures');
            featuresList.innerHTML = project.features.map(feature => `<li>• ${feature}</li>`).join('');
            
            // Set initial image
            const galleryLayers = getGalleryLayers();
            galleryLayers.primary.src = project.images[0];
            galleryLayers.primary.alt = `${project.title} image 1`;
            galleryLayers.secondary.src = project.images[0];
            galleryLayers.secondary.alt = `${project.title} image 1`;
            setActiveGalleryLayer('primary');
            document.getElementById('currentImageIndex').textContent = '1';
            document.getElementById('totalImages').textContent = project.images.length;
            
            // Show details panel by default
            document.getElementById('projectDetails').classList.remove('hidden');
            document.getElementById('detailsArrow').textContent = '‹';
            
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
            galleryTransitionId++;
        }

        function changeGalleryImage(direction) {
            const project = projectsData[currentProject];
            currentImageIndex += direction;
            
            if (currentImageIndex < 0) {
                currentImageIndex = project.images.length - 1;
            } else if (currentImageIndex >= project.images.length) {
                currentImageIndex = 0;
            }
            
            document.getElementById('currentImageIndex').textContent = currentImageIndex + 1;
            showModalImage(project.images[currentImageIndex]);
        }

        function toggleDetails() {
            detailsOpen = !detailsOpen;
            const detailsPanel = document.getElementById('projectDetails');
            const arrow = document.getElementById('detailsArrow');
            
            if (detailsOpen) {
                detailsPanel.classList.remove('hidden');
                arrow.textContent = '‹';
            } else {
                detailsPanel.classList.add('hidden');
                arrow.textContent = '›';
            }
        }

        function handleGalleryStageTap() {
            if (window.innerWidth > 1023 || !detailsOpen) return;
            toggleDetails();
        }

        function initLuxuryScrollAnimations() {
            const sectionDividers = document.querySelectorAll('.section-divider');
            const revealGroups = [
                { elements: document.querySelectorAll('#about .grid.grid-cols-12 > div'), baseDelay: 0, step: 130 },
                { elements: document.querySelectorAll('#projects .grid.grid-cols-12 > div'), baseDelay: 80, step: 130 },
                { elements: document.querySelectorAll('#projects > .flex.justify-center.items-center.py-8'), baseDelay: 220, step: 0 },
                { elements: document.querySelectorAll('#timeline .grid.grid-cols-12 > div'), baseDelay: 0, step: 130 },
                { elements: document.querySelectorAll('#timeline .group'), baseDelay: 140, step: 80 },
                { elements: document.querySelectorAll('#contact > .grid > div'), baseDelay: 40, step: 140 },
                { elements: document.querySelectorAll('#contact .contact-shell > div'), baseDelay: 120, step: 120 },
                { elements: document.querySelectorAll('#contact .contact-ledger-item'), baseDelay: 220, step: 80 },
                { elements: document.querySelectorAll('.site-footer .footer-shell > div'), baseDelay: 80, step: 140 },
                { elements: document.querySelectorAll('.site-footer .footer-shell > .mt-14 > div'), baseDelay: 200, step: 90 },
                { elements: document.querySelectorAll('.site-footer .footer-shell > .mt-10'), baseDelay: 340, step: 0 },
            ];

            const revealItems = [];

            revealGroups.forEach((group) => {
                group.elements.forEach((element, index) => {
                    element.classList.add('luxury-scroll-reveal');
                    element.style.setProperty('--reveal-delay', `${group.baseDelay + (index * group.step)}ms`);
                    revealItems.push(element);
                });
            });

            if (!revealItems.length) return;

            if (prefersReducedMotion || !('IntersectionObserver' in window)) {
                revealItems.forEach((item) => item.classList.add('is-visible'));
                sectionDividers.forEach((section) => section.classList.add('is-visible'));
                return;
            }

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                });
            }, {
                threshold: 0.18,
                rootMargin: '0px 0px -8% 0px',
            });

            revealItems.forEach((item) => revealObserver.observe(item));

            const dividerObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -10% 0px',
            });

            sectionDividers.forEach((section) => dividerObserver.observe(section));
        }

        function initLuxuryParallax() {
            const parallaxItems = document.querySelectorAll('[data-parallax-speed]');

            if (!parallaxItems.length || prefersReducedMotion) return;

            const updateParallax = () => {
                const viewportHeight = window.innerHeight || 1;

                parallaxItems.forEach((item) => {
                    const speed = Number(item.dataset.parallaxSpeed || 0);
                    const rect = item.getBoundingClientRect();
                    const itemCenter = rect.top + (rect.height / 2);
                    const offset = ((itemCenter - (viewportHeight / 2)) / viewportHeight) * speed * -120;
                    item.style.transform = `translate3d(0, ${offset.toFixed(2)}px, 0)`;
                });
            };

            let ticking = false;

            const requestUpdate = () => {
                if (ticking) return;
                ticking = true;
                window.requestAnimationFrame(() => {
                    updateParallax();
                    ticking = false;
                });
            };

            updateParallax();
            window.addEventListener('scroll', requestUpdate, { passive: true });
            window.addEventListener('resize', requestUpdate);
        }

        function initHeroIntroAnimation() {
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (reduceMotion) {
                document.body.classList.remove('hero-preload');
                document.body.classList.add('hero-ready');
                return;
            }

            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    document.body.classList.add('hero-ready');
                    document.body.classList.remove('hero-preload');
                });
            });
        }

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            const modal = document.getElementById('projectModal');
            if (modal.classList.contains('active')) {
                if (e.key === 'Escape') {
                    closeProjectModal();
                } else if (e.key === 'ArrowLeft') {
                    changeGalleryImage(-1);
                } else if (e.key === 'ArrowRight') {
                    changeGalleryImage(1);
                }
            } else {
                if (e.key === 'ArrowLeft') {
                    previousSlide();
                } else if (e.key === 'ArrowRight') {
                    nextSlide();
                }
            }
        });

        // Close modal when clicking outside
        document.getElementById('projectModal').addEventListener('click', (e) => {
            if (e.target.id === 'projectModal') {
                closeProjectModal();
            }
        });

        // Touch/swipe support for portfolio slider
        let startX = 0;
        let startY = 0;
        let currentX = 0;
        let currentY = 0;
        let isSwipe = false;

        const slider = document.getElementById('projectsSlider');

        slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
            isSwipe = true;
        });

        slider.addEventListener('touchmove', (e) => {
            if (!isSwipe) return;
            currentX = e.touches[0].clientX;
            currentY = e.touches[0].clientY;
        });

        slider.addEventListener('touchend', () => {
            if (!isSwipe) return;
            
            const diffX = startX - currentX;
            const diffY = startY - currentY;
            
            if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
                if (diffX > 0) {
                    nextSlide();
                } else {
                    previousSlide();
                }
            }
            
            isSwipe = false;
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Initialize slider
        updateSlider();
        initHeroIntroAnimation();
        initLuxuryScrollAnimations();
        initLuxuryParallax();
    </script>
</body>
</html>
