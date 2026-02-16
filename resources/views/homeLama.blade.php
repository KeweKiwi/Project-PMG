{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puncak Mas Gallery - Professional Interior Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0a0a0a',
                        secondary: '#f8f8f8',
                        accent: '#c5a572',
                        muted: '#6b7280'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-900 font-sans">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold tracking-tight text-primary">PUNCAK MAS GALLERY</div>
                <div class="hidden md:flex space-x-10">
                    <a href="#home" class="text-sm font-medium hover:text-accent transition-colors nav-link active">HOME</a>
                    <a href="#portfolio" class="text-sm font-medium hover:text-accent transition-colors nav-link">PORTFOLIO</a>
                    <a href="#about" class="text-sm font-medium hover:text-accent transition-colors nav-link">ABOUT</a>
                    <a href="#services" class="text-sm font-medium hover:text-accent transition-colors nav-link">SERVICES</a>
                    <a href="#contact" class="text-sm font-medium hover:text-accent transition-colors nav-link">CONTACT</a>
                </div>
                <button class="md:hidden" id="mobile-menu-btn">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            <!-- Mobile Menu -->
            <div class="md:hidden mt-4 hidden" id="mobile-menu">
                <div class="flex flex-col space-y-4 pb-4">
                    <a href="#home" class="text-sm font-medium hover:text-accent transition-colors nav-link">HOME</a>
                    <a href="#portfolio" class="text-sm font-medium hover:text-accent transition-colors nav-link">PORTFOLIO</a>
                    <a href="#about" class="text-sm font-medium hover:text-accent transition-colors nav-link">ABOUT</a>
                    <a href="#services" class="text-sm font-medium hover:text-accent transition-colors nav-link">SERVICES</a>
                    <a href="#contact" class="text-sm font-medium hover:text-accent transition-colors nav-link">CONTACT</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen overflow-hidden bg-gray-50">
        <div class="absolute inset-0 bg-gradient-to-r from-black/40 via-transparent to-transparent z-10"></div>
        <div class="hero-slider relative h-full">
            <div class="slide active absolute inset-0 bg-cover bg-center transition-all duration-1000" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.1)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')"></div>
            <div class="slide absolute inset-0 bg-cover bg-center transition-all duration-1000 opacity-0" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.1)), url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')"></div>
            <div class="slide absolute inset-0 bg-cover bg-center transition-all duration-1000 opacity-0" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.1)), url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')"></div>
        </div>
        <div class="absolute inset-0 flex items-center z-20">
            <div class="max-w-7xl mx-auto px-6 w-full">
                <div class="max-w-3xl">
                    <h1 class="text-6xl md:text-7xl lg:text-8xl font-light text-white mb-8 leading-none tracking-tight animate-fade-in">
                        LUXURY<br>
                        <span class="text-accent font-normal">INTERIOR</span><br>
                        DESIGN
                    </h1>
                    <p class="text-xl md:text-2xl text-white/90 mb-12 font-light max-w-xl leading-relaxed animate-fade-in-delay">
                        Creating exceptional spaces that reflect your unique style and elevate your lifestyle
                    </p>
                    <button onclick="scrollToSection('contact')" class="group relative bg-accent hover:bg-accent/90 text-white px-10 py-4 text-sm font-medium tracking-wide uppercase transition-all hover:transform hover:scale-105 animate-fade-in-delay-2">
                        BOOK CONSULTATION
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-24 bg-primary text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-16 text-center">
                <div class="counter-item" data-target="15">
                    <div class="text-4xl font-light mb-2 text-accent counter-number">0</div>
                    <div class="text-sm font-medium tracking-wide uppercase text-gray-300">Years Experience</div>
                </div>
                <div class="counter-item" data-target="200">
                    <div class="text-4xl font-light mb-2 text-accent counter-number">0</div>
                    <div class="text-sm font-medium tracking-wide uppercase text-gray-300">Projects Completed</div>
                </div>
                <div class="counter-item" data-target="50">
                    <div class="text-4xl font-light mb-2 text-accent counter-number">0</div>
                    <div class="text-sm font-medium tracking-wide uppercase text-gray-300">Awards Won</div>
                </div>
                <div class="counter-item" data-target="100">
                    <div class="text-4xl font-light mb-2 text-accent counter-number">0</div>
                    <div class="text-sm font-medium tracking-wide uppercase text-gray-300">Client Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Projects -->
    <section id="portfolio" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-20">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-4xl md:text-5xl font-light tracking-tight">RECENT PROJECTS</h2>
                    <a href="#portfolio" class="hidden md:flex items-center text-sm font-medium tracking-wide uppercase hover:text-accent transition-colors">
                        VIEW ALL PROJECTS <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <p class="text-lg text-muted max-w-2xl font-light leading-relaxed">
                    Showcasing recent project builds and the details of uniqueness with recent clients that have worked with us
                </p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-12">
                <div class="group cursor-pointer project-item" data-category="residential" data-project="penthouse">
                    <div class="relative overflow-hidden mb-6 aspect-[4/5]">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Modern Penthouse" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition duration-300"></div>
                        <div class="absolute top-6 left-6 bg-accent px-3 py-1 text-xs font-medium text-white tracking-wide uppercase">
                            Residential
                        </div>
                    </div>
                    <h3 class="text-xl font-medium mb-2 tracking-tight">Modern Penthouse</h3>
                    <p class="text-muted text-sm font-medium tracking-wide uppercase mb-2">Jakarta, Indonesia</p>
                    <p class="text-sm text-gray-600 leading-relaxed">Minimalist luxury meets modern comfort in this stunning penthouse featuring floor-to-ceiling windows and custom furnishings.</p>
                </div>
                <div class="group cursor-pointer project-item" data-category="commercial" data-project="office">
                    <div class="relative overflow-hidden mb-6 aspect-[4/5]">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Executive Office" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition duration-300"></div>
                        <div class="absolute top-6 left-6 bg-accent px-3 py-1 text-xs font-medium text-white tracking-wide uppercase">
                            Commercial
                        </div>
                    </div>
                    <h3 class="text-xl font-medium mb-2 tracking-tight">Executive Office</h3>
                    <p class="text-muted text-sm font-medium tracking-wide uppercase mb-2">Surabaya, Indonesia</p>
                    <p class="text-sm text-gray-600 leading-relaxed">Professional workspace designed to inspire productivity with sophisticated materials and ergonomic solutions.</p>
                </div>
                <div class="group cursor-pointer project-item" data-category="retail" data-project="boutique">
                    <div class="relative overflow-hidden mb-6 aspect-[4/5]">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Boutique Store" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition duration-300"></div>
                        <div class="absolute top-6 left-6 bg-accent px-3 py-1 text-xs font-medium text-white tracking-wide uppercase">
                            Retail
                        </div>
                    </div>
                    <h3 class="text-xl font-medium mb-2 tracking-tight">Boutique Store</h3>
                    <p class="text-muted text-sm font-medium tracking-wide uppercase mb-2">Bali, Indonesia</p>
                    <p class="text-sm text-gray-600 leading-relaxed">Elegant retail space combining tropical aesthetics with contemporary design to create an immersive shopping experience.</p>
                </div>
            </div>
            
            <div class="text-center mt-16 md:hidden">
                <a href="#portfolio" class="inline-flex items-center text-sm font-medium tracking-wide uppercase hover:text-accent transition-colors">
                    VIEW ALL PROJECTS <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Project Gallery Modal -->
    <div id="project-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden">
        <div class="flex items-center justify-center h-full p-6">
            <div class="bg-white max-w-4xl w-full max-h-full overflow-y-auto">
                <div class="p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h3 id="modal-title" class="text-2xl font-light tracking-tight">Project Gallery</h3>
                        <button id="close-modal" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    <div id="project-gallery" class="grid grid-cols-2 gap-4 mb-6">
                        <!-- Gallery images will be inserted here -->
                    </div>
                    <div id="project-concept" class="border-t pt-6">
                        <h4 class="text-lg font-medium mb-3 tracking-tight">Design Concept</h4>
                        <p id="concept-text" class="text-gray-600 leading-relaxed"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <section id="about" class="py-32 bg-secondary">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-light mb-8 tracking-tight">ABOUT US</h2>
                    <div class="mb-8">
                        <h3 class="text-xl font-medium mb-4 tracking-tight">Our Studio Story</h3>
                        <p class="text-base text-muted mb-6 leading-relaxed">
                            Founded in 2008, Puncak Mas Gallery began as a small design studio with a big vision. Over 15 years, we've grown into Indonesia's premier interior design firm, transforming spaces across residential, commercial, and retail sectors.
                        </p>
                    </div>
                    <div class="mb-12">
                        <h3 class="text-xl font-medium mb-4 tracking-tight">Design Philosophy</h3>
                        <p class="text-base text-muted leading-relaxed">
                            We believe that every space tells a story. Our design philosophy centers on creating harmonious environments that reflect the unique personality and lifestyle of our clients. We blend functionality with aesthetic beauty, ensuring that each project is not just visually stunning but also practical for everyday living.
                        </p>
                    </div>
                    <a href="#about" class="inline-flex items-center text-sm font-medium tracking-wide uppercase hover:text-accent transition-colors">
                        LEARN MORE ABOUT US <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="About Puncak Mas Gallery" 
                         class="w-full h-[600px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services & Special Offers -->
    <section id="services" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-20">
                <h2 class="text-4xl md:text-5xl font-light mb-8 tracking-tight">OUR SERVICES</h2>
                <p class="text-lg text-muted max-w-2xl font-light leading-relaxed">
                    Comprehensive interior design solutions from concept to completion
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
                <div class="group text-center service-item">
                    <div class="w-16 h-16 bg-accent/10 flex items-center justify-center mx-auto mb-6 group-hover:bg-accent/20 transition-colors">
                        <i class="fas fa-pencil-ruler text-2xl text-accent"></i>
                    </div>
                    <h3 class="text-lg font-medium mb-3 tracking-tight">DESIGN</h3>
                    <p class="text-sm text-muted leading-relaxed">Complete interior design concepts tailored to your vision</p>
                </div>
                <div class="group text-center service-item">
                    <div class="w-16 h-16 bg-accent/10 flex items-center justify-center mx-auto mb-6 group-hover:bg-accent/20 transition-colors">
                        <i class="fas fa-hammer text-2xl text-accent"></i>
                    </div>
                    <h3 class="text-lg font-medium mb-3 tracking-tight">BUILD</h3>
                    <p class="text-sm text-muted leading-relaxed">Professional construction and renovation services</p>
                </div>
                <div class="group text-center service-item">
                    <div class="w-16 h-16 bg-accent/10 flex items-center justify-center mx-auto mb-6 group-hover:bg-accent/20 transition-colors">
                        <i class="fas fa-palette text-2xl text-accent"></i>
                    </div>
                    <h3 class="text-lg font-medium mb-3 tracking-tight">STYLING</h3>
                    <p class="text-sm text-muted leading-relaxed">Curated furniture and decor selection</p>
                </div>
                <div class="group text-center service-item">
                    <div class="w-16 h-16 bg-accent/10 flex items-center justify-center mx-auto mb-6 group-hover:bg-accent/20 transition-colors">
                        <i class="fas fa-comments text-2xl text-accent"></i>
                    </div>
                    <h3 class="text-lg font-medium mb-3 tracking-tight">CONSULTATION</h3>
                    <p class="text-sm text-muted leading-relaxed">Expert design advice and planning</p>
                </div>
            </div>

            <!-- How We Work Timeline -->
            <div class="mb-20">
                <h3 class="text-3xl font-light mb-12 tracking-tight text-center">HOW WE WORK</h3>
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-accent/30"></div>
                    <div class="space-y-16">
                        <div class="flex items-center">
                            <div class="w-1/2 pr-8 text-right">
                                <div class="bg-white p-6 shadow-sm border-l-4 border-accent">
                                    <h4 class="text-lg font-medium mb-2 tracking-tight">01. CONSULTATION</h4>
                                    <p class="text-sm text-muted">Initial meeting to understand your vision, needs, and budget. We discuss your lifestyle and design preferences.</p>
                                </div>
                            </div>
                            <div class="w-8 h-8 bg-accent rounded-full flex items-center justify-center relative z-10">
                                <i class="fas fa-comments text-white text-sm"></i>
                            </div>
                            <div class="w-1/2 pl-8"></div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-1/2 pr-8"></div>
                            <div class="w-8 h-8 bg-accent rounded-full flex items-center justify-center relative z-10">
                                <i class="fas fa-pencil-ruler text-white text-sm"></i>
                            </div>
                            <div class="w-1/2 pl-8">
                                <div class="bg-white p-6 shadow-sm border-r-4 border-accent">
                                    <h4 class="text-lg font-medium mb-2 tracking-tight">02. DESIGN DEVELOPMENT</h4>
                                    <p class="text-sm text-muted">We create detailed design concepts, 3D visualizations, and material selections for your approval.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-1/2 pr-8 text-right">
                                <div class="bg-white p-6 shadow-sm border-l-4 border-accent">
                                    <h4 class="text-lg font-medium mb-2 tracking-tight">03. PLANNING & PERMITS</h4>
                                    <p class="text-sm text-muted">Technical drawings, permits, and detailed project timeline. We handle all the paperwork and approvals.</p>
                                </div>
                            </div>
                            <div class="w-8 h-8 bg-accent rounded-full flex items-center justify-center relative z-10">
                                <i class="fas fa-clipboard-list text-white text-sm"></i>
                            </div>
                            <div class="w-1/2 pl-8"></div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-1/2 pr-8"></div>
                            <div class="w-8 h-8 bg-accent rounded-full flex items-center justify-center relative z-10">
                                <i class="fas fa-hammer text-white text-sm"></i>
                            </div>
                            <div class="w-1/2 pl-8">
                                <div class="bg-white p-6 shadow-sm border-r-4 border-accent">
                                    <h4 class="text-lg font-medium mb-2 tracking-tight">04. CONSTRUCTION</h4>
                                    <p class="text-sm text-muted">Professional execution with regular updates. Our skilled craftsmen bring the design to life with precision.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-1/2 pr-8 text-right">
                                <div class="bg-white p-6 shadow-sm border-l-4 border-accent">
                                    <h4 class="text-lg font-medium mb-2 tracking-tight">05. FINAL STYLING</h4>
                                    <p class="text-sm text-muted">Installing furniture, artwork, and accessories. We add the finishing touches that make your space complete.</p>
                                </div>
                            </div>
                            <div class="w-8 h-8 bg-accent rounded-full flex items-center justify-center relative z-10">
                                <i class="fas fa-home text-white text-sm"></i>
                            </div>
                            <div class="w-1/2 pl-8"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Special Offer Card -->
            <div class="bg-primary text-white p-12 relative overflow-hidden">
                <div class="relative z-10">
                    <div class="max-w-3xl">
                        <h3 class="text-3xl font-light mb-4 tracking-tight">SPECIAL OFFER</h3>
                        <p class="text-lg font-light mb-8 text-white/90 leading-relaxed">
                            Book your consultation this month and receive 20% off your first design package. Limited time offer for new clients.
                        </p>
                        <button onclick="scrollToSection('contact')" class="bg-accent hover:bg-accent/90 text-white px-10 py-4 text-sm font-medium tracking-wide uppercase transition-all hover:transform hover:scale-105">
                            CLAIM OFFER
                        </button>
                    </div>
                </div>
                <div class="absolute right-0 top-0 h-full w-1/3 bg-gradient-to-l from-accent/10 to-transparent"></div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="py-32 bg-secondary">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-light mb-8 tracking-tight">WHAT OUR CLIENTS SAY</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                <div class="bg-white p-10 shadow-sm testimonial-item">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-star text-accent text-sm mr-1"></i>
                        <i class="fas fa-star text-accent text-sm mr-1"></i>
                        <i class="fas fa-star text-accent text-sm mr-1"></i>
                        <i class="fas fa-star text-accent text-sm mr-1"></i>
                        <i class="fas fa-star text-accent text-sm mr-1"></i>
                    </div>
                    <p class="text-muted mb-8 leading-relaxed italic">"Puncak Mas Gallery transformed our home beyond our expectations. The attention to detail and professional service was outstanding."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gray-200 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-medium text-sm tracking-wide uppercase">SARAH JOHNSON</h4>
                            <p class="text-xs text-muted uppercase tracking-wide">RESIDENTIAL PROJECT</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-10 shadow-sm testimonial-item">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-star text-accent text-sm mr-1"></i>
                        <i class="fas fa-star text-accent text-sm mr-1"></i>
                        <i class="fas fa-star text-accent text-sm mr-1"></i>
                        <i class="fas fa-star text-accent text-sm mr-1"></i>
                        <i class="fas fa-star text-accent text-sm mr-1"></i>
                    </div>
                    <p class="text-muted mb-8 leading-relaxed italic">"Professional, creative, and delivered on time. Our office space now reflects our brand perfectly and impresses our clients."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gray-200 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-medium text-sm tracking-wide uppercase">MICHAEL CHEN</h4>
                            <p class="text-xs text-muted uppercase tracking-wide">COMMERCIAL PROJECT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section id="contact" class="py-32 bg-primary text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light mb-8 tracking-tight">CONTACT US</h2>
                <p class="text-lg font-light text-white/90 leading-relaxed">
                    Inquiries, contact & personal information. Send us a message and let's discuss your project
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-16 mb-16">
<!-- Contact Information -->
                <div>
                    <h3 class="text-2xl font-light mb-8 tracking-tight">Get In Touch</h3>
                    <div class="space-y-6 mb-12">
                        <div class="flex items-center">
                            <i class="fas fa-phone w-6 text-accent mr-4"></i>
                            <span class="text-white/90">+62 21 123 4567</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope w-6 text-accent mr-4"></i>
                            <span class="text-white/90">info@puncakmasgallery.com</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fab fa-whatsapp w-6 text-accent mr-4"></i>
                            <span class="text-white/90">+62 812 3456 7890</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt w-6 text-accent mr-4 mt-1"></i>
                            <div class="text-white/90">
                                <p>Jl. CitraLand CBD Boulevard, Made</p>
                                <p>Kec. Sambikerep, Surabaya, Jawa Timur 60219</p>
                                <p>Indonesia</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Location Map -->
                    <div class="mb-8">
                        <h4 class="text-lg font-medium mb-4 tracking-tight">Our Location</h4>
                        <div class="bg-white/10 p-4 rounded">
                            <div class="aspect-video bg-white/5 rounded overflow-hidden">
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6060211288845!2d112.62902667476067!3d-7.285587192721752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fde455555555%3A0xd7e2611ae591f046!2sUniversitas%20Ciputra%20Surabaya!5e0!3m2!1sen!2sid!4v1749034582192!5m2!1sen!2sid" 
                                    width="100%" 
                                    height="100%" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                            <div class="mt-3 text-center">
                                <p class="text-white/70 text-sm font-medium">Ciputra University Surabaya</p>
                                <p class="text-white/50 text-xs">CitraLand CBD Boulevard, Made, Sambikerep, Surabaya</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Business Hours -->
                    <div>
                        <h4 class="text-lg font-medium mb-4 tracking-tight">Business Hours</h4>
                        <div class="space-y-2 text-white/90 text-sm">
                            <div class="flex justify-between">
                                <span>Monday - Friday</span>
                                <span>9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Saturday</span>
                                <span>9:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sunday</span>
                                <span>By Appointment</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div>
                    <h3 class="text-2xl font-light mb-8 tracking-tight">Send Us a Message</h3>
                    <form class="space-y-6" id="contact-form">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2 text-white/90">Full Name *</label>
                                <input type="text" 
                                       class="w-full bg-white/10 border border-white/20 px-4 py-3 text-white placeholder-white/50 focus:outline-none focus:border-accent focus:bg-white/15 transition-all"
                                       placeholder="Your full name"
                                       required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2 text-white/90">Email Address *</label>
                                <input type="email" 
                                       class="w-full bg-white/10 border border-white/20 px-4 py-3 text-white placeholder-white/50 focus:outline-none focus:border-accent focus:bg-white/15 transition-all"
                                       placeholder="your.email@example.com"
                                       required>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2 text-white/90">Phone Number</label>
                                <input type="tel" 
                                       class="w-full bg-white/10 border border-white/20 px-4 py-3 text-white placeholder-white/50 focus:outline-none focus:border-accent focus:bg-white/15 transition-all"
                                       placeholder="+62 812 3456 7890">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2 text-white/90">Service Type *</label>
                                <select class="w-full bg-white/10 border border-white/20 px-4 py-3 text-white focus:outline-none focus:border-accent focus:bg-white/15 transition-all" required>
                                    <option value="" class="bg-primary text-white">Select a service</option>
                                    <option value="residential" class="bg-primary text-white">Residential Design</option>
                                    <option value="commercial" class="bg-primary text-white">Commercial Design</option>
                                    <option value="retail" class="bg-primary text-white">Retail Design</option>
                                    <option value="consultation" class="bg-primary text-white">Design Consultation</option>
                                    <option value="renovation" class="bg-primary text-white">Renovation</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2 text-white/90">Project Budget</label>
                            <select class="w-full bg-white/10 border border-white/20 px-4 py-3 text-white focus:outline-none focus:border-accent focus:bg-white/15 transition-all">
                                <option value="" class="bg-primary text-white">Select budget range</option>
                                <option value="under-100m" class="bg-primary text-white">Under 100 Million IDR</option>
                                <option value="100m-500m" class="bg-primary text-white">100M - 500M IDR</option>
                                <option value="500m-1b" class="bg-primary text-white">500M - 1B IDR</option>
                                <option value="over-1b" class="bg-primary text-white">Over 1 Billion IDR</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2 text-white/90">Project Details *</label>
                            <textarea rows="5" 
                                      class="w-full bg-white/10 border border-white/20 px-4 py-3 text-white placeholder-white/50 focus:outline-none focus:border-accent focus:bg-white/15 transition-all resize-none"
                                      placeholder="Tell us about your project, timeline, and specific requirements..."
                                      required></textarea>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" class="mt-1 mr-3 accent-accent" required>
                            <label class="text-sm text-white/90 leading-relaxed">
                                I agree to the <a href="#" class="text-accent hover:underline">Terms of Service</a> and <a href="#" class="text-accent hover:underline">Privacy Policy</a>. I consent to being contacted about my inquiry.
                            </label>
                        </div>
                        <button type="submit" 
                                class="w-full bg-accent hover:bg-accent/90 text-white py-4 px-8 font-medium tracking-wide uppercase transition-all hover:transform hover:scale-[1.02] active:scale-98">
                            SEND MESSAGE
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Call to Action -->
            <div class="text-center border-t border-white/10 pt-16">
                <h3 class="text-2xl font-light mb-4 tracking-tight">Ready to Transform Your Space?</h3>
                <p class="text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Schedule a free consultation with our design experts and let's bring your vision to life.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+6221234567" 
                       class="bg-accent hover:bg-accent/90 text-white px-8 py-4 font-medium tracking-wide uppercase transition-all hover:transform hover:scale-105 inline-flex items-center justify-center">
                        <i class="fas fa-phone mr-2"></i>
                        CALL NOW
                    </a>
                    <a href="https://wa.me/6281234567890" 
                       class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 font-medium tracking-wide uppercase transition-all hover:transform hover:scale-105 inline-flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i>
                        WHATSAPP
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="text-xl font-semibold tracking-tight mb-6">PUNCAK MAS GALLERY</div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Creating exceptional interior spaces that reflect your unique style and elevate your lifestyle since 2008.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-accent flex items-center justify-center transition-colors">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-accent flex items-center justify-center transition-colors">
                            <i class="fab fa-facebook text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-accent flex items-center justify-center transition-colors">
                            <i class="fab fa-linkedin text-sm"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-accent flex items-center justify-center transition-colors">
                            <i class="fab fa-youtube text-sm"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-medium mb-6 tracking-tight">SERVICES</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">Residential Design</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">Commercial Design</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">Retail Design</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">Design Consultation</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">Project Management</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-6 tracking-tight">COMPANY</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Our Team</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Press</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-6 tracking-tight">CONTACT</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt w-4 mr-3 text-accent"></i>
                            Jl. CitraLand CBD Boulevard, Made, Kec. Sambikerep <br>Surabaya, Jawa Timur 60219
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone w-4 mr-3 text-accent"></i>
                            +62 21 123 4567
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope w-4 mr-3 text-accent"></i>
                            info@puncakmasgallery.com
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">© 2024 Puncak Mas Gallery. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Navigation link click handlers
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = link.getAttribute('href').substring(1);
                scrollToSection(targetId);
                
                // Close mobile menu if open
                mobileMenu.classList.add('hidden');
                
                // Update active state
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            });
        });

        // Hero slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        
        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            slides[currentSlide].classList.add('opacity-0');
            
            currentSlide = (currentSlide + 1) % slides.length;
            
            slides[currentSlide].classList.remove('opacity-0');
            slides[currentSlide].classList.add('active');
        }
        
        setInterval(nextSlide, 5000);

        // Counter animation
        function animateCounter() {
            const counters = document.querySelectorAll('.counter-item');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const numberElement = counter.querySelector('.counter-number');
                let current = 0;
                const increment = target / 50;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    numberElement.textContent = Math.floor(current);
                }, 40);
            });
        }

        // Intersection Observer for counter animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter();
                    observer.disconnect();
                }
            });
        });

        const statsSection = document.querySelector('.counter-item').parentElement.parentElement;
        observer.observe(statsSection);

        // Project modal functionality
        const projectItems = document.querySelectorAll('.project-item');
        const modal = document.getElementById('project-modal');
        const modalTitle = document.getElementById('modal-title');
        const projectGallery = document.getElementById('project-gallery');
        const conceptText = document.getElementById('concept-text');
        const closeModal = document.getElementById('close-modal');

        const projectData = {
            penthouse: {
                title: 'Modern Penthouse - Jakarta',
                images: [
                    'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1560185127-6ed189bf02f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                concept: 'This modern penthouse embodies minimalist luxury through clean lines, premium materials, and strategic use of natural light. The design philosophy centers on creating an uncluttered sanctuary that maximizes the stunning city views while maintaining warmth through carefully selected textures and accent pieces. Floor-to-ceiling windows serve as living artwork, while the neutral palette allows the urban landscape to become the primary focal point.'
            },
            office: {
                title: 'Executive Office - Surabaya',
                images: [
                    'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1497366412874-3415097a27e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                concept: 'The executive office design balances professionalism with comfort, creating a workspace that inspires productivity and impresses clients. Rich materials like walnut wood and brass accents convey authority and success, while ergonomic furniture and optimal lighting ensure functionality. The layout promotes both collaborative work and private contemplation, with flexible spaces that adapt to various business needs.'
            },
            boutique: {
                title: 'Boutique Store - Bali',
                images: [
                    'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                concept: 'This boutique store captures the essence of Bali\'s tropical sophistication through natural materials, organic forms, and strategic lighting. The design creates an immersive shopping experience that feels more like entering a luxury resort than a retail space. Rattan details, natural stone, and living walls bring the island\'s natural beauty indoors, while thoughtful product placement and circulation patterns enhance the customer journey.'
            }
        };

        projectItems.forEach(item => {
            item.addEventListener('click', () => {
                const projectId = item.getAttribute('data-project');
                const project = projectData[projectId];
                
                if (project) {
                    modalTitle.textContent = project.title;
                    conceptText.textContent = project.concept;
                    
                    // Clear and populate gallery
                    projectGallery.innerHTML = '';
                    project.images.forEach(imageSrc => {
                        const img = document.createElement('img');
                        img.src = imageSrc;
                        img.className = 'w-full h-48 object-cover cursor-pointer hover:opacity-80 transition-opacity';
                        img.onclick = () => {
                            // Simple lightbox effect
                            const lightbox = document.createElement('div');
                            lightbox.className = 'fixed inset-0 bg-black/90 z-50 flex items-center justify-center p-4';
                            lightbox.innerHTML = `
                                <img src="${imageSrc}" class="max-w-full max-h-full object-contain">
                                <button class="absolute top-4 right-4 text-white text-2xl hover:text-accent">&times;</button>
                            `;
                            lightbox.onclick = (e) => {
                                if (e.target === lightbox || e.target.tagName === 'BUTTON') {
                                    document.body.removeChild(lightbox);
                                }
                            };
                            document.body.appendChild(lightbox);
                        };
                        projectGallery.appendChild(img);
                    });
                    
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });

        // Contact form submission
        document.getElementById('contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Simple form validation and submission simulation
            const formData = new FormData(e.target);
            const submitBtn = e.target.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>SENDING...';
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                alert('Thank you for your message! We will get back to you within 24 hours.');
                e.target.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

        // Add CSS animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fade-in {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }
            @keyframes fade-in-delay {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }
            @keyframes fade-in-delay-2 {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-fade-in {
                animation: fade-in 1s ease-out;
            }
            .animate-fade-in-delay {
                animation: fade-in-delay 1s ease-out 0.3s both;
            }
            .animate-fade-in-delay-2 {
                animation: fade-in-delay-2 1s ease-out 0.6s both;
            }
            .nav-link.active {
                color: #c5a572;
            }
            .slide.active {
                opacity: 1;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html> --}}