<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($rujukan) ? 'Edit' : 'Tambah' }} Rujukan</title>
    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add jQuery -->
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">{{ isset($rujukan) ? 'Edit' : 'Tambah' }} Rujukan</h1>

        <form action="{{ isset($rujukan) ? route('rujukan.update', $rujukan->id_rujukan) : route('rujukan.store') }}" method="POST">
            @csrf
            @if(isset($rujukan))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label for="nama_lansia" class="block text-gray-700 mb-2">Pilih Nama Lansia</label>
                <select id="nama_lansia" name="id_lansia" class="w-full p-3 border border-gray-300 rounded">
                    <option value="">-- Pilih Nama Lansia --</option>
                    @foreach($lansiaList as $lansia)
                        <option value="{{ $lansia->id_lansia }}" {{ old('id_lansia', $rujukan->id_lansia ?? '') == $lansia->id_lansia ? 'selected' : '' }}>{{ $lansia->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="rumah_sakit" class="block text-gray-700 mb-2">Pilih Rumah Sakit</label>
                <select id="rumah_sakit" name="id_rumah_sakit" class="w-full p-3 border border-gray-300 rounded">
                    <option value="">-- Pilih Rumah Sakit --</option>
                    @foreach($rumahSakitList as $rumahSakit)
                        <option value="{{ $rumahSakit->id_rumah_sakit }}" {{ old('id_rumah_sakit', $rujukan->id_rumah_sakit ?? '') == $rumahSakit->id_rumah_sakit ? 'selected' : '' }}>{{ $rumahSakit->nama_rumah_sakit }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-700 mb-2">Status</label>
                <input type="text" id="status" name="status_rujukan" value="{{ old('status_rujukan', $rujukan->status_rujukan ?? '') }}" class="w-full p-3 border border-gray-300 rounded" placeholder="Masukkan Status">
            </div>

            <button type="submit" class="bg-blue-500 text-white p-3 rounded">Submit</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#nama_lansia').change(function() {
                var id_lansia = $(this).val();

                // Clear the kunjungan dropdown
                $('#kunjungan').empty();
                $('#kunjungan').append('<option value="">-- Pilih Kunjungan --</option>');

                if (id_lansia) {
                    $.ajax({
                        url: '{{ route('rujukan.fetchKunjungan') }}',
                        type: 'GET',
                        data: { id_lansia: id_lansia },
                        success: function(data) {
                            // If kunjungan data is returned
                            if (data.length > 0) {
                                // Populate the kunjungan dropdown
                                $.each(data, function(index, kunjungan) {
                                    $('#kunjungan').append('<option value="' + kunjungan.id_kunjungan + '">' + kunjungan.tanggal_kunjungan + '</option>');
                                });
                                
                                // Automatically select the first kunjungan
                                $('#kunjungan').val(data[0].id_kunjungan);
                            }
                        },
                        error: function(xhr) {
                            console.error('Error fetching kunjungan:', xhr);
                        }
                    });
                }
            });
        });
    </script>

</body>
</html>
