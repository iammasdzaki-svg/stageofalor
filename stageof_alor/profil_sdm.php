<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDM - Stasiun Geofisika Alor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="site-header.css?v=4">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <?php include 'navbar.html'; ?>

    <header class="site-header hero-profil border-b-4 border-yellow-500">
        <div class="container mx-auto px-4">
            <h2 class="site-title font-black mb-2 uppercase">Sumber Daya Manusia</h2>
            <p class="text-sm opacity-80 max-w-2xl mx-auto font-light tracking-widest ">Tim profesional di balik operasional Stasiun Geofisika Alor</p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto">
            
            <section class="mb-20 text-center">
                <h3 class="text-2xl font-black text-blue-900 mb-10 uppercase inline-block border-b-4 border-yellow-500 pb-2">Kepala Stasiun</h3>
                
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 max-w-md mx-auto hover:-translate-y-2 transition duration-500">
                    <div class="w-48 h-64 bg-gray-100 mx-auto mb-6 rounded-2xl flex items-center justify-center border-4 border-gray-50 overflow-hidden shadow-inner">
                        <i class="fas fa-user-tie text-8xl text-gray-300"></i>
                    </div>
                    <h4 class="font-black text-blue-900 uppercase text-xl mb-2">Tri Umaryadi Wibowo, S.E., M.Si.</h4>
                    <span class="inline-block px-4 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-bold uppercase tracking-wider mb-4">Kepala Stasiun</span>
                    <p class="text-sm text-gray-500 font-mono tracking-tighter">NIP. 19XXXXXXXXXXXXXXX</p>
                </div>
            </section>

            <section>
                <h3 class="text-2xl font-black text-blue-900 mb-10 uppercase flex items-center">
                    <span class="w-10 h-1 bg-yellow-500 mr-4"></span> Tim Operasional
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Placeholder Staff 1 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-md transition">
                        <div class="w-24 h-24 bg-blue-50 rounded-full mx-auto mb-4 flex items-center justify-center text-blue-200">
                            <i class="fas fa-user text-4xl"></i>
                        </div>
                        <h5 class="font-bold text-gray-800">Staff Operasional 1</h5>
                        <p class="text-xs text-gray-500 uppercase mt-1">PMG Pertama</p>
                    </div>

                    <!-- Placeholder Staff 2 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-md transition">
                        <div class="w-24 h-24 bg-blue-50 rounded-full mx-auto mb-4 flex items-center justify-center text-blue-200">
                            <i class="fas fa-user text-4xl"></i>
                        </div>
                        <h5 class="font-bold text-gray-800">Staff Operasional 2</h5>
                        <p class="text-xs text-gray-500 uppercase mt-1">PMG Muda</p>
                    </div>

                    <!-- Placeholder Staff 3 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-md transition">
                        <div class="w-24 h-24 bg-blue-50 rounded-full mx-auto mb-4 flex items-center justify-center text-blue-200">
                            <i class="fas fa-user text-4xl"></i>
                        </div>
                        <h5 class="font-bold text-gray-800">Staff Operasional 3</h5>
                        <p class="text-xs text-gray-500 uppercase mt-1">Teknisi</p>
                    </div>

                    <!-- Placeholder Staff 4 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-md transition">
                        <div class="w-24 h-24 bg-blue-50 rounded-full mx-auto mb-4 flex items-center justify-center text-blue-200">
                            <i class="fas fa-user text-4xl"></i>
                        </div>
                        <h5 class="font-bold text-gray-800">Staff Operasional 4</h5>
                        <p class="text-xs text-gray-500 uppercase mt-1">Administrasi</p>
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
