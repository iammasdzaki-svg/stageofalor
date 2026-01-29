<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stasiun Geofisika Alor - BMKG</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <link rel="stylesheet" href="site-header.css?v=4">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <style>
        .scroll-mt { scroll-margin-top: 80px; }
        /* Dropdown style */
        .dropdown:hover .dropdown-menu { display: block; }
        #wrs-map { height: 100%; width: 100%; }
        .leaflet-container { font: inherit; }
        .leaflet-control-attribution { font-size: 10px; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <?php include 'navbar.html'; ?>

    <header class="site-header hero-home border-b-4 border-yellow-500">
        <div class="container mx-auto px-4">
            <h2 class="site-title font-black mb-4 uppercase">Alor - Nusa Tenggara Timur</h2>
            <p class="text-lg opacity-80 max-w-2xl mx-auto italic font-light">Monitoring Geofisika, Seismisitas, Petir, dan Magnet Bumi secara real-time untuk keselamatan masyarakat.</p>
            
        </div>
    </header>

    <main class="container mx-auto px-4 mt-8">
        
        <section id="wrs-monitor" class="mb-12">
            <div class="bg-gray-900 rounded-2xl shadow-2xl overflow-hidden border border-gray-700 text-white">
                <div class="bg-gradient-to-r from-gray-900 to-gray-800 p-4 border-b border-gray-700 flex justify-between items-center">
                     <div class="flex items-center gap-4">
                         <img src="https://www.bmkg.go.id/asset/img/logo/logo-bmkg.png" class="h-8">
                         <h3 class="font-bold text-lg tracking-wider">WRS-NTWC <span class="text-yellow-400">INDONESIA</span></h3>
                     </div>
                     <div class="text-xs text-gray-400 font-mono hidden md:block">
                         <span id="clock-wrs"></span>
                     </div>
                </div>
                
                <div class="flex flex-col lg:flex-row h-[600px]">
                    <div class="lg:w-3/4 relative h-full">
                        <div id="map-wrs" class="w-full h-full z-10 bg-gray-900"></div>
                        <div id="loader-map" class="absolute inset-0 flex items-center justify-center bg-gray-900 z-50">
                            <i class="fas fa-spinner fa-spin text-4xl text-yellow-500"></i>
                        </div>
                        <div class="absolute bottom-4 left-4 bg-gray-900/90 p-3 rounded border border-gray-600 z-[400] text-xs shadow-lg pointer-events-none">
                             <div class="font-bold mb-2 text-gray-300 uppercase tracking-wider">Legenda Magnitudo</div>
                            <div class="flex gap-2 items-center mb-1"><span class="w-3 h-3 rounded-full bg-red-600 border border-white"></span> M &ge; 5 (Gempa Kuat)</div>
                            <div class="flex gap-2 items-center mb-1"><span class="w-3 h-3 rounded-full bg-yellow-400 border border-white"></span> 3 &le; M &lt; 5 (Gempa Sedang)</div>
                            <div class="flex gap-2 items-center"><span class="w-3 h-3 rounded-full bg-green-500 border border-white"></span> M &lt; 3 (Gempa Kecil)</div>
                        </div>
                    </div>

                    <div class="lg:w-1/4 bg-gray-800 border-l border-gray-700 flex flex-col">
                        <div class="p-6 bg-gray-800 border-b border-gray-700">
                            <h4 class="text-xs font-bold text-gray-400 uppercase mb-4 tracking-widest">Detail Gempa</h4>
                            <div id="detail-info" class="transition-all duration-300">
                                 <div class="flex items-baseline gap-2 mb-2">
                                    <div class="text-5xl font-black text-red-500" id="d-mag">-</div>
                                    <div class="text-sm font-bold text-gray-400">Mag</div>
                                 </div>
                                 <div class="text-sm font-medium mb-4 leading-relaxed text-gray-300 h-10 overflow-hidden" id="d-loc">Klik gempa di peta</div>
                                 <div class="space-y-2 text-xs text-gray-400 font-mono">
                                     <div class="flex items-center justify-between border-b border-gray-700 pb-1">
                                        <span><i class="fas fa-clock text-yellow-500 mr-2"></i>Waktu</span>
                                        <span id="d-time" class="text-white">-</span>
                                     </div>
                                     <div class="flex items-center justify-between border-b border-gray-700 pb-1">
                                        <span><i class="fas fa-ruler-vertical text-blue-400 mr-2"></i>Kedalaman</span>
                                        <span id="d-depth" class="text-white">-</span>
                                     </div>
                                     <div class="flex items-center justify-between border-b border-gray-700 pb-1">
                                        <span><i class="fas fa-map-marked text-green-400 mr-2"></i>Koordinat</span>
                                        <span id="d-coord" class="text-white">-</span>
                                     </div>
                                     <div class="flex items-center justify-between pt-1">
                                        <span><i class="fas fa-exclamation-triangle text-orange-500 mr-2"></i>Potensi</span>
                                        <span id="d-potensi" class="text-white text-right max-w-[120px] truncate">-</span>
                                     </div>
                                 </div>
                                 <div class="mt-4">
                                    <a id="d-shakemap" href="#" target="_blank" class="block w-full text-center bg-blue-600 hover:bg-blue-500 text-white py-2 rounded text-xs font-bold uppercase transition hidden">
                                        Lihat Shakemap
                                    </a>
                                 </div>
                            </div>
                        </div>

                        <div class="flex-1 overflow-y-auto custom-scrollbar bg-gray-900">
                            <h4 class="sticky top-0 bg-gray-800 text-xs font-bold text-gray-400 px-4 py-3 uppercase border-b border-gray-700 shadow-md z-10">
                                <i class="fas fa-list-ul mr-2"></i> Gempa Terkini
                            </h4>
                            <div id="quake-list" class="divide-y divide-gray-800">
                                <!-- Items injected by JS -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

    </main>

    <section class="container mx-auto px-4">
        <div class="bg-blue-900 text-white rounded-3xl p-8 flex flex-col md:flex-row items-center justify-between shadow-2xl mt-12 mb-12">
            <div class="mb-6 md:mb-0 max-w-3xl">
                <h4 class="text-2xl md:text-3xl font-bold mb-2 uppercase tracking-tighter">Butuh Informasi BMKG Lainnya?</h4>
                <p class="text-lg opacity-90 italic font-light">Dapatkan peringatan dini, prakiraan cuaca, status gempa, dan data real-time langsung dari situs resmi BMKG untuk keselamatan dan perencanaan Anda.</p>
            </div>
            <a href="https://www.bmkg.go.id" target="_blank" class="bg-yellow-500 text-blue-900 px-8 py-4 rounded-full font-black uppercase text-lg shadow-lg hover:bg-yellow-400 transition transform hover:scale-105">
                <i class="fas fa-external-link-alt mr-2"></i> Buka Info BMKG
            </a>
        </div>
    </section>

    <?php include 'footer.html'; ?>

    <script>
        const API_UTAMA = "https://data.bmkg.go.id/DataMKG/TEWS/autogempa.json";
        const API_TERKINI = "https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json";
        const API_DIRASAKAN = "https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json";

        let wrsMap = null;
        let wrsLayer = null;

        function updateClock() {
            const now = new Date();
            const el = document.getElementById("clock-wrs");
            
            if (el) {
                // Menggunakan hourCycle: 'h23' agar format 24 jam konsisten dengan titik dua (:)
                const timeString = now.toLocaleTimeString('id-ID', {
                    timeZone: 'Asia/Makassar',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hourCycle: 'h23' 
                });
                
                el.innerText = timeString.replace(/\./g, ':') + " WITA";
            }
        }

        // Jalankan fungsi satu kali segera agar tidak menunggu 1 detik pertama
        updateClock(); 
        setInterval(updateClock, 1000);

        function initMap() {
            if (wrsMap) return;
            wrsMap = L.map("map-wrs", { zoomControl: false, attributionControl: false }).setView([-2.5, 118], 5);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 10,
                attribution: 'Map tiles by CartoDB, under CC BY 3.0. Data by OpenStreetMap, under ODbL.'
            }).addTo(wrsMap);
            wrsLayer = L.layerGroup().addTo(wrsMap);
            L.control.zoom({ position: 'topright' }).addTo(wrsMap);
        }

        async function fetchJson(url) {
            try {
                const res = await fetch(url + "?t=" + Date.now()); 
                if (!res.ok) return null;
                return await res.json();
            } catch (e) { return null; }
        }

        function parseDate(str) {
            if(!str) return new Date(0);
            return new Date(str); 
        }

        function getColor(mag) {
            if (mag >= 7) return '#dc2626'; 
            if (mag >= 5) return '#ef4444'; 
            if (mag >= 3) return '#eab308'; 
            return '#22c55e'; 
        }

        function updateDetail(g) {
            document.getElementById("d-mag").innerText = g.Magnitude;
            document.getElementById("d-loc").innerText = g.Wilayah;
            document.getElementById("d-time").innerText = g.Jam ? g.Tanggal + " " + g.Jam : g.DateTime;
            document.getElementById("d-depth").innerText = g.Kedalaman;
            document.getElementById("d-coord").innerText = g.Lintang + " " + g.Bujur;
            document.getElementById("d-potensi").innerText = g.Potensi;
            
            const link = document.getElementById("d-shakemap");
            if(g.Shakemap) {
                link.href = "https://data.bmkg.go.id/DataMKG/TEWS/" + g.Shakemap;
                link.classList.remove("hidden");
            } else {
                link.classList.add("hidden");
            }
        }

        async function loadWrsData() {
            initMap();
            document.getElementById("loader-map").classList.remove("hidden");
            
            const [dUtama, dTerkini, dDirasakan] = await Promise.all([
                fetchJson(API_UTAMA),
                fetchJson(API_TERKINI),
                fetchJson(API_DIRASAKAN)
            ]);

            let events = [];
            // Autogempa is usually a single object, but check structure
            if(dUtama?.Infogempa?.gempa) {
                const g = dUtama.Infogempa.gempa;
                if(Array.isArray(g)) events.push(...g);
                else events.push(g);
            }
            if(dTerkini?.Infogempa?.gempa) events.push(...dTerkini.Infogempa.gempa);
            if(dDirasakan?.Infogempa?.gempa) events.push(...dDirasakan.Infogempa.gempa);
            
            const unique = new Map();
            events.forEach(e => {
                const key = e.DateTime + e.Wilayah;
                if(!unique.has(key)) unique.set(key, e);
            });
            
            let sortedEvents = Array.from(unique.values()).sort((a,b) => parseDate(b.DateTime) - parseDate(a.DateTime));
            
            const listEl = document.getElementById("quake-list");
            listEl.innerHTML = "";
            sortedEvents.forEach((g) => {
                const div = document.createElement("div");
                div.className = "p-3 hover:bg-gray-800 cursor-pointer transition border-l-4 border-transparent hover:border-yellow-500 border-b border-gray-800";
                div.innerHTML = `
                    <div class="flex justify-between items-center mb-1">
                        <span class="text-xs font-mono text-gray-400">${g.Jam || g.DateTime.split('T')[1]?.split('.')[0]}</span>
                        <span class="text-xs font-bold ${parseFloat(g.Magnitude) >= 5 ? 'text-red-500' : 'text-yellow-500'}">M ${g.Magnitude}</span>
                    </div>
                    <div class="text-xs text-gray-300 line-clamp-2">${g.Wilayah}</div>
                `;
                div.onclick = () => {
                    updateDetail(g);
                    const lat = parseFloat(g.Lintang.split(" ")[0]) * (g.Lintang.includes("LS") ? -1 : 1);
                    const lon = parseFloat(g.Bujur.split(" ")[0]) * (g.Bujur.includes("BB") ? -1 : 1);
                    wrsMap.flyTo([lat, lon], 8);
                };
                listEl.appendChild(div);
            });

            wrsLayer.clearLayers();
            sortedEvents.forEach(g => {
                const lat = parseFloat(g.Lintang.split(" ")[0]) * (g.Lintang.includes("LS") ? -1 : 1);
                const lon = parseFloat(g.Bujur.split(" ")[0]) * (g.Bujur.includes("BB") ? -1 : 1);
                
                L.circleMarker([lat, lon], {
                    radius: Math.max(5, parseFloat(g.Magnitude) * 1.5),
                    fillColor: getColor(parseFloat(g.Magnitude)),
                    color: "#fff",
                    weight: 1,
                    opacity: 1,
                    fillOpacity: 0.8
                }).addTo(wrsLayer).on('click', () => {
                    updateDetail(g);
                });
            });

            if(sortedEvents.length > 0) {
                updateDetail(sortedEvents[0]);
            }

            document.getElementById("loader-map").classList.add("hidden");
        }

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        window.onload = () => { loadWrsData(); setInterval(loadWrsData, 60000); };
    </script>
</body>
</html>
