<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puncak Mas Gallery - Luxury Interior Design</title>
    <link href="https://api.fontshare.com/v2/css?f[]=boska@400,500,600,700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @import url('https://api.fontshare.com/v2/css?f[]=boska@200,300,400,500,700&display=swap');

    
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
        /* Override Tailwind's default spacing for better typography */
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

        .text-timeline {
            
        }

        .section-heading {
            font-family: 'Boska', serif;
            font-weight: 300;
            line-height: 1.2;
        }

        /* .h3-about {
            font-size: 35px;
        } */

        /* .h3-timeline {
            font-size: 30px;
        } */

        /* Custom colors matching the image */
        .text-darkCharcoal {
            color: #2c2c2c;
        }
        
        .text-warmGray {
            color: #666666;
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
            {{-- <div class="px-6 w-full">
                <div class="grid grid-cols-12 gap-6 h-full items-center">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="text-white">
                            <h1 class="font-boska text-6xl lg:text-7xl font-light leading-tight mb-8">
                                Luxury Interior
                                <br />
                                Design Studio
                            </h1>
                            <p class="font-satoshi text-lg mb-8 opacity-90 max-w-md">
                                Creating extraordinary spaces that reflect your unique vision and lifestyle through timeless design excellence.
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
            
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
                        {{-- <div class="w-8 h-8 border border-darkCharcoal rounded-full flex items-center justify-center">
                            <span class="hero-heading text-darkCharcoal">©</span>
                        </div> --}}
                    </div>
                </div>
                
                <!-- Right column - Content grid -->
                <div class="col-span-12 lg:col-span-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-12">
                        <!-- Top left -->
                        <div>
                            <h3 class="h3-about font-satoshi uppercase tracking-widest mb-4 text-darkCharcoal"><b>ESTABLISHED IN 1994,</b></h3>
                            <p class="p-about mb-8"> 
                                {{-- text-sm leading-relaxed text-gray-700 --}}
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

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        lightGray: '#f8f8f8',
                        darkCharcoal: '#2d2d2d'
                    },
                    fontFamily: {
                        'boska': ['Georgia', 'serif'],
                        'satoshi': ['system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>

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
                <!-- Vertical grid lines - Fixed to show only 4 columns -->
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
                                    <div class="group cursor-pointer h-full flex flex-col">
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
                                    <div class="group cursor-pointer h-full flex flex-col">
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
                                    <div class="group cursor-pointer h-full flex flex-col">
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
                                    <div class="group cursor-pointer h-full flex flex-col">
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
                                    <div class="group cursor-pointer h-full flex flex-col">
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
                                    <div class="group cursor-pointer h-full flex flex-col">
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
                                    <div class="group cursor-pointer h-full flex flex-col">
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
                                    <div class="group cursor-pointer h-full flex flex-col">
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

        <!-- Navigation Controls - Repositioned for better spacing -->
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
        let currentSlide = 0;
        const totalSlides = 3;

        function updateSlider() {
            const slider = document.getElementById('projectsSlider');
            const translateX = -currentSlide * 100;
            slider.style.transform = `translateX(${translateX}%)`;
            
            // Update navigation buttons
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            prevBtn.disabled = currentSlide === 0;
            nextBtn.disabled = currentSlide === totalSlides - 1;
            
            // Update dots
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

        function goToSlide(slideIndex) {
            if (slideIndex >= 0 && slideIndex < totalSlides) {
                currentSlide = slideIndex;
                updateSlider();
            }
        }

        // Initialize slider
        updateSlider();

        // Touch/swipe support
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
            
            // Check if horizontal swipe is more significant than vertical
            if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
                if (diffX > 0) {
                    nextSlide();
                } else {
                    previousSlide();
                }
            }
            
            isSwipe = false;
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                previousSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
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
    </script>
</body>
</html>