<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas & Fungsi - Stasiun Geofisika Alor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="site-header.css?v=4">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <?php include 'navbar.html'; ?>

    <header class="site-header hero-profil border-b-4 border-yellow-500">
        <div class="container mx-auto px-4">
            <h2 class="site-title font-black mb-2 uppercase">Tugas & Fungsi</h2>
            <p class="text-sm opacity-80 max-w-2xl mx-auto font-light tracking-widest ">Tanggung jawab kami dalam pelayanan publik</p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <section class="mb-12">
                <h3 class="text-2xl font-black text-blue-900 mb-6 uppercase flex items-center">
                    <span class="w-10 h-1 bg-yellow-500 mr-4"></span> Tugas Pokok
                </h3>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 leading-relaxed text-gray-700">
                    <p class="mb-4">
                        Stasiun Geofisika Alor mempunyai tugas melaksanakan pengamatan, pengelolaan data, pelayanan informasi, dan pemeliharaan alat geofisika, serta koordinasi dengan pemerintah daerah setempat.
                    </p>
                </div>
            </section>

            <section>
                <h3 class="text-2xl font-black text-blue-900 mb-6 uppercase flex items-center">
                    <span class="w-10 h-1 bg-yellow-500 mr-4"></span> Fungsi Utama
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-yellow-50 p-6 rounded-2xl border border-yellow-200 hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center text-white mr-3">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4 class="font-bold text-lg text-gray-900">Pengamatan</h4>
                        </div>
                        <p class="text-sm text-gray-600">Melaksanakan pengamatan gempabumi, magnet bumi, dan listrik udara secara terus menerus.</p>
                    </div>

                    <div class="bg-blue-50 p-6 rounded-2xl border border-blue-200 hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white mr-3">
                                <i class="fas fa-database"></i>
                            </div>
                            <h4 class="font-bold text-lg text-gray-900">Pengelolaan Data</h4>
                        </div>
                        <p class="text-sm text-gray-600">Mengumpulkan, mengolah, dan menganalisis data geofisika untuk keperluan database nasional.</p>
                    </div>

                    <div class="bg-green-50 p-6 rounded-2xl border border-green-200 hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center text-white mr-3">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <h4 class="font-bold text-lg text-gray-900">Pelayanan Informasi</h4>
                        </div>
                        <p class="text-sm text-gray-600">Memberikan informasi gempabumi terkini dan peringatan dini tsunami kepada stakeholder dan masyarakat.</p>
                    </div>

                    <div class="bg-purple-50 p-6 rounded-2xl border border-purple-200 hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center text-white mr-3">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h4 class="font-bold text-lg text-gray-900">Pemeliharaan</h4>
                        </div>
                        <p class="text-sm text-gray-600">Melakukan perawatan dan kalibrasi peralatan operasional agar selalu dalam kondisi prima.</p>
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
