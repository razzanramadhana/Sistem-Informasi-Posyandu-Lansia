<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Posyandu Lansia</title>
    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex flex-col h-screen">
        <header class="bg-blue-700 text-white p-5 flex justify-between items-center">
            <a href="/dashboard" class="text-xl">
                <h1>Sistem Informasi Posyandu Lansia Terpadu</h1>
            </a>
            <a href="/" class="text-white text-lg font-bold">Log Out</a>
        </header>

        <div class="flex flex-1">
            <aside class="bg-white w-64 p-5 shadow-lg">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-2"></div>
                    <h2 class="text-lg font-bold">NAMA LENGKAP</h2>
                    <p class="text-gray-600">NIK<br>Surabaya</p>
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

            <section class="flex-1 p-5 bg-gray-100">
                <h2 class="text-2xl mb-6">Status Rujukan</h2>
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
                        <tr class="hover:bg-gray-200 transition duration-300">
                            <td class="border border-gray-300 p-2">IFHKYU</td>
                            <td class="border border-gray-300 p-2">Sugeng Rahayu</td>
                            <td class="border border-gray-300 p-2">3578081906040004</td>
                            <td class="border border-gray-300 p-2">
                                <span class="bg-orange-500 text-white py-1 px-2 rounded text-xs">Menunggu</span>
                            </td>
                            <td class="border border-gray-300 p-2">Rumah Sakit ABC</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
    <footer class="bg-blue-600 text-white text-center py-4">
        © 2024 ALL RIGHTS RESERVED
    </footer>
</body>
</html>
