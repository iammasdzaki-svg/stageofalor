<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Survei Kepuasan Masyarakat - Stasiun Geofisika Alor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="site-header.css?v=4">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <?php include 'navbar.html'; ?>

    <header class="site-header hero-ikm">
        <div class="container mx-auto px-4">
            <h2 class="site-title font-black mb-4 uppercase tracking-tighter">Hasil Survei Kepuasan Masyarakat</h2>
            <p class="text-sm opacity-90 max-w-2xl mx-auto italic font-light">Indeks Kepuasan Masyarakat (IKM) Stasiun Geofisika Alor</p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-4 border-blue-100">
                <div class="bg-gradient-to-r from-blue-900 to-blue-800 p-8 text-white text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-24 h-24 bg-yellow-400 rounded-full flex items-center justify-center">
                            <i class="fas fa-clipboard-check text-5xl text-blue-900"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black uppercase mb-2 tracking-tighter">Hasil Survei Belum Tersedia</h3>
                    <p class="text-sm opacity-90 font-light max-w-md mx-auto">Data hasil survei kepuasan masyarakat sedang dalam proses pengolahan</p>
                </div>

                <div class="p-12 text-center">
                    <div class="mb-8">
                        <i class="fas fa-hourglass-half text-8xl text-gray-300 mb-6 animate-pulse"></i>
                    </div>
                    <div class="bg-blue-50 rounded-2xl p-8 mb-8 border-2 border-blue-100">
                        <p class="text-gray-700 text-lg leading-relaxed mb-6 font-medium">
                            Kami sedang memproses data survei kepuasan masyarakat yang telah dikumpulkan. 
                            Hasil survei akan segera dipublikasikan setelah melalui proses analisis dan validasi.
                        </p>
                        <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Data sedang dianalisis</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Proses validasi berlangsung</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Hasil akan dipublikasikan segera</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center gap-6 mb-8">
                        <div class="bg-blue-50 rounded-xl p-6 border-2 border-blue-200 max-w-md w-full">
                            <i class="fas fa-info-circle text-4xl text-blue-600 mb-4"></i>
                            <h4 class="font-black text-blue-900 uppercase text-sm mb-2 text-center">Tentang IKM</h4>
                            <p class="text-xs text-gray-600 mb-4 text-center">Indeks Kepuasan Masyarakat mengukur tingkat kepuasan terhadap pelayanan publik</p>

                            <div class="flex justify-center">
                                <a href="https://www.bkn.go.id/wp-content/uploads/2016/03/Nilai-Indeks-Kepuasan-Masyarakat-Kantor-Pusat-dan-Kantor-Regional-BKN-Tahun-2016.pdf" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-block bg-blue-900 text-white px-6 py-3 rounded-lg font-black text-xs uppercase hover:bg-blue-800 transition shadow-lg">
                                    <i class="fas fa-arrow-right mr-2"></i> Pelajari Lebih Lanjut
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-100 rounded-xl p-6 border border-gray-200">
                        <p class="text-xs text-gray-600 italic">
                            <i class="fas fa-clock mr-2 text-blue-600"></i>
                            <strong>Informasi:</strong> Hasil survei akan diperbarui secara berkala. 
                            Untuk informasi lebih lanjut, silakan hubungi kami melalui media sosial atau email.
                        </p>
                    </div>
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
