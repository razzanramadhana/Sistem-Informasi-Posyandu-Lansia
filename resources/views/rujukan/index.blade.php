<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Rujukan</title>
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
                        <li><a href="rujukan" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Rujukan</a></li>
                        <li><a href="data-pasien" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Data Pasien</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Content Section -->
            <div class="flex-1 p-8 bg-gray-100">
                <h2 class="text-2xl font-bold mb-4">Daftar Rujukan</h2>

                <!-- Success message -->
                @if(session('success'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Button to create new Rujukan -->
                <div class="mb-4">
                    <a href="{{ route('rujukan.create') }}">
                        <button class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200 ease-in-out">
                            Buat Rujukan Baru
                        </button>
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Id Rujukan</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Nama Lansia</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Id Lansia</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Status Rujukan</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Rumah Sakit yang Ditujukan</th>
                                <th class="bg-gray-200 p-3 border border-gray-300 text-left text-sm font-semibold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rujukanList as $rujukan)
                            <tr class="bg-gray-50 hover:bg-yellow-100 transition duration-200 ease-in-out">
                                <td class="p-3 border border-gray-300">{{ $rujukan->id_rujukan }}</td>
                                <td class="p-3 border border-gray-300">
                                    <a href="{{ route('lansia.showdarirujukan', $rujukan->lansia->id_lansia) }}" class="text-blue-500 hover:underline">
                                        {{ $rujukan->lansia->nama }}
                                    </a>
                                </td>
                                <td class="p-3 border border-gray-300">{{ $rujukan->lansia->id_lansia }}</td>
                                <td class="p-3 border border-gray-300">{{ $rujukan->status_rujukan }}</td>
                                <td class="p-3 border border-gray-300">{{ $rujukan->rumah_sakit->nama_rumah_sakit }}</td>
                                <td class="p-3 border border-gray-300">
                                    <a href="{{ route('rujukan.edit', $rujukan->id_rujukan) }}">
                                        <button class="bg-blue-500 text-white py-1 px-3 rounded-lg hover:bg-blue-600 transition duration-200 ease-in-out">Edit</button>
                                    </a>
                                    <form action="{{ route('rujukan.destroy', $rujukan->id_rujukan) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded-lg hover:bg-red-600 transition duration-200 ease-in-out">Delete</button>
                                    </form>
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
