<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    <!-- Import Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans" style="font-family: 'Poppins', sans-serif;">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-semibold">Katalog</a>
        </div>
    </nav>

    <!-- Search and Sort Form -->
    <div class="container mx-auto p-6">
        <form action="{{ route('katalog.index') }}" method="GET" class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex items-center space-x-4">
                <!-- Search Input -->
                <input type="text" name="search" placeholder="Search..." value="{{ $search ?? '' }}"
                    class="px-4 py-2 border rounded-md w-1/3">

                <!-- Category Select -->
                <select name="category" class="px-4 py-2 border rounded-md">
                    <option value="all" {{ $category == 'all' ? 'selected' : '' }}>All</option>
                    <option value="buku" {{ $category == 'buku' ? 'selected' : '' }}>Buku</option>
                    <option value="jurnal" {{ $category == 'jurnal' ? 'selected' : '' }}>Jurnal</option>
                    <option value="cd" {{ $category == 'cd' ? 'selected' : '' }}>CD</option>
                    <option value="koran" {{ $category == 'koran' ? 'selected' : '' }}>Koran</option>
                    <option value="skripsi" {{ $category == 'skripsi' ? 'selected' : '' }}>Skripsi</option>
                </select>

                <!-- Sort Select -->
                <select name="sort" class="px-4 py-2 border rounded-md">
                    <option value="asc" {{ $sort == 'asc' ? 'selected' : '' }}>Ascending</option>
                    <option value="desc" {{ $sort == 'desc' ? 'selected' : '' }}>Descending</option>
                </select>

                <!-- Submit Button -->
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md">Apply</button>
            </div>
        </form>
    </div>

    <!-- Display Items Table -->
    <div class="container mx-auto p-6">
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="border-b bg-blue-100">
                    <th class="px-4 py-2 text-left text-gray-700">Judul</th>
                    <th class="px-4 py-2 text-left text-gray-700">Penulis</th>
                    <th class="px-4 py-2 text-left text-gray-700">Penerbit</th>
                    <th class="px-4 py-2 text-left text-gray-700">Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $item->judul }}</td>
                        <td class="px-4 py-2">{{ $item->penulis }}</td>
                        <td class="px-4 py-2">{{ $item->penerbit }}</td>
                        <td class="px-4 py-2">{{ $item->tahun_terbit }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
