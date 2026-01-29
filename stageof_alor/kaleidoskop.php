<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Kaleidoskop - Stasiun Geofisika Alor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="site-header.css?v=4">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script>
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
    </script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <?php include 'navbar.html'; ?>

    <header class="site-header hero-buletin">
        <h2 class="site-title font-black uppercase tracking-tighter">Arsip Kaleidoskop</h2>
        <p class="text-blue-200 text-sm mt-2 italic">Berbagai informasi mengenai Geofisika dalam setahun</p>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="flex flex-col md:flex-row justify-between items-start gap-6 mb-10">
            <div class="border-l-8 border-blue-900 pl-6 w-full">
                <h3 class="text-3xl font-black text-gray-800 uppercase tracking-tighter">Daftar Kaleidoskop</h3>
                <p class="text-gray-500 italic text-sm">Informasi, analisis, dan kajian mendalam tentang fenomena bumi tahunan</p>
                
                <div class="flex gap-2 mt-4">
                    <button onclick="toggleBuletinView('grid')" id="buletin-grid-btn" class="px-4 py-2 bg-blue-900 text-white rounded-lg text-sm font-bold flex items-center gap-2 hover:bg-blue-800 transition active:scale-95">
                        <i class="fas fa-grip"></i> Grid
                    </button>
                    <button onclick="toggleBuletinView('list')" id="buletin-list-btn" class="px-4 py-2 bg-gray-200 text-gray-900 rounded-lg text-sm font-bold flex items-center gap-2 hover:bg-gray-300 transition active:scale-95">
                        <i class="fas fa-list"></i> List
                    </button>
                </div>
            </div>

            <div class="relative w-full md:w-96">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-search text-blue-900 opacity-50"></i>
                </div>
                <input type="text" id="searchInput" onkeyup="liveSearch()" 
                    placeholder="Ketik kata kunci..." 
                    class="w-full pl-11 pr-4 py-4 bg-white border-2 border-gray-100 rounded-2xl shadow-sm focus:border-blue-900 focus:ring-0 outline-none transition-all text-sm font-medium"
                >
                <div class="flex gap-3 mt-4 items-center">
                    <div>
                        <select id="filterYear" onchange="toggleCustom(this,'filterYearCustom'); liveSearch()" class="px-3 py-2 rounded-xl bg-white border-2 border-gray-100 text-sm">
                            <option value="">Tahun</option>
                            <?php $current = date('Y'); for ($y=$current; $y>=$current-10; $y--): ?>
                            <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
                            <?php endfor; ?>
                            <option value="custom">Lainnya...</option>
                        </select>
                        <input id="filterYearCustom" oninput="liveSearch()" placeholder="Masukkan tahun" class="px-3 py-2 rounded-xl border-2 border-gray-100 text-sm mt-2 hidden" />
                    </div>
                </div>
            </div>
        </div>

        <div id="file-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $dir = "file_kaleidoskop/";
            if (is_dir($dir)) {
                $files = glob($dir . "*.pdf");
                // Urutkan berdasarkan yang terbaru diupload
                array_multisort(array_map('filemtime', $files), SORT_DESC, $files);

                if (count($files) > 0) {
                    foreach ($files as $file) {
                        $namaFile = basename($file);
                        $judulRapi = strtoupper(str_replace(['-', '_'], ' ', pathinfo($namaFile, PATHINFO_FILENAME)));
                        $ukuranFile = round(filesize($file) / 1024 / 1024, 2) . " MB";
                        ?>
                        
                        <div class="buletin-card bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-500 group" data-filename="<?php echo strtolower($namaFile); ?>" data-filepath="<?php echo $file; ?>">
                            <canvas class="buletin-preview w-full h-28 bg-blue-50 flex items-center justify-center relative overflow-hidden" style="display: none;"></canvas>
                            <div class="buletin-placeholder h-28 bg-blue-50 flex items-center justify-center relative overflow-hidden">
                                <i class="fas fa-file-pdf text-5xl text-blue-900 opacity-10 group-hover:scale-125 transition-transform duration-700"></i>
                                <div class="absolute inset-0 bg-gradient-to-t from-white to-transparent opacity-40"></div>
                            </div>
                            <div class="p-8">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-[9px] font-black text-blue-600 tracking-widest uppercase">E-Kaleidoskop</span>
                                    <span class="text-[9px] text-gray-400 font-bold"><?php echo $ukuranFile; ?></span>
                                </div>
                                <h4 class="judul-file font-bold text-gray-800 text-sm mb-6 min-h-[40px] leading-tight">
                                    <?php echo $judulRapi; ?>
                                </h4>
                                <div class="flex gap-3">
                                    <a href="<?php echo $file; ?>" 
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="flex-1 flex items-center justify-center bg-blue-900 hover:bg-blue-800 text-white py-3 rounded-xl text-[10px] font-black transition-all shadow-lg active:scale-95 uppercase">
                                        <i class="fas fa-eye mr-2 text-sm"></i> LIHAT
                                    </a>
                                    <a href="<?php echo $file; ?>" 
                                       download 
                                       class="flex-1 flex items-center justify-center bg-yellow-500 hover:bg-yellow-400 text-blue-900 py-3 rounded-xl text-[10px] font-black transition-all shadow-lg active:scale-95 uppercase">
                                        <i class="fas fa-download mr-2 text-sm"></i> UNDUH
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                } else {
                    echo "<p class='col-span-full text-center text-gray-400 py-20'>Belum ada file PDF di folder file_kaleidoskop.</p>";
                }
            } else {
                echo "<p class='col-span-full text-center text-red-400 py-20'>Folder 'file_kaleidoskop' tidak ditemukan.</p>";
            }
            ?>
        </div>

        <div id="noResult" class="hidden text-center py-20">
            <i class="fas fa-file-circle-exclamation text-5xl text-gray-200 mb-4"></i>
            <p class="text-gray-400 font-bold italic">Nama kaleidoskop tersebut tidak ditemukan...</p>
        </div>
        <section class="bg-blue-900 text-white rounded-3xl p-8 flex flex-col md:flex-row items-center justify-between shadow-2xl mt-12">
            <div class="mb-6 md:mb-0">
                <h4 class="text-xl font-bold mb-2 uppercase tracking-tighter">Butuh Data Parameter Geofisika?</h4>
                <p class="text-sm opacity-80 italic font-light">Ajukan permohonan data resmi melalui portal PTSP BMKG.</p>
            </div>
            <a href="https://ptsp.bmkg.go.id" target="_blank" class="bg-yellow-500 text-blue-900 px-8 py-3 rounded-full font-black uppercase text-xs shadow-lg hover:bg-yellow-400 transition transform hover:scale-105">Layanan PTSP BMKG</a>
        </section>

    </main>

    <?php include 'footer.html'; ?>

    <script>
        function toggleBuletinView(viewType) {
            const grid = document.getElementById('file-grid');
            const gridBtn = document.getElementById('buletin-grid-btn');
            const listBtn = document.getElementById('buletin-list-btn');
            
            if (viewType === 'list') {
                grid.classList.remove('grid-cols-1', 'md:grid-cols-2', 'lg:grid-cols-3', 'gap-8');
                grid.classList.add('flex', 'flex-col', 'gap-4');
                
                document.querySelectorAll('.buletin-card').forEach(card => {
                    const header = card.querySelector('.buletin-placeholder');
                    const canvas = card.querySelector('.buletin-preview');
                    const content = card.querySelector('div:last-child');
                    if (header) header.classList.add('hidden');
                    if (canvas) canvas.style.display = 'none';
                    if (content) {
                        content.classList.remove('p-8');
                        content.classList.add('p-4', 'flex', 'items-center', 'justify-between', 'w-full', 'gap-4');
                    }
                });
                
                listBtn.classList.remove('bg-gray-200', 'text-gray-900');
                listBtn.classList.add('bg-blue-900', 'text-white');
                gridBtn.classList.remove('bg-blue-900', 'text-white');
                gridBtn.classList.add('bg-gray-200', 'text-gray-900');
            } else {
                grid.classList.add('grid-cols-1', 'md:grid-cols-2', 'lg:grid-cols-3', 'gap-8');
                grid.classList.remove('flex', 'flex-col', 'gap-4');
                
                document.querySelectorAll('.buletin-card').forEach(card => {
                    const header = card.querySelector('.buletin-placeholder');
                    const canvas = card.querySelector('.buletin-preview');
                    const content = card.querySelector('div:last-child');
                    if (header) header.classList.remove('hidden');
                    if (canvas) canvas.style.display = '';
                    if (content) {
                        content.classList.add('p-8');
                        content.classList.remove('p-4', 'flex', 'items-center', 'justify-between', 'w-full', 'gap-4');
                    }
                });
                
                // Load PDF previews untuk grid view
                renderBuletinPdfPreviews();
                
                gridBtn.classList.remove('bg-gray-200', 'text-gray-900');
                gridBtn.classList.add('bg-blue-900', 'text-white');
                listBtn.classList.remove('bg-blue-900', 'text-white');
                listBtn.classList.add('bg-gray-200', 'text-gray-900');
            }
        }

        async function renderBuletinPdfPreviews() {
            const cards = document.querySelectorAll('.buletin-card');
            for (const card of cards) {
                const canvas = card.querySelector('.buletin-preview');
                const filePath = card.getAttribute('data-filepath');
                if (canvas && canvas.style.display !== 'none' && !canvas.hasAttribute('data-rendered')) {
                    try {
                        const pdf = await pdfjsLib.getDocument(filePath).promise;
                        const page = await pdf.getPage(1);
                        const viewport = page.getViewport({ scale: 2 });
                        canvas.width = viewport.width;
                        canvas.height = viewport.height;
                        const ctx = canvas.getContext('2d');
                        await page.render({ canvasContext: ctx, viewport: viewport }).promise;
                        canvas.setAttribute('data-rendered', 'true');
                    } catch (error) {
                        console.error('Error rendering PDF preview:', error);
                    }
                }
            }
        }

        function toggleCustom(selectEl, customInputId) {
            const input = document.getElementById(customInputId);
            if (!input) return;
            if (selectEl.value === 'custom') {
                input.classList.remove('hidden');
                input.focus();
            } else {
                input.classList.add('hidden');
            }
        }

        function liveSearch() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            // read day/month/year from selects or custom inputs
            const yearSel = document.getElementById('filterYear');
            
            const year = (yearSel.value === 'custom') ? (document.getElementById('filterYearCustom').value || '').trim() : (yearSel.value || '').trim();
            const cards = document.getElementsByClassName('buletin-card');
            const noResult = document.getElementById('noResult');
            const grid = document.getElementById('file-grid');
            let foundCount = 0;


            for (let i = 0; i < cards.length; i++) {
                const card = cards[i];
                const judul = card.querySelector('.judul-file').innerText.toLowerCase();
                const fname = (card.dataset.filename || '').toLowerCase();

                let match = true;

                if (input && !(judul.includes(input) || fname.includes(input))) match = false;

                if (year) {
                    if (!fname.includes(year)) match = false;
                }

                if (match) {
                    card.style.display = "";
                    foundCount++;
                } else {
                    card.style.display = "none";
                }
            }

            if (foundCount > 0) {
                noResult.classList.add('hidden');
                grid.classList.remove('hidden');
            } else {
                noResult.classList.remove('hidden');
                grid.classList.add('hidden');
            }
        }
        
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
