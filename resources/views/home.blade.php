<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puncak Mas Gallery - Luxury Interior Design</title>
    <link href="https://api.fontshare.com/v2/css?f[]=boska@400,500,600,700&display=swap" rel="stylesheet">
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

        /* Satoshi font for body text */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        @import url('https://api.fontshare.com/v2/css?f[]=boska@200,300,400,500,700&display=swap');
        
        /* Custom Tailwind configuration */
        @layer utilities {
            .font-boska {
                font-family: 'Boska', serif;
            }
            .font-satoshi {
                font-family: 'Inter', sans-serif;
            }
        }

        .header-home {
            background-color: #1A1A1A;
            color: #F7F2EB;
        }
        
        .hero-heading {
            font-family: 'Boska' !important;
            font-weight: 200px !important;
            line-height: 0.9;
            letter-spacing: -0.02em;
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
            line-height: 1.6;
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

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: opacity 0.3s ease;
        }

        .gallery-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 20px 15px;
            cursor: pointer;
            font-size: 24px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            z-index: 5;
        }

        .gallery-nav-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .gallery-nav-btn.prev {
            left: 520px;
            transition: left 0.3s ease;
        }

        .gallery-nav-btn.next {
            right: 20px;
        }

        .project-details.hidden ~ .modal-content .gallery-nav-btn.prev {
            left: 20px;
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
            font-family: 'Inter', sans-serif;
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
<body class="font-satoshi">
    <!-- Header -->
    <header class="header-home fixed top-0 left-0 right-0 z-50 backdrop-blur-sm">
        <div class="px-6 py-6">
            <div class="flex justify-between items-center">
                <div class="font-boska text-xl font-medium tracking-wide">
                    Puncak Mas
                    <span class="block text-xs font-satoshi font-light uppercase tracking-widest mx-6">GALLERY</span>
                </div>
                
                <nav class="hidden md:flex space-x-8">
                    <a href="#hero" class="font-satoshi text-sm uppercase tracking-widest hover:text-accentOrange transition-colors">ABOUT</a>
                    <a href="#about" class="font-satoshi text-sm uppercase tracking-widest hover:text-accentOrange transition-colors">SERVICES</a>
                    <a href="#projects" class="font-satoshi text-sm uppercase tracking-widest hover:text-accentOrange transition-colors">PROJECTS</a>
                    <a href="#timeline" class="font-satoshi text-sm uppercase tracking-widest hover:text-accentOrange transition-colors">TIMELINE</a>
                    <a href="#contact" class="font-satoshi text-sm uppercase tracking-widest hover:text-accentOrange transition-colors">CONTACTS</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="relative h-screen bg-cream overflow-hidden">
        <div class="absolute inset-0">
            <img 
                src="16.jpg"
                alt="Modern luxury interior"
                class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-black/20"></div>
        </div>
        
        <div class="relative h-full flex items-center">
            <div class="absolute bottom-12 right-20">
                <button class="bg-darkCharcoal hover:bg-darkCharcoal/90 text-white mx-0 my-10 px-8 py-4 rounded-full font-satoshi text-sm uppercase tracking-widest transition-colors">
                    GET STARTED WITH US ↗
                </button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-lightGray">
        <div class="px-6">
            <div class="grid grid-cols-12 gap-16">
                <!-- Left column - Large heading -->
                <div class="col-span-12 lg:col-span-4 relative">
                    <div class="pl-0">
                        <h1 class="hero-heading text-5xl lg:text-7xl xl:text-8xl text-darkCharcoal mb-8">
                            FROM
                            <br />
                            THE GROUND,
                            <br />
                            UNTIL NOW. <span class="h3-about-celcius text-darkCharcoal">©</span> 
                        </h1>
                    </div>
                </div>
                
                <!-- Right column - Content grid -->
                <div class="col-span-12 lg:col-span-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-12">
                        <!-- Top left -->
                        <div>
                            <h3 class="h3-about font-satoshi uppercase tracking-widest mb-4 text-darkCharcoal"><b>ESTABLISHED IN 1994,</b></h3>
                            <p class="p-about mb-8"> 
                                from a family-run materials store, Puncak Mas Gallery has evolved into a design & build studio that blends quality craftsmanship with deep material expertise.
                            </p>
                            <p class="p-about">
                                We're redefining dream living not just as a space that looks beautiful, but one that functions right and long, and feels right every day.
                            </p>
                        </div>
                        
                        <!-- Top right -->
                        <div>
                            <h3 class="h3-about font-satoshi uppercase tracking-widest mb-4 text-darkCharcoal"><b>CREATING CO-EXISTENCE,</b></h3>
                            <p class="p-about mb-8">
                                Starting from Malang and expanding throughout the East Java region, every home we craft is handbuilt with care, precision, and purpose: a reflection of our belief that true quality starts from the core.                         
                            </p>
                            <p class="p-about">
                                From the very first layer of structure to the final finish, every decision is made intentionally, using only what's best even when it's behind the walls.
                            </p>
                        </div>
                        
                        <!-- Bottom section with button -->
                        <div class="md:col-span-2 pt-8 border-t border-gray-300">
                            <button class="readmore-about uppercase tracking-widest border-b border-darkCharcoal pb-1 hover:text-accentOrange transition-colors">
                                READ MORE ABOUT US
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Projects Section -->
    <section id="projects" class="py-0 bg-lightGray relative overflow-hidden">
        <!-- Horizontal grid lines -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="h-full w-full relative">
                <div class="absolute top-0 left-0 w-full h-px bg-gray-300"></div>
                <div class="absolute bottom-0 left-0 w-full h-px bg-gray-300"></div>
            </div>
        </div>

        <div class="px-6 relative">
            <div class="grid grid-cols-12 min-h-[600px] relative">
                <!-- Vertical grid lines -->
                <div class="absolute inset-0 pointer-events-none">
                    <div class="absolute left-1/4 top-0 w-px h-full bg-gray-300"></div>
                    <div class="absolute left-2/4 top-0 w-px h-full bg-gray-300"></div>
                    <div class="absolute left-3/4 top-0 w-px h-full bg-gray-300"></div>
                </div>

                <!-- Left column - Text content -->
                <div class="col-span-12 lg:col-span-3 relative flex flex-col justify-center py-16">
                    <div class="pl-0 pr-8">
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
                    
                    <div class="absolute bottom-8 left-0">
                        <div class="font-satoshi text-xs uppercase tracking-widest text-gray-600">
                            PUNCAK MAS GALLERY™
                        </div>
                    </div>
                </div>
                
                <!-- Right column - Projects Container -->
                <div class="col-span-12 lg:col-span-9 relative">
                    <!-- Projects Slider Container -->
                    <div class="relative h-full overflow-hidden">
                        <div id="projectsSlider" class="flex transition-transform duration-500 ease-in-out h-full">
                            <!-- Slide 1 - First 3 projects -->
                            <div class="min-w-full grid grid-cols-3 h-full">
                                <!-- Project 1 -->
                                <div class="relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(0)">
                                        <div class="relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="1.jpg"
                                                alt="Modern Living Room"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">Modern Living Room</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2023</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 2 -->
                                <div class="relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(1)">
                                        <div class="relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="3.jpg"
                                                alt="Luxury Kitchen"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">Luxury Kitchen</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2023</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 3 -->
                                <div class="relative p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(2)">
                                        <div class="relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="0.jpg"
                                                alt="Bedroom Suite"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">Bedroom Suite</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2022</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 - Next 3 projects -->
                            <div class="min-w-full grid grid-cols-3 h-full">
                                <!-- Project 4 -->
                                <div class="relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(3)">
                                        <div class="relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="1.jpg"
                                                alt="Dining Area"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">Dining Area</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2022</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 5 -->
                                <div class="relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(4)">
                                        <div class="relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="3.jpg"
                                                alt="Home Office"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">Home Office</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2021</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 6 -->
                                <div class="relative p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(5)">
                                        <div class="relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="0.jpg"
                                                alt="Walk-in Closet"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">Walk-in Closet</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2021</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 - Last 2 projects -->
                            <div class="min-w-full grid grid-cols-3 h-full">
                                <!-- Project 7 -->
                                <div class="relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(6)">
                                        <div class="relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="0.jpg"
                                                alt="Bathroom Design"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">Bathroom Design</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2020</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 8 -->
                                <div class="relative border-r border-gray-300 p-6 flex flex-col justify-between min-h-[300px]">
                                    <div class="group cursor-pointer h-full flex flex-col" onclick="openProjectModal(7)">
                                        <div class="relative overflow-hidden mb-4 flex-1">
                                            <img 
                                                src="3.jpg"
                                                alt="Outdoor Terrace"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                            />
                                        </div>
                                        <div class="flex justify-between items-center mt-auto">
                                            <div>
                                                <h3 class="font-satoshi text-sm font-medium">Outdoor Terrace</h3>
                                                <p class="font-satoshi text-sm text-gray-600">2020</p>
                                            </div>
                                            <div class="w-6 h-6 border border-darkCharcoal rounded-full flex items-center justify-center group-hover:bg-darkCharcoal group-hover:text-white transition-all duration-300">
                                                <span class="text-xs">→</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Empty third column for last slide -->
                                <div class="relative p-6"></div>
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

    <!-- Project Modal -->
    <div id="projectModal" class="modal">
        <span class="close-modal" onclick="closeProjectModal()">&times;</span>
        
        <!-- Project Details Panel -->
        <div id="projectDetails" class="project-details">
            <!-- Close Details Button (inside panel) -->
            <button class="details-toggle" onclick="toggleDetails()">
                <span id="detailsArrow">×</span>
            </button>
            
            <h2 class="font-boska text-4xl mb-6" id="modalProjectTitle">Modern Living Room</h2>
            
            <div class="mb-8">
                <h3 class="font-satoshi text-sm uppercase tracking-widest mb-2 text-gray-600">KITCHEN DESIGN</h3>
                <p class="font-satoshi text-sm text-gray-700 mb-4" id="modalProjectCategory">PRESENTATION</p>
            </div>
            
            <div class="mb-8">
                <h3 class="font-satoshi text-sm uppercase tracking-widest mb-3 text-gray-600">PROJECT DESCRIPTION</h3>
                <p class="font-satoshi text-sm leading-relaxed text-gray-700" id="modalProjectDescription">
                    A garage is often seen as an afterthought—a purely utilitarian space hidden from the rest of the home. But at Puncak Mas Gallery, we believe the garage is more than just storage; it's a gallery, a stage, and a reflection of identity.
                </p>
            </div>
            
            <div class="mb-8">
                <h3 class="font-satoshi text-sm uppercase tracking-widest mb-3 text-gray-600">KEY FEATURES</h3>
                <ul class="font-satoshi text-sm leading-relaxed text-gray-700 space-y-2" id="modalProjectFeatures">
                    <li>• High-end materials and finishes</li>
                    <li>• Integrated lighting system</li>
                    <li>• Custom cabinetry solutions</li>
                    <li>• Smart home integration</li>
                </ul>
            </div>
            
            <div class="mb-8">
                <h3 class="font-satoshi text-sm uppercase tracking-widest mb-3 text-gray-600">PROJECT DETAILS</h3>
                <div class="grid grid-cols-2 gap-4 font-satoshi text-sm">
                    <div>
                        <p class="text-gray-600">Year</p>
                        <p class="font-medium" id="modalProjectYear">2023</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Location</p>
                        <p class="font-medium" id="modalProjectLocation">Malang, Indonesia</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Area</p>
                        <p class="font-medium" id="modalProjectArea">120 m²</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Duration</p>
                        <p class="font-medium" id="modalProjectDuration">3 months</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-content">
            <!-- Reopen Details Button (shows when panel is hidden) -->
            <button class="reopen-details-btn" onclick="toggleDetails()">
                Show Details
            </button>
            
            <!-- Image Gallery Navigation -->
            <button class="gallery-nav-btn prev" onclick="changeGalleryImage(-1)">
                <span>‹</span>
            </button>
            
            <button class="gallery-nav-btn next" onclick="changeGalleryImage(1)">
                <span>›</span>
            </button>
            
            <!-- Gallery Images Container -->
            <div class="w-full h-full flex items-center justify-center bg-black">
                <img id="modalImage" class="gallery-image" src="" alt="Project Image">
            </div>
            
            <!-- Image Counter -->
            <div class="image-counter">
                <span id="currentImageIndex">1</span> / <span id="totalImages">4</span>
            </div>
        </div>
    </div>

    <!-- Timeline Section -->
    <section id="timeline" class="py-24 bg-white">
        <div class="px-6">
            <div class="grid grid-cols-12 gap-12">
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
                    
                    <div class="absolute bottom-0 left-0">
                        <div class="font-satoshi text-xs uppercase tracking-widest">
                            PUNCAK MAS GALLERY™
                        </div>
                    </div>
                </div>
                
                <!-- Right column - Timeline -->
                <div class="col-span-12 lg:col-span-8">
                    <div class="space-y-8">
                        <div class="group border-b border-warmBeige pb-8 hover:border-darkCharcoal transition-colors duration-300">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-8">
                                    <span class="font-boska text-2xl font-light text-gray-400 group-hover:text-darkCharcoal transition-colors duration-300">01</span>
                                    <div>
                                        <h3 class="font-satoshi text-lg font-medium mb-2 group-hover:text-darkCharcoal transition-colors duration-300">SITE VISIT</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="font-satoshi text-xs uppercase tracking-widest text-gray-600 leading-relaxed">
                                        START BY VISITING YOUR PLACE TO UNDERSTAND WHAT YOU NEED. IT'S ALL ABOUT GETTING ON THE SAME PAGE.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="group border-b border-warmBeige pb-8 hover:border-darkCharcoal transition-colors duration-300">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-8">
                                    <span class="font-boska text-2xl font-light text-gray-400 group-hover:text-darkCharcoal transition-colors duration-300">02</span>
                                    <div>
                                        <h3 class="font-satoshi text-lg font-medium mb-2 group-hover:text-darkCharcoal transition-colors duration-300">QUOTATION</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="font-satoshi text-xs uppercase tracking-widest text-gray-600 leading-relaxed">
                                        START BY VISITING YOUR PLACE TO UNDERSTAND WHAT YOU NEED. IT'S ALL ABOUT GETTING ON THE SAME PAGE.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="group border-b border-warmBeige pb-8 hover:border-darkCharcoal transition-colors duration-300">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-8">
                                    <span class="font-boska text-2xl font-light text-gray-400 group-hover:text-darkCharcoal transition-colors duration-300">03</span>
                                    <div>
                                        <h3 class="font-satoshi text-lg font-medium mb-2 group-hover:text-darkCharcoal transition-colors duration-300">DOWN PAYMENT</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="font-satoshi text-xs uppercase tracking-widest text-gray-600 leading-relaxed">
                                        START BY VISITING YOUR PLACE TO UNDERSTAND WHAT YOU NEED. IT'S ALL ABOUT GETTING ON THE SAME PAGE.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="group border-b border-warmBeige pb-8 hover:border-darkCharcoal transition-colors duration-300">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-8">
                                    <span class="font-boska text-2xl font-light text-gray-400 group-hover:text-darkCharcoal transition-colors duration-300">04</span>
                                    <div>
                                        <h3 class="font-satoshi text-lg font-medium mb-2 group-hover:text-darkCharcoal transition-colors duration-300">DESIGN PROCESS</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="font-satoshi text-xs uppercase tracking-widest text-gray-600 leading-relaxed">
                                        START BY VISITING YOUR PLACE TO UNDERSTAND WHAT YOU NEED. IT'S ALL ABOUT GETTING ON THE SAME PAGE.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="group border-b border-warmBeige pb-8 hover:border-darkCharcoal transition-colors duration-300">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-8">
                                    <span class="font-boska text-2xl font-light text-gray-400 group-hover:text-darkCharcoal transition-colors duration-300">05</span>
                                    <div>
                                        <h3 class="font-satoshi text-lg font-medium mb-2 group-hover:text-darkCharcoal transition-colors duration-300">FINAL MEASUREMENTS</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="font-satoshi text-xs uppercase tracking-widest text-gray-600 leading-relaxed">
                                        START BY VISITING YOUR PLACE TO UNDERSTAND WHAT YOU NEED. IT'S ALL ABOUT GETTING ON THE SAME PAGE.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="group border-b border-warmBeige pb-8 hover:border-darkCharcoal transition-colors duration-300">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-8">
                                    <span class="font-boska text-2xl font-light text-gray-400 group-hover:text-darkCharcoal transition-colors duration-300">06</span>
                                    <div>
                                        <h3 class="font-satoshi text-lg font-medium mb-2 group-hover:text-darkCharcoal transition-colors duration-300">EXECUTION</h3>
                                    </div>
                                </div>
                                <div class="max-w-md">
                                    <p class="font-satoshi text-xs uppercase tracking-widest text-gray-600 leading-relaxed">
                                        START BY VISITING YOUR PLACE TO UNDERSTAND WHAT YOU NEED. IT'S ALL ABOUT GETTING ON THE SAME PAGE.
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
    <section id="contact" class="relative min-h-screen bg-black text-white">
        <div class="absolute inset-0 grid grid-cols-12">
            <!-- Left side - Interior Image -->
            <div class="col-span-6 relative">
                <img 
                    src="1.jpg"
                    alt="Modern luxury interior design"
                    class="w-full h-full object-cover"
                />
                <!-- Overlay for text readability -->
                <div class="absolute inset-0 bg-black/10"></div>
                
                <!-- PMG Logo/Watermark -->
                <div class="absolute bottom-8 left-8">
                    <div class="w-12 h-12 border-2 border-white flex items-center justify-center">
                        <span class="font-boska text-white text-lg font-medium">P</span>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Contact Information -->
            <div class="col-span-5 bg-black flex flex-col justify-center px-12 py-16">
                <!-- Main Heading -->
                <div class="mb-16">
                    <h2 class="font-boska text-4xl md:text-5xl font-light leading-tight mb-4">
                        Get your dream<br />
                        living with us.
                    </h2>
                    <div class="text-right">
                        <span class="font-satoshi text-xs tracking-widest text-gray-400">(GET IN CONTACT<br/>WITH US)</span>
                    </div>
                </div>
                
                <!-- Contact Grid -->
                <div class="grid grid-cols-2 gap-x-8 gap-y-12 text-xs">
                    <!-- Row 1 -->
                    <div>
                        <h3 class="font-satoshi font-semibold tracking-widest mb-2">MALANG,</h3>
                        <p class="font-satoshi text-gray-400">SURABAYA</p>
                    </div>
                    
                    <div>
                        <h3 class="font-satoshi font-semibold tracking-widest mb-2">OFFICE</h3>
                        <p class="font-satoshi text-gray-400">+62</p>
                    </div>
                    
                    <!-- Row 2 -->
                    <div>
                        <h3 class="font-satoshi font-semibold tracking-widest mb-2">INDONESIA</h3>
                    </div>
                    
                    <div>
                        <h3 class="font-satoshi font-semibold tracking-widest mb-2">APPOINTMENT</h3>
                    </div>
                    
                    <!-- Row 3 -->
                    <div>
                        <h3 class="font-satoshi font-semibold tracking-widest mb-2">5PM</h3>
                    </div>
                    
                    <div>
                        <h3 class="font-satoshi font-semibold tracking-widest mb-2">HOUR</h3>
                        <p class="font-satoshi text-gray-400">ONLY</p>
                    </div>
                    
                    <!-- Row 4 -->
                    <div>
                        <h3 class="font-satoshi font-semibold tracking-widest mb-2">9PM</h3>
                    </div>
                    
                    <div>
                        <h3 class="font-satoshi font-semibold tracking-widest mb-2">CONTACT</h3>
                        <p class="font-satoshi text-gray-400">US NOW!</p>
                    </div>
                </div>
                
                <!-- Bottom Contact Info -->
                <div class="mt-16 space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="font-satoshi text-gray-400">@PUNCAKMASGALLERY</span>
                        <span class="font-satoshi font-semibold tracking-widest">+62 8224 3740 2700</span>
                    </div>
                    <div class="text-gray-400">
                        <span class="font-satoshi tracking-widest">I N F O @ P M G . C O M</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Project data with multiple images
        const projectsData = [
            {
                title: "Modern Living Room",
                category: "RESIDENTIAL DESIGN",
                year: "2023",
                location: "Malang, Indonesia",
                area: "120 m²",
                duration: "3 months",
                description: "A garage is often seen as an afterthought—a purely utilitarian space hidden from the rest of the home. But at Puncak Mas Gallery, we believe the garage is more than just storage; it's a gallery, a stage, and a reflection of identity. In ultra-luxury design, a garage transcends function. It becomes a curated space that showcases passion.",
                features: [
                    "High-end materials and finishes",
                    "Integrated lighting system",
                    "Custom cabinetry solutions",
                    "Smart home integration"
                ],
                images: ["1.jpg", "3.jpg", "0.jpg", "16.jpg"]
            },
            {
                title: "Luxury Kitchen",
                category: "KITCHEN DESIGN",
                year: "2023",
                location: "Surabaya, Indonesia",
                area: "85 m²",
                duration: "2.5 months",
                description: "Through high-end materials, integrated lighting, and seamless architectural flow, Puncak Mas Gallery transforms kitchens into statements of elegance. No longer just a place to cook, these spaces blend functionality with artistry, offering a luxurious experience from the moment you step in.",
                features: [
                    "Premium marble countertops",
                    "Custom built-in appliances",
                    "Designer pendant lighting",
                    "Wine storage solutions"
                ],
                images: ["3.jpg", "1.jpg", "16.jpg", "0.jpg"]
            },
            {
                title: "Bedroom Suite",
                category: "BEDROOM DESIGN",
                year: "2022",
                location: "Malang, Indonesia",
                area: "95 m²",
                duration: "2 months",
                description: "A bedroom should command attention, just like the prized possessions it shelters. By incorporating gallery-like elements—bespoke finishes, concealed lighting, and strategic spatial planning—we redefine its purpose, making it an essential extension of the home's identity.",
                features: [
                    "Custom headboard design",
                    "Walk-in wardrobe",
                    "Ambient lighting control",
                    "Premium textile selections"
                ],
                images: ["0.jpg", "16.jpg", "3.jpg", "1.jpg"]
            },
            {
                title: "Dining Area",
                category: "DINING DESIGN",
                year: "2022",
                location: "Malang, Indonesia",
                area: "75 m²",
                duration: "2 months",
                description: "Creating spaces where families gather and memories are made. Our dining areas are designed with both aesthetics and functionality in mind, providing the perfect backdrop for special moments.",
                features: [
                    "Statement chandelier",
                    "Custom dining furniture",
                    "Feature wall design",
                    "Integrated storage"
                ],
                images: ["1.jpg", "0.jpg", "3.jpg", "16.jpg"]
            },
            {
                title: "Home Office",
                category: "OFFICE DESIGN",
                year: "2021",
                location: "Surabaya, Indonesia",
                area: "65 m²",
                duration: "1.5 months",
                description: "Productivity meets luxury in our home office designs. We create inspiring workspaces that enhance focus while maintaining the elegance and comfort of a high-end residential interior.",
                features: [
                    "Ergonomic furniture",
                    "Task lighting system",
                    "Built-in bookshelves",
                    "Acoustic treatments"
                ],
                images: ["3.jpg", "16.jpg", "1.jpg", "0.jpg"]
            },
            {
                title: "Walk-in Closet",
                category: "STORAGE DESIGN",
                year: "2021",
                location: "Malang, Indonesia",
                area: "45 m²",
                duration: "1.5 months",
                description: "More than just storage, our walk-in closets are boutique-inspired spaces where organization meets luxury. Every detail is crafted to showcase your wardrobe in style.",
                features: [
                    "Custom shelving system",
                    "LED strip lighting",
                    "Center island",
                    "Full-length mirrors"
                ],
                images: ["0.jpg", "3.jpg", "16.jpg", "1.jpg"]
            },
            {
                title: "Bathroom Design",
                category: "BATHROOM DESIGN",
                year: "2020",
                location: "Surabaya, Indonesia",
                area: "55 m²",
                duration: "2 months",
                description: "Transform your daily routine into a spa-like experience. Our bathroom designs combine luxury materials with thoughtful functionality to create your personal sanctuary.",
                features: [
                    "Rain shower system",
                    "Freestanding bathtub",
                    "Heated flooring",
                    "Premium fixtures"
                ],
                images: ["0.jpg", "1.jpg", "3.jpg", "16.jpg"]
            },
            {
                title: "Outdoor Terrace",
                category: "OUTDOOR DESIGN",
                year: "2020",
                location: "Malang, Indonesia",
                area: "110 m²",
                duration: "3 months",
                description: "Extending luxury beyond the walls of your home. Our outdoor terrace designs create seamless transitions between indoor and outdoor living, perfect for entertainment and relaxation.",
                features: [
                    "Weather-resistant furniture",
                    "Outdoor kitchen",
                    "Ambient lighting",
                    "Landscaping integration"
                ],
                images: ["3.jpg", "0.jpg", "16.jpg", "1.jpg"]
            }
        ];

        let currentProject = 0;
        let currentImageIndex = 0;
        let detailsOpen = false;

        // Portfolio slider functionality
        let currentSlide = 0;
        const totalSlides = 3;

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

        // Modal functionality
        function openProjectModal(projectIndex) {
            currentProject = projectIndex;
            currentImageIndex = 0;
            detailsOpen = true; // Changed to true
            
            const modal = document.getElementById('projectModal');
            const project = projectsData[projectIndex];
            
            // Update modal content
            document.getElementById('modalProjectTitle').textContent = project.title;
            document.getElementById('modalProjectCategory').textContent = project.category;
            document.getElementById('modalProjectDescription').textContent = project.description;
            document.getElementById('modalProjectYear').textContent = project.year;
            document.getElementById('modalProjectLocation').textContent = project.location;
            document.getElementById('modalProjectArea').textContent = project.area;
            document.getElementById('modalProjectDuration').textContent = project.duration;
            
            // Update features list
            const featuresList = document.getElementById('modalProjectFeatures');
            featuresList.innerHTML = project.features.map(feature => `<li>• ${feature}</li>`).join('');
            
            // Set initial image
            document.getElementById('modalImage').src = project.images[0];
            document.getElementById('currentImageIndex').textContent = '1';
            document.getElementById('totalImages').textContent = project.images.length;
            
            // Show details panel by default
            document.getElementById('projectDetails').classList.remove('hidden');
            document.getElementById('detailsArrow').textContent = '×';
            
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function changeGalleryImage(direction) {
            const project = projectsData[currentProject];
            currentImageIndex += direction;
            
            if (currentImageIndex < 0) {
                currentImageIndex = project.images.length - 1;
            } else if (currentImageIndex >= project.images.length) {
                currentImageIndex = 0;
            }
            
            document.getElementById('modalImage').style.opacity = '0';
            
            setTimeout(() => {
                document.getElementById('modalImage').src = project.images[currentImageIndex];
                document.getElementById('currentImageIndex').textContent = currentImageIndex + 1;
                document.getElementById('modalImage').style.opacity = '1';
            }, 150);
        }

        function toggleDetails() {
            detailsOpen = !detailsOpen;
            const detailsPanel = document.getElementById('projectDetails');
            const arrow = document.getElementById('detailsArrow');
            
            if (detailsOpen) {
                detailsPanel.classList.remove('hidden');
                arrow.textContent = '×';
            } else {
                detailsPanel.classList.add('hidden');
                arrow.textContent = '→';
            }
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
    </script>
</body>
</html>