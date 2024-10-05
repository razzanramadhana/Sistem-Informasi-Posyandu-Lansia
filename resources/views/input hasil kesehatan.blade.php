<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Posyandu Lansia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tambahkan SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex flex-col min-h-screen">
        <header class="bg-blue-600 text-white p-5 flex justify-between items-center">
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
                        <li>
                            <a href="jadwal-nakes" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Jadwal Nakes</a>
                        </li>
                        <li>
                            <a href="input-hasil-kesehatan" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Input Hasil Kesehatan</a>
                        </li>
                        <li>
                            <a href="rujukan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Rujukan</a>
                        </li>
                        <li>
                            <a href="data-pasien" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Data Pasien</a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <div class="flex-1 p-8 bg-gray-100">
                <h2 class="text-2xl font-bold mb-6">Hasil Kesehatan</h2>
                
                <div class="space-y-4">
                    <!-- Form Input -->
                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Pilih Bulan:</label>
                        <select class="w-full p-2 border border-gray-300 rounded-lg">
                            <option>Januari</option>
                            <!-- Tambahkan bulan lainnya -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Pilih Tahun:</label>
                        <select class="w-full p-2 border border-gray-300 rounded-lg">
                            <option>2024</option>
                            <!-- Tambahkan tahun lainnya -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Pilih Lansia:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Tanggal Check Up:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Tekanan Darah:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Berat Badan:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Tinggi Badan:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Gula Darah:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Kolesterol:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Komentar dari Nakes:</label>
                        <textarea class="w-full p-2 border border-gray-300 rounded-lg h-24"></textarea>
                    </div>

                    <!-- Button for "Submit" -->
                    <div class="flex items-center">
                        <button id="submit" class="bg-blue-600 text-white py-2 px-4 rounded transition duration-300 transform hover:bg-blue-700 hover:scale-105">
                            <p>Submit</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-blue-600 text-white text-center py-4">
        © 2024 ALL RIGHTS RESERVED
    </footer>

    <!-- SweetAlert Script -->
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
