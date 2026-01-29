<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Stasiun Geofisika Alor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="site-header.css?v=4">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <?php include 'navbar.html'; ?>

    <header class="site-header hero-profil border-b-4 border-yellow-500">
        <div class="container mx-auto px-4">
            <h2 class="site-title font-black mb-2 uppercase">Profil Stasiun</h2>
            <p class="text-sm opacity-80 max-w-2xl mx-auto font-light tracking-widest ">Mengenal lebih dekat UPT Geofisika di ujung timur Nusa Tenggara Timur</p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <div class="lg:col-span-2 space-y-12">
                <section>
                    <h3 class="text-2xl font-black text-blue-900 mb-6 uppercase flex items-center">
                        <span class="w-10 h-1 bg-yellow-500 mr-4"></span> Sejarah Singkat
                    </h3>
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 leading-relaxed text-gray-700">
                        <p class="mb-4 text-justify">
                            Stasiun Geofisika Kelas III Alor merupakan Unit Pelaksana Teknis (UPT) Badan Meteorologi Klimatologi dan Geofisika yang memiliki peran vital dalam monitoring kegempaan di wilayah Kabupaten Alor dan sekitarnya. 
                        </p>
                        <p class="text-justify">
                            Berlokasi di kawasan Mali, stasiun ini menjadi garda terdepan dalam pengamatan aktivitas tektonik guna memberikan rasa aman bagi masyarakat dari ancaman bencana gempabumi dan tsunami melalui sistem peringatan dini yang terintegrasi dengan InaTEWS Pusat.
                        </p>
                    </div>
                </section>

                <section>
                    <h3 class="text-2xl font-black text-blue-900 mb-6 uppercase flex items-center">
                        <span class="w-10 h-1 bg-yellow-500 mr-4"></span> Visi & Misi
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-blue-900 text-white p-6 rounded-2xl shadow-lg">
                            <h4 class="font-bold mb-3 text-yellow-400 uppercase">Visi</h4>
                            <p class="text-sm leading-relaxed italic">"Menjadi Stasiun Geofisika yang andal, cepat, tepat, akurat, luas jangkauannya dan mudah dipahami."</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                            <h4 class="font-bold mb-3 text-blue-900 uppercase">Misi</h4>
                            <ul class="text-xs space-y-2 text-gray-600 list-disc ml-4">
                                <li>Mewujudkan pengamatan geofisika secara berkelanjutan.</li>
                                <li>Menyediakan data informasi yang relevan untuk pembangunan daerah.</li>
                                <li>Meningkatkan kesadaran mitigasi bencana masyarakat Alor.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

            <div class="space-y-8">
                <div class="bg-white p-6 rounded-3xl shadow-xl border border-gray-100 text-center">
                    <h4 class="font-black text-blue-900 mb-6 uppercase text-[10px] tracking-widest">Kepala Stasiun</h4>
                    <div class="w-40 h-52 bg-gray-100 mx-auto mb-4 rounded-2xl flex items-center justify-center border-4 border-gray-50">
                        <i class="fas fa-user-tie text-6xl text-gray-300"></i>
                    </div>
                    <p class="font-black text-blue-900 uppercase text-sm">Tri Umaryadi Wibowo, S.E., M.Si.</p>
                    <p class="text-[10px] text-gray-500 font-bold tracking-tighter mt-1">NIP. 19XXXXXXXXXXXXXXX</p>
                </div>

                <div class="bg-yellow-50 p-6 rounded-3xl border border-yellow-200">
                    <h4 class="font-black text-yellow-800 mb-4 uppercase text-[10px]">Tugas Utama</h4>
                    <ul class="text-xs space-y-3 font-medium text-gray-700">
                        <li class="flex items-start"><i class="fas fa-check-circle text-blue-900 mt-1 mr-2"></i> Pengamatan Gempabumi</li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-blue-900 mt-1 mr-2"></i> Monitoring Magnet Bumi</li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-blue-900 mt-1 mr-2"></i> Diseminasi Info Gempa</li>
                    </ul>
                </div>
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
