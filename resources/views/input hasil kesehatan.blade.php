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

        <!-- Main content -->
        <div class="flex flex-1">
            <!-- Sidebar -->
            <aside class="bg-white w-64 p-5 shadow-md">
                <div class="text-center mb-8">
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4"></div>
                    <h2 class="text-lg font-bold">NAMA LENGKAP</h2>
                    <p class="text-gray-500 text-sm">ID NAKES<br>Perawat Posyandu</p>
                </div>

                <!-- Navigation -->
                <nav>
                    <ul class="space-y-4">
                        <li>
                            <a href="jadwal-nakes" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Jadwal Nakes</a>
                        </li>
                        <li>
                            <a href="input-hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Input Hasil Kesehatan</a>
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

            <!-- Content section -->
            <div class="flex-1 p-8 bg-gray-100">
                <h2 class="text-2xl font-bold mb-6">Input Hasil Kesehatan</h2>

                <!-- Success notification -->
                @if(session('success'))
                    <script>
                        Swal.fire({
                            title: 'Berhasil!',
                            text: '{{ session('success') }}',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    </script>
                @endif

                <!-- Health results input form -->
                <form action="{{ route('input-hasil-kesehatan.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="id_lansia" class="block font-semibold">Pilih Lansia:</label>
                        <select name="id_lansia" required class="w-full p-2 border border-gray-300 rounded-lg">
                            @foreach($lansias as $lansium)
                                <option value="{{ $lansium->id_lansia }}">{{ $lansium->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="id_kunjungan" class="block font-semibold">Pilih Kunjungan:</label>
                        <select name="id_kunjungan" required class="w-full p-2 border border-gray-300 rounded-lg">
                            @foreach($kunjungans as $kunjungan)
                                <option value="{{ $kunjungan->id_kunjungan }}">{{ $kunjungan->tanggal_kunjungan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="berat_badan" class="block font-semibold">Berat Badan (kg):</label>
                        <input type="number" step="0.01" name="berat_badan" required class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group mb-4">
                        <label for="tinggi_badan" class="block font-semibold">Tinggi Badan (cm):</label>
                        <input type="number" step="0.01" name="tinggi_badan" required class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group mb-4">
                        <label for="tekanan_darah" class="block font-semibold">Tekanan Darah (mmHg):</label>
                        <input type="number" step="0.01" name="tekanan_darah" required class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group mb-4">
                        <label for="gula_darah" class="block font-semibold">Gula Darah (mg/dL):</label>
                        <input type="number" step="0.01" name="gula_darah" required class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group mb-6">
                        <label for="kolesterol" class="block font-semibold">Kolesterol (mg/dL):</label>
                        <input type="number" step="0.01" name="kolesterol" required class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200 ease-in-out">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center py-4">
        ©️ 2024 ALL RIGHTS RESERVED
    </footer>
</body>
</html>
