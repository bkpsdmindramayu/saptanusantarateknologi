<!DOCTYPE html>
<html lang="id" style="overflow-x: hidden;">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sapta Nusantara Teknologi | Official Premium Profile</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sapta-blue': '#1a56a5',
                        'sapta-green': '#28a745',
                        'dark-deep': '#020617',
                    },
                    fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                }
            }
        }
    </script>

    <style>
        body { 
    background: #ffffff; 
    overflow-x: hidden; 
    width: 100%; 
    margin: 0; 
    padding: 0; 
}
/* Styling Executive Board - Visible Light Version */
.exec-card {
    background:#ffffff;
    /* Memberikan border tipis agar bentuk kartu terlihat jelas */
    border: 1px solid #e2e8f0; 
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    position: relative;
    overflow: hidden;
    /* Memberikan bayangan agar kartu terlihat "mengangkat" dari background */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05); 
}

.exec-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(26, 86, 165, 0.05), transparent);
    transition: 0.5s;
}

.exec-card:hover::before {
    left: 100%;
}

.exec-card:hover {
    background: #ffffff;
    border-color: #1a56a5;
    transform: translateY(-12px);
    /* Bayangan lebih dalam saat di-hover */
    box-shadow: 0 20px 40px rgba(26, 86, 165, 0.12); 
}

.exec-number {
    font-family: 'Plus Jakarta Sans', sans-serif;
    /* Memberikan stroke yang sedikit lebih gelap agar angka terlihat */
    -webkit-text-stroke: 1.5px rgba(15, 23, 42, 0.15); 
    color: transparent;
    transition: 0.4s;
}

.exec-card:hover .exec-number {
    -webkit-text-stroke: 1.5px #1a56a5;
    opacity: 0.2;
}
/* Styling Filosofi Premium */
.philo-card {
    background: #ffffff;
    border: 1px solid #f1f5f9;
    transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
    position: relative;
    z-index: 1;
}

.philo-card:hover {
    transform: translateY(-15px) scale(1.03);
    box-shadow: 0 40px 80px rgba(26, 86, 165, 0.1);
    border-color: #1a56a5;
}

.philo-icon-box {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 24px;
    margin-bottom: 2rem;
    transition: all 0.5s ease;
    background: #f8fafc;
    color: #1a56a5;
}

.philo-card:hover .philo-icon-box {
    background: #1a56a5;
    color: #ffffff;
    transform: rotateY(180deg);
}

.philo-line {
    width: 40px;
    height: 4px;
    background: #28a745;
    margin-bottom: 1.5rem;
    transition: width 0.5s ease;
}

.philo-card:hover .philo-line {
    width: 100%;
}
/* Tekstur Background agar tidak sepi */
.dot-pattern {
    background-image: radial-gradient(rgba(26, 86, 165, 0.05) 2px, transparent 2px);
    background-size: 30px 30px;
}

/* Animasi Floating untuk elemen dekoratif */
@keyframes slowRotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.decor-circle {
    position: absolute;
    border: 2px dashed rgba(26, 86, 165, 0.1);
    border-radius: 50%;
    animation: slowRotate 20s linear infinite;
    pointer-events: none;
}
/* Efek Cahaya Bergerak di Background */
.light-glow {
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(26, 86, 165, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    filter: blur(80px);
    z-index: 0;
    animation: pulseGlow 10s ease-in-out infinite;
}

@keyframes pulseGlow {
    0%, 100% { transform: scale(1); opacity: 0.5; }
    50% { transform: scale(1.2); opacity: 0.8; }
}

/* 3D Floating Image Style */
.hero-visual-container {
    perspective: 1000px;
}

.floating-3d-logo {
    transform-style: preserve-3d;
    animation: float3D 6s ease-in-out infinite;
}

@keyframes float3D {
    0%, 100% { transform: translateY(0) rotateX(0) rotateY(5deg); }
    50% { transform: translateY(-30px) rotateX(10deg) rotateY(-5deg); }
}

/* Glass Card untuk Statistik */
.glass-stat-card {
    background: rgba(255, 255, 255, 0.6);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: 0 20px 40px rgba(0,0,0,0.03);
}
/* Efek Hover Gambar di Beranda */
.hero-image-frame {
    position: relative;
    border: 20px solid #ffffff;
    box-shadow: 0 50px 100px rgba(0,0,0,0.1);
    transition: all 0.5s ease;
}

.hero-image-frame:hover {
    transform: scale(1.02) rotate(-1deg);
    border-color: #f8fafc;
}

/* Pola Grid Halus untuk latar belakang */
.grid-bg {
    background-image: linear-gradient(#f1f5f9 1.5px, transparent 1.5px), linear-gradient(90deg, #f1f5f9 1.5px, transparent 1.5px);
    background-size: 50px 50px;
}
        /* Navbar Styling */
        .fixed-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px) saturate(180%);
            border-bottom: 3px solid #1a56a5;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Hover Animation untuk Link */
        .nav-link-custom {
            position: relative;
            transition: color 0.3s;
        }
        .nav-link-custom::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(90deg, #1a56a5, #28a745);
            transition: width 0.3s;
        }
        .nav-link-custom:hover::after {
            width: 100%;
        }

        /* Footer Neon Glow */
        .footer-glow {
            position: relative;
            background: #ffffff;
            border-top: 8px solid #1a56a5;
            box-shadow: 0 -10px 40px rgba(26, 86, 165, 0.05);
        }

        /* Text Gradient Animasi */
        .gradient-text {
            background: linear-gradient(90deg, #1a56a5, #28a745, #1a56a5);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shine 3s linear infinite;
        }
        @keyframes shine { to { background-position: 200% center; } }

        /* Smooth Floating Logo */
        .logo-float {
            animation: logoFloat 3s ease-in-out infinite;
        }
        @keyframes logoFloat {
            0%, 100% { transform: translateY(0); rotate: 0deg; }
            50% { transform: translateY(-8px); rotate: 2deg; }
        }
    </style>
</head>
<body class="text-slate-900 antialiased">

    <nav class="fixed top-0 w-full z-[100] fixed-nav px-8 md:px-16 py-6 flex items-center justify-between shadow-2xl" id="main-nav">
        <a href="#" class="flex items-center gap-5 group">
            <div class="relative">
                <div class="absolute -inset-1 bg-gradient-to-r from-sapta-blue to-sapta-green rounded-xl blur opacity-25 group-hover:opacity-100 transition duration-1000"></div>
                <img src="assets/logo.jpeg" alt="Sapta Logo" class="relative h-14 w-auto rounded-xl shadow-lg logo-float">
            </div>
            <div>
                <p class="font-black text-2xl leading-none text-sapta-blue uppercase">Sapta Nusantara Teknologi</p>
            </div>
        </a>
        
        <div class="flex items-center gap-16">
            <div class="hidden lg:flex gap-12 font-black text-[13px] uppercase tracking-widest text-slate-500">
                <a href="#home" class="nav-link-custom hover:text-sapta-blue">Beranda</a>
                <a href="#filosofi" class="nav-link-custom hover:text-sapta-blue">Filosofi</a>
                <a href="#struktur" class="nav-link-custom hover:text-sapta-blue">Struktur</a>
            </div>
            <a href="#contact" class="group relative inline-flex items-center justify-center px-10 py-4 font-black text-[12px] uppercase tracking-widest text-white transition-all bg-sapta-blue rounded-2xl hover:bg-blue-800 shadow-xl overflow-hidden">
                <span class="relative z-10 flex items-center gap-2">Hubungi Kami <i class="fas fa-arrow-right animate-pulse"></i></span>
                <div class="absolute inset-0 h-full w-full bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
            </a>
        </div>
    </nav>

    <section id="home" class="min-h-screen flex items-center justify-center relative pt-48 pb-24 grid-bg overflow-hidden">
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-sapta-blue/5 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 -right-24 w-[500px] h-[500px] bg-sapta-green/5 rounded-full blur-[100px]"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-20">
            
            <div class="lg:w-1/2 text-left" data-aos="fade-right">
                <div class="inline-flex items-center gap-3 bg-white border border-slate-200 px-6 py-3 rounded-2xl mb-10 shadow-sm">
                    <span class="flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-sapta-green opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-sapta-green"></span>
                    </span>
                    <span class="text-[12px] font-black text-slate-500 uppercase tracking-[0.3em]">Next-Gen Technology</span>
                </div>

                <h1 class="text-6xl md:text-8xl font-[900] leading-[0.85] tracking-tighter text-slate-900 mb-10">
                    Solusi <br>
                    <span class="gradient-text">Digital</span><br>
                    <span id="hero-type"></span>
                </h1>

                <p class="text-xl md:text-2xl text-slate-500 leading-relaxed mb-12 font-medium max-w-xl">
                    Mengintegrasikan inovasi dan kolaborasi untuk menciptakan solusi teknologi unggul berdaya saing global.
                </p>

                <div class="flex flex-wrap gap-6">
                    <a href="#contact" class="px-12 py-6 bg-sapta-blue text-white rounded-[2rem] font-black text-lg hover:shadow-2xl transition-all transform hover:-translate-y-2">
                        Mulai Kerjasama
                    </a>
                    
                </div>
            </div>

            <div class="lg:w-1/2 relative" data-aos="zoom-in" data-aos-delay="300">
                <div class="hero-image-frame rounded-[4rem] overflow-hidden">
                    <img src="assets/logo.jpeg" alt="Identity" class="w-full h-[500px] object-cover">
                </div>

                <div class="absolute -top-10 -right-10 bg-white p-8 rounded-[2.5rem] shadow-2xl border border-slate-50 hidden md:block animate-bounce" style="animation-duration: 5s;">
                    <p class="text-4xl font-black text-sapta-blue mb-1">07</p>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Kekuatan Utama</p>
                </div>
            </div>

        </div>
    </div>
</section>

    <section id="filosofi" class="py-56 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#1a56a5 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-24" data-aos="fade-up">
            <h2 class="text-5xl md:text-6xl font-black text-slate-900 mb-6 tracking-tight">Pilar <span class="gradient-text">Strategis</span></h2>
            <p class="text-slate-500 text-xl max-w-2xl mx-auto font-medium">Membangun fondasi teknologi yang membumi, adaptif, dan berkelanjutan untuk Nusantara.</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-10">
            <div class="philo-card p-12 rounded-[3.5rem] group tilt-card" data-aos="fade-up">
                <div class="philo-icon-box">
                    <i class="fas fa-gem text-3xl"></i>
                </div>
                <div class="philo-line"></div>
                <h3 class="text-3xl font-black mb-6 text-slate-900 group-hover:text-sapta-blue transition-colors">Sapta</h3>
                <p class="text-slate-500 leading-relaxed text-lg font-medium">Tujuh kekuatan kolaboratif yang mencerminkan kesempurnaan, keseimbangan, dan stabilitas jangka panjang perusahaan</p>
            </div>

            <div class="philo-card p-12 rounded-[3.5rem] group tilt-card" data-aos="fade-up" data-aos-delay="200">
                <div class="philo-icon-box">
                    <i class="fas fa-map-marked-alt text-3xl"></i>
                </div>
                <div class="philo-line" style="background: #1a56a5;"></div>
                <h3 class="text-3xl font-black mb-6 text-slate-900 group-hover:text-sapta-green transition-colors">Nusantara</h3>
                <p class="text-slate-500 leading-relaxed text-lg font-medium">Komitmen kontribusi pembangunan digital nasional dari Sabang sampai Merauke dengan standar daya saing global</p>
            </div>

            <div class="philo-card p-12 rounded-[3.5rem] group tilt-card" data-aos="fade-up" data-aos-delay="400">
                <div class="philo-icon-box" style="background: #f1f5f9;">
                    <i class="fas fa-microchip text-3xl text-slate-900"></i>
                </div>
                <div class="philo-line" style="background: #0f172a;"></div>
                <h3 class="text-3xl font-black mb-6 text-slate-900 group-hover:text-slate-600 transition-colors">Teknologi</h3>
                <p class="text-slate-500 leading-relaxed text-lg font-medium">Inti operasional melalui pengembangan sistem informasi inovatif untuk transformasi dunia usaha dan masyarakat</p>
            </div>
        </div>
    </div>
</section>

    <section id="struktur" class="py-48 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sapta-blue/5 blur-[120px] rounded-full"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-sapta-green/5 blur-[120px] rounded-full"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-32" data-aos="fade-up">
            <span class="text-sapta-blue font-black text-xs uppercase tracking-[0.5em] mb-4 block">The Leadership</span>
            <h2 class="text-6xl md:text-7xl font-black mb-8 tracking-tight text-slate-900">Executive Board</h2>
            <div class="w-24 h-1.5 bg-sapta-blue mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php
            $executives = [
                ['Gilan Agustian', 'Komisaris', 'Strategic Oversight'],
                ['Ahmad Gulung P.', 'Direktur Utama', 'Chief Executive'],
                ['Moh Qoerul Anwar', 'Head of Software Development', 'Technology Architect'],
                ['Muhammad Cepy', 'Head of System and Network', 'Infrastructure Lead'],
                ['Janzuar R.', 'Head of QA', 'Quality Standards'],
                ['Dicki Afriyana', 'Staff Business and Marketing', 'Growth & Strategy']
            ];
            foreach($executives as $index => $ex): ?>
            <div class="exec-card p-12 rounded-[3.5rem] group tilt-card" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                <div class="flex justify-between items-start mb-12">
                    <div class="exec-number text-8xl font-black leading-none">0<?= $index + 1 ?></div>
                    <div class="w-14 h-14 bg-slate-50 rounded-full flex items-center justify-center group-hover:bg-sapta-blue transition-all duration-500 shadow-inner">
                        <i class="fas fa-arrow-up-right-from-square text-sm text-slate-400 group-hover:text-white transition-colors"></i>
                    </div>
                </div>
                
                <div class="relative z-10">
                    <h4 class="text-2xl font-black mb-2 tracking-tight text-slate-900 group-hover:text-sapta-blue transition-colors"><?= $ex[0] ?></h4>
                    <p class="text-sapta-green text-xs font-bold uppercase tracking-[0.3em] mb-6"><?= $ex[1] ?></p>
                    <p class="text-slate-400 text-sm font-medium opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-2 group-hover:translate-y-0"><?= $ex[2] ?></p>
                </div>

                <div class="absolute -bottom-8 -right-8 opacity-[0.02] group-hover:opacity-[0.05] transition-opacity text-slate-900">
                    <i class="fas fa-shield-halved text-[12rem] rotate-12"></i>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

    <footer id="contact" class="footer-glow pt-40 pb-16">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-4 gap-24 mb-32">
                <div class="lg:col-span-2 space-y-12" data-aos="fade-right">
                    <div class="flex items-center gap-6">
                        <img src="assets/logo.jpeg" alt="Logo" class="h-20 rounded-2xl shadow-2xl">
                        <span class="font-black text-4xl tracking-tighter text-slate-900 uppercase">PT SAPTA NUSANTARA TEKNOLOGI</span>
                    </div>
                    <p class="text-2xl text-slate-500 leading-relaxed max-w-2xl font-medium">
                        Berkomitmen menghadirkan solusi digital inovatif yang berkelanjutan dan berdampak luas bagi Indonesia.
                    </p>
                    <div class="flex gap-6">
                        <a href="#" class="w-16 h-16 bg-slate-900 text-white rounded-2xl flex items-center justify-center hover:bg-sapta-blue hover:scale-110 transition shadow-xl"><i class="fab fa-linkedin-in text-2xl"></i></a>
                        <a href="#" class="w-16 h-16 bg-slate-900 text-white rounded-2xl flex items-center justify-center hover:bg-sapta-blue hover:scale-110 transition shadow-xl"><i class="fab fa-instagram text-2xl"></i></a>
                    </div>
                </div>
                
                <div class="space-y-10" data-aos="fade-up">
                    <h4 class="font-black text-sm uppercase tracking-[0.4em] text-sapta-blue">Directory</h4>
                    <ul class="space-y-6 font-bold text-xl text-slate-600">
                        <li><a href="#home" class="hover:text-sapta-blue transition flex items-center gap-4"><span class="w-3 h-3 bg-sapta-green rounded-full"></span> Home</a></li>
                        <li><a href="#filosofi" class="hover:text-sapta-blue transition flex items-center gap-4"><span class="w-3 h-3 bg-sapta-green rounded-full"></span> Philosophy</a></li>
                        <li><a href="#struktur" class="hover:text-sapta-blue transition flex items-center gap-4"><span class="w-3 h-3 bg-sapta-green rounded-full"></span> Team</a></li>
                    </ul>
                </div>

                <div class="space-y-10" data-aos="fade-left">
                    <h4 class="font-black text-sm uppercase tracking-[0.4em] text-sapta-blue">Get In Touch</h4>
                    <div class="space-y-8">
                    <div class="bg-slate-50 p-6 md:p-8 rounded-[2rem] border-2 border-slate-100 group hover:border-sapta-blue transition-all w-fit min-w-full lg:min-w-0">
                        <p class="text-[11px] font-black text-slate-400 uppercase mb-3 tracking-widest">Inquiry Email</p>
                        <a href="mailto:corporate@saptanantara.id" class="text-lg md:text-xl font-black text-slate-900 hover:text-sapta-blue transition break-all block">
                            corporate@saptanantara.id
                        </a>
                    </div>
                        <div class="flex items-center gap-4 text-slate-900 font-black text-lg">
                            <i class="fas fa-map-marker-alt text-sapta-blue text-2xl"></i>
                            <span>Sabang - Merauke, ID</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pt-16 border-t border-slate-200 text-center">
                <p class="text-[12px] font-black text-slate-400 uppercase tracking-[0.8em]">
                    &copy; 2026 PT Sapta Nusantara Teknologi. Seluruh Hak Cipta Dilindungi.
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Ganti bagian AOS.init Anda dengan ini
AOS.init({ 
    duration: 1500, 
    once: false,      // Rubah true menjadi false agar animasi berulang
    mirror: true      // Tambahkan ini agar saat scroll ke atas animasi muncul lagi
});

        new TypeIt("#hero-type", {
            strings: ["NUSANTARA.", "MASA DEPAN.", "TEKNOLOGI."],
            speed: 120,
            breakLines: false,
            loop: true,
            nextStringDelay: 2500
        }).go();

        VanillaTilt.init(document.querySelectorAll(".tilt-card"), {
            max: 12,
            speed: 600,
            glare: true,
            "max-glare": 0.15,
            scale: 1.05
        });

        window.addEventListener('scroll', () => {
            const nav = document.getElementById('main-nav');
            if (window.scrollY > 100) {
                nav.style.padding = '15px 60px';
                nav.style.boxShadow = '0 20px 80px rgba(0,0,0,0.1)';
            } else {
                nav.style.padding = '24px 64px';
                nav.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>