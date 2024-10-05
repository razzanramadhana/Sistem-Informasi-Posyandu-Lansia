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

        <!-- Header -->
        <header class="bg-blue-600 text-white p-5 flex justify-between items-center">
            <a href="dashboard-nakes" class="text-xl">
                <h1>Sistem Informasi Posyandu Lansia Terpadu</h1>
            </a>
            <a href="/" class="text-white font-bold">Log Out</a>
        </header>

        <!-- Main Content -->
        <div class="flex flex-1">

            <!-- Sidebar -->
            <aside class="bg-white w-64 p-5 shadow-md">
                <div class="text-center mb-8">
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4"></div>
                    <h2 class="text-lg font-bold">NAMA LENGKAP</h2>
                    <p class="text-gray-500 text-sm">ID NAKES<br>Perawat Posyandu</p>
                </div>
                <nav>
                    <ul class="space-y-4">
                        <li><a href="jadwal-nakes" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Jadwal Nakes</a></li>
                        <li><a href="input-hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Input Hasil Kesehatan</a></li>
                        <li><a href="rujukan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Rujukan</a></li>
                        <li><a href="data-pasien" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Data Pasien</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Content Section -->
            <div class="flex-1 p-8 bg-gray-100">
                <h2 class="text-2xl font-bold mb-4">Data Pasien</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Id Lansia</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Nama Lansia</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Jenis Kelamin</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Nama Wali</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Diagnosa</th> <!-- Ganti Umur dengan Diagnosa -->
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($dataLansia as $lansia)
                            <tr class="bg-gray-50 hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">{{ $lansia->id_lansia }}</td>
                                <td class="p-3 border border-gray-300">{{ $lansia->nama }}</td>
                                <td class="p-3 border border-gray-300">{{ $lansia->jenis_kelamin }}</td>
                                <td class="p-3 border border-gray-300">{{ $lansia->nama_wali }}</td>
                                <td class="p-3 border border-gray-300">{{ $lansia->diagnosa }}</td> <!-- Menampilkan Diagnosa -->
                                <td class="p-3 border border-gray-300">
                                    <a href="{{ route('detail-pasien', $lansia->id_lansia) }}"><button class="bg-yellow-500 text-white py-1 px-3 rounded-lg hover:bg-yellow-600 transition duration-200 ease-in-out">Detail</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <footer class="bg-blue-600 text-white text-center py-4">
        ©️ 2024 ALL RIGHTS RESERVED
    </footer>

</body>
</html>