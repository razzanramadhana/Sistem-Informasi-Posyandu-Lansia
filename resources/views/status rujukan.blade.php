<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Rujukan</title>
    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex flex-col min-h-screen">
            <header class="bg-blue-600 text-white p-5 flex justify-between items-center">
                <a href="/dashboard" class="text-xl">
                    <h1>Sistem Informasi Posyandu Lansia Terpadu</h1>
                </a>
                <a href="/" class="text-white font-bold">Log Out</a>
            </header>

            <div class="flex flex-1">
            <aside class="w-64 bg-white p-5 shadow-md">
            <div class="text-center mb-8">
                    <h2 class="text-xl font-semibold mt-4">{{ Auth::user()->nama_lengkap }}</h2>
                    <p class="text-gray-600">{{ Auth::user()->nik }}</p>
                    <p class="text-gray-600">{{ Auth::user()->alamat }}</p>
                </div>
                <nav>
                    <ul class="space-y-4">
                        <li><a href="/profil-wali" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Wali</a></li>
                        <li><a href="/profil-lansia" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Lansia</a></li>
                        <li><a href="/kelola-kunjungan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Kelola Kunjungan</a></li>
                        <li><a href="/hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Hasil Kesehatan</a></li>
                        <li><a href="/status-rujukan" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Status Rujukan</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Content -->
            <section class="flex-1 p-5 bg-gray-100">
                <h2 class="text-2xl mb-6">Status Rujukan</h2>
                
                @if($rujukanlist->isEmpty())
                <p class="text-gray-500">Tidak ada data rujukan yang ditemukan.</p>
                @else
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 p-2 text-left bg-gray-200">ID Rujukan</th>
                            <th class="border border-gray-300 p-2 text-left bg-gray-200">Nama Lansia</th>
                            <th class="border border-gray-300 p-2 text-left bg-gray-200">ID Lansia</th>
                            <th class="border border-gray-300 p-2 text-left bg-gray-200">Status Rujukan</th>
                            <th class="border border-gray-300 p-2 text-left bg-gray-200">Rumah Sakit yang Dituju</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rujukanlist as $r)
                            <tr class="hover:bg-gray-200 transition duration-300">
                                <td class="border border-gray-300 p-2">{{ $r->id_rujukan }}</td>
                                <td class="border border-gray-300 p-2">{{ $r->lansia->nama }}</td>
                                <td class="border border-gray-300 p-2">{{ $r->id_lansia }}</td>
                                <td class="border border-gray-300 p-2">{{ $r->status_rujukan }}</td>
                                <td class="border border-gray-300 p-2">{{ $r->rumah_sakit->nama_rumah_sakit }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </section>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center py-4">
        © 2024 ALL RIGHTS RESERVED
    </footer>
</body>
</html>
