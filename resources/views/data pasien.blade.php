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
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Umur</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Jenis Kelamin</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Nama Wali</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-gray-50 hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">34567XXXX</td>
                                <td class="p-3 border border-gray-300">Ahmad Fajar Pratama</td>
                                <td class="p-3 border border-gray-300">88</td>
                                <td class="p-3 border border-gray-300">Laki - Laki</td>
                                <td class="p-3 border border-gray-300">Siti Nurhaliza Ahmad</td>
                                <td class="p-3 border border-gray-300">
                                    <a href="detail-pasien"><button class="bg-yellow-500 text-white py-1 px-3 rounded-lg hover:bg-yellow-600 transition duration-200 ease-in-out">Detail</button></a>
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">34566XXXX</td>
                                <td class="p-3 border border-gray-300">Siti Melati Aisyah</td>
                                <td class="p-3 border border-gray-300">75</td>
                                <td class="p-3 border border-gray-300">Perempuan</td>
                                <td class="p-3 border border-gray-300">Siti Nurhaliza Ahmad</td>
                                <td class="p-3 border border-gray-300">
                                    <a href="detail-pasien"><button class="bg-yellow-500 text-white py-1 px-3 rounded-lg hover:bg-yellow-600 transition duration-200 ease-in-out">Detail</button></a>
                                </td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">34565XXXX</td>
                                <td class="p-3 border border-gray-300">Rian Dwi Saputra</td>
                                <td class="p-3 border border-gray-300">81</td>
                                <td class="p-3 border border-gray-300">Laki - Laki</td>
                                <td class="p-3 border border-gray-300">Budi Santoso Prabowo</td>
                                <td class="p-3 border border-gray-300">
                                    <a href="detail-pasien"><button class="bg-yellow-500 text-white py-1 px-3 rounded-lg hover:bg-yellow-600 transition duration-200 ease-in-out">Detail</button></a>
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">34568XXXX</td>
                                <td class="p-3 border border-gray-300">Nurul Ayu Permata</td>
                                <td class="p-3 border border-gray-300">77</td>
                                <td class="p-3 border border-gray-300">Perempuan</td>
                                <td class="p-3 border border-gray-300">Rina Wulandari Sari</td>
                                <td class="p-3 border border-gray-300">
                                    <a href="detail-pasien"><button class="bg-yellow-500 text-white py-1 px-3 rounded-lg hover:bg-yellow-600 transition duration-200 ease-in-out">Detail</button></a>
                                </td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">34560XXXX</td>
                                <td class="p-3 border border-gray-300">Dian Citra Ramadhani</td>
                                <td class="p-3 border border-gray-300">73</td>
                                <td class="p-3 border border-gray-300">Perempuan</td>
                                <td class="p-3 border border-gray-300">Andi Prabowo Setiawan</td>
                                <td class="p-3 border border-gray-300">
                                    <a href="detail-pasien"><button class="bg-yellow-500 text-white py-1 px-3 rounded-lg hover:bg-yellow-600 transition duration-200 ease-in-out">Detail</button></a>
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">34561XXXX</td>
                                <td class="p-3 border border-gray-300">Aditya Bayu Putra</td>
                                <td class="p-3 border border-gray-300">90</td>
                                <td class="p-3 border border-gray-300">Laki - Laki</td>
                                <td class="p-3 border border-gray-300">Lestari Putri Dewi Sari</td>
                                <td class="p-3 border border-gray-300">
                                    <a href="detail-pasien"><button class="bg-yellow-500 text-white py-1 px-3 rounded-lg hover:bg-yellow-600 transition duration-200 ease-in-out">Detail</button></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="bg-blue-600 text-white text-center py-4">
        © 2024 ALL RIGHTS RESERVED
    </footer>
</body>
</html>
