<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah - Stasiun Geofisika Alor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="site-header.css?v=4">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <?php include 'navbar.html'; ?>

    <header class="site-header hero-profil border-b-4 border-yellow-500">
        <div class="container mx-auto px-4">
            <h2 class="site-title font-black mb-2 uppercase">Sejarah</h2>
            <p class="text-sm opacity-80 max-w-2xl mx-auto font-light tracking-widest ">Perjalanan Stasiun Geofisika Alor dalam melayani masyarakat</p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <section>
                <h3 class="text-2xl font-black text-blue-900 mb-6 uppercase flex items-center">
                    <span class="w-10 h-1 bg-yellow-500 mr-4"></span> Sejarah Singkat
                </h3>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 leading-relaxed text-gray-700">
                    <p class="mb-4 text-justify">
                        Stasiun Geofisika Kelas III Alor merupakan Unit Pelaksana Teknis (UPT) Badan Meteorologi Klimatologi dan Geofisika yang memiliki peran vital dalam monitoring kegempaan di wilayah Kabupaten Alor dan sekitarnya. 
                    </p>
                    <p class="text-justify mb-4">
                        Berlokasi di kawasan Mali, stasiun ini menjadi garda terdepan dalam pengamatan aktivitas tektonik guna memberikan rasa aman bagi masyarakat dari ancaman bencana gempabumi dan tsunami melalui sistem peringatan dini yang terintegrasi dengan InaTEWS Pusat.
                    </p>
                    <p class="text-justify">
                        Sejak berdirinya, Stasiun Geofisika Alor terus berkomitmen meningkatkan kualitas pelayanan informasi geofisika, termasuk pengamatan magnet bumi dan petir, demi mendukung pembangunan daerah yang berkelanjutan dan berwawasan mitigasi bencana.
                    </p>
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
