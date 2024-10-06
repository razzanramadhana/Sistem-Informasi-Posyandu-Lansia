<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($rujukan) ? 'Edit' : 'Tambah' }} Rujukan</title>
    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">{{ isset($rujukan) ? 'Edit' : 'Tambah' }} Rujukan</h1>

        <form action="{{ route('rujukan.update', $rujukan->id_rujukan) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="status" class="block text-gray-700 mb-2">Status Rujukan</label>
                <input type="text" id="status" name="status" value="{{ old('status', $rujukan->status ?? '') }}" class="w-full p-3 border border-gray-300 rounded" placeholder="Masukkan status rujukan">
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update</button>
        </form>
    </div>
</body>
</html>
