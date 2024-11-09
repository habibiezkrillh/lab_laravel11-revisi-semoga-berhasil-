<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
</head>
<body>
    <h1>Katalog</h1>

    <!-- Search and Sort Form -->
    <form action="{{ route('katalog.index') }}" method="GET">
        <input type="text" name="search" placeholder="Search..." value="{{ $search ?? '' }}">
        <select name="category">
            <option value="all" {{ $category == 'all' ? 'selected' : '' }}>All</option>
            <option value="buku" {{ $category == 'buku' ? 'selected' : '' }}>Buku</option>
            <option value="jurnal" {{ $category == 'jurnal' ? 'selected' : '' }}>Jurnal</option>
            <option value="cd" {{ $category == 'cd' ? 'selected' : '' }}>CD</option>
            <option value="koran" {{ $category == 'koran' ? 'selected' : '' }}>Koran</option>
            <option value="skripsi" {{ $category == 'skripsi' ? 'selected' : '' }}>Skripsi</option>
        </select>
        <select name="sort">
            <option value="asc" {{ $sort == 'asc' ? 'selected' : '' }}>Ascending</option>
            <option value="desc" {{ $sort == 'desc' ? 'selected' : '' }}>Descending</option>
        </select>
        <button type="submit">Apply</button>
    </form>

    <!-- Display Items -->
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->penulis }}</td>
                    <td>{{ $item->penerbit }}</td>
                    <td>{{ $item->tahun_terbit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
