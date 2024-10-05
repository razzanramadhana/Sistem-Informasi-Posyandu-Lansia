<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Posyandu Lansia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <div class="flex flex-col flex-1">
        <header class="bg-blue-600 text-white p-5 flex justify-between items-center">
            <a href="/dashboard" class="text-xl">
                <h1>Sistem Informasi Posyandu Lansia Terpadu</h1>
            </a>
            <a href="/" class="text-white text-lg font-bold">Log Out</a>
        </header>

        <div class="flex flex-1">
            <aside class="w-64 bg-white p-5 shadow-md">
                <div class="text-center mb-8">
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto"></div>
                    <h2 class="text-xl font-semibold mt-4">NAMA LENGKAP</h2>
                    <p class="text-gray-600">NIK<br>Surabaya</p>
                </div>

                <nav>
                    <ul class="space-y-4">
                        <li><a href="/profil-wali" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Wali</a></li>
                        <li><a href="/profil-lansia" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Lansia</a></li>
                        <li><a href="/kelola-kunjungan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Kelola Kunjungan</a></li>
                        <li><a href="/hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out ">Hasil Kesehatan</a></li>
                        <li><a href="/status-rujukan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Status Rujukan</a></li>
                    </ul>
                </nav>
            </aside>

            <main class="flex-1 p-8 bg-gray-100">
                <section class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-6">Data Lansia</h2>
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 p-4">Nama</th>
                                <th class="border border-gray-300 p-4">Tanggal Lahir</th>
                                <th class="border border-gray-300 p-4">Jenis Kelamin</th>
                                <th class="border border-gray-300 p-4">Alamat</th>
                                <th class="border border-gray-300 p-4">Alergi Obat</th>
                                <th class="border border-gray-300 p-4">Riwayat Penyakit</th>
                                <th class="border border-gray-300 p-4">Vaksin</th>
                                <th class="border border-gray-300 p-4">No. Telepon</th>
                                <th class="border border-gray-300 p-4">Diagnosa</th>
                                <th class="border border-gray-300 p-4">Obat yang Diberikan</th>
                                <th class="border border-gray-300 p-4">NIK Lansia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lansias as $lansia)
                            <tr>
                                <td class="border border-gray-300 p-4">{{ $lansia->nama }}</td>
                                <td class="border border-gray-300 p-4">{{ $lansia->tanggal_lahir }}</td>
                                <td class="border border-gray-300 p-4">{{ $lansia->jenis_kelamin }}</td>
                                <td class="border border-gray-300 p-4">{{ $lansia->alamat }}</td>
                                <td class="border border-gray-300 p-4">{{ $lansia->alergi_obat }}</td>
                                <td class="border border-gray-300 p-4">{{ $lansia->riwayat_penyakit }}</td>
                                <td class="border border-gray-300 p-4">{{ $lansia->vaksin }}</td>
                                <td class="border border-gray-300 p-4">{{ $lansia->no_telpon }}</td>
                                <td class="border border-gray-300 p-4">{{ $lansia->diagnosa }}</td>
                                <td class="border border-gray-300 p-4">{{ $lansia->obat_yang_diberikan }}</td>
                                <td class="border border-gray-300 p-4">{{ $lansia->nik_lansia }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
                <section class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-6">Tambah Lansia</h2>
                    <div class="flex items-center">
                        <button class="bg-blue-600 text-white py-2 px-4 rounded transition duration-300 transform hover:bg-blue-700 hover:scale-105">
                            <a href="/tambahkan-lansia">Tambahkan Lansia</a>
                        </button>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <footer class="bg-blue-600 text-white text-center py-4">
        © 2024 ALL RIGHTS RESERVED
    </footer>
</body>
</html>
