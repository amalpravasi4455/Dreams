<?php
// Simple PHP logic for the contact form
$form_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // In a real scenario, you would send an email or save to a database here
    $name = htmlspecialchars($_POST['name']);
    $form_status = "Thank you, $name! Your message has been sent successfully.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dreams Builders | Architectural Excellence</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap');
        
        body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        
        .logo-svg:hover { transform: rotate(180deg); }
        .logo-svg { transition: transform 0.5s ease; }
        
        .glass-nav {
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
        }

        .hero-gradient {
            background: linear-gradient(90deg, #000 0%, rgba(0,0,0,0.7) 50%, transparent 100%);
        }

        .service-card:hover {
            transform: translateY(-10px);
            border-color: #e11d48;
        }

        .gallery-img {
            filter: grayscale(100%);
            transition: all 0.5s ease;
        }
        .gallery-item:hover .gallery-img {
            filter: grayscale(0%);
            transform: scale(1.1);
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
    </style>
</head>
<body class="bg-neutral-950 text-white selection:bg-rose-600">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 py-4 transition-all duration-300 glass-nav">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <a href="#" class="flex items-center gap-2 group">
                <div class="relative w-10 h-10 flex items-center justify-center">
                    <svg viewBox="0 0 100 100" class="logo-svg absolute inset-0 w-full h-full">
                        <path d="M20 10 L80 10 L90 50 L80 90 L20 90 Z" fill="none" stroke="#e11d48" stroke-width="8" />
                    </svg>
                    <span class="text-2xl font-black text-white z-10">D</span>
                </div>
                <div class="flex flex-col leading-none">
                    <span class="text-xl font-bold tracking-tighter text-white uppercase">Dreams</span>
                    <span class="text-xs font-bold text-rose-600 tracking-widest uppercase">Builders</span>
                </div>
            </a>
            
            <div class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-sm font-medium hover:text-rose-600 transition-colors">Home</a>
                <a href="#about" class="text-sm font-medium hover:text-rose-600 transition-colors">About</a>
                <a href="#services" class="text-sm font-medium hover:text-rose-600 transition-colors">Services</a>
                <a href="#gallery" class="text-sm font-medium hover:text-rose-600 transition-colors">Gallery</a>
                <a href="#contact" class="text-sm font-medium hover:text-rose-600 transition-colors">Contact</a>
                <button class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2 rounded-full text-sm font-bold transition-all transform hover:scale-105">
                    Get Quote
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 hero-gradient z-10"></div>
            <img src="https://images.unsplash.com/photo-1503387762-592dee58c160?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover" alt="Hero">
        </div>
        
        <div class="relative z-20 max-w-7xl mx-auto px-6 w-full">
            <div class="max-w-2xl reveal active">
                <span class="text-rose-600 font-bold tracking-widest uppercase mb-4 block">Crafting Excellence Since 1998</span>
                <h1 class="text-6xl md:text-8xl font-black mb-6 leading-none uppercase">
                    Building <span class="text-rose-600">Dreams</span> <br> Into Reality.
                </h1>
                <p class="text-neutral-400 text-lg md:text-xl mb-10 max-w-lg leading-relaxed">
                    Premiere architectural solutions and construction excellence. We create legacies through innovative 3D planning and expert craftsmanship.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#contact" class="bg-rose-600 hover:bg-rose-700 text-white px-8 py-4 rounded-lg font-bold flex items-center gap-2 transition-all transform hover:-translate-y-1">
                        Start Your Project <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white text-black">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="relative reveal">
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-rose-600 z-0"></div>
                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&q=80&w=800" class="relative z-10 rounded-lg shadow-2xl" alt="Work">
                <div class="absolute -bottom-6 -right-6 bg-black text-white p-8 rounded-lg z-20">
                    <p class="text-4xl font-bold">25+</p>
                    <p class="text-xs uppercase tracking-widest text-rose-500">Years Experience</p>
                </div>
            </div>
            
            <div class="reveal">
                <h2 class="text-rose-600 font-bold uppercase tracking-wider mb-2">About Our Company</h2>
                <h3 class="text-4xl md:text-5xl font-black mb-6 leading-tight">
                    A Legacy of <span class="text-rose-600 italic">Precision</span> and Visionary Design.
                </h3>
                <p class="text-neutral-600 mb-8 leading-relaxed">
                    Dreams Builders began with a simple mission: to revolutionize the construction landscape by combining architectural artistry with structural integrity.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex items-center gap-3 font-bold"><i class="fa-solid fa-circle-check text-rose-600"></i> Expert Team</div>
                    <div class="flex items-center gap-3 font-bold"><i class="fa-solid fa-circle-check text-rose-600"></i> Eco-Friendly</div>
                    <div class="flex items-center gap-3 font-bold"><i class="fa-solid fa-circle-check text-rose-600"></i> On-Time Delivery</div>
                    <div class="flex items-center gap-3 font-bold"><i class="fa-solid fa-circle-check text-rose-600"></i> Modern Tech</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-neutral-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h2 class="text-rose-600 font-bold uppercase tracking-wider mb-2">Our Services</h2>
                <h3 class="text-4xl font-black">WHAT WE DO BEST</h3>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <?php
                $services = [
                    ["Building Construction", "fa-building", "From foundation to finish, we build structures that stand the test of time."],
                    ["3D Plan Making", "fa-layer-group", "Visualize your dream before the first brick is laid with high-end 3D modeling."],
                    ["Architecture Works", "fa-compass", "Modern, sustainable, and aesthetic designs tailored to your lifestyle."],
                    ["Legal Documentation", "fa-file-signature", "Hassle-free permit processing and legal compliance for all construction types."],
                    ["House Renovation", "fa-hammer", "Transforming old spaces into modern masterpieces with precision."],
                    ["Interior Design", "fa-couch", "Curated interiors that reflect your personality and optimize space."]
                ];

                foreach($services as $s) {
                    echo "
                    <div class='service-card group p-10 bg-black border border-white/5 transition-all duration-500 rounded-2xl cursor-pointer reveal'>
                        <i class='fa-solid $s[1] text-4xl text-rose-600 mb-6 group-hover:scale-110 transition-transform'></i>
                        <h4 class='text-2xl font-bold mb-4'>$s[0]</h4>
                        <p class='text-neutral-400 mb-6'>$s[2]</p>
                        <div class='flex items-center text-rose-600 font-bold gap-2'>
                            Learn More <i class='fa-solid fa-chevron-right text-xs'></i>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-24 bg-black">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-end mb-16 reveal">
                <div>
                    <h2 class="text-rose-600 font-bold uppercase tracking-wider mb-2">Featured Projects</h2>
                    <h3 class="text-4xl font-black">THE GALLERY</h3>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <?php
                $imgs = [
                    "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab",
                    "https://images.unsplash.com/photo-1600585154340-be6161a56a0c",
                    "https://images.unsplash.com/photo-1600607687920-4e2a09cf159d",
                    "https://images.unsplash.com/photo-1512917774080-9991f1c4c750",
                    "https://images.unsplash.com/photo-1613490493576-7fde63acd811",
                    "https://images.unsplash.com/photo-1512918766671-ed6a07be03f6"
                ];
                foreach($imgs as $url) {
                    echo "
                    <div class='gallery-item relative overflow-hidden rounded-xl h-64 reveal'>
                        <img src='$url?auto=format&fit=crop&q=80&w=800' class='gallery-img w-full h-full object-cover'>
                        <div class='absolute inset-0 bg-gradient-to-t from-black flex items-end p-6 opacity-0 hover:opacity-100 transition-opacity'>
                            <p class='font-bold uppercase tracking-widest text-xs'>Modern Architecture</p>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white text-black">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-neutral-950 rounded-[2rem] overflow-hidden flex flex-col md:flex-row shadow-2xl reveal">
                <div class="md:w-2/5 p-12 bg-rose-600 text-white flex flex-col justify-between relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="text-4xl font-black mb-8 leading-tight">Let's Build Your Future Together.</h3>
                        <div class="space-y-6">
                            <div class="flex items-center gap-4"><i class="fa-solid fa-map-pin"></i> 123 Construction Ave, NY</div>
                            <div class="flex items-center gap-4"><i class="fa-solid fa-phone"></i> +1 (555) 000-8888</div>
                            <div class="flex items-center gap-4"><i class="fa-solid fa-envelope"></i> hello@dreambuilders.com</div>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-8">
                        <i class="fa-brands fa-facebook text-xl hover:text-black cursor-pointer"></i>
                        <i class="fa-brands fa-instagram text-xl hover:text-black cursor-pointer"></i>
                        <i class="fa-brands fa-linkedin text-xl hover:text-black cursor-pointer"></i>
                    </div>
                </div>

                <div class="md:w-3/5 p-12 bg-neutral-950 text-white">
                    <?php if($form_status): ?>
                        <div class="bg-rose-600/20 border border-rose-600 p-4 rounded-lg mb-6 text-rose-500 font-bold">
                            <?php echo $form_status; ?>
                        </div>
                    <?php endif; ?>
                    <form action="#contact" method="POST" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <input name="name" type="text" required class="w-full bg-white/5 border border-white/10 rounded-lg p-4 focus:border-rose-600 outline-none" placeholder="Your Name">
                            <input name="email" type="email" required class="w-full bg-white/5 border border-white/10 rounded-lg p-4 focus:border-rose-600 outline-none" placeholder="Email Address">
                        </div>
                        <textarea name="message" rows="4" class="w-full bg-white/5 border border-white/10 rounded-lg p-4 focus:border-rose-600 outline-none" placeholder="Your Project Description"></textarea>
                        <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white py-4 rounded-lg font-black tracking-widest transition-all">
                            SEND INQUIRY NOW
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-12 border-t border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-neutral-600 text-sm">© 2024 Dreams Builders. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Scroll Reveal Animation
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        // Initial check
        reveal();
    </script>
</body>
</html>