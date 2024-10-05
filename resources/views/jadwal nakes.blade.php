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
        <header class="bg-blue-600 text-white p-5 flex justify-between items-center ">
            <a href="dashboard-nakes" class="text-xl">
                <h1>Sistem Informasi Posyandu Lansia Terpadu</h1>
            </a>
            <a href="/" class="text-white font-bold">Log Out</a>
        </header>

        <div class="flex flex-1">
            <aside class="bg-white w-64 p-5 shadow-md">
                <div class="text-center mb-8">
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4"></div>
                    <h2 class="text-lg font-bold">NAMA LENGKAP</h2>
                    <p class="text-gray-500 text-sm">ID NAKES<br>Perawat Posyandu</p>
                </div>

                <nav>
                    <ul class="space-y-4">
                        <li><a href="jadwal-nakes" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Jadwal Nakes</a></li>
                        <li><a href="input-hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Input Hasil Kesehatan</a></li>
                        <li><a href="rujukan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Rujukan</a></li>
                        <li>
                            <a href="data-pasien" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Data Pasien</a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <div class="flex-1 p-8 bg-gray-100">
                <h2 class="text-2xl font-bold mb-4">Jadwal Nakes</h2>
                <p class="text-gray-600 mb-6">September 2024</p>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Hari</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Tanggal</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Jam</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Pasien</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-gray-50 hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">Senin</td>
                                <td class="p-3 border border-gray-300">2/09/2024</td>
                                <td class="p-3 border border-gray-300">07:00 - 9:00 am</td>
                                <td class="p-3 border border-gray-300">Ahmad Fajar Pratama<br>Siti Melati Aisyah<br>Rian Dwi Septiara</td>
                            </tr>
                            <tr class="bg-white hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">Rabu</td>
                                <td class="p-3 border border-gray-300">4/09/2024</td>
                                <td class="p-3 border border-gray-300">07:00 - 9:00 am</td>
                                <td class="p-3 border border-gray-300">Nural Ayu Permata</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">Jumat</td>
                                <td class="p-3 border border-gray-300">6/09/2024</td>
                                <td class="p-3 border border-gray-300">10:00 - 12:00 am</td>
                                <td class="p-3 border border-gray-300">Dian Citra Ramadhani<br>Aditya Bayu Putra</td>
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
