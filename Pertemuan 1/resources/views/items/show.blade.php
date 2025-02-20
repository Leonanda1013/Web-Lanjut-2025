<!DOCTYPE html> <!-- Menentukan tipe dokumen sebagai HTML -->
<html lang="en"> <!-- Membuka tag HTML dan menetapkan bahasa sebagai Inggris -->
<head> <!-- Bagian kepala dokumen -->
    
    <title>Item List</title> <!-- Menetapkan judul halaman -->
</head>
<body> <!-- Bagian isi halaman -->
    <h1>Items</h1> <!-- Judul utama halaman -->

    @if(session('success')) <!-- Mengecek apakah ada pesan sukses dalam sesi -->
        <p>{{ session('success') }}</p> <!-- Menampilkan pesan sukses jika ada -->
    @endif <!-- Menutup blok kondisi -->

    <a href="{{ route('items.create') }}">Add Item</a> <!-- Link untuk menambahkan item baru -->

    <ul> <!-- Membuka daftar tidak berurut -->
        @foreach($items as $item) <!-- Melakukan iterasi untuk setiap item dalam daftar -->
        <li> <!-- Setiap item ditampilkan dalam elemen daftar -->
            {{ $item->name }} <!-- Menampilkan nama item -->

            <a href="{{ route('items.edit', $item) }}">Edit</a> <!-- Link untuk mengedit item -->

            <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;"> <!-- Form untuk menghapus item, ditampilkan sejajar dengan teks -->
                @csrf <!-- Token keamanan untuk mencegah CSRF (Cross-Site Request Forgery) -->
                @method('DELETE') <!-- Mengubah metode request menjadi DELETE untuk menghapus data -->
                <button type="submit">Delete</button> <!-- Tombol untuk menghapus item -->
            </form>
        </li> <!-- Menutup elemen daftar untuk satu item -->
        @endforeach <!-- Menutup perulangan -->
    </ul> <!-- Menutup daftar tidak berurut -->
</body>
</html> <!-- Menutup tag HTML -->
