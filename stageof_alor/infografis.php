<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infografis - Stasiun Geofisika Alor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="site-header.css?v=4">
</head>
<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen">

    <?php include 'navbar.html'; ?>

    <header class="site-header hero-infografis border-b-4 border-yellow-500">
        <div class="container mx-auto px-4">
            <h2 class="site-title font-black mb-4 uppercase tracking-tighter">Galeri Infografis</h2>
            <p class="text-sm opacity-90 max-w-2xl mx-auto font-light">Informasi geofisika visual yang mudah dipahami.</p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12 flex-grow">
        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Seismisitas -->
                <a href="infografis_seismisitas.php" class="group bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <div class="h-48 bg-red-600 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-wave-square text-9xl text-white opacity-20 group-hover:scale-110 transition-transform duration-700"></i>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <h3 class="absolute bottom-6 left-6 text-2xl font-black text-white uppercase tracking-wider">Seismisitas</h3>
                    </div>
                    <div class="p-8">
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                            Peta distribusi gempa bumi bulanan dan mingguan di wilayah Alor dan sekitarnya.
                        </p>
                        <span class="inline-flex items-center text-red-600 font-bold text-xs uppercase tracking-widest group-hover:gap-2 transition-all">
                            Lihat Galeri <i class="fas fa-arrow-right ml-2"></i>
                        </span>
                    </div>
                </a>

                <!-- Petir -->
                <a href="infografis_petir.php" class="group bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <div class="h-48 bg-yellow-500 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-bolt text-9xl text-white opacity-20 group-hover:scale-110 transition-transform duration-700"></i>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <h3 class="absolute bottom-6 left-6 text-2xl font-black text-white uppercase tracking-wider">Petir</h3>
                    </div>
                    <div class="p-8">
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                            Peta kerapatan sambaran petir (lightning density) untuk analisis cuaca ekstrem.
                        </p>
                        <span class="inline-flex items-center text-yellow-600 font-bold text-xs uppercase tracking-widest group-hover:gap-2 transition-all">
                            Lihat Galeri <i class="fas fa-arrow-right ml-2"></i>
                        </span>
                    </div>
                </a>

                <!-- Magnet Bumi -->
                <a href="infografis_magnetbumi.php" class="group bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <div class="h-48 bg-blue-600 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-magnet text-9xl text-white opacity-20 group-hover:scale-110 transition-transform duration-700"></i>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <h3 class="absolute bottom-6 left-6 text-2xl font-black text-white uppercase tracking-wider">Magnet Bumi</h3>
                    </div>
                    <div class="p-8">
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                            Grafik variasi harian medan magnet bumi dan indeks gangguan magnetik.
                        </p>
                        <span class="inline-flex items-center text-blue-600 font-bold text-xs uppercase tracking-widest group-hover:gap-2 transition-all">
                            Lihat Galeri <i class="fas fa-arrow-right ml-2"></i>
                        </span>
                    </div>
                </a>

            </div>
        </div>
    </main>

    <?php include 'footer.html'; ?>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
