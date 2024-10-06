<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Posyandu Lansia</title>
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
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto"></div>
                    <h2 class="text-xl font-semibold mt-4">{{ Auth::user()->nama_lengkap }}</h2>
                    <p class="text-gray-600">{{ Auth::user()->nik }}</p>
                    <p class="text-gray-600">{{ Auth::user()->alamat }}</p>
                </div>

                <nav>
                    <ul class="space-y-4">
                        <li><a href="/profil-wali" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Wali</a></li>
                        <li><a href="/profil-lansia" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Lansia</a></li>
                        <li><a href="/kelola-kunjungan" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Kelola Kunjungan</a></li>
                        <li><a href="/hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Hasil Kesehatan</a></li>
                        <li><a href="/status-rujukan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Status Rujukan</a></li>
                    </ul>
                </nav>
            </aside>

            <div class="flex-1 p-8 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Kelola Kunjungan</h2>

                <form action="{{ route('store-kunjungan') }}" method="POST">
                    @csrf
                    <div>
                    <label for="lansia" class="block mb-2 font-bold">Pilih Lansia:</label>
                    <select id="lansia" name="id_lansia" class="w-full p-2 mb-4 border border-gray-300 rounded-lg transition duration-200 ease-in-out" required>
                        <option value="" disabled selected>Pilih Lansia</option>
                            @foreach($lansias as $lansia)
                                <option value="{{ $lansia->id_lansia }}">{{ $lansia->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                    <label for="tanggal" class="block mb-2 font-bold">Pilih Tanggal:</label>
                    <input type="date" id="tanggal" name="tanggal_kunjungan" class="w-full p-2 mb-4 border border-gray-300 rounded-lg" required>
                    </div>

                    <div class="flex gap-5 mb-6">
                        <div class="bg-blue-600 text-white p-5 rounded-lg text-center flex-1 transition duration-200 ease-in-out hover:shadow-lg hover:bg-blue-500">
                            <h3 class="text-xl font-bold">SESI 1</h3>
                            <p>Jam 07:00 - 09:00</p>
                            <span class="inline-block bg-red-500 text-xs p-1 rounded">Tersedia</span>
                            <button type="submit" name="id_jadwal" value="1" class="mt-2 bg-white text-blue-600 px-4 py-2 rounded-lg transition duration-200 ease-in-out hover:bg-gray-200">Daftar</button>
                        </div>
                        <div class="bg-blue-600 text-white p-5 rounded-lg text-center flex-1 transition duration-200 ease-in-out hover:shadow-lg hover:bg-blue-500">
                            <h3 class="text-xl font-bold">SESI 2</h3>
                            <p>Jam 09:00 - 11:00</p>
                            <span class="inline-block bg-green-500 text-xs p-1 rounded">Tersedia</span>
                            <button type="submit" name="id_jadwal" value="2" class="mt-2 bg-white text-blue-600 px-4 py-2 rounded-lg transition duration-200 ease-in-out hover:bg-gray-200">Daftar</button>
                        </div>
                        <div class="bg-blue-600 text-white p-5 rounded-lg text-center flex-1 transition duration-200 ease-in-out hover:shadow-lg hover:bg-blue-500">
                            <h3 class="text-xl font-bold">SESI 3</h3>
                            <p>Jam 11:00 - 13:00</p>
                            <span class="inline-block bg-red-500 text-xs p-1 rounded">Tersedia</span>
                            <button type="submit" name="id_jadwal" value="3" class="mt-2 bg-white text-blue-600 px-4 py-2 rounded-lg transition duration-200 ease-in-out hover:bg-gray-200">Daftar</button>
                        </div>
                    </div>
                </form>

                <!-- Tabel Kunjungan -->
                <h3 class="text-xl font-bold mt-8 mb-4">Daftar Kunjungan</h3>
                <table class="min-w-full bg-white border border-gray-300" id="daftarKunjungan">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="p-3 border border-gray-300 text-left text-sm font-semibold">ID Kunjungan</th>
                            <th class="p-3 border border-gray-300 text-left text-sm font-semibold">Nama Lansia</th>
                            <th class="p-3 border border-gray-300 text-left text-sm font-semibold">ID Lansia</th>
                            <th class="p-3 border border-gray-300 text-left text-sm font-semibold">Status Kunjungan</th>
                            <th class="p-3 border border-gray-300 text-left text-sm font-semibold">Jadwal Kunjungan</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @foreach ($kunjungan as $kunjungan)
                        <tr>
                            <td class="p-3 border border-gray-300 text-left text-sm">{{ $kunjungan->id_kunjungan }}</td>
                            <td class="p-3 border border-gray-300 text-left text-sm">{{ $kunjungan->lansia->nama }}</td>
                            <td class="p-3 border border-gray-300 text-left text-sm">{{ $kunjungan->id_lansia }}</td>
                            <td class="p-3 border border-gray-300 text-left text-sm">Sudah Daftar</td>
                            <td class="p-3 border border-gray-300 text-left text-sm">{{ $kunjungan->tanggal_kunjungan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="bg-blue-600 text-white text-center py-4">
        ©️ 2024 ALL RIGHTS RESERVED
    </footer>
</body>
</html>