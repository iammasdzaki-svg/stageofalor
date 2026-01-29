<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - Stasiun Geofisika Alor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="site-header.css?v=4">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <?php include 'navbar.html'; ?>

    <header class="site-header hero-profil border-b-4 border-yellow-500">
        <div class="container mx-auto px-4">
            <h2 class="site-title font-black mb-2 uppercase">Visi & Misi</h2>
            <p class="text-sm opacity-80 max-w-2xl mx-auto font-light tracking-widest ">Landasan dan tujuan kami dalam bekerja</p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="max-w-5xl mx-auto">
            <section>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-blue-900 text-white p-10 rounded-3xl shadow-xl transform hover:scale-105 transition duration-500">
                        <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center text-blue-900 text-2xl mb-6 shadow-lg">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4 class="font-black text-3xl mb-6 text-yellow-400 uppercase tracking-tight">Visi</h4>
                        <p class="text-lg leading-relaxed italic font-light border-l-4 border-yellow-500 pl-6">"Menjadi Stasiun Geofisika yang andal, cepat, tepat, akurat, luas jangkauannya dan mudah dipahami."</p>
                    </div>
                    
                    <div class="bg-white p-10 rounded-3xl shadow-xl border border-gray-100 flex flex-col justify-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-900 text-2xl mb-6 shadow-sm">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4 class="font-black text-3xl mb-6 text-blue-900 uppercase tracking-tight">Misi</h4>
                        <ul class="space-y-4 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg"></i>
                                <span>Mewujudkan pengamatan geofisika secara berkelanjutan.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg"></i>
                                <span>Menyediakan data informasi yang relevan untuk pembangunan daerah.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg"></i>
                                <span>Meningkatkan kesadaran mitigasi bencana masyarakat Alor.</span>
                            </li>
                             <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3 text-lg"></i>
                                <span>Berpartisipasi aktif dalam kegiatan internasional di bidang geofisika.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
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
