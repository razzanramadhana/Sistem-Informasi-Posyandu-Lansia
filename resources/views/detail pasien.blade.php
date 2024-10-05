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
            <a href="/dashboard-nakes" class="text-xl">
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
                    <li>
                            <a href="jadwal-nakes" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Jadwal Nakes</a>
                        </li>
                        <li>
                            <a href="input-hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Input Hasil Kesehatan</a>
                        </li>
                        <li>
                            <a href="rujukan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Rujukan</a>
                        </li>
                        <li>
                            <a href="data-pasien" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Data Pasien</a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Content -->
            <div class="flex-1 p-8 bg-gray-50">
                <h2 class="text-2xl font-bold mb-6">Detail Profil Lansia</h2>
                
                <div class="flex flex-col md:flex-row gap-8 items-start">
                    <!-- Avatar Lansia -->
                    <div class="w-32 h-32 bg-gray-300 rounded-full"></div>

                    <!-- Detail Lansia -->
                    <div class="text-lg space-y-4">
                        <p><span class="font-bold">Nama Lansia:</span> Ahmad Fajar Pratama</p>
                        <p><span class="font-bold">NIK:</span> 345678XXXX</p>
                        <p><span class="font-bold">Nama Wali:</span> Siti Nurhaliza Ahmad</p>
                        <p><span class="font-bold">Umur:</span> 88 Tahun</p>
                        <p><span class="font-bold">Tanggal Lahir:</span> 1 Januari 1936</p>
                        <p><span class="font-bold">Jenis Kelamin:</span> Laki-laki</p>
                        <p><span class="font-bold">Nomor Telepon:</span> 08123456789</p>
                        <p><span class="font-bold">Alamat:</span> Jl. Melati No. 10, Jakarta</p>
                        <p><span class="font-bold">Alergi Obat:</span> Penicillin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
