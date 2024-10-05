<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Posyandu Lansia</title>
    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex flex-col h-screen">
        <header class="bg-blue-700 text-white p-5 flex justify-between items-center">
            <a href="dashboard-nakes" class="text-xl">
                <h1>Sistem Informasi Posyandu Lansia Terpadu</h1>
            </a>
            <a href="/" class="text-white text-lg">Log Out</a>
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
                        <li><a href="jadwal-nakes" class="text-black block p-3 rounded-lg hover:bg-yellow-500 transition duration-300 ease-in-out">Jadwal Nakes</a></li>
                        <li><a href="input-hasil-kesehatan" class="text-black block p-3 rounded-lg hover:bg-yellow-500 transition duration-300 ease-in-out">Input Hasil Kesehatan</a></li>
                        <li><a href="rujukan" class="text-black block bg-yellow-500 p-3 rounded-lg">Rujukan</a></li>
                        <li>
                            <a href="data-pasien" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Data Pasien</a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <div class="flex-1 p-5">
                <h2 class="text-2xl mb-6">Rujukan Pasien</h2>
                
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 mb-2">Nama Lansia</label>
                    <input type="text" id="nama" placeholder="Masukkan Nama Lansia" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500 transition duration-300">
                </div>

                <div class="mb-4">
                    <label for="nik" class="block text-gray-700 mb-2">NIK</label>
                    <input type="text" id="nik" placeholder="Masukkan NIK" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500 transition duration-300">
                </div>

                <div class="mb-4">
                    <label for="rumahSakit" class="block text-gray-700 mb-2">Pilih Rumah Sakit</label>
                    <select id="rumahSakit" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500 transition duration-300">
                        <option value="">Pilih Rumah Sakit</option>
                        <option value="rs1">Rumah Sakit 1</option>
                        <option value="rs2">Rumah Sakit 2</option>
                        <option value="rs3">Rumah Sakit 3</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="poli" class="block text-gray-700 mb-2">Pilih Poli</label>
                    <select id="poli" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500 transition duration-300">
                        <option value="">Pilih Poli</option>
                        <option value="poli1">Poli Umum</option>
                        <option value="poli2">Poli Gigi</option>
                        <option value="poli3">Poli Mata</option>
                    </select>
                </div>

                <div class="flex items-center">
                    <button id="submit" class="bg-blue-600 text-white py-2 px-4 rounded transition duration-300 transform hover:bg-blue-700 hover:scale-105">
                        <p>Submit</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-blue-600 text-white text-center py-4">
        © 2024 ALL RIGHTS RESERVED
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('submit').addEventListener('click', function () {
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Data berhasil ditambahkan.', 
                    icon: 'success',
                    showConfirmButton: false, 
                    timer: 1500 
                });
            });
        });
    </script>
</body>
</html>
